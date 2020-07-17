<template>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    Order <span v-if="order">#{{ order.id }}</span>
                    <div v-else class="spinner-border spinner-app" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Items Quantity:</strong> {{ items.length }}</li>
                        <li class="list-group-item"><strong>Total Price:</strong> $ {{ sumPrice }}</li>
                        <li class="list-group-item"><strong>Total Weight:</strong> {{ sumWeight }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Products
                </div>
                <div class="card-body">
                    <div class="row">
                        <productOrder v-for="product in products" v-bind:product="product" v-bind:orderId="order.id" v-on:clickButton="addItem" :key="product.id"></productOrder>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>
<script>
    import productOrder from './ProductOrderComponent';
    export default {
        data() {
            return {
                products: [],
                loading: true,
                order: null,
                sumPrice: 0.00,
                sumWeight: 0.00,
                items: []
            }
        },
        created() {
            this.axios
                .post('/api/orders')
                .then(response => {
                    this.order = response.data;
                    this.getProducts();
                })
                .finally(() => this.loading = false);
        },
        methods: {
            addItem(product) {
                this.items.push(product);
                this.sumPrice = (parseFloat(this.sumPrice) + parseFloat(product.price)).toFixed(2);
                this.sumWeight = (parseFloat(this.sumWeight) + parseFloat(product.weight)).toFixed(2);
            },
            getProducts(){
                this.axios
                    .get('/api/products')
                    .then(response => {
                        this.products = response.data;
                    });
            }
        },
        components: {productOrder: productOrder}
    }
</script>

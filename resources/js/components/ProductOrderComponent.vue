<template>
    <div class="col-md-4 col-product-item">
        <div class="card text-center">
            <div class="card-header">
                {{ product.name }}
            </div>
            <div class="card-body">
                <h5 class="card-title">$ {{ product.price }}</h5>
                <p class="card-text">Weight: {{ product.weight }}</p>
                <div v-if="loading" class="spinner-border spinner-app" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <button v-else v-on:click="clickItem(product.id)"  v-show="showButton" class="btn btn-primary">Add Item</button>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                loading: false,
                showButton: true,
            }
        },
        methods: {
            clickItem(id){
                let productId = id;
                let orderId = this.orderId;
                this.loading = true;
                this.axios
                    .post('/api/orders/'+orderId+'/products/'+productId)
                    .then(response => {
                        let product = response.data;
                        this.$emit("clickButton", product);
                        this.showButton = false;
                    })
                    .finally(() => {
                        this.loading = false
                    });
            },
        },
        props:['product', 'orderId']
    }
</script>


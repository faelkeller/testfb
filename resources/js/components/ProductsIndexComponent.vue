<template>
    <div class="row">
        <div class="card card-app">
            <div class="card-header">
                All Products
            </div>
            <div class="card-body">

                <router-link to="/order/add">
                    <button type="button" class="btn btn-success btn-app">Add Product</button>
                </router-link>

                <div class="clearfix"></div>

                <div v-if="loading" class="row">
                    <div class="spinner-border spinner-app" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>

                <table v-else class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Weight</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="product in products" :key="product.id">
                        <th scope="row">{{ product.id }}</th>
                        <td>{{ product.name }}</td>
                        <td>{{ product.price }}</td>
                        <td>{{ product.weight }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                products: [],
                loading: true
            }
        },
        created() {
            this.axios
                .get('/api/products')
                .then(response => {
                    this.products = response.data;
                })
                .finally(() => this.loading = false);
        },
    }
</script>

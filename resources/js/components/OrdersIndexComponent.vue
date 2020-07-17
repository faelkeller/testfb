<template>
    <div class="row">
        <div class="card card-app">
            <div class="card-header">
                All Orders
            </div>
            <div class="card-body">

                <router-link to="/product/add">
                    <button type="button" class="btn btn-success btn-app">Add Order</button>
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
                        <th scope="col">Status</th>
                        <th scope="col">Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="order in orders" :key="order.id">
                        <th scope="row">{{ order.id }}</th>
                        <td>{{ order.status }}</td>
                        <td>{{ order.created_at }}</td>
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
                orders: [],
                loading: true
            }
        },
        created() {
            this.axios
                .get('/api/orders')
                .then(response => {
                    this.orders = response.data;
                })
                .finally(() => this.loading = false);
        },
    }
</script>

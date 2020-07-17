<template>
    <div class="row">
        <div class="card card-app">
            <div class="card-header">
                Add Product
            </div>
            <div class="card-body">
                <form @submit.prevent="addProduct">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" v-model="product.name" />
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" name="price" v-model="product.price" />
                        <small id="priceHelp" class="form-text text-muted">Example: 102.50</small>
                    </div>
                    <div class="form-group">
                        <label for="weight">Weight</label>
                        <input type="text" class="form-control" id="weight" name="weight" v-model="product.weight"/>
                        <small id="weightHelp" class="form-text text-muted">Example: 72.30</small>
                    </div>
                    <div v-if="loading" class="row">
                        <div class="spinner-border spinner-app" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                    <button v-else type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                product: {},
                loading: false
            }
        },
        methods: {
            addProduct() {
                this.loading = true
                this.axios
                    .post('/api/products', this.product)
                    .then(response => (
                        this.$router.push({name: 'productsindex'})
                        // console.log(response.data)
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>

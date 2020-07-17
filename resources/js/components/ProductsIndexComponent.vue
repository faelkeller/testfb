<template>
    <div class="container">
        <div class="title m-b-md">
            Products List
        </div>

        <a href="/products/add">
            <button type="button" style="margin-bottom: 10px; float: left;" class="btn btn-success">+ Add Product</button>
        </a>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Weight</th>
            </tr>
            </thead>
            <tbody>
                <tr v-for="product in JSON.parse(products)" :key="product.id">
                    <th scope="row">{{ product.id }}</th>
                    <td>{{ product.name }}</td>
                    <td>{{ product.price }}</td>
                    <td>{{ product.weight }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
    export default {
        props: ['products']
    }
</script>

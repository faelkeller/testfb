<template>
    <div class="container">
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

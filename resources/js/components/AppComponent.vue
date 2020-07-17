<template>
    <section>
        <div class="title m-b-md">
            Manage Products and Orders
        </div>

        <div class="links">
            <router-link to="/products">Products</router-link>
            <router-link to="/orders">Orders</router-link>
        </div>

        <router-view></router-view>

    </section>
</template>
<script>
    export default {}
</script>

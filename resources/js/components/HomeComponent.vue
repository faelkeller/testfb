<template>
    <section>
        <div class="title m-b-md">
            Cadastro de Produtos e Pedidos
        </div>

        <div class="links">
            <a :href="url + '/products'">Produtos</a>
            <a :href="url + '/orders'">Pedidos</a>
        </div>
    </section>
</template>
<script>
    export default {
        props: ['url']
    }
</script>

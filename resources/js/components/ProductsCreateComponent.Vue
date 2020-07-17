<template>
    <div class="container">
        <div class="title m-b-md">
            Product Create
        </div>

        <form action="products" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" />
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" />
                <small id="priceHelp" class="form-text text-muted">Example: 102.50</small>
            </div>
            <div class="form-group">
                <label for="weight">Weight</label>
                <input type="text" class="form-control" id="weight" name="weight" />
                <small id="weightHelp" class="form-text text-muted">Example: 72.30</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</template>
<script>
    export default {
        props: ['products']
    }
</script>

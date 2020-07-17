<template>
    <div class="row">
        <div class="card card-app">
            <div class="card-header">
                Add Product
            </div>
            <div class="card-body">
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
                    <button type="button" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
    export default {}
</script>

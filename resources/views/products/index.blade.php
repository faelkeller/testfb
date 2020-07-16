@extends("layouts.template")

@section("content")
    <div id="app">
        <products-index-component products="{{ $products }}"></products-index-component>
    </div>
@stop

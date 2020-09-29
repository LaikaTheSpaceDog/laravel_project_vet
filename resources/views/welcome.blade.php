@extends("app")
@section("title"){{
    "Welcome"
}}@endsection

@section("content")
<div class="jumbotron">
    <h3 class="display-3 text-center">{{ "{$greeting}, welcome to our pet owner database" }}</h3>
</div>
@endsection
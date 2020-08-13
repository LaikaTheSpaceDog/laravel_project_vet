@extends("app")
@section("title"){{
    "Welcome"
}}@endsection

@section("content")
    <h1 class="display-1 text-center">Welcome traveller</h1>
    <h3 class="text-center">{{ $greeting }}</h3>
@endsection
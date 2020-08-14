@extends("app")
@section("title"){{
    "Welcome"
}}@endsection

@section("content")
    <h3 class="display-3 text-center">{{ "{$greeting}, welcome to our pet owner database" }}</h3>
@endsection
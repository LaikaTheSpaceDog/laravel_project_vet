@extends("app")
@section("title"){{
    "Welcome"
}}@endsection

@section("content")
    <h2 class="display-2 text-center">{{ "{$greeting}, traveller" }}</h2>
@endsection
@extends("app")
@section("title"){{
    "Animals"
}}@endsection

@section("content")
    <h1 class="display-1 text-center">Animals List</h1>
    @if (count($animals) >= 1)
        @include("partials/animalsList")
    @else 
        <p class="text-center">No records to display :(</p>
    @endif
@endsection
@extends("app")
@section("title"){{
    "Animals"
}}@endsection

@section("content")
    <h3 class="display-3 text-center">Animals List</h3>
    @if (count($animals) >= 1)
        @include("partials/animalsList")
    @else 
        <p class="text-center">No records to display :(</p>
    @endif
@endsection
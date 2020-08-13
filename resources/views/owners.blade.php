    @extends("app")
    @section("title"){{
        "Owners"
    }}@endsection
    
    @section("content")
        <h1 class="display-1 text-center">Owners List</h1>
        @if (count($owners) >= 1)
            @include("partials/list")
        @else 
            <p class="text-center">No records to display :(</p>
        @endif
    @endsection
    @extends("app")
    @section("title"){{
        "Owners"
    }}@endsection
    
    @section("content")
        <h3 class="display-3 text-center">Owners List</h3>
        @if (count($owners) >= 1)
            @include("partials/list")
        @else 
            <p class="text-center">No records to display :(</p>
        @endif
    @endsection
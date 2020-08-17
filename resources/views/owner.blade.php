@extends("app")
@section("title"){{
    "Owner"
}}@endsection

@section("content")
<div class="card">
    <h2 class="card-header text-center">{{ "{$owner->first_name} {$owner->last_name}" }}</h2>
    <article class="card-body d-flex flex-column align-items-center">
        <p class="mb-1 text-center">{!!"<strong>Phone:</strong> {$owner->telephone}, <strong>Email:</strong> {$owner->email}, <strong>Address:</strong> {$owner->address_1}, {$owner->address_2}, {$owner->town}, {$owner->postcode}, <strong>Created at:</strong> {$owner->created_at}, <strong>Updated at:</strong> {$owner->updated_at}"!!}</p>
        <a href="/owners/{{ $owner->id }}/edit" class="btn btn-primary btn-sm">Edit Owner</a>
    </article>
</div>
@if($owner->animals->isNotEmpty())
    <div class="list-group card">
        <h2 class="card-header text-center">List of Animals</h2>
        @foreach ($owner->animals as $animal)
            <div class="w-100 card-body">
                <h5 class="mb-1 text-center w-100">{{ $animal->name }}</h5>
                <p class="mb-1 text-center">{!! "<strong>Type:</strong> {$animal->type}, <strong>Date of Birth:</strong> {$animal->dob}, <strong>Weight (kg):</strong> {$animal->weight_kg}, <strong>Height (metres):</strong> {$animal->height_m}, <strong>Biteyness:</strong> {$animal->biteyness}, <strong>Owner ID:</strong> {$animal->owner_id}"!!}</p>
            </div>
        @endforeach
    </div>
@else
    <p class="alert alert-secondary">No animals found</p>
@endif
@section("form")
    @include("partials/animalForm")
@endsection

@endsection
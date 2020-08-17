@extends("app")
@section("title"){{
    "Animal"
}}@endsection

@section("content")
<div class="card">
    <h2 class="card-header text-center">{{ "{$animal->name}" }}</h2>
    <article class="card-body d-flex flex-column align-items-center">
        <p class="mb-1 text-center">{!! "<strong>Type:</strong> {$animal->type}, <strong>Date of Birth:</strong> {$animal->dob}, <strong>Weight (kg):</strong> {$animal->weight_kg}, <strong>Height (metres):</strong> {$animal->height_m}, <strong>Biteyness:</strong> {$animal->biteyness}, <strong>Owner ID:</strong> {$animal->owner_id}"!!}</p>
        <a href="/animals/{{ $animal->id }}/edit" class="btn btn-primary btn-sm">Edit Animal</a>
    </article>
</div>
@endsection
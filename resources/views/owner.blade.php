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
@endsection
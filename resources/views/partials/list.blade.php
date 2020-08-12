        <div class="list-group">
            @foreach (App\Owner::all() as $owner)
                <a href="/owners/{{ $owner }}" class="list-group-item list-group-item-action">
                    <h5 class="mb-1 text-center">{{ "{$owner->first_name} {$owner->last_name}" }}</h5>
                    <p class="mb-1 text-center">{!!"<strong>Phone:</strong> {$owner->telephone}, <strong>Email:</strong> {$owner->email}, <strong>Address:</strong> {$owner->address_1}, {$owner->address_2}, {$owner->town}, {$owner->postcode}, <strong>Created at:</strong> {$owner->created_at}, <strong>Updated at:</strong> {$owner->updated_at}"!!}</p>
                </a>
            @endforeach
        </div>
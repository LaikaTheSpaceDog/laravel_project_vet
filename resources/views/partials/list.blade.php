        <div class="list-group">
            @foreach (App\Owner::all() as $owner)
                <a href="/owners/{{ $owner }}" class="list-group-item list-group-item-action">
                    <h5 class="mb-1 text-center">{{ "{$owner->first_name} {$owner->last_name}" }}</h5>
                    <p class="mb-1 text-center">{{"Phone: {$owner->telephone}, Email: {$owner->email}, Address: {$owner->address_1}, {$owner->address_2}, {$owner->town}, {$owner->postcode}, Created at: {$owner->created_at}, Updated at:{$owner->updated_at}"}}</p>
                </a>
            @endforeach
        </div>
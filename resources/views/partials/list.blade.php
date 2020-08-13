        <div class="list-group">
            @foreach ($owners as $owner)
                <a href="/owners/{{ $owner->id }}" class="list-group-item list-group-item-action">
                    <h5 class="mb-1 text-center">{{ "{$owner->first_name} {$owner->last_name}" }}</h5>
                </a>
            @endforeach
        </div>
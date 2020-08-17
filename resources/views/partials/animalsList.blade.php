<div class="list-group">
    @foreach ($animals as $animal)
        <a href="/animals/{{ $animal->id }}" class="list-group-item list-group-item-action">
            <h5 class="mb-1 text-center">{{ "{$animal->name}" }}</h5>
            <h6 class="mb-1 text-center">{{ "{$animal->type}" }}</h6>
        </a>
    @endforeach
</div>
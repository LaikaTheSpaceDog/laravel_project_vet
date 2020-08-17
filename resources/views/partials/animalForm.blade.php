<h2 class="h2 card-header text-center">Add an animal</h2>
<form class="form card" method="post">
    @csrf
    <fieldset class="card-body">
        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" name="name" class="form-control  @error('name') is-invalid @enderror"value="@if (old("name")){{ old("name") }}@else{{ $animal->name ?? '' }}@endif"/>
            @error('name')
                <p class="invalid-feedback">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="type">Type (e.g. dog)</label>
            <input id="type"name="type"class="form-control @error('type') is-invalid @enderror"value="@if (old("type")){{ old("type") }}@else{{ $animal->type ?? '' }}@endif">
            @error('type')
                <p class="invalid-feedback">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="dob">Date of birth</label>
            <input id="dob"name="dob"class="form-control @error('dob') is-invalid @enderror"value="@if (old("dob")){{ old("dob") }}@else{{ $animal->dob ?? '' }}@endif">
            @error('dob')
                <p class="invalid-feedback">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="weight_kg">Weight (kg)</label>
            <input id="weight_kg"name="weight_kg"class="form-control @error('weight_kg') is-invalid @enderror"value="@if (old("weight_kg")){{ old("weight_kg") }}@else{{ $animal->weight_kg ?? '' }}@endif">
            @error('weight_kg')
                <p class="invalid-feedback">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="height_m">Height (metres)</label>
            <input id="height_m"name="height_m"class="form-control @error('height_m') is-invalid @enderror"value="@if (old("height_m")){{ old("height_m") }}@else{{ $animal->height_m ?? '' }}@endif">
            @error('height_m')
                <p class="invalid-feedback">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="biteyness">Biteyness</label>
            <input id="biteyness"name="biteyness"class="form-control @error('biteyness') is-invalid @enderror"value="@if (old("biteyness")){{ old("biteyness") }}@else{{ $animal->biteyness ?? '' }}@endif">
            @error('biteyness')
                <p class="invalid-feedback">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="owner_id">Owner ID</label>
            <input id="owner_id"name="owner_id"class="form-control @error('owner_id') is-invalid @enderror"value="@if (old("owner_id")){{ old("owner_id") }}@else{{ $animal->owner_id ?? '' }}@endif">
            @error('town')
                <p class="invalid-feedback">
                    {{ $message }}
                </p>
            @enderror
        </div>
    </fieldset>
    <div class="card-footer text-right">
        <button class="btn btn-success" type="submit">Submit</button>
    </div>
</form>
<form class="form card" method="post">
    @csrf
    <fieldset class="card-body">
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input id="first_name" name="first_name" class="form-control  @error('first_name') is-invalid @enderror"value="@if (old("first_name")){{ old("first_name") }}@else{{ $owner->first_name ?? '' }}@endif"/>
            @error('first_name')
                <p class="invalid-feedback">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="last_name">Family Name</label>
            <input id="last_name"name="last_name"class="form-control @error('last_name') is-invalid @enderror"value="@if (old("last_name")){{ old("last_name") }}@else{{ $owner->last_name ?? '' }}@endif">
            @error('last_name')
                <p class="invalid-feedback">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email"name="email"class="form-control @error('email') is-invalid @enderror"value="@if (old("email")){{ old("email") }}@else{{ $owner->email ?? '' }}@endif">
            @error('email')
                <p class="invalid-feedback">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="telephone">Phone Number</label>
            <input id="telephone"name="telephone"class="form-control @error('telephone') is-invalid @enderror"value="@if (old("telephone")){{ old("telephone") }}@else{{ $owner->telephone ?? '' }}@endif">
            @error('telephone')
                <p class="invalid-feedback">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="address_1">Address Line 1</label>
            <input id="address_1"name="address_1"class="form-control @error('address_1') is-invalid @enderror"value="@if (old("address_1")){{ old("address_1") }}@else{{ $owner->address_1 ?? '' }}@endif">
            @error('address_1')
                <p class="invalid-feedback">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="address_2">Address Line 2</label>
            <input id="address_2"name="address_2"class="form-control @error('address_2') is-invalid @enderror"value="@if (old("address_2")){{ old("address_2") }}@else{{ $owner->address_2 ?? '' }}@endif">
            @error('address_2')
                <p class="invalid-feedback">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="town">City</label>
            <input id="town"name="town"class="form-control @error('town') is-invalid @enderror"value="@if (old("town")){{ old("town") }}@else{{ $owner->town ?? '' }}@endif">
            @error('town')
                <p class="invalid-feedback">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="postcode">Postcode</label>
            <input id="postcode"name="postcode"class="form-control @error('postcode') is-invalid @enderror"value="@if (old("postcode")){{ old("postcode") }}@else{{ $owner->postcode ?? '' }}@endif">
            @error('postcode')
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
<div>
    <div class="card" id="geoInfo">
        <div class="card-header">
            <h2 class="card-title h4">Geographical information</h2>
        </div>

        <div class="card-body">

            @if (session()->has('message'))
            <div class="alert alert-success mt-3">
                {{ session('message') }}
            </div>
            @endif

            <form wire:submit.prevent="save">
                <!-- Address 1 -->
                <div class="row mb-4">
                    <label for="addressOneLabel" class="col-sm-3 col-form-label form-label">Address 1</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" wire:model="addressOne" id="addressOneLabel" placeholder="Address One" aria-label="Address One">
                        @error('addressOne') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- Address 2 -->
                <div class="row mb-4">
                    <label for="addressTwoLabel" class="col-sm-3 col-form-label form-label">Address 2</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" wire:model="addressTwo" id="addressTwoLabel" placeholder="Address Two" aria-label="Address Two">
                        @error('addressTwo') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- State & Zipcode -->
                <div class="row mb-4">
                    <label for="stateZipcodeLabel" class="col-sm-3 col-form-label form-label">State & Zipcode</label>
                    <div class="col-sm-9">
                        <div class="input-group input-group-sm-vertical">
                            <input type="text" class="form-control" wire:model="state" id="state" placeholder="State">
                            <input type="text" class="form-control" wire:model="zipcode" id="zipcode" placeholder="Zipcode">
                        </div>
                        @error('state') <span class="error">{{ $message }}</span> @enderror
                        @error('zipcode') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- Country -->
                <div class="row mb-4">
                    <label for="countryLabel" class="col-sm-3 col-form-label form-label">Country</label>
                    <div class="col-sm-9">
                        <div class="tom-select-custom">
                            <select class="js-select form-select" wire:model="country" id="countryLabel" data-hs-tom-select-options='{"searchInDropdown": false}'>
                                <option label="empty"></option>
                                <option value="US">United States</option>
                                <option value="UK">United Kingdom</option>
                                <option value="DE">Germany</option>
                                <option value="DK">Denmark</option>
                                <option value="ES">Spain</option>
                                <option value="NL">Netherlands</option>
                                <option value="IT">Italy</option>
                                <option value="CN">China</option>
                            </select>
                        </div>
                        @error('country') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>


        </div>
    </div>

</div>

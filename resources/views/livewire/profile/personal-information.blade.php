<div>
    <div class="card">
        <div class="card-header">
            <h2 class="card-title h4">Personal information</h2>
        </div>

        <div class="card-body">
            @if (session()->has('message'))
            <div class="alert alert-success mt-3">
                {{ session('message') }}
            </div>
            @endif

            <form wire:submit.prevent="save">
                <!-- Full name -->
                <div class="row mb-4">
                    <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">Full name</label>
                    <div class="col-sm-9">
                        <div class="input-group input-group-sm-vertical">
                            <input type="text" class="form-control" wire:model="firstName" id="firstNameLabel" placeholder="Your first name" aria-label="Your first name">
                            <input type="text" class="form-control" wire:model="lastName" id="lastNameLabel" placeholder="Your last name" aria-label="Your last name">
                        </div>
                        @error('firstName') <span class="error">{{ $message }}</span> @enderror
                        @error('lastName') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <!-- Email -->
                <div class="row mb-4">
                    <label for="emailLabel" class="col-sm-3 col-form-label form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" wire:model="email" id="emailLabel" placeholder="Email" aria-label="Email">
                        @error('email') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <!-- Phone -->
                <div class="row mb-4">
                    <label for="phoneLabel" class="col-sm-3 col-form-label form-label">Phone</label>
                    <div class="col-sm-9">
                        <input type="text" class="js-input-mask form-control" wire:model="phone" id="phoneLabel" >
                        @error('phone') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <!-- Headline -->
                <div class="row mb-4">
                    <label for="headlineLabel" class="col-sm-3 col-form-label form-label">Headline</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" wire:model="headline" id="headlineLabel" placeholder="Headline" aria-label="Headline">
                        @error('headline') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <!-- Bio -->
                <div class="row mb-4">
                    <label for="bioLabel" class="col-sm-3 col-form-label form-label">Bio</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" wire:model="bio" id="bioLabel" aria-label="With textarea"></textarea>
                        @error('bio') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>


        </div>
    </div>

</div>

<div>
    <div id="emailSection" class="card">
        <div class="card-header">
            <h4 class="card-title">Email</h4>
        </div>

        <div class="card-body">
            <p>Your current email address is <span class="fw-semibold">{{ Auth::user()->email }}</span></p>

            <!-- Form -->
            <form wire:submit.prevent="updateEmail">
                <!-- Form -->
                <div class="row mb-4">
                    <label for="newEmailLabel" class="col-sm-3 col-form-label form-label">New email address</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" wire:model="newEmail" id="newEmailLabel" placeholder="Enter new email address" aria-label="Enter new email address">
                        @error('newEmail') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <!-- End Form -->

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
            <!-- End Form -->
        </div>
    </div>

</div>

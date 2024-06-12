<div>
    <div id="deleteAccountSection" class="card">
        <div class="card-header">
            <h4 class="card-title">Delete your account</h4>
        </div>

        <div class="card-body">
            @if (session()->has('message'))
            <div class="alert alert-success mt-3">
                {{ session('message') }}
            </div>
            @endif

            @if (session()->has('error'))
                <div class="alert alert-danger mt-3">
                    {{ session('error') }}
                </div>
            @endif

            <p class="card-text">When you delete your account, you lose access to Front account services, and we permanently delete your personal data. You can cancel the deletion for 14 days.</p>

            <div class="mb-4">
                <!-- Form Check -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" wire:model="confirmDeletion" id="deleteAccountCheckbox">
                    <label class="form-check-label" for="deleteAccountCheckbox">
                        Confirm that I want to delete my account.
                    </label>
                </div>
                <!-- End Form Check -->
            </div>

            <div class="d-flex justify-content-end gap-3">
                <a class="btn btn-white" href="#">Learn more</a>
                <button type="button" wire:click="deleteAccount" class="btn btn-danger">Delete</button>
            </div>


        </div>
    </div>

</div>

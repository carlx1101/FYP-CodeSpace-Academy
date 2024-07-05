<div class="card">
    <div class="card-header">
        <h2 class="card-title h4">Company information</h2>
    </div>

    @if (session()->has('message'))
    <div class="alert alert-success mt-3">
        {{ session('message') }}
    </div>
    @endif

    <div class="card-body">
        <form wire:submit.prevent="save">
            <div class="row mb-4">
                <label for="name" class="col-sm-3 col-form-label form-label">Company Name</label>
                <div class="col-sm-9">
                    <div class="input-group input-group-sm-vertical">
                        <input type="text" class="form-control" id="name" placeholder="Company Name" wire:model="name">
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <label for="industry" class="col-sm-3 col-form-label form-label">Industry</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="industry" placeholder="Eg. Real Estate" wire:model="industry">
                </div>
            </div>

            <div class="row mb-4">
                <label for="founded" class="col-sm-3 col-form-label form-label">Founded</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control" id="founded" wire:model="founded">
                </div>
            </div>

            <div class="row mb-4">
                <label for="size" class="col-sm-3 col-form-label form-label">Company Size</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="size" placeholder="1-100" wire:model="size">
                </div>
            </div>

            <div class="row mb-4">
                <label for="description" class="col-sm-3 col-form-label form-label">Description</label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="description" wire:model="description"></textarea>
                </div>
            </div>

            <div class="row mb-4">
                <label for="website" class="col-sm-3 col-form-label form-label">Website</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="website" placeholder="Website URL" wire:model="website">
                </div>
            </div>

            <div class="row mb-4">
                <label for="location" class="col-sm-3 col-form-label form-label">Location</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="location" placeholder="Location" wire:model="location">
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
</div>

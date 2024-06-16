<div>
    <div>
        <div id="backgroundExperiencesSection" class="card">
            <div class="card-header">
                <h4 class="card-title">Background Experience</h4>
            </div>

            <div class="card-body position-relative">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                @if ($experiences->isEmpty())
                    <div class="text-center my-5">
                        <p>No Experience</p>
                    </div>
                @else
                    <div class="list-group list-group-lg list-group-flush list-group-no-gutters ">
                        @foreach($experiences as $experience)
                            <div class="list-group-item">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img class="avatar avatar-lg" src="{{ $experience->company_image ? Storage::url($experience->company_image) : asset('backend/img/160x160/img6.jpg') }}" alt="Image Description">
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h4 class="mb-0">{{ $experience->position }}</h4>
                                                <p class="fs-4 text-body mb-0 text-dark">{{ $experience->company_name }} - {{ $experience->location }}</p>
                                                <p class="fs-5 text-body mb-0">{{ $experience->start_date }} to {{ $experience->end_date ?? 'Present' }}</p>
                                            </div>

                                            <div class="col-auto">
                                                <button class="btn btn-white btn-sm" wire:click="deleteExperience({{ $experience->id }})">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

            <div class="mt-5">
                <button class="btn btn-primary position-absolute" style="bottom: 1rem; right: 1rem;" data-bs-toggle="modal" data-bs-target="#addExperienceModal">Add Experience</button>
            </div>

            <!-- Add Experience Modal -->
            <div wire:ignore.self class="modal fade" id="addExperienceModal" tabindex="-1" aria-labelledby="addExperienceModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form wire:submit.prevent="addExperience">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addExperienceModalLabel">Add Experience</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <br><br><br><br><br>
                                    <label class="avatar avatar-xxl avatar-square avatar-uploader profile-cover-avatar" for="newCompanyImage">
                                        <img id="newCompanyImagePreview" class="avatar-img" src="{{ $new_company_image ? $new_company_image->temporaryUrl() : asset('backend/img/160x160/img6.jpg') }}" alt="Image Description">

                                        <input type="file" class="js-file-attach avatar-uploader-input" wire:model="new_company_image" id="newCompanyImage" data-hs-file-attach-options='{
                                                    "textTarget": "#newCompanyImagePreview",
                                                    "mode": "image",
                                                    "targetAttr": "src",
                                                    "allowTypes": [".png", ".jpeg", ".jpg"]
                                                }'>

                                        <span class="avatar-uploader-trigger">
                                            <i class="bi-pencil-fill avatar-uploader-icon shadow-sm"></i>
                                        </span>
                                    </label>
                                    @error('new_company_image') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="company_name" class="form-label">Company Name</label>
                                    <input type="text" class="form-control" id="company_name" wire:model="company_name" required>
                                    @error('company_name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="type" class="form-label">Type</label>
                                    <select class="form-control" id="type" wire:model="type" required>
                                        <option value="">Select Type</option>
                                        <option value="education">Education</option>
                                        <option value="work">Work</option>
                                    </select>
                                    @error('type') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="position" class="form-label">Position</label>
                                    <input type="text" class="form-control" id="position" wire:model="position" required>
                                    @error('position') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="start_date" class="form-label">Start Date</label>
                                    <input type="date" class="form-control" id="start_date" wire:model="start_date" required>
                                    @error('start_date') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="end_date" class="form-label">End Date</label>
                                    <input type="date" class="form-control" id="end_date" wire:model="end_date">
                                    @error('end_date') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="location" class="form-label">Location</label>
                                    <input type="text" class="form-control" id="location" wire:model="location" required>
                                    @error('location') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" wire:model="description"></textarea>
                                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add Experience</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>

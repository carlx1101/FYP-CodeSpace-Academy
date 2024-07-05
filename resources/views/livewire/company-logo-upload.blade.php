<div>
    <label class="avatar avatar-xxl avatar-circle avatar-uploader profile-cover-avatar" for="companyLogoUploader">
        <img id="companyLogoImg" class="avatar-img" src="{{ $companyLogo ? Storage::url($companyLogo) : './assets/img/160x160/img6.jpg' }}" alt="Image Description">

        <input type="file" class="js-file-attach avatar-uploader-input" id="companyLogoUploader" wire:model="companyLogo">

        <span class="avatar-uploader-trigger">
            <i class="bi-pencil-fill avatar-uploader-icon shadow-sm"></i>
        </span>
    </label>

    @error('companyLogo') <span class="error">{{ $message }}</span> @enderror

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
</div>

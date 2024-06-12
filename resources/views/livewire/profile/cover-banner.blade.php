<div>
    <div class="profile-cover">
        <div class="profile-cover-img-wrapper">
            <img id="profileCoverImg" class="profile-cover-img" src="{{ $coverBanner ? Storage::url($coverBanner) : asset('backend/img/1920x400/img2.jpg') }}" alt="Image Description">

            <!-- Custom File Cover -->
            <div class="profile-cover-content profile-cover-uploader p-3">
                <input type="file" class="js-file-attach profile-cover-uploader-input" wire:model="coverBanner" id="profileCoverUplaoder" data-hs-file-attach-options='{
                            "textTarget": "#profileCoverImg",
                            "mode": "image",
                            "targetAttr": "src",
                            "allowTypes": [".png", ".jpeg", ".jpg"]
                         }'>
                <label class="profile-cover-uploader-label btn btn-sm btn-white" for="profileCoverUplaoder">
                    <i class="bi-camera-fill"></i>
                    <span class="d-none d-sm-inline-block ms-1">Upload header</span>
                </label>
            </div>
            <!-- End Custom File Cover -->
        </div>

    </div>

</div>

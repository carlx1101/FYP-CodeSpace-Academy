<div>
    <div>
        <label class="avatar avatar-xxl avatar-circle avatar-uploader profile-cover-avatar" for="editAvatarUploaderModal">
            <img id="editAvatarImgModal" class="avatar-img" src="{{ $avatar ? Storage::url($avatar) : asset('backend/img/160x160/img6.jpg') }}" alt="Image Description">

            <input type="file" class="js-file-attach avatar-uploader-input" wire:model="avatar" id="editAvatarUploaderModal" data-hs-file-attach-options='{
                        "textTarget": "#editAvatarImgModal",
                        "mode": "image",
                        "targetAttr": "src",
                        "allowTypes": [".png", ".jpeg", ".jpg"]
                     }'>

            <span class="avatar-uploader-trigger">
                <i class="bi-pencil-fill avatar-uploader-icon shadow-sm"></i>
            </span>
        </label>

    
    </div>

</div>

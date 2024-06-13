<div id="preferencesSection" class="card">
    <div class="card-header">
        <h4 class="card-title">Preferences</h4>
    </div>

    <!-- Body -->
    <div class="card-body">
        <!-- Form -->
        <form wire:submit.prevent="savePreferences">
            <!-- Form -->
            <div class="row mb-4">
                <label for="languageLabel" class="col-sm-3 col-form-label form-label">Primary Language</label>

                <div class="col-sm-9">
                    <!-- Select -->
                    <div class="tom-select-custom">
                        <select class="js-select form-select" wire:model="primary_language" id="languageLabel" name="primary_language" data-hs-tom-select-options='{"searchInDropdown": false}'>
                            <option value="">Select a language</option>
                            <option value="en_US">English (US)</option>
                            <option value="en_UK">English (UK)</option>
                            <option value="de">Deutsch</option>
                            <option value="da">Dansk</option>
                            <option value="es">Español</option>
                            <option value="nl">Nederlands</option>
                            <option value="it">Italiano</option>
                            <option value="zh_TW">中文 (繁體)</option>
                        </select>
                    </div>
                    <!-- End Select -->
                </div>
            </div>
            <!-- End Form -->

            <!-- Form -->
            <div class="row mb-4">
                <label for="timeZoneLabel" class="col-sm-3 col-form-label form-label">Time zone</label>

                <div class="col-sm-9">
                    <!-- Select -->
                    <div class="tom-select-custom">
                        <select class="js-select form-select" wire:model="timezone" id="timeZoneLabel" name="timezone" data-hs-tom-select-options='{"searchInDropdown": false}'>
                            <option value="">Select a time zone</option>
                            <option value="America/New_York">America/New_York (Eastern Time)</option>
                            <option value="Europe/London">Europe/London (Greenwich Mean Time)</option>
                            <option value="Asia/Tokyo">Asia/Tokyo (Japan Standard Time)</option>
                        </select>
                    </div>
                    <!-- End Select -->
                </div>
            </div>
            <!-- End Form -->

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
        <!-- End Form -->

        @if (session()->has('message'))
            <div class="alert alert-success mt-3">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <!-- End Body -->
</div>

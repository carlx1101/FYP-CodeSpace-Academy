<div class="container">
    <h1>{{ isset($company) ? 'Edit' : 'Create' }} Company</h1>
    <form action="{{ isset($company) ? route('employer.companies.update', $company->id) : route('employer.companies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($company))
            @method('PUT')
        @endif
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $company->name ?? '') }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description">{{ old('description', $company->description ?? '') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="company_logo" class="form-label">Company Logo</label>
            <input type="file" class="form-control" id="company_logo" name="company_logo">
        </div>
        <div class="mb-3">
            <label for="founded" class="form-label">Founded</label>
            <input type="number" class="form-control" id="founded" name="founded" value="{{ old('founded', $company->founded ?? '') }}">
        </div>
        <div class="mb-3">
            <label for="industry" class="form-label">Industry</label>
            <input type="text" class="form-control" id="industry" name="industry" value="{{ old('industry', $company->industry ?? '') }}">
        </div>
        <div class="mb-3">
            <label for="size" class="form-label">Size</label>
            <input type="text" class="form-control" id="size" name="size" value="{{ old('size', $company->size ?? '') }}">
        </div>
        <div class="mb-3">
            <label for="website" class="form-label">Website</label>
            <input type="url" class="form-control" id="website" name="website" value="{{ old('website', $company->website ?? '') }}">
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $company->location ?? '') }}">
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($company) ? 'Update' : 'Create' }} Company</button>
    </form>
</div>

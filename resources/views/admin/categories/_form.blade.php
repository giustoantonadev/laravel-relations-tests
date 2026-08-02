<div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" value="{{ old('name', optional($category)->name) }}" class="form-control">
    @error('name')<div class="text-danger">{{ $message }}</div>@enderror
</div>

<div class="mb-3">
    <label class="form-label">Description</label>
    <textarea name="description" class="form-control">{{ old('description', optional($category)->description) }}</textarea>
    @error('description')<div class="text-danger">{{ $message }}</div>@enderror
</div>
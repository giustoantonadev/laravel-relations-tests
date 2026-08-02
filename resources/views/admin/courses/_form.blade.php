<div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" value="{{ old('name', optional($course)->name) }}" class="form-control">
    @error('name')<div class="text-danger">{{ $message }}</div>@enderror
</div>

<div class="mb-3">
    <label class="form-label">Description</label>
    <textarea name="description" class="form-control">{{ old('description', optional($course)->description) }}</textarea>
    @error('description')<div class="text-danger">{{ $message }}</div>@enderror
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">Duration (weeks)</label>
        <input type="number" name="duration" value="{{ old('duration', optional($course)->duration ?? 1) }}" class="form-control">
        @error('duration')<div class="text-danger">{{ $message }}</div>@enderror
    </div>
    <div class="col-md-6 mb-3">
        <label class="form-label">Price</label>
        <input type="number" step="0.01" name="price" value="{{ old('price', optional($course)->price ?? 0) }}" class="form-control">
        @error('price')<div class="text-danger">{{ $message }}</div>@enderror
    </div>
</div>

<div class="mb-3">
    <label class="form-label">Categories</label>
    <select name="categories[]" class="form-select" multiple>
        @foreach($categories as $cat)
        <option value="{{ $cat->id }}" {{ in_array($cat->id, old('categories', optional($course)->categories->pluck('id')->toArray() ?? [])) ? 'selected' : '' }}>{{ $cat->name }}</option>
        @endforeach
    </select>
</div>
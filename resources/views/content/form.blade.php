<div class="form-group">
    <label for="title">Title:</label>
    <input type="text" name="title" 
        class="form-control {{ $errors->has('title') ? ' is-invalid' : ''}}"
        value="{{ old('title') ?? $content->title }}" required />
</div>
@if ($errors->has('title'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('title') }}</strong>
    </span>
@endif

<div class="form-group">
    <label for="description">Description:</label>
    <textarea name="description" class="form-control summernote {{ $errors->has('description') ? ' is-invalid' : ''}}"
        value="{{ old('description') }}" rows="10" required>
        {{ old('description') ?? $content->description }}
    </textarea>
</div>
@if ($errors->has('description'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('description') }}</strong>
    </span>
@endif

<div class="form-group">
    <label for="slug">Slug:</label>
    <input type="text" name="slug" class="form-control"
        value="{{ old('slug') ?? $content->slug }}" required />
</div>
@if ($errors->has('slug'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('slug') }}</strong>
    </span>
@endif
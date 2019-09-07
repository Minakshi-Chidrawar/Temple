<div class="form-group">
    <label for="title">Title:</label>
    <input type="text" name="title" placeholder="e.g. Vacancy for Priest/ Volunteer required"
        class="form-control {{ $errors->has('title') ? ' is-invalid' : ''}}"
        value="{{ old('title') ?? $vacancy->title }}" required minlength="3" />
</div>
@if ($errors->has('title'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('title') }}</strong>
    </span>
@endif

<div class="form-group">
    <label for="role">Role:</label>
    <input type="text" name="role" class="form-control {{ $errors->has('role') ? ' is-invalid' : ''}}"
    value="{{ old('role') ?? $vacancy->role }}" />
</div>
@if ($errors->has('role'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('role') }}</strong>
    </span>
@endif

<div class="form-group">
    <label for="description">Description:</label>
    <textarea name="description" class="form-control summernote {{ $errors->has('description') ? ' is-invalid' : ''}}"
    value="{{ old('description') }}" rows="10" required >{{ old('description') ?? $vacancy->description }}</textarea>
</div>
@if ($errors->has('description'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('description') }}</strong>
    </span>
@endif

<div class="row">
    <div class="form-group col-6">
        <label for="postDate">Start Date:</label>
        <input type="date" name="postDate" class="form-control {{ $errors->has('postDate') ? ' is-invalid' : ''}}"
    value="{{ old('postDate') ?? $vacancy->postDate }}" required/>
    </div>
    @if ($errors->has('postDate'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('postDate') }}</strong>
        </span>
    @endif

    <div class="form-group col-6">
        <label for="closingDate">Closing Date:</label>
        <input type="date" name="closingDate" class="form-control {{ $errors->has('closingDate') ? ' is-invalid' : ''}}"
    value="{{ old('closingDate') ?? $vacancy->closingDate }}" required/>
    </div>
    <div>{{ $errors->first('closingDate') }}</div>
    
</div>
<div class="form-group">
    <label for="note">Note:</label>
    <textarea type="text" name="note"class="form-control">
        {{ old('note') ?? $vacancy->note }}
    </textarea>
</div>
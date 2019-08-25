<div class="form-group">
    <label for="title">Event:</label>
    <input type="text" name="title" class="form-control {{ $errors->has('title') ? ' is-invalid' : ''}}"
        value="{{ old('title') ?? $event->title }}" required minlength="5">
</div>
@if ($errors->has('title'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('title') }}</strong>
    </span>
@endif

<div class="form-group">
    <label for="description">Event Description:</label>
    <textarea name="description" class="summernote form-control {{ $errors->has('description') ? ' is-invalid' : ''}}" 
        rows="10" required minlength="25">
        {{ old('description') ?? $event->description }}
    </textarea>
</div>
@if ($errors->has('description'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('description') }}</strong>
    </span>
@endif

<div class="row">
    <div class="form-group col-6">
        <label for="startDate">Event Start Date:</label>
        <input type="date" name="startDate" class="form-control {{ $errors->has('startDate') ? ' is-invalid' : ''}}"
    value="{{ old('startDate') ?? $event->startDate }}" required>
    </div>
    @if ($errors->has('startDate'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('startDate') }}</strong>
        </span>
    @endif
    <div class="form-group col-6">
        <label for="endDate">Event End Date:</label>
        <input type="date" name="endDate" class="form-control {{ $errors->has('endDate') ? ' is-invalid' : ''}}"
    value="{{ old('endDate') ?? $event->endDate }}">
    </div>
</div>
<div class="form-group">
    <label for="sponsor">Sponsor:</label>
    <input type="text" name="sponsor" class="form-control {{ $errors->has('sponsor') ? ' is-invalid' : ''}}"
    value="{{ old('sponsor') ?? $event->sponsor }}" minlength="3">
</div>
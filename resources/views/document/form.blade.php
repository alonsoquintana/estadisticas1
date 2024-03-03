
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_documets') }}</label>
    <div>
        {{ Form::text('id_documets', $document->id_documets, ['class' => 'form-control' .
        ($errors->has('id_documets') ? ' is-invalid' : ''), 'placeholder' => 'Id Documets']) }}
        {!! $errors->first('id_documets', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">document <b>id_documets</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('title') }}</label>
    <div>
        {{ Form::text('title', $document->title, ['class' => 'form-control' .
        ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
        {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">document <b>title</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>

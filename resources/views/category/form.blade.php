
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('cat_description') }}</label>
    <div>
        {{ Form::text('cat_description', $category->cat_description, ['class' => 'form-control' .
        ($errors->has('cat_description') ? ' is-invalid' : ''), 'placeholder' => 'Cat Description']) }}
        {!! $errors->first('cat_description', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">category <b>cat_description</b> instruction.</small>
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

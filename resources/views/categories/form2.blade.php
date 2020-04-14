@csrf
<div class="col-sm-8 offset-2">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-success btn-sm">{{ $category->exists ? 'Update' : 'Save' }}</button>
        <a href="{{ route('backend.categories.index') }}" class="btn btn-outline-danger btn-sm" role="button" aria-pressed="true">Cancel</a>
    </div>
</div>

@csrf
  <div class="col-sm-8 offset-2">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : ' ' }}"  required>
         @if($errors->has('name'))
                <div class="invalid-feedback">
                   <strong>{{ $errors->first('name') }}</strong>
                </div>
            @endif
      </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-success btn-sm">{{ $category->exists ? 'Update' : 'Save' }}</button>
        <a href="{{ route('backend.categories.index') }}" class="btn btn-outline-danger btn-sm" role="button" aria-pressed="true">Cancel</a>
    </div>
</div>
<!-- /.col-sm-8 -->

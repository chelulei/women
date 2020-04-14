
<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    {!! Form::label('title','Title') !!}
    {!! Form::text('title', null, ['class' => 'form-control',
                        'placeholder' => 'Enter Title', 'required'=>'']) !!}
    @if($errors->has('title'))
        <span class="help-block">{{ $errors->first('title') }}</span>
    @endif
</div>
<div class="form-group">
    {!! Form::label('category_id', 'Category', ['class' => 'control-label']) !!}
    {!! Form::select('category_id',  App\category::pluck('name', 'id'),  old('category_id'), ['id'=>'select','class' => 'form-control'.($errors->has('name')?" is-invalid":""),'placeholder' => 'Choose category','required'=>'']) !!}
    @if($errors->has('category_id'))
        <span class="invalid-feedback">{{ $errors->first('category_id') }}</span>
    @endif
</div>
<div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
    {!! Form::label('body','Body') !!}
    {{ Form::textarea('body', null, ['class' => 'form-control my-editor','rows' => 5, 'cols' =>5,'id' => 'my-editor',]) }}
    @if($errors->has('body'))
        <span class="help-block">{{ $errors->first('body') }}</span>
    @endif
</div>
 <div class="form-group">
        {!! Form::label('image') !!}
        <br>
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-new" style="width: 200px; height: 150px;">
                <img src="{{($blog->image_url) ? $blog->image_url : asset('img/noimage.png')}}" alt="">
            </div>
            <div class="fileinput-preview fileinput-exists" style="max-width: 200px; max-height: 150px;"></div>
            <div>
                <span class="btn btn-outline-default btn-file btn-outline-success mt-3">
                    <span class="fileinput-new">Select image</span>
                    <span class="fileinput-exists">Change</span>
                    <input  type="file" name="image" value="{{ old('image') }}" class="form-control {{ $errors->has('image') ? 'is-invalid' : ' ' }}" >
                    @if($errors->has('image'))
                        <div class="invalid-feedback">
                        <strong>{{ $errors->first('image') }}</strong>
                        </div>
                        @endif
                </span>
                <a href="#" class="btn btn-default fileinput-exists btn-outline-danger mt-3" data-dismiss="fileinput">Remove</a>
            </div>
        </div>
    </div>
<div class="form-group">
        <button type="submit" class="btn btn-outline-success btn-lg">{{ $blog->exists ? 'Update' : 'Save' }}</button>
        <a href="{{'/home'}}" class="btn btn-outline-danger btn-lg" role="button" aria-pressed="true">Cancel</a>
</div>
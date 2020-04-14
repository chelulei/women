@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
    <div class="breadcrumbs">
        <div class="">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" id="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{route('backend.categories.index')}}">
                            <button class="btn btn-sm btn-success">
                                <i class="fa fa-arrow-left"></i>ALL categories</button></a>
                    </li>
                <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{'/home'}}">
                        <button class="btn btn-success btn-md  ">
                        <i class="fa fa-arrow-left"></i>BACK</button>
                        </a>
                    </li>

                </ol>
            </nav>
        </div>
    </div>

                    {!! Form::model($category, [
                                     'method' => 'PUT',
                                     'files'  => TRUE,
                                     'route'  => ['backend.categories.update', $category->id],

                                 ]) !!}


                    @include('categories.form2')

                    {!! Form::close() !!}


</div>
            </div>
        </div>
    </div>
</div>
@endsection

@include('categories.script')




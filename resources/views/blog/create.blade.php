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
                        <a href="{{'/home'}}">
                            <button class="btn btn-md btn-success">
                                <i class="fa fa-arrow-left"></i>Home</button></a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

                    {!! Form::model($blog, [
                       'method' => 'POST',
                       'files'  => TRUE,
                       'route'  => 'backend.blogs.store',

                   ]) !!}

                    @include('blog.form')

                    {!! Form::close() !!}


</div>
            </div>
        </div>
    </div>
</div>
@endsection





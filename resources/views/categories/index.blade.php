@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                     <nav aria-label="breadcrumb">
            <ol class="breadcrumb" id="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">

                    <a href="{{ route('backend.categories.create') }}">
                        <button class="btn btn-md btn-success">
                            <i class="fa fa-plus-circle"></i>Add categorie</button></a>

                </li>
                <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{'/home'}}">
                        <button class="btn btn-success btn-md  ">
                        <i class="fa fa-arrow-left"></i>Home</button>
                        </a>
                    </li>
            </ol>
        </nav>
        @include('partials.messages')
            @if(! $categories->count())
                <div class="alert alert-danger m-2">
                    No Records
                </div>
            @else

                  <div class="table-responsive">
                @include('categories.table')
                 </div>
           @endif
</div>
            </div>
        </div>
    </div>
</div>
@endsection





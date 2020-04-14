@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
				  <a class="navbar-brand" href="#">Navbar</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						 <li class="nav-item active">
						<a class="nav-link btn btn-outline-success" href="{{ url('/') }}">Home</a>
					  </li>
					  <li class="nav-item active">
						<a class="nav-link" href="{{ route('blgs') }}">blogs</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="{{ route('backend.categories.index') }}">Categories</a>
					  </li>
					</ul>
				  </div>
				</nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

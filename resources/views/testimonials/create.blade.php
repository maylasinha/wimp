@extends('layouts.site')

@section('content')
  <div class="py-5 page testimonial">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          @include('shared.sidebar_user')
        </div>
        <div class="col-sm-9">
        	<form action="{{ route('testimonials.store') }}" method="post" class="card">
						<div class="card-body">
							@csrf
							@include('testimonials._form')
						</div>
					</form>
        </div>
      </div>
    </div>
  </div>
@endsection

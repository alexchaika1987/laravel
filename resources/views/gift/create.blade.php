@extends('gift.master')
@push('styles')
<link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('/css/addInfo.css')}}">

@endpush

@section('cnt')



<div class="row">
	<div class="col-md-12">
		<br />
		<h3 align='center'>Add Data</h3>
		<br />
		@if(count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>

		@endif
		@if(\Session::has('success'))
		<div class="alert alert-success">
			<p>{{\Session::get('success')}}</p>
		</div>
		@endif

		<form method="post" action="{{url('gift')}}">
			{{csrf_field()}}
			<div class="form-group">
			<select  class="custom-select" name="category">
				<!-- @foreach($category as $data)
				<option value="{{$data->id}}">{{$data->category}}</option>
				@endforeach -->

	  <option selected disabled hidden style="display: none" value="default">	 
	        <option value="A cup" selected = 'selected'>A cup</option>
	        <option value="T-shirts">T-shirts</option>
	        <option value="Glasses">Glasses</option>
           </select>
             </div>
			<div class="form-group">
			<input type="text" name="phone" class="form-control" placeholder="Enter your phone" />
            </div>
            <div class="form-group">
			<input type="text" name="address" class="form-control" placeholder="Enter the address" />
			</div>
			<div class="form-group">
			<input type="submit" class ="btn btn-primary" />
			</div>
		</form>
	</div>
</div>





@endsection


@extends('gift.master')
@push('styles')
<link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('/css/addInfo.css')}}">
<link href="{{asset('css/modal.css')}}" rel="stylesheet"/>

@push('scripts')

<script src="{{asset('js/modal.js')}}"></script>

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

		<form method="post" action="{{asset('additional')}}" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
			<select  class="custom-select" name="category">
				@error('category')
     <span class="danger" role="alert">
         <strong>{{ $message }}</strong>
     </span>
    @enderror				

	  <option selected disabled hidden style="display: none" value="default">	 
	        <option value="A cup" selected = 'selected'>A cup</option>
	        <option value="T-shirts">T-shirts</option>
	        <option value="Glasses">Glasses</option>
           </select>
             </div>
			<div class="form-group">
			<input type="text" name="phone" class="form-control" placeholder="Enter your phone" />
			@error('phone')
     <span class="danger" role="alert">
         <strong>{{ $message }}</strong>
     </span>
    @enderror

            </div>
            <div class="form-group">
			<input type="text" name="address" class="form-control" placeholder="Enter the address" />
			@error('address')
     <span class="danger" role="alert">
         <strong>{{ $message }}</strong>
     </span>
     @enderror
            </div>
     		<div class="form-group">
			<input type="file" name="picture1" class="form-control" placeholder="Enter the address" />
			@error('picture1')
     <span class="danger" role="alert">
         <strong>{{ $message }}</strong>
     </span>
    @enderror
    		</div>

			
			<div class="form-group">
			<input type="submit" class ="btn btn-primary" />
			</div>
			
		</form>
	

		<form method="post" action="{{asset('additional')}}" enctype="multipart/form-data">
			@csrf
		  <div class="form-group">
		    <label for="name">Наименование товара</label>
		    <input type="text" class="form-control" id="name" name='name'>		    
		  </div>

	  <div class="form-group">
	    <label for="catalog_id">Каталог</label>
	    <select class="form-control" id="catalog_id" name='catalog_id'>
	    	<option value="1" selected = 'selected'>Планшеты</option>
	        <option value="2">Ноутбуки</option>
	        <option value="3">Смартфоны</option>
	    </select>
	  </div>
	   

	  <div class="form-group">
		    <label for="price">Цена</label>
		    <input type="text" class="form-control" id="price" name='price'>
	  </div>

		<div class="form-group">
	    <label for="body">Описание товара</label>
	    <textarea class="form-control" id="body" rows="3" name="body"></textarea>
	  </div>
      <div class="form-group">
    <label for="picture1">Изображение</label>
    <input type="file" class="form-control-file" id="picture1" name="picture1">
  </div> 

	  <button type="submit" class="btn btn-primary">Submit</button>
		</form>

		 <table class="table table-bordered table-striped" width="100%">
            <tr>
              <th width="200px">Изображение</th>
              <th>Название</th>
              <th>Описание</th>
              <th>Price</th>
              <th>Действия</th>
            </tr>
            @foreach($pr as $p)
            <tr>
              <th width="200px">
                <img width="100px" src="/uploads/1/{{$p->picture}}" alt="">
              </th>

              <td>{{$p->name}}</td>
              <th>{{$p->body}}</th>
              <th>{{$p->price}}</th>
              <th><a href='#'class="btn btn-block btn-primary">Редактировать</a>
                <a href="{{asset('product/delete/'.$p->id)}}" class="btn btn-block btn-primary">
                  Удалить</a>
               <button type="button" @click='show-modal' class="btn btn-block btn-primary show-modal" data-id="{{$p->id}}" >Просмотр</button>
               


              </th>
            </tr>
            @endforeach

            




</div>
</div>





@endsection


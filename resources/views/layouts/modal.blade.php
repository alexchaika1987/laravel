<h2>{{$pr->name}}</h2>
@if($pr->picture)
<img src="{{asset('uploads/'.$pr->user_id.'/'.$pr->picture)}}" width="100%"/>
@else
-
@endif
<p>Цена:<b>{{$pr->price}}</b></p>
{!! $pr->body !!}
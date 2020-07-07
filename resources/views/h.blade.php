<!-- @extends('layouts.base')
@push('styles')

<link type="text/css" href="{{asset('/css/home.css')}}" rel="stylesheet" />
@endpush

@section('btn')

 <div id="contacts">
 
 <button type="submit" class="addBtn info">
                                <a href="{{ url('gift/create') }}">Take a gift!</a>
                                </button>
 <button type="submit" class="addBtn info" style="left:50vw;">
                                <a href="{{ url('/home') }}">Additional</a>
                                </button>
                  

</div>



@endsection -->

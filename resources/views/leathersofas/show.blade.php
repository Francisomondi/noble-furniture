@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading">{{$leathersofas->name}} <span class="text-muted">KES {{$leathersofas->price}}</span></h2>
                  <p class="lead"> {{$leathersofas->description}}.</p>
                </div>
                <div class="col-md-5">
                        <img src="/storage/photos//leathersofa/{{$leathersofas->image}}" alt="leather seat" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500">
                    </div>
                    </div>
                    
                    @if(!Auth::guest())
                    @if(Auth::user()->id == $leathersofas->user_id)
                       <div class="row">
                               <a href="/leathersofas" class="btn btn-sm btn-outline-primary">Back</a>
                               
                         {!!Form::open(['action'=> ['leathersofasController@destroy',$leathersofas->id],'method'=> 'POST','class'=>'pull-right'])!!}
                             {{Form::hidden('_method','DELETE')}}
                             {{Form::submit('Delete image',['class'=>'btn btn-sm btn-outline-danger'])}}
                             {!!Form::close()!!}
                       </div>
                      
                       @endif
                  
                   @endif
</div>
        
@endsection
@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading">{{$dinnings->name}} </h2>
                  <p class="lead"> {{$dinnings->description}}.</p>
                  <h4><span class="text-muted">KES {{$dinnings->price}} /=</span></h4>
                </div>
                <div class="col-md-5">
                        <img src="/storage/photos//dinning/{{$dinnings->image}}" alt="leather seat" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500">
                    </div>
                    </div>
                    
                   
                       <div class="row">
                               <a href="/dinnings" class="btn btn-sm btn-outline-primary">Back</a>

                    @if(!Auth::guest())
                        @if(Auth::user()->id == $dinnings->user_id)
                               
                         {!!Form::open(['action'=> ['dinningsController@destroy',$dinnings->id],'method'=> 'POST','class'=>'pull-right'])!!}
                             {{Form::hidden('_method','DELETE')}}
                             {{Form::submit('Delete image',['class'=>'btn btn-sm btn-outline-danger'])}}
                             {!!Form::close()!!}
                       </div>
                      
                       @endif
                  
                   @endif
</div>
        
@endsection
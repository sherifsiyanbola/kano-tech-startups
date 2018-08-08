@extends('layouts.app')

@section('content')


 <div class="row">
 @foreach ($hubs as $hub)
  <div class="col-md-4">
    <div class="card">
    <div class="card-body">
    <img src = "{{ asset ('avatar.png')}}" class = "img-round" width = "100px" height = "100px"/> <br>
    
    <span class="badge badge-info">{{$hub->hubname}} </span><br>
        {{$hub->location}}<br>
        <span class="badge badge-success">{{$hub->website}}</span><br><br>
        
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#{{$hub->id}}">
    View profile
  </button>

  <!-- The Modal -->
  <div class="modal" id="{{$hub->id}}">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><span class="badge badge-info">{{$hub->hubname}} </span</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Full Details <br>
          <img src = "{{ asset ('avatar.png')}}" class = "img-round" width = "200px" height = "200px"/> <br>
          {{$hub->location}}<br>
          {{$hub->founder}}<br>
          {{$hub->description}}<br>
        <span class="badge badge-success">{{$hub->website}}</span><br><br>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>   
    </div>
    </div>
    </div>
    </div>
    
</div>
<br>
  </div>
  @endforeach
  
</div>
<br>
<div class = "row">
<div class = "col-md-5"></div>
    <div class = "col-md-6">
    {!! $hubs->links() !!}
    </div>
</div>

@endsection

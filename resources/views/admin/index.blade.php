@extends('layouts.admin')

@section('content')
<br>
<div class="row">
 @foreach ($hubs as $hub)
  <div class="col-md-4">
    <div class="card">
    <div class="card-body">
    <img src = "{{ asset ('avatar.png')}}" class = "img-round" width = "100px" height = "100px"/> <br>
    
    <span class="badge badge-info">{{$hub->hubname}} </span><br>
        {{$hub->location}}<br>
        <span class="badge badge-success">{{$hub->website}}</span><br><br>
        
 

  <!-- The Modal -->
  <div class="modal" id="{{$hub->id}}">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">
            <span class="badge badge-info">
                {{$hub->hubname}}
            </span
          </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Full startup's profile <br>
          <img src = "{{ asset ('avatar.png')}}" class = "img-round" width = "200px" height = "200px"/> <br>
          <span class="badge badge-success">Location</span><br>
          {{$hub->location}}<br>
          <span class="badge badge-success">Founder</span><br>
          {{$hub->founder}}<br>
          <span class="badge badge-success">Description</span><br>
          {{$hub->description}}<br>
          <span class="badge badge-success">Email</span><br>
          {{$hub->email}}<br>
          <span class="badge badge-success">Website</span><br>
          {{$hub->website}}
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>   
    </div>
    </div>
    </div>
    </div>
    <button type="button" class="btn btn-primary btn-block btn-sm" data-toggle="modal" data-target="#{{$hub->id}}">
    View profile
  </button>
    <a class="btn btn-default btn-sm" href = "{{action ('adminController@edit', $hub['id'])}}">Edit</a>
    <form action="{{action('adminController@destroy', $hub['id'])}}" method="post">
    @csrf
        <input name="_method" type="hidden" value="DELETE">
        <button class="btn btn-danger btn-sm btn-block" type="submit" onClick = "return confirm('Are you sure ?')">Delete</button>
    </form>
</div>
<br>
  </div>
  @endforeach
  
</div>
<div class = "row">
<div class = "col-md-5"></div>
    <div class = "col-md-6">
        {!! $hubs->links() !!}
    </div>
</div>
@endsection

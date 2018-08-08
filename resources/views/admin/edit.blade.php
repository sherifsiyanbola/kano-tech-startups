@extends('layouts.admin')

@section('content')
<div class="container">
<br>
  <h2>Edit</h2>
  <br>
  <form method = "post" action="{{action ('adminController@update', $id)}}" type = "hidden">
  @csrf
<input name="_method" type="hidden" value="PATCH">
<div class="form-group">
      <label for="hubname">Startup Name:</label>
      <input type="text" class="form-control" name="hubname" value = "{{ $hubs->hubname}}">
    </div>

<div class="form-group">
      <label for="lga">Location:</label>
    <select name="location" class="custom-select mb-3">
      <option selected>{{ $hubs->location}}</option>
      <option value="ajingi">Ajingi</option>
      <option value="albasu">Albasu</option>
      <option value="bebeji">Bebeji</option>
      <option value="bagwai">Bagwai</option>
      <option value="tarauni">Tarauni</option>
      <option value="dawakinkudu">Dawakin Kudu</option>
      <option value="dawakintofa">Dawakin Tofa</option>
      <option value="danbatta">Dan Batta</option>
      <option value="doguwa">Doguwa</option>
      <option value="fagge">Fagge</option>
      <option value="gwale">Gwale</option>
      <option value="gwarzo">Gwarzo</option>
      <option value="gayya">Gayya</option>
      <option value="wudil">Wudil</option>
    </select>
</div>

    <div class="form-group">
      <label for="Founder">Founder:</label>
      <input type="text" class="form-control" name="founder" value = "{{ $hubs->founder}}">
    </div>

    <div class="form-group">
      <label for="Email">Email:</label>
      <input type="email" class="form-control" name="email" value = "{{ $hubs->email}}">
    </div>

<!-- <div class="form-group">
      <label for="Picture">Picture:</label>
     <div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
</div> -->

 <div class="form-group">
  <label for="Description">Description:</label>
  <textarea class="form-control" rows="5" name="description">{{ $hubs->description}}</textarea>
</div> 

<div class="form-group">
      <label for="website">Website:</label>
      <input type="url" class="form-control" name="website" value = "{{ $hubs->website}}">
</div>
    <button type="submit" class="btn btn-primary btn-block btn-lg">Update</button>
  </form>
</div>



@endsection

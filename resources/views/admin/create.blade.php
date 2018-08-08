@extends('layouts.admin')

@section('content')
<div class="container">
<br>
  <h2>Add new tech startup</h2>
  <br>
  <form action= "{{ url('admin')}}" method = "post" type = "hidden">
  @csrf
    <div class="form-group">
      <label for="hubname">Startup Name:</label>
      <input type="text" class="form-control" name="hubname">
    </div>

<div class="form-group">
      <label for="lga">Location:</label>
    <select name="location" class="custom-select mb-3">
      <option selected>KMC</option>
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
      <input type="text" class="form-control" name="founder">
    </div>

    <div class="form-group">
      <label for="Email">Email:</label>
      <input type="email" class="form-control" name="email">
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
  <textarea class="form-control" rows="5" name="description"></textarea>
</div> 

<div class="form-group">
      <label for="website">Website:</label>
      <input type="url" class="form-control" name="website">
</div>

    <button type="submit" class="btn btn-primary btn-block btn-lg">Submit</button>
  </form>
</div>



@endsection

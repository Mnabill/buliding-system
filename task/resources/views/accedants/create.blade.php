@extends('layout.prolayout')
@section('content')
    
<form action="/accedant" method="POST">
  @csrf
  
    <div class="form-group" >
        

      <label >month</label>
      <input type="int" class="form-control" name="month"  placeholder="Enter month">
    </div>
    <div class="form-group">
        <label >date</label>
        <input type="int" class="form-control" name="date"  placeholder="Enter date">
      </div>
      <div class="form-group">
        <label >cost</label>
        <input type="int" class="form-control" name="cost"  placeholder="Enter cost">
      </div>
      <div class="form-group">
        <label >description</label>
        <input type="int" class="form-control" name="description"  placeholder="Enter description">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
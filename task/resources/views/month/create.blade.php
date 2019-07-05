@extends('layout.prolayout')
@section('content')
    
<form action="/fix" method="POST">
  @csrf

    <div class="form-group" >
      <label >month</label>
      <input type="int" class="form-control" name="month"  placeholder="Enter month">
    </div>
    <div class="form-group">
        <label >gatekeeper Salary</label>
        <input type="int" class="form-control" name="gatekeeper"  placeholder="Enter gatekeeper Salary">
      </div>
      <div class="form-group">
        <label >elect</label>
        <input type="int" class="form-control" name="elect"  placeholder="Enter elect Money">
      </div>
      <div class="form-group">
        <label >clean</label>
        <input type="int" class="form-control" name="clean"  placeholder="Enter clean Money">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
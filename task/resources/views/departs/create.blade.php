@extends('layout.prolayout')
@section('content')
    
<form action="/departments" method="POST">
    @csrf

    <div class="form-group" >
       

      <label >number of platform</label>
      <input type="int" class="form-control" name="number"  placeholder="Enter number of platform">
    </div>
    <div class="form-group">
        <label >Month</label>
        <input type="text" class="form-control" name="month"  placeholder="Enter Month">
  </div>
    <div class="form-group">
        <label >Name Of the owner</label>
        <input type="int" class="form-control" name="name"  placeholder="Enter Name Of the owner">
      </div>
      <div class="form-group">
        <label >elect</label>
        <input type="int" class="form-control" name="elect"  placeholder="Enter elect Money">
      </div>
      <div class="form-group">
        <label >Water Money</label>
        <input type="int" class="form-control" name="water"  placeholder="Enter Water Money">
      </div>
      <div class="form-group">
            <label >Monthly Money</label>
            <input type="int" class="form-control" name="monthly"  placeholder="Enter Monthly Money">
      </div>
      <div class="form-group">
          <label >status of pay</label>
      <div class="form-control form-check-inline">
          <input class="form-check-input" type="radio" name="radio"  value="1">
          <label class="form-check-label" for="inlineRadio1">paid</label>
        </div>
        <div class="form-control form-check-inline">
          <input class="form-check-input" type="radio" name="radio" value="0">
          <label class="form-check-label" for="inlineRadio2">not paid</label>
        </div> 
        </div> <br> <br> <hr>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
@extends('layout.prolayout')
@section('content')

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">month</th>
        <th scope="col">gatekeeper</th>
        <th scope="col">elect</th>
        <th scope="col">clean</th>
        <th scope="col">total count</th>
        <th scope="col">every depart share</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($fixs as $fix)
          <tr>

                <td>{{$fix->month}}</td>
                <td>{{$fix->gatekeeper}}</td>
                <td>{{$fix->elect}}</td>
                <td>{{$fix->clean}}</td> 
                <td></td> 
                <td></td> 
         </tr>
       @endforeach
   
    </tbody>
  </table>
  <br> <br> <hr>

  <a href="/fix/create"><button type="button" class="btn btn-success btn-lg btn-block ">ADD New Record</button></a>
  <button type="button" class="btn btn-secondary btn-lg btn-block">Edit Record</button>

@endsection
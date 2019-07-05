@extends('layout.prolayout')
@section('content')

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col" >month</th>
        <th scope="col" >date</th>
        <th scope="col" >cost</th>
        <th scope="col" >description</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($accs as $acc)
      <tr>
          
              
          
                <td>{{$acc->month}}</td>
                <td>{{$acc->date}}</td>
                <td>{{$acc->cost}}</td>
                <td>{{$acc->description}}</td>

               
      </tr>

      @endforeach
   
    </tbody>
  </table>
  <br> <br> <hr>

  <a href="/accedant/create"><button type="button" class="btn btn-success btn-lg btn-block ">ADD New Record</button></a>
  <button type="button" class="btn btn-secondary btn-lg btn-block">Edit Record</button>

@endsection
@extends('layout.prolayout')
@section('content')
    

<table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">month</th>
            <th scope="col">name</th>
            <th scope="col">amount</th>
            <th scope="col">reason</th>
            <th scope="col">date</th>
            <th scope="col">balance</th>
            <th scope="col">Option</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                
            
          <tr>
            <td>{{$post->month}}</td>
            <td>{{$post->name}}</td>
            <td>{{$post->amount}}</td>
            <td>{{$post->reason}}</td>
            <td>{{$post->date}}</td>
            <td>{{$post->balance}}</td>
            <td> <a href="/credit/{month}/edit" class="btn btn-warning" > edit </a> </td>
          </tr>

          @endforeach
        </tbody>
      </table>


    <a href="/credit/create"><button type="button" class="btn btn-success btn-lg btn-block ">ADD New Record</button></a>
@endsection
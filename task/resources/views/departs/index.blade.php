@extends('layout.prolayout')
@section('content')

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">number</th>
        <th scope="col">name</th>
        <th scope="col">month</th>
        <th scope="col">elect</th>
        <th scope="col">water</th>
        <th scope="col">monthly</th>
        <th scope="col">paid</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($departs as $depart)
          
          <tr>     
          
        <td>{{$depart->number}}</td>
        <td>{{$depart->name}}</td>
        <td>{{$depart->month}}</td>
        <td>{{$depart->elect}}</td>
        <td>{{$depart->water}}</td>
        <td>{{$depart->monthly}}</td>
        <td>
              
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio" value="{{$depart->status}}">
                <label class="form-check-label" for="inlineRadio1">Paid</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio" value="{{$depart->status}}">
                <label class="form-check-label" for="inlineRadio2">Not paid</label>
              </div>

        </td>

          </tr>
    
          @endforeach
    </tbody>
  </table>

  <a href="/departments/create"><button type="button" class="btn btn-success btn-lg btn-block ">ADD New Record</button></a>
  <button type="button" class="btn btn-secondary btn-lg btn-block">Edit Record</button>
    
@endsection
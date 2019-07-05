@extends('layout.prolayout')
@section('content')

    <div class="jumbotron text-center">
        <h1 class="display-4">Hello, Mr/Esmail !</h1>
        <p class="lead"> What are You Going To Do Today !! </p>
        <hr class="my-4">
        <p>Wellcome to App You Can modifie or set new</p>
        <a class="btn btn-primary btn-lg" href="/monthely" role="button">Monthely Pay</a>
        <a class="btn btn-success btn-lg" href="/departments" role="button">Departemens</a>
        <a class="btn btn-danger btn-lg" href="/credit" role="button">Spent and left</a>
        <a class="btn btn-dark btn-lg" href="#" role="button">Options</a>
    </div>

@endsection
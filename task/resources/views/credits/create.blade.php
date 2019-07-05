@extends('layout.prolayout')
@section('content')
    
<form>
         <div class="form-group">
                   <label >Month</label>
                   <input type="int" class="form-control" name="month" placeholder="Enter Month">
         </div>
         <div class="form-group">
                    <label >name</label>
                    <input type="text" class="form-control" name="name" placeholder="The name">
         </div>
         <div class="form-group">
                    <label >amount</label>
                    <input type="int" class="form-control" name="amount" placeholder="Enter amount">
         </div>
         <div class="form-group">
                    <label >reason</label>
                    <input type="text" class="form-control" name="reason" placeholder="Enter reason">
         </div>
         <div class="form-group">
                    <label >date</label>
                    <input type="date" class="form-control" name="date" placeholder="Enter date">
         </div>
         <div class="form-group">
                <label >balance</label>
                <input type="int" class="form-control" name="balance" placeholder="Enter balance">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>


@endsection
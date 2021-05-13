@extends('layout.general')


@section('content')
<div class="container">
    <form class="col-7">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">confirmed Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder=" confirmed Password">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>




@endsection
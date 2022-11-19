@extends('master')

@section('content')


<div class="container customLogin">
    <div class="row" style="justify-content: center;">
        <div class="col-md-4 border" style="padding: 50px;">
            <form action="register" method="POST">
                @csrf
                <h3 class="text-center" style="margin-bottom: 25px;">REGISTER PAGE</h3>

                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">User Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter User Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Valid Password">
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>

  @endsection

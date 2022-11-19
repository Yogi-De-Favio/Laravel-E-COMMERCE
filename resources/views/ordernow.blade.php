@extends('master')

@section('content')
<div class="container customProduct">
    <div class="col-sm-10" style="margin-top: 50px;">
        <table class="table table-hover">
            <tbody>
              <tr>
                <th>Amount</th>
                <td>RS :{{$total}} /-</td>
              </tr>
              <tr>
                <th>Tax</th>
                <td>RS:100/-</td>
              </tr>
              <tr>
                <th>Delivery</th>
                <td>0</td>
              </tr>
              <tr>
                <th>Total Amount</th>
                <td>RS :{{$total+100}} /-</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                  <textarea name="address" class="form-control" placeholder="Enter Your Address"></textarea>
                </div>

                <div class="form-group">
                  <h4><label for="pwd"><i class="bi bi-bag-fill me-3"></i>Payment Method</label></h4>
                  <input type="radio" value="cash" name="payment"><span>Online Payment</span><br>
                  <input type="radio" value="cash" name="payment"><span>EMI Payment</span><br>
                  <input type="radio" value="cash" name="payment"><span>Cash On Delivery</span><br>
                </div>

                <button type="submit" class="btn btn-success">Order Now</button>
              </form>
          </div>

    </div>
</div>

@endsection

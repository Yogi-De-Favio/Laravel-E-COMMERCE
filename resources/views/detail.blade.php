@extends('master')

@section('content')

<div class="container ">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$products['gallery']}}">
        </div>
        <div class="col-sm-6">
            <a class="btn btn-light" href="/"><i class="bi bi-arrow-left me-2"></i>Go Back</a>
            <h2>{{$products['name']}}</h2>
            <h3>Price : {{$products['price']}}</h3>
            <h4><b>Details : </b>{{$products['description']}}</h4>
            <h4><b>Category : </b>{{$products['category']}}</h4>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$products['id']}}">
                <button class="btn btn-primary" onclick="addcart('auto-close')">Add To Cart</button>
                <button class="btn btn-success" onclick="addcart('auto-close')">Buy Now</button>
            </form>
        </div>
    </div>
</div>

@endsection

@extends('master')

@section('content')
<div class="container customProduct">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            <a class="btn btn-success" href="ordernow"> Order Now</a><br><br>
            @foreach ($products as $item )
            <div class="row search-item cart-list-devider">
                <div class="col-sm-4">
                    <a href="detail/{{$item->id}}">
                        <img class="search-img" src="{{$item->gallery}}" alt="Products" width="100%">
                    </a>
                </div>
                <div class="col-sm-5">
                    <div class="">
                        <h2>{{$item->name}}</h2>
                        <h4>{{$item->description}}</h4>
                        <br>
                        <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning"  onclick="showSwal('auto-close')">Remove to Cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a class="btn btn-success" href="ordernow"> Order Now</a><br><br>
    </div>
</div>

@endsection

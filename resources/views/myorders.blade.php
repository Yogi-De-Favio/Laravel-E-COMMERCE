@extends('master')

@section('content')
<div class="container customProduct">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>MY ORDERS</h4>
            @foreach ($orders as $item )
            <div class="row search-item cart-list-devider">
                <div class="col-sm-4">
                    <a href="detail/{{$item->id}}">
                        <img class="search-img" src="{{$item->gallery}}" alt="Products" width="100%">
                    </a>
                </div>
                <div class="col-sm-6">
                        <div class="">
                        <h2>Name : {{$item->name}}</h2>
                        <h2>Price : {{$item->price}}</h2>
                        <h3>{{$item->description}}</h3>
                        <h4>Delivery Status : {{$item->status}}</h4>
                        <h4>Address : {{$item->address}}</h4>
                        <h4>Payment Status : {{$item->payment_status}}</h4>
                        <h4>Payment method : {{$item->payment_method}}</h4>
                        <br>
                        </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>

@endsection

@extends('master')

@section('content')
<div class="container customProduct">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            @foreach ($products as $item )
            <div class="search-item">
                <a href="detail/{{$item['id']}}">
                    <img class="search-img" src="{{$item['gallery']}}" alt="Products" width="100%">
                    <div class="">
                    <h2>{{$item['name']}}</h2>
                    <h4>{{$item['description']}}</h4>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

    </div>
</div>

@endsection

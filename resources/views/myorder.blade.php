@extends('master')
@section('content')
<div class="custom-product">

    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h1>Orders List</h1>
            <div class="">
                @foreach($orders as $item)
                <div class=" row searched-item cart-list-divider">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-img" src="{{$item->gallery}}">

                        </a>
                    </div>
                    <div class="col-sm-3">

                        <div class="">
                            <h3>{{$item->name}}</h3>
                            <h3>{{$item->description}}</h3>
                            <h5>Delivery Status : {{$item->status}}</h5>
                            <h5>Delivery Status : {{$item->payment_status}}</h5>
                            <h5>Delivery Method : {{$item->payment_method}}</h5>
                            <h5>Delivery Address : {{$item->address}}</h5>
                            <h5>Price : {{$item->price}}</h5>
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-3">

                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    @endsection
@extends('layout.general')


@section('content')
    
     <div class="container">
        <div class=" mt-4 ">
            <div>
                <p class="d-inline"> <a href="/"><i class="fa fa-home"></i> Home</a> <b>></b> </p>
                <p  class="d-inline"> <a href="/products">Shop</a>  </p>
            </div>
            <div class="d-flex">
            <ul class="category mr-5">
                    <li class="my-4">
                        <p ><b>By Category</b></p>
                    </li>
                    <li class="my-2">
                        <a href="{{route('products.category',['category'=>'laptop'])}}">Laptops</a>
                    </li>

                    <li class="my-2">
                        <a href="{{route('products.category',['category'=>'desktop'])}}">Desktops</a>
                    </li>
                    
                    <li class="my-2">
                        <a href="{{route('products.category',['category'=>'mobile'])}}">Mobile Phones</a>
                    </li>
                    
                    <li class="my-2">
                        <a href="{{route('products.category',['category'=>'tablet'])}}">Tablets</a>
                    </li>
                    
                    <li class="my-2">
                        <a href="{{route('products.category',['category'=>'tv'])}}">TVs</a>
                    </li>
                    
                    <li class="my-2">
                        <a href="{{route('products.category',['category'=>'camera'])}}"> Cameras</a>
                    </li>
                    
                    <li class="my-2">
                        <a href="{{route('products.category',['category'=>'appliance'])}}">Appliances</a>
                    </li>
          
            </ul>
            <div>
                <div class="d-flex justify-content-between">
                    <h4 class="py-4 ">{{strtoupper ($category)}}</h4>
                    <div class="d-flex category">
                        <h5 class="mr-2">Price  </h5>
                        <p class="mr-2"><a href="http://">High to Low</a> | </p>
                        <p><a href="http://">Low to High</a></p>
                    </div>
                </div>
                @include('layout.product')

            </div>
  
        </div>
  
        </div>
    </div>


    @endsection
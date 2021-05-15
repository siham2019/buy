@extends('layout.general')


@section('content')
<div class="container">

    <div>
        <p class="d-inline"> <a href="/"><i class="fa fa-home"></i> Home</a> <b>></b> </p>
        <p  class="d-inline"> <a href="{{route('products.category',['category'=>'all'])}}">Shop</a> > {{$product->name}} </p>
    </div>

    <div class="row">
        
        <div class="col-6 mt-5">
            <img src="{{$product->image}}" class="w-100" alt="" >

        </div>
        <div class="col-6 mt-5">
           <h2>{{$product->name}}</h2>
           <h5 class="text-secondary">{{$product->detail}}</h5>
            
            @if ($product->stock>0)

                 <p class="badge badge-info px-2" style="font-size: 18px;"> Avalaible</p>
            
            @else

                 <p class="badge badge-danger px-2" style="font-size: 18px;">Not Avalaible</p>

            @endif

           <p style="font-size: 1.5em"><b>233 44.45 $</b></p>
            
           <p class="mt-3">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, itaque?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic pariatur rerum quasi, maiores dolorem magni reprehenderit!
           </p>
        <form action="">
            <button type="submit" class="container btn btn-outline-info">ADD TO CART</button>
        </form>
        </div>
    </div>
  
</div>
{{-- 
    <div class="container mt-5">
      <h1 class="mb-4">you might also like ...</h1>
        
          @include('layout.product')

        
    </div> --}}

@endsection
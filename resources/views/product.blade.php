@extends('layout.general')


@section('content')
<div class="container">
    <div>
        <p class="d-inline"> <a href="/"><i class="fa fa-home"></i> Home</a> <b>></b> </p>
        <p  class="d-inline"> <a href="/products">Shop</a>  </p>
    </div>

    <div class="row">
        
        <div class="col-6 mt-5">
            <img src="https://feat.ws/uploads/posts/2021-02/1613159454_laptop2.jpg" class="w-100" alt="" >

        </div>
        <div class="col-6 mt-5">
           <h2>{{$product}}</h2>
           <h5 class="text-secondary">detail ffggdfd ffddffggdfdf ffdfdffdf fffffffdfd</h5>
           <p class="badge badge-danger px-2" style="font-size: 18px;">Not Avalaible</p>
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
<div class="jumbotron jumbotron-fluid mt-5 ">
    <div class="container">
      <h1 class="mb-4">you might also like ...</h1>
        
          @include('layout.product')

        
    </div>
  </div>
@endsection
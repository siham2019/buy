@extends('layout.general')


@section('content')
     @include('layout.search')
          <div class="d-flex justify-content-center mt-4 mb-5">

               <a href="" class="border-bottom border-primary mr-3 pb-2 link">featured</a>
               <a href="" class="link">on sale</a>
        
          </div>
          
         @include('layout.product')
        <div class="text-center">
          <a  href="{{route('products.category',['category'=>'all'])}}" class="btn btn-info mb-5">view more products</a>
        </div>
        
@endsection


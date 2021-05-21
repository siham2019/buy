@extends('layouts.general')

@section('content')

<div class="container my-4">
  <h3>Card Details </h3>
  @if (session('success'))
  <p class="alert alert-success">{{session('success')}}</p>
@endif
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            
            @if ($cart->count()>0)
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
               {{--          <th>Quantity</th> --}}
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>

                 @foreach ($cart as $product)
                 <tr>
                     <td class="col-sm-8 col-md-6">
                     <div class="media">
                        <img class="media-object" src="{{$product->model->image_url}}" style="width: 72px; height: 72px;"> 
                         <div class="media-body ml-2">
                             <h4 class="media-heading">{{$product->name}}</h4>
                             <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>

                         </div>
                     </div></td>
                     <td class="col-sm-1 col-md-1 text-center"><strong>{{$product->price}} $</strong></td>

                     <td class="col-sm-1 col-md-1 text-center"><strong>{{$product->price}} $</strong></td>
                     <td class="col-sm-1 col-md-1">

                         <form action="{{route('cart.destroy')}}" method="post">
                             @csrf
                             @method('delete')
                            <input type="hidden" name="rowId" value="{{$product->rowId}}">
                             <button type="submit" class="btn btn-danger">
                                 <span class="glyphicon glyphicon-remove"></span> Remove
                             </button>

                         </form>
                    </td>
                 </tr>
                 @endforeach
              
                 
            {{--    --}}
             </tbody>
         </table>
         <table class="ml-auto mr-0">
             <tbody>
                 <tr>
                     <td>   </td>
                     <td>   </td>
                     <td>   </td>
                     <td><h5>Subtotal</h5></td>
                     <td class="text-right"><h5><strong>{{Cart::Subtotal()}} $</strong></h5></td>
                 </tr>
                 <tr>
                     <td>   </td>
                     <td>   </td>
                     <td>   </td>
                     <td><h5>tax</h5></td>
                     <td class="text-right"><h5><strong>{{Cart::tax()}} $</strong></h5></td>
                 </tr>
                 <tr>
                     <td>   </td>
                     <td>   </td>
                     <td>   </td>
                     <td><h3>Total</h3></td>
                     <td class="text-right"><h3><strong>{{Cart::total()}} $</strong></h3></td>
                 </tr>
                 <tr>
                     <td>   </td>
                     <td>   </td>
                     <td>   </td>
                 
                     <td>
                     <a href="{{ route('checkout') }}" class="btn btn-success">
                         Checkout <span class="glyphicon glyphicon-play"></span>
                     </a></td>
                 </tr> 
             </tbody>
         </table>
                 @else
                 <p>the cart is empty</p>
                 @endif
        </div>
    </div>
</div>
@endsection
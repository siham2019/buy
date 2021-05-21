@extends('layout.general')


@section('content')
   
   <div class="container">
        <h4 >{{Cart::count()}} item(s) in Shopping Cart</h4>
        @include('alert.success')
        @include('alert.error')
       
        <table class="table mt-4">
            <tbody>


                @foreach ($cart as $c)
                <tr>
                    <td>
                        <div class="d-flex">
                            <img src="{{$c->model->image}}" class="prod" alt="">
                             <div class="ml-3">
                                <p class="mt-2 name mb-0">{{$c->name}}</p>
                                <p style="color: rgb(104, 98, 98)">{{$c->model->price}} </p>
                             </div>
                        </div>
                    </td>
                    <td>
                       
                           <a href="{{route('cart.remove',$c->rowId)}}">remove</a>
                           <a href="">save later</a>
                    
                    </td>
                    <td>
                       
                      <form action="">
                        <select name="" id="">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                      </form>
                 
                    </td>
                    
                    <td>
                        {{$c->subtotal}} DA
                    </td>



                </tr>
                   
              @endforeach        
            
            </tbody>
        </table>

        {{--  begin --}}
       <div class="d-flex justify-content-end">

         <div class="mr-3">
             <p>Have a code?</p>
         
               <form class="form-inline">
                   <div class="form-inline">
                     
                       <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                       <button type="submit" class="btn btn-info ml-2">Apply </button>
                   </div>
               </form>
         </div>
         
         <div>
            
            <div class="d-flex">
                <h5 class="mr-2">Sub Total</h5>
                <p>{{Cart::Subtotal()}} DA</p>
            </div>

           <div class="d-flex">
              <h5 class="mr-2">Tax</h5>
              <p>{{Cart::tax()}} DA</p>
           </div>
         
           <div class="d-flex">
            <h5 class="mr-2">Total</h5>
            <p>{{Cart::total()}} DA</p>
         </div>
 

        </div>
        
        

      </div>
     

      <div class="d-flex justify-content-end">
           <a href="/" class="btn btn-outline-info ">Continue Shopping</a>
           <a href="/checkout" class="btn btn-dark ml-2">Proceed to Checkout</a>
      </div>

      


    </div>
   



@endsection
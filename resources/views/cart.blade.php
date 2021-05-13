@extends('layout.general')


@section('content')

    <div class="container">
        <h4 >1 item(s) in Shopping Cart</h4>
        <table class="table mt-4">
            <tbody>
                <tr>
                    <td>
                        <div class="d-flex">
                            <img src="https://feat.ws/uploads/posts/2021-02/1613159454_laptop2.jpg" class="prod" alt="">
                             <div class="ml-3">
                                <p class="mt-2 name mb-0">ffss eee</p>
                                <p style="color: rgb(104, 98, 98)">34 566.33 $</p>
                             </div>
                        </div>
                    </td>
                    <td>
                       
                           <a href="">remove</a>
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
                        2345 55 $
                    </td>



                </tr>
                <tr>
                    <td>
                        <div class="d-flex">
                            <img src="https://feat.ws/uploads/posts/2021-02/1613159454_laptop2.jpg" class="prod" alt="">
                             <div class="ml-3">
                                <p class="mt-2 name mb-0">ffss eee</p>
                                <p style="color: rgb(104, 98, 98)">34 566.33 $</p>
                             </div>
                        </div>
                    </td>
                    <td>
                       
                           <a href="">remove</a>
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
                        2345 55 $
                    </td>



                </tr>
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
                <p>3 440 DA</p>
            </div>

           <div class="d-flex">
              <h5 class="mr-2">Tax</h5>
              <p>3 440 DA</p>
           </div>
         
           <div class="d-flex">
            <h5 class="mr-2">Total</h5>
            <p>3 440 DA</p>
         </div>
 

        </div>
        
        

      </div>
     

      <div class="d-flex justify-content-end">
           <a href="/" class="btn btn-outline-info ">Continue Shopping</a>
           <a href="/checkout" class="btn btn-dark ml-2">Proceed to Checkout</a>
      </div>

      


    </div>
   



@endsection
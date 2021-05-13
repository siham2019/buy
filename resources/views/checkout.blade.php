@extends('layout.general')


@section('content')
   
         <div class="container">
             
            <h2>Checkout</h2>
              <div class="row mt-4">
                   
                   <div class="col-7">
                       <h4>Billing Information</h4>

                       <form>
                        
                          <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                          </div>
                        
                          <div class="form-group">
                             <label for="name">name</label>
                             <input type="text" class="form-control" id="name">
                        </div>

                        <div class="form-group">
                            <label for="adress">adress</label>
                            <input type="text" class="form-control" id="adress">
                        </div>
                        
                        <div class="form-group">
                            <label for="city">city</label>
                            <input type="text" class="form-control" id="city">
                        </div>

                        <div class="form-group">
                            <label for="province">province</label>
                            <input type="text" class="form-control" id="province">
                        </div>
                     
                        <div class="form-group">
                            <label for="postal">postal code</label>
                            <input type="text" class="form-control" id="postal">
                        </div>
                     
                        <div class="form-group">
                            <label for="phone">phone</label>
                            <input type="text" class="form-control" id="phone">
                        </div>


                        <button type="submit" class="btn btn-primary container">complete your order</button>
                      </form>


                      <h4>Card Information</h4>

                      <h4>Pay with Paypal</h4>









                   </div>
                   
                   <div class="col-5">
                        <h4>your order</h4>
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

                                    
                
                                    
                                    <td >
                                       <div class="border border-dark px-3">
                                        2
                                       </div>
                                       
                                    </td>
                
                
                
                                </tr>
                             
                            </tbody>
                        </table>
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

              </div>

         </div>

@endsection
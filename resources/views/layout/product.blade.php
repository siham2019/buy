
    <div class="container">
        <div class="row">


        @foreach ($products as $product)
        <div class="col-4 text-center">
            <a href="{{route('products.detail',['product'=>$product])}}" class="link-light">
                <img src="{{$product->image}}" class="w-100" alt="" >
                <p class="mt-2 name mb-0">{{$product->name}}</p>
                <p style="color: rgb(104, 98, 98)">{{$product->price}} $</p>
            </a>
            
       </div>
        @endforeach
        
   
    
    </div>

</div>
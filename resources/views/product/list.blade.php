@extends("home")
@section("content")
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('product.showCard')}}">Cart(
                        {{\Illuminate\Support\Facades\Session::has('cart')?\Illuminate\Support\Facades\Session::get('cart')->totalProduct:"0"}}
                        )</a>
                </li>
            </ul>
        </div>
    </nav>
    <h1>Danh sach san pham</h1>
    @if (\Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{\Illuminate\Support\Facades\Session::get('success')}}
        </div>
    @endif
    <div class="row ">
        @foreach($products as $product)
            <div class="col-4 border border-dark">
                <div class="product" style="width: 18rem;">
                    <img src="{{asset("/storage/$product->image")}}" alt="">
                </div>
                <div class="product-body">
                    <h5 class="product-title">{{$product->name}}</h5>
                    <p class="product-description">{{$product->description}}</p><br>
                    <p class="product-price">Price: {{$product->price}}</p>
                    {{--                    {{ route('cart.addToCart', $product->id) }}--}}
                    <a href="{{route("product.addToCart",$product->id)}}" class="btn btn-success">Add to Cart</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection()

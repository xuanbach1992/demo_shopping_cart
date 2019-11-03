@extends('home')
@section('content')
    <h1>{{ "Chi tiết giỏ hàng" }}</h1>
    <div class="col-12 col-md-12 mt-2 border">
        <table id="cart" class="table table-hover">
            <thead>
            <tr>
                <th style="width:50%">Product</th>
                <th style="width:10%">Price</th>
                <th style="width:8%">Quantity</th>
                <th style="width:22%" class="text-center">Subtotal</th>
            </tr>
            </thead>
            <tbody>
            @if(\Illuminate\Support\Facades\Session::has('cart'))
                @foreach($products->products as $item)
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-md-2 hidden-xs"><img
                                        src="{{ asset('storage/' . $item['product']->image) }}"
                                        alt="..."
                                        class="img-responsive" width="100%"/></div>
                                <div class="col-md-10">
                                    <h4 class="nomargin">{{ $item['product']->name }}</h4>
                                </div>+++++++
                            </div>
                        </td>
                        <td data-th="Price">{{$item['product']->price." VND"}} </td>
                            <td>
                                <input type="number" class="form-control text-center" min="0" name="quantity"
                                       value="{{ $item['totalQty'] }}">
                            </td>
                            <td data-th="Subtotal" class="text-center">{{ $item['price']  }}</td>
                            <td class="actions">
                                <button class="btn btn-info btn-sm" type="submit">Mua sau</button>
                                <a class="btn btn-danger btn-sm"
                                   href="{{route('cart.deleteProduct', $item['product']->id)}}">aaaa</a>
                            </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
            <tr>
                <td><a href="{{ route("product.list") }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                </td>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center"><strong>Tổng tiền: {{ $products->totalPrice }} VND</strong></td>
                <td><a href="#" class="btn btn-success btn-block">Order</a></td>
            </tr>
            </tfoot>
            @else
                <tr>
                    <td colspan="5" class="text-center"><p>{{ "Bạn chưa mua sản phẩm nào" }}</p></td>
                </tr>
            @endif
        </table>

    </div>

@endsection

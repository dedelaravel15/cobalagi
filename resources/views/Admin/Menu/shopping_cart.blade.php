@extends('index')

@section('cart')
@extends('index')

@section('cart')
<div class="container">
  <table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">stock</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @php $total += $details['price'] * $details['stock'] @endphp
                <tr data-id="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ asset('IMG') }}/{{ $details['image'] }}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ $details['price'] }}</td>
                    <td data-th="stock">
                        <input type="number" value="{{ $details['stock'] }}" class="form-control stock cart_update" min="1" />
                    </td>
                    <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['stock'] }}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> Delete</button>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" style="text-align:right;"><h3><strong>Total ${{ $total }}</strong></h3></td>
        </tr>
        <tr>
            <td colspan="5" style="text-align:right;">
                <form action="/checkout" method="POST">
                    @csrf
                <a href="{{ url('/') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Continue Shopping</a>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button class="btn btn-success" type="submit" id="checkout-live-button"><i class="fa fa-money"></i> Checkout</button>
                </form>
            </td>
        </tr>
    </tfoot>
  </table>
  </div>
  @endsection

  @section('scripts')
  <script type="text/javascript">

    $(".cart_update").change(function (e) {
          e.preventDefault();

          var ele = $(this);

          $.ajax({
              url: '{{ route('update_cart') }}',
              method: "patch",
              data: {
                  _token: '{{ csrf_token() }}',
                  id: ele.parents("tr").attr("data-id"),
                  stock: ele.parents("tr").find(".stock").val()
              },
              success: function (response) {
                 window.location.reload();
              }
          });
      });

    $(".cart_remove").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Do you really want to remove?")) {
            $.ajax({
                url: '{{ route('remove_from_cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

  </script>
  @endsection

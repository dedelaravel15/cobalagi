@extends('index')

@section('Menu')


@if (session()->has('message'))
    {{session('message')}}
@endif

<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                  @if (session()->has('success'))
                  <div class="alert alert-success" role="alert">
                    {{session('success')}}
                  </div>
                  @endif
                </div>
              </div>
            <h3 class="card-title">{{ ($item->name) }}</h3>
            <h6 class="card-subtitle">globe type chair for rest</h6>
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="white-box text-center"><img src="{{ asset('IMG') }}/{{$item->image}}" class="img-responsive"></div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6">
                <form method="post"  action="{{route('add_cart', $item)}}">
                        @csrf
                    <h4 class="box-title mt-5">Product description</h4>
                    <p></p>
                    <h2 class="mt-5">
                        ${{ $item->price }}<small class="text-success">(36%off)</small>
                    </h2>
                    <button class="btn btn-dark btn-rounded mr-1" data-toggle="tooltip" title="" data-original-title="Add to cart">
                        <i class="bi bi-shopping-cart"></i>
                    </button>
                    <input type="number" name="amount" id="">
                    <button type="submit" class="btn btn-success">Add to cart</button>
                </form>
                <h3 class="box-title mt-5">Key Highlights</h3>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-check text-success"></i>Sturdy structure</li>
                        <li><i class="fa fa-check text-success"></i>Designed to foster easy portability</li>
                        <li><i class="fa fa-check text-success"></i>Perfect furniture to flaunt your wonderful collectibles</li>
                    </ul>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3 class="box-title mt-5">General Info</h3>
                    <div class="table-responsive">
                        <table class="table table-striped table-product">
                            <tbody>
                                <tr>
                                    <td width="390">Brand</td>
                                    <td>Stellar</td>
                                </tr>
                                <tr>
                                    <td>Delivery Condition</td>
                                    <td>Knock Down</td>
                                </tr>
                                <tr>
                                    <td>Seat Lock Included</td>
                                    <td>Yes</td>
                                </tr>
                                <tr>
                                    <td>Type</td>
                                    <td>Office Chair</td>
                                </tr>
                                <tr>
                                    <td>Style</td>
                                    <td>Contemporary&amp;Modern</td>
                                </tr>
                                <tr>
                                    <td>Wheels Included</td>
                                    <td>Yes</td>
                                </tr>
                                <tr>
                                    <td>Upholstery Included</td>
                                    <td>Yes</td>
                                </tr>
                                <tr>
                                    <td>Upholstery Type</td>
                                    <td>Cushion</td>
                                </tr>
                                <tr>
                                    <td>Head Support</td>
                                    <td>No</td>
                                </tr>
                                <tr>
                                    <td>Suitable For</td>
                                    <td>Study&amp;Home Office</td>
                                </tr>
                                <tr>
                                    <td>Adjustable Height</td>
                                    <td>Yes</td>
                                </tr>
                                <tr>
                                    <td>Model Number</td>
                                    <td>F01020701-00HT744A06</td>
                                </tr>
                                <tr>
                                    <td>Armrest Included</td>
                                    <td>Yes</td>
                                </tr>
                                <tr>
                                    <td>Care Instructions</td>
                                    <td>Handle With Care,Keep In Dry Place,Do Not Apply Any Chemical For Cleaning.</td>
                                </tr>
                                <tr>
                                    <td>Finish Type</td>
                                    <td>Matte</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection

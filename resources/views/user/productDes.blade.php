@extends('user.layout.main')
@section('content')

<div class="container" id="product-section" style="padding-top: 30px; padding-bottom:30px;">
  <div class="row">
    <div class="col-md-6">
      <img src="{{asset($product->image)}}" alt="" width="400px" height="250px" />
    </div>
    <div class="col-md-6">
      <h2>{{$product->name}}</h2>
      <p> <strong>Price:</strong> {{$product->price}}</p>
      <p>{{$product->category['name']}}</p>
      <p> <strong> Description:</strong>{{$product->description}}</p>


      <div style="padding-left: 20px;"><a href="/addCart/{{$product->id}}"><button type="button" class="btn btn-dark"> Add to Cart</button></a></div>

    </div>
  </div><!-- end row -->
</div>

@endsection
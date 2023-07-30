@extends('user.layout.main')
@section('content')
<style>
.card {
    margin: 20px;
    margin-top: 20px;
    max-width: 350px;
    max-height: 432px;
    padding: 36px 34px;
    border-radius: 5px;
    box-shadow: 0 5px 8px 0 rgb(210, 207, 207);
}

.container {
    width: calc(100%/4 -20px);
    /* padding-top: 12px; */
}


.gallery {
    display: flex;
    flex-wrap: wrap;
    margin-left: 8%;
    gap: 30px;
}

</style>

@if($products->count() < 1)

<div>
  <div class="text-center">
    <h3>No Product Found</h3>
  </div>
</div>
@endif


<div class="gallery">
    @foreach($products as $product)
    <div class="card">
    <div class="container">
      <div class="img-auth">
      <img src="{{asset($product->image)}}" alt="image" width="100" height="100">
      </div>
      <div class="heading">
        <h3>{{$product->name}}</h3>
        <p>{{$product->price}}</p>
        <p>{{$product->description}} </p>
        <p style="font-size: 20px; font-weight: bold">{{$product->category['name']}}</p>
          <div> <a href="/product-description/{{$product->id}}"> <button type="button" class="btn btn-dark btn-sm"> Show more </button> </a> </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

@endsection



<!-- AJAX RELOAD QUANTITY WITHOUT RELOAD -->

<!-- CHECKOUT PAGE -->


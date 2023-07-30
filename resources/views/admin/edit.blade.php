@extends('admin.layout.main')
@section('content')

<div class="w3-container" style="margin-top: 50px">
        <div class="w3-modal-content w3-animate-zoom w3-card-4 w3-padding w3-round" style="width: 40%">
            <header class="w3-container w3-border-bottom w3-border-teal w3-center">
                <h2>Edit note</h2>
            </header>
            <div class="w3-container w3-padding">
                <form action="/update-product/{{$product->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="w3-container">
                        <label>Name</label>
                        <input class="w3-input" type="text" name="name" value="{{$product->name}}" required />
                    </div>
                    <div class="w3-container">
                        <label>Price</label>
                        <input class="w3-input" type="text" name="price" value="{{$product->price}}" required />
                    </div>
                    <br />
                    <div class="w3-container">
                        <input class="w3-input" type="file" name="image" />
                        </div>

                    <div class="w3-container">
                        <label>Description</label>
                        <input class="w3-input" rows="5" columns="8" name="description" value="{{$product->description}}" required></input>
                    </div>

                    <div class="w3-container w3-center">
                        <button type="submit" class="w3-button w3-teal w3-round w3-margin-top" >
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @endsection
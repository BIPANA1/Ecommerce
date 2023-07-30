@extends('admin.layout.main')
@section('content')

<div class="container">
  <div class="d-flex flex-wrap mx-n2">
    @foreach($products as $product)
    <div class="w3-col s4 l3 w3-margin-top px-2" style="width: calc(33.33% - 4%); margin: 2%; ">
      <div class="w3-card w3-white w3-round">
        <div class="w3-container">
          <div class="w3-container w3-center w3-padding-8">
            <img src="{{asset($product->image)}}" alt="image" width="100" height="100">
          </div>
          <br>
          <div class="w3-container w3-center w3-padding-8">
            <p style="font-size: 20px; font-weight: bold">{{$product->name}}</p>
          </div>
          <div class="w3-container w3-center w3-padding-8">
            <p style="font-size: 20px; font-weight: bold">{{$product->price}}</p>
          </div>
          <div class="w3-container w3-center w3-padding w3-border-top" style="height: 120px">{{$product->description}}</div>
          <div class="w3-container w3-center w3-padding-8">
            <p style="font-size: 20px; font-weight: bold">{{$product->category['name']}}</p>
          </div>
          <div class="w3-row-padding w3-border-top w3-padding-8">
            <a href="/edit/{{$product->id}}" class="w3-button w3-left w3-xlarge"><i class="fa-solid fa-pen-to-square" style="color: #049175f7"></i></a>
            <a href="/delete/{{$product->id}}" class="w3-button w3-right w3-xlarge"><i class="fa-solid fa-trash" style="color: #b90707"></i></a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>







        <!-- end of for each loop here -->
        <button class="w3-button w3-xxlarge w3- w3-orange bordergit branch -M main w3-round-large w3-display-bottomright w3-margin" onclick="document.getElementById('add').style.display='block'" style="position: fixed; right: 16px; bottom: 16px">
            <i class="fa-sharp fa-solid fa-plus fa-beat-fade fa-xl" style="color: #0b120a"></i>
        </button>

        <!-- This is the modal to add new note -->
        <div id="add" class="w3-modal">
            <div class="w3-modal-content w3-animate-zoom w3-card-4 w3-padding w3-round" style="width: 40%">
                <header class="w3-container w3-border-bottom w3-border-teal w3-center">
                    <span onclick="document.getElementById('add').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                    <h2>Add Product</h2>
                </header>
                <div class="w3-container w3-padding">
                    <form action="/add-product" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="w3-container">
                            <label>Name</label>
                            <input class="w3-input" type="text" name="name" placeholder="Enter product name here..." required />
                        </div>
                        <br />
                        <div class="w3-container">
                        <input class="w3-input" type="file" name="image" />
                        </div>
                        <div class="w3-container">
                        <label>Price</label>
                        <input class="w3-input" type="text" name="price" />
                        </div>

    
  
                        <div class="w3-container">
                            <label>Description</label>
                            <textarea class="w3-input" rows="5" columns="8" name="description" placeholder="Enter description here..." required></textarea>
                        </div>

                        <div class="w3-container">
                            <label>Category</label>
                           <select name="category_id" id="" class="w3-input">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                           </select>
                        </div>



                        <div class="w3-container w3-center">
                            <button type="submit" class="w3-button w3-teal w3-round w3-margin-top">
                                Add
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




@endsection


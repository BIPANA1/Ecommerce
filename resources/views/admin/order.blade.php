@extends('admin.layout.main')
@section('content')

<style>
table, th, td {
    border: 1px solid black;
}

table {
    width: 70%;
    height: 70%;
    border-collapse: collapse;
    margin-top: 20px;
    margin-left: 15%;
   
   
}

th {
    background-color: #696161;
    color: #fef8f8;
    padding: 10px;
    text-align: left;
}

td {
    padding: 15px 20px;
    border-bottom: 1px solid #ddd;
}
    </style>

<table >
  
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>contact</th>
        <th>message</th>
        <th>Product ID</th>
        <th>Product quantity</th>
        <th>Total price</th>
        <th>Ordered date</th>
       
    </tr>
   @foreach($order_details as $detail)
    @foreach($orders as $order)

    <tr>
   <td>{{$order->customer_name}}</td>
   <td>{{$order->address}}</td>
   <td>{{$order->contact}}</td>
   <td>{{$order->message}}</td>
   <td>{{$detail->product_id}}</td>
   <td>{{$detail->qty}}</td>
   <td>{{$order->total_price}}</td>
   <td>{{$order->created_at}}</td>
 
    </tr>
  
    @endforeach
    @endforeach
</table>

@endsection
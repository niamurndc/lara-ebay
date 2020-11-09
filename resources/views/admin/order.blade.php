@extends('layouts.admin')

@section('content')
<section>
  <h3>All Orders</h3>

  <div class="table-wrapper">
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Time</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Billing Address</th>
          <th>Shipping Address</th>
          <th>Total</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($orders as $order)
        <tr>
          <td>{{$order->name}}</td>
          <td>{{$order->created_at->diffForHumans()}}</td>
          <td>{{$order->phone}}</td>
          <td>{{$order->email}}</td>
          <td>{{$order->area}}</td>
          <td>{{$order->address}}</td>
          <td>{{$order->total}}</td>
          <td><a href="/admin/view/order/{{$order->id}}" class="button small">View</a></td>
          <td><a href="/admin/delete/order/{{$order->id}}" class="button primary small">Delete</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <!-- pagination -->
  <ul class="pagination">
    <li><span class="button disabled">Prev</span></li>
    <li><a href="#" class="page active">1</a></li>
    <li><a href="#" class="page">2</a></li>
    <li><a href="#" class="page">9</a></li>
    <li><a href="#" class="page">10</a></li>
    <li><a href="#" class="button">Next</a></li>
  </ul>
</section>
@endsection
@extends('layouts.admin')

@section('content')
<section>
  <h3>All Customers</h3>

  <div class="table-wrapper">
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Registered</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
        <tr>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->created_at->diffForHumans()}}</td>
          <td><a href="/admin/delete/user/{{$user->id}}" class="button primary small">Delete</a></td>
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
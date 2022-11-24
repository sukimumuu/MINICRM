@extends('layout.main')
@section('container')

   <div class="content">
    <div class="row">
        <div class="col-md-12">
    <div class="card bg-dark">
      <div class="card-header">
        <h4 class="card-title"> Employee List</h4>
      </div>
      @php
          $no=1;
      @endphp
      @if($message = Session::get('success'))
      <div class="alert alert-success" role="alert">
        {{ $message }}
      </div>
      @endif
      <div class="card-body">
          <table class="table tablesorter py-4" id="example">
            <a href="/employee/add" class="btn btn-success">Add Data +</a>
            <thead class=" text-primary">
              <tr>
                <th>No</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Company</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Ability</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
               @foreach ($daplo as $key2)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $key2->firstname }}</td>
                <td>{{ $key2->lastname }}</td>
                <td>{{ ($key2->company !== null) ? $key2->companies->name : '-' }}</td>
                <td>{{ $key2->email }}</td>
                <td>{{ $key2->phone }}</td>
                <td>{{ $key2->gender }}</td>
                <td>{{ $key2->hobbies }}</td>
                <td>
                    <a href="/employee/{{ $key2->id }}/edit"><button type="button" class="btn btn-warning">Edit</button></a>
                    <a href="/employee/{{ $key2->id }}/delete"><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
    </div>
    </div>
    </div>
  
@endsection
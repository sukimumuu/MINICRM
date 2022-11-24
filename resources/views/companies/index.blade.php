@extends('layout.main')
@section('container')

   <div class="content">
    <div class="row">
        <div class="col-md-12">
    <div class="card bg-dark ">
      <div class="card-header">
        <h4 class="card-title"> Companies List</h4>
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
            <a href="/companies/add" class="btn btn-success">Add Data +</a>
            <thead class=" text-primary">
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Logo</th>
                <th>Website</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
               @foreach ($dacom as $key)
              <tr>
                <td>{{ $no++ }}</td>\
                <td>{{ $key->name }}</td>
                <td>{{ $key->email }}</td>
                <td>
                    <img src="{{ asset('logo/'.$key->logo) }}" alt="" width="100px">
                </td>
                <td>{{ $key->web }}</td>
                <td>
                    <a href="/companies/{{ $key->id }}/edit"><button type="button" class="btn btn-warning">Edit</button></a>
                    <a href="/companies/{{ $key->id }}/delete"><button type="button" class="btn btn-danger">Delete</button></a>
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
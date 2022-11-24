@extends('layout.main')
@section('container')
          <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-dark">
                        <div class="card-header">
                            <h3 class="card-title">Add Companies Data </h3>
                        </div>
                         <div class="card-body">
                            <div class="container">
                            <form action="/companies/create" method="post" enctype="multipart/form-data">
                                @csrf
                              <div class="mb-3">
                                <label for="name" class="form-label" style="font-size: 16px">Name Companies</label>
                                <input type="text" class="form-control" id="name" name="name">
                              </div>
                              <div class="mb-3">
                                <label for="email" class="form-label" style="font-size: 16px">Email address</label>
                                <input type="email" class="form-control" id="email" name="email">
                              </div>
                              <div class="mb-3">
                                <label for="logo" class="form-label" style="font-size: 16px">Logo</label>
                                <input type="file" class="form-control" id="logo" name="logo">
                              </div>
                              <div class="mb-3">
                                <label for="web" class="form-label" style="font-size: 16px">Website</label>
                                <input type="text" class="form-control" id="web" name="web">
                              </div>
                            </div>
                            <div class="card-footer text-center"><button type="submit" class="btn btn-primary">Save changes</button></div>
                            </form>
                        </div>
                         </div>
                    </div>
                </div>
            </div>
          </div>
@endsection
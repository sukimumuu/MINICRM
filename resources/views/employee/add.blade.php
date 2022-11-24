@extends('layout.main')
@section('container')
          <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-dark">
                        <div class="card-header">
                            <h3 class="card-title">Add Employee Data </h3>
                        </div>
                         <div class="card-body">
                            <div class="container">
                            <form action="/employee/create" method="post" enctype="multipart/form-data">
                                @csrf
                              <div class="mb-3">
                                <label for="firstname" class="form-label" style="font-size: 16px">First name</label>
                                <input type="text" class="form-control" id="firstname" name="firstname">
                                @error('firstname')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                              <div class="mb-3">
                                <label for="lastname" class="form-label" style="font-size: 16px">Last name</label>
                                <input type="text" class="form-control" id="lastname" name="lastname">
                                @error('lastname')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                              <div class="mb-3">
                                <label for="company" class="form-label" style="font-size: 16px">Company</label><br>
                                <select name="company" id="company" style="width: 20%; text-align:center; height:40px; font-size: 16px; border-radius:10px; outline:none;">
                                        <option value="">Choose</option>
                                    @foreach ($dacom as $option)
                                        <option value="{{ $option->id }}">{{ $option->name }}</option>
                                    @endforeach
                                </select>
                              </div>
                              <div class="mb-3">
                                <label for="email" class="form-label" style="font-size: 16px">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                                @error('email')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                              <div class="mb-3">
                                <label for="phone" class="form-label" style="font-size: 16px">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                                @error('phone')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                              <div class="mb-3">
                                <label for="gender" class="form-label" style="font-size: 16px">Gender</label>
                                <div style="margin-left: 20px">
                                  <input class="form-check-input" type="radio" name="gender" id="genderm" value="Male" required>
                                  <label class="form-label" for="genderm" style="font-size: 16px">
                                    Male
                                  </label>
                                </div>
                                <div style="margin-left: 20px">
                                  <input class="form-check-input" type="radio" name="gender" id="genderf" value="Female" required>
                                  <label class="form-label" for="genderf" style="font-size: 14px">
                                    Female 
                                  </label>
                              </div>
                              </div>
                              <div class="mb-3">
                                <label for="hobbies" class="form-label" style="font-size: 16px">Ability</label><br>
                                <label for="hobbies" style="font-size: 16px;"><input type="checkbox" name="hobbies[]" id="hobbies" value="HTML"> HTML</label>
                                <label for="hobbies" style="font-size: 16px;"><input type="checkbox" name="hobbies[]" id="hobbies" value="Java"> Java</label>
                                <label for="hobbies" style="font-size: 16px;"><input type="checkbox" name="hobbies[]" id="hobbies" value="Laravel"> Laravel</label>
                                <label for="hobbies" style="font-size: 16px;"><input type="checkbox" name="hobbies[]" id="hobbies" value="Android"> Android</label>
                                <label for="hobbies" style="font-size: 16px;"><input type="checkbox" name="hobbies[]" id="hobbies" value="Design"> Design</label>
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
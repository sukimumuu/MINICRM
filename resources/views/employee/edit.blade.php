@extends('layout.main')
@section('container')
          <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-dark">
                        <div class="card-header">
                            <h3 class="card-title">Edit Employee Data </h3>
                        </div>
                         <div class="card-body">
                            <div class="container">
                            <form action="/employee/{{ $daplo->id }}/update" method="post">
                                @csrf
                              <div class="mb-3">
                                <label for="firstname" class="form-label" style="font-size: 16px">First name</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" value="{{ $daplo->firstname }}">
                              </div>
                              <div class="mb-3">
                                <label for="lastname" class="form-label" style="font-size: 16px">Last name</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $daplo->lastname }}" >
                              </div>
                              <div class="mb-3">
                                <label for="company" class="form-label" style="font-size: 16px">Company</label>
                                <select name="company" id="company">
                                    @foreach ($dacom as $option)
                                        <option value="{{ $option->id }}">{{ $option->name }}</option>
                                    @endforeach
                                </select>
                              </div>
                              <div class="mb-3">
                                <label for="email" class="form-label" style="font-size: 16px">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $daplo->email }}" >
                              </div>
                              <div class="mb-3">
                                <label for="phone" class="form-label" style="font-size: 16px">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ $daplo->phone }}" >
                              </div>
                              <div class="mb-3">
                                <label for="gender" class="form-label" style="font-size: 16px">Gender</label>
                                <div style="margin-left: 20px">
                                  <input class="form-check-input" type="radio" name="gender" id="genderm" value="Male" {{ ($daplo->gender === "Male") ? 'checked' : '' }}>
                                  <label class="form-label" for="genderm" style="font-size: 16px">
                                    Male
                                  </label>
                                </div>
                                <div style="margin-left: 20px">
                                  <input class="form-check-input" type="radio" name="gender" id="genderf" value="Female" {{ ($daplo->gender === "Female") ? 'checked' : '' }}>
                                  <label class="form-label" for="genderf" style="font-size: 14px">
                                    Female 
                                  </label>
                              </div>
                              </div>
                              <div class="mb-3">
                                <label for="hobbies" class="form-label" style="font-size: 16px">Hobby</label>
                                <label for="hobbies" style="font-size: 14px;"><input type="checkbox" name="hobbies[]" id="hobbies" value="HTML"   {{ (in_array('HTML', $daplo->hobbies)) ? 'checked' : '' }}>HTML</label>
                                <label for="hobbies" style="font-size: 14px;"><input type="checkbox" name="hobbies[]" id="hobbies" value="Java"   {{ (in_array('Java', $daplo->hobbies)) ? 'checked' : '' }}>Java</label>
                                <label for="hobbies" style="font-size: 14px;"><input type="checkbox" name="hobbies[]" id="hobbies" value="Laravel"   {{ (in_array('Laravel', $daplo->hobbies)) ? 'checked' : '' }}>Laravel</label>
                                <label for="hobbies" style="font-size: 14px;"><input type="checkbox" name="hobbies[]" id="hobbies" value="Android" {{ (in_array('Android', $daplo->hobbies)) ? 'checked' : '' }}>Android</label>
                                <label for="hobbies" style="font-size: 14px;"><input type="checkbox" name="hobbies[]" id="hobbies" value="Design" {{ (in_array('Design', $daplo->hobbies)) ? 'checked' : '' }}>Design</label>
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
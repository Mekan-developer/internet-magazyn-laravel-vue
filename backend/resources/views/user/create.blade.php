@extends('layouts.main')

@section('content')
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Internet shop </h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ url()->previous() }}">User</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create User</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="card card-primary">
                <!-- form start -->
                <form action="{{ route('users.store') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">User name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Enter name">
                        </div>
                        @error('name')
                            <div>{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                        </div>
                        @error('address')
                            <div>{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                placeholder="Enter email">
                        </div>
                        @error('email')
                            <div>{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                                placeholder="Password">
                        </div>
                        @error('password')
                            <div>{{ $message }}</div>
                        @enderror
                        <div class="col-sm-6">
                            <!-- radio -->
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" id="gen" type="radio" name="gender"
                                        value="1" checked="">
                                    <label class="form-check-label" for="gen" style="cursor:pointer">male</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="ok" type="radio" name="gender"
                                        value="2">
                                    <label class="form-check-label" for="ok" style="cursor:pointer">fimale</label>
                                </div>
                            </div>
                        </div>
                        @error('gender')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
@endsection

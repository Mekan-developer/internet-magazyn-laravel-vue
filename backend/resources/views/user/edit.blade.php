@extends('layouts.main')

@section('content')
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Internet shop</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ route('colors.index') }}">color</a></li>
                        <li class="breadcrumb-item active" aria-current="page">color Edit</li>
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
            <div class="row">
                <form action="{{ route('colors.update', $color->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="color" name="title" value="{{ $color->title }}" class="form-control"
                            placeholder="title">
                    </div>

                    <div class="form-group mt-2">
                        <input type="submit" class="btn btn-primary" value="Update">
                    </div>


                </form>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
@endsection

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
                        <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Product</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create Product</li>
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
                <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">product title</label>
                            <input type="text" class="form-control" id="name" name="title"
                                placeholder="Enter name">
                        </div>
                        @error('title')
                            <div>{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="description">description</label>
                            <input type="text" class="form-control" id="description" name="description"
                                placeholder="description">
                        </div>
                        @error('description')
                            <div>{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="content">content address</label>
                            <textarea name="content" id="content" class="form-control" cols="30" rows="3"></textarea>
                        </div>
                        @error('content')
                            <div>{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputprice1">price</label>
                            <input type="number" class="form-control" id="exampleInputprice1" name="price"
                                placeholder="price">
                        </div>
                        @error('price')
                            <div>{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputprice1">count</label>
                            <input type="number" class="form-control" id="exampleInputprice1" name="count"
                                placeholder="count">
                        </div>
                        @error('count')
                            <div>{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="customFile">Выберите файл</label>
                            <div class="custom-file">
                                <input type="file" name="preview_image" class="custom-file-input" id="customFile">
                            </div>
                        </div>


                        <div class="form-group">
                            <label>Выберите категории</label>
                            <select name="category_id" class="form-control select2" style="width: 100%;">
                                <option selected disabled>choose category</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="form-group">
                            <label>Выберите group</label>
                            <select name="group_id" class="form-control select2" style="width: 100%;">
                                <option selected disabled>choose group</option>
                                @foreach ($groups as $group)
                                    <option value="{{ $group->id }}">{{ $group->title }}</option>
                                @endforeach

                            </select>
                        </div>


                        <div class="form-group">
                            <label>Выберите tag</label>
                            <select name="tags[]" class="form-control tags" multiple="multiple" style="width: 100%;">
                                @foreach ($tags as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Выберите swet</label>
                            <select name="colors[]" class="form-control colors" multiple="multiple" style="width: 100%;">
                                @foreach ($colors as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
                        </div>


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

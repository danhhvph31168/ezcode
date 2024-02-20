@extends('layouts.admin')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Update khóa học</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Update</li>
            </ol>
            @if (!empty($_SESSION['success']))
                <div class="alert alert-success">
                    {{ $_SESSION['success'] }}
                </div>

                @php
                    $_SESSION['success'] = null;
                @endphp
            @endif
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label for="name">Name:</label>
                    <input value="{{ $courses['c_name'] }}" type="name" class="form-control" placeholder="Enter name"
                        name="name" required />
                </div>
                <div class="form-group mb-3">
                    <label>Price:</label>
                    <input value="{{ $courses['c_price'] }}" type="price" class="form-control" placeholder="Enter price"
                        name="price" required />
                </div>
                <div class="form-group mb-3">
                    <label>Thumbnail:</label>
                    <input type="file" class="form-control mb-3" name="thumbnail" />
                    <img src="../../../{{ $courses['c_thumbnail'] }}" width="100px" alt="">
                </div>
                <div class="form-group mb-3">
                    <label>Description:</label>
                    <textarea class="form-control" name="description" cols="30" rows="3">{{ $courses['c_description'] }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label>Status:</label>
                    <select class="form-control" name="status">
                        <option value="{{ $courses['c_status'] }}" selected>{{ $courses['c_status'] }}</option>
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label>IDCate:</label>
                    <select class="form-control" name="idcate">
                        @foreach ($category as $item)
                            <option @if ($item['id'] == $courses['ca_id']) selected @endif value="{{ $item['id'] }}">
                                {{ $item['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="/admin/courses">Back</a>
            </form>
        </div>
    </main>
@endsection

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
                    <input value="{{ $category['name'] }}" type="name" class="form-control" placeholder="Enter name"
                        name="name" required />
                </div>
                <div class="form-group mb-3">
                    <label>Thumbnail:</label>
                    <input type="file" class="form-control mb-3" name="thumbnail" />
                    <img src="../../../{{ $category['thumbnail'] }}" width="100px" alt="">
                </div>
                <div class="form-group mb-3">
                    <label>Description:</label>
                    <textarea class="form-control" name="description" cols="30" rows="3">{{ $category['description'] }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label>Status:</label>
                    <select class="form-control" name="status">
                        <option value="{{ $category['status'] }}" selected>{{ $category['status'] }}</option>
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="/admin/categories">Back</a>
            </form>
        </div>
    </main>
@endsection

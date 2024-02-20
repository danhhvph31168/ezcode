@extends('layouts.admin')
@section('title')
    Courses
@endsection
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Trang chủ</h1>
            <ol class="breadcrumb mb-3">
                <li class="breadcrumb-item active">Trang chủ</li>
            </ol>
            <a href="/admin/courses/create" class="btn btn-info mb-2">Create</a>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">
                    <form action="" method="post" class="formtkidcate">
                        <div class="form-group mb-3">
                            <label>Categories:</label>
                            <select class="form-control tkidcate" name="idcate">
                                <option value="0">Tất Cả</option>
                                @foreach ($category as $item)
                                    <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" name="seachidcate" class="btntkidcate">GO</button>
                    </form><br>
                    <form action="" method="post" class="formtkidcate">
                        <div class="form-group mb-3">
                            <label>Search Name:</label>
                            <input class="form-control tkidcate" type="text" name="name">
                        </div>
                        <button type="submit" name="seachname" class="btntkidcate">GO</button>
                    </form>
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Thumbnail</th>
                                <th>Status</th>
                                <th>ID Cate</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $item)
                                <tr>
                                    <td>{{ $item['id'] }}</td>
                                    <td>{{ $item['c_name'] }}</td>
                                    <td>{{ $item['c_price'] }}</td>
                                    <td>
                                        <img src="../{{ $item['c_thumbnail'] }}" height="100px" width="100px"
                                            alt="">
                                    </td>
                                    <td>{{ $item['c_status'] }}</td>
                                    <td>{{ $item['ca_name'] }}</td>
                                    <td>
                                        <a class="btn btn-success" href="/admin/courses/{{ $item['id'] }}/update"><i
                                                class="ti-pencil"></i></a>
                                        <a class="btn btn-warning" href="/admin/courses/{{ $item['id'] }}/show"><i
                                                class="ti-eye"></i></a>
                                        <a class="btn btn-danger" onclick="return confirm('Are you sure you want to')"
                                            href="/admin/courses/{{ $item['id'] }}/delete"><i class="ti-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </main>
@endsection

@extends('layouts.admin')
@section('title')
    Categories
@endsection
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Trang chủ</h1>
            <ol class="breadcrumb mb-3">
                <li class="breadcrumb-item active">Trang chủ</li>
            </ol>
            <a href="/admin/categories/create" class="btn btn-info mb-2">Create</a>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">
                    <form action="" method="post" class="formtkidcate">
                        <div class="form-group mb-3">
                            <label>Categories:</label>
                            <input type="text" name="name">
                            <input type="submit" name="seach" class="btntkidcate">
                        </div>

                        {{-- <button type="submit" name="seach" class="btntkidcate">Seach</button> --}}
                    </form>
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Thumbnail</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $item)
                                <tr>
                                    <td>{{ $item['id'] }}</td>
                                    <td>{{ $item['name'] }}</td>
                                    <td>
                                        <img src="../{{ $item['thumbnail'] }}" height="100px" width="100px" alt="">
                                    </td>
                                    <td>{{ $item['status'] }}</td>
                                    <td>
                                        <a class="btn btn-success" href="/admin/categories/{{ $item['id'] }}/update"><i
                                                class="ti-pencil"></i></a>
                                        <a class="btn btn-warning" href="/admin/categories/{{ $item['id'] }}/show"><i
                                                class="ti-eye"></i></a>
                                        <a class="btn btn-danger" onclick="return confirm('Are you sure you want to')"
                                            href="/admin/categories/{{ $item['id'] }}/delete"><i class="ti-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </main>
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Trang chủ - Admin</title>
    <link rel="stylesheet" href="../assets/Admin/style.css">
    <link rel="stylesheet" href="../assets/Admin/css/font-icon/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
</head>

<body class="sb-nav-fixed">
    @include('layouts.header')
    <div id="layoutSidenav">
        @include('layouts.directional')
        <!-- end nav -->
        <div id="layoutSidenav_content">
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
                            <form action="" method="get" class="formtkidcate">
                                <div class="form-group mb-3">
                                    <label>Categories:</label>
                                    <select class="form-control tkidcate" name="idcate">
                                        <option value="0">Tất Cả</option>
                                        @foreach ($category as $item)
                                            <option value="{{ $item['id'] }}">{{ $item['id'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" name="seachidcate" class="btntkidcate">Seach</button>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $item)
                                    @dump($item)
                                        <tr>
                                            <td>{{ $item['id'] }}</td>
                                            <td>{{ $item['name'] }}</td>
                                            <td>{{ $item['price'] }}</td>
                                            <td>
                                                <img src="../{{ $item['c_thumbnail'] }}" height="100px" width="100px"
                                                    alt="">
                                            </td>
                                            <td>{{ $item['c_status'] }}</td>
                                            <td>{{ $item['ca_name'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
            </main>
            @include('layouts.footer')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="../assets/Admin/admin.js"></script>
</body>

</html>

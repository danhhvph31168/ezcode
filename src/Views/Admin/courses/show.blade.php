<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Trang chủ - Admin</title>
    <link rel="stylesheet" href="../../../assets/Admin/style.css">
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
                    <h1 class="mt-4">Xem chi tiết</h1>
                    <ol class="breadcrumb mb-3">
                        <li class="breadcrumb-item active">Xem chi tiết</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            DataTable Example
                        </div>
                        <div class="card-body">
                            <table class="table" id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Tên trường</th>
                                        <th>Giá trị</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{ $courses['id'] }}</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td>{{ $courses['c_name'] }}</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>Price</td>
                                        <td>{{ $courses['c_price'] }}</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>Thumbnail</td>
                                        <td>
                                            <img src="../../../{{ $courses['c_thumbnail'] }}" width="100px"
                                                alt="">
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>Description</td>
                                        <td>{{ $courses['c_description'] }}</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>Status</td>
                                        <td>{{ $courses['c_status'] }}</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>Total_register</td>
                                        <td>{{ $courses['c_total_register'] }}</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>IDCate</td>
                                        <td>{{ $courses['ca_name'] }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a class="btn btn-primary" href="/admin/courses">Back</a>
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

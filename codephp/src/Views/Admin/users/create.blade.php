<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Create</title>
    <link rel="stylesheet" href="../../assets/Admin/style.css" />
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
                    <h1 class="mt-4">Thêm tài khoản</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">ADD</li>
                    </ol>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="name">Username:</label>
                            <input type="text" class="form-control" name="username" required />
                        </div>
                        <div class="form-group mb-3">
                            <label>Fullname:</label>
                            <input type="text" class="form-control" name="fullname" required />
                        </div>
                        <div class="form-group mb-3">
                            <label>Email:</label>
                            <input type="email" class="form-control" name="email" required />
                        </div>
                        <div class="form-group mb-3">
                            <label>Password:</label>
                            <input type="password" class="form-control" name="password" required />
                        </div>
                        <div class="form-group mb-3">
                            <label>Date:</label>
                            <input type="date" class="form-control" name="dob" required />
                        </div>
                        <div class="form-group mb-3">
                            <label>Avatar:</label>
                            <input type="file" class="form-control" name="avatar" />
                        </div>
                        <div class="form-group mb-3">
                            <label>Tel:</label>
                            <input type="number" class="form-control" name="tel" required />
                        </div>
                        <div class="form-group mb-3">
                            <label>Address:</label>
                            <input type="text" class="form-control" name="address" required />
                        </div>
                        <div class="form-group mb-3">
                            <label>Role:</label>
                            <select class="form-control" name="role">
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </main>
            @include('layouts.footer')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="../codephp/assets/Admin/admin.js"></script>
</body>

</html>

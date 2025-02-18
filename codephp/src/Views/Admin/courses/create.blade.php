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
                    <h1 class="mt-4">Thêm khóa học</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">ADD</li>
                    </ol>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="name">Name:</label>
                            <input type="name" class="form-control" placeholder="Enter name" name="name"
                                required />
                        </div>
                        <div class="form-group mb-3">
                            <label>Price:</label>
                            <input type="price" class="form-control" placeholder="Enter price" name="price"
                                required />
                        </div>
                        <div class="form-group mb-3">
                            <label>Thumbnail:</label>
                            <input type="file" class="form-control" name="thumbnail" />
                        </div>
                        <div class="form-group mb-3">
                            <label>Description:</label>
                            <textarea class="form-control" name="description" id="" cols="30" rows="3"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Status:</label>
                            <select class="form-control" name="status">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
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

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Management Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <!-- SideBar Section Start -->
                <div class="card h-100">
                    <div class="card-header">
                        <h4 class="mb-0">Menu</h4>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a class="nav-link" href="">Task List</a>
                            </li>
                            <li class="list-group-item">
                                <a class="nav-link" href="">User List</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- SideBar Section End -->

            </div>
            <div class="col-md-9">
                <div class="card h-100">
                    <div class="card-header">
                        <h4 class="mb-0">Task List</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Assign User</th>
                                    <th>Deadline</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>SL.</td>
                                    <td>Title</td>
                                    <td>Description</td>
                                    <td>Status</td>
                                    <td>Assign User</td>
                                    <td>Deadline</td>
                                    <td>Created At</td>
                                    <td>Updated At</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
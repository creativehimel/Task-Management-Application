<!doctype html>
<html lang="en">
<?php include('includes/header.php') ?>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <?php include('includes/sidebar.php') ?>
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
    <?php include('includes/footer.php') ?>
</body>
</html>
<!doctype html>
<html lang="en">
<?php include('includes/header.php') ?>
<body>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h4>User Registration</h4>
                </div>
                <div class="card-body">
                    <form action="">
                        <label for="first_name" class="w-100 mt-2">
                            First Name:
                            <input type="text" name="first_name" id="first_name" class="form-control form-control-sm" placeholder="Enter Your First Name">
                        </label>
                        <label for="last_name" class="w-100 mt-2">
                            Last Name:
                            <input type="text" name="last_name" id="last_name" class="form-control form-control-sm" placeholder="Enter Your Last Name">
                        </label>
                        <label for="email" class="w-100 mt-2">
                            Email:
                            <input type="email" name="email" id="email" class="form-control form-control-sm" placeholder="Enter Your Email">
                        </label>
                        <label for="phone" class="w-100 mt-2">
                            Phone:
                            <input type="text" name="phone" id="phone" class="form-control form-control-sm" placeholder="017******12">
                        </label>
                        <label for="address" class="w-100 mt-2">
                            Address:
                            <textarea name="address" id="address" class="form-control form-control-sm" placeholder="Enter Your Address"> </textarea>
                        </label>
                        <label for="password" class="w-100 mt-2">
                            Password:
                            <div class="input-group">
                                <input type="password" name="password" id="password" class="form-control form-control-sm" placeholder="********">
                                <div style="cursor: pointer" class="input-group-text" id="password_btn">
                                    <i class="fa-solid fa-eye"></i>
                                </div>
                            </div>
                        </label>
                        <button class="btn btn-sm btn-primary mt-2">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php') ?>
<script>
    $("#password_btn").on('click', function () {
        let element = $("#password")
        if (element.attr('type') == 'password'){
            element.attr('type', 'text')
            $(this).children('i').removeClass('fa-eye').addClass('fa-eye-slash')
        }else {
            element.attr('type', 'password')
            $(this).children('i').removeClass('fa-eye-slash').addClass('fa-eye')
        }
    })
</script>
</body>
</html>
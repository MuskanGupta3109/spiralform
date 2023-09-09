<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php session_start() ?>

</head>

<body>
    <div class="wrapper">
        <section class="container">
        <?php
            require_once "./User.php";
            $auth = new User();
            if (isset($_POST['submit'])) {
                $status = $auth->login($_POST['email'],$_POST['password']);
                if ($status != false) {
                    $_SESSION['email'] = $_POST['email'];
                   
               echo"<script>window.location.href='./dashboard.php'</script>";
                } else
                    echo "Username or password is not correct";
            }
            ?>
           
            <div class="row">
                <form method="post">
                    <div class="row">
                   
                        <div class="col-md-6"  style="margin-top:80px">
                        <h3 class="text-center">Admin Login</h3>
                            <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email Address...." />
                            </div>
                            <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Password...." />
                            </div>
                            <button class="btn btn-primary" name="submit">Login</button>
                        </div>
                        <div class="col-md-6">
                    <img src="https://img.freepik.com/free-vector/sign-concept-illustration_114360-5267.jpg?w=740&t=st=1691646484~exp=1691647084~hmac=5c53eb52b5371ecedb9cab605e7dc1b894705f5035fd11b9736ff3af25a5cbbc" style="width:100%;"/>
                        </div>
                    </div>

                </form>
            </div>
        </section>
    </div>

</body>

</html>
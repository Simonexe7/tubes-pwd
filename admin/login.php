<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/font-awesome/css/all.min.css">

    <title>::. Login Administrator .::</title>
    <style>
        .col-centered{
            float:none;
            margin-top:50px;
        }
    </style>
  </head>
  <body>
    <div class="container col-centered">
        <div class="row justify-content-center align-items-center ">
            <div class="col-4">
                <form action="proses-login.php" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukan Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Masukan Password">
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <button type="submit" name="login" class="btn btn-primary"><i class="fa fa-user-lock"></i> Login</button>
                            <button type="resset" name="batal" class="btn btn-warning"><i class="fa fa-rotate-left"></i> Batal</button>
                        </div>
                        <button type="button" class="btn btn-secondary" onclick="window.location.href = 'register.php'">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../assets/js/jquery-3.4.1.slim.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>
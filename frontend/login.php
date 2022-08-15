<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/frontend/css/style.css">
</head>

<body>
    <div class="card" style="width: 18rem;" id="box">
        <div class="card-body">

            <form class="ms-1 me-1" method="POST" action="../backend/action-login.php">
                <div class="mb-3">
                    <h3 class="card-title">Login Please</h3>
                    <hr>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="admin@admin.com">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="123">
                </div>
                <div class="row">
                    <div class="col">
                        <input type="submit" value="Login" class="btn btn-primary btn-submit" name="submit" onclick="validasi()">
                    </div>
                    <div class="col">
                        <a href="sign.php"><input type="button" value="Sign In" class="btn btn-light btn-signup"></a>

                    </div>
                </div>
                <div class="row pt-3 ">
                    <div class="col">
                        <a href="/index.php"><input type="button" value="Home" class="btn btn-danger btn-home"></a>

                    </div>

                </div>

            </form>
        </div>
    </div>


    <!-- my script -->
    <script src="/frontend/js/script.js"></script>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
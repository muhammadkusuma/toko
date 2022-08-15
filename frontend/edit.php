<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/frontend/css/style.css">
</head>

<body>
    <div class="card d-flex align-items-center justify-content-center " style="width: 18rem;" id="box">
        <div class="card-body">

            <form class="ms-1 me-1" method="POST" action="../backend/action-update.php">
                <div class="mb-3">
                    <h3 class="card-title">Update Profile</h3>
                    <hr>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <div class="row">
                    <div class="col">
                        <input type="hidden" name="id" value=<?php echo $_GET['id']?>>
                        <input type="submit" value="Update" class="btn btn-primary btn-update" name="update">
                    </div>
                    <!-- <div class="col">
                        <a href="login.php"><input type="button" value="Login" class="btn btn-light"></a>

                    </div> -->
                </div>
                <div class="row pt-3 ">
                    <div class="col">
                        <a href="dashboard.php"><input type="button" value="Back to Dashboard" class="btn btn-danger btn-home"></a>

                    </div>

                </div>

            </form>
        </div>
    </div>
</body>

</html>
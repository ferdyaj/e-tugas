<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Register Siswa</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
<style>
    body {
        background-image: url('https://wallpapercave.com/wp/5KnwccW.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        font-family: 'Arial', sans-serif;
        color: white; /* Set text color to white */
    }

    .container {
        margin-top: 50px;
    }

    .col-md-4 {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        color: #333;
    }

    hr {
        border: 1px solid #ddd;
    }

    .alert {
        margin-top: 20px;
        color: white; /* Set text color to white */
    }

    label {
        font-weight: bold;
        color: white; /* Set text color to white */
    }

    input[type="email"],
    input[type="password"],
    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin: 5px 0 20px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 5px;
        color: black; /* Set text color to black */
    }

    button {
        background-color: #337ab7;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #286090;
    }

    p.text-center a {
        color: #337ab7;
        text-decoration: none;
    }

    p.text-center a:hover {
        text-decoration: underline;
    }

    .btn-transparent {
        background: transparent;
        border: 2px solid #3498db;
        color: #3498db;
        padding: 10px 20px;
        cursor: pointer;
    }

    .btn-transparent:hover {
        background: #3498db;
        color: #fff;
    }
    .btn.btn-primary.btn-block {
    background-color: transparent;
    border: 2px solid #007bff; /* Atur warna border sesuai kebutuhan */
    color: #007bff; /* Atur warna teks sesuai kebutuhan */
  }

  .btn.btn-primary.btn-block:hover {
    background-color: #007bff; /* Atur warna latar saat hover sesuai kebutuhan */
    color: #fff; /* Atur warna teks saat hover sesuai kebutuhan */
  }
</style>
</head>
<body>
<div class="container"><br>
    <div class="col-md-6 col-md-offset-3">
        <h2 class="text-center" style="color: white;">FORM REGISTER SISWA</h2>

        <hr>
        @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
        @endif
        <form action="{{route('actionregister')}}" method="post">
            @csrf
            <div class="form-group">
                <label><i class="fa fa-envelope"></i>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email" required="">
            </div>
            <div class="form-group">
                <label><i class="fa fa-user"></i> Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username" required="">
            </div>
            <div class="form-group">
                <label><i class="fa fa-key"></i> Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required="">
            </div>
            <div class="form-group">
                <label><i class="fa fa-address-book"></i> Role</label>
                <input type="text" name="role" class="form-control" value="user" readonly>
            </div>
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-user"></i> Register</button>
            <hr>
            <p class="text-center">Sudah punya akun silahkan <a href="/">Login Disini!</a></p>
        </form>
    </div>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Login – Classroom</title>
<link
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">

<!-- Existing meta tags and links -->
<style>
   body {
    background-image: url('https://wallpapercave.com/wp/5KnwccW.jpg'); /* Ganti 'url_gambar_anda.jpg' dengan URL gambar latar belakang Anda */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    font-family: 'Arial', sans-serif;
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
    }

    label {
        font-weight: bold;
    }

    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 5px 0 20px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 5px;
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
    border: 2px solid #3498db; /* Atur warna border sesuai kebutuhan */
    color: #3498db; /* Atur warna teks sesuai kebutuhan */
    padding: 10px 20px; /* Sesuaikan ukuran padding sesuai kebutuhan */
    cursor: pointer;
  }

  .btn-transparent:hover {
    background: #3498db; /* Atur warna latar belakang saat tombol dihover sesuai kebutuhan */
    color: #fff; /* Atur warna teks saat tombol dihover sesuai kebutuhan */
  }
</style>
</head>
<body>
<div class="container"><br>
<div class="col-md-4 col-md-offset-4">
<h2 class="text-center"><b>Classroom</b><br>Tamansiswa</h3>
<hr>
@if(session('error'))
<div class="alert alert-danger"> <b>Opps!</b>

{{session('error')}} </div>
@endif
<form action="{{ route('actionlogin') }}" method="post">
@csrf
<div class="form-group">
<label>Email</label>

<input type="email" name="email" class="form-control" placeholder="Email" required="">

</div>
<div class="form-group">
<label>Password</label>
<input type="password" name="password"
class="form-control" placeholder="Password" required="">

</div>

<button type="submit" class="btn-transparent btn btn-block">Log In</button>

<hr>
<p class="text-center">Belum punya akun? <a

href="/register">Register</a> sekarang!</p>

</form>
</div>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Link ke Bootstrap -->
    <style>
        body {
            background-color: #DAA520;
        }
        .img-container {
            height: 50vh; 
            overflow: hidden; 
        }
        .img-container img {
            height: 100%; 
            width: 100%; 
            object-fit: cover; 
        }
        .card {
            background-color: transparent; 
            border: 2px solid #000; 
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 d-none d-md-block img-container">
                <img src="{{ asset('images/login.png') }}" alt="Gambar" class="img-fluid" style="height: 100%; object-fit: cover;"> 
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">Login Akun</h2>
                        <form action="{{ route('login') }}" method="POST" class="mt-4">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Login Sebagai:</label>
                                <select id="keterangan" name="keterangan" class="form-control" required>
                                    <option value="" disabled selected>Pilih...</option>
                                    <option value="seller">Seller</option>
                                    <option value="owner">Owner</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                        </form>
                        <p class="text-center mt-3">Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if($errors->any())
                            <div class="alert alert-danger">
                                {{ $errors->first() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #DAA520;
        }
        .img-container {
            height: 99vh; 
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
                <img src="{{ asset('images/register.webp') }}" alt="Gambar" class="img-fluid" style="height: 100%; object-fit: cover;"> 
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">Registrasi Akun</h2>
                        <form id="registrationForm" action="{{ route('register') }}" method="POST" class="mt-4">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama Lengkap:</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Konfirmasi Password:</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Daftar Sebagai:</label>
                                <select id="keterangan" name="keterangan" class="form-control" required>
                                    <option value="" disabled selected>Pilih...</option>
                                    <option value="seller">Seller</option>
                                    <option value="owner">Owner</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                        </form>
                        <p class="text-center mt-3">Sudah punya akun? <a href="{{ route('login') }}">Masuk di sini</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Pendaftaran Berhasil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Akun Anda telah berhasil didaftarkan!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('registrationForm').onsubmit = function(event) {
            event.preventDefault(); 
            $('#successModal').modal('show');
        };
    </script>
</body>
</html>

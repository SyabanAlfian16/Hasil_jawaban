<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catering</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="body">
    <section>
    <nav>
        <div class="navbar">
            <ul class="navbar-left">
                <li><a href="#">Home</a></li>
                <li>
                    <a href="#" class="menu-link">Menu</a>
                    <ul class="dropdown-menu">
                    <li><a href="{{ url('/menupembuka') }}">Makanan Pembuka</a></li>
                        <li><a href="#">Makanan Utama</a></li>
                        <li><a href="#">Makanan Penutup</a></li>
                        <li><a href="#">Minuman</a></li>
                    </ul>
                </li>
                <li><a href="#">Wilayah Pengiriman</a></li>
                <li><a href="#">Tentang Kami</a></li>
            </ul>
            <ul class="navbar-right">
                <li><a href="{{ url('/register') }}">Register</a></li>
                <li><a href="{{ url ('/login') }}">Login</a></li>
            </ul>
        </div>
    </nav>
    </section>

        <section class="background-section">
            <div class="img">
                <img src="{{ asset('images/logo.png') }}" alt="img">
            </div>
            <div class="text">
                <h3>
                    <p>Kami menyediakan layanan makanan dan minuman untuk berbagai acara, baik pribadi maupun profesional.
                    Layanan ini bertujuan untuk memenuhi kebutuhan kuliner dalam situasi yang berbeda, seperti pernikahan, ulang tahun, acara perusahaan, seminar, atau pertemuan keluarga.</p>
                </h3>
            </div>
        </section>

        <br>

        <section>
            <h2 class="h2"><center> Best seller</center></h2>
            <div class="best-seller">
            <div class="rectangle-1">
                <img src="{{ asset('images/nasi.jpeg') }}" alt="Image" class="rectangle-image">
                <p class="rectangle-text">Nasi Liwet Sunda</p>
            </div>
            <div class="rectangle-2">
                <img src="{{ asset('images/pukis.jpg') }}" alt="Image" class="rectangle-image">
                <p class="rectangle-text">Kue Pukis</p>
            </div>
            <div class="rectangle-3">
                <img src="{{ asset('images/dodongkal.jpg') }}" alt="Image" class="rectangle-image">
                <p class="rectangle-text">Kue dodongkal</p>
            </div>
            <div class="rectangle-4">
                <img src="{{ asset('images/iga.jpg') }}" alt="Image" class="rectangle-image">
                <p class="rectangle-text">Iga Bakar</p>
            </div>
            <div class="rectangle-5">
                <img src="{{ asset('images/teler.jpg') }}" alt="Image" class="rectangle-image">
                <p class="rectangle-text">Es Teler</p>
            </div>
            <div class="rectangle-6">
                <img src="{{ asset('images/kelepon.jpg') }}" alt="Image" class="rectangle-image">
                <p class="rectangle-text">Kue Kelepon</p>
            </div>
            </div>
        </section>

        <br>

        <section>
            <h2 class="h2">Makanan Pembuka</h2>
            <div class="rectangle-container">
                <div class="rectangle">
                    <img src="{{ asset('images/pukis.jpg') }}" alt="Image" class="rectangle-image-1">
                    <div class="text-container">
                        <p class="rectangle-text-1">Kue Pukis</p>
                        <button class="button">Order</button>
                    </div>
                </div>
                <div class="rectangle">
                    <img src="{{ asset('images/saladsayur.jpg') }}" alt="Image" class="rectangle-image-1">
                    <div class="text-container">
                        <p class="rectangle-text-1">Sop Salad Sayur</p>
                        <button class="button">Order</button>
                    </div>
                </div>
                <div class="rectangle">
                    <img src="{{ asset('images/risol.jpg') }}" alt="Image" class="rectangle-image-1">
                    <div class="text-container">
                        <p class="rectangle-text-1">Risol Mayo</p>
                        <button class="button">Order</button>
                    </div>
                </div>
                <div class="rectangle">
                    <img src="{{ asset('images/cireng.jpg') }}" alt="Image" class="rectangle-image-1">
                    <div class="text-container">
                        <p class="rectangle-text-1">Cireng Sambel Gula Merah</p>
                        <button class="button">Order</button>
                    </div>
                </div>
                </div>
            </section>

            <br>
            <br>

            <section>
            <h2 class="h2">Makanan Utama</h2>
            <div class="rectangle-container">
                <div class="rectangle">
                    <img src="{{ asset('images/ayam.jpg') }}" alt="Image" class="rectangle-image-1">
                    <div class="text-container">
                        <p class="rectangle-text-1">Ayam Bakar Madu</p>
                        <button class="button">Order</button>
                    </div>
                </div>
                <div class="rectangle">
                    <img src="{{ asset('images/iga.jpg') }}" alt="Image" class="rectangle-image-1">
                    <div class="text-container">
                        <p class="rectangle-text-1">Iga Bakar</p>
                        <button class="button">Order</button>
                    </div>
                </div>
                <div class="rectangle">
                    <img src="{{ asset('images/sop.jpg') }}" alt="Image" class="rectangle-image-1">
                    <div class="text-container">
                        <p class="rectangle-text-1">Sop Buntut</p>
                        <button class="button">Order</button>
                    </div>
                </div>
                <div class="rectangle">
                    <img src="{{ asset('images/udang.jpg') }}" alt="Image" class="rectangle-image-1">
                    <div class="text-container">
                        <p class="rectangle-text-1">Udang Asam Manis</p>
                        <button class="button">Order</button>
                    </div>
                </div>
                </div>
            </section>

            <br>
            <br>

            <section>
            <h2 class="h2">Makanan Penutup</h2>
            <div class="rectangle-container">
                <div class="rectangle">
                    <img src="{{ asset('images/martabak.jpg') }}" alt="Image" class="rectangle-image-1">
                    <div class="text-container">
                        <p class="rectangle-text-1">Martabak Mini</p>
                        <button class="button">Order</button>
                    </div>
                </div>
                <div class="rectangle">
                    <img src="{{ asset('images/puding.jpg') }}" alt="Image" class="rectangle-image-1">
                    <div class="text-container">
                        <p class="rectangle-text-1">Puding Susu</p>
                        <button class="button">Order</button>
                    </div>
                </div>
                <div class="rectangle">
                    <img src="{{ asset('images/dadargulung.jpeg') }}" alt="Image" class="rectangle-image-1">
                    <div class="text-container">
                        <p class="rectangle-text-1">Dadar Gulung Kelapa</p>
                        <button class="button">Order</button>
                    </div>
                </div>
                <div class="rectangle">
                    <img src="{{ asset('images/kelepon.jpg') }}" alt="Image" class="rectangle-image-1">
                    <div class="text-container">
                        <p class="rectangle-text-1">Kelepon</p>
                        <button class="button">Order</button>
                    </div>
                </div>
                </div>
            </section>

            <br>
            <br>

            <section>
            <h2 class="h2">Minuman</h2>
            <div class="rectangle-container">
                <div class="rectangle">
                    <img src="{{ asset('images/capcin.jpeg') }}" alt="Image" class="rectangle-image-1">
                    <div class="text-container">
                        <p class="rectangle-text-1">Es Cappuccino</p>
                        <button class="button">Order</button>
                    </div>
                </div>
                <div class="rectangle">
                    <img src="{{ asset('images/teler.jpg') }}" alt="Image" class="rectangle-image-1">
                    <div class="text-container">
                        <p class="rectangle-text-1">Es Teler</p>
                        <button class="button">Order</button>
                    </div>
                </div>
                <div class="rectangle">
                    <img src="{{ asset('images/dawet.jpg') }}" alt="Image" class="rectangle-image-1">
                    <div class="text-container">
                        <p class="rectangle-text-1">Es Dawet</p>
                        <button class="button">Order</button>
                    </div>
                </div>
                <div class="rectangle">
                    <img src="{{ asset('images/esbuah.jpg') }}" alt="Image" class="rectangle-image-1">
                    <div class="text-container">
                        <p class="rectangle-text-1">Es Buah Campur</p>
                        <button class="button">Order</button>
                    </div>
                </div>
                </div>
            </section><br><br>
            <script>
document.addEventListener("DOMContentLoaded", function() {
    const rectangles = document.querySelectorAll('.rectangle');

    const observerOptions = {
        root: null, 
        rootMargin: '0px',
        threshold: 0.1 
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add('show'); 
                }, index * 200); 
            } else {
                entry.target.classList.remove('show'); 
            }
        });
    }, observerOptions);

    rectangles.forEach(rectangle => {
        observer.observe(rectangle); 
    });
});
</script>
</body>
</html>
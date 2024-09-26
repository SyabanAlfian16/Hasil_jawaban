<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makanan Pembuka</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="body">
    <section>
    <nav>
        <div class="navbar">
            <ul class="navbar-left">
                <li><a href="{{ url ('/home') }}">Home</a></li>
                <li>
                    <a href="#" class="menu-link">Menu</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url ('/menupembuka') }}">Makanan Pembuka</a></li>
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
                <li><a href="{{ url('/login') }}">Login</a></li>
            </ul>
        </div>
    </nav>
    </section>

        <section class="background-section_koki">
            <div class="koki_img">
                <img src="{{ asset('images/koki1.jpg') }}" alt="koki_img">
            </div>
            <div class="text_koki">
                <h3>
                    <p>Makanan pembuka ini dimasak langsung oleh Chef ahli kita pada menu makanan penutup, 
                        jangan ragu lagi masalah rasa yang tercipta dari masakan yang dibuatnya.</p>
                </h3>
            </div>
        </section>

        <br>
        <br>

        <section>
            <h2 class="h2">Makanan Pembuka</h2>
            <input type="text" placeholder="Cari makanan..." class="search-input">
            <br><br>
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
                <div class="rectangle">
                    <img src="{{ asset('images/bakpao.jpg') }}" alt="Image" class="rectangle-image-1">
                    <div class="text-container">
                        <p class="rectangle-text-1">Bakpao Pandan Kacang Ijo</p>
                        <button class="button">Order</button>
                    </div>
                </div>
                <div class="rectangle">
                    <img src="{{ asset('images/somai.jpg') }}" alt="Image" class="rectangle-image-1">
                    <div class="text-container">
                        <p class="rectangle-text-1">Siomay Bandung</p>
                        <button class="button">Order</button>
                    </div>
                </div>
                <div class="rectangle">
                    <img src="{{ asset('images/zupa.jpg') }}" alt="Image" class="rectangle-image-1">
                    <div class="text-container">
                        <p class="rectangle-text-1">Zuppa Soup</p>
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
                <div class="rectangle">
                    <img src="{{ asset('images/cireng.jpg') }}" alt="Image" class="rectangle-image-1">
                    <div class="text-container">
                        <p class="rectangle-text-1">Cireng Sambel Gula Merah</p>
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
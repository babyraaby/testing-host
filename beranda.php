<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Store</title>
</head>
    <?php include "nav.php"?>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background: linear-gradient(135deg, rgba(233, 30, 99, 0.9) 0%, rgba(156, 39, 176, 0.9) 50%, rgba(103, 58, 183, 0.9) 100%),
                        url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><rect width="1000" height="1000" fill="%23f8f9fa"/><circle cx="200" cy="200" r="3" fill="%23e91e63" opacity="0.3"/><circle cx="800" cy="300" r="2" fill="%239c27b0" opacity="0.4"/><circle cx="300" cy="700" r="4" fill="%23673ab7" opacity="0.2"/><circle cx="700" cy="800" r="3" fill="%23e91e63" opacity="0.3"/><circle cx="500" cy="400" r="2" fill="%239c27b0" opacity="0.5"/></svg>');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 30% 60%, rgba(233, 30, 99, 0.1) 0%, transparent 50%),
                        radial-gradient(circle at 70% 30%, rgba(156, 39, 176, 0.1) 0%, transparent 50%);
            animation: float 6s ease-in-out infinite;
        }

        /* @keyframes float {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(10px, -10px) rotate(1deg); }
            66% { transform: translate(-5px, 15px) rotate(-1deg); }
        } */

        .hero-content {
            z-index: 2;
            max-width: 900px;
            animation: fadeInUp 1s ease;
        }

         @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        } 

        .hero h1 {
            font-size: 4rem;
            margin-bottom: 1rem;
            font-weight: 800;
            animation: fadeInUp 1s ease 0.2s both;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero .subtitle {
            font-size: 1.4rem;
            margin-bottom: 2rem;
            opacity: 0.95;
            font-weight: 300;
            animation: fadeInUp 1s ease 0.4s both;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
            animation: fadeInUp 1s ease 0.6s both;
        }

        .cta-button {
            display: inline-block;
            padding: 16px 35px;
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
        }

        .cta-button:hover {
            background: rgba(255, 255, 255, 0.3);
            border-color: rgba(255, 255, 255, 0.5);
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }

        .cta-button.secondary {
            background: transparent;
            border: 2px solid rgba(240, 237, 237, 0.6);
        }

        /* Layanan Section */
        .layanan-section {
            padding: 80px 20px;
            background-color: #f9f9f9;
        }

        .title {
            text-align: center;
            font-size: 28px;
            margin-bottom: 30px;
            color: #333;
        }

        .layanan-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            max-width: 800px;
            margin: 0 auto;
        }

        .layanan-card {
            background: white;
            padding: 25px;
            border: 1px solid #ddd;
            text-align: center;
        }

        .layanan-icon {
            font-size: 40px;
            margin-bottom: 15px;
        }

        .layanan-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        .layanan-desc {
            font-size: 14px;
            color: #666;
            line-height: 1.5;
        }

        .promo-banner {
            background: #333;
            color: white;
            padding: 20px;
            text-align: center;
            margin: 30px 0;
        }

        .promo-text {
            font-size: 16px;
            margin: 0;
        }

        /* Newsletter Section */
        .newsletter {
            padding: 80px 0;
            background: linear-gradient(135deg, #e91e63 0%, #9c27b0 50%, #673ab7 100%);
            color: white;
            text-align: center;
        }

        .newsletter h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .newsletter p {
            font-size: 1.2rem;
            margin-bottom: 2.5rem;
            opacity: 0.9;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .newsletter-form {
            display: flex;
            max-width: 500px;
            margin: 0 auto;
            gap: 1rem;
            flex-wrap: wrap;
            justify-content: center;
        }

        .newsletter-input {
            flex: 1;
            padding: 15px 20px;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            min-width: 250px;
        }

        .newsletter-button {
            padding: 15px 30px;
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
            color: white;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .newsletter-button:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .layanan-grid {
                grid-template-columns: 1fr;
            }
            
            .newsletter h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Selamat Datang Di Store Kami</h1>
            <p class="subtitle">Temukan pesona gaya yang memikat di setiap langkah Anda.</p>
            <div class="hero-buttons">
                <a href="#layanan" class="cta-button"> YUK,BELANJA SEKARANG !</a>
            </div>
        </div>
    </section>

    <!-- Layanan Section -->
    <section class="layanan-section" id="layanan">
        <div class="container">
            <h2 class="title">Layanan Kami</h2>
            
            <div class="layanan-grid">
                <div class="layanan-card">
                    <div class="layanan-icon">🚚</div>
                    <h3 class="layanan-title">Gratis Ongkir</h3>
                    <p class="layanan-desc">Pengiriman gratis untuk pembelian minimal Rp 300.000 ke seluruh Indonesia</p>
                </div>
                
                <div class="layanan-card">
                    <div class="layanan-icon">🔄</div>
                    <h3 class="layanan-title">Tukar Barang</h3>
                    <p class="layanan-desc">Bisa tukar ukuran atau model dalam 7 hari jika tidak sesuai</p>
                </div>
                
                <div class="layanan-card">
                    <div class="layanan-icon">💳</div>
                    <h3 class="layanan-title">Bayar Mudah</h3>
                    <p class="layanan-desc">Terima pembayaran via transfer bank, e-wallet, dan COD</p>
                </div>
                
                <div class="layanan-card">
                    <div class="layanan-icon">📱</div>
                    <h3 class="layanan-title">Konsultasi</h3>
                    <p class="layanan-desc">Tanya-tanya ukuran dan model via WhatsApp sebelum beli</p>
                </div>
                
                <div class="layanan-card">
                    <div class="layanan-icon">⚡</div>
                    <h3 class="layanan-title">Proses Cepat</h3>
                    <p class="layanan-desc">Pesanan diproses dalam 24 jam dan langsung dikirim</p>
                </div>
                
                <div class="layanan-card">
                    <div class="layanan-icon">🎁</div>
                    <h3 class="layanan-title">Bonus Member</h3>
                    <p class="layanan-desc">Member dapat poin setiap belanja dan diskon khusus</p>
                </div>
            </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter" id="newsletter">
        <div class="container">
            <h2>Stay In Style</h2>
            <p>Dapatkan update terbaru tentang koleksi eksklusif, fashion tips, dan promo menarik langsung di inbox kamu!</p>
            <form class="newsletter-form">
                <input type="email" class="newsletter-input" placeholder="Masukkan email kamu...">
                <button type="submit" class="newsletter-button">Subscribe</button>
            </form>
        </div>
    </section>
    <?php include "footer.php"?>
</body>
</html>
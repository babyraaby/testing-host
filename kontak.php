<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 <?php include "nav.php"?>
<style>  /* Contact Section */
        .contact {
            padding: 100px 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            height: 660px;
            text-decoration: none;
        }
         .contact h2 {
            color: #ffffffff;
            text-align: center;
            font-size: 40px;
         }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-top: 4rem;
        }

        .contact-item {
            text-align: center;
            padding: 2rem;
            background: rgba(255,255,255,0.1);
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            transform: translateY(-5px);
            background: rgba(255,255,255,0.2);
        }

        .contact-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            display: block;
        }</style>
<body>
    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title fade-in">Hubungi Kami</h2>
            <div class="contact-grid">
                <div class="contact-item fade-in">
                    <span class="contact-icon">📍</span>
                    <h3>Alamat Toko</h3>
                    <p>Jl. Fashion Street No. 123<br>Jakarta Selatan, DKI Jakarta<br>Indonesia 12345</p>
                </div>
                <div class="contact-item fade-in">
                    <span class="contact-icon">📞</span>
                    <h3>Telepon</h3>
                    <p>+62 21 1234 5678<br>+62 812 3456 7890<br>Buka: 09:00 - 21:00 WIB</p>
                </div>
                <div class="contact-item fade-in">
                    <span class="contact-icon">✉</span>
                    <h3>Email & Sosial Media</h3>
                    <p>info@stylishboutique.com<br>@stylishboutique.id<br>Stylish Boutique Official</p>
                </div>
                <div class="contact-item fade-in">
                    <span class="contact-icon">🚚</span>
                    <h3>Pengiriman</h3>
                    <p>Gratis ongkir se-Jabodetabek<br>Same day delivery tersedia<br>COD & Transfer Bank</p>
                </div>
            </div>
        </div>
    </section> 
</body>
 <?php include "footer.php"?>
</html>
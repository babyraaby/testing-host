<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 <?php include "nav.php"?>
<style> 
       /* Products Section */
        .products {
            padding: 100px 0;
             background: linear-gradient(135deg, rgba(233, 30, 99, 0.9) 0%, rgba(156, 39, 176, 0.9) 50%, rgba(103, 58, 183, 0.9) 100%),
                        url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><rect width="1000" height="1000" fill="%23f8f9fa"/><circle cx="200" cy="200" r="3" fill="%23e91e63" opacity="0.3"/><circle cx="800" cy="300" r="2" fill="%239c27b0" opacity="0.4"/><circle cx="300" cy="700" r="4" fill="%23673ab7" opacity="0.2"/><circle cx="700" cy="800" r="3" fill="%23e91e63" opacity="0.3"/><circle cx="500" cy="400" r="2" fill="%239c27b0" opacity="0.5"/></svg>');
        }

        .products .section-title {
            color: #eeeeeeff;
            text-align: center;
            font-size: 40px;
        }

        .products .section-title::after {
            background: linear-gradient(45deg, #f093fb 0%, #f5576c 100%);
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 4rem;
        }

        .product-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.2);
        }

        .product-image {
            height: 200px;
            background: linear-gradient(45deg, #ee7752, #e73c7e);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
            position: relative;
            overflow: hidden;
        }

        .product-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.1);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .product-card:hover .product-image::before {
            opacity: 1;
        }

        .product-info {
            padding: 1.5rem;
        }

        .product-info h3 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .product-info p {
            color: #666;
            margin-bottom: 1rem;
        }

        .price {
            font-size: 1.5rem;
            font-weight: bold;
            color: #e73c7e;
        }

</style>
<body>
    <!-- Products Section -->
    <section id="products" class="products">
        <div class="container">
            <h2 class="section-title fade-in">Koleksi Unggulan</h2>
            <div class="product-grid">
                <div class="product-card fade-in">
                    <div class="product-image">👕</div>
                    <div class="product-info">
                        <h3>Kemeja Kasual</h3>
                        <p>Kemeja berkualitas tinggi dengan desain modern yang cocok untuk berbagai acara kasual maupun semi formal.</p>
                        <div class="price">Rp 299.000</div>
                    </div>
                </div>
                <div class="product-card fade-in">
                    <div class="product-image">👗</div>
                    <div class="product-info">
                        <h3>Dress Wedding Elegant</h3>
                        <p>Dress Wedding dengan potongan elegan yang memberikan kesan mewah dan anggun untuk berbagai acara wedding.</p>
                        <div class="price">Rp 25.000.000</div>
                    </div>
                </div>
                <div class="product-card fade-in">
                    <div class="product-image">👖</div>
                    <div class="product-info">
                        <h3>Celana Jeans</h3>
                        <p>Jeans premium dengan bahan berkualitas tinggi yang memberikan kenyamanan maksimal sepanjang hari.</p>
                        <div class="price">Rp 289.000</div>
                    </div>
                </div>
                <div class="product-card fade-in">
                    <div class="product-image">🧥</div>
                    <div class="product-info">
                        <h3>Jaket Trendy</h3>
                        <p>Jaket dengan desain kontemporer yang memberikan perlindungan dan gaya dalam satu paket yang sempurna.</p>         <div class="price">Rp 449.000</div>
                    </div>
                </div>
                <div class="product-card fade-in">
                    <div class="product-image">👚</div>
                    <div class="product-info">
                        <h3>Blouse Chic</h3>
                        <p>Blouse dengan detail yang menawan, cocok dipadukan dengan berbagai bottom untuk tampilan yang sempurna.</p>
                        <div class="price">Rp 259.000</div>
                    </div>
                </div>
                <div class="product-card fade-in">
                    <div class="product-image">🩳</div>
                    <div class="product-info">
                        <h3>Celana Pendek</h3>
                        <p>Celana pendek yang nyaman dengan bahan breathable, ideal untuk aktivitas santai dan olahraga ringan.</p>
                        <div class="price">Rp 189.000</div>
                    </div>
    </section>
</body>
 <?php include "footer.php"?>
</html>
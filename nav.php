<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(-45deg, #667eea, #764ba2, #f093fb, #f5576c);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
            min-height: 100vh;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        nav {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            padding: 1rem 0;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .nav-container {
          
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo {
            font-size: 2rem;
            font-weight: bold;
            text-transform: uppercase;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        .logo:hover {
            transform: scale(1.05);
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            position: relative;
            padding: 0.5rem 1rem;
            border-radius: 25px;
        }

        .nav-links a:hover {
            transform: translateY(-2px);
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            background: linear-gradient(90deg, #ff6b6b, #4ecdc4);
            transition: all 0.3s ease;
            border-radius: 2px;
        }

        .nav-links a:hover::after {
            width: 80%;
            left: 10%;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .nav-container {
                padding: 0 1rem;
            }

            .logo {
                font-size: 1.5rem;
            }

            .nav-links {
                gap: 1rem;
            }

            .nav-links a {
                font-size: 1rem;
                padding: 0.4rem 0.8rem;
            }
        }

        @media (max-width: 480px) {
            .nav-links {
                gap: 0.5rem;
            }

            .nav-links a {
                font-size: 0.9rem;
                padding: 0.3rem 0.6rem;
            }

            .logo {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="nav-container">
            <div class="logo">THE VELVED HANGER STORE</div>
            <ul class="nav-links">
                <li><a href="beranda.php">Beranda</a></li>
                <li><a href="produk.php">produk</a></li>
                <li><a href="tentang.php">Tentang</a></li>
                <li><a href="kontak.php">Kontak</a></li>
                <li><a href="pendaftaran.php">pendaftaran</a></li>
            </ul>
        </div>
    </nav>
</body>
</html>
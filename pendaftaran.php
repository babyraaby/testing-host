<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pembelian Fashion</title>
     <?php include "nav.php"?>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f093fb, #f5576c);
            margin: 0;
            padding: 0;
        }

        .form-container {
            max-width: 500px;
            background: white;
            padding: 25px;
            margin: 50px auto;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #e73c7e;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
            color: #333;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 1rem;
        }

        textarea {
            resize: none;
        }

        button {
            background: linear-gradient(45deg, #f093fb, #f5576c);
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 1rem;
            margin-top: 15px;
            cursor: pointer;
            transition: 0.3s;
            width: 100%;
        }

        button:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Formulir Pembelian</h2>
        <form action="#" method="post">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email" required>

            <label for="telepon">Nomor Telepon</label>
            <input type="tel" id="telepon" name="telepon" placeholder="Masukkan nomor telepon" required>

            <label for="produk">Pilih Produk</label>
            <select id="produk" name="produk" required>
                <option value="">-- Pilih Produk --</option>
                <option value="kemeja">Kemeja Kasual</option>
                <option value="dress">Dress Wedding Elegant</option>
                <option value="jeans">Celana Jeans</option>
                <option value="jaket">Jaket Trendy</option>
                <option value="blouse">Blouse Chic</option>
                <option value="celana_pendek">Celana Pendek</option>
            </select>

            <label for="jumlah">Jumlah</label>
            <input type="number" id="jumlah" name="jumlah" min="1" value="1" required>

            <label for="alamat">Alamat Pengiriman</label>
            <textarea id="alamat" name="alamat" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>

            <button type="submit">Kirim Pesanan</button>
        </form>
    </div>

</body>
 <?php include "footer.php"?>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pemesanan</title>
    <style>
        
        @import url('https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap');

        body {
            font-family: 'Lora', serif;
            background: url('images/foto.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
    </style>
    <script>
        // Redirect ke beranda setelah 3 detik
        setTimeout(function() {
            window.location.href = "index.php";
        }, 3000);
    </script>
</head>
<body>
    <div class="container">
        <h2>Reservation successful!</h2>
        <p>Anda akan segera kembali ke halaman utama</p>
    </div>
</body>
</html>

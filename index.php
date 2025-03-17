<?php
// Inisialisasi variabel untuk menyimpan nilai input dan error
$nama = $email = $tipe_kamar = $checkin = $checkout = $jumlah_orang = "";
$namaErr = $emailErr = $tipeKamarErr = $checkinErr = $checkoutErr = $jumlahOrangErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi Nama
    $nama = $_POST["name"];
    if (empty($nama)) {
        $namaErr = "Nama wajib diisi";
    }

    // Validasi Email
    $email = $_POST["email"];
    if (empty($email)) {
        $emailErr = "Email wajib diisi";
    }

    // Validasi Tipe Kamar
    $tipe_kamar = $_POST["room"];
    if (empty($tipe_kamar)) {
        $tipeKamarErr = "Tipe kamar wajib dipilih";
    }

    // Validasi Check-in
    $checkin = $_POST["checkin"];
    if (empty($checkin)) {
        $checkinErr = "Tanggal check-in wajib diisi";
    }

    // Validasi Check-out
    $checkout = $_POST["checkout"];
    if (empty($checkout)) {
        $checkoutErr = "Tanggal check-out wajib diisi";
    }

    // Validasi Jumlah Orang
    $jumlah_orang = $_POST["guests"];
    if (empty($jumlah_orang)) {
        $jumlahOrangErr = "Jumlah orang wajib diisi";
    } elseif (!ctype_digit($jumlah_orang)) {
        $jumlahOrangErr = "Jumlah orang harus berupa angka";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Form</title>

    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
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
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }
        .button-container {
            margin-top: 20px;
        }
        button {
            background-color:rgb(35, 158, 100);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }
        button:hover {
            background-color:rgb(11, 223, 135);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Reservation Form</h2>
        <form action="proses_pemesanan.php" method="post">
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="room">Tipe Kamar:</label>
                <select id="room" name="room" required>
                    <option value="Standard">Standard</option>
                    <option value="Deluxe">Deluxe</option>
                    <option value="Suite">Suite</option>
                </select>
            </div>
            <div class="form-group">
                <label for="checkin">Check-in:</label>
                <input type="date" id="checkin" name="checkin" required>
            </div>
            <div class="form-group">
                <label for="checkout">Check-out:</label>
                <input type="date" id="checkout" name="checkout" required>
            </div>
            <div class="form-group">
                <label for="guests">Jumlah Orang:</label>
                <input type="number" id="guests" name="guests" min="1" required>
            </div>
            <div class="button-container">
                <button type="submit">Reserve Now</button>
            </div>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Total Pembelian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #00BFFF; 
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #87CEEB; 
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="number"], button {
            padding: 10px;
            width: 100%;
            margin-bottom: 10px;
            border: 2px solid #fff;
            border-radius: 4px;
        }
        button {
            background-color: #0a0a23; 
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #2F4F4F;
            box-shadow: 5px 5px 5px #000;
        }
        button:active {
            box-shadow: inset 2px 2px 10px #000;
        }
        p {
            font-size: 1.2em;
            text-align: center;
            color: #333;
        }
        #konfirmasi {
            font-family: 'Open Sans', sans-serif;
            color: red;
            font-size: 10px;
            font-weight: bold;
            padding-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Hitung Total Pembelian</h1>
    <div class="container">
        <form method="POST">
            <label for="totalBelanja" style="font-weight:bold;">Masukkan Total Belanja: </label>
            <input type="number" id="totalBelanja" name="totalBelanja" placeholder="" style="width:95%; background-color: #B0E0E6" required>
            <label id="konfirmasi">
                <input type="checkbox" name="Member" value="1"> ANDA ADALAH MEMBER ?
            </label>
            <button type="submit">Hitung Total</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $totalBelanja_0053 = floatval($_POST['totalBelanja']);
            $Member_0053 = isset($_POST['Member']);

            if ($totalBelanja_0053 < 0) {
                echo "<p style='color: red;'>Total belanja tidak boleh kurang dari 0</p>";
            } else {
                $totalAkhir_0053 = $totalBelanja_0053;

                if ($Member_0053) {
                    $totalAkhir_0053 *= 0.90; // Diskon member 10%

                    if ($totalBelanja_0053 >= 500000) {
                        $totalAkhir_0053 *= 0.90; // Tambahan potongan 10% jika total belanja >=500.000
                    } elseif ($totalBelanja_0053 >= 300000) {
                        $totalAkhir_0053 *= 0.95; // Tambahan potongan 5% jika total belanja >=300.000
                    }
                } else {
                    if ($totalBelanja_0053 >= 500000) {
                        $totalAkhir_0053 *= 0.90; // Diskon 10% jika total belanja >=500.000
                    }
                }

                echo "<p>Total yang harus dibayar: Rp " . number_format($totalAkhir_0053, 2, ',', '.') . "</p>";
            }
        }
        ?>
    </div>
</body>
</html>

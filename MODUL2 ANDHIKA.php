<?php

// **********************  1  ************************** 
// ========== tangkap nilai tinggi_badan dan berat_badan yang ada pada form html
// silakan taruh code kalian di bawah
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tinggi = $_POST["tinggi_badan"];
    $berat = $_POST["berat_badan"];
}

// **********************  1  ************************** 



// **********************  2  ************************** 
// ========== buatkan sebuah perkondisian di mana 
// tinggi_badan atau $berat_badan tidak boleh kosong nilainya, kalau kosong buatkanlah pesan error
// silakan taruh code kalian di bawah
if(empty($tinggi) || empty($berat)) {
    $error = "Tinggi badan dan berat badan tidak boleh kosong.";
}


// **********************  2  ************************** 


// **********************  3  ************************** 
// ========== buatkanlah perkondisian di mana Jika kesalahan Error-nya "empty", 
// masukkan perhitungan BMI sesuai dengan rumus yang tertera pada jurnal
// silakan taruh code kalian di bawah
if (!empty($tinggi) && !empty($berat)) {
    $tinggi_convert = $tinggi / 100;
    $bmi = $berat / ($tinggi_convert ** 2);
    $count = "";

    if ($bmi <= 18.4) {
        $count = "underweight";
    } elseif ($bmi > 18.5 && $bmi < 24.9) {
        $count = "normal";
    } elseif ($bmi > 25.0 && $bmi < 29.9) {
        $count = "overweight";
    } elseif ($bmi >= 30) {
        $count = "obese";
    }
}


// **********************  3  ************************** 



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator BMI</title>
    <link rel="stylesheet" href="css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 p-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Kalkulator BMI</h4>
                    <form action="" method="POST">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="tinggi_badan" id="tinggi_badan" placeholder="175">
                            <label for="tinggi_badan">Tinggi Badan (CM)</label>
                        </div>
                        <div class="form-floating">
                            <input type="number" class="form-control" name="berat_badan" id="berat_badan" placeholder="53">
                            <label for="berat_badan">Berat Badan (KG)</label>
                        </div>
                        <button type="submit" class="btn btn-primary mb-3 mt-3 w-100">Hitung BMI</button>
                    </form>

                    <!--  **********************  4  **************************     -->
                    <!-- Hasilnya perhitungan BMI taruh di sini yaaa!! 😊 -->
                    <!-- silakan taruh code kalian di bawah -->
                    <?php
                    if (!empty($tinggi) && !empty($berat)) {
                        echo "Tinggi Anda: $tinggi";
                        echo "<br/>";
                        echo "Berat Anda: $berat";
                        echo "<br/>";
                        echo "Status berat badan anda ialah: $count";
                        echo "<br/>";
                        echo "Dengan Index BMI: $bmi";
                    }
                ?>
                    
                    
                    <!--  **********************  4  **************************     -->



                    <!--  **********************  5  **************************     -->
                    <!-- Hasil pesan error nya taruh di sini yaaa!! 😊  -->
                    <!-- silakan taruh code kalian di bawah -->
                    <?php
                    if (empty($tinggi) || empty($berat)) {
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            $error = "Maaf tinggi badan atau berat badan tidak boleh kosong.";
                            echo $error;
                        }
                    }
                    ?>
                    

                    <!--  **********************  5  **************************     -->


                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Hasil Kuis - Learnify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #b0d4e3;
        }
        .card {
            width: 80%;
            max-width: 800px;
            padding: 30px;
            background-color: #d9f3ff;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            text-align: left;
        }
        main {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
            padding-top: 40px;
        }
        .btn-container {
            text-align: right;
            margin-top: 10px;
            padding-right: 20px;
            padding-bottom: 20px;
        }
        
        .correct {
            color: green;
        }
        .incorrect {
            color: red;
        }
    </style>
</head>
<body>
    <header class="px-4 py-3 mb-4 border-bottom d-flex align-items-center" style="background-color: rgb(20, 124, 124); color: white;">
        <img src="logo.png" width="50" />
        <span class="fs-4 mx-2">Learnify</span>
        <span class="fs-7 mx-0">: Belajar cerdas, Kuasai Dunia!</span>
    </header>
    
    <main>
        <div class="card">
            <h3 class="text-center">Hasil Kuis</h3>
            <?php

        $tangkapjawaban1 = isset($_POST['jawaban1']) ? trim($_POST['jawaban1']) : "Tidak dijawab";
        $tangkapjawaban2 = isset($_POST['jawaban2']) ? trim($_POST['jawaban2']) : "Tidak dijawab";
        $tangkapjawaban3 = isset($_POST['jawaban3']) ? trim($_POST['jawaban3']) : "Tidak dijawab";
        $tangkapjawaban4 = isset($_POST['jawaban4']) ? trim($_POST['jawaban4']) : "Tidak dijawab";
        $tangkapjawaban5 = isset($_POST['jawaban5']) ? trim($_POST['jawaban5']) : "Tidak dijawab";

        $jawaban = [
            "jawaban1" => "Hyper Text Markup Language",
            "jawaban2" => "background-color: red;",
            "jawaban3" => "br",
            "jawaban4" => "Memproses data di sisi server",
            "jawaban5" => "img src='gambar.jpg'"
        ];

        $skor = 0;
        $total_pertanyaan = count($jawaban);

        echo "<p>Pertanyaan 1: ";
        if ($tangkapjawaban1 === $jawaban["jawaban1"]) {
            echo "<span class='correct'>Jawaban Anda benar!</span>";
            $skor++;
        } else {
            echo "<span class='incorrect'>Jawaban Anda salah. Jawaban yang benar: " . $jawaban["jawaban1"] . "</span>";
        }
        echo "</p>";

        echo "<p>Pertanyaan 2: ";
        if ($tangkapjawaban2 === $jawaban["jawaban2"]) {
            echo "<span class='correct'>Jawaban Anda benar!</span>";
            $skor++;
        } else {
            echo "<span class='incorrect'>Jawaban Anda salah. Jawaban yang benar: " . $jawaban["jawaban2"] . "</span>";
        }
        echo "</p>";

        echo "<p>Pertanyaan 3: ";
        if ($tangkapjawaban3 === $jawaban["jawaban3"]) {
            echo "<span class='correct'>Jawaban Anda benar!</span>";
            $skor++;
        } else {
            echo "<span class='incorrect'>Jawaban Anda salah. Jawaban yang benar: " . $jawaban["jawaban3"] . "</span>";
        }
        echo "</p>";

        echo "<p>Pertanyaan 4: ";
        if ($tangkapjawaban4 === $jawaban["jawaban4"]) {
            echo "<span class='correct'>Jawaban Anda benar!</span>";
            $skor++;
        } else {
            echo "<span class='incorrect'>Jawaban Anda salah. Jawaban yang benar: " . $jawaban["jawaban4"] . "</span>";
        }
        echo "</p>";

        echo "<p>Pertanyaan 5: ";
        if ($tangkapjawaban5 === $jawaban["jawaban5"]) {
            echo "<span class='correct'>Jawaban Anda benar!</span>";
            $skor++;
        } else {
            echo "<span class='incorrect'>Jawaban Anda salah. Jawaban yang benar: " . $jawaban["jawaban5"] . "</span>";
        }
        echo "</p>";


        $persentase = ($skor / $total_pertanyaan) * 100;

        echo "<p class='score'>Skor Pengguna: $skor / $total_pertanyaan</p>";
        echo "<p class='score'>Presentase Nilai: $persentase%</p>";
        ?>

            <div class="btn-container">
                <a href="index.php" class="btn btn-primary">Kembali ke Halaman Utama</a>
            </div>
        </div>       
        </div>
    </main>
</body>
</html>

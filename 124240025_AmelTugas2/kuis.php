<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amalia Nur Azizah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>
    body {
      background-color: #b0d4e3;
    }
    .btn-container {
      text-align: right;
      margin-top: 10px;
      padding-right: 20px;
      padding-bottom: 20px;
    }
    .card {
        width: 200%;
        max-width: 800px;
        padding: 50px;
        background-color: #d9f3ff;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
      }
      main {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 80vh;
        padding-top: 40px;
      }
      
      .card-body label {
        display: block;
      }
  </style>
  <body>
  <header
      class="px-2 d-flex flex warp py-3 mb-6 border-bottom align-items-center"
      style="background-color: rgb(75, 163, 163)">
      <img src="logo.png" width="50" />
      <span class="fs-4 mx-2">Learnify</span>
      <span class="fs-7 mx-0">: Belajar cerdas, Kuasai Dunia!</span>
    </header>

    <main>
      <form action="hasil.php" method="POST" onsubmxxit="return validateForm()">
        <div class="card text-center">
          <div class="card-header display:">Kuis</div>
          <div class="card-body text-start">
            <p><b>1. Apa kepanjangan dari HTML?</b></p>
            <label><input type="radio" name="jawaban1" value="Hyper Text Markup Language" /> a. Hyper Text Markup Language</label>
            <label><input type="radio" name="jawaban1" value="Hyperlinks and Text Markup Language" /> b. Hyperlinks and Text Markup Language</label>
            <label><input type="radio" name="jawaban1" value="Home Tool Markup Language" /> c. Home Tool Markup Language</label>
            <label><input type="radio" name="jawaban1" value="Hyper Tool Multi Language" /> d. Hyper Tool Multi Language</label><br>
            
            <p><b>2. Bagaimana cara mengatur latar belakang halaman menjadi warna merah dalam CSS?</b></p>
            <label><input type="radio" name="jawaban2" value="background: red;" /> a. background: red;</label>
            <label><input type="radio" name="jawaban2" value="bgcolor: red;" /> b. bgcolor: red;</label>
            <label><input type="radio" name="jawaban2" value="color-background" /> c. color-background: red;</label>
            <label><input type="radio" name="jawaban2" value="background-color" /> d. background-color: red;</label><br>
            
            <p><b>3. Tag HTML apa yang digunakan untuk membuat baris baru?</b></p>
            <label><input type="radio" name="jawaban3" value="newline" /> a. newline</label>
            <label><input type="radio" name="jawaban3" value="hr" /> b. hr</label>
            <label><input type="radio" name="jawaban3" value="line" /> c. line</label>
            <label><input type="radio" name="jawaban3" value="br" /> d. br</label><br>
            
            <p><b>4. Apa fungsi utama dari PHP?</b></p>
            <label><input type="radio" name="jawaban4" value="Mengatur tata letak halaman web" /> a. Mengatur tata letak halaman web</label>
            <label><input type="radio" name="jawaban4" value="Mengatur tampilan halaman web" /> b. Mengatur tampilan halaman web</label>
            <label><input type="radio" name="jawaban4" value=" Memproses data di sisi server" /> c. Memproses data di sisi server</label>
            <label><input type="radio" name="jawaban4" value="Menambahkan animasi ke halaman web" /> d. Menambahkan animasi ke halaman web</label><br>
            
            <p><b>5. Bagaimana cara menampilkan gambar di HTML?</b></p>
            <label><input type="radio" name="jawaban5" value="img src='gambar.jpg" /> a. img src='gambar.jpg'</label>
            <label><input type="radio" name="jawaban5" value="image src='gambar.jpg" /> b. image src='gambar.jpg'</label>
            <label><input type="radio" name="jawaban5" value="pic src='gambar.jpg" /> c. pic src='gambar.jpg'</label>
            <label><input type="radio" name="jawaban5" value=" photo src='gambar.jpg" /> d. photo src='gambar.jpg'</label>
          </div>
          <div class="btn-container">
            <button type="submit" class="btn btn-primary">Kirim Jawaban</button>
          </div>
        </div>
      </form>
      <script>
        function validateForm() {
            const total_pertanyaan = 5;
            for (let i = 0; i < total_perranyaan; i++) {
                const selected = document.querySelector(input[name="jawaban${i}"]:checked);
                if (!selected) {
                    alert(Pertanyaan ${i + 1} belum dijawab!);
                    return false;
                }
            }
            return true;
        }
    </script>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
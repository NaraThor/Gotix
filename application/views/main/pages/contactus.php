<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/main/pages/style-apc.css" />
<!--
      CATATAN BUG/KEKURANGAN:

    1. TUMBOL KIRIM FORMATNYA BELUM FORMAT UNTUK MENGIRIM PESAN
    2. CONTAINER TERLALU PANJANG
    
  
  -->



</head>
  <body>
    <main>
        <div class="box">
            <div class="inner-box">
              <h1 style="text-align: center;">Contact Us</h1>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="isi nama kalian">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
                  <button type="button" class="btn btn-primary">Kirm</button>
            </div>
        </div>
    </main>

  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
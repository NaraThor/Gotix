<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bayar</title>

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/main/bayar/style.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/main/navbar/dropdown.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/main/navbar/index.css" />

  <!--
    - google font link
  -->
  <link
    href="https://fonts.googleapis.com/css?family=Source+Sans+3:200,300,regular,500,600,700,800,900,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic"
    rel="stylesheet" />
</head>

<body>


  <!--
    - main container
  -->

  <!-- Header -->
  <header>
        <div class="css_navbar dropdown_mother">

            <div class="css_navbar brand"><a href="#">GET TIX</a></div>

        </div>
        <nav>
            <div class="css_navbar topnav">

                <a href="<?php echo base_url(); ?>index.php/home"> Home </a>
                <a href="<?php echo base_url(); ?>index.php/profile">Profile</a>
                <a href="<?php echo base_url(); ?>index.php/logout">Log-out</a>
            </div>

            <ul>

                <div class="css_navbar header">

                </div>
                <!-- <li> -->
                <div class="css_navbar dropdown">
                    <button class="css_navbar dropbtn"> <img src="images/dropdown.png"> </button>
                    <div class="css_navbar dropdown-content">
                        <a href="<?php echo base_url(); ?>index.php/home"> Home </a>
                        <a href="<?php echo base_url(); ?>index.php/profile">Profile</a>
                        <a href="<?php echo base_url(); ?>index.php/logout">Log-out</a>
                    </div>
                </div>
                <!-- </li> -->
            </ul>
        </nav>
    </header>
    <!-- Header -->

  <main class="container">

    <h1 class="heading">
      <ion-icon name="ticket-outline"></ion-icon>Checkout
    </h1>

    <div class="item-flex">

      <!--
       - checkout section
      -->
      <section class="checkout">

        <h2 class="section-heading">Payment Details</h2>

        <div class="payment-form">

          <div class="payment-method">

            <button class="method selected">
              <ion-icon name="wallet-outline"></ion-icon>


              <span>Via Dana</span>

              <ion-icon class="checkmark fill" name="checkmark-circle"></ion-icon>
            </button>


          </div>

          <form action="#">

            <div class="cardholder-name">
              <label for="cardholder-name" class="label-default">Nama Pemesan</label>
              <input type="text" name="cardholder-name" id="pemesan_nama" class="input-default" value="<?php echo $this->session->userdata('username') ?>">
            </div>

            <div class="card-number">
              <label for="card-number" class="label-default">Masukan Nomor Telpon</label>
              <input type="number" name="card-number" id="pemesan_phone" class="input-default" value="<?php echo $this->session->userdata('no_telp') ?>">
            </div>

            <div class="input-flex">

              <div class="expire-date">
                

                <div class="input-flex">

                  
                    
                 
                </div>
              </div>

              

            </div>

          </form>

        </div>

        <button class="btn btn-primary" onclick="pay()">
          <b>Bayar</b> Rp <span id="payAmount"></span>
        </button>

      </section>


      <!--
        - cart section
      -->
      <section class="cart">

        <div class="cart-item-box">

          <h2 class="section-heading">Ur Tickets</h2>

          <div class="product-card">

            <div class="card">

              <div class="img-box">
                <img src="images/1.png" alt="*img" width="80px" class="product-img">
              </div>

              <div class="detail">

                <h4 class="product-name" id="ticket_nama"><?php echo $ticket->{"ticket_nama"} ?></h4>

                <div class="wrapper">

                  <div class="product-qty">
                    <button id="decrement" onclick="updateHarga(-1)">
                      <ion-icon name="remove-outline"></ion-icon>
                    </button>

                    <span id="quantity">1</span>

                    <button id="increment" onclick="updateHarga(1)">
                      <ion-icon name="add-outline"></ion-icon>
                    </button>
                  </div>

                  <div class="price">
                    Rp <span id="price"><?php echo $ticket->{"ticket_harga"} ?></span>
                  </div>

                </div>

              </div>

              <button class="product-close-btn">
                <ion-icon name="close-outline"></ion-icon>
              </button>

            </div>

          </div>

        </div>

        <div class="wrapper">

          <div class="discount-token">

            <label for="discount-token" class="label-default">Gift card/Discount code</label>

            <div class="wrapper-flex">

              <input type="text" name="discount-token" id="discount-token" class="input-default">

              <button class="btn btn-outline">Apply</button>

            </div>

          </div>

          <div class="amount">

            <div class="subtotal">
              <span>Subtotal</span> <span>Rp<span id="subtotal"><?php echo $ticket->{"ticket_harga"} ?></span></span>
            </div>

            <div class="tax">
              <span>Tax</span> <span>Rp<span id="tax">3750</span></span>
            </div>


            <div class="total">
              <span>Total</span> <span>Rp <span id="total">753750</span></span>
            </div>

          </div>

        </div>

      </section>

    </div>

  </main>


<br>
    <br>
    <hr>
    <br>
    <footer>
        <div style="display: flex; width: 100%">
            <div style="width: 50%;">
              <center><b>Get Tix</b></center>
              <br>
              Pemesanan tiket konser dan event terfavorit Semarang. Temukan tiket favorit anda di sini
            </div>
            <div style="width: 50%;">
                <b>Menu</b>
                <br>
                - <a href="<?php echo base_url(); ?>index.php/page-aboutus">About Us</a>
                <br>
                - <a href="<?php echo base_url(); ?>index.php/page-contactus">Contact Us</a>
                <br>
                - <a href="<?php echo base_url(); ?>index.php/page-pp">Privacy Policy</a>
            </div>
        </div>
        <br>
        <br>
        <center>© Get Tix 4504 2022. All Rights Reserved</center>
    </footer>



  <!--
    - custom js link
  -->
  <script src="./script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script>

    var ID = "<?php echo $ticket->{"ticket_id"}; ?>"

    var harga = document.getElementById("subtotal").textContent
    var pajak = parseInt(harga) * 0.11

    document.getElementById("tax").innerHTML = pajak
    document.getElementById("total").innerHTML = (parseInt(harga) + pajak)
    document.getElementById("payAmount").innerHTML = (parseInt(harga) + pajak)
    
    function updateHarga(num){
      var quantity = document.getElementById("quantity")
      var newNum = (parseInt(quantity.textContent) + num)
      quantity.innerHTML = newNum
      
      var price = document.getElementById("price").textContent
      newPrice = (parseInt(price) * newNum)  + ((parseInt(price) * newNum) * 0.11)
      document.getElementById("payAmount").innerHTML = newPrice
      document.getElementById("subtotal").innerHTML = (parseInt(price) * newNum) 
      document.getElementById("tax").innerHTML = ((parseInt(price) * newNum) * 0.11)
      document.getElementById("total").innerHTML = newPrice
    }

    function pay(){
      var nama = document.getElementById("pemesan_nama").textContent
      var phone = document.getElementById("pemesan_phone").textContent
      var tiket = document.getElementById("ticket_nama").textContent
      var quantity = document.getElementById("quantity").textContent
      var pajak = document.getElementById("tax").textContent
      var total = document.getElementById("total").textContent

      var delimiter = " "
      var texToSend = "Halo, saya ingin memesan tiket" +delimiter
      texToSend += tiket + " (x" + quantity + ")" +delimiter
      texToSend += "pajak Rp " + pajak +delimiter
      texToSend += "total Rp " + total +delimiter
      texToSend += "nama " + nama +delimiter
      texToSend += "no. HP " + phone
      window.open("https://api.whatsapp.com/send?phone=6281333643858&text="+texToSend, "_blank")

      window.location = "<?php echo base_url(); ?>index.php/list/bayar-action/" + ID
    }

  </script>

</body>

</html>
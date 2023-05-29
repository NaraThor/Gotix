<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/main/ticket/style.css" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/main/navbar/dropdown.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/main/navbar/index.css" />
    <title>Lihat Tiket</title>
</head>

<body>

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
    <?php echo $this->session->flashdata('pesan') ?>
    <div style="margin : 20px 20px 20px 20px;">
        <div class="card" style="background-color : transparent; margin : 0; padding: 0;">
            <center>
                <img src="<?php echo base_url(); ?>assets/main/event/img/<?php echo $event->{"event_foto"}?>" style="max-height: 400px; max-width: 400px;">
            </center>
        </div>

        <div class="card" style="background-color: transparent;">
            <center><h1><?php echo $event->{"event_judul"} ?></h1></center>
            <center><p><?php echo $event->{"event_deskripsi"} ?></p></center>
        </div>

        <?php foreach($ticket as $aData) { ?>
            <div class="card">
                <div class="disp">
                    <div class="flex" style="text-align: left;">
                            <strong><p><?php echo $aData->{"ticket_nama"} ?></p></strong>
                            <strong><p>Rp <?php echo $aData->{"ticket_harga"} ?></p></strong>
                    </div>
                    <div class="flex" style="text-align: right; padding-top: 30px;">
                            <strong><a href="<?php echo base_url(); ?>index.php/list/bayar/<?php echo $aData->{"ticket_id"}; ?>">Beli Tiket</a></strong>
                    </div>
                </div>
            </div>
        <?php } ?>
    <div>

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
        

    <script>
        function detail(id){
            window.location = "<?php echo base_url(); ?>index.php/list/"+ id
        }
    </script>
</body>

</html>
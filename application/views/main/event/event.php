<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/main/event/LTStyle.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/main/navbar/dropdown.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/main/navbar/index.css" />
    <title>Lihat Event</title>
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

    <div style="margin : 20px 20px 20px 20px;">
        <?php foreach($event as $aData) { ?>
            <?php
                $tanggal = explode(' ', $aData->{"event_waktu"}); 
            ?>
            <div class="row">
                <div class="column left" style="background-image: url('<?php echo base_url(); ?>assets/main/event/img/<?php echo $aData->{"event_foto"}?>');"></div> <!-- Bisa pakai gambar untuk grup ban yang akan konser -->
                <div class="column right" style="background-color: #bbb;">
                    <h1><?php echo $aData->{"event_judul"} ?></h1>
                    <h2><?php echo $tanggal[0] ?></h2>
                    <h2><?php echo $tanggal[1] ?></h2>
                    <button class="button" onclick="detail('<?php echo $aData->{"event_id"} ?>')">Detail</button>
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
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/main/navbar/dropdown.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/main/navbar/index.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/main/profile/Style.css" />
    <title>Profile</title>
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

    <form action="<?php echo base_url(); ?>index.php/reset" methode="POST">
    <h1>Edit Profile</h1>
    <div class="container">
        <div class="circle">user</div>
        <div class="text">
            <input type="hidden" placeholder="username" name="username" style="width: 75%; margin-bottom: 20px;" value="<?php echo $this->session->userdata('username'); ?>">
            <input type="text" placeholder="email" name="email" style="width: 75%; margin-bottom: 20px;" value="<?php echo $this->session->userdata('email'); ?>">
            <input type="text" placeholder="alamat" name="alamat" style="width: 75%; margin-bottom: 20px;" value="<?php echo $this->session->userdata('alamat'); ?>">
            <input type="text" placeholder="no. telepon" name="no_telp" style="width: 75%; margin-bottom: 20px;" value="<?php echo $this->session->userdata('no_telp'); ?>">
            <input type="text" placeholder="password" name="password" style="width: 75%; margin-bottom: 20px;" value="<?php echo $this->session->userdata('password'); ?>">
        </div>
    </div>

    <div class="butcontainer">
        <div>
            <button class="button" type="submit" name="submit" onclick="save()">SIMPAN</button>
        </div>
    </div>
</form>

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

</body>

<script type="text/javascript">
    function save(){
        var username = document.getElementById("username").textContent
        var email = document.getElementById("email").textContent
        var password = document.getElementById("password").textContent
        var alamat = document.getElementById("alamat").textContent
        var no_hp = document.getElementById("no_hp").textContent
        
        
          const xhttp = new XMLHttpRequest();
          xhttp.onload = function() {
                console.log(1)
            }
          xhttp.open("POST", "<?php echo base_url(); ?>index.php/reset", true);
          xhttp.send();
        
    }
</script>

</html>
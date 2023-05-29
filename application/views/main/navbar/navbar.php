<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/dropdown.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- Header -->
    <header>
        <div class="dropdown_mother">

            <div class="brand"><a href="#">GET TIX</a></div>

        </div>
        <nav>
            <div class="topnav">

                <a href="<?php echo base_url(); ?>index.php/home"> Home </a>
                <a href="<?php echo base_url(); ?>index.php/profile">Profile</a>
                <a href="<?php echo base_url(); ?>index.php/logout">Log-out</a>
            </div>

            <ul>

                <div class="header">

                </div>
                <!-- <li> -->
                <div class="dropdown">
                    <button class="dropbtn"> <img src="images/dropdown.png"> </button>
                    <div class="dropdown-content">
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



</body>

</html>
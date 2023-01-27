<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/publics.css') ?>">
    <title><?= $title; ?></title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body class="bg-dark text-light">
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('home') ?>" aria-colspan="text-decoration-none text-light">Holidays</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end bg-dark text-light" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                        <h5 class="nav-link" alt=""><a href="<?= base_url('user') ?>"><img style="width:40px; height:40px;" class="rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>"></a></h5>
                    </h5>
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                        <h5 class="nav-link" alt=""><a href="<?= base_url('user') ?>" class="text-decoration-none text-light">
                                <h1><?= $user['name']; ?></h1>
                            </a></h5>
                    </h5>
                    <button type=" button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <hr>
                <div class="offcanvas-body " style="margin-left: 5px;">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?= base_url('home') ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= base_url('publics') ?>">Publics</a>
                        </li>
                        <li class="nav-item mt-3 d-grid gap-2">
                            <a href="<?= base_url('auth/logout') ?>" class="text-decoration-none text-light btn-danger text-center p-2" style="border-radius:5px;">Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-md" style="margin-top: 100px;">
        <div class="subforum">
            <div class="subforum-title text-light">
                <h1>Announcement</h1>
            </div>


            <?php
            $dbuser = mysqli_connect("localhost", "root", "", "websamp");
            $no = 1;
            $ambildata = mysqli_query($dbuser, "SELECT * FROM user_chat");
            while ($tampil = mysqli_fetch_array($ambildata)) {
                echo "
        <div class='alert alert-light' style='margin-left: 3px; margin-right:3px' role=' alert'>
        <h4 class='alert-heading'>$tampil[username]<span class='text-light bg-danger rounded' style='margin-left:5px; margin-right:5px padding:5px; height:20px; border-radius:5px;'>Moderator</span></h4>
        <p>$tampil[chat]</p>       
    </div>";

                $no++;
            }
            ?>
            <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
            <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>
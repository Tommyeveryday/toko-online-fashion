<html>

<head>
    <title>Admin -UNHI Fashion</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/plugins/fancybox/jquery.fancybox.css">
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="column-12">
                <h1 align="center">Halaman Login UNHI Fashion</h1>
                <hr />
            </div>
            <div class="column-6">
                <img src="<?php echo base_url() ?>/images/admin.png" class="img-responsive">
            </div>
            <div class="column-6">
                <br />
                <br />
                <br />
                <h3>Isi form dibawah untuk login :</h3>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Email adress</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <a href="<?php echo site_url('admin/dashboard') ?>" class="btn btn-success">Login</a>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="column-12">
                    <h2 align="center">UNHI Fashion</h2>
                    <div class="text-center">
                        Alamat: Tembau, Jl. Sangalangit, Penatih, Kec. Denpasar Tim., Kota Denpasar, Bali 80238
                    </div>
                    <div class="text-center">
                        Telepon: (0361) 464700
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-credit">
            <div class="container">
                <div class="row">
                    <div class="column-12 text-center">
                        Created by <a href="" target="_blank">I Kadek Agus Kartadhi Mahardika</a> for Web
                        Programming
                        Course
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/plugins/fancybox/jquery.fancybox.js"></script>

</body>

</html>
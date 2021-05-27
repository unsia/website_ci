<!DOCTYPE html>
<html lang="en">

<head>

    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />

    <!-- DESCRIPTION -->
    <meta name="description" content="EduChamp : Education HTML Template" />

    <!-- OG -->
    <meta property="og:title" content="EduChamp : Education HTML Template" />
    <meta property="og:description" content="EduChamp : Education HTML Template" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="<?= base_url(); ?>assets/images/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.png" />

    <!-- PAGE TITLE HERE ============================================= -->
    <title>Universitas Siber Asia</title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/home/css/assets.css">

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/home/css/typography.css">

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/home/css/shortcodes/shortcodes.css">

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/home/css/style.css">
    <link class="skin" rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/home/css/color/color-1.css">

</head>

<body id="bg">
    <div class="page-wraper">
        <div class="account-form">
            <div class="account-head" style="background-image:url(../assets/images/background/bg2.jpg);">
                <a href="<?= base_url(); ?>"><img src="#" class="lazy"
											data-src="<?= base_url(); ?>assets/images/logo-white.png" width="300" alt=""></a>
            </div>
            <div class="account-form-inner">
                <div class="account-container">
                    <div class="error-page">
                        <a href="<?= base_url(); ?>"><img src="#" class="lazy"
											data-src="<?= base_url(); ?>assets/images/logo.png" width="300" alt=""></a>
                        <br>
                        <hr>
                        <h3 id="divid">GSQNBD9FPN</h3>
                        <button id="button1" class="btn outline" onclick="CopyToClipboard('divid')">Copy Voucher</button>
                        
                        <h5>Silahkan copy voucher tersebut, dan paste di Pendaftaran Online</h5>
                        <div class="">
                            <a href="https://pmb.unsia.ac.id/daftar/" class="btn">Pendaftaran Online</a>
                            <ul class="list-inline contact-social-bx mt-4">
                  <li>
                <a target="_blank" href="https://www.facebook.com/Universitas-Siber-Asia-115760190260178" class="btn outline radius-xl"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a target="_blank" href="https://api.whatsapp.com/send?phone=6281213732772&text=Hallo%20Admin%20UNSIA" class="btn outline radius-xl"><i class="fa fa-whatsapp"></i></a>
              </li>
              <li>
                <a target="_blank" href="https://www.instagram.com/asiacyberuniversity/" class="btn outline radius-xl"><i class="fa fa-instagram"></i></a>
              </li>
                  </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- External JavaScripts -->
    <script src="<?= base_url(); ?>assets/home/js/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/home/vendors/bootstrap/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>assets/home/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/home/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="<?= base_url(); ?>assets/home/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
    <script src="<?= base_url(); ?>assets/home/vendors/magnific-popup/magnific-popup.js"></script>
    <script src="<?= base_url(); ?>assets/home/vendors/counter/waypoints-min.js"></script>
    <script src="<?= base_url(); ?>assets/home/vendors/counter/counterup.min.js"></script>
    <script src="<?= base_url(); ?>assets/home/vendors/imagesloaded/imagesloaded.js"></script>
    <script src="<?= base_url(); ?>assets/home/vendors/masonry/masonry.js"></script>
    <script src="<?= base_url(); ?>assets/home/vendors/masonry/filter.js"></script>
    <script src="<?= base_url(); ?>assets/home/vendors/owl-carousel/owl.carousel.js"></script>
    <script src="<?= base_url(); ?>assets/home/js/functions.js"></script>
    <script src="<?= base_url(); ?>assets/home/js/contact.js"></script>
    <script src="<?= base_url(); ?>assets/home/js/blazy.js"></script>
    <script>
    function CopyToClipboard(containerid) {
  if (document.selection) {
    var range = document.body.createTextRange();
    range.moveToElementText(document.getElementById(containerid));
    range.select().createTextRange();
    document.execCommand("copy");
  } else if (window.getSelection) {
    var range = document.createRange();
    range.selectNode(document.getElementById(containerid));
    window.getSelection().addRange(range);
    document.execCommand("copy");
    alert("voucher berhasil di copy, silahkan daftar")
  }
}
    </script>
</body>

</html>
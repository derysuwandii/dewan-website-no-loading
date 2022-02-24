<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="logo.png">
    <title>Website Tanpa Loading</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
        .nav-menu {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary mb-5 text-white">
      <a class="navbar-brand nav-menu" id="home">Dewan Komputer</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link nav-menu text-white" id="home">Home</a></li>
          <li class="nav-item"><a class="nav-link nav-menu text-white" id="tentang_kami">Tentang Kami</a></li>
          <li class="nav-item"><a class="nav-link nav-menu text-white" id="hubungi_kami">Hubungi Kami</a></li>
          <li class="nav-item"><a class="nav-link nav-menu text-white" id="produk">Produk</a></li>
          <li class="nav-item"><a class="nav-link nav-menu text-white" id="blog">Blog</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
        <div class="halaman-menu"></div>
    </div>

    <div class="p-2 bg-secondary text-white text-center fixed-bottom">© <?php echo date('Y'); ?> Copyright:
      <a href="https://dewankomputer.com/"> Dewan Komputer</a>
    </div>
</body>

<script type="text/javascript">
    $(document).ready(function(){
        var halaman=getCookie("halaman");
        if (halaman == "") {
            setCookie("halaman", "home.php", 30);
            $('.halaman-menu').load(getCookie("halaman"));
        } else {
            $('.halaman-menu').load(getCookie("halaman"));
        }

        $('.nav-menu').click(function(){
            var menu = $(this).attr('id');
            setCookie("halaman", menu + ".php", 30);
            $('.halaman-menu').load(getCookie("halaman"));
        });
    });

    function setCookie(cname,cvalue,exdays) {
      var d = new Date();
      d.setTime(d.getTime() + (30*24*60*60*1000));
      var expires = "expires=" + d.toGMTString();
      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
      var name = cname + "=";
      var decodedCookie = decodeURIComponent(document.cookie);
      var ca = decodedCookie.split(';');
      for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
          c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }
      return "";
    }
</script>
</html>
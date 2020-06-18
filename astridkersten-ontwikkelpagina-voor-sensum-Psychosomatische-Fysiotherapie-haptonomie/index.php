<?php
  if (isset($_GET["page"])) {
    $mypage = $_GET["page"];
  } else {
    $mypage = 0;
  }
  
  switch($mypage) {
    case 10:  $load_page = '010_psychofysio'; break;
    case 20:  $load_page = '020_haptonomie'; break;
    case 30:  $load_page = '031_openingstijden'; break;
    case 31:  $load_page = '031_tarieven'; break;
    case 32:  $load_page = '032_betaling'; break;
    case 33:  $load_page = '033_klachten'; break;
    case 34:  $load_page = '034_privacy'; break;
    case 35:  $load_page = '035_kwaliteit'; break;
    case 40:  $load_page = '040_overmij'; break;
    case 50:  $load_page = '050_contact'; break;
    default: $load_page = '000_home';
  }
  
?>
<html>
  <head>
    <title>Sensumfysio.nl</title>
    <link rel="icon" type="image/svg+xml" href="image/Sensum_favicon.svg"/>
    <link rel="stylesheet" type="text/css" href="stylesheet/sensum.css">
    <link rel="stylesheet" type="text/css" href="stylesheet/purecssmenu.css">
    <meta name="author"   lang="nl" content="Astrid Kersten">
    <meta name="keywords" lang="nl"
          content="Fysiotherapie, Psychosomatische fysiotherapie, Haptonomie, Astrid Kersten, Astrid, Kersten, Sensum, Sensumfysio, Psychosomatiek">
  </head>
  <body>
    <div class="page"><?php include 'header.html'; ?></div>
    <div class="greenbg stickontop">
      <div class="page">
        <?php include 'menu.html'; ?>
      </div>
    </div>
    <div class="page padbottom"><?php include 'pages/'.$load_page.'.html'; ?></div>
    <div class="greenbg pad5 stickonbottom">
      <div class="page">
        <?php include 'tail.html'; ?>
      </div>
    </div>
  </body>
</html>

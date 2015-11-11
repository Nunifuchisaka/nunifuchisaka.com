<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns# fb: http://www.facebook.com/2008/fbml mixi: http://mixi-platform.com/ns#">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">

<!-- MEMO：イカやりたい -->

<title>ぬにふちさかのホームページ</title>
<meta name="description" content="自己紹介とか日記を書いていこうと思います。">
<meta name="keywords" content="Splatoon">
<meta name="author" content="nii.splatoon@gmail.com">

<!-- ogp -->
<!--
<meta property="og:site_name" content="">
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:url" content="">
<meta property="og:type" content="">
<meta property="og:image" content="">
-->

<!-- stylesheet -->
<link rel="stylesheet" href="/assets/css/common.css">
<link rel="stylesheet" href="/assets/css/utility.css">
<link rel="stylesheet" href="/assets/css/patch.css">

<noscript>
<link rel="stylesheet" href="/assets/css/noscript.css">
</noscript>

<!--[if lte IE 8]>
<script type="text/javascript" src="/assets/lib/html5shiv.js"></script>
<![endif]-->

<!-- analytics -->
<script src="/assets/js/analytics.js"></script>
</head>
<body id="top" class="body--index">

<?php
require_once('assets/html/facebook-sdk.php');
require_once('assets/html/header.php');
?>


<header class="l-header-1">
  <h1 class="l-header-1__h1">
    <a href="/">ぬにふちさかのホームページ</a>
  </h1>
</header>


<div class="l-container-1">
  <div class="l-container-1__primary">
    
    <article class="article-1">
      <header class="header-1">
        <h1 class="header-1__h1">ホームページ作りました。</h1>
        <p class="header-1__date">2015.11.11</p>
      </header>
      <div class="article-1__contents">
        <p>ちょっとずつ更新します。</p>
      </div>
    </article>
    
  </div>
  <div class="l-container-1__secondary">
    
    <?php
    require_once('assets/html/sidebar.php');
    ?>
    
  </div>
<!-- /.l-container-1 --></div>



<?php
require_once('assets/html/footer.php');
require_once('assets/html/javascript.php');
?>

</body>
</html>
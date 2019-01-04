<?php
  require_once "words.php";
  $secho = $words[rand(0, count($words) -1)];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>séchooo</title>
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400,900" rel="stylesheet">

  <link rel="shortcut icon" href="favicon.png" type="image/png">

  <meta property="og:title" content="sécho...">
  <meta property="og:description" content="<?php echo $secho;?>">
  <meta property="og:image" content="http://<?php echo $_SERVER['HTTP_HOST'];?>/og-image.png">
  <meta property="og:url" content="http://secho.fr/">
  <meta property="og:type"      content="website">
  <meta property="og:site_name" content="sécho"/>

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@TroisYaourts">
  <meta name="twitter:creator" content="@TroisYaourts">
  <meta name="twitter:title" content="sécho...">
  <meta name="twitter:description" content="<?php echo $secho;?>">
  <meta name="twitter:image" content="http://<?php echo $_SERVER['HTTP_HOST'];?>/og-image.png">
  <!--
    Une initiative pour améliorer la langue française de TroisYaourts
  -->

  <style>
    html, body {height: 100%;margin:0;padding:0;}
    body{background-color: #323232;color:white;font-family: "Work Sans"}
    body{display: flex;
         align-items: flex-end;
         justify-content: center;
         flex-direction:column;}
    
    .content{display: flex;align-self: center;flex-grow: 1;}
      h1{align-self: center;font-size:4em;text-align: center;}

    .copy{font-size: 9px; flex-shrink: 1;align-self: flex-end;padding-bottom: 1em;padding-right: 1em;}
    .copy a{color: #82e4e1;text-decoration: none;}
  </style>
</head>

<body>
  <div class="content">
    <h1><?php echo $secho;?></h1>
  </div>
  <div class="copy"><a href="http://troisyaourts.com" target="_blank">©TroisYaourts 2017</a></div>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-40900622-10', 'auto');
    ga('send', 'pageview');
  </script>
</body>
</html>
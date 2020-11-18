<?php 
$tz = getenv("TZ");
if (!empty($tz)) {
    date_default_timezone_set($tz);
}
$wednesday = date("w") === "3";
?>
<html>
<head>
    <meta property="og:url"                content="https://mydud.es" />
    <meta property="og:type"               content="article" />
    <?php if ($wednesday): ?>
    <title>It is wednesday, my dudes!</title>
    <meta property="og:title"              content="It is wednesday, my dudes!" />
    <meta property="og:description"        content="Aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" />
    <meta property="og:image"              content="https://mydud.es/demfrog.jpg" />
    <?php else: ?>
    <title>It is not quite wednesday, my pals</title>
    <meta property="og:title"              content="It is not quite wednesday" />
    <meta property="og:description"        content="My pals" />
    <meta property="og:image"              content="https://mydud.es/demtadpole.jpg" />
    <?php endif ?>

    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
    </style>
</head>
<body>
    <?php if($wednesday): ?>
    <img src="demfrog.jpg" class="center">
    <?php else: ?>
    <img src="demtadpole.jpg" class="center">
    <?php endif ?>
</body>
</html>
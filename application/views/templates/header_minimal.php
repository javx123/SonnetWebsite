<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Home page for Sonnet Labs" />
    <meta name="author" content="Sonnet Labs Inc." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/images/common/favicon.png" />
    <link rel="stylesheet" href="/css/glyphicons/glyphicons.css" />
    <link rel="stylesheet" href="/css/glyphicons/glyphicons-social.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/common/styles.css" />
    <?php foreach ($css_files as $index => $css_file): ?>
        <link rel="stylesheet" href="<?=$css_file?>" />
    <?php endforeach ?>
    <title><?=$title?> - Sonnet</title>
    <?php @include_once('analytics/hotjar.php') ?>
</head>
<body>
<?php @include_once('analytics/google_analytics.php') ?>

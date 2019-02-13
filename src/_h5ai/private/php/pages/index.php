<?php header('Content-type: text/html;charset=utf-8'); ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Maxim's Place</title>
<meta name="description" content="index - Maxim's Place">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?= $public_href; ?>images/favicon/favicon-16-32.ico">
<link rel="apple-touch-icon-precomposed" type="image/png" href="<?= $public_href; ?>images/favicon/favicon-152.png">
<link rel="stylesheet" href="<?= $public_href; ?>css/styles.css">
<?php if (!$fallback_mode) {
    ?><script src="<?= $public_href; ?>js/scripts.js" data-module="index"></script><?php
} ?>
<?= $x_head_tags; ?></head>

<body class="index" id="root"><div id="fallback-hints">
<?php if (!$fallback_mode) {
        ?>
        <span class="noJsMsg">Works best with JavaScript enabled!</span>
        <span class="noBrowserMsg">Works best in <a href="http://browsehappy.com">modern browsers</a>!</span>
        <?php
    } ?><span class="backlink"><a href="https://larsjung.de/h5a i/" title="There is no place like 127.0.0.1">Maxim's Place</a></span></div>
    <div id="fallback"><?= $fallback_html; ?></div></body></html>
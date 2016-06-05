<?php
/**
 * Created: 2016-05-17
 * @author Yauhen Saroka <yauhen.saroka@gmail.com>
 */

require_once(dirname(__FILE__) . '/vendor/autoload.php');

use \ysaroka\autothumb\AutoThumb;

$autothumb = new AutoThumb(require_once(dirname(__FILE__) . '/autothumb.config.php'));

if (isset($_GET['regenerate'])) {
    $autothumb->cleanThumbnails('images');
    header('Location: /index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Autohumb demo project</title>
</head>
<body>
<a href="index.php?regenerate=1">Regenerate all thumbnails</a>

<div style="text-align: center">
    <div><img src="<?=$autothumb->getThumbnail('images/original-image-1024x768.jpg', 'small');?>" />
    </div>
    <div>Thumbnail type "small".</div>
    <br />

    <div><img src="<?=$autothumb->getThumbnail('images/original-image-1024x768.jpg', 'medium');?>" />
    </div>
    <div>Thumbnail type "medium".</div>
    <br />

    <div><img src="<?=$autothumb->getThumbnail('images/original-image-1024x768.jpg', 'large');?>" />
    </div>
    <div>Thumbnail type "large".</div>
    <br />

    <div><img src="<?=$autothumb->getThumbnail('images/original-image-1024x768.jpg', '50x50');?>" />
    </div>
    <div>Thumbnail type "50x50".</div>
    <br />

    <div><img src="<?=$autothumb->getThumbnail('images/original-image-1024x768.jpg', '100x200');?>" />
    </div>
    <div>Thumbnail type "100x200".</div>
</div>
</body>
</html>
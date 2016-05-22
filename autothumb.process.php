<?php
/**
 * Created: 2016-05-17
 * @author Yauhen Saroka <johnkind49@gmail.com>
 */

require_once(dirname(__FILE__) . '/vendor/autoload.php');

use \ysaroka\autothumb\AutoThumb;

$autothumb = new AutoThumb(require_once(dirname(__FILE__) . '/autothumb.config.php'));
$autothumb->process($_GET);
<?php
/**
 * Created: 2016-05-17
 * @author Yauhen Saroka <yauhen.saroka@gmail.com>
 */

$documentRoot = dirname(__FILE__);

return [
    // Set web-server document root directory.
    // If you want to specify a different directory - you have to change .htaccess file as follows:
    // RewriteRule other/images/directory/(.*)-autothumb-([\w\d]+)\.([\w\d]+)$ autothumb.process.php?image=$1.$3&type=$2
    'document_root' => $documentRoot,

    'types' => [
        // Type name must contain only words and numbers
        'small' => [
            'width' => 150,
            'height' => 100,
            // When set to true, the thumbnail will be cropped from the center to match the given size. Defaults to true.
            'crop' => true,
            // When set to false, an image smaller than the box area won't be scaled up to meet the desired size. Defaults to false.
            'stretch' => false,
        ],
        'medium' => [
            'width' => 300,
            'height' => 200,
        ],
        'large' => [
            'width' => 600,
            'height' => 400,
            'watermark' => $documentRoot . DIRECTORY_SEPARATOR . 'images/watermarks/watermark.png',
            // Watermark position, available values: (top|mid|bottom)_(left|right|center), defaults to "bottom_right"
            'watermark_pos' => 'bottom_left',
        ],
        '50x50' => [
            'width' => 50,
            'height' => 50,
        ],
        '100x200' => [
            'width' => 100,
            'height' => 200,
        ],
    ],
];
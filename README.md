Demo project for [AutoThumb](https://github.com/ysaroka/autothumb), PHP library to automatically create thumbnails.

## Requirements
**PHP >= 5.4** , and one of the following image extensions for PHP: **Imagick** or **GD**.

Web-server **Apache** with module **mod_rewrite** enabled.

## Installation
Install demo project using the <a href="https://getcomposer.org/" target="_blank">Composer</a> package manager in document root directory of the web server (in demo used web server Apache):

    $ composer create-project ysaroka/autothumb-demo ./

For **nginx** web server just add into the configuration file of your site the following rule before others regex rules:

    location ~ (.*)-autothumb-([\w\d]+)\.([\w\d]+)$ {
        try_files $uri $uri/ /autothumb.process.php?image=$1.$3&type=$2;
    }
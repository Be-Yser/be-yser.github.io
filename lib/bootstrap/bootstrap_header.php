<?php

// VERSION CDN
//$source CDN : https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6

// VERSION LOCAL
$source = ROOT_URL . "/lib/bootstrap/";

// Latest compiled and minified CSS
echo('<link rel="stylesheet" href="' . $source . 'css/bootstrap.min.css"/>');

// Optional theme
echo('<link rel="stylesheet" href="' . $source . 'css/bootstrap-theme.min.css"/>');

// Latest compiled and minified JavaScript
echo('<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>');
echo('<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>');
echo('<script src="' . $source . '/js/bootstrap.min.js"></script>');

// FONT AWESOME
echo('<link rel="stylesheet" href="/style/font-awesome-4.7.0/css/font-awesome.min.css"/>');
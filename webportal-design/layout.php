<?php

function sanitize_output($buffer) {

    $search = array(
        '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
        '/[^\S ]+\</s',     // strip whitespaces before tags, except space
        '/(\s)+/s',         // shorten multiple whitespace sequences
        '/<!--(.|\s)*?-->/' // Remove HTML comments
    );

    $replace = array(
        '>',
        '<',
        '\\1',
        ''
    );

    $buffer = preg_replace($search, $replace, $buffer);

    return $buffer;
}

ob_start("sanitize_output");

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <?php include('components/meta.php') ?>
    </head>
    <body class="sticky-header">

        <?php include('components/header.php') ?>


        <?php include('main_content/' . $main_content . '.php') ?>


        <?php include('components/footer.php') ?>


    </body>
</html>

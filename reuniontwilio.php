<?php

    header('Content-Type: text/xml');
    $codeWithSpaces = implode(', ',str_split($_GET["code"]));
    echo '<?xml version="1.0" encoding="UTF-8"?>
<Response>
<Say voice="alice" loop="2">Your confirmation code is '.$codeWithSpaces.'</Say>
</Response>';
?>

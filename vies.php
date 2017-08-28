<?php
    $output = shell_exec('python H:\dev\python\vatnumber\vat.py '.$_GET['vies']);
    echo $output;
?>
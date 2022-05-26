<?php

    $input = "Saat meng*ecat tembok, Agung dib_antu oleh Raihan.";
    echo $input;
    echo '<br>';
    $pemisah = ' ';
    $kata = explode($pemisah, $input);
    $result = count($kata);
    
    foreach ($kata as $word) {
        if(!preg_match("/^[a-zA-Z,.]*$/", $word))
        {
            $result = $result - 1;
        }
    }
    echo $result;
?>
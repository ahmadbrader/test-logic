<?php

    $input = [1,1,3,1,2,1,3,3,3,3];
    $results = array_count_values($input);
    $output = [];
    foreach ($results as $index => $value)
    {
        
        if ($value > 1)
        {
            if ($value > 3)
            {
                if ($value % 2 == 0){ 
                    for ($i=0;$i<$value/2;$i++)
                    {
                        array_push($output, $index);
                    }
                }else {
                    $j = $value - 1;
                    for ($i=0;$i<$j/2;$i++)
                    {
                        array_push($output, $index);
                    }
                }
            }
            else
            {
                array_push($output, $index);
            }
            

        }
    }
    // print_r($output);
    echo "Kaos kaki yang dapat dijual : ".count($output);

?>
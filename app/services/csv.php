<?php
function get_html($csv_file)
{    
    $data = [];
    $results = [];
    $file = fopen($csv_file, 'r');
    
    // Skip the first line
    fgets($file); 

    // Add data to an array
    while ($line = fgetcsv($file))
    {    
        $data[] = $line;
    }

    // Sort alphabetically the data
    usort($data, function($item1,$item2)
    {
        return $item1[0]<=>$item2[0];
    });   

    // Read the data and print the results
    $i = 0;
    foreach ($data as $info)
    {
        if (!in_array($info, $results) && isset($info) && $info[0] != NULL)
        {
            $results[] = $info;

            for ($j = 0; $j < 3; $j++)
            {
                echo $results[$i][$j];             
            }

            echo '<br>';
            $i++;
        }
    }
}
?>
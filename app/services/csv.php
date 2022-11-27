<?php
function get_html($csv_file)
{    
    $data = [];
    $html = '';
    $file = fopen($csv_file, 'r');
    
    // Skip the first line
    fgets($file); 

    while ($line = fgetcsv($file))
    {
        // Skip empty lines
        if (array(null) !== $line)
        {        
            $data[] = $line;
        }

    }

    // Sort alphabetically the data
    usort($data, function($item1,$item2)
    {
        return $item1[0]<=>$item2[0];
    });

    // Delete the duplicates
    $data = array_unique($data, SORT_REGULAR);

    // Read the csv file
    for ($i = 0; $i < count($data); $i++)
    {       
        $html .= '<div>';
            for ($j = 0; $j < 3; $j++)
            {  
                $html .= $data[$i][$j];
            }        
        $html .= '</div>';
    }

    return $html;
}
?>
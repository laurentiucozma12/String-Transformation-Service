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

    // Sort data alphabetically
    usort($data, function($item1,$item2)
    {
        return $item1[0]<=>$item2[0];
    });  

    // Read the data
    foreach ($data as $info)
    {
        if (!in_array($info, $results) && isset($info) && $info[0] !== NULL)
        {
            $results[] = $info;
        }
    }     

    // Add the firtChar-lastChar chars in array
    // Save in 2 variables the first and last word in the array (on the first column)
    $firstWord = $results[0][0];
    $lastWord = $results[count($results) - 1][0];

    // Get the first char of the last and first words
    $firstWordChar = $firstWord[0];
    $lastWordChar = $lastWord[0];
    foreach (range($firstWordChar, $lastWordChar) as $char)
    {
        $arrayChar = str_split($char);
        array_push($results, $arrayChar); 
    }

    // Sort data alphabetically again 
    usort($results, function($item1,$item2)
    {
        return $item1[0]<=>$item2[0];
    });

    // Print the data
    $i = 0;
    foreach ($results as $info)
    {   
        if (is_array($info) || is_object($info))
        {        
            foreach ($info as $word)
            {     
                echo $word;   
            }
            
            echo '<br>';
        }

        $addBr = $info;
        if (!is_array($addBr))
        {        
            str_split($addBr);
        }

        if (isset($addBr[$i][0]) && $addBr[$i][0] !== NULL 
        && $addBr[$i][0] !== $addBr[$i + 1][0]) 
        {
            echo '<br>';
        }        
           
        $i++;
    }
}
?>
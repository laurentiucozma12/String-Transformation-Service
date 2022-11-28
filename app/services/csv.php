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
    $char1 = $firstWord[0];
    $char2 = $lastWord[0];
    foreach (range($char1, $char2) as $char)
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
    $length = count($results) + count(range($char1, $char2)) - 2;
    for ($i = 0; $i < $length; $i++)
    {   
        for ($j = 0; $j < 3; $j++)
        {
            if (!is_array($results[$i][$j]))
            {    
                str_split($results[$i][$j]);
            }           

            echo $results[$i][$j];    

            if ($j == 0)
            {
                // Get the words of current and next line    
                $word1 = $results[$i][0];
                $word2 = $results[$i + 1][0];
    
                // Get the first char of current words
                $wordChar1 = $word1[0];
                $wordChar2 = $word2[0];              
            } 

            if ($wordChar1 !== $wordChar2 && $j == 2)
            {
                echo '<br>';
            }
        }        
            
        echo '<br>';
    }
}
?>

<?php
// PHP program to print reverse
// of words in a string
function wordReverse($str)
{
    $i = strlen($str) - 1;
    $end = $i + 1;
    $result = "";
     
    while($i >= 0)
    {
        if($str[$i] == ' ')
        {
            $start = $i + 1;
            while($start != $end)
                $result = $result . $str[$start++];
             
            $result = $result . ' ';
             
            $end = $i;
        }
        $i--;
    }
    $start = 0;
    while($start != $end)
        $result = $result . $str[$start++];
     
    return $result;
}
 
// Driver code
$str = "I AM A GEEK";
echo wordReverse($str);
 
// This code is contributed by ita_c
?>
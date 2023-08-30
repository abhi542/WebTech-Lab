<?php
$a = array(array(1,2,3), array(4,5,6), array(7,8,9));
$b = array(array(7,8,9), array(4,5,6), array(1,2,3));
$m = count($a);
$n = count($a[2]);
$p = count($b);
$q = count($b[2]);

echo"The first Matrix:";
for($row=0; $row<$m; $row++){
    for($col=0; $col<$n; $col++){
        echo" ". $a[$row][$col];
    }
    echo"<br/>";
    
}
echo"The second Matrix:";
for($row=0; $row<$m; $row++){
    for($col=0; $col<$n; $col++){
        echo" ". $b[$row][$col];
    }
    echo"<br/>";
    
}

echo"The transpose of first Matrix:";
for($row=0; $row<$m; $row++){
    for($col=0; $col<$n; $col++){
        echo" ". $a[$col][$row];
    }
    echo"<br/>";
    
}

echo"The transpose of second Matrix:";
for($row=0; $row<$m; $row++){
    for($col=0; $col<$n; $col++){
        echo" ". $b[$col][$row];
    }
    echo"<br/>";
    
}

if(($m==$p) and ($n==$q))
{
    echo"The addition is:";
    for($row=0; $row<$m; $row++){
        for($col=0; $col<$n; $col++){
            echo" ". $a[$row][$col]+$b[$row][$col];
        }
    echo"<br/>";
    }
}

if($n==$p)
{
    echo"The product is:";
    $result = array();
    for($i=0; $i<$m; $i++)
    {
        for($j=0; $j<$n; $j++)
        {
            $result[$i][$j] = 0;
            for($k=0; $k<$n; $K++)
                $result[$i][$j] = $a[$i][$k] * $b[$k][$j];
        }
    }
    for($row=0; $row<$m; $row++){
        for($col=0; $col<$n; $col++){
            echo" ". $result[$row][$col];
        }
    echo"<br/>";
    }
}
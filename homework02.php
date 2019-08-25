<?php
    $poker = range(0,51);
    for ($i=51;$i>0;$i--){
        $tempIndex = rand(0,$i);
        [$poker[$tempIndex],$poker[$i]] = [$poker[$i],$poker[$tempIndex]];
    }
    foreach($poker as $index => $p){
        echo "{$index}: {$p}<br>";
    }
?>
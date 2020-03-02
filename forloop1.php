<?php

for ($i=1; $i <= 10; $i++) { 
    echo $i."<br>";
}
/**
 * break / continue
 */

for ($i=1; $i <= 10; $i++) { 
    
    for ($j=1; $j <= 10; $j++) { 
        if($i == 5){
            break;
        }
        echo $i. ' - ' .$j."<br>";
    }
}



for ($i=1; $i <= 5; $i++) { 
    if($i == 3){
        break;
    }
    for ($j=1; $j <= 5; $j++) { 
        if($i == $j){
            continue;
        }
        echo $i. ' - ' .$j."<br>";
    }
}


<?php
    echo("Input a string:\r\n");
    $strLine = chop(fgets(STDIN));
    $nLen = strlen($strLine);
    for ($i = 0; $i < $nLen; $i++)
    {
        $c = 0;
        $chSym1 = $strLine[$i];
        for ($j = 0; $j < $nLen; $j++)
        {
            $chSym2 = $strLine[$j];
            if($chSym1 == $chSym2)
            {
                $c++;
            }
        }
        printf("The symbol \"%s\" occurs %d times\r\n", $chSym1, $c);  
    }
    fgetc(STDIN); 
?>
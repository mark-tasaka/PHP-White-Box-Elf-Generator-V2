<?php
/*HitPoints randomly generate hit points*/

function getHitPoints ($level, $conMod)
{
    $hitPoints = 1;

    if($level == 1)
    {
        $hitDice = 1;
    }
    else if($level == 2 || $level == 3)
    {
        $hitDice = 2;
    }
    else if($level == 4 || $level == 5)
    {
        $hitDice = 3;
    }
    else if($level == 6 || $level == 7)
    {
        $hitDice = 4;
    }
    else
    {
        $hitDice = 5;
    }
    
    
    $counter = 0;
            
    for(;$counter < $hitDice; $counter++)
            {

                $hpEachLevel = 0;
                $hpEachLevel = rand(1, 6) + $conMod;

                if($hpEachLevel < 3)
                    {
                        $hpEachLevel = 3;
                    }

                $hitPoints += $hpEachLevel;
            }

    if($level == 1)
    {
        $hitPoints += 1;
    }
    
    if($level == 3)
    {
        $hitPoints += 1;
    }
    
    if($level == 5)
    {
        $hitPoints += 1;
    }
    
    if($level == 7)
    {
        $hitPoints += 1;
    }
    
    return $hitPoints;
    
}

function getHitDiceAmount ($level)
{
    $hd = "-";
    
    if($level == 1)
        {
            $hd = "1+1";
        }
    else if($level == 2)
        {
            $hd = "2";
        }
    else if($level == 3)
        {
            $hd = "2+2";
        }
    else if($level == 4)
        {
            $hd = "3";
        }
    else if($level == 5)
        {
            $hd = "3+1";
        }
    else if($level == 6)
        {
            $hd = "4";
        }
    else if($level == 7)
        {
            $hd = "4+1";
        }
    else if($level == 8)
        {
            $hd = "5";
        }
    else if($level == 9)
        {
            $hd = "5";
        }
    else if($level == 10)
        {
            $hd = "5+1";
        }
        else if($level == 11)
            {
                $hd = "6";
            }
        else if($level == 12)
            {
                $hd = "6+1";
            }
    
    return $hd;
                
}

?>
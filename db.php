<?php
$m=$_POST['maths'];
$p=$_POST['physics'];
$ee=$_POST['ee'];
$cs=$_POST['cs'];
$c=$_POST['chem'];
$ms=$_POST['sn'];

$x=max($m, $p, $ee, $cs, $c);

$marks=array($m, $p, $ee, $cs, $c);
$sub=array('maths', 'physics', 'electrical', 'computer science', 'chemistry');

$mt=$_POST['mt'];
if($ms=='1')
{
if($x==$m)
{
    echo "the highest marks is $x in maths";
}
if($x==$p)
{
    echo "the highest marks is $x in physics";
}
if($x==$ee)
{
    echo "the highest marks is $x in electrical engineering";
}
if($x==$cs)
{
    echo "the highest marks is $x in computer science";
}
if($x==$c)
{
    echo "the highest marks is $x in chemistry";
}
}
if($ms=='2')
{
   for($i=0;$i<5;$i++)
   {
       if($marks[$i]>=90 && $marks[$i]<=100)
        {
            echo "Grade is O in subject:$sub[$i]";
            echo "<br>";
        }
        if($marks[$i]>=80 && $marks[$i]<90)
        {
            echo "Grade is E in subject:$sub[$i]";
            echo "<br>";       
        }
        if($marks[$i]>=70 && $marks[$i]<80)
        {
            echo "Grade is A in subject:$sub[$i]";
            echo "<br>";
        }
        if($marks[$i]>=60 && $marks[$i]<70)
        {
            echo "Grade is B in subject:$sub[$i]";
            echo "<br>";
        }
        if($marks[$i]>=50 && $marks[$i]<60)
        {
            echo "Grade is C in subject:$sub[$i]";
            echo "<br>";
        }
        if($marks[$i]>=40 && $marks[$i]<50)
        {
            echo "Grade is D in subject:$sub[$i]";
            echo "<br>";
        }
        if($marks[$i]>=30 && $marks[$i]<40)
        {
            echo "Grade is F in subject:$sub[$i]";
            echo "<br>";
        }
               
   }   
}
if($ms=='3')
{
    for($i=1;$i<=10;$i++)
    {    $y=$mt*$i;
        echo "$mt * $i = $y";
        echo"<br>";
    }
}
?>

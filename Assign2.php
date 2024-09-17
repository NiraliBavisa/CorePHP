<?php
echo "<br><br>";
echo "***********Example-1************";
echo "<br><br>";
$phy=60;
$che=59;
$bio=45;
$math=80;
$com=76;
$per=($phy+$che+$bio+$math+$com)/5;
if($per>=80)
{
    echo $per."%"."<br>";
    echo "Garde A";
}
elseif($per>=70)
{
    echo $per."%"."<br>";
    echo "Grade B";
}
elseif($per>=60)
{
    echo $per."%"."<br>";
    echo "Grade C";
}
elseif($per>=50)
{
    echo $per."%"."<br>";
    echo "Grade D";
}
elseif($per>=40)
{
    echo $per."%"."<br>";
    echo "Grade E";
}
else
{
    echo "Fail";
}
echo "<br><br>";
echo "********************************";
echo "<br><br>";
$day=4;
switch($day)
{
    case "1":
        echo "Monday";
        break;
    case "2":
        echo "Tuesday";
        break;
    case "3":
        echo "Wednesday";
        break;
    case "4":
        echo "Thursday";
        break;
    case "5":
        echo "Friday";
        break;
    case "6":
        echo "Saturday";
        break;
    case "7":
        echo "Sunday";
        break;
    default:    
        echo "Invalid Day";
}
echo "<br><br>";
echo "***********Example-2************";
echo "<br><br>";
echo "Leap Years Between 1901 to 2016<br><br>";
for($year=1901;$year<=2016;$year++)
{
    if(($year%4==0)&&($year%100!=0)||($year%400==0))
    {
        echo $year."<br>";
    }
}
echo "<br><br>";
echo "***********Example-3************";
echo "<br><br>";
$a=10;
$b=20;
$c=35;
$large=(($a>$b && $a>$c)? $a : ($b>$c)) ? $b : $c;
echo "Largest Number =>".$large;
echo "<br><br>";
echo "***********Example-4************";
echo "<br><br>";
$sum=0;
$x=0;
$y=1;
echo $x.",".$y.",";
while($sum<8)
{
    $z=$y+$x;
    echo $z.",";
    $x=$y;
    $y=$z;
    $sum=$sum+1;
}
echo "<br><br>";
echo "***********Example-5************";
echo "<br><br>";
function armstrong($num)
{
    $sum=0;
    $x=$num;
    while($x!=0)
    {
        $y=$x%10;
        $sum=$sum+$y*$y*$y;
        $x=$x/10;
    }
    if($num==$sum)
    {
        return 1;
    }
    return 0;
}
$num=153;
$z=armstrong($num);
if($z==1)
{
    echo $num." Armstrong<br>";
}
else
{
    echo $num." Not Armstrong<br>";
}
echo "<br>********************************";
echo "<br><br>";
echo "5 "."9<br>";
echo "2610<br>";
echo "3711<br>";
echo "4812<br>";
echo "<br><br>";
echo "***********Example-6************";
echo "<br><br>";
for($i=0;$i<5;$i++)
{
    echo "*";
}
echo"<br>";
echo "*";
echo "<br>";
echo "*";
echo "<br>";
echo "*";
echo "<br>";
for($i=0;$i<5;$i++)
{
    echo "*";
}
echo "<br><br>";
echo "***********Example-7************";
echo "<br><br>";
$a = '1'; 
$b = &$a;   
$b = "2$b"; 
echo $a."<br>";
echo $b."<br>";
echo "<br><br>";
echo "***********Example-8************";
echo "<br><br>";
$arr=['Even','Odd'];
$n=6;
$m=3;
echo $n." is ".$arr[$n%2]."<br>";;
echo $m." is ".$arr[$m%2];
echo "<br><br>";
echo "***********Example-9************";
echo "<br><br>";
$findarr=array();
$arr1=array("a"=>10,"b"=>20,"c"=>10,"d"=>16);
foreach($arr1 as $key=>$value)
{
    if(!in_array($value,$findarr))
    $findarr[$key]=$value;
}
print_r($findarr);
echo "<br><br>";
echo "***********Example-10************";
echo "<br><br>";
$a=array(10,25,48,73,92);
$random=array_rand($a,2);
echo $a[$random[0]]."<br>";
echo $a[$random[1]];
echo "<br><br>";
echo "***********Example-11************";
echo "<br><br>";
$arr=[23,67,95,74,19];
$total=0;
for ($i = 0; $i < sizeof($arr); $i++) 
{
    $total = $total + $arr[$i];
}
echo "Total values of array: ".$total;
echo "<br><br>";
echo "***********Example-12************";
echo "<br><br>";
$arr=[1.5,2.3,5.9];
$arr1=[6.9,4.7,0.9,5.8,2.5];
for($i=0;$i<sizeof($arr);$i++)
{
    for($j=0;$j<sizeof($arr1);$j++)
    {
        echo $arr1[$j].",";
    }
    echo "<br>";
}
?>
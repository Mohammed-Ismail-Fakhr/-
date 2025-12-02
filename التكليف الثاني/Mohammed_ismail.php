<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mohammed_ismail</title>
</head>
<body>
    <?php
    /*التكليف الثاني
    القسم امن سيبراني 
    المجموعه (ب)
اسم الطالب :  محمد اسماعيل صالح فخر الدين
   
*/
$birds =["falcon","eagle","pigeon","ostrich","crow","parrot"];
$fish  =["sharks","whales","dolphins"];
$animals=[];

$b=0;
$f=0;
while($b<count($birds)||$f<count($fish)){
    for($i=0;$i<2;$i++){
        if($b<count($birds)){
        $animals[]=$birds[$b];
        $b++;
}
}
if($f<count($fish)){
    $animals[]=$fish[$f];
    $f++;
}
}
 echo "<h3>Mohammed ismail fakhr Al-Din<h3><hr>";
foreach($animals as $M){
   
    echo $M ."<hr>";
}
?>
</body>
</html>
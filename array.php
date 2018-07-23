<?php
$members=array(
"membera"=>array(
"name"=>"John",
"Zodiac"=>"scorpio",
"country"=>"USA",
),
"memberaa"=>array(
"name"=>"John123",
"Zodiac"=>"scorpio4455",
"country"=>"Nepal",
),
"memberaaass"=>array(
"name"=>"basu123",
"Zodiac"=>"scorpio4455",
"country"=>"Nepal",
),
"memberaaaaa"=>array(
"name"=>"krishna123",
"Zodiac"=>"scorpio4455",
"country"=>"Nepal",
),
"memberaaaaaaaa"=>array(
"name"=>"nabin123",
"Zodiac"=>"scorpio4455",
"country"=>"Nepal",
));
$count=count($members);
  
echo "$count";
$i=0;
foreach ($members as $each_memberperson) {
	$i++;
	echo "<h2>member $i</h2>";

   while(list($key, $value)=each($each_memberperson))

{
	echo"$key:$value<br/>";
}




	
}
 
 







?>
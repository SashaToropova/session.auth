<?php
if (!isset($_COOKIE['count'])) $count = 1;
else $count = $_COOKIE['count'];
$count++;
setcookie("count",$count);
if (($count == 5) || ($count == 10) || ($count == 15))
{
echo 'Uhuu! Number of views:'.$count;
}
else
{
if ($count == 20)
{
$count = 0;
setcookie("count",$count);
echo 'Number of views:'.$count;
}
else
{
echo 'Number of views:'.$count;
}
}
?>
		


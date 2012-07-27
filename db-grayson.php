<?php header('content-type: application/json; charset=utf-8'); 
$rows = array();
$id = $_GET['id'];
$callback = $_GET['callback'];
$dbTable = $_GET['inventory'];
$query  = $_GET['query'];


mysql_connect(localhost, "graysonf_admin", "GyWX^hl_iu-8") or die(mysql_error());
mysql_select_db("graysonf_base") or die(mysql_error());
if($dbTable != 'dealers'){$data = $id ? mysql_query("SELECT * FROM $dbTable WHERE $query='$id'") : mysql_query("SELECT * FROM $dbTable") or die(mysql_error());}else{

if(!$id == 1){
$data = mysql_query(" SELECT * FROM $dbTable") or die(mysql_error() );
}else{
	$data = mysql_query(" SELECT * FROM $dbTable WHERE FIND_IN_SET('$id', $query) ") or die(mysql_error());
	}
}

while($r = mysql_fetch_assoc($data)) { $rows[] = $r;}
mysql_close(mysql_connect);
if($callback){echo $callback . '(' . json_encode($rows) . ');';} else{echo json_encode($rows);}
?>
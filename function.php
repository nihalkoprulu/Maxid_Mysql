<?php
	function GetMaxId($TableName,$PrimaryField) {
	  $RsMax = mysql_query("SELECT MAX(".$PrimaryField.") AS MAXID FROM ".$TableName,$conn);
	  $satir = mysql_fetch_array($RsMax);
	  $Maxid = $satir["MAXID"];
	  mysql_free_result($RsMax);
	  if ($Maxid == "") $Maxid = 0; 
	  $Maxid = $Maxid + 1;
	  return $Maxid;
}
?>
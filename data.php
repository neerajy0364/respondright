<?php
$val=$_REQUEST["q"];
include('database_connection.php');
//echo "==>".$val;

$sql="select distinct(location) from newlocation123 where City='$val' order by location asc";
				$res=mysql_query($sql);
				echo "<select class='select1' id='username2' style='font-size: 26px;    background-color: #e16c6ca8;' name='location' onchange='showCustomer2(this.value)' id='location' >
				<option value=''>Select Centers</option>";
				while($info=mysql_fetch_array($res))
				{
					echo"<option value='".$info["0"]."'>".$info["0"]."</option>";
				}


echo"</select> </form></small>";

?>
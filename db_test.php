<?php
// $servername = "localhost";
// $username = "planobui_aup";
// $password = "hsaniva2810";
// 
// // Create connection
// $conn = new mysqli($servername, $username, $password);
// 
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
// 
// $res = mysql_query("SHOW DATABASES");
// 
// while ($row = mysql_fetch_assoc($res)) {
//     echo $row['Database'] . "\n";
// }



/* $dbname = 'planobui_pob';
$dbuser = 'planobui_aup';
$dbpass = 'hsaniva2810';
$dbhost = 'localhost'; */

$dbname = 'pob';
$dbuser = 'root';
$dbpass = '';
$dbhost = 'localhost';

ini_set('max_execution_time', 300); //300 seconds = 5 minutes

$connect = mysql_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysql_select_db($dbname) or die("Could not open the db '$dbname'");

/* $test_query = "SHOW DATABASES";
$result = mysql_query($test_query);
$tblCnt = 0;
while($tbl = mysql_fetch_array($result)) {
  $tblCnt++;
  echo $tblCnt. ' ::: '. $tbl[0]."<br />\n";
}

$db_found = mysql_select_db($dbname);

if ($db_found) {

print "Database Found";

}
else {

print "Database NOT Found";

}
if (!$tblCnt) {
  echo "There are no tables<br />\n";
} else {
  echo "There are $tblCnt tables<br />\n";
}
 */
 
function assign_new_names($orig_name){
	$str = $orig_name;
	$str = trim($str);
	$str = strtolower($str);
	$str = str_replace('\\', '/', $str);
	$str = str_replace(' ', '_', $str);
	$str = str_replace('&', 'and', $str);
	$str = preg_replace('/[^a-zA-Z0-9_.\/]/', '_', $str);
	return $str;
}

// Section to alter image paths given in various tables
/*
TABLES
1. oc_ap_professionals - prof_id, image, logo, banner
2. oc_ap_projects - project_id, logo
3. oc_ap_project_photos - photo_id, image
4. oc_banner_image - banner_image_id, image
5. oc_ecbanner_image - ecbanner_image_id, image
6. oc_product - product_id, image
7. oc_product_image - product_image_id, image
*/

/*
//1
$tbl_name = "oc_ap_professionals";
$tbl_id = "prof_id";
$tbl_image = "logo";
$sql = "SELECT $tbl_id, $tbl_image FROM $tbl_name";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)) {
	$sql_update = "UPDATE $tbl_name SET $tbl_image='" . assign_new_names($row[$tbl_image]) . "' WHERE $tbl_id=".$row[$tbl_id];
	echo "<br>".$sql_update;
	$result_update = mysql_query($sql_update);
}
 

$tbl_name = "oc_ap_professionals";
$tbl_id = "prof_id";
$tbl_image = "image";
$sql = "SELECT $tbl_id, $tbl_image FROM $tbl_name";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)) {
	$sql_update = "UPDATE $tbl_name SET $tbl_image='" . assign_new_names($row[$tbl_image]) . "' WHERE $tbl_id=".$row[$tbl_id];
	$result_update = mysql_query($sql_update);
}


$tbl_name = "oc_ap_professionals";
$tbl_id = "prof_id";
$tbl_image = "banner";
$sql = "SELECT $tbl_id, $tbl_image FROM $tbl_name";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)) {
	$sql_update = "UPDATE $tbl_name SET $tbl_image='" . assign_new_names($row[$tbl_image]) . "' WHERE $tbl_id=".$row[$tbl_id];
	$result_update = mysql_query($sql_update);
}
*/

/* 

//2
$tbl_name = "oc_ap_projects";
$tbl_id = "project_id";
$tbl_image = "logo";
$sql = "SELECT $tbl_id, $tbl_image FROM $tbl_name";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)) {
	$sql_update = "UPDATE $tbl_name SET $tbl_image='" . assign_new_names($row[$tbl_image]) . "' WHERE $tbl_id=".$row[$tbl_id];
	$result_update = mysql_query($sql_update);
}
*/


//3
$tbl_name = "oc_ap_project_photos";
$tbl_id = "photo_id";
$tbl_image = "image";
$sql = "SELECT $tbl_id, $tbl_image FROM $tbl_name";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)) {
	$sql_update = "UPDATE $tbl_name SET $tbl_image='" . assign_new_names($row[$tbl_image]) . "' WHERE $tbl_id=".$row[$tbl_id];
	$result_update = mysql_query($sql_update);
}

echo "<br> FINISHED PROJECT PHOTOS";


/*
//4
$tbl_name = "oc_banner_image";
$tbl_id = "banner_image_id";
$tbl_image = "image";
$sql = "SELECT $tbl_id, $tbl_image FROM $tbl_name";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)) {
	$sql_update = "UPDATE $tbl_name SET $tbl_image='" . assign_new_names($row[$tbl_image]) . "' WHERE $tbl_id=".$row[$tbl_id];
	$result_update = mysql_query($sql_update);
}

//5
$tbl_name = "oc_ecbanner_image";
$tbl_id = "ecbanner_image_id";
$tbl_image = "image";
$sql = "SELECT $tbl_id, $tbl_image FROM $tbl_name";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)) {
	$sql_update = "UPDATE $tbl_name SET $tbl_image='" . assign_new_names($row[$tbl_image]) . "' WHERE $tbl_id=".$row[$tbl_id];
	$result_update = mysql_query($sql_update);
}

*/

/*
//6
$tbl_name = "oc_product";
$tbl_id = "product_id";
$tbl_image = "image";
$sql = "SELECT $tbl_id, $tbl_image FROM $tbl_name";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)) {
	$sql_update = "UPDATE $tbl_name SET $tbl_image='" . assign_new_names($row[$tbl_image]) . "' WHERE $tbl_id=".$row[$tbl_id];
	$result_update = mysql_query($sql_update);
}

//7
$tbl_name = "oc_product_image";
$tbl_id = "product_image_id";
$tbl_image = "image";
$sql = "SELECT $tbl_id, $tbl_image FROM $tbl_name";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)) {
	$sql_update = "UPDATE $tbl_name SET $tbl_image='" . assign_new_names($row[$tbl_image]) . "' WHERE $tbl_id=".$row[$tbl_id];
	$result_update = mysql_query($sql_update);
}


*/
/* 
$sql = "SELECT product_image_id, image FROM oc_product_image";
$result = mysql_query($sql);
$row_count = 0;
while ($row = mysql_fetch_array($result)) {
	$row_count++;
	echo "<br>".$row_count." : ". $row['product_image_id'];
	echo "<br>".$row['image'];
	echo "<br>".assign_new_names($row['image']);
	$sql_update = "UPDATE oc_product_image SET image='" . assign_new_names($row['image']) . "' WHERE product_image_id=".$row['product_image_id'];
	echo "<br>".$sql_update;
	$result_update = mysql_query($sql_update);
}
 */
// Section to alter image paths given in various tables

// Section to alter folder and file names
/* function listFolderFiles($dir){
    $ffs = scandir($dir);
    echo '<ol>';
    foreach($ffs as $ff){
        if($ff != '.' && $ff != '..'){
            echo '<li>'.$ff;
            echo '<li>'.assign_new_names($ff);
			$new_name = assign_new_names($ff);
			rename ($dir.'/'.$ff, $dir.'/'.$new_name);
            if(is_dir($dir.'/'.$ff)) listFolderFiles($dir.'/'.$ff);
            echo '</li>';
        }
    }
    echo '</ol>';
}

$dir = getcwd().'\image\catalog';
//$dir = getcwd().'\image\catalog\pOb';
echo "<br>Current Dir: ".$dir;
listFolderFiles($dir);
 */
// Section to alter folder and file names 

 
?> 
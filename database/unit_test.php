<?php 
require("../database/Database.php");
//case 1 Inserting data using valid SQL insert command
$dbObj =  new  Database();
$result= $dbObj->execute("INSERT INTO tbluser(name,email,username,password) VALUES('test','test@yahoo.com','toring12','test123')");
echo "Case 1 RESULT: ".$result;
echo "<br/>";
//case 2 Updating data using valid SQL update command
$result = $dbObj->execute("UPDATE tbluser SET name='Vincent Laser' WHERE id=1");
echo "Case 2 RESULT: ".$result; 
echo "<br/>";
//case 3 Extracting data using valid SQL select command.
$result = $dbObj->execute("SELECT * FROM tbluser");
echo "Case 3 RESULT: ".$result; 
echo "<br/>";
//case 4 Deleting data using valid SQL delete command.
$result = $dbObj->execute("DELETE FROM tbluser WHERE id=1");
echo "Case 4 RESULT: ".$result; 
echo "<br/>";
//case 5 Inserting data using invalid SQL insert command
$dbObj = new Database ();
$result=$dbObj->execute("INSERT INTO tbluser(name,email,username,passwor) VALUES ('Vincent Laser','test@yahoo.com','toring12','test123')");
echo "Case 5 RESULT: ".$result;
echo "<br/>";
//case 6 Updating data using invalid SQL udate command.
$result = $dbObj->execute("UPDAT tbluser SET name='Vincent' WHERE  id=1");
echo "Case 6 RESULT: ".$result;
echo "<br/>";
//case 7 Exracting data using invalid SQL select command.
$result = $dbObj->execute("SELECT FROM tbluser");
echo "Case 7 RESULT: ".$result;
echo "<br/>";
//case 8 Deleting data using valid SQL deleted command.
$result = $dbObj->execute("DELETE * FROM tbluser WHERE id=1");
echo "Case 8 RESULT: ".$result;
echo "<br/>";
?>
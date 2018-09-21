<?php

//function _get($str){
 //   $val = !empty($_GET[$str]) ? $_GET[$str] : null;
//    return $val;
//}
$data = json_decode(file_get_contents('php://input'), true);
$file= $data["file"];
$buildid= $data["build"];
//if(!empty($_POST["file"])){
//	$file = $_POST['file'];
//}
//echo 'empty';
//$buildID=$_POST["build"];
//$buildid=$buildID;
//echo $buildid;
$filename=$file;

$str= $file;
//$str=str_replace('_.html','',$str);
$str=preg_replace('|[0-9]+|','',$str); 
echo "1:".$str;
//$str=chop($str,"_.html"); 
$str=str_replace("_.html","",$str);
echo "2:".$str;

$xmlfile= 'C:\\owncloud\\GraphingTestingReports\\';
$xmlfile =$xmlfile.$filename.".data";
//$xmlfile=$filename;
print_r($xmlfile);
$xmlparser = xml_parser_create();

// open a file and read data
$fp = fopen($xmlfile, 'r');
$xmldata = fread($fp, 4096);
$values;
xml_parse_into_struct($xmlparser,$xmldata,$values);

xml_parser_free($xmlparser);
print_r("<pre>");
print_r($values[1]['attributes']['TOTALSUCCESSTESTCASECOUNT']);
print_r($values[1]['attributes']['TOTALFAILEDTESTCASECOUNT']);
$success=$values[1]['attributes']['TOTALSUCCESSTESTCASECOUNT'];
$failed=$values[1]['attributes']['TOTALFAILEDTESTCASECOUNT'];
$startTime=$values[1]['attributes']['TIMESTAMP'];
$duration=$values[1]['attributes']['ENDTIME'];
$result=$values[1]['attributes']['RESULT']; 
print_r($values);
$filestr="";
$filestr=$filename;
echo $filestr;
$total= ( int )$success+ ( int )$failed;
$successPct= ( int )$success/$total;
echo "cgl=".$sucessPct;
$sqlstr="INSERT INTO report (reportFile,caseName,caseTester,buildID,success,successPct,failed,result,startTime,duration) 

VALUES ('".$filestr."','".$str."','Chelsea','".$buildid."',".$success.",".$successPct.",".$failed.",'".$$result."','".

$startTime."','".$duration."')";
echo "SQL=";
echo $sqlstr;
echo "<br>";
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('C:\GraphingTesting\Sqlite\gta.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }


   $ret = $db->exec($sqlstr);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Records created successfully\n";
      //update

//   $sql1 =<<<EOF
 //     UPDATE report set duration = strftime('%s',duration) - strftime('%s',startTime);
//EOF;
//   $ret1 = $db->exec($sql1);
//   if(!$ret1){
//      echo $db->lastErrorMsg();
//   } else {
 //     echo $db->changes(), " Record updated successfully\n";
//   }

   }
   $db->close();
?>
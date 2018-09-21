<?php

$file = $_GET["file"];


$str= $file;
$str=str_replace('.html.data','',$str); 
echo $str;
$str=preg_replace('|[0-9]+|','',$str); 
echo $str;

$xmlfile = 'C:\\owncloud\\GraphingTestingReports\\'.$file;
print_r($xmlfile);
$xmlparser = xml_parser_create();

// open a file and read data
$fp = fopen($xmlfile, 'r');
$xmldata = fread($fp, 4096);

xml_parse_into_struct($xmlparser,$xmldata,$values);

xml_parser_free($xmlparser);
print_r("<pre>");
print_r($values[1]['attributes']['TOTALSUCCESSTESTCASECOUNT']);
print_r($values[1]['attributes']['TOTALFAILEDTESTCASECOUNT']);
$success=$values[1]['attributes']['TOTALSUCCESSTESTCASECOUNT'];
$failed=$values[1]['attributes']['TOTALFAILEDTESTCASECOUNT'];
print_r($values);
$filestr="";
$filestr=$filestr.$file;
echo $filestr;
$sqlstr="INSERT INTO report (reportFile,caseName,success,failed) VALUES ('".$filestr."','".$str."',".$success.",".$failed.")";
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
   }
   $db->close();



?>
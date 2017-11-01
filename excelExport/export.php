<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 01/11/2017
 * Time: 09:28 AM
 */

require 'php-excel.class.php';
$mydata = array(1 => 'Oliver Schwarz', 'Friedhelm Hasematzel');
$xls = new Excel_XML;
$xls->addWorksheet('My data', $mydata);
$xls->sendWorkbook('mydata.xls');

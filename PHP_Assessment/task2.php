<?php
/**
 * QUESTION: 1. Use this link to get XML data and convert those data in more readable JSON format
 */
   
header('Content-Type: application/json');
//Load xml from url
$xmldata = simplexml_load_file("http://ftp.geoinfo.msl.mt.gov/Documents/Metadata/GIS_Inventory/35524afc-669b-4614-9f44-43506ae21a1d.xml") or die("Failed to load");
//Convert to json
$json = json_encode($xmldata, JSON_PRETTY_PRINT);
echo  $json;

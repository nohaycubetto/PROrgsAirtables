<?php
require 'vendor/autoload.php';
use \TANIOS\Airtable\Airtable;
require 'config.php';
$airtable = new Airtable($airtable_config);

echo "<pre>";
$request = $airtable->getContent( 'PR Organizations' );
do {
    $response = $request->getResponse();
    var_dump( $response[ 'records' ] );
}
while( $request = $response->next() );
//print_r($request);

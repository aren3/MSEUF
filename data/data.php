<?php
// we need this so that PHP does not complain about deprectaed functions
error_reporting( 0 );

// Connect to MySQL
$link = mysql_connect( 'localhost', 'root', '' );
if ( !$link ) {
  die( 'Could not connect: ' . mysql_error() );
}

// Select the data base
$db = mysql_select_db( 'bed', $link );
if ( !$db ) {
  die ( 'Error selecting database \'bed\' : ' . mysql_error() );
}

// Fetch the data
$query = "
 	SELECT CAST(AVG(fquarter ) AS DECIMAL(5,2)) AS 'fquarter',CAST(AVG(squarter ) AS DECIMAL(5,2)) AS 'squarter',CAST(AVG(tquarter ) AS DECIMAL(5,2)) AS 'tquarter',CAST(AVG(ffquarter ) AS DECIMAL(5,2)) AS 'ffquarter'
	FROM grade7secrosal
	
  ";
$result = mysql_query( $query );

// All good?
if ( !$result ) {
  // Nope
  $message  = 'Invalid query: ' . mysql_error() . "\n";
  $message .= 'Whole query: ' . $query;
  die( $message );
}

// Print out rows
$prefix = '';
echo "[\n";
while ( $row = mysql_fetch_assoc( $result ) ) {
  echo $prefix . " {\n";
  echo '  "fquarter": "' . $row['fquarter'] . '",' . "\n";
  echo '  "squarter": "' . $row['squarter'] . '",' . "\n";
  echo '  "tquarter": "' . $row['tquarter'] . '",' . "\n";
  echo '  "ffquarter": "' . $row['ffquarter'] . '",' . "\n";
  echo " }";
  $prefix = ",\n";
}
echo "\n]";

// Close the connection
mysql_close( $link );
?>
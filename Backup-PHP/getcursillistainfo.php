<?php
// Get a connection for the database
require_once('../mysqli_connect.php');

// Create a query for the database
$query = "SELECT FIRST_NAME, MIDDLE_NAME, LAST_NAME, TAG_NAME, 
SPONSOR_NAME, SPOUSE_NAME, PASTOR_NAME, AGE, DATE_OF_BIRTH, EMAIL,
HOME_PHONE, MOBILE_PHONE, WORK_PHONE, STREET, CITY, STATE, ZIP,
PARISH_LIST_ID, TYPE, OCCUPATION FROM CURSILLISTA";

// Get a response from the database by sending the connection
// and the query
$response = @mysqli_query($dbc, $query);

// If the query executed properly proceed
if($response){

echo '<table align="left"
cellspacing="5" cellpadding="8">

<tr><td align="left"><b>ID</b></td>
<td align="left"><b>First Name</b></td>
<td align="left"><b>Middle Name</b></td>
<td align="left"><b>Last Name</b></td>
<td align="left"><b>Tag Name</b></td>
<td align="left"><b>Sponsor Name</b></td>
<td align="left"><b>Spouse Name</b></td>
<td align="left"><b>Pastor Name</b></td>
<td align="left"><b>Age</b></td>
<td align="left"><b>Date of Birth</b></td>
<td align="left"><b>E-mail</b></td>
<td align="left"><b>Home Phone</b></td>
<td align="left"><b>Mobile Phone</b></td>
<td align="left"><b>Work Phone</b></td>
<td align="left"><b>Street</b></td>
<td align="left"><b>City</b></td>
<td align="left"><b>State</b></td>
<td align="left"><b>ZIP Code</b></td>
<td align="left"><b>Parish ID</b></td>
<td align="left"><b>Type</b></td>
<td align="left"><b>Occupation</b></td></tr>';

// mysqli_fetch_array will return a row of data from the query
// until no further data is available
while($row = mysqli_fetch_array($response)){

echo '<tr><td align="left">' . 
$row['ID'] . '</td><td align="left">' .
$row['FIRST_NAME'] . '</td><td align="left">' . 
$row['MIDDLE_NAME'] . '</td><td align="left">' .
$row['LAST_NAME'] . '</td><td align="left">' .
$row['TAG_NAME'] . '</td><td align="left">' .
$row['SPONSOR_NAME'] . '</td><td align="left">' .
$row['SPOUSE_NAME'] . '</td><td align="left">' . 
$row['PASTOR_NAME'] . '</td><td align="left">' .
$row['AGE'] . '</td><td align="left">' .
$row['DATE_OF_BIRTH'] . '</td><td align="left">' .
$row['EMAIL'] . '</td><td align="left">' . 
$row['HOME_PHONE'] . '</td><td align="left">' .
$row['MOBILE_PHONE'] . '</td><td align="left">' .
$row['WORK_PHONE'] . '</td><td align="left">' .
$row['STREET'] . '</td><td align="left">' .
$row['CITY'] . '</td><td .03align="left">' . 
$row['STATE'] . '</td><td align="left">' .
$row['ZIP'] . '</td><td align="left">' . 
$row['PARISH_LIST_ID'] . '</td><td align="left">' . 
$row['TYPE'] . '</td><td align="left">' . 
$row['OCCUPATION'] . '</td><td align="left">';

echo '</tr>';
}

echo '</table>';

} else {

echo "Couldn't issue database query<br />";

echo mysqli_error($dbc);

}

// Close connection to the database
mysqli_close($dbc);

?>
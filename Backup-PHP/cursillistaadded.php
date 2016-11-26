<html>
<head>
<title>Add Cursillista</title>
</head>
<body>
<?php

if(isset($_POST['submit'])){
    
    $data_missing = array();
    
    if(empty($_POST['ID'])){

        // Adds name to array
        $data_missing[] = 'ID';

    } else {

        // Trim white space from the name and store the name
        $id = trim($_POST['ID']);

    }

    if(empty($_POST['FIRST_NAME'])){

        // Adds name to array
        $data_missing[] = 'First Name';

    } else{

        // Trim white space from the name and store the name
        $f_name = trim($_POST['FIRST_NAME']);

    }

    if(empty($_POST['MIDDLE_NAME'])){

        // Adds name to array
        $data_missing[] = 'Middle Name';

    } else {

        // Trim white space from the name and store the name
        $m_name = trim($_POST['MIDDLE_NAME']);

    }

    if(empty($_POST['LAST_NAME'])){

        // Adds name to array
        $data_missing[] = 'Last Name';

    } else {

        // Trim white space from the name and store the name
        $l_name = trim($_POST['LAST_NAME']);

    }

    if(empty($_POST['TAG_NAME'])){

        // Adds name to array
        $data_missing[] = 'Tag Name';

    } else {

        // Trim white space from the name and store the name
        $t_name = trim($_POST['TAG_NAME']);

    }

    if(empty($_POST['SPONSOR_NAME'])){

        // Adds name to array
        $data_missing[] = 'Sponsor Name';

    } else {

        // Trim white space from the name and store the name
        $spon_name = trim($_POST['SPONSOR_NAME']);

    }

    if(empty($_POST['SPOUSE_NAME'])){

        // Adds name to array
        $data_missing[] = 'Spouse Name';

    } else {

        // Trim white space from the name and store the name
        $spou_name = trim($_POST['SPOUSE_NAME']);

    }

    if(empty($_POST['PASTOR_NAME'])){

        // Adds name to array
        $data_missing[] = 'Pastor Name';

    } else {

        // Trim white space from the name and store the name
        $p_name = trim($_POST['PASTOR_NAME']);

    }

    if(empty($_POST['AGE'])){

        // Adds name to array
        $data_missing[] = 'Age';

    } else {

        // Trim white space from the name and store the name
        $age = trim($_POST['AGE']);

    }

    if(empty($_POST['DATE_OF_BIRTH'])){

        // Adds name to array
        $data_missing[] = 'Date of Birth';

    } else {

        // Trim white space from the name and store the name
        $dob = trim($_POST['DATE_OF_BIRTH']);

    }

    if(empty($_POST['EMAIL'])){

        // Adds name to array
        $data_missing[] = 'E-mail';

    } else {

        // Trim white space from the name and store the name
        $email = trim($_POST['EMAIL']);

    }
	
    if(empty($_POST['HOME_PHONE'])){

        // Adds name to array
        $data_missing[] = 'Home Phone';

    } else {

        // Trim white space from the name and store the name
        $h_phone = trim($_POST['HOME_PHONE']);

    }
	
    if(empty($_POST['MOBILE_PHONE'])){

        // Adds name to array
        $data_missing[] = 'Mobile Phone';

    } else {

        // Trim white space from the name and store the name
        $m_phone = trim($_POST['MOBILE_PHONE']);

    }
	
    if(empty($_POST['WORK_PHONE'])){

        // Adds name to array
        $data_missing[] = 'Work Phone';

    } else {

        // Trim white space from the name and store the name
        $w_phone = trim($_POST['WORK_PHONE']);

    }
	
    if(empty($_POST['STREET'])){

        // Adds name to array
        $data_missing[] = 'Street';

    } else {

        // Trim white space from the name and store the name
        $street = trim($_POST['STREET']);

    }
	
    if(empty($_POST['CITY'])){

        // Adds name to array
        $data_missing[] = 'City';

    } else {

        // Trim white space from the name and store the name
        $city = trim($_POST['CITY']);

    }
	
    if(empty($_POST['STATE'])){

        // Adds name to array
        $data_missing[] = 'State';

    } else {

        // Trim white space from the name and store the name
        $state = trim($_POST['STATE']);

    }
	
    if(empty($_POST['ZIP'])){

        // Adds name to array
        $data_missing[] = 'ZIP Code';

    } else {

        // Trim white space from the name and store the name
        $zip = trim($_POST['ZIP']);

    }
	
    if(empty($_POST['PARISH_LIST_ID'])){

        // Adds name to array
        $data_missing[] = 'Parish ID';

    } else {

        // Trim white space from the name and store the name
        $p_id = trim($_POST['PARISH_LIST_ID']);

    }
	
    if(empty($_POST['TYPE'])){

        // Adds name to array
        $data_missing[] = 'Type';

    } else {

        // Trim white space from the name and store the name
        $type = trim($_POST['TYPE']);

    }
	
    if(empty($_POST['OCCUPATION'])){

        // Adds name to array
        $data_missing[] = 'Occupation';

    } else {

        // Trim white space from the name and store the name
        $occ = trim($_POST['OCCUPATION']);

    }
    
    if(empty($data_missing)){
        
        require_once('../mysqli_connect.php');
        
        $query = "INSERT INTO CURSILLISTA (ID, FIRST_NAME, MIDDLE_NAME, LAST_NAME, 
		TAG_NAME, SPONSOR_NAME, SPOUSE_NAME, PASTOR_NAME, AGE, DATE_OF_BIRTH, 
		EMAIL, HOME_PHONE, MOBILE_PHONE, WORK_PHONE, STREET, CITY, STATE, ZIP,
		PARISH_LIST_ID, TYPE, OCCUPATION) VALUES (NULL, ?, ?,
        ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NULL, ?, ?)";
        
        $stmt = mysqli_prepare($dbc, $query);
        
        i Integers
        d Doubles
        b Blobs
        s Everything Else
        
        mysqli_stmt_bind_param($stmt, "ssssssisssd", $id, $f_name,
                               $m_name, $l_name, $t_name, 
							   $spon_name, $spou_name, $p_name, 
                               $age, $dob, $email, $h_phone, $m_phone, 
                               $w_phone, $street, $city, $state,
							   $zip, $p_id, $type, $occ);
        
        mysqli_stmt_execute($stmt);
        
        $affected_rows = mysqli_stmt_affected_rows($stmt);
        
        if($affected_rows == 1){
            
            echo 'Cursillista Entered';
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            
        } else {
            
            echo 'Error Occurred<br />';
            echo mysqli_error();
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            
        }
        
    } else {
        
        echo 'You need to enter the following data<br />';
        
        foreach($data_missing as $missing){
            
            echo "$missing<br />";
            
        }
        
    }
    
}

?>

<form action="http://localhost/cursillistaadded.php" method="post">

<b>Add a New Cursillista</b>

<p>ID:
<input type="text" name="ID" size="30" maxlength="12" value="" />
</p>

<p>First Name:
<input type="text" name="FIRST_NAME" size="30" maxlength="30" value="" />
</p>

<p>Middle Name:
<input type="text" name="MIDDLE_NAME" size="30" maxlength="30" value="" />
</p>

<p>Last Name:
<input type="text" name="LAST_NAME" size="30" maxlength="30" value="" />
</p>

<p>Tag Name:
<input type="text" name="TAG_NAME" size="30" maxlength="30" value="" />
</p>

<p>Sponsor Name:
<input type="text" name="SPONSOR_NAME" size="30" maxlength="30" value="" />
</p>

<p>Spouse Name:
<input type="text" name="SPOUSE_NAME" size="30" maxlength="30" value="" />
</p>

<p>Pastor Name:
<input type="text" name="PASTOR_NAME" size="30" maxlength="30" value="" />
</p>

<p>Age:
<input type="text" name="AGE" size="30" maxlength="3" value="" />
</p>

<p>Date of Birth (YYYY-MM-DD):
<input type="text" name="DATE_OF_BIRTH" size="30" value="" />
</p>

<p>E-mail:
<input type="text" name="EMAIL" size="30" maxlength="30" value="" />
</p>

<p>Home Phone:
<input type="text" name="HOME_PHONE" size="30" maxlength="10" value="" />
</p>

<p>Mobile Phone:
<input type="text" name="MOBILE_PHONE" size="30" maxlength="10" value="" />
</p>

<p>Work Phone:
<input type="text" name="WORK_PHONE" size="30" maxlength="10" value="" />
</p>

<p>Street:
<input type="text" name="STREET" size="30" maxlength="30" value="" />
</p>

<p>City:
<input type="text" name="CITY" size="30" maxlength="30" value="" />
</p>

<p>State:
<input type="text" name="STATE" size="30" maxlength="30" value="" />
</p>

<p>ZIP Code:
<input type="text" name="ZIP" size="30" maxlength="5" value="" />
</p>

<p>Parish ID:
<input type="text" name="PARISH_LIST_ID" size="30" maxlength="8" value="" />
</p>

<p>Type:
<input type="text" name="TYPE" size="30" maxlength="30" value="" />
</p>

<p>Occupation:
<input type="text" name="OCCUPATION" size="30" maxlength="30" value="" />
</p>

<p>
<input type="submit" name="submit" value="Send" />
</p>

</form>
</body>
</html>
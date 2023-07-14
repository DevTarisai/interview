<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Zimttech Interview</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link href="style/style.css" rel="stylesheet" type="text/css" media="screen">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,300italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script>
   $(document).ready(function(){
	   $(window).bind('scroll', function() {
	   var navHeight = 600 - 70;
			 if ($(window).scrollTop() > navHeight) {
				 $('nav').addClass('fixed');
			 }
			 else {
				 $('nav').removeClass('fixed');
			 }
		});
	});
</script>
</head>

<body>
<?php include ('include/header.php');?>



<div class="patient-infogap"></div>
<div class="ehrinputnamebg">
<!-------------<span class="ehrinputname"><input type="text" class="ehrinput" placeholder="First Name" /></span>
        		<span class="ehrinputname2"><input type="text" class="ehrinput" placeholder="Last Name" /></span>----------->
                
                
		<span class="patient-inspan">Emergency Contact Person</span>
                
      
        <form action="emergency_contact_person_script.php" method="post" > 
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          
           <tr>
            <td><h6>Patient ID</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Patient ID " name="patient_id" /></td>
          </tr>

          <tr>
            <td><h6>Emergency Contact Person Name:</h6></td>
            <td><span class="ehrinputname"><input type="text" class="ehrinput" placeholder="First Name" name="emergency_contact_person_fname"  /></span>
        		<span class="ehrinputname2"><input type="text" class="ehrinput" placeholder="Last Name" name="emergency_contact_person_lname" /></span></td>
          </tr>
          <tr>
            <td><h6>Emergency Contact Person Relationship:</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Emergency Contact Person Relationship" name="emergency_contact_person_relationship" /></td>
          </tr>

          <tr>
            <td><h6>Emergency Contact Person Address Type:</h6></td>
           
            <td><select class="ehrinput4" name="emergency_contact_person_address_type">
                <option>Current Address</option>
                    <option>Permanent Address</option>
                 </select>
               </td>

          </tr>

          <tr>
            <td><h6>Emergency Contact Person Address Line 1:</h6></td>
            <td><textarea class="ehrinput3" placeholder="Emergency Contact Person Address Line 1" name="emergency_contact_person_address_line1"  /></textarea></td>
          </tr>
          <tr>
            <td><h6>Emergency Contact Person Address Line 2:</h6></td>
            <td><textarea class="ehrinput3" placeholder="Emergency Contact Person Address Line 2" name="emergency_contact_person_address_line2"  /></textarea></td>
          </tr>
          <tr>
            <td><h6>Emergency Contact Person City / Town:</h6></td>
            <td><textarea class="ehrinput3" placeholder="Contact Person City/Town/Village/ Police" name="emergency_contact_person_city"  /></textarea></td>
          </tr>
          
          <tr>
            <td><h6>Emergency 
Contact Person 
Province:</h6></td>
            <td><select class="ehrinput4" name="emergency_contact_person_district" >
            <option>Bulawayo</option>
                    <option>Harare</option>
                    <option>Mashonaland central</option>
                    <option>Mashonaland East</option>
                    <option>Mashonaland West</option>
                    <option>Manicaland</option>
                    <option>Masvingo</option>
                    <option>Matebeleland North</option>
                    <option>Matebeleland South</option>
                    <option>Midlands</option>
                    
            </select></td>
          </tr>
          <tr>
            <td><h6>Emergency Contact Person Province:</h6></td>
            <td><select class="ehrinput4" name="emergency_contact_person_state" >
            <option>Bulawayo</option>
                    <option>Harare</option>
                    <option>Mashonaland central</option>
                    <option>Mashonaland East</option>
                    <option>Mashonaland West</option>
                    <option>Manicaland</option>
                    <option>Masvingo</option>
                    <option>Matebeleland North</option>
                    <option>Matebeleland South</option>
                    <option>Midlands</option>

                 </select></td>
          </tr>
          <tr>
            <td><h6>Emergency Contact Person Pin Code:</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Emergency Contact Person Pin Code" name="emergency_contact_person_pin_code"  /></td>
          </tr>
          <tr>
            <td><h6>Emergency Contact Person Country Code:</h6></td>
            <td><select class="ehrinput4" name="emergency_contact_person_country_code" >
            		<option>+263</option>
                    <option>+27</option>
                    <option>+260</option>
                 </select></td>
          </tr>
          

          <tr>
            <td><h6>Emergency Contact Person Phone Type</h6></td>
            <td><select class="ehrinput4" name="emergency_contact_person_phone_type" >
                <option>Landline</option>
                    <option>Mobile</option>
                    
                 </select></td>
          </tr>

          <tr>
            <td><h6>Emergency Contact Person Phone Number</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Emergency Contact Person Phone Number" name="emergency_contact_person_phone_number"  /></td>
          </tr>
          <tr>
            <td><h6>Emergency Person Email ID</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Emergency Person Email ID" name="emergency_contact_person_email_id" /></td>
          </tr>
          
      <tr>
            <td></td>
            <td><input type="submit" class="footerbutt" value="Submit" /><br><br>
            </td>
          </tr>
          
        </table>
        <form>
        
        
</div>
<?php include ('include/footer.php');?>


</body>
</html>

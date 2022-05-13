<?php 
  
  include ('include/header.php');
  if(isset($_POST['submit'])) //to check if user has submit the form
  {
      if(isset($_POST['term'])==true){ //whether check box is checked

	if(isset($_POST['name'])  &&  !empty($_POST['name'])){ //name field should not be empty

    if(preg_match('/^[A-Za-z\s]+$/', $_POST['name'])){ //pattern of name should be correct

	//preg_match is a function that takes twom agrguments one is a pattern and othr a string
	//it will match the pattern with the provided string 
$name=$_POST['name'];
}
else{
//nameerror
	$nameError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
	Only upper and lower case and space allowed
	 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';


}

	}

	else{
//nameerror

		$nameError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
		Please fill the field.
		 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	   </div>';

	}

 //check if gender field empty
	if(isset($_POST['gender'])  &&  !empty($_POST['gender'])){

		$gender=$_POST['gender'];
		
		}
		
			
		
			else{
		
//gender error
				$genderError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Please select your gender.
				 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			   </div>';

			}
			//dateof birth check


			if(isset($_POST['dob'])  &&  !empty($_POST['dob'])){

				$dob=$_POST['dob'];
				
				}
				
					else{
				//dob error
				
						$dobError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Please enter your Date of Birth.
						 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					   </div>';
		
					}


					//city error check


					

					if(isset($_POST['city'])  &&  !empty($_POST['city'])){ //name field should not be empty

						if(preg_match('/^[A-Za-z\s]+$/', $_POST['city'])){ //pattern of name should be correct
						$city=$_POST['city'];
						}
						
						else{
						
						//cityerror
							$cityError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
							Only upper and lower case and space allowed
							 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						   </div>';
						
						
						}
						
							}
						
							else{
						//cityError
						
								$cityError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
								Please fill the city field.
								 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							   </div>';
						
							}
						
			
							// password check
							if(isset($_POST['password'])  &&  !empty($_POST['password'])  && isset($_POST['c_password'])  &&  !empty($_POST['c_password']) ){


								if(strlen($_POST['password'])>=6){


									//if(preg_match('/^[A-Za-z\s]+$+@+%+*/', $_POST['password']))
									//{



										//checking confirm password

										if($_POST['password']==$_POST['c_password']){

											$password=$_POST['password'];
										}


										else
										{


											
										$cpassworderror='<div class="alert alert-danger alert-dismissible fade show" role="alert">
										Password are not matching.
										 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
									   </div>';
										}

									//}


									//else
									//{

									//	$passworderror='<div class="alert alert-danger alert-dismissible fade show" role="alert">
	///Password should contain uppercase lowecase and special characters.
	// <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   //</div>';

									//}

								}

								else{

									$passworderror='<div class="alert alert-danger alert-dismissible fade show" role="alert">
	Password should be of minimum 6 characters.
	 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';

								}


							}
else{

	$passworderror='<div class="alert alert-danger alert-dismissible fade show" role="alert">
	Please enter password field.
	 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';


}

				//blood group check
				
				

if(isset($_POST['blood_group'])  &&  !empty($_POST['blood_group'])){

				$blood_group=$_POST['blood_group'];
				
				}
				
					
				
					else{
				//blood group error
				
						$blood_groupError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Please select your blood group.
						 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					   </div>';
		
					}



					//contact no check



if(isset($_POST['contact_no'])  &&  !empty($_POST['contact_no'])){

	if(preg_match('/\d{10}/', $_POST['contact_no']))

	{
		$contact=$_POST['contact_no'];
	}
			
	

	else{
		$contact_noError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Contact should consist of 10 digits.
						 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					   </div>';
	}
				}
				
					
				
					else{
				//contact number error
				
						$contact_noError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Please provide your contact number.
						 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					   </div>';
		
					}

//email id check


if(isset($_POST['email'])  &&  !empty($_POST['email'])){
$pattern='/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z0-9]+)*(\.[a-z]{2,3})$/';
	if(preg_match($pattern, $_POST['email']))
//check if email is of valid pattern
	{

		//check if email already existt

		$check_id=$_POST['email'];

		$sql="SELECT email FROM blooddonation WHERE email= '$check_id' ";


		$result=mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)>0)
		{

			$emailError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Email already exists .
						 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					   </div>';
			
		}
		else{
		$email=$_POST['email'];
	}
}
	

	else{
		$emailError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Please enter valid  email id .
						 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					   </div>';
	}
				}
				
					
				
					else{
				//mail id error
				
						$emailError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Please provide your email id.
						 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					   </div>';
		
					}

///insert data into database
//check   whether useer have given all valid inputs and the variable stores the value given by the user

if(isset($name) && isset($gender) && isset($dob) && isset($city) && isset($password)&&isset($email)&&isset($contact) && isset($blood_group))
{

$sql="INSERT INTO blooddonor (name,email,gender,city,dob,contact_no,bloodgroup,date,password) VALUES('$name','$email','$gender','$city','$dob','$contact','$blood_group','0','$password')";


//executing this query
if(mysqli_query($conn,$sql)) //if query execute successfully
{
	$submitsuccessfully='<div class="alert alert-success alert-dismissible fade show" role="alert">
	You have registered successfully.
	 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';

}

else{
	$submiterror='<div class="alert alert-danger alert-dismissible fade show" role="alert">
	oopss!! Something went wrong
	 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';

}



}


	
}

//checkbox error

else{

	 $errorr='<div class="alert alert-danger alert-dismissible fade show" role="alert">
	Please agree to our terms and conditions.
	 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';

}




  }
?>

<style>
.navbar-brand, .nav-link {
  color: #e74c3c !important;
}


nav{
font-family: 'Roboto', sans-serif;
font-weight: 600;
}
.size{
		min-height: 0px;
		padding: 60px 0 40px 0;
		
	}
	
	.form-container{
		background-color: white;
		border: 2px solid #eee;
		border-radius: 5px;
		padding: 20px 10px 20px 30px;
		
	}

	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}

</style>

<div class="container size">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">   
					<h3>Register Here To Donate Blood</h3>
					<?php
					//checkbox error display

					if(isset($errorr)) echo $errorr;

					//submit successfully message
					if(isset($submitsuccessfully)) echo $submitsuccessfully;

					//submit error print

					if(isset($submiterror)) echo $submiterror;



?>
					

				<form class="form-group" action="" method="post" novalidate="">
					<div class="form-group">
						<label for="fullname">Full Name</label>
						<input type="text" name="name" id="fullname" placeholder="Enter your name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control" required>
					</div>
					<?php

					//name rrror display
					if(isset($nameError)) echo $nameError;

					?>

					<div class="form-group">
						<label for="fullname">Email</label>
						<input type="text" name="email" id="email" placeholder=" Enter your Email id" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control" required>
					</div>

					<?php
					if(isset($emailError)) echo $emailError;
?>
					<div class="form-group">
              <label for="contact_no">Contact No</label>
              <input type="text" name="contact_no" value="" placeholder="Enter your phone number" class="form-control" required pattern="^\d{10}$" title="11 numeric characters only" maxlength="11"  required>
            </div>

<?php

//printing contact error display
if(isset($contact_noError)) echo $contact_noError;

?>

			<div class="form-group">
				              <label for="gender">Gender</label><br>
				              		Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px;" checked>
				              		Fe-male<input type="radio" name="gender" id="gender" value="Fe-male" style="margin-left:10px;">
				    </div>

					<?php

					//printing gender error display
					if(isset($genderError)) echo $genderError;

					?>

					<div class="form-group">
              <label for="name">Blood Group</label><br>
              <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                <option value="">Select your blood group</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O+</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
              </select>
            </div> 
			<?php
			//display blood grp error

			if(isset($blood_groupError)) echo $blood_groupError;

			?>

<div class="form-group">
              <label for="dob">Date of Birth</label>
              <input type="date" name="dob"  placeholder="DOB" class="form-control" >
</div>
<?php
//dob error display


if(isset($dobError)) echo $dobError;
?>




					<div class="form-group">
              <label for="city">City</label>
              <select name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select --</option><optgroup title="Azad Jammu and Kashmir (Azad Kashmir)" label="&raquo; Azad Jammu and Kashmir (Azad Kashmir)"></optgroup><option value="Bagh" >Bagh</option><option value="Bhimber" >Bhimber</option><option value="Kotli" >Kotli</option><option value="Mirpur" >Mirpur</option><option value="Muzaffarabad" >Muzaffarabad</option><option value="Neelum" >Neelum</option><option value="Poonch" >Poonch</option><option value="Sudhnati" >Sudhnati</option><optgroup title="Balochistan" label="&raquo; Balochistan"></optgroup><option value="Awaran" >Awaran</option><option value="Barkhan" >Barkhan</option><option value="Bolan" >Bolan</option><option value="Chagai" >Chagai</option><option value="Dera Bugti" >Dera Bugti</option><option value="Gwadar" >Gwadar</option><option value="Jafarabad" >Jafarabad</option><option value="Jhal Magsi" >Jhal Magsi</option><option value="Kalat" >Kalat</option><option value="Kech" >Kech</option><option value="Kharan" >Kharan</option><option value="Khuzdar" >Khuzdar</option><option value="Kohlu" >Kohlu</option><option value="Lasbela" >Lasbela</option><option value="Loralai" >Loralai</option><option value="Mastung" >Mastung</option><option value="Musakhel" >Musakhel</option><option value="Naseerabad" >Naseerabad</option><option value="Nushki" >Nushki</option><option value="Panjgur" >Panjgur</option><option value="Pishin" >Pishin</option><option value="Qilla Abdullah" >Qilla Abdullah</option><option value="Qilla Saifullah" >Qilla Saifullah</option><option value="Quetta" >Quetta</option><option value="Sibi" >Sibi</option><option value="Zhob" >Zhob</option><option value="Ziarat" >Ziarat</option><optgroup title="Federally Administered Tribal Areas (FATA" label="&raquo; Federally Administered Tribal Areas (FATA"></optgroup><option value="Bajaur Agency" >Bajaur Agency</option><option value="Khyber Agency" >Khyber Agency</option><option value="Kurram Agency" >Kurram Agency</option><option value="Mohmand Agency" >Mohmand Agency</option><option value="North Waziristan Agency" >North Waziristan Agency</option><option value="Orakzai Agency" >Orakzai Agency</option><option value="South Waziristan Agency" >South Waziristan Agency</option><optgroup title="Islamabad Capital" label="&raquo; Islamabad Capital"></optgroup><option value="Islamabad" >Islamabad</option><optgroup title="North-West Frontier Province (NWFP)" label="&raquo; North-West Frontier Province (NWFP)"></optgroup><option value="Abbottabad" >Abbottabad</option><option value="Bannu" >Bannu</option><option value="Batagram" >Batagram</option><option value="Buner" >Buner</option><option value="Charsadda" >Charsadda</option><option value="Chitral" >Chitral</option><option value="Dera Ismail Khan" >Dera Ismail Khan</option><option value="Dir Lower" >Dir Lower</option><option value="Dir Upper" >Dir Upper</option><option value="Hangu" >Hangu</option><option value="Haripur" >Haripur</option><option value="Karak" >Karak</option><option value="Kohat" >Kohat</option><option value="Kohistan" >Kohistan</option><option value="Lakki Marwat" >Lakki Marwat</option><option value="Malakand" >Malakand</option><option value="Mansehra" >Mansehra</option><option value="Mardan" >Mardan</option><option value="Nowshera" >Nowshera</option><option value="Peshawar" >Peshawar</option><option value="Shangla" >Shangla</option><option value="Swabi" >Swabi</option><option value="Swat" >Swat</option><option value="Tank" >Tank</option><optgroup title="Punjab" label="&raquo; Punjab"></optgroup><option value="Alipur" >Alipur</option><option value="Attock" >Attock</option><option value="Bahawalnagar" >Bahawalnagar</option><option value="Bahawalpur" >Bahawalpur</option><option value="Bhakkar" >Bhakkar</option><option value="Chakwal" >Chakwal</option><option value="Chiniot" >Chiniot</option><option value="Dera Ghazi Khan" >Dera Ghazi Khan</option><option value="Faisalabad" >Faisalabad</option><option value="Gujranwala" >Gujranwala</option><option value="Gujrat" >Gujrat</option><option value="Hafizabad" >Hafizabad</option><option value="Jhang" >Jhang</option><option value="Jhelum" >Jhelum</option><option value="Kasur" >Kasur</option><option value="Khanewal" >Khanewal</option><option value="Khushab" >Khushab</option><option value="Lahore" >Lahore</option><option value="Layyah" >Layyah</option><option value="Lodhran" >Lodhran</option><option value="Mandi Bahauddin" >Mandi Bahauddin</option><option value="Mianwali" >Mianwali</option><option value="Multan" >Multan</option><option value="Muzaffargarh" >Muzaffargarh</option><option value="Nankana Sahib" >Nankana Sahib</option><option value="Narowal" >Narowal</option><option value="Okara" >Okara</option><option value="Pakpattan" >Pakpattan</option><option value="Rahim Yar Khan" >Rahim Yar Khan</option><option value="Rajanpur" >Rajanpur</option><option value="Rawalpindi" >Rawalpindi</option><option value="Sahiwal" >Sahiwal</option><option value="Sargodha" >Sargodha</option><option value="Sheikhupura" >Sheikhupura</option><option value="Shekhupura" >Shekhupura</option><option value="Sialkot" >Sialkot</option><option value="Toba Tek Singh" >Toba Tek Singh</option><option value="Vehari" >Vehari</option><optgroup title="Sindh" label="&raquo; Sindh"></optgroup><option value="Badin" >Badin</option><option value="Dadu" >Dadu</option><option value="Ghotki" >Ghotki</option><option value="Hyderabad" >Hyderabad</option><option value="Jacobabad" >Jacobabad</option><option value="Jamshoro" >Jamshoro</option><option value="Karachi" >Karachi</option><option value="Kashmore" >Kashmore</option><option value="Khairpur" >Khairpur</option><option value="Larkana" >Larkana</option><option value="Matiari" >Matiari</option><option value="Mirpur Khas" >Mirpur Khas</option><option value="Naushahro Feroze" >Naushahro Feroze</option><option value="Nawabshah" >Nawabshah</option><option value="Qambar Shahdadkot" >Qambar Shahdadkot</option><option value="Sanghar" >Sanghar</option><option value="Shikarpur" >Shikarpur</option><option value="Sukkur" >Sukkur</option><option value="Tando Allahyar" >Tando Allahyar</option><option value="Tando Muhammad Khan" >Tando Muhammad Khan</option><option value="Tharparkar" >Tharparkar</option><option value="Thatta" >Thatta</option><option value="Umerkot" >Umerkot</option></select>
            </div>

			<?php
//city error display

if(isset($cityError)) echo $cityError;
			?>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" value="" placeholder="Password" class="form-control" required pattern="{6,}">
            </div>
			<?php
			//password error display
			if(isset($passworderror)) echo $passworderror;



?>
            <div class="form-group">
              <label for="password">Confirm Password</label>
              <input type="password" name="c_password" value="" placeholder="Confirm Password" class="form-control" required pattern="{6,}">
            </div>
			<?php
// display confirm password error

if(isset($cpassworderror)) echo $cpassworderror;

?>

            <div class="form-inline">
              <input type="checkbox" name="term"  required style="margin-left:10px;">
              <span style="margin-left:10px;"><b>I  agree to donate my blood and the above provided information is true</b></span>
            </div>
			
					<div class="form-group">
						<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">SignUp</button>
					</div>
				</form>
		</div>
	</div>
</div>
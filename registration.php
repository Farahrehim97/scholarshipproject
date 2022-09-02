<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  
</head>
<body >
    <div>
    	<?php
    	include("dbconnect.php");
    	if(isset($_POST['register']))
    	{
    		$name=$_POST["fullname"];
    		$rollno=$_POST["rollno"];
    		$dob=$_POST["dob"];
    		$email=$_POST["email"];
    		$mobile=$_POST["mobile"];
    		$gender=$_POST["gender"];
    		$category=$_POST["category"];
    		$hosteller=$_POST["hosteller"];
    		$sem=$_POST["sem"];
    		$branch=$_POST["branch"];
    		$batch=$_POST["batch"];
    		$yoa=$_POST["yoa"];
    		$hosteladd=$_POST["hosteladd"];
    		$address=$_POST["address"];
    		$instituteadd=$_POST["instituteadd"];
    		$enscore=$_POST["enscore"];
    		$entry=$_POST["entry"];
    		$backpaper=$_POST["backpaper"];
    		$gpa=$_POST["gpa"];
    		$bloan=$_POST["bloan"];
    		$otherscholar=$_POST["otherscholar"];
    		$semfee=$_POST["semfee"];
    		$examfee=$_POST["examfee"];
    		$hostelfee=$_POST["hostelfee"];
    		$stationaryfee=$_POST["stationaryfee"];
    		$otherdetails=$_POST["otherdetails"];
    		$otherfee=$_POST["otherfee"];
    		$fname=$_POST["fname"];
    		$fage=$_POST["fage"];
    		$fsal=$_POST["fsal"];
    		$mname=$_POST["mname"];
    		$mage=$_POST["mage"];
    		$msal=$_POST["msal"];
    		$s1name=$_POST["s1name"];
    		$s1age=$_POST["s1age"];
    		$s1sal=$_POST["s1sal"];
    		$s2name=$_POST["s2name"];
    		$s2age=$_POST["s2age"];
    		$s2sal=$_POST["s2sal"];
    		$studid=$yoa . $branch . $sem . $batch . $rollno;
    		$sql="INSERT INTO registration_details(fullname,studid,rollno,dob,email,mobile,gender,category,yoa,semester,branch,batch,hosteller,address,hosteladd,instituteadd,entrancerank,entrancetry,backpaper,gpa,fathername,fatherage,fatherincome,mothername,motherage,motherincome,sibling1name,sibling1age,sibling1income,sibling2name,sibling2age,sibling2income,bankreceipt,otherscholarship,semfee,hostelfee,examfee,stationaryfee,otherfeedetails,otherfee,selected)VALUES('$name','$studid',$rollno,$dob,'$email','$mobile','$gender','$category',$yoa,$sem,'$branch','$batch','$hosteller','$address','$hosteladd','$instituteadd',$enscore,$entry,$backpaper,$gpa,'$fname',$fage,$fsal,'$mname',$mage,$msal,'$s1name',$s1age,$s1sal,'$s2name',$s2age,$s2sal,'$bloan','$otherscholar',$semfee,$hostelfee,$examfee,$stationaryfee,'$otherdetails',$otherfee,'notsel')";
    		if(mysqli_query($conn,$sql))
            //$sql1="update registration_details set "
				echo "Sucessfull";
			else
				echo "Unsucessfull";

			mysqli_close($conn);
    	}
    	?>
    </div>
    <div class="container">
        <header>Registration</header>
        
        <form action="registration.php" method="post" name="register">
            <div class="form first">
                <div class="details personal">
                    <span class="title"> </span>
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" name="fullname" placeholder="Enter your name" required>
                        </div>
                        <div class="input-field">
                            <label>Roll no</label>
                            <input type="text" name="rollno" placeholder="Enter your name" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" name="dob" placeholder="Enter birth date" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Enter your email" required >
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" name="mobile" placeholder="Enter mobile number" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select required name="gender">
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Category</label>
                            <select required name="category">
                                <option disabled selected>Select category</option>
                                <option>General</option>
                                <option>SC/ST</option>
                                <option>OBC</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Hosteller</label>
                            <select required name="hosteller">
                                <option disabled selected>Select option</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Semester</label>
                            <select required name="sem">
                                <option disabled selected>Select semester</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Branch</label>
                            <select required name="branch">
                                <option disabled selected>Select branch</option>
                                <option>CS</option>
                                <option>ME</option>
                                <option>CE</option>
                                <option>E</option>
                                <option>EEE</option>
                                <option>MCA</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Batch</label>
                            <select required name="batch">
                                <option disabled selected>Select batch</option>
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Year Of Admission</label>
                            <input type="number"  name="yoa" placeholder="Enter admission year" required >
                        </div>
                        <div class="input-field">
                            <label>Hostel Address</label>
                            <input type="text" name="hosteladd" placeholder="Enter your hostel address" required>
                        </div>
                        <div class="input-field">
                            <label>Permanent Address</label>
                            <input type="text" name="address" placeholder="Enter your address" required>
                        </div>
                        <div class="input-field">
                            <label>Institute Address</label>
                            <input type="text"  name="instituteadd" placeholder="Enter your institute address" required >
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Academic Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Kerala Entrance Score</label>
                            <input type="text" name="enscore" placeholder="Enter score" required >
                        </div>

                        <div class="input-field">
                            <label>Entrance Try</label>
                            <select required name="entry">
                                <option disabled selected>Select entrance try</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Back Papers</label>
                            <input type="number" name="backpaper" placeholder="Enter no of back papers" required  >
                        </div>
                        <div class="input-field">
                            <label>GPA</label>
                            <input type="number" name="gpa" placeholder="Enter gpa"required >
                        </div>
                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>

            <div class="form second">
                <div class="details address">
                    <span class="title">Fee Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Bank Loan Receipt</label>
                            <select required  name="bloan">
                                <option disabled selected>Select option</option>
                                <option>yes</option>
                                <option>no</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Other Scholarship Receipt</label>
                            <select required  name="otherscholar">
                                <option disabled selected>Select option</option>
                                <option>yes</option>
                                <option>no</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Semester Fees/Year</label>
                            <input type="number" name="semfee" placeholder="Enter your sem fees" required  >
                        </div>

                        <div class="input-field">
                            <label>Exam Fees/Year</label>
                            <input type="number" name="examfee" placeholder="Enter your exam fees" required  >
                        </div>

                        <div class="input-field">
                            <label>stationary Fees/Year</label>
                            <input type="number" name="stationaryfee" placeholder="Enter stationary fee" required  >
                        </div>
                          <div class="input-field">
                            <label>Hostel Fees/Year</label>
                            <input type="number" name="hostelfee" placeholder="Enter hostel fee" required >
                        </div>
                        <div class="input-field">
                            <label>Other fee details</label>
                            <input type="text" name="otherdetails" placeholder="Enter fee detail" required >
                        </div>
                        <div class="input-field">
                            <label>Other Fees/Year</label>
                            <input type="number"  name="otherfee" placeholder="Enter other fee" required  >
                        </div>

                      
                    </div>
                </div>

                <div class="details family">
                    <span class="title">Family Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Father Name</label>
                            <input type="text" name="fname" placeholder="Enter father name" required >
                        </div>

                        <div class="input-field">
                            <label>Father age</label>
                            <input type="number" name="fage" placeholder="Enter father age" required  >
                        </div>

                        <div class="input-field">
                            <label>Father salary</label>
                            <input type="number" name="fsal" placeholder="Enter father salary" required >
                        </div>

                        <div class="input-field">
                            <label>Mother Name</label>
                            <input type="text" name="mname" placeholder="Enter mother name" required >
                        </div>

                        <div class="input-field">
                            <label>Mother age</label>
                            <input type="number" name="mage" placeholder="Enter mother age" required >
                        </div>

                        <div class="input-field">
                            <label>Mother salary</label>
                            <input type="number" name="msal" placeholder="Enter mother salary" required >
                        </div>
                        <div class="input-field">
                            <label>1st sibling Name</label>
                            <input type="text" name="s1name" placeholder="Enter sibling1 name" required >
                        </div>

                        <div class="input-field">
                            <label>1st sibling age</label>
                            <input type="number" name="s1age" placeholder="Enter sibling1 age" required >
                        </div>

                        <div class="input-field">
                            <label>1st sibling salary</label>
                            <input type="number" name="s1sal" placeholder="Enter sibling1 salary" required >
                        </div>
                        <div class="input-field">
                            <label>2nd sibling2 Name</label>
                            <input type="text" name="s2name" placeholder="Enter sibling2 name" required >
                        </div>

                        <div class="input-field">
                            <label>2nd sibling2 age</label>
                            <input type="number" name="s2age" placeholder="Enter sibling2 age" required >
                        </div>

                        <div class="input-field">
                            <label>2nd sibling salary</label>
                            <input type="number" name="s2sal" placeholder="Enter sibling2 salary" required >
                        </div>
                        
                        
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                        
                        <button class="sumbit" name="register">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
<?php

?>

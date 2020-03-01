<?php
session_start();
if(isset($_GET["p"]))
{
    $page=@$_GET["p"];
    if($page=="home")
    {
        $main_content="pages/home.php";
    }
    elseif($page=="register")
    {
        $main_content="pages/register.php";    
    }
    elseif($page=="communicabledisease")
    {
        $main_content="pages/communicabledisease.php";    
    }
    elseif($page=="noncommunicabledisease")
    {
        $main_content="pages/noncommunicabledisease.php";    
    }
    elseif($page=="Alogin")
    {
        $main_content="pages/Adminlogin.php";   
    }
    elseif($page=="Dlogin")
    {
        $main_content="pages/Doctorlogin.php";   
    }
    elseif($page=="Plogin")
    {
        $main_content="pages/Patientlogin.php";   
    }
	 elseif($page=="logout" && isset($_SESSION["username"]))
    {
        $main_content="pages/logout.php";    
    }
	 elseif($page=="news")
    {
        $main_content="pages/news.php";    
    }
    ///////LINK FOR COMMUNICABLE DISEASE//////////////////
    
     elseif($page=="malaria")
    {
        $main_content="pages/communicabledisease.php";     
    }
    elseif($page=="kipindupindu")
    {
        $main_content="commdisease/kipindupindu.php";  
    }
    elseif($page=="ukimwi")
    {
        $main_content="commdisease/ukimwi.php";    
    }
    ////////LINK FOR NON COMMUNICABLE DISEASE/////////////
    
    elseif($page=="cancer")
    {
        $main_content="pages/noncommunicabledisease.php";    
    }
    elseif($page=="pressure")
    {
        $main_content="noncommdisease/pressure.php";  
    }
    elseif($page=="pumu")
    {
        $main_content="noncommdisease/pumu.php"; 
    }
    elseif($page=="urcers")
    {
        $main_content="noncommdisease/urcers.php"; 
    }
		
	///////////UPLOADING NEWS AND UPDATES/////////////////	
	 elseif($page=="uploadnews")
    {
       $title=$_POST["title"]; 
       $date=$_POST["date"]; 
       $news=$_POST["description"];
       $aid=$_POST["aid"];
 
	   
	   $sql="insert into news values('','". $title."','".$date."','".$news."','".$aid."')";
	   $result=mysqli_query($connect,$sql);
	   if($result)
	   {
		   header("location: index.php?p=adminPage");
	   }
	   else
	   {
		   print"<script>alert('transfer failed');location.href='index.php?p=adminPage';</script>";
	   }
    }
    
    ///////////UPLOADING DISEASE PDF/////////////////	

	 elseif($page=="pdfupload")
    {
        
                if(isset($_POST['btn-upload']))
                {    
                  $row;
                  $folder ="uploads/";
                  $ugonjwa =$_POST['title'];
                  $kichwa =$_POST['heading'];   
                  $dalilifile =$_FILES['symptoms'];
                  $visababishifile =$_FILES['causes'];
                  $atharifile =$_FILES['effects'];
                  $kingafile =$_FILES['prevention'];
                  $tibafile =$_FILES['treatment'];
                  $category =$_POST['category'];
                  

                  if(($dalilifile['type'] && $visababishifile['type'] && $atharifile['type'] && $kingafile['type'] && $tibafile['type'] == 'image/gif')
                || ($dalilifile['type'] && $visababishifile['type'] && $atharifile['type'] && $kingafile['type'] && $tibafile['type'] == 'image/jpeg')
                || ($dalilifile['type'] && $visababishifile['type'] && $atharifile['type'] && $kingafile['type'] && $tibafile['type'] == 'image/png')
                || ($dalilifile['type'] && $visababishifile['type'] && $atharifile['type'] && $kingafile['type'] && $tibafile['type'] == 'application/msword')
                || ($dalilifile['type'] && $visababishifile['type'] && $atharifile['type'] && $kingafile['type'] && $tibafile['type'] == 'application/pdf')
                && ($dalilifile['size'] && $visababishifile['size'] && $atharifile['size'] && $kingafile['size'] && $tibafile['size'] < 10000000))
                {
                    if($dalilifile['error'] || $visababishifile['error'] || $atharifile['error'] || $kingafile['error'] || $tibafile['error'] > 0)
                    {
                        echo "retrun code:" . $dalilifile['error'] .$visababishifile['error'] .$atharifile['error'] .$kingafile['error'] .$tibafile['error'];
                    }


                    // if file exists i am renaming it random number  
                    else if(file_exists($folder.$dalilifile['name']) || ($folder.$visababishifile['name']) || ($folder.$atharifile['name']) || ($folder.$kingafile['name']) || ($folder.$tibafile['name']))
                    {

                        $temp = explode(".", $dalilifile["name"]);
                        $temp1 = explode(".", $visababishifile["name"]);
                        $temp2 = explode(".", $atharifile["name"]);
                        $temp3 = explode(".", $kingafile["name"]);
                        $temp4 = explode(".", $tibafile["name"]);
                        $newfilename = $dalilifile["name"] . '.' . end($temp);
                        $newfilename1 = $visababishifile["name"] . '.' . end($temp1);
                        $newfilename2 = $atharifile["name"] . '.' . end($temp2);
                        $newfilename3 = $kingafile["name"] . '.' . end($temp3);
                        $newfilename4 = $tibafile["name"] . '.' . end($temp4);
                        move_uploaded_file($dalilifile["tmp_name"], $folder . $newfilename);
                        move_uploaded_file($visababishifile["tmp_name"], $folder . $newfilename1);
                        move_uploaded_file($atharifile["tmp_name"], $folder . $newfilename2);
                        move_uploaded_file($kingafile["tmp_name"], $folder . $newfilename3);
                        move_uploaded_file($tibafile["tmp_name"], $folder . $newfilename4);

                        $sql = "INSERT INTO diseasepdf(title, heading, symptoms, causes, effects, prevention, treatment, category)
                                            VALUES (
                                                    '{$_POST['title']}',
                                                    '{$_POST['heading']}',
                                                    '{$newfilename}',
                                                    '{$newfilename1}',
                                                    '{$newfilename2}',
                                                    '{$newfilename3}',
                                                    '{$newfilename4}',
                                                    '{$_POST['category']}')";
                        mysqli_query($connect, $sql);

                        if ($sql)
                        {
                            echo "successfully inserted this record";
                            header("location: index.php?p=adminPage");
                        }

                    }

                } else {


                $sql1 ="INSERT INTO diseasepdf(title, heading, category)
                                    VALUES ('{$_POST['title']}',
                                            '{$_POST['heading']}',
                                            '{$_POST['category']}')";
                mysqli_query($connect, $sql1);
                if ($sql1)
                {
                    echo "successfully insert this record";
                    header("location: index.php?p=adminPage");
                }

                }
                }
        
    }
	//END OF PDF UPLOADING
	
	
	
	//PATIENT REGISTRATION FORM SUBMISSION
	 elseif($page=="pregistration")
    {
		$fname=$_POST["fname"];
		$mname=$_POST["mname"];
		$lname=$_POST["lname"];
        $age=$_POST["age"];
		$gender=$_POST["gender"];
		$location=$_POST["location"];
        $occupation=$_POST["occupation"];
		$username=$_POST["username"];
		$password=$_POST["password"];
		$contact=$_POST["contact"];
		$email=$_POST["email"];
		$image=$_POST["image"];
        
		$password = md5($password);
		$sql="insert into patient values(' ','".$fname."','".$mname."','".$lname."','".$age."','".$gender."',
		'".$location."','".$occupation."','".$username."','".$password."','".$contact."','".$email."','".$image."')";
		
		if(mysqli_query($connect,$sql))
			{

		     print"<script>location.href='index.php?p=patientlogin';</script>";
			}
		else
			{
			print"<script>alert('failed to insert data');location.href='index.php?pregistration';</script>".mysqli_connect_error();
			}
	}


	
	
	//DOCTOR REGISTRATION FORM SUBMISSION
 elseif($page=="doctorreg")
    {
		$fname=$_POST["fname"];
		$mname=$_POST["mname"];
		$lname=$_POST["lname"];
        $age=$_POST["age"];
		$gender=$_POST["gender"];
		$location=$_POST["location"];
        $specialization=$_POST["specialization"];
		$username=$_POST["username"];
		$password=$_POST["password"];
		$contact=$_POST["phone"];
        $email=$_POST["email"];
        $image=$_POST["image"];
        $desc=$_POST["description"];
        
		$password = md5($password);
		$sql="insert into doctor values(' ','".$fname."','".$mname."','".$lname."','".$age."','".$gender."','".$location."',
		'".$specialization."','".$username."','".$password."','".$contact."','".$email."','".$image."','".$desc."')";
		
		if(mysqli_query($connect,$sql))
			{

		     header("location: index.php?p=adminPage");
			}
		else
			{
			print"<script>alert('failed to insert data');location.href='index.php?p=adminPage';</script>".mysqli_connect_error();
			}
	}
	//END OF DOCTOR REGISTRATION
	
	
	// PATIENT CONSULTATION FORM SUBMISSION
	elseif($page=="patientconsultation" && isset($_SESSION["username"]))
    {
		$howfeel=$_POST["howfeel"];
		$date=$_POST["date"];
		$neworold=$_POST["neworold"];
		$prevmedication=$_POST["prevmedication"];
        $medresult=$_POST["medresult"];
		$inheritagedisease=$_POST["inheritagedisease"];
		$alergy=$_POST["alergy"];
        $temp=$_POST["temp"];
		$pulse=$_POST["pulse"];
        $clinic=$_POST["clinic"];
        $seldr=$_POST["seldr"];
        $pid=$_SESSION["username"];

        $sql1 ="INSERT INTO consultation(howfeel, date, neworOld, previousmedication, medicationresult, inheritagedisease, alergy, temp, pulse, clinic, did, pid)
                                    VALUES ('{$_POST['howfeel']}',
                                            '{$_POST['date']}',
                                            '{$_POST['neworold']}',
                                            '{$_POST['prevmedication']}',
                                            '{$_POST['medresult']}',
                                            '{$_POST['inheritagedisease']}',
                                            '{$_POST['alergy']}',
                                            '{$_POST['temp']}',
                                            '{$_POST['pulse']}',
                                            '{$_POST['clinic']}',
                                            '{$_POST['seldr']}',
                                            '{$pid}')";
                mysqli_query($connect, $sql1);
                if ($sql1)
                {
                    echo "successfully insert this record";
                    header("location: index.php?p=patientPage");
                }

                }
    	// DOCTOR FEEDBACK SUBMISSION
	elseif($page=="drfeedback" && isset($_SESSION["username"]))
    {
		$whatisprob=$_POST["whatisprob"];
		$labreq=$_POST["labreq"];
		$medtouse=$_POST["medtouse"];
		$appointment=$_POST["appointment"];
        $when=$_POST["when"];
        $pid=$_POST["pname"];
		$did=$_SESSION["username"];
             $sql1 ="INSERT INTO consultationfeedback(problem, laboratory, pharmacy, appointment, appointmentdate, did, pid)
                                    VALUES ('{$_POST['whatisprob']}',
                                            '{$_POST['labreq']}',
                                            '{$_POST['medtouse']}',
                                            '{$_POST['appointment']}',
                                            '{$_POST['when']}',
                                            '{$did}',
                                            '{$_POST['pname']}')";
                mysqli_query($connect, $sql1);
                if ($sql1)
                {
                    echo "successfully insert this record";
                    header("location: index.php?p=doctorPage");
                }else{
                    header("location: index.php?p=doctorfeedback");
                }

                }
     // VALIDATE CONTROL NUMBER
    elseif($page=="controlNo"&&isset($_SESSION["username"]))
    {
       $controlno=$_POST["controlno"];
	   $sql="SELECT * from controlnumbers WHERE controlno='".$controlno."'";
	   $data=mysqli_fetch_Assoc(mysqli_query($connect,$sql));
       $controlNo = $data['controlno'];
	   if($controlno=$controlNo)
	   {
			header("location: index.php?p=pconsultationpage");
	   }
	   else
	   {
				print"<script>location.href='index.php?p=patientPage';</script>".mysqli_connect_error();
	   }
    }
    elseif($page=="pconsultationpage"&&isset($_SESSION["username"]))
    {
        $main_content="pages/patientconsultation.php";   
    }
    
    // ADMIN LOGIN PAGE
	elseif($page=="adminlogin")
    {
       $username=$_POST["username"];
	   $password=$_POST["password"];
        $password = md5($password);
	   $sql="SELECT * from admin WHERE username='".$username."' AND password='".$password."'";
	   $data=mysqli_fetch_Assoc(mysqli_query($connect,$sql));
	   if($data)
	   {
		   $_SESSION["username"] = $data["username"];
           $_SESSION["password"] = $data["password"];
		   
			header("location: index.php?p=adminPage");
	   }
	   else
	   {
				print"<script>location.href='index.php?p=Alogin';</script>".mysqli_connect_error();
	   }
    }
    elseif($page=="adminPage"&&isset($_SESSION["username"]))
    {
        $main_content="pages/admin.php";   
    }
    elseif($page=="adminpdf"&&isset($_SESSION["username"]))
    {
        $main_content="pages/adminpdf.php"; 
    }
    elseif($page=="adminreg"&&isset($_SESSION["username"]))
    {
        $main_content="pages/adminreg.php"; 
    }
    elseif($page=="adminview"&&isset($_SESSION["username"]))
    {
        $main_content="pages/adminview.php"; 
    }
    // DOCTOR LOGIN PAGE
	elseif($page=="doctorlogin")
    {
       $username=$_POST["username"];
	   $password=$_POST["password"];
        $password = md5($password);
	   $sql="SELECT * from doctor WHERE username='".$username."' AND password='".$password."'";
	   $data=mysqli_fetch_Assoc(mysqli_query($connect,$sql));
	   if($data)
	   {
		   $_SESSION["username"] = $data["username"];
           $_SESSION["password"] = $data["password"];
		   
			header("location: index.php?p=doctorPage");
	   }
	   else
	   {
				print"<script>location.href='index.php?p=Dlogin';</script>";
	   }
    }
    elseif($page=="doctorPage"&&isset($_SESSION["username"]))
    {
        $main_content="pages/DoctorconsultationPage.php";   
    }
    elseif($page=="doctorfeedback"&&isset($_SESSION["username"]))
    {
        $main_content="pages/Doctorfeedback.php";   
    }
    
    // PATIENT LOGIN PAGE
	elseif($page=="patientlogin")
    {
       $username=$_POST["username"];
	   $password=$_POST["password"];
        $password = md5($password);
	   $sql="SELECT * from patient WHERE username='".$username."' AND password='".$password."'";
	   $data=mysqli_fetch_Assoc(mysqli_query($connect,$sql));
	   if($data)
	   {
		   $_SESSION["username"] = $data["username"];
           $_SESSION["password"] = $data["password"];
		   
			header("location: index.php?p=patientPage");
	   }
	   else
	   {
				print"<script>location.href='index.php?p=Plogin';</script>";
	   }
    }
    elseif($page=="patientPage"&&isset($_SESSION["username"]))
    {
        $main_content="pages/PatientSelectDoctorPage.php";
    }
    elseif($page=="feedbackTopatient"&&isset($_SESSION["username"]))
    {
        $main_content="pages/feedbackTopatient.php";
    }

}
else
{
    $main_content="pages/home.php";
}


?>
<?php
include '/home/rafikiapp/public_html/web-app/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
session_start();
$_servername = "localhost";
$_username = "rafikiapp";
$_password = "@!NiajeRafiki23";
$_dbname = "rafikiapp_db1";

// Create connection
$conn = new mysqli($_servername, $_username, $_password,$_dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if (!isset($_SESSION["user"])){
  header("Location: https://www.rafikiapp.tz/web-app/auth-login.php");
}

//Insert company
if(isset($_POST["company_submit"])){

  $uploadDir = '../company-logos/'; // Directory where uploaded files will be stored
  $fileName = $_FILES['fileInput']['name'];
 
  $uploadFile = $uploadDir . $fileName;

  if(move_uploaded_file($_FILES['fileInput']['tmp_name'], $uploadFile)){

    $uploadFile = str_replace("..","../web-app",$uploadFile);
  
    $var1 = $_POST ['first_name_hr'];
    $var2 = $_POST ['second_name_hr']; 
    $var3 = $_POST ['last_name_hr']; 
    $var4 = $_POST ['phone_number_hr'];
    $var5 = $_POST ['alt_phone_number_hr']; 
    $var6 = $_POST ['email_hr']; 
    $var7 = $_POST ['physical_hr'];  
    $var8 = $_POST ['degree_dept'] ;
    $var9 = $_POST ['description_dept'] ;
    $var10 = $_POST['insuarance_name'] ;
    $var11 = $_POST['insuarance_expiry'] ;
    $var12 = $_POST['company_name']; 
    $var13 = $_POST['employee_number']; 
    $var14 = $_POST['company_reg_number']; 
    $var15 = $_POST['email_company']; 
    $var16 = $_POST['phone_number_company'] ;
    $var17 = $_POST['alt_phone_number_company']; 
    $var18 = $_POST['website_company'];
    $var19 = $_POST['postal_company'];
    $var20 = $_POST['physical_company'];
    $var21 = date("Y-m-d");
    
    $ids = array();
    $sql_hr="
    INSERT INTO human_resource (first_name, second_name, last_name, 
    phone_number, alt_number, email_address, physical_address) 
    VALUES ('$var1', '$var2', '$var3',
     '$var4', '$var5', '$var6', '$var7') 
    ";

    $sql_dept="
    INSERT INTO department (degree_title, description) VALUES ('$var8', '$var9') 
    ";
    
    $sql_insuarance="
    INSERT INTO insuarance (compnay_name,expiry_date) VALUES ('$var10', '$var11') 
    ";
    
    
   
    $conn->query($sql_hr);
    $ids[0] = $conn->insert_id;
    $conn->query($sql_insuarance);
    $ids[1] = $conn->insert_id;
    $conn->query($sql_dept);
    $ids[2] = $conn->insert_id;
    $sql_office="
    INSERT INTO office (hr_id,
     department_id, insuarance_id) VALUES ( '$ids[0]', '$ids[2]', '$ids[1]') 
    ";
    $conn->query($sql_office);
    $ids[3] = $conn->insert_id;
    $sql_company="
    INSERT INTO company (logo,name, employee_number, registartion_number, email, phone_address, alt_phone, 
    website, postal_address, physical_address,office_id,joined_date) VALUES ('$uploadFile','$var12', 
    '$var13', 
    '$var14', '$var15', '$var16', '$var17', '$var18',
     '$var19', '$var20','$ids[3]','$var21') 
    ";
    $conn->query($sql_company);
  }
   
$conn->close();
}

//doctor
if(isset($_POST['doctor_submit'])){
  $uploadDir = '../doctor-logos/'; // Directory where uploaded files will be stored
  $fileName = $_FILES['fileInput']['name'];
 
  $uploadFile = $uploadDir . $fileName;

  if(move_uploaded_file($_FILES['fileInput']['tmp_name'], $uploadFile)){  
    $uploadFile = str_replace("..","../web-app",$uploadFile);

    $var1 =  $_POST['doctor_first_name'];
    $var2 =  $_POST['doctor_second_name']; 
    $var3 =  $_POST['doctor_last_name']; 
    $var4 =  $_POST['doctor_phone_number'];
    $var5 =  $_POST['doctor_alt_phone_number']; 
    $var6 =  $_POST['doctor_email']; 
    $var7 =  $_POST['doctor_gender']; 
    $var8 =  $_POST['doctor_birth_date'] ;
    $var9 =  $_POST['country'] ;
    $var10 = $_POST['doctor_national_id'] ;
    $var11 = $_POST['doctor_languages'] ;
    $var12 = $_POST['doctor_physical']; 
    $var13 = $_POST['doctor_bio']; 
    $var14 = $_POST['contact_first_name']; 
    $var15 = $_POST['contact_second_name']; 
    $var16 = $_POST['contact_last_name'] ;
    $var17 = $_POST['contact_phone']; 
    $var18 = $_POST['alt_contact_phone'];
    $var19 = $_POST['contact_relationship'];
    $var20 = $_POST['contact_physical'];
    $var21 = $_POST['college_uni_name'];
    $var22 = $_POST['qualification'];
    $var23 = $_POST['studied_course'];
    $var24 = $_POST['startYear'];
    $var25 = $_POST['finishYear'];
   
    
    $sql_qualification="
    INSERT INTO qualification (university_college, education_level, 
    studied_course, start, finish) VALUES ( '$var21', '$var22', '$var23', '$var24', '$var25') 
    ";

    $sql_emergency = "
    INSERT INTO emergency_contact (first_name, second_name, 
    last_name, phone_number, alt_phone_number, relationship, physical_address)
     VALUES ('$var14', '$var15', '$var16', '$var17', '$var18', '$var19', '$var20') 
    ";

    
    $conn->query($sql_qualification);
    $ids[0] = $conn->insert_id;

    $conn->query($sql_emergency);
    $ids[1] = $conn->insert_id;
    $date = date("Y-m-d");

    $sql_doctor="
    INSERT INTO doctor (logo,first_name, second_name, last_name, phone_number, 
    alt_phone_number, email, gender, birth_date, nationality, national_id,
     languages, physical_address, biography,joined_date,emergency_contact,qualification) 
     VALUES ('$uploadFile','$var1', '$var2', '$var3', '$var4', '$var5', '$var6', '$var7',
      '$var8', '$var9', '$var10', '$var11', '$var12', '$var13','$date','$ids[1]','$ids[0]') 
    ";

    $conn->query($sql_doctor);  
    echo $conn->error;
}
$conn->close();
}

//patient
if(isset($_POST['patient_submit'])){
  $uploadDir = '../patient-logos/'; // Directory where uploaded files will be stored
  $fileName = $_FILES['fileInput']['name'];
 
  $uploadFile = $uploadDir . $fileName;

  if(move_uploaded_file($_FILES['fileInput']['tmp_name'], $uploadFile)){  
    $uploadFile = str_replace("..","../web-app",$uploadFile);
    $var1 =  $_POST['patient_first_name'];
    $var2 =  $_POST['patient_second_name']; 
    $var3 =  $_POST['patient_last_name']; 
    $var4 =  $_POST['patient_phone_number'];
    $var5 =  $_POST['patient_alt_phone_number']; 
    $var6 =  $_POST['patient_email']; 
    $var7 =  $_POST['patient_gender']; 
    $var8 =  $_POST['patient_birth_date'] ;
    $var9 =  $_POST['country'] ;
    $var10 = $_POST['patient_national_id'] ;
    $var11 = $_POST['patient_maritial'] ;
    $var12 = $_POST['patient_language'] ;
    $var13 = $_POST['patient_physical']; 
    $var14 = $_POST['patient_bio'];   
    $var17 = $_POST['patient_job_title']; 
    $var18 = $_POST['patient_emp_id'];
    $var19 = $_POST['qualification'];
    $c_id =  $_POST['patient_company_name'];
    $var20 = $_POST['contact_first_name']; 
    $var21 = $_POST['contact_second_name']; 
    $var22 = $_POST['contact_last_name'] ;
    $var23 = $_POST['contact_phone']; 
    $var24 = $_POST['alt_contact_phone'];
    $var25 = $_POST['contact_relationship'];
    $var26 = $_POST['contact_physical'];


    $var27 = $_POST['height'];
    $var28 = $_POST['weight'];
    $var29 = $_POST['bp_high'];
    $var30 = $_POST['bp_low'];
    $var31 = $_POST['blood_group'];   
   
   
    
    //include 'metadata.php';
    

    $sql_emergency = "
    INSERT INTO emergency_contact (first_name, second_name, 
    last_name, phone_number, alt_phone_number, relationship, physical_address)
     VALUES ('$var20', '$var21', '$var22', '$var23', '$var24', '$var25', '$var26') 
    ";

    $conn->query($sql_emergency);
    $ids[0] = $conn->insert_id;

    $sql_patient="
    INSERT INTO patient (logo,first_name, second_name, last_name, phone_number, 
    alt_phone_number, email, gender, birth_date, nationality, national_id,maritial_status,
     languages, physical_address, biography,job_title,emp_id,edu_lvl,company,emergency_contact,
     height,weight,bp_high,bp_low,blood_group) 
     VALUES ('$uploadFile','$var1', '$var2', '$var3', '$var4', '$var5', '$var6', '$var7',
      '$var8', '$var9', '$var10', '$var11', '$var12', '$var13','$var14', '$var17', 
      '$var18', '$var19', '$c_id', '$ids[0]','$var27',
      '$var28', '$var29', '$var30', '$var31') 
    ";

    $conn->query($sql_patient);  
    echo $conn->error;
  }
$conn->close();
}

//edit profile
if(isset($_POST['change_profile'])){
    
    $var1= $_POST['doctor_alt_phone_number']; 
    $var2= $_POST['doctor_email']; 
    $var3 = $_POST['doctor_languages'] ;
    $var4 = $_POST['doctor_physical']; 
    $var5 = $_POST['doctor_bio']; 
    $var6 = $_POST['contact_first_name']; 
    $var7 = $_POST['contact_second_name']; 
    $var8 = $_POST['contact_last_name'] ;
    $var9 = $_POST['contact_phone']; 
    $var10 = $_POST['alt_contact_phone'];
    $var11 = $_POST['contact_relationship'];

    $id = $_SESSION["user"]["doctor"];
    $sql_doctor=
    "
    UPDATE doctor
    SET alt_phone_number = '$var1', email = '$var2', languages = '$var3', physical_address = '$var4', 
    biography='$var5' 
    WHERE doctor_id = '$id';
    ";
    
    $eme_id= $_SESSION["user"]["emergency_contact"];
    // ;
    // $result = $conn->query("SELECT emergency_contact FROM doctor WHERE id = '$id'");
    // if($result->num_rows == 1){
    //   while($row = $result->fetch_assoc()){

    //   }
    // }

    $sql_emergency=
    "
    UPDATE emergency_contact
    SET first_name = '$var6', second_name = '$var7', last_name = '$var8', phone_number = '$var9', 
    alt_phone_number='$var10', relationship = '$var11'
    WHERE contact_id = '$eme_id';
    ";
    $conn->query($sql_doctor);  

    $conn->query($sql_emergency);  
$conn->close();
header("Location: https://www.rafikiapp.tz/web-app/profile.php");

}

//change password
if (isset($_POST["change_password"])) { 
  $old_pass = $_POST["old_password"];
  $new_pass = $_POST["new_password"];
  $username = $_SESSION["user"]["email"];
  $id = $_SESSION["user"]["id"];
  $hash_oldpass = md5($old_pass);
  $hash_newpass = md5($new_pass);
  //echo $hash_newpass;
  $get_query = "
  SELECT * FROM user WHERE email='$username' AND password='$hash_oldpass'
  ";
  $update_query = "
  UPDATE user
  SET password = '$hash_newpass'
  WHERE id = '$id';
  ";
  $result = $conn->query($get_query);
  
  if ($result->num_rows == 1) {
    
      $conn->query($update_query);
      header("Location: https://www.rafikiapp.tz/web-app/profile.php");

  }
  echo "Wrong current password";
  $conn->close();
}
// post publication 
if (isset($_POST["post_publication"])){
  $var1 = $_POST["title"];
  
  $var3 = $_POST["category"];
  $var4 = $_POST["desc"];
  $var5 = $_POST["type"];
  $currentDate = date("Y-m-d");
  $id = $_SESSION["user"]["doctor"];

  $uploadDir = '../publication-uploads/'; // Directory where uploaded files will be stored
  $fileName = $_FILES['cover_image']['name'];
  $uploadFile = $uploadDir . $fileName;

  if(move_uploaded_file($_FILES['cover_image']['tmp_name'], $uploadFile)){
    $uploadDir1 = '../content-uploads/'; // Directory where uploaded files will be stored
    $fileName1 = $_FILES['content']['name'];
    $uploadCont = $uploadDir1 . $fileName1;

    if (move_uploaded_file($_FILES['content']['tmp_name'], $uploadCont)) {
      $sql_statement = "
    INSERT INTO publication (title, cover_image_dir, category,content_dir, description,upload_date,doctor,type)
  VALUES ('$var1', '$uploadFile', '$var3','$uploadCont', '$var4','$currentDate','$id','$var5');
    ";
       
      $conn->query($sql_statement);
      $conn->close();
    }
  } 
    

  header("Location: https://www.rafikiapp.tz/web-app/publication-new.php");
  
}

//post appointment
if(isset($_POST["make_appointment"])){
  $var1 = $_POST["title"];
  $var2 = $_POST["date"];
  $var3 = $_POST["start"];
  $var4 = $_POST["end"];
  $var5 = $_POST["patient"];
  $var6= $_POST["desc"];
  $var7= $_POST["type"];
  $doc_id = $_SESSION["user"]["doctor_id"];

  $sql_statement = "
  INSERT INTO appointment (title, date, start, 
  end, patient, description, type,doctor) 
  VALUES ('$var1', '$var2', '$var3',
   '$var4', '$var5', '$var6', '$var7','$doc_id') 
  ";

  $conn->query($sql_statement);
  $conn->close();
header("Location: https://www.rafikiapp.tz/web-app/appointment-new.php");
}

//post patients with excel
if(isset($_POST["excel_submit"])){
    
    $excelFile = $_FILES['excel']['tmp_name'];

    // Load the Excel file
  
    $spreadsheet = IOFactory::load($excelFile);
echo "Reach";
    // Get the data from the first worksheet
    $worksheet = $spreadsheet->getActiveSheet();
    $data = $worksheet->toArray();
    $db = new PDO('mysql:host=localhost;dbname=rafikiapp_db1', 'rafikiapp', '@!NiajeRafiki23');
    $var18 = $_POST["company"];
    
    foreach (array_slice($data, 1) as $row) {
      $sql = "INSERT INTO patient (first_name, second_name, last_name, phone_number, 
      alt_phone_number, email, gender, birth_date, nationality, national_id,maritial_status,
       languages, physical_address, biography,job_title,emp_id,edu_lvl,company,
       height,weight,bp_high,bp_low,blood_group) VALUES (?, ?, ?, ?, ?, ?, ?,
      ?, ?, ?, ?, ?, ?,?, ?, 
      ?, ?,'$var18', ?,
      ?, ?, ?, ?)";
      $stmt = $db->prepare($sql);
     
      $stmt->execute($row);
      echo "Excuted";
  }
$conn->close();
header("Location: https://www.rafikiapp.tz/web-app/patients-upload.php");
}

if(isset($_POST["change_hr_pass"])){
  $var1 = $_POST["new_password"];
  $hash_newpass = md5($var1);

    $sql_statement = "SELECT office.hr_id,id FROM company INNER JOIN 
    office ON company.office_id = office.office_id;
    ";
    
    $result = $conn->query($sql_statement);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $id = $row["hr_id"];
      echo $id."<br>";
      //$sql_statement = "UPDATE user SET password = '$hash_newpass' WHERE hr='$id'";
      //$conn->query($sql_statement);
      //header("Location: https://www.rafikiapp.tz/web-app/company-view.php?see_id=".$row["company_id"]);

    }
  } 
}


?> 
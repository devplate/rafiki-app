<?php
include 'database.php';
$patient_company_id = "";
if (isset($_GET["post_companies"])){
    $sql_companies = "
    SELECT id,name FROM company 
    ";
    $result = $conn->query($sql_companies);
    if ($result->num_rows > 0) {
        // output data of each row
        echo "<option value=\"\">Select</option>";

        while($row = $result->fetch_assoc()) {
          echo "<option data-id=".$row["id"]." value=\"".$row["id"]."\">".$row["name"]."</option>";
          
        }
    } else {
    echo "nothing";
    }
  
    $conn->close();
}
if (isset($_GET["post_depts"])){
    $id = $_GET["post_depts"];
    $patient_company_id = $id;
    // "SELECT 
    // * 
    // FROM 
    // vehicles 
    // INNER JOIN users ON vehicles.car_owner = users.user_id";
    $sql_companies = "
    SELECT department.degree_title
    FROM ((company
    LEFT JOIN office ON company.office_id = 'office.office_id')
    LEFT JOIN department ON office.department_id = 'department.department_id') WHERE id='$id';  
    ";
    $result = $conn->query($sql_companies);
    if ($result->num_rows > 0) {
        // output data of each row
        echo "<option value=\"\">Select</option>";

        while($row = $result->fetch_assoc()) {
          echo "<option value=\"".$row["degree_title"]."\">".$row["degree_title"]."</option>";
          
        }
    } else {
    echo "nothing";
    } 
  
    $conn->close();
}
if(isset($_GET['get_companies'])){
    $sql_companies="
    SELECT id,logo,employee_number,name,phone_address,email,postal_address,physical_address,joined_date FROM company 
    ";
    $result = $conn->query($sql_companies);
    if ($result->num_rows > 0) {
        // output data of each row       

        while($row = $result->fetch_assoc()) {
          echo "<tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["employee_number"]."</td>
                    <td>".$row["name"]."</td>
                    <td>".$row["phone_address"]."</td>
                    <td>".$row["email"]."</td>
                    <td>".$row["postal_address"]."</td>
                    <td>".$row["physical_address"]."</td>
                    <td>".$row["joined_date"]."</td>
                    <td>03 Oct, 2025</td>
                    <td><span class=\"badge bg-success\">Active</span></td>
                    <td>
                        <div class=\"dropdown d-inline-block\">
                            <button class=\"btn btn-subtle-secondary btn-sm dropdown\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"ri-more-fill align-middle\"></i>
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                <li><a href=\"company-view.php?see_id=".$row["id"]."\" class=\"dropdown-item\"><i class=\"ri-eye-fill align-bottom me-2 text-muted\"></i> View</a></li>
                                <li><a class=\"dropdown-item edit-item-btn\"><i class=\"ri-pencil-fill align-bottom me-2 text-muted\"></i> Edit</a></li>
                                <li>
                                    <a onclick=\"deleteForm(".$row["id"].")\"  class=\"dropdown-item remove-item-btn\">
                                        <i class=\"ri-delete-bin-fill align-bottom me-2 text-muted\"></i> Delete
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>";          
        }
    } else {
    echo "nothing";
    }
  
    $conn->close();
}
if(isset($_GET['get_doctors'])){
    $sql_doctors="
    SELECT doctor_id,gender,first_name,second_name,last_name,phone_number,email,physical_address FROM doctor 
    ";
    $result = $conn->query($sql_doctors);
    if ($result->num_rows > 0) {
        // output data of each row       

        while($row = $result->fetch_assoc()) {
          echo "<tr>
                    <td>".$row["doctor_id"]."</td>
                    <td>".$row["gender"]."</td>
                    <td>".$row["first_name"]." ".$row["second_name"]." ".$row["last_name"]."</td>
                    <td>".$row["phone_number"]."</td>
                    <td>".$row["email"]."</td>
                    <td>".$row["physical_address"]."</td>
                    <td>03 Oct, 2021</td>
                    <td>
                        <h5 class=\"fs-md fw-medium mb-0 rating\"><i class=\"ph-star align-baseline text-warning\"></i> 3.5</h5>
                    </td>
                    <td><span class=\"badge bg-success\">Active</span></td>
                    <td>
                        <div class=\"dropdown d-inline-block\">
                            <button class=\"btn btn-subtle-secondary btn-sm dropdown\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"ri-more-fill align-middle\"></i>
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                <li><a href=\"doctor-view.php?see_id=".$row["doctor_id"]."\" class=\"dropdown-item\"><i class=\"ri-eye-fill align-bottom me-2 text-muted\"></i> View</a></li>
                                <li><a class=\"dropdown-item edit-item-btn\"><i class=\"ri-pencil-fill align-bottom me-2 text-muted\"></i> Edit</a></li>
                                <li>
                                    <a onclick=\"deleteForm(".$row["doctor_id"].")\"  class=\"dropdown-item remove-item-btn\">
                                        <i class=\"ri-delete-bin-fill align-bottom me-2 text-muted\"></i> Delete
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>";
                            
        }
    } else {
    echo "nothing";
    }
  
    $conn->close();
}
if(isset($_GET['get_patients'])){
    $sql_patient="
    SELECT patient_id,gender,first_name,second_name,last_name,phone_number,patient.email,company.name,job_title,patient.physical_address FROM patient LEFT JOIN company ON patient.company = company.id 
    ";
    $result = $conn->query($sql_patient);
    if ($result->num_rows > 0) {
        // output data of each row       

        while($row = $result->fetch_assoc()) {
          echo "<tr>
                    <td>".$row["patient_id"]."</td>
                    <td>".$row["gender"]."</td>
                    <td>".$row["first_name"]." ".$row["second_name"]." ".$row["last_name"]."</td>
                    <td>".$row["phone_number"]."</td>
                    <td>".$row["email"]."</td>
                    <td>".$row["name"]."</td>
                    <td>".$row["job_title"]."</td>
                    <td>".$row["physical_address"]."</td>
                    <td>03 Oct, 2021</td>
                    <td><span class=\"badge bg-success\">Active</span></td>
                    <td>
                        <div class=\"dropdown d-inline-block\">
                            <button class=\"btn btn-subtle-secondary btn-sm dropdown\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"ri-more-fill align-middle\"></i>
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                <li><a href=\"patient-view.php\" class=\"dropdown-item\"><i class=\"ri-eye-fill align-bottom me-2 text-muted\"></i> View</a></li>
                                <li><a class=\"dropdown-item edit-item-btn\"><i class=\"ri-pencil-fill align-bottom me-2 text-muted\"></i> Edit</a></li>
                                <li>
                                    <a onclick=\"deleteForm(".$row["patient_id"].")\" data-id=\"".$row["patient_id"]."\" class=\"dropdown-item remove-item-btn\">
                                        <i class=\"ri-delete-bin-fill align-bottom me-2 text-muted\"></i> Delete
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
      </tr>";
                            
        }
    } else {
    echo "nothing";
    }
  
    $conn->close();
}
if(isset($_GET["delete_patient"])){
    $id = $_GET["delete_patient"];
    $sql_delete_patient = "DELETE FROM patient WHERE patient.patient_id = $id";
    $conn->query($sql_delete_patient);
    $conn->close();
}
if(isset($_GET["delete_doctor"])){
    $id = $_GET["delete_doctor"];
    $sql_delete_patient = "DELETE FROM doctor WHERE doctor.doctor_id = $id";
    $conn->query($sql_delete_patient);
    $conn->close();
}
if(isset($_GET["delete_company"])){
    $id = $_GET["delete_company"];
    $sql_delete_patient = "DELETE FROM company WHERE company.id = $id";
    $conn->query($sql_delete_patient);
    $conn->close();
}
if(isset($_GET["get_publications"])){
    $id = $_SESSION["user"]["doctor"];
    $sql_statement = "
    SELECT * FROM publication LEFT JOIN doctor ON publication.doctor = doctor.doctor_id;
    ";
    $result = $conn->query($sql_statement);
    if ($result->num_rows > 0) {
     

        while($row = $result->fetch_assoc()) {
          echo "
          <tr>
          <td class=\"post_id\">
              <span class=\"post_id\">".$row["id"]."</span>
          </td>
          <td>
              <div class=\"d-flex align-items-center gap-2 position-relative\">
                  <a href=\"apps-real-estate-property-overview.html\" class=\"post_title text-reset stretched-link\">".$row["title"]."</a>
              </div>
          </td>
          <td>".$row["type"]."</td>
          <td class=\"author\">
              ".$row["first_name"]." ".$row["second_name"]." ".$row["last_name"]."
          </td>
          <td class=\"address\">
              ".$row["upload_date"]."
          </td>

          <td>
              <span class=\"badge bg-success text-white status\">Published</span>
          </td>
          <td>
              <ul class=\"d-flex gap-2 list-unstyled mb-0\">
                  <li>
                      <a href=\"apps-real-estate-property-overview.html\" class=\"btn btn-subtle-primary btn-icon btn-sm \"><i class=\"ph-eye\"></i></a>
                  </li>
                  <li>
                      <a href=\"dashboard-real-estate.html#!\" class=\"btn btn-subtle-secondary btn-icon btn-sm edit-item-btn\"><i class=\"ph-pencil\"></i></a>
                  </li>
                  <li>
                      <a href=\"connect/metadata.php?delete_publication=".$row["id"]."\" class=\"btn btn-subtle-danger btn-icon btn-sm remove-item-btn\"><i class=\"ph-trash\"></i></a>
                  </li>
              </ul>
          </td>
      </tr>
          ";
          
        }
    } else {
    echo "nothing";
    }
    $conn->close();
}
if (isset($_GET['company_view'])) {
    $id = $_GET["id"];
    $sql_statement = "
    SELECT * FROM company WHERE id = '$id' 
    ";
    $result = $conn->query($sql_statement);
    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            echo "
        
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex mb-3\">
                                        <div class=\"dropdown flex-shrink-0 ms-auto\">
                                            <button class=\"btn btn-light btn-icon btn-sm\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <i class=\"bx ri-edit-line\"></i>
                                            </button>
                                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                                <li><a class=\"dropdown-item\" href=\"#\"><i class=\"bx bx-user-x me-1 align-baseline\"></i> deactivate</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=\"text-center border-bottom border-dashed pt-3 pb-4\">
                                        <img src=\"".$row["logo"]."\" alt=\"\" class=\"avatar-lg rounded-circle p-1 img-thumbnail\">
                                        <div class=\"mt-3\">
                                            <h5>" . $row["name"] . "</h5>
                                            <p class=\"text-muted\"><a href=\"#\">" . $row["website"] . "</a> </p>
                                        </div>
                                    </div>

                                    <div class=\"py-4\">

                                        <div class=\"table-responsive\">
                                            <table class=\"table table-borderless table-sm align-middle table-nowrap mb-0\">
                                                <tbody>
                                                    <tr>
                                                        <th class=\"ps-0 text-end\" scope=\"row\">Company ID:</th>
                                                        <td class=\"text-muted\">" . $row["id"] . "</td>
                                                    </tr>
                                                    <tr>
                                                        <th class=\"ps-0 text-end\" scope=\"row\">Email address:</th>
                                                        <td class=\"text-muted\">" . $row["email"] . "</td>
                                                    </tr>
                                                    <tr>
                                                        <th class=\"ps-0 text-end\" scope=\"row\">Postal Address</th>
                                                        <td class=\"text-muted\">" . $row["postal_address"] . "</td>
                                                    </tr>
                                                    <tr>
                                                        <th class=\"ps-0 text-end\" scope=\"row\">Location:</th>
                                                        <td class=\"text-muted\">" . $row["physical_address"] . "</td>
                                                    </tr>
                                                    <tr>
                                                        <th class=\"ps-0 text-end\" scope=\"row\">Joined Date:</th>
                                                        <td class=\"text-muted\">" . $row["joined_date"] . "</td>
                                                    </tr>

                                                    <tr>
                                                        <th class=\"ps-0 text-end\" scope=\"row\">Total Employees:</th>
                                                        <td class=\"text-muted\">" . $row["employee_number"] . "</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-->
                        
        ";
        }
    }
}
if (isset($_GET["company_employees"])){
    $id = $_GET["id"];

    $sql_statement = "
    SELECT * FROM patient WHERE company ='$id'
    ";
    $result = $conn->query($sql_statement);
    while($row = $result->fetch_assoc()){
        echo "
        <div class=\"col-xxl-4 col-sm-6\">
                                            <div class=\"card\">
                                                <div class=\"card-body\">
                                                    <div class=\"dropdown float-end\">
                                                        <a class=\"text-muted\" href=\"pages-profile.html#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\"><i class=\"bx bx-dots-horizontal-rounded\"></i></a>
                                                        <div class=\"dropdown-menu dropdown-menu-end\">
                                                            <a class=\"dropdown-item\" href=\"patient-view.php\">View</a>
                                                            <a class=\"dropdown-item\" href=\"pages-profile.html#\">Edit</a>
                                                            <a class=\"dropdown-item\" href=\"pages-profile.html#\">Remove</a>
                                                        </div>
                                                    </div>
                                                    <div class=\"d-flex align-items-center\">
                                                        <div class=\"flex-shrink-0 position-relative\">
                                                            <img src=\"assets/images/users/avatar-2.jpg\" alt=\"\" class=\"avatar-sm rounded\">
                                                            <span class=\"position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1\"><span class=\"visually-hidden\">unread messages</span></span>
                                                        </div>
                                                        <div class=\"flex-grow-1 ms-2\">
                                                            <h5 class=\"fs-md\"><a href=\"pages-profile.html\" class=\"text-dark\">".$row["first_name"]." ".$row["last_name"]."</a></h5>
                                                            <p class=\"text-muted mb-0\">".$row["job_title"]."</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"mt-4\">
                                                        <p class=\"text-muted mb-2\"><i class=\"bi bi-telephone align-baseline me-1\"></i> ".$row["phone_number"]."</p>
                                                        <p class=\"text-muted mb-2\"><i class=\"bi bi-envelope align-baseline me-1\"></i> ".$row["email"]."</p>
                                                        <p class=\"text-muted mb-0\"><i class=\"bi bi-geo-alt align-baseline me-1\"></i> ".$row["physical_address"]."</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end col-->
        ";
    }

}
if (isset($_GET["doctor_view"])){
    $id = $_GET["id"];
    $sql_statement = "
    SELECT * FROM doctor LEFT JOIN emergency_contact ON
     doctor.emergency_contact = emergency_contact.contact_id
     RIGHT JOIN qualification ON doctor.qualification = qualification.qualification_id
     WHERE doctor_id = '$id' 
    ";
    $result = $conn->query($sql_statement);

    while($row = $result->fetch_assoc()){
        $_SESSION["data"] = $row;
        $birthDate = new DateTime("2003-06-05");

        // Get the current date
        $currentDate = new DateTime();

        // Calculate the interval between the birthdate and current date
        $age = $currentDate->diff($birthDate);

        // Extract the years from the interval
        $years = $age->y;

        echo "
        <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex mb-3\">
                                        <div class=\"dropdown flex-shrink-0 ms-auto\">
                                            <button class=\"btn btn-light btn-icon btn-sm\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <i class=\"bx ri-edit-line\"></i>
                                            </button>
                                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                                <li><a class=\"dropdown-item\" href=\"#\"><i class=\"bx bx-user-x me-1 align-baseline\"></i> deactivate</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=\"text-center border-bottom pt-3 pb-4\">
                                        <img src=\"".$row["logo"]."\" alt=\"\" class=\"avatar-lg rounded-circle p-1 img-thumbnail\">
                                        <div class=\"mt-3\">
                                            <h5>Dr. ".$row["first_name"]." ".$row["last_name"]."</h5>
                                            <p class=\"text-muted\">ID: ".$row["doctor_id"]."</p>
                                        </div>
                                    </div>

                                    <div class=\"pt-4 pb-2\">
                                        <div class=\"card\">
                                            <div class=\"table-responsive\">
                                                <table class=\"table table-borderless table-sm align-middle table-nowrap mb-0\">
                                                    <tbody>
                                                        <tr>
                                                            <th class=\"ps-0 text-end\" scope=\"row\">Age:</th>
                                                            <td class=\"text-muted\">".$years."</td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"ps-0 text-end\" scope=\"row\">Gender:</th>
                                                            <td class=\"text-muted\">".$row["gender"]."</td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"ps-0 text-end\" scope=\"row\">Language:</th>
                                                            <td class=\"text-muted\">".$row["languages"]."</td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"ps-0 text-end\" scope=\"row\">Nationality:</th>
                                                            <td class=\"text-muted\">".$row["nationality"]."</td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"ps-0 text-end\" scope=\"row\">National Id no:</th>
                                                            <td class=\"text-muted\">".$row["national_id"]."</td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"ps-0 text-end\" scope=\"row\">Phone number:</th>
                                                            <td class=\"text-muted\">".$row["phone_number"]."</td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"ps-0 text-end\" scope=\"row\">Alt number:</th>
                                                            <td class=\"text-muted\">".$row["alt_phone_number"]."</td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"ps-0 text-end\" scope=\"row\">Email address:</th>
                                                            <td class=\"text-muted\">".$row["email"]."</td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"ps-0 text-end\" scope=\"row\">Location:</th>
                                                            <td class=\"text-muted\">".$row["physical_address"]."</td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"ps-0 text-end\" scope=\"row\">Joined Date:</th>
                                                            <td class=\"text-muted\">".$row["joined_date"]."</td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-->


                            <div class=\"card\">
                                <div class=\"card-body\">

                                    <div class=\"pt-2\">
                                        <h5 class=\"card-title mb-3\">Emergency</h5>
                                        <div class=\"card\">
                                            <div class=\"table-responsive\">
                                                <table class=\"table table-borderless table-sm align-middle table-nowrap mb-0\">
                                                    <tbody>
                                                        <tr>
                                                            <th class=\"ps-0 text-end\" scope=\"row\">Full name</th>
                                                            <td class=\"text-muted\">".$row["first_name"]." ".$row["last_name"]."</td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"ps-0 text-end\" scope=\"row\">Phone number:</th>
                                                            <td class=\"text-muted\">".$row["phone_number"]."</td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"ps-0 text-end\" scope=\"row\">Alt number</th>
                                                            <td class=\"text-muted\">".$row["alt_phone_number"]."</td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"ps-0 text-end\" scope=\"row\">Email address:</th>
                                                            <td class=\"text-muted\">".$row["email"]."</td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"ps-0 text-end\" scope=\"row\">Location:</th>
                                                            <td class=\"text-muted\">".$row["physical_address"]."</td>
                                                        </tr>

                                                        <tr>
                                                            <th class=\"ps-0 text-end\" scope=\"row\">Relationship:</th>
                                                            <td class=\"text-muted\">".$row["relationship"]."</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-->
        ";

    }
}
if(isset($_GET["doc_qualifications"])){
    echo "
    <li class=\"mb-4\">
                                                    <div class=\"d-flex\">
                                                        <span class=\"education size-3\"><i class=\"ph-student\"></i></span>
                                                        <h6 class=\"fs-md p-3\">".$_SESSION["data"]["university_college"]."</h6>
                                                    </div>
                                                    <div class=\"education-map\">
                                                        <p class=\"text-muted mb-0\">".$_SESSION["data"]["studied_course"]."</p>
                                                        <p class=\"mt-1\">".$_SESSION["data"]["start"]." - ".$_SESSION["data"]["finish"]."</p>
                                                    </div>
                                                </li>
    ";
}
if(isset($_GET["see_appointment"])){
    $id = $_SESSION["user"]["doctor"];
    $sql_statement = "SELECT * FROM appointment WHERE doctor = '$id'";

    $result = $conn->query($sql_statement);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "
            <tr>
                                                    <td>".$row["id"]."</td>
                                                    <td>".$row["title"]."</td>
                                                    <td>".$_SESSION["user"]["first_name"]." ".$_SESSION["user"]["last_name"]."</td>
                                                    <td>".$row["patient"]."</td>
                                                    <td>".$row["date"]."</td>
                                                    <td>".$row["start"]." to ".$row["end"]."</td>
                                                    <td><span class=\"badge bg-success\">Attended</span></td>
                                                    <td>
                                                        <div class=\"dropdown d-inline-block\">
                                                            <button class=\"btn btn-subtle-secondary btn-sm dropdown\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                                <i class=\"ri-more-fill align-middle\"></i>
                                                            </button>
                                                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                                                <li><a href=\"appointment-new.php\" class=\"dropdown-item\"><i class=\"ri-eye-fill align-bottom me-2 text-muted\"></i> View</a></li>
                                                                <li>
                                                                    <a href=\"\" class=\"dropdown-item remove-item-btn\">
                                                                        <i class=\"ri-delete-bin-fill align-bottom me-2 text-muted\"></i> Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
            ";
        }
    }
}
if(isset($_GET["delete_publication"])){
    $id = $_GET["delete_publication"];
    $sql_delete_publication = "DELETE FROM publication WHERE publication.id = $id";
    $conn->query($sql_delete_publication);
    $conn->close();
    header("Location: https://www.rafikiapp.tz/web-app/publications.php");
}
if(isset($_GET["get_diagnosis"])){
    $sql_statement = "SELECT * FROM diagnosis INNER JOIN patient ON diagnosis.patient = patient.patient_id";

    $result = $conn->query($sql_statement);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
            <tr>
                    <td>".$row["id"]."</td>
                    <td class=\"text-primary\"><a href=\"patient-view.php\">".$row["first_name"]." ".$row["second_name"]." ".$row["last_name"]."</a></td>
                    <td>".$row["score"]." ".$row["category"]." ".$row["test"]."</td>
                    <td>".$row["date"]."</td>
                    
                    <td><span class=\"badge bg-success\">Attended</span></td>
                    <td>
                        <div class=\"dropdown d-inline-block\">
                            <button class=\"btn btn-subtle-secondary btn-sm dropdown\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"ri-more-fill align-middle\"></i>
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                <li><a href=\"prescription-new.php?attend_diagnosis=".$row["id"]."&patient=".$row["patient_id"]."\" class=\"dropdown-item\"><i class=\"bi bi-clipboard-plus align-bottom me-2 text-muted\"></i> Attend</a></li>
                                <li>
                                    <a href=\"connect/metadata.php?delete_diagnosis=".$row["id"]."\" class=\"dropdown-item remove-item-btn\">
                                        <i class=\"ri-delete-bin-fill align-bottom me-2 text-muted\"></i> Delete
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            ";
        }
    }
    $conn->close();
}
if(isset($_GET["delete_diagnosis"])){
    $id = $_GET["delete_diagnosis"];
    $sql_delete_diagnosis = "DELETE FROM diagnosis WHERE diagnosis.id = $id";
    $conn->query($sql_delete_diagnosis);
    $conn->close();
    header("Location: https://www.rafikiapp.tz/web-app/diagnosis.php");
}
if(isset($_GET["all_appointments"])){
    if($_SESSION["user_group"]=="root"){
        $sql_statement = "SELECT * FROM appointment";

    $result = $conn->query($sql_statement);
    $data = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
    }
    $json_data = json_encode($data);
    header("Content-Type: application/json");
    echo $json_data;
    $conn->close();
}
}
}

?>
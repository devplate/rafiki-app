<?php include 'connect/database.php';

?>

<!doctype html>

<html lang="en" data-layout="vertical" data-layout-style="detached" data-sidebar="dark" data-sidebar-size="lg" data-preloader="enable" data-theme="default" data-bs-theme="light">

<!-- head starts -->
<?php include 'includes/head.php'; ?>

<!--datatable css-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
<!--datatable responsive css-->
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

<!-- head ends -->

<body>

    <!-- layout-wrapper start -->
    <div id="layout-wrapper">

        <!-- left sidebar starts -->
        <?php include 'includes/sidebar.php'; ?>
        <!-- Left Sidebar End -->

        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- Header starts -->
        <?php include 'includes/header.php'; ?>
        <!-- header ends -->

        <!-- notification models starts -->
        <?php include 'includes/notification-models.php'; ?>
        <!-- notification models ends -->

        <!-- Start right Content here -->
        <div class="main-content">

            <!-- page contents start -->
            <div class="page-content">
                <div class="container-fluid">

                    <div class="col-xl-12">
                        <div class="card pb-3">
                            <div class="card-header">
                            </div><!-- end card header -->
                            <div class="card-body form-steps">
                                <form action="connect/database.php" method="post">

                                    <!-- menu section -->
                                    <div class="step-arrow-nav mb-4">
                                        <ul class="nav nav-pills custom-nav nav-justified" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="steparrow-gen-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-gen-info" type="button" role="tab" aria-controls="steparrow-gen-info" aria-selected="true">Personal details</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="steparrow-description-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-description-info" type="button" role="tab" aria-controls="steparrow-description-info" aria-selected="false">Medical details</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-experience-tab" data-bs-toggle="pill" data-bs-target="#pills-experience" type="button" role="tab" aria-controls="pills-experience" aria-selected="false">Finish</button>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Company details -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="steparrow-gen-info" role="tabpanel" aria-labelledby="steparrow-gen-info-tab">
                                            <div>

                                                <div class="text-center mt-5 mb-5">
                                                    <div class="profile-user position-relative d-inline-block mx-auto mb-3">
                                                        <img src="assets/images/users/user-dummy-img.jpg" class="rounded-circle avatar-lg img-thumbnail user-profile-image" alt="user-profile-image">
                                                        <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                                            <input id="profile-img-file-input" name="profile-img-file-input" type="file" class="profile-img-file-input" accept="image/png, image/jpeg">
                                                            <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                                                <span class="avatar-title rounded-circle bg-light text-body">
                                                                    <i class="ri-camera-fill"></i>
                                                                </span></label>
                                                        </div>
                                                    </div>
                                                    <p class="fs-md">Profile picture <span class="text-danger">*</span></p>

                                                </div>

                                                <!-- row 1 -->
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="steparrow-gen-info-name-input">First name <span class="text-danger">*</span></label>
                                                            <input type="text" data-value name="patient_first_name" class="form-control" id="steparrow-gen-info-name-input" placeholder="Enter first name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="steparrow-gen-info-name-input">Second name <span class="text-danger">*</span></label>
                                                            <input type="text" data-value name="patient_second_name" class="form-control" id="steparrow-gen-info-name-input" placeholder="Enter second name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="steparrow-gen-info-name-input">Last name <span class="text-danger">*</span></label>
                                                            <input type="text" data-value name="patient_last_name" class="form-control" id="steparrow-gen-info-name-input" placeholder="Enter last name">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- row 2 -->
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="cleave-phone">Phone number <span class="text-danger">*</span></label>
                                                            <input type="text" data-value name="patient_phone_number" class="form-control" id="cleave-phone" placeholder="+255 xxx xxx xxxx">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="cleave-alt-phone">Alternative number <span class="text-danger">*</span></label>
                                                            <input type="text" data-value name="patient_alt_phone_number" class="form-control" id="cleave-alt-phone" placeholder="+255 xxx xxx xxxx">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="steparrow-gen-info-email-input">Email address <span class="text-danger">*</span></label>
                                                            <input type="email" data-value name="patient_email" class="form-control" id="steparrow-gen-info-email-input" placeholder="Enter email address">
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- row 3 -->
                                                <div class="row">

                                                    <div class="col-lg-2">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="cleave-phone">Gender <span class="text-danger">*</span></label>
                                                            <div class="mb-2">
                                                                <input class="form-check-input" value="female" type="radio" data-value name="patient_gender" id="flexRadioDefault1">
                                                                <label class="form-check-label" for="flexRadioDefault1"> Female </label>
                                                            </div>
                                                            <input class="form-check-input" value="male" type="radio" data-value name="patient_gender" id="flexRadioDefault2">
                                                            <label class="form-check-label" for="flexRadioDefault2"> Male </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-2">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="cleave-phone">Birth date <span class="text-danger">*</span></label>
                                                            <input type="text" data-value name="patient_birth_date" class="form-control" placeholder="DD-MM-YYYY" id="cleave-date">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="cleave-alt-phone">Nationality <span class="text-danger">*</span></label>
                                                            <!-- Country names and Country Name -->
                                                            <select class="form-select" id="country" data-value name="country">
                                                                <option value="">Select country</option>
                                                                <option value="Afghanistan">Afghanistan</option>
                                                                <option value="Aland Islands">Aland Islands</option>
                                                                <option value="Albania">Albania</option>
                                                                <option value="Algeria">Algeria</option>
                                                                <option value="American Samoa">American Samoa</option>
                                                                <option value="Andorra">Andorra</option>
                                                                <option value="Angola">Angola</option>
                                                                <option value="Anguilla">Anguilla</option>
                                                                <option value="Antarctica">Antarctica</option>
                                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                                <option value="Argentina">Argentina</option>
                                                                <option value="Armenia">Armenia</option>
                                                                <option value="Aruba">Aruba</option>
                                                                <option value="Australia">Australia</option>
                                                                <option value="Austria">Austria</option>
                                                                <option value="Azerbaijan">Azerbaijan</option>
                                                                <option value="Bahamas">Bahamas</option>
                                                                <option value="Bahrain">Bahrain</option>
                                                                <option value="Bangladesh">Bangladesh</option>
                                                                <option value="Barbados">Barbados</option>
                                                                <option value="Belarus">Belarus</option>
                                                                <option value="Belgium">Belgium</option>
                                                                <option value="Belize">Belize</option>
                                                                <option value="Benin">Benin</option>
                                                                <option value="Bermuda">Bermuda</option>
                                                                <option value="Bhutan">Bhutan</option>
                                                                <option value="Bolivia">Bolivia</option>
                                                                <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                                <option value="Botswana">Botswana</option>
                                                                <option value="Bouvet Island">Bouvet Island</option>
                                                                <option value="Brazil">Brazil</option>
                                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                                <option value="Bulgaria">Bulgaria</option>
                                                                <option value="Burkina Faso">Burkina Faso</option>
                                                                <option value="Burundi">Burundi</option>
                                                                <option value="Cambodia">Cambodia</option>
                                                                <option value="Cameroon">Cameroon</option>
                                                                <option value="Canada">Canada</option>
                                                                <option value="Cape Verde">Cape Verde</option>
                                                                <option value="Cayman Islands">Cayman Islands</option>
                                                                <option value="Central African Republic">Central African Republic</option>
                                                                <option value="Chad">Chad</option>
                                                                <option value="Chile">Chile</option>
                                                                <option value="China">China</option>
                                                                <option value="Christmas Island">Christmas Island</option>
                                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                                <option value="Colombia">Colombia</option>
                                                                <option value="Comoros">Comoros</option>
                                                                <option value="Congo">Congo</option>
                                                                <option value="Congo, Democratic Republic of the Congo">Congo, Democratic Republic of the Congo</option>
                                                                <option value="Cook Islands">Cook Islands</option>
                                                                <option value="Costa Rica">Costa Rica</option>
                                                                <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                                                                <option value="Croatia">Croatia</option>
                                                                <option value="Cuba">Cuba</option>
                                                                <option value="Curacao">Curacao</option>
                                                                <option value="Cyprus">Cyprus</option>
                                                                <option value="Czech Republic">Czech Republic</option>
                                                                <option value="Denmark">Denmark</option>
                                                                <option value="Djibouti">Djibouti</option>
                                                                <option value="Dominica">Dominica</option>
                                                                <option value="Dominican Republic">Dominican Republic</option>
                                                                <option value="Ecuador">Ecuador</option>
                                                                <option value="Egypt">Egypt</option>
                                                                <option value="El Salvador">El Salvador</option>
                                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                <option value="Eritrea">Eritrea</option>
                                                                <option value="Estonia">Estonia</option>
                                                                <option value="Ethiopia">Ethiopia</option>
                                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                                <option value="Faroe Islands">Faroe Islands</option>
                                                                <option value="Fiji">Fiji</option>
                                                                <option value="Finland">Finland</option>
                                                                <option value="France">France</option>
                                                                <option value="French Guiana">French Guiana</option>
                                                                <option value="French Polynesia">French Polynesia</option>
                                                                <option value="French Southern Territories">French Southern Territories</option>
                                                                <option value="Gabon">Gabon</option>
                                                                <option value="Gambia">Gambia</option>
                                                                <option value="Georgia">Georgia</option>
                                                                <option value="Germany">Germany</option>
                                                                <option value="Ghana">Ghana</option>
                                                                <option value="Gibraltar">Gibraltar</option>
                                                                <option value="Greece">Greece</option>
                                                                <option value="Greenland">Greenland</option>
                                                                <option value="Grenada">Grenada</option>
                                                                <option value="Guadeloupe">Guadeloupe</option>
                                                                <option value="Guam">Guam</option>
                                                                <option value="Guatemala">Guatemala</option>
                                                                <option value="Guernsey">Guernsey</option>
                                                                <option value="Guinea">Guinea</option>
                                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                <option value="Guyana">Guyana</option>
                                                                <option value="Haiti">Haiti</option>
                                                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                                <option value="Honduras">Honduras</option>
                                                                <option value="Hong Kong">Hong Kong</option>
                                                                <option value="Hungary">Hungary</option>
                                                                <option value="Iceland">Iceland</option>
                                                                <option value="India">India</option>
                                                                <option value="Indonesia">Indonesia</option>
                                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                                <option value="Iraq">Iraq</option>
                                                                <option value="Ireland">Ireland</option>
                                                                <option value="Isle of Man">Isle of Man</option>
                                                                <option value="Israel">Israel</option>
                                                                <option value="Italy">Italy</option>
                                                                <option value="Jamaica">Jamaica</option>
                                                                <option value="Japan">Japan</option>
                                                                <option value="Jersey">Jersey</option>
                                                                <option value="Jordan">Jordan</option>
                                                                <option value="Kazakhstan">Kazakhstan</option>
                                                                <option value="Kenya">Kenya</option>
                                                                <option value="Kiribati">Kiribati</option>
                                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                                <option value="Kosovo">Kosovo</option>
                                                                <option value="Kuwait">Kuwait</option>
                                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                                <option value="Latvia">Latvia</option>
                                                                <option value="Lebanon">Lebanon</option>
                                                                <option value="Lesotho">Lesotho</option>
                                                                <option value="Liberia">Liberia</option>
                                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                                <option value="Liechtenstein">Liechtenstein</option>
                                                                <option value="Lithuania">Lithuania</option>
                                                                <option value="Luxembourg">Luxembourg</option>
                                                                <option value="Macao">Macao</option>
                                                                <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former Yugoslav Republic of</option>
                                                                <option value="Madagascar">Madagascar</option>
                                                                <option value="Malawi">Malawi</option>
                                                                <option value="Malaysia">Malaysia</option>
                                                                <option value="Maldives">Maldives</option>
                                                                <option value="Mali">Mali</option>
                                                                <option value="Malta">Malta</option>
                                                                <option value="Marshall Islands">Marshall Islands</option>
                                                                <option value="Martinique">Martinique</option>
                                                                <option value="Mauritania">Mauritania</option>
                                                                <option value="Mauritius">Mauritius</option>
                                                                <option value="Mayotte">Mayotte</option>
                                                                <option value="Mexico">Mexico</option>
                                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                                <option value="Monaco">Monaco</option>
                                                                <option value="Mongolia">Mongolia</option>
                                                                <option value="Montenegro">Montenegro</option>
                                                                <option value="Montserrat">Montserrat</option>
                                                                <option value="Morocco">Morocco</option>
                                                                <option value="Mozambique">Mozambique</option>
                                                                <option value="Myanmar">Myanmar</option>
                                                                <option value="Namibia">Namibia</option>
                                                                <option value="Nauru">Nauru</option>
                                                                <option value="Nepal">Nepal</option>
                                                                <option value="Netherlands">Netherlands</option>
                                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                                <option value="New Caledonia">New Caledonia</option>
                                                                <option value="New Zealand">New Zealand</option>
                                                                <option value="Nicaragua">Nicaragua</option>
                                                                <option value="Niger">Niger</option>
                                                                <option value="Nigeria">Nigeria</option>
                                                                <option value="Niue">Niue</option>
                                                                <option value="Norfolk Island">Norfolk Island</option>
                                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                                <option value="Norway">Norway</option>
                                                                <option value="Oman">Oman</option>
                                                                <option value="Pakistan">Pakistan</option>
                                                                <option value="Palau">Palau</option>
                                                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                                <option value="Panama">Panama</option>
                                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                                <option value="Paraguay">Paraguay</option>
                                                                <option value="Peru">Peru</option>
                                                                <option value="Philippines">Philippines</option>
                                                                <option value="Pitcairn">Pitcairn</option>
                                                                <option value="Poland">Poland</option>
                                                                <option value="Portugal">Portugal</option>
                                                                <option value="Puerto Rico">Puerto Rico</option>
                                                                <option value="Qatar">Qatar</option>
                                                                <option value="Reunion">Reunion</option>
                                                                <option value="Romania">Romania</option>
                                                                <option value="Russian Federation">Russian Federation</option>
                                                                <option value="Rwanda">Rwanda</option>
                                                                <option value="Saint Barthelemy">Saint Barthelemy</option>
                                                                <option value="Saint Helena">Saint Helena</option>
                                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                                <option value="Saint Lucia">Saint Lucia</option>
                                                                <option value="Saint Martin">Saint Martin</option>
                                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                                <option value="Samoa">Samoa</option>
                                                                <option value="San Marino">San Marino</option>
                                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                                <option value="Senegal">Senegal</option>
                                                                <option value="Serbia">Serbia</option>
                                                                <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                                                <option value="Seychelles">Seychelles</option>
                                                                <option value="Sierra Leone">Sierra Leone</option>
                                                                <option value="Singapore">Singapore</option>
                                                                <option value="Sint Maarten">Sint Maarten</option>
                                                                <option value="Slovakia">Slovakia</option>
                                                                <option value="Slovenia">Slovenia</option>
                                                                <option value="Solomon Islands">Solomon Islands</option>
                                                                <option value="Somalia">Somalia</option>
                                                                <option value="South Africa">South Africa</option>
                                                                <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                                                <option value="South Sudan">South Sudan</option>
                                                                <option value="Spain">Spain</option>
                                                                <option value="Sri Lanka">Sri Lanka</option>
                                                                <option value="Sudan">Sudan</option>
                                                                <option value="Suriname">Suriname</option>
                                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                                <option value="Swaziland">Swaziland</option>
                                                                <option value="Sweden">Sweden</option>
                                                                <option value="Switzerland">Switzerland</option>
                                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                                <option value="Tajikistan">Tajikistan</option>
                                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                                <option value="Thailand">Thailand</option>
                                                                <option value="Timor-Leste">Timor-Leste</option>
                                                                <option value="Togo">Togo</option>
                                                                <option value="Tokelau">Tokelau</option>
                                                                <option value="Tonga">Tonga</option>
                                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                                <option value="Tunisia">Tunisia</option>
                                                                <option value="Turkey">Turkey</option>
                                                                <option value="Turkmenistan">Turkmenistan</option>
                                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                                <option value="Tuvalu">Tuvalu</option>
                                                                <option value="Uganda">Uganda</option>
                                                                <option value="Ukraine">Ukraine</option>
                                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                                <option value="United Kingdom">United Kingdom</option>
                                                                <option value="United States">United States</option>
                                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                                <option value="Uruguay">Uruguay</option>
                                                                <option value="Uzbekistan">Uzbekistan</option>
                                                                <option value="Vanuatu">Vanuatu</option>
                                                                <option value="Venezuela">Venezuela</option>
                                                                <option value="Viet Nam">Viet Nam</option>
                                                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                                <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
                                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                                <option value="Western Sahara">Western Sahara</option>
                                                                <option value="Yemen">Yemen</option>
                                                                <option value="Zambia">Zambia</option>
                                                                <option value="Zimbabwe">Zimbabwe</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="cleave-alt-phone">National ID <span class="text-danger">*</span></label>
                                                            <input type="text" data-value name="patient_national_id" class="form-control" id="cleave-alt-phone" placeholder="Enter national id">
                                                        </div>
                                                    </div>
                                                </div>



                                                <!-- row 3 -->
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="steparrow-gen-info-lname-input">Marital status <span class="text-danger">*</span></label>
                                                            <select class="form-select" data-value name="patient_maritial" id="state">
                                                                <option value="">Select</option>
                                                                <option value="Single">Single</option>
                                                                <option value="Marriage">Marriage</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="steparrow-gen-info-email-input">Languages <span class="text-danger">*</span></label>
                                                            <select class="form-control" data-value name="patient_language" id="choices-multiple-remove-button" data-choices data-choices-removeItem data-value name="choices-multiple-remove-button" multiple>
                                                                <option value="English" selected>English</option>
                                                                <option value="Swahili">Swahili</option>
                                                                <option value="French">French</option>
                                                                <option value="German">German</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- row 6 -->
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="steparrow-gen-info-email-input">Physical address <span class="text-danger">*</span></label>
                                                            <input type="email" data-value name="patient_physical" class="form-control" id="steparrow-gen-info-email-input" placeholder="Enter physical address">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="mb-4">
                                                            <label class="form-label mb-2" for="steparrow-gen-info-email-input">Biography</label>
                                                            <textarea class="form-control" data-value name="patient_bio" placeholder="Enter Description" id="gen-info-description-input" rows="4"></textarea>
                                                        </div><!-- end card-body -->
                                                    </div>
                                                </div>

                                            </div>


                                            <!-- Company details -->

                                            <div class="row">
                                                <div class="col-lg-12 mt-3 mb-4">
                                                    <p>Company details</p>
                                                    <hr>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="steparrow-gen-info-fname-input">Company name <span class="text-danger">*</span></label>
                                                        <select class="form-select" data-value name="patient_company_name" id="companies">
                                                            <option value="">Select</option>
                                                            <option value="Vodacom Tanzania">Vodacom Tanzania</option>
                                                            <option value="Tigo Tanzania">Tigo Tanzania</option>
                                                            <option value="Devplate creative agnecy">Devplate creative agnecy</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="steparrow-gen-info-sname-input">Department <span class="text-danger">*</span></label>
                                                        <select data-id class="form-select" data-value name="patient_department_name" id="depts">
                                                            <option value="">Select</option>
                                                            <option value="Department one">Department one</option>
                                                            <option value="Department two">Department two</option>
                                                            <option value="Department three">Department three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <script>
                                                    function append(response) {
                                                        document.getElementById("companies").innerHTML = response;
                                                    }

                                                    document.querySelector("#companies").addEventListener("change", (event) => {

                                                        getDepts();
                                                    });

                                                    function getDepts() {
                                                        let companies = document.querySelector("#companies");
                                                        fetch("https://www.rafikiapp.tz/web-app/connect/metadata.php?post_depts=" + document.querySelector("#companies").selectedOptions[0].dataset.id, {
                                                            method: "GET",
                                                            headers: {
                                                                "Content-Type": "application/x-www-form-urlencoded"
                                                            }
                                                        }).then((response) => response.text()).then((text) => {
                                                            document.querySelector("#depts").innerHTML = text;
                                                        });
                                                    }
                                                    fetch("https://www.rafikiapp.tz/web-app/connect/metadata.php?post_companies=1", {
                                                        method: "GET",
                                                        headers: {
                                                            "Content-Type": "application/x-www-form-urlencoded"
                                                        }
                                                    }).then((response) => response.text()).then((text) => append(text));
                                                </script>
                                                <div class="col-lg-4">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="steparrow-gen-info-lname-input">Job title <span class="text-danger">*</span></label>
                                                        <input type="text" data-value name="patient_job_title" class="form-control" id="steparrow-gen-info-lname-input" placeholder="Enter job title">
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="steparrow-gen-info-lname-input">Employee ID <span class="text-danger">*</span></label>
                                                        <input type="text" data-value name="patient_emp_id" class="form-control" id="steparrow-gen-info-lname-input" placeholder="Enter employee ID">
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="steparrow-gen-info-sname-input">Education level</label>
                                                        <select class="form-select" id="qualification" data-value name="qualification">
                                                            <option value="">Select an education level</option>
                                                            <option value="Certificate">Certificate</option>
                                                            <option value="Diploma">Diploma</option>
                                                            <option value="Advanced Diploma">Advanced Diploma</option>
                                                            <option value="Associate Degree">Associate Degree</option>
                                                            <option value="Bachelor Degree">Bachelor Degree</option>
                                                            <option value="Master Degree">Master Degree</option>
                                                            <option value="Doctorate Degree">Doctorate Degree</option>
                                                            <option value="Professional Degree">Professional Degree</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 mt-3 mb-4">
                                                    <p>Emergency Details</p>
                                                    <hr>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="steparrow-gen-info-fname-input">First name <span class="text-danger">*</span></label>
                                                        <input type="text" data-value name="contact_first_name" class="form-control" id="steparrow-gen-info-fname-input" placeholder="Enter first name">
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="steparrow-gen-info-sname-input">Second name <span class="text-danger">*</span></label>
                                                        <input type="email" data-value name="contact_second_name" class="form-control" id="steparrow-gen-info-sname-input" placeholder="Enter second name">
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="steparrow-gen-info-lname-input">Last name <span class="text-danger">*</span></label>
                                                        <input type="email" data-value name="contact_last_name" class="form-control" id="steparrow-gen-info-lname-input" placeholder="Enter last name">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="cleave-hr-phone">Phone number <span class="text-danger">*</span></label>
                                                        <input type="text" data-value name="contact_phone" class="form-control" id="cleave-hr-phone" placeholder="+255 xxx xxx xxxx">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="cleave-hr-alt-phone">Alternative number <span class="text-danger">*</span></label>
                                                        <input type="text" data-value name="alt_contact_phone" class="form-control" id="cleave-hr-alt-phone" placeholder="+255 xxx xxx xxxx">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="steparrow-gen-info-lname-input">Relationship <span class="text-danger">*</span></label>
                                                        <select class="form-select" data-value name="contact_relationship" id="state">
                                                            <option value="">Select</option>
                                                            <option value="Spouse">Spouse</option>
                                                            <option value="Sister/Brother">Sister/Brother</option>
                                                            <option value="Collegue">Collegue</option>
                                                            <option value="Parent">Parent</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="steparrow-gen-info-lname-input">Physical address <span class="text-danger">*</span></label>
                                                        <input type="text" data-value name="contact_physical" class="form-control" id="steparrow-gen-info-lname-input" placeholder="Enter physical address">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                <button type="button" class="btn btn-success btn-label right ms-auto no-border-radius nexttab nexttab" data-nexttab="steparrow-description-info-tab"><i class="ri-arrow-right-line label-icon align-middle fs-lg ms-2"></i>Next</button>
                                            </div>
                                        </div>
                                        <!-- end tab pane -->


                                        <!-- Office details -->
                                        <div class="tab-pane fade" id="steparrow-description-info" role="tabpanel" aria-labelledby="steparrow-description-info-tab">

                                            <!-- Medical qualification start -->
                                            <div class="row mt-5 mb-5">
                                                <div class="col-lg-12">
                                                    <p>Medical details</p>
                                                    <hr>
                                                </div>

                                                <!-- Medical qualification section -->
                                                <div class="row mt-3">
                                                    <div class="col-lg-2">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="steparrow-gen-info-lname-input">Height <span class="text-danger">*</span></label>
                                                            <input type="text" data-value name="height" class="form-control" id="steparrow-gen-info-lname-input" placeholder="In cm">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="steparrow-gen-info-lname-input">Weight<span class="text-danger">*</span></label>
                                                            <input type="text" data-value name="weight" class="form-control" id="steparrow-gen-info-lname-input" placeholder="In kg">
                                                        </div>
                                                    </div>
                                                </div><!--end col-->

                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="steparrow-gen-info-lname-input">Blood pressure<span class="text-danger">*</span></label>
                                                            <input type="text" data-value name="bp_high" class="form-control" id="cleave-hr-phone" placeholder="High">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="mb-4">
                                                            <div class="form-label place-hold"></div>
                                                            <input type="text" data-value name="bp_low" class="form-control" id="cleave-hr-alt-phone" placeholder="Low">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="steparrow-gen-info-lname-input">Blood group<span class="text-danger">*</span></label>
                                                            <select class="form-select" data-value name="blood_group" id="state">
                                                                <option value="">Select</option>
                                                                <option value="A+">A+</option>
                                                                <option value="A-">A-</option>
                                                                <option value="B+">B+</option>
                                                                <option value="B-">B-</option>
                                                                <option value="AB+">AB+</option>
                                                                <option value="AB-">AB-</option>
                                                                <option value="O+">O+</option>
                                                                <option value="O-">O-</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Medical qualification end -->


                                            <div class="d-flex align-items-start gap-3 mt-5">
                                                <button type="button" class="btn btn-light btn-label no-border-radius previestab" data-previous="steparrow-gen-info-tab"><i class="ri-arrow-left-line label-icon align-middle fs-lg me-2"></i> Back </button>
                                                <button type="button" onclick="submitForm()" data-value name="patient_submit" class="btn btn-success btn-label right ms-auto no-border-radius nexttab nexttab" data-nexttab="pills-experience-tab"><i class="ri-arrow-right-line label-icon align-middle fs-lg ms-2"></i>Finish</button>
                                            </div>

                                        </div>
                                        <!-- end tab pane -->

                                        <div class="tab-pane fade" id="pills-experience" role="tabpanel">
                                            <div class="text-center">

                                                <div class="avatar-md mt-5 mb-4 mx-auto">
                                                    <div class="avatar-title bg-light text-success display-4 rounded-circle">
                                                        <i class="ri-checkbox-circle-fill"></i>
                                                    </div>
                                                </div>
                                                <h5>Well Done !</h5>
                                                <p class="text-muted">You have Successfully create a Doctor</p>
                                            </div>
                                        </div>
                                        <!-- end tab pane -->
                                    </div>
                                    <!-- end tab content -->
                                </form>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
            </div>
            <!-- page content ends -->

            <!-- footer starts -->
            <?php include 'includes/footer.php'; ?>
            <!-- footer ends -->

        </div>
        <!-- end main content-->

    </div>
    <!-- layout-wrapper ends -->


    <!--start back-to-top-->
    <?php include 'includes/back-button.php'; ?>
    <!--end back-to-top-->

    <!--preloader starts-->
    <?php include 'includes/preloader.php'; ?>
    <!-- preloader ends -->

    <!-- theme Settings starts -->
    <?php include 'includes/theme-settings.php';
    ?>
    <!-- theme settings ends -->

    <!-- javascript links starts  -->
    <?php include 'includes/javascripts.php'; ?>

    <!-- form wizard init -->
    <script src="assets/js/pages/form-wizard.init.js"></script>

    <!-- cleave.js -->
    <script src="assets/libs/cleave.js/cleave.min.js"></script>

    <!-- form masks init -->
    <script src="assets/js/pages/form-masks.init.js"></script>

    <!-- javascript links ends -->

    <!-- Learning instructor create init js -->
    <script src="assets/js/pages/learning-education-create.init.js"></script>


</body>

</html>
<script>

    function submitForm() {
        const formData = new FormData();
        const fileInput = document.querySelector('input[name="profile-img-file-input"]');  
        formData.append("fileInput",fileInput.files[0]);      
        let url = "";
        
        var patient_first_name         = document.querySelector('input[name="patient_first_name"]').value;
        var patient_second_name        = document.querySelector('input[name="patient_second_name"]').value;
        var patient_last_name          = document.querySelector('input[name="patient_last_name"]').value;
        var patient_phone_number       = document.querySelector('input[name="patient_phone_number"]').value;
        var patient_alt_phone_number   = document.querySelector('input[name="patient_alt_phone_number"]').value;
        var patient_email              = document.querySelector('input[name="patient_email"]').value;
        var patient_gender             = document.querySelector('input[name="patient_gender"]').value;
        var patient_birth_date         = document.querySelector('input[name="patient_birth_date"]').value;
        var country                    = document.querySelector('select[name="country"]').value;
        var patient_national_id        = document.querySelector('input[name="patient_national_id"]').value;
        var patient_maritial           = document.querySelector('select[name="patient_maritial"]').value;
        var patient_language           = document.querySelector('select[name="patient_language"]').value;
        var patient_physical           = document.querySelector('input[name="patient_physical"]').value;
        var patient_bio                = document.querySelector('textarea[name="patient_bio"]').value;
        var patient_job_title          = document.querySelector('input[name="patient_job_title"]').value;
        var patient_emp_id             = document.querySelector('input[name="patient_emp_id"]').value;
        var qualification              = document.querySelector('select[name="qualification"]').value;
        var patient_company_name       = document.querySelector('select[name="patient_company_name"]').value;
        var contact_first_name         = document.querySelector('input[name="contact_first_name"]').value;
        var contact_second_name        = document.querySelector('input[name="contact_second_name"]').value;
        var contact_last_name          = document.querySelector('input[name="contact_last_name"]').value;
        var contact_phone              = document.querySelector('input[name="contact_phone"]').value;
        var alt_contact_phone          = document.querySelector('input[name="alt_contact_phone"]').value;
        var contact_relationship       = document.querySelector('select[name="contact_relationship"]').value;
        var contact_physical           = document.querySelector('input[name="contact_physical"]').value;
        var height                     = document.querySelector('input[name="height"]').value;
        var weight                     = document.querySelector('input[name="weight"]').value;
        var bp_high                    = document.querySelector('input[name="bp_high"]').value;
        var bp_low                     = document.querySelector('input[name="bp_low"]').value;
        var blood_group                = document.querySelector('select[name="blood_group"]').value;
     

        formData.append("patient_first_name",patient_first_name       );
        formData.append("patient_second_name",patient_second_name      );
        formData.append("patient_last_name",patient_last_name        );
        formData.append("patient_phone_number",patient_phone_number     );
        formData.append("patient_alt_phone_number",patient_alt_phone_number );
        formData.append("patient_email",patient_email            );
        formData.append("patient_gender",patient_gender           );
        formData.append("patient_birth_date",patient_birth_date       );
        formData.append("country",country                  );
        formData.append("patient_national_id",patient_national_id      );
        formData.append("patient_maritial",patient_maritial         );
        formData.append("patient_language",patient_language      );
        formData.append("patient_physical",patient_physical         );
        formData.append("patient_bio",patient_bio              );
        formData.append("patient_job_title",patient_job_title        );
        formData.append("patient_emp_id",patient_emp_id           );
        formData.append("qualification",qualification            );
        formData.append("patient_company_name",patient_company_name     );
        formData.append("contact_first_name",contact_first_name       );
        formData.append("contact_second_name",contact_second_name      );
        formData.append("contact_last_name",contact_last_name        );
        formData.append("contact_phone",contact_phone            );
        formData.append("alt_contact_phone",alt_contact_phone        );
        formData.append("contact_relationship",contact_relationship     );
        formData.append("contact_physical",contact_physical         );
        formData.append("height",height                   );
        formData.append("weight",weight                   );
        formData.append("bp_high",bp_high                  );
        formData.append("bp_low",bp_low                   );
        formData.append("blood_group",blood_group              );
        formData.append("patient_submit",1           );     

        fetch(url.concat("https://www.rafikiapp.tz/web-app/connect/database.php"), 
        {
            method: "POST",
            body: formData
        });
    }
</script>
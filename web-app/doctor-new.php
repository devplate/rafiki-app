<!doctype html>

<html lang="en" data-layout="vertical" data-layout-style="detached" data-sidebar="dark" data-sidebar-size="lg" data-preloader="enable" data-theme="default" data-bs-theme="light">

    <!-- head starts -->
    <?php include 'includes/head.php';?>

    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" >
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" >

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

    <!-- head ends -->

    <body>

        <!-- layout-wrapper start -->
        <div id="layout-wrapper">

                <!-- left sidebar starts -->
                <?php include 'includes/sidebar.php';?>
                <!-- Left Sidebar End -->

                <!-- Vertical Overlay-->
                <div class="vertical-overlay"></div>
            
                <!-- Header starts -->
                <?php include 'includes/header.php';?>
                <!-- header ends -->

                <!-- notification models starts -->
                <?php include 'includes/notification-models.php';?>
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
                                    <form action="#">

                                        <!-- menu section -->
                                        <div class="step-arrow-nav mb-4">
                                            <ul class="nav nav-pills custom-nav nav-justified" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="steparrow-gen-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-gen-info" type="button" role="tab" aria-controls="steparrow-gen-info" aria-selected="true">Personal details</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="steparrow-description-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-description-info" type="button" role="tab" aria-controls="steparrow-description-info" aria-selected="false">Qualification details</button>
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
                                                                <input id="profile-img-file-input" type="file" class="profile-img-file-input" accept="image/png, image/jpeg">
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
                                                                <input type="text" class="form-control" id="steparrow-gen-info-name-input" placeholder="Enter first name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-4">
                                                                <label class="form-label" for="steparrow-gen-info-name-input">Second name <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" id="steparrow-gen-info-name-input" placeholder="Enter second name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-4">
                                                                <label class="form-label" for="steparrow-gen-info-name-input">Last name <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" id="steparrow-gen-info-name-input" placeholder="Enter last name">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- row 2 -->
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="mb-4">
                                                                <label class="form-label" for="cleave-phone">Phone number <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" id="cleave-phone" placeholder="+255 xxx xxx xxxx">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-4">
                                                                <label class="form-label" for="cleave-alt-phone">Alternative number <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" id="cleave-alt-phone" placeholder="+255 xxx xxx xxxx">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-4">
                                                                <label class="form-label" for="steparrow-gen-info-email-input">Email address <span class="text-danger">*</span></label>
                                                                <input type="email" class="form-control" id="steparrow-gen-info-email-input" placeholder="Enter email address">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <!-- row 3 -->
                                                    <div class="row">

                                                        <div class="col-lg-2">
                                                            <div class="mb-4">
                                                                <label class="form-label" for="cleave-phone">Gender <span class="text-danger">*</span></label>
                                                                <div class="mb-2">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                <label class="form-check-label" for="flexRadioDefault1"> Female </label>
                                                                </div>
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                                <label class="form-check-label" for="flexRadioDefault2"> Male </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-2">
                                                            <div class="mb-4">
                                                                <label class="form-label" for="cleave-phone">Birth date <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" placeholder="DD-MM-YYYY" id="cleave-date">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-4">
                                                                <label class="form-label" for="cleave-alt-phone">Nationality <span class="text-danger">*</span></label>
                                                                <!-- Country names and Country Name -->
                                                                    <select class="form-select" id="country" name="country">
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
                                                                <input type="text" class="form-control" id="cleave-alt-phone" placeholder="Enter national id">
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <!-- row 3 -->
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="mb-4">
                                                                <label class="form-label" for="steparrow-gen-info-email-input">Languages <span class="text-danger">*</span></label>
                                                                <select class="form-control" id="choices-multiple-remove-button" data-choices data-choices-removeItem name="choices-multiple-remove-button" multiple>
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
                                                                <input type="email" class="form-control" id="steparrow-gen-info-email-input" placeholder="Enter physical address">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="mb-4">
                                                                <label class="form-label mb-2" for="steparrow-gen-info-email-input">Biography</label>
                                                                <textarea class="form-control" placeholder="Enter Description" id="gen-info-description-input" rows="4"></textarea>
                                                                </div><!-- end card-body -->
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                <div class="col-lg-12 mt-3 mb-4">
                                                    <p>Emergency contact</p>
                                                    <hr>
                                                </div>
                                                    
                                                <div class="col-lg-4">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="steparrow-gen-info-fname-input">First name <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="steparrow-gen-info-fname-input" placeholder="Enter first name">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-4">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="steparrow-gen-info-sname-input">Second name <span class="text-danger">*</span></label>
                                                        <input type="email" class="form-control" id="steparrow-gen-info-sname-input" placeholder="Enter second name">
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="steparrow-gen-info-lname-input">Last name <span class="text-danger">*</span></label>
                                                        <input type="email" class="form-control" id="steparrow-gen-info-lname-input" placeholder="Enter last name">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="cleave-hr-phone">Phone number <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="cleave-hr-phone" placeholder="+255 xxx xxx xxxx">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="cleave-hr-alt-phone">Alternative number <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="cleave-hr-alt-phone" placeholder="+255 xxx xxx xxxx">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="steparrow-gen-info-lname-input">Relationship <span class="text-danger">*</span></label>
                                                        <select class="form-select" id="state">
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
                                                        <input type="text" class="form-control" id="steparrow-gen-info-lname-input" placeholder="Enter physical address">
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
                                                    <p>Medical Qualification</p>
                                                    <hr>
                                                </div>

                                                <!-- Medical qualification section -->
                                                <div class="row mt-3">
                                                    <div class="col-xl-12">
                                                        <div id="newlink">
                                                            <div id="1">
                                                                
                                                            <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="mb-4">
                                                                        <label class="form-label" for="steparrow-gen-info-fname-input"
                                                                            >University/Collage</label
                                                                        ><input
                                                                            type="text"
                                                                            class="form-control"
                                                                            id="degreeTitle"
                                                                            placeholder="Enter University/Collage name"
                                                                        />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-4">
                                                                        <label class="form-label" for="steparrow-gen-info-sname-input"
                                                                            >Education level</label
                                                                        ><select class="form-select" id="qualification" name="qualification">
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
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-4">
                                                                        <label class="form-label" for="steparrow-gen-info-lname-input"
                                                                            >Studied Course</label
                                                                        ><input
                                                                            type="text"
                                                                            class="form-control"
                                                                            id="steparrow-gen-info-fname-input"
                                                                            placeholder="Enter studied cause"
                                                                        />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2">
                                                                        <div class="mb-4">
                                                                        <label for="passedYear" class="form-label">Start</label
                                                                        ><select class="form-control" data-trigger name="passedYear">
                                                                            <option value="">Year</option>
                                                                            <option value="1970">1970</option>
                                                                            <option value="1971">1971</option>
                                                                            <option value="1972">1972</option>
                                                                            <option value="1973">1973</option>
                                                                            <option value="1974">1974</option>
                                                                            <option value="1975">1975</option>
                                                                            <option value="1976">1976</option>
                                                                            <option value="1977">1977</option>
                                                                            <option value="1978">1978</option>
                                                                            <option value="1979">1979</option>
                                                                            <option value="1980">1980</option>
                                                                            <option value="1981">1981</option>
                                                                            <option value="1982">1982</option>
                                                                            <option value="1983">1983</option>
                                                                            <option value="1984">1984</option>
                                                                            <option value="1985">1985</option>
                                                                            <option value="1986">1986</option>
                                                                            <option value="1987">1987</option>
                                                                            <option value="1988">1988</option>
                                                                            <option value="1989">1989</option>
                                                                            <option value="1990">1990</option>
                                                                            <option value="1991">1991</option>
                                                                            <option value="1992">1992</option>
                                                                            <option value="1993">1993</option>
                                                                            <option value="1994">1994</option>
                                                                            <option value="1995">1995</option>
                                                                            <option value="1996">1996</option>
                                                                            <option value="1997">1997</option>
                                                                            <option value="1998">1998</option>
                                                                            <option value="1999">1999</option>
                                                                            <option value="2000">2000</option>
                                                                            <option value="2001">2001</option>
                                                                            <option value="2002">2002</option>
                                                                            <option value="2003">2003</option>
                                                                            <option value="2004">2004</option>
                                                                            <option value="2005">2005</option>
                                                                            <option value="2006">2006</option>
                                                                            <option value="2007">2007</option>
                                                                            <option value="2008">2008</option>
                                                                            <option value="2009">2009</option>
                                                                            <option value="2010">2010</option>
                                                                            <option value="2011">2011</option>
                                                                            <option value="2012">2012</option>
                                                                            <option value="2013">2013</option>
                                                                            <option value="2014">2014</option>
                                                                            <option value="2015">2015</option>
                                                                            <option value="2016">2016</option>
                                                                            <option value="2017">2017</option>
                                                                            <option value="2018">2018</option>
                                                                            <option value="2019">2019</option>
                                                                            <option value="2020">2020</option>
                                                                            <option value="2021">2021</option>
                                                                            <option value="2022">2022</option>
                                                                            <option value="2023">2023</option>
                                                                        </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2">
                                                                        <div class="mb-4">
                                                                        <label for="passedYear" class="form-label">Finish</label
                                                                        ><select class="form-control" data-trigger name="passedYear">
                                                                            <option value="">Year</option>
                                                                            <option value="1970">1970</option>
                                                                            <option value="1971">1971</option>
                                                                            <option value="1972">1972</option>
                                                                            <option value="1973">1973</option>
                                                                            <option value="1974">1974</option>
                                                                            <option value="1975">1975</option>
                                                                            <option value="1976">1976</option>
                                                                            <option value="1977">1977</option>
                                                                            <option value="1978">1978</option>
                                                                            <option value="1979">1979</option>
                                                                            <option value="1980">1980</option>
                                                                            <option value="1981">1981</option>
                                                                            <option value="1982">1982</option>
                                                                            <option value="1983">1983</option>
                                                                            <option value="1984">1984</option>
                                                                            <option value="1985">1985</option>
                                                                            <option value="1986">1986</option>
                                                                            <option value="1987">1987</option>
                                                                            <option value="1988">1988</option>
                                                                            <option value="1989">1989</option>
                                                                            <option value="1990">1990</option>
                                                                            <option value="1991">1991</option>
                                                                            <option value="1992">1992</option>
                                                                            <option value="1993">1993</option>
                                                                            <option value="1994">1994</option>
                                                                            <option value="1995">1995</option>
                                                                            <option value="1996">1996</option>
                                                                            <option value="1997">1997</option>
                                                                            <option value="1998">1998</option>
                                                                            <option value="1999">1999</option>
                                                                            <option value="2000">2000</option>
                                                                            <option value="2001">2001</option>
                                                                            <option value="2002">2002</option>
                                                                            <option value="2003">2003</option>
                                                                            <option value="2004">2004</option>
                                                                            <option value="2005">2005</option>
                                                                            <option value="2006">2006</option>
                                                                            <option value="2007">2007</option>
                                                                            <option value="2008">2008</option>
                                                                            <option value="2009">2009</option>
                                                                            <option value="2010">2010</option>
                                                                            <option value="2011">2011</option>
                                                                            <option value="2012">2012</option>
                                                                            <option value="2013">2013</option>
                                                                            <option value="2014">2014</option>
                                                                            <option value="2015">2015</option>
                                                                            <option value="2016">2016</option>
                                                                            <option value="2017">2017</option>
                                                                            <option value="2018">2018</option>
                                                                            <option value="2019">2019</option>
                                                                            <option value="2020">2020</option>
                                                                            <option value="2021">2021</option>
                                                                            <option value="2022">2022</option>
                                                                            <option value="2023">2023</option>
                                                                        </select>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    </div>

                                                                <!--end row-->
                                                            </div>
                                                        </div>

                                                        <div id="newForm" style="display: none;"></div>

                                                        <div class="col-lg-12">
                                                            <div class="hstack gap-2">
                                                                <a href="javascript:new_link()" class="btn btn-primary no-border-radius">Add qualification</a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div><!--end col-->
                                                </div><!--end col-->
                                            </div>
                                            <!-- Medical qualification end -->


                                                <div class="d-flex align-items-start gap-3 mt-5">
                                                    <button type="button" class="btn btn-light btn-label no-border-radius previestab" data-previous="steparrow-gen-info-tab"><i class="ri-arrow-left-line label-icon align-middle fs-lg me-2"></i> Back </button>
                                                    <button type="button" class="btn btn-success btn-label right ms-auto no-border-radius nexttab nexttab" data-nexttab="pills-experience-tab"><i class="ri-arrow-right-line label-icon align-middle fs-lg ms-2"></i>Finish</button>
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
                <?php include 'includes/footer.php';?>
                <!-- footer ends -->

            </div>
            <!-- end main content-->

        </div>
            <!-- layout-wrapper ends -->


            <!--start back-to-top-->
            <?php include 'includes/back-button.php'; ?>
            <!--end back-to-top-->

            <!--preloader starts-->
            <?php include 'includes/preloader.php';?>
            <!-- preloader ends -->

            <!-- theme Settings starts -->
            <?php include 'includes/theme-settings.php';
            ?>
            <!-- theme settings ends -->

            <!-- javascript links starts  -->
            <?php include 'includes/javascripts.php';?>

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
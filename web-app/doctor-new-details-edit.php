<?php include 'connect/database.php';?>

<!doctype html>

<html lang="en" data-layout="vertical" data-layout-style="detached" data-sidebar="dark" data-sidebar-size="lg" data-preloader="enable" data-theme="default" data-bs-theme="light">

<!-- head starts -->
<?php include 'includes/head.php'; ?>
<script src="//cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
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
                                <h4 class="card-title mb-2 mt-1">Update doctor</h4>
                            </div><!-- end card header -->
                            <div class="card-body form-steps">
                                <form class="vertical-navs-step" action="connect/database.php" method="post">
                                    <div class="row gy-5">

                                        <div class="col-lg-3">
                                            <div class="nav flex-column custom-nav nav-pills" role="tablist" aria-orientation="vertical">
                                                <a href="doctor-new-details-edit.php">
                                                <button class="nav-link active" id="v-pills-bill-info-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bill-info" type="button" role="tab" aria-controls="v-pills-bill-info" aria-selected="true">
                                                    <span class="step-title me-2">
                                                        <i class="ri-close-circle-fill step-icon me-2"></i> Step 1
                                                    </span>
                                                    Details
                                                </button>
                                                </a>
                                                <a href="doctor-new-emergency-edit.php">
                                                <button class="nav-link active done" id="v-pills-bill-address-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bill-address" type="button" role="tab" aria-controls="v-pills-bill-address" aria-selected="false">
                                                    <span class="step-title me-2">
                                                        <i class="ri-close-circle-fill step-icon me-2"></i> Step 2
                                                    </span>
                                                    Emergency
                                                </button>
                                                </a>
                                                <a href="doctor-new-education-edit.php">
                                                <button class="nav-link active done" id="v-pills-payment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-payment" type="button" role="tab" aria-controls="v-pills-payment" aria-selected="false">
                                                    <span class="step-title me-2">
                                                        <i class="ri-close-circle-fill step-icon me-2"></i> Step 3
                                                    </span>
                                                    Education
                                                </button>
                                                </a>
                                            </div>
                                            <!-- end nav -->
                                        </div> <!-- end col-->

                                        <div class="col-lg-9">
                                            <div class="px-lg-4">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="v-pills-bill-info" role="tabpanel" aria-labelledby="v-pills-bill-info-tab">
                                                    
                                                    <form action="connect/database.php" method="post" enctype="multipart/form-data">
                                                        <div class="mb-4">
                                                            <h5>Personal details</h5>
                                                        </div>

                                                        <div>
                                                            <div class="row g-3">

                                                                <div class="mb-3">
                                                                    <label for="formFile" class="form-label text-muted">Profile picture</label>
                                                                    <input class="form-control" type="file" id="formFile">
                                                                </div>

                                                                    <div class="col-lg-4">
                                                                        <div class="mb-2">
                                                                            <label class="form-label text-muted" for="steparrow-gen-info-name-input">First name </label>
                                                                            <input type="text" data-value name="doctor_first_name" class="form-control" id="steparrow-gen-info-name-input" value="Karim">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-2">
                                                                            <label class="form-label text-muted" for="steparrow-gen-info-name-input">Second name </label>
                                                                            <input type="text" data-value name="doctor_second_name" class="form-control" id="steparrow-gen-info-name-input" value="Hadmi">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-2">
                                                                            <label class="form-label text-muted" for="steparrow-gen-info-name-input">Last name </label>
                                                                            <input type="text" data-value name="doctor_last_name" class="form-control" id="steparrow-gen-info-name-input" value="Mussa">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label text-muted" for="cleave-phone">Phone number </label>
                                                                            <div class="input-group">
                                                                            <span class="input-group-text">+255</span>
                                                                            <input type="text" data-value name="doctor_phone_number" class="form-control" id="cleave-phone" value="299323289320">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label mb-4x text-muted" for="cleave-alt-phone"></label>
                                                                            <div class="input-group">
                                                                            <span class="input-group-text">+255</span>
                                                                            <input type="text" data-value name="doctor_alt_phone_number" class="form-control" id="cleave-alt-phone" value="48948920323">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                
                                                                    <div class="row">
                                                                    <div class="col-lg-7">
                                                                        <div class="mb-3">
                                                                            <label class="form-label text-muted" for="steparrow-gen-info-email-input">Email address </label>
                                                                            <input type="email" data-value name="doctor_email" class="form-control" id="steparrow-gen-info-email-input" value="karimu@vodacom.com">
                                                                        </div>
                                                                    </div>
                                                                    </div>


                                                                <div class="row">
                                                                    <div class="col-lg-3">
                                                                        <div class="mb-2">
                                                                            <label class="form-label text-muted" for="cleave-phone">Gender </label>
                                                                            <div class="mb-2">
                                                                                <input class="form-check-input" checked value="Female" type="radio" data-value name="doctor_gender" id="flexRadioDefault1">
                                                                                <label class="form-check-label" for="flexRadioDefault1"> Female </label>
                                                                            </div>
                                                                            <input class="form-check-input" value="Male" type="radio" data-value name="doctor_gender" id="flexRadioDefault2">
                                                                            <label class="form-check-label" for="flexRadioDefault2"> Male </label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-4">
                                                                        <div class="mb-2">
                                                                            <label class="form-label text-muted" for="cleave-phone">Birth date </label>
                                                                            <input type="text" data-value name="doctor_birth_date" class="form-control" value="12-12-1990" id="cleave-date">
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="col-lg-5">
                                                                    <div class="mb-2">
                                                                        <label class="form-label text-muted" for="cleave-alt-phone">Nationality </label>
                                                                        <!-- Country names and Country Name -->
                                                                        <select class="form-select" id="country" data-value name="country">
                                                                            <option value="">Select country</option>
                                                                            <option selected value="Afghanistan">Afghanistan</option>
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

                                                                <div class="col-lg-7">
                                                                    <div class="mb-2">
                                                                        <label class="form-label text-muted" for="cleave-alt-phone">National ID </label>
                                                                        <input data-value name="doctor_national_id" type="text" class="form-control" id="cleave-alt-phone" value="938493843748034">
                                                                    </div>
                                                                </div>

                                                                <div class="col-6">
                                                                    <div class="mb-4">
                                                                        <label for="long" class="form-label text-muted">Map location</label>
                                                                        <input type="text" class="form-control" value="438">
                                                                        </div>
                                                                    </div>
                                                                    
                                                                <div class="col-6">
                                                                    <div class="mb-4">
                                                                    <label for="lats" class="form-label text-muted mb-4x"></label>
                                                                    <input type="text" class="form-control" value="493">
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                <div class="col-lg-7">
                                                                    <div class="mb-3">
                                                                        <label class="form-label text-muted" for="steparrow-gen-info-email-input">Languages </label>
                                                                        <select class="form-control" data-value name="doctor_languages" id="choices-multiple-remove-button" data-choices data-choices-removeItem data-value name="choices-multiple-remove-button" multiple>
                                                                            <option value="English" selected>English</option>
                                                                            <option value="Swahili" selected >Swahili</option>
                                                                            <option value="French">French</option>
                                                                            <option value="German">German</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label text-muted" for="steparrow-gen-info-email-input">Physical address </label>
                                                                    <input type="email" data-value name="doctor_physical" class="form-control" id="steparrow-gen-info-email-input" value="Masaki Dar es salaam, Tanzania">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label mb-3 text-muted" for="steparrow-gen-info-email-input">Biography </label>
                                                                    <textarea name="editor1" id="editor1"></textarea>
                                                                    <textarea name="doctor_bio" style="display: none;"></textarea>
                                                                </div><!-- end card-body -->
                                                            </div>

                                                            </div>
                                                        </div>

                                                        <div class="d-flex align-items-start gap-3 mt-4">
                                                            <button type="submit" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-bill-address-tab"><i class="ri-arrow-up-line label-icon align-middle fs-lg ms-2"></i>Update</button>
                                                        </div>
                                                    </form>

                                                    </div>
                                                    <!-- end tab pane -->
                                                <!-- end of form -->

                                                </div>
                                                <!-- end tab content -->
                                            </div>
                                        </div>
                                        <!-- end col -->

                                    </div>
                                    <!-- end row -->
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

    <!-- Learning instructor create init js -->
    <script src="assets/js/pages/learning-education-create.init.js"></script>

    <!-- ckeditor -->
    <script src="assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('editor1');
    </script>

    <!-- javascript links ends -->

</body>

</html>
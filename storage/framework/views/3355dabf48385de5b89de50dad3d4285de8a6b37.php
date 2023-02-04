<?php $__env->startSection('content'); ?>

<head>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>


    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>
<section class="main-student-profile">
    <div class="container-fluid">
        <div id="success_messae" class="alert alert-success" style="display: none;">
            <strong><span style="color: black;"></span></strong>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="stepwizard" id="stepwizard">
                    <div class="stepwizard-row setup-panel">
                        <div class="stepwizard-step">
                            <a href="#step-1" class="btn btn-primary">
                                General Information <i class="fa-solid fa-circle-check" id="green-color"></i>
                            </a>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#step-2" class="btn btn-default" disabled="disabled">
                                Education History <i class="fa-solid fa-circle-info" id="red"></i>
                            </a>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#step-3" class="btn btn-default" disabled="disabled">
                                Test Scores <i class="fa-solid fa-circle-check" id="green-color"></i>
                            </a>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#step-4" class="btn btn-default" disabled="disabled">
                                Background Information <i class="fa-solid fa-circle-info" id="red"></i>
                            </a>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#step-5" class="btn btn-default" disabled="disabled">
                                Upload Documents <i class="fa-solid fa-circle-check" id="green-color"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-white alert-dismissible fade show" role="alert">
                    <p> <i class="fa-solid fa-bell"></i> You should check in on some of those fields below. </p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>

        <div class="row mt-md-3">
            <div class="col-md-12">
                <div class="setup-content" id="step-1">
                    <h5 class="heading-registration">Registration Date: May 12th, 2022</h5>
                    <div class="card p-2">
                        <form id="form1">
                            <div class="card-body">
                                <div class="personal-information">
                                    <h4>Personal Information</h4>
                                    <h5>(As indicated on your passport)</h5>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> First Name <span class="red">*</span> </label>
                                                <input name="first_name" id="first_name" type="text" class="form-control" placeholder="Enter First Name...">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Middle Name </label>
                                                <input name="middle_name" id="middle_name" type="text" class="form-control" placeholder="Enter Middle Name...">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Last Name </label>
                                                <input name="last_name" id="last_name" type="text" class="form-control" placeholder="Enter Last Name...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-md-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Date of Birth <span class="red">*</span> </label>
                                                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> First Language <span class="red">*</span> </label>
                                                <input name="first_language" id="first_language" type="text" class="form-control" placeholder="Enter First Language ...">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country of Citizenship <span class="red">*</span> </label>
                                                <select name="country_of_citizenship" id="country_of_citizenship" class="form-select" aria-label="Default select example">
                                                    <option value="">Select Country of Citizenship</option>
                                                    <option value="Afghanistan" <?php if(old('country_of_citizenship')=="Afghanistan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Afghanistan</option>
                                                    <option value="Aland Islands" <?php if(old('country_of_citizenship')=="Aland Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Aland Islands</option>
                                                    <option value="Albania" <?php if(old('country_of_citizenship')=="Albania" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Albania</option>
                                                    <option value="Algeria" <?php if(old('country_of_citizenship')=="Algeria" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Algeria</option>
                                                    <option value="American Samoa" <?php if(old('country_of_citizenship')=="American Samoa" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>American Samoa</option>
                                                    <option value="Andorra" <?php if(old('country_of_citizenship')=="Andorra" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Andorra</option>
                                                    <option value="Angola" <?php if(old('country_of_citizenship')=="Angola" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Angola</option>
                                                    <option value="Anguilla" <?php if(old('country_of_citizenship')=="Anguilla" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Anguilla</option>
                                                    <option value="Antarctica" <?php if(old('country_of_citizenship')=="Antarctica" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Antarctica</option>
                                                    <option value="Antigua and Barbuda" <?php if(old('country_of_citizenship')=="Antigua and Barbuda" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Antigua and Barbuda</option>
                                                    <option value="Argentina" <?php if(old('country_of_citizenship')=="Argentina" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Argentina</option>
                                                    <option value="Armenia" <?php if(old('country_of_citizenship')=="Armenia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Armenia</option>
                                                    <option value="Aruba" <?php if(old('country_of_citizenship')=="Aruba" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Aruba</option>
                                                    <option value="Australia" <?php if(old('country_of_citizenship')=="Australia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Australia</option>
                                                    <option value="Austria" <?php if(old('country_of_citizenship')=="Austria" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Austria</option>
                                                    <option value="Azerbaijan" <?php if(old('country_of_citizenship')=="Azerbaijan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Azerbaijan</option>
                                                    <option value="Bahamas" <?php if(old('country_of_citizenship')=="Bahamas" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bahamas</option>
                                                    <option value="Bahrain" <?php if(old('country_of_citizenship')=="Bahrain" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bahrain</option>
                                                    <option value="Bangladesh" <?php if(old('country_of_citizenship')=="Bangladesh" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bangladesh</option>
                                                    <option value="Barbados" <?php if(old('country_of_citizenship')=="Barbados" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Barbados</option>
                                                    <option value="Belarus" <?php if(old('country_of_citizenship')=="Belarus" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Belarus</option>
                                                    <option value="Belgium" <?php if(old('country_of_citizenship')=="Belgium" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Belgium</option>
                                                    <option value="Belize" <?php if(old('country_of_citizenship')=="Belize" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Belize</option>
                                                    <option value="Benin" <?php if(old('country_of_citizenship')=="Benin" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Benin</option>
                                                    <option value="Bermuda" <?php if(old('country_of_citizenship')=="Bermuda" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bermuda</option>
                                                    <option value="Bhutan" <?php if(old('country_of_citizenship')=="Bhutan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bhutan</option>
                                                    <option value="Bolivia" <?php if(old('country_of_citizenship')=="Bolivia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bolivia</option>
                                                    <option value="Bonaire, Sint Eustatius and Saba" <?php if(old('country_of_citizenship')=="Bonaire, Sint Eustatius and Saba" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bonaire, Sint Eustatius and Saba</option>
                                                    <option value="Bosnia and Herzegovina" <?php if(old('country_of_citizenship')=="Bosnia and Herzegovina" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bosnia and Herzegovina</option>
                                                    <option value="Botswana" <?php if(old('country_of_citizenship')=="Botswana" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Botswana</option>
                                                    <option value="Bouvet Island" <?php if(old('country_of_citizenship')=="Bouvet Island" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bouvet Island</option>
                                                    <option value="Brazil" <?php if(old('country_of_citizenship')=="Brazil" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Brazil</option>
                                                    <option value="British Indian Ocean Territory" <?php if(old('country_of_citizenship')=="British Indian Ocean Territory" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>British Indian Ocean Territory</option>
                                                    <option value="Brunei Darussalam" <?php if(old('country_of_citizenship')=="Brunei Darussalam" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Brunei Darussalam</option>
                                                    <option value="Bulgaria" <?php if(old('country_of_citizenship')=="Bulgaria" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bulgaria</option>
                                                    <option value="Burkina Faso" <?php if(old('country_of_citizenship')=="Burkina Faso" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Burkina Faso</option>
                                                    <option value="Burundi" <?php if(old('country_of_citizenship')=="Burundi" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Burundi</option>
                                                    <option value="Cambodia" <?php if(old('country_of_citizenship')=="Cambodia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cambodia</option>
                                                    <option value="Cameroon" <?php if(old('country_of_citizenship')=="Cameroon" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cameroon</option>
                                                    <option value="Canada" <?php if(old('country_of_citizenship')=="Canada" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Canada</option>
                                                    <option value="Cape Verde" <?php if(old('country_of_citizenship')=="Cape Verde" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cape Verde</option>
                                                    <option value="Cayman Islands" <?php if(old('country_of_citizenship')=="Cayman Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cayman Islands</option>
                                                    <option value="Central African Republic" <?php if(old('country_of_citizenship')=="Central African Republic" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Central African Republic</option>
                                                    <option value="Chad" <?php if(old('country_of_citizenship')=="Chad" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Chad</option>
                                                    <option value="Chile" <?php if(old('country_of_citizenship')=="Chile" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Chile</option>
                                                    <option value="China" <?php if(old('country_of_citizenship')=="China" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>China</option>
                                                    <option value="Christmas Island" <?php if(old('country_of_citizenship')=="Christmas Island" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Christmas Island</option>
                                                    <option value="Cocos (Keeling) Islands" <?php if(old('country_of_citizenship')=="Cocos (Keeling) Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cocos (Keeling) Islands</option>
                                                    <option value="Colombia" <?php if(old('country_of_citizenship')=="Colombia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Colombia</option>
                                                    <option value="Comoros" <?php if(old('country_of_citizenship')=="Comoros" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Comoros</option>
                                                    <option value="Congo" <?php if(old('country_of_citizenship')=="Congo" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Congo</option>
                                                    <option value="Congo, Democratic Republic of the Congo" <?php if(old('country_of_citizenship')=="Congo, Democratic Republic of the Congo" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Congo, Democratic Republic of the Congo</option>
                                                    <option value="Cook Islands" <?php if(old('country_of_citizenship')=="Cook Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cook Islands</option>
                                                    <option value="Costa Rica" <?php if(old('country_of_citizenship')=="Costa Rica" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Costa Rica</option>
                                                    <option value="Cote D'Ivoire" <?php if(old('country_of_citizenship')=="Cote D'Ivoire" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cote D'Ivoire</option>
                                                    <option value="Croatia" <?php if(old('country_of_citizenship')=="Croatia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Croatia</option>
                                                    <option value="Cuba" <?php if(old('country_of_citizenship')=="Cuba" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cuba</option>
                                                    <option value="Curacao" <?php if(old('country_of_citizenship')=="Curacao" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Curacao</option>
                                                    <option value="Cyprus" <?php if(old('country_of_citizenship')=="Cyprus" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cyprus</option>
                                                    <option value="Czech Republic" <?php if(old('country_of_citizenship')=="Czech Republic" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Czech Republic</option>
                                                    <option value="Denmark" <?php if(old('country_of_citizenship')=="Denmark" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Denmark</option>
                                                    <option value="Djibouti" <?php if(old('country_of_citizenship')=="Djibouti" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Djibouti</option>
                                                    <option value="Dominica" <?php if(old('country_of_citizenship')=="Dominica" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Dominica</option>
                                                    <option value="Dominican Republic" <?php if(old('country_of_citizenship')=="Dominican Republic" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Dominican Republic</option>
                                                    <option value="Ecuador" <?php if(old('country_of_citizenship')=="Ecuador" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Ecuador</option>
                                                    <option value="Egypt" <?php if(old('country_of_citizenship')=="Egypt" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Egypt</option>
                                                    <option value="El Salvador" <?php if(old('country_of_citizenship')=="El Salvador" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>El Salvador</option>
                                                    <option value="Equatorial Guinea" <?php if(old('country_of_citizenship')=="Equatorial Guinea" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Equatorial Guinea</option>
                                                    <option value="Eritrea" <?php if(old('country_of_citizenship')=="Eritrea" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Eritrea</option>
                                                    <option value="Estonia" <?php if(old('country_of_citizenship')=="Estonia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Estonia</option>
                                                    <option value="Ethiopia" <?php if(old('country_of_citizenship')=="Ethiopia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Ethiopia</option>
                                                    <option value="Falkland Islands (Malvinas)" <?php if(old('country_of_citizenship')=="Falkland Islands (Malvinas)" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Falkland Islands (Malvinas)</option>
                                                    <option value="Faroe Islands" <?php if(old('country_of_citizenship')=="Faroe Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Faroe Islands</option>
                                                    <option value="Fiji" <?php if(old('country_of_citizenship')=="Fiji" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Fiji</option>
                                                    <option value="Finland" <?php if(old('country_of_citizenship')=="Finland" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Finland</option>
                                                    <option value="France" <?php if(old('country_of_citizenship')=="France" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>France</option>
                                                    <option value="French Guiana" <?php if(old('country_of_citizenship')=="French Guiana" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>French Guiana</option>
                                                    <option value="French Polynesia" <?php if(old('country_of_citizenship')=="French Polynesia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>French Polynesia</option>
                                                    <option value="French Southern Territories" <?php if(old('country_of_citizenship')=="French Southern Territories" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>French Southern Territories</option>
                                                    <option value="Gabon" <?php if(old('country_of_citizenship')=="Gabon" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Gabon</option>
                                                    <option value="Gambia" <?php if(old('country_of_citizenship')=="Gambia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Gambia</option>
                                                    <option value="Georgia" <?php if(old('country_of_citizenship')=="Georgia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Georgia</option>
                                                    <option value="Germany" <?php if(old('country_of_citizenship')=="Germany" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Germany</option>
                                                    <option value="Ghana" <?php if(old('country_of_citizenship')=="Ghana" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Ghana</option>
                                                    <option value="Gibraltar" <?php if(old('country_of_citizenship')=="Gibraltar" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Gibraltar</option>
                                                    <option value="Greece" <?php if(old('country_of_citizenship')=="Greece" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Greece</option>
                                                    <option value="Greenland" <?php if(old('country_of_citizenship')=="Greenland" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Greenland</option>
                                                    <option value="Grenada" <?php if(old('country_of_citizenship')=="Grenada" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Grenada</option>
                                                    <option value="Guadeloupe" <?php if(old('country_of_citizenship')=="Guadeloupe" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Guadeloupe</option>
                                                    <option value="Guam" <?php if(old('country_of_citizenship')=="Guam" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Guam</option>
                                                    <option value="Guatemala" <?php if(old('country_of_citizenship')=="Guatemala" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Guatemala</option>
                                                    <option value="Guernsey" <?php if(old('country_of_citizenship')=="Guernsey" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Guernsey</option>
                                                    <option value="Guinea" <?php if(old('country_of_citizenship')=="Guinea" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Guinea</option>
                                                    <option value="Guinea-Bissau" <?php if(old('country_of_citizenship')=="Guinea-Bissau" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Guinea-Bissau</option>
                                                    <option value="Guyana" <?php if(old('country_of_citizenship')=="Guyana" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Guyana</option>
                                                    <option value="Haiti" <?php if(old('country_of_citizenship')=="Haiti" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Haiti</option>
                                                    <option value="Heard Island and Mcdonald Islands" <?php if(old('country_of_citizenship')=="Heard Island and Mcdonald Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Heard Island and Mcdonald Islands</option>
                                                    <option value="Holy See (Vatican City State)" <?php if(old('country_of_citizenship')=="Holy See (Vatican City State)" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Holy See (Vatican City State)</option>
                                                    <option value="Honduras" <?php if(old('country_of_citizenship')=="Honduras" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Honduras</option>
                                                    <option value="Hong Kong" <?php if(old('country_of_citizenship')=="Hong Kong" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Hong Kong</option>
                                                    <option value="Hungary" <?php if(old('country_of_citizenship')=="Hungary" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Hungary</option>
                                                    <option value="Iceland" <?php if(old('country_of_citizenship')=="Iceland" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Iceland</option>
                                                    <option value="India" <?php if(old('country_of_citizenship')=="India" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>India</option>
                                                    <option value="Indonesia" <?php if(old('country_of_citizenship')=="Indonesia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Indonesia</option>
                                                    <option value="Iran, Islamic Republic of" <?php if(old('country_of_citizenship')=="Iran, Islamic Republic of" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Iran, Islamic Republic of</option>
                                                    <option value="Iraq" <?php if(old('country_of_citizenship')=="Iraq" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Iraq</option>
                                                    <option value="Ireland" <?php if(old('country_of_citizenship')=="Ireland" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Ireland</option>
                                                    <option value="Isle of Man" <?php if(old('country_of_citizenship')=="Isle of Man" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Isle of Man</option>
                                                    <option value="Israel" <?php if(old('country_of_citizenship')=="Israel" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Israel</option>
                                                    <option value="Italy" <?php if(old('country_of_citizenship')=="Italy" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Italy</option>
                                                    <option value="Jamaica" <?php if(old('country_of_citizenship')=="Jamaica" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Jamaica</option>
                                                    <option value="Japan" <?php if(old('country_of_citizenship')=="Japan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Japan</option>
                                                    <option value="Jersey" <?php if(old('country_of_citizenship')=="Jersey" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Jersey</option>
                                                    <option value="Jordan" <?php if(old('country_of_citizenship')=="Jordan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Jordan</option>
                                                    <option value="Kazakhstan" <?php if(old('country_of_citizenship')=="Kazakhstan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Kazakhstan</option>
                                                    <option value="Kenya" <?php if(old('country_of_citizenship')=="Kenya" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Kenya</option>
                                                    <option value="Kiribati" <?php if(old('country_of_citizenship')=="Kiribati" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Kiribati</option>
                                                    <option value="Korea, Democratic People's Republic of" <?php if(old('country_of_citizenship')=="Korea, Democratic People's Republic of" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Korea, Democratic People's Republic of</option>
                                                    <option value="Korea, Republic of" <?php if(old('country_of_citizenship')=="Korea, Republic of" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Korea, Republic of</option>
                                                    <option value="Kosovo" <?php if(old('country_of_citizenship')=="Kosovo" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Kosovo</option>
                                                    <option value="Kuwait" <?php if(old('country_of_citizenship')=="Kuwait" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Kuwait</option>
                                                    <option value="Kyrgyzstan" <?php if(old('country_of_citizenship')=="Kyrgyzstan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Kyrgyzstan</option>
                                                    <option value="Lao People's Democratic Republic" <?php if(old('country_of_citizenship')=="Lao People's Democratic Republic" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Lao People's Democratic Republic</option>
                                                    <option value="Latvia" <?php if(old('country_of_citizenship')=="Latvia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Latvia</option>
                                                    <option value="Lebanon" <?php if(old('country_of_citizenship')=="Lebanon" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Lebanon</option>
                                                    <option value="Lesotho" <?php if(old('country_of_citizenship')=="Lesotho" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Lesotho</option>
                                                    <option value="Liberia" <?php if(old('country_of_citizenship')=="Liberia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Liberia</option>
                                                    <option value="Libyan Arab Jamahiriya" <?php if(old('country_of_citizenship')=="Libyan Arab Jamahiriya" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Libyan Arab Jamahiriya</option>
                                                    <option value="Liechtenstein" <?php if(old('country_of_citizenship')=="Liechtenstein" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Liechtenstein</option>
                                                    <option value="Lithuania" <?php if(old('country_of_citizenship')=="Lithuania" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Lithuania</option>
                                                    <option value="Luxembourg" <?php if(old('country_of_citizenship')=="Luxembourg" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Luxembourg</option>
                                                    <option value="Macao" <?php if(old('country_of_citizenship')=="Macao" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Macao</option>
                                                    <option value="Macedonia, the Former Yugoslav Republic of" <?php if(old('country_of_citizenship')=="Macedonia, the Former Yugoslav Republic of" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Macedonia, the Former Yugoslav Republic of</option>
                                                    <option value="Madagascar" <?php if(old('country_of_citizenship')=="Madagascar" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Madagascar</option>
                                                    <option value="Malawi" <?php if(old('country_of_citizenship')=="Malawi" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Malawi</option>
                                                    <option value="Malaysia" <?php if(old('country_of_citizenship')=="Malaysia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Malaysia</option>
                                                    <option value="Maldives" <?php if(old('country_of_citizenship')=="Maldives" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Maldives</option>
                                                    <option value="Mali" <?php if(old('country_of_citizenship')=="Mali" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mali</option>
                                                    <option value="Malta" <?php if(old('country_of_citizenship')=="Malta" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Malta</option>
                                                    <option value="Marshall Islands" <?php if(old('country_of_citizenship')=="Marshall Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Marshall Islands</option>
                                                    <option value="Martinique" <?php if(old('country_of_citizenship')=="Martinique" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Martinique</option>
                                                    <option value="Mauritania" <?php if(old('country_of_citizenship')=="Mauritania" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mauritania</option>
                                                    <option value="Mauritius" <?php if(old('country_of_citizenship')=="Mauritius" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mauritius</option>
                                                    <option value="Mayotte" <?php if(old('country_of_citizenship')=="Mayotte" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mayotte</option>
                                                    <option value="Mexico" <?php if(old('country_of_citizenship')=="Mexico" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mexico</option>
                                                    <option value="Micronesia, Federated States of" <?php if(old('country_of_citizenship')=="Micronesia, Federated States of" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Micronesia, Federated States of</option>
                                                    <option value="Moldova, Republic of" <?php if(old('country_of_citizenship')=="Moldova, Republic of" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Moldova, Republic of</option>
                                                    <option value="Monaco" <?php if(old('country_of_citizenship')=="Monaco" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Monaco</option>
                                                    <option value="Mongolia" <?php if(old('country_of_citizenship')=="Mongolia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mongolia</option>
                                                    <option value="Montenegro" <?php if(old('country_of_citizenship')=="Montenegro" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Montenegro</option>
                                                    <option value="Montserrat" <?php if(old('country_of_citizenship')=="Montserrat" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Montserrat</option>
                                                    <option value="Morocco" <?php if(old('country_of_citizenship')=="Morocco" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Morocco</option>
                                                    <option value="Mozambique" <?php if(old('country_of_citizenship')=="Mozambique" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mozambique</option>
                                                    <option value="Myanmar" <?php if(old('country_of_citizenship')=="Myanmar" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Myanmar</option>
                                                    <option value="Namibia" <?php if(old('country_of_citizenship')=="Namibia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Namibia</option>
                                                    <option value="Nauru" <?php if(old('country_of_citizenship')=="Nauru" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Nauru</option>
                                                    <option value="Nepal" <?php if(old('country_of_citizenship')=="Nepal" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Nepal</option>
                                                    <option value="Netherlands" <?php if(old('country_of_citizenship')=="Netherlands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Netherlands</option>
                                                    <option value="Netherlands Antilles" <?php if(old('country_of_citizenship')=="Netherlands Antilles" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Netherlands Antilles</option>
                                                    <option value="New Caledonia" <?php if(old('country_of_citizenship')=="New Caledonia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>New Caledonia</option>
                                                    <option value="New Zealand" <?php if(old('country_of_citizenship')=="New Zealand" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>New Zealand</option>
                                                    <option value="Nicaragua" <?php if(old('country_of_citizenship')=="Nicaragua" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Nicaragua</option>
                                                    <option value="Niger" <?php if(old('country_of_citizenship')=="Niger" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Niger</option>
                                                    <option value="Nigeria" <?php if(old('country_of_citizenship')=="Nigeria" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Nigeria</option>
                                                    <option value="Niue" <?php if(old('country_of_citizenship')=="Niue" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Niue</option>
                                                    <option value="Norfolk Island" <?php if(old('country_of_citizenship')=="Norfolk Island" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Norfolk Island</option>
                                                    <option value="Northern Mariana Islands" <?php if(old('country_of_citizenship')=="Northern Mariana Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Northern Mariana Islands</option>
                                                    <option value="Norway" <?php if(old('country_of_citizenship')=="Norway" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Norway</option>
                                                    <option value="Oman" <?php if(old('country_of_citizenship')=="Oman" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Oman</option>
                                                    <option value="Pakistan" <?php if(old('country_of_citizenship')=="Pakistan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Pakistan</option>
                                                    <option value="Palau" <?php if(old('country_of_citizenship')=="Palau" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Palau</option>
                                                    <option value="Palestinian Territory, Occupied" <?php if(old('country_of_citizenship')=="Palestinian Territory, Occupied" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Palestinian Territory, Occupied</option>
                                                    <option value="Panama" <?php if(old('country_of_citizenship')=="Panama" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Panama</option>
                                                    <option value="Papua New Guinea" <?php if(old('country_of_citizenship')=="Papua New Guinea" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Papua New Guinea</option>
                                                    <option value="Paraguay" <?php if(old('country_of_citizenship')=="Paraguay" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Paraguay</option>
                                                    <option value="Peru" <?php if(old('country_of_citizenship')=="Peru" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Peru</option>
                                                    <option value="Philippines" <?php if(old('country_of_citizenship')=="Philippines" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Philippines</option>
                                                    <option value="Pitcairn" <?php if(old('country_of_citizenship')=="Pitcairn" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Pitcairn</option>
                                                    <option value="Poland" <?php if(old('country_of_citizenship')=="Poland" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Poland</option>
                                                    <option value="Portugal" <?php if(old('country_of_citizenship')=="Portugal" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Portugal</option>
                                                    <option value="Puerto Rico" <?php if(old('country_of_citizenship')=="Puerto Rico" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Puerto Rico</option>
                                                    <option value="Qatar" <?php if(old('country_of_citizenship')=="Qatar" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Qatar</option>
                                                    <option value="Reunion" <?php if(old('country_of_citizenship')=="Reunion" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Reunion</option>
                                                    <option value="Romania" <?php if(old('country_of_citizenship')=="Romania" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Romania</option>
                                                    <option value="Russian Federation" <?php if(old('country_of_citizenship')=="Russian Federation" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Russian Federation</option>
                                                    <option value="Rwanda" <?php if(old('country_of_citizenship')=="Rwanda" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Rwanda</option>
                                                    <option value="Saint Barthelemy" <?php if(old('country_of_citizenship')=="Saint Barthelemy" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saint Barthelemy</option>
                                                    <option value="Saint Helena" <?php if(old('country_of_citizenship')=="Saint Helena" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saint Helena</option>
                                                    <option value="Saint Kitts and Nevis" <?php if(old('country_of_citizenship')=="Saint Kitts and Nevis" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saint Kitts and Nevis</option>
                                                    <option value="Saint Lucia" <?php if(old('country_of_citizenship')=="Saint Lucia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saint Lucia</option>
                                                    <option value="Saint Martin" <?php if(old('country_of_citizenship')=="Saint Martin" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saint Martin</option>
                                                    <option value="Saint Pierre and Miquelon" <?php if(old('country_of_citizenship')=="Saint Pierre and Miquelon" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saint Pierre and Miquelon</option>
                                                    <option value="Saint Vincent and the Grenadines" <?php if(old('country_of_citizenship')=="Saint Vincent and the Grenadines" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saint Vincent and the Grenadines</option>
                                                    <option value="Samoa" <?php if(old('country_of_citizenship')=="Samoa" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Samoa</option>
                                                    <option value="San Marino" <?php if(old('country_of_citizenship')=="San Marino" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>San Marino</option>
                                                    <option value="Sao Tome and Principe" <?php if(old('country_of_citizenship')=="Sao Tome and Principe" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Sao Tome and Principe</option>
                                                    <option value="Saudi Arabia" <?php if(old('country_of_citizenship')=="Saudi Arabia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saudi Arabia</option>
                                                    <option value="Senegal" <?php if(old('country_of_citizenship')=="Senegal" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Senegal</option>
                                                    <option value="Serbia" <?php if(old('country_of_citizenship')=="Serbia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Serbia</option>
                                                    <option value="Serbia and Montenegro" <?php if(old('country_of_citizenship')=="Serbia and Montenegro" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Serbia and Montenegro</option>
                                                    <option value="Seychelles" <?php if(old('country_of_citizenship')=="Seychelles" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Seychelles</option>
                                                    <option value="Sierra Leone" <?php if(old('country_of_citizenship')=="Sierra Leone" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Sierra Leone</option>
                                                    <option value="Singapore" <?php if(old('country_of_citizenship')=="Singapore" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Singapore</option>
                                                    <option value="Sint Maarten" <?php if(old('country_of_citizenship')=="Sint Maarten" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Sint Maarten</option>
                                                    <option value="Slovakia" <?php if(old('country_of_citizenship')=="Slovakia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Slovakia</option>
                                                    <option value="Slovenia" <?php if(old('country_of_citizenship')=="Slovenia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Slovenia</option>
                                                    <option value="Solomon Islands" <?php if(old('country_of_citizenship')=="Solomon Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Solomon Islands</option>
                                                    <option value="Somalia" <?php if(old('country_of_citizenship')=="Somalia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Somalia</option>
                                                    <option value="South Africa" <?php if(old('country_of_citizenship')=="South Africa" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>South Africa</option>
                                                    <option value="South Georgia and the South Sandwich Islands" <?php if(old('country_of_citizenship')=="South Georgia and the South Sandwich Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>South Georgia and the South Sandwich Islands</option>
                                                    <option value="South Sudan" <?php if(old('country_of_citizenship')=="South Sudan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>South Sudan</option>
                                                    <option value="Spain" <?php if(old('country_of_citizenship')=="Spain" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Spain</option>
                                                    <option value="Sri Lanka" <?php if(old('country_of_citizenship')=="Sri Lanka" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Sri Lanka</option>
                                                    <option value="Sudan" <?php if(old('country_of_citizenship')=="Sudan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Sudan</option>
                                                    <option value="Suriname" <?php if(old('country_of_citizenship')=="Suriname" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Suriname</option>
                                                    <option value="Svalbard and Jan Mayen" <?php if(old('country_of_citizenship')=="Svalbard and Jan Mayen" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Svalbard and Jan Mayen</option>
                                                    <option value="Swaziland" <?php if(old('country_of_citizenship')=="Swaziland" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Swaziland</option>
                                                    <option value="Sweden" <?php if(old('country_of_citizenship')=="Sweden" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Sweden</option>
                                                    <option value="Switzerland" <?php if(old('country_of_citizenship')=="Switzerland" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Switzerland</option>
                                                    <option value="Syrian Arab Republic" <?php if(old('country_of_citizenship')=="Syrian Arab Republic" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Syrian Arab Republic</option>
                                                    <option value="Taiwan, Province of China" <?php if(old('country_of_citizenship')=="Taiwan, Province of China" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Taiwan, Province of China</option>
                                                    <option value="Tajikistan" <?php if(old('country_of_citizenship')=="Tajikistan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Tajikistan</option>
                                                    <option value="Tanzania, United Republic of" <?php if(old('country_of_citizenship')=="Tanzania, United Republic of" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Tanzania, United Republic of</option>
                                                    <option value="Thailand" <?php if(old('country_of_citizenship')=="Thailand" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Thailand</option>
                                                    <option value="Timor-Leste" <?php if(old('country_of_citizenship')=="Timor-Leste" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Timor-Leste</option>
                                                    <option value="Togo" <?php if(old('country_of_citizenship')=="Togo" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Togo</option>
                                                    <option value="Tokelau" <?php if(old('country_of_citizenship')=="Tokelau" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Tokelau</option>
                                                    <option value="Tonga" <?php if(old('country_of_citizenship')=="Tonga" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Tonga</option>
                                                    <option value="Trinidad and Tobago" <?php if(old('country_of_citizenship')=="Trinidad and Tobago" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Trinidad and Tobago</option>
                                                    <option value="Tunisia" <?php if(old('country_of_citizenship')=="Tunisia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Tunisia</option>
                                                    <option value="Turkey" <?php if(old('country_of_citizenship')=="Turkey" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Turkey</option>
                                                    <option value="Turkmenistan" <?php if(old('country_of_citizenship')=="Turkmenistan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Turkmenistan</option>
                                                    <option value="Turks and Caicos Islands" <?php if(old('country_of_citizenship')=="Turks and Caicos Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Turks and Caicos Islands</option>
                                                    <option value="Tuvalu" <?php if(old('country_of_citizenship')=="Tuvalu" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Tuvalu</option>
                                                    <option value="Uganda" <?php if(old('country_of_citizenship')=="Uganda" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Uganda</option>
                                                    <option value="Ukraine" <?php if(old('country_of_citizenship')=="Ukraine" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Ukraine</option>
                                                    <option value="United Arab Emirates" <?php if(old('country_of_citizenship')=="United Arab Emirates" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>United Arab Emirates</option>
                                                    <option value="United Kingdom" <?php if(old('country_of_citizenship')=="United Kingdom" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>United Kingdom</option>
                                                    <option value="United States" <?php if(old('country_of_citizenship')=="United States" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>United States</option>
                                                    <option value="United States Minor Outlying Islands" <?php if(old('country_of_citizenship')=="United States Minor Outlying Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>United States Minor Outlying Islands</option>
                                                    <option value="Uruguay" <?php if(old('country_of_citizenship')=="Uruguay" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Uruguay</option>
                                                    <option value="Uzbekistan" <?php if(old('country_of_citizenship')=="Uzbekistan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Uzbekistan</option>
                                                    <option value="Vanuatu" <?php if(old('country_of_citizenship')=="Vanuatu" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Vanuatu</option>
                                                    <option value="Venezuela" <?php if(old('country_of_citizenship')=="Venezuela" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Venezuela</option>
                                                    <option value="Viet Nam" <?php if(old('country_of_citizenship')=="Viet Nam" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Viet Nam</option>
                                                    <option value="Virgin Islands, British" <?php if(old('country_of_citizenship')=="Virgin Islands, British" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Virgin Islands, British</option>
                                                    <option value="Virgin Islands, U.s." <?php if(old('country_of_citizenship')=="Virgin Islands, U.s." ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Virgin Islands, U.s.</option>
                                                    <option value="Wallis and Futuna" <?php if(old('country_of_citizenship')=="Wallis and Futuna" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Wallis and Futuna</option>
                                                    <option value="Western Sahara" <?php if(old('country_of_citizenship')=="Western Sahara" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Western Sahara</option>
                                                    <option value="Yemen" <?php if(old('country_of_citizenship')=="Yemen" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Yemen</option>
                                                    <option value="Zambia" <?php if(old('country_of_citizenship')=="Zambia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Zambia</option>
                                                    <option value="Zimbabwe" <?php if(old('country_of_citizenship')=="Zimbabwe" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-md-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Passport Number
                                                    <i class="fa-solid fa-circle-info" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="We collect your passport information for identity verification purposes, your school or program of interest may require this information to process your application. If applicable, it may also be used for processing your visa."></i>
                                                    <span class="red">*</span>
                                                </label>
                                                <input name="passport_number" id="passport_number" type="tel" class="form-control" placeholder="Enter Passport Number...">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group radio-main">
                                                <label> Marital Status
                                                    <i class="fa-solid fa-circle-info" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="We collect information about your marital status because your school or program of interest may require this information to process your application."></i>
                                                    <span class="red">*</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="marital_status" value="Single" id="flexRadioDefault1" <?php echo e((old('marital_status') == 'Single') ? 'checked' : ''); ?> checked>
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Single
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="marital_status" value="Married" <?php echo e((old('marital_status') == 'Married') ? 'checked' : ''); ?> id="flexRadioDefault2">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Married
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group radio-main">
                                                <label> Gender <span class="red">*</span> </label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gender" value="Female" id="gender" <?php echo e((old('gender') == 'Female') ? 'checked' : ''); ?> checked>
                                                            <label class="form-check-label" for="flexRadioDefault3">
                                                                Female
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gender" value="Male" <?php echo e((old('gender') == 'Male') ? 'checked' : ''); ?> id="gender">
                                                            <label class="form-check-label" for="flexRadioDefault4">
                                                                Male
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="address-detail">
                                    <h4>Address Detail</h4>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label> Address <span class="red">*</span> </label>
                                                <input name="address" id="address" type="text" class="form-control" placeholder="Enter Full Address...">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> City/Town <span class="red">*</span> </label>
                                                <input name="city_town" id="city_town" type="text" class="form-control" placeholder="Enter City Name...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-md-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Country <span class="red">*</span> </label>
                                                <select name="country" id="country" class="form-select" aria-label="Default select example">
                                                    <option value="">Select Country</option>
                                                    <option value="Afghanistan" <?php if(old('country')=="Afghanistan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Afghanistan</option>
                                                    <option value="Aland Islands" <?php if(old('country')=="Aland Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Aland Islands</option>
                                                    <option value="Albania" <?php if(old('country')=="Albania" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Albania</option>
                                                    <option value="Algeria" <?php if(old('country')=="Algeria" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Algeria</option>
                                                    <option value="American Samoa" <?php if(old('country')=="American Samoa" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>American Samoa</option>
                                                    <option value="Andorra" <?php if(old('country')=="Andorra" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Andorra</option>
                                                    <option value="Angola" <?php if(old('country')=="Angola" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Angola</option>
                                                    <option value="Anguilla" <?php if(old('country')=="Anguilla" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Anguilla</option>
                                                    <option value="Antarctica" <?php if(old('country')=="Antarctica" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Antarctica</option>
                                                    <option value="Antigua and Barbuda" <?php if(old('country')=="Antigua and Barbuda" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Antigua and Barbuda</option>
                                                    <option value="Argentina" <?php if(old('country')=="Argentina" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Argentina</option>
                                                    <option value="Armenia" <?php if(old('country')=="Armenia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Armenia</option>
                                                    <option value="Aruba" <?php if(old('country')=="Aruba" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Aruba</option>
                                                    <option value="Australia" <?php if(old('country')=="Australia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Australia</option>
                                                    <option value="Austria" <?php if(old('country')=="Austria" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Austria</option>
                                                    <option value="Azerbaijan" <?php if(old('country')=="Azerbaijan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Azerbaijan</option>
                                                    <option value="Bahamas" <?php if(old('country')=="Bahamas" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bahamas</option>
                                                    <option value="Bahrain" <?php if(old('country')=="Bahrain" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bahrain</option>
                                                    <option value="Bangladesh" <?php if(old('country')=="Bangladesh" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bangladesh</option>
                                                    <option value="Barbados" <?php if(old('country')=="Barbados" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Barbados</option>
                                                    <option value="Belarus" <?php if(old('country')=="Belarus" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Belarus</option>
                                                    <option value="Belgium" <?php if(old('country')=="Belgium" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Belgium</option>
                                                    <option value="Belize" <?php if(old('country')=="Belize" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Belize</option>
                                                    <option value="Benin" <?php if(old('country')=="Benin" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Benin</option>
                                                    <option value="Bermuda" <?php if(old('country')=="Bermuda" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bermuda</option>
                                                    <option value="Bhutan" <?php if(old('country')=="Bhutan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bhutan</option>
                                                    <option value="Bolivia" <?php if(old('country')=="Bolivia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bolivia</option>
                                                    <option value="Bonaire, Sint Eustatius and Saba" <?php if(old('country')=="Bonaire, Sint Eustatius and Saba" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bonaire, Sint Eustatius and Saba</option>
                                                    <option value="Bosnia and Herzegovina" <?php if(old('country')=="Bosnia and Herzegovina" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bosnia and Herzegovina</option>
                                                    <option value="Botswana" <?php if(old('country')=="Botswana" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Botswana</option>
                                                    <option value="Bouvet Island" <?php if(old('country')=="Bouvet Island" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bouvet Island</option>
                                                    <option value="Brazil" <?php if(old('country')=="Brazil" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Brazil</option>
                                                    <option value="British Indian Ocean Territory" <?php if(old('country')=="British Indian Ocean Territory" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>British Indian Ocean Territory</option>
                                                    <option value="Brunei Darussalam" <?php if(old('country')=="Brunei Darussalam" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Brunei Darussalam</option>
                                                    <option value="Bulgaria" <?php if(old('country')=="Bulgaria" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bulgaria</option>
                                                    <option value="Burkina Faso" <?php if(old('country')=="Burkina Faso" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Burkina Faso</option>
                                                    <option value="Burundi" <?php if(old('country')=="Burundi" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Burundi</option>
                                                    <option value="Cambodia" <?php if(old('country')=="Cambodia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cambodia</option>
                                                    <option value="Cameroon" <?php if(old('country')=="Cameroon" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cameroon</option>
                                                    <option value="Canada" <?php if(old('country')=="Canada" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Canada</option>
                                                    <option value="Cape Verde" <?php if(old('country')=="Cape Verde" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cape Verde</option>
                                                    <option value="Cayman Islands" <?php if(old('country')=="Cayman Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cayman Islands</option>
                                                    <option value="Central African Republic" <?php if(old('country')=="Central African Republic" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Central African Republic</option>
                                                    <option value="Chad" <?php if(old('country')=="Chad" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Chad</option>
                                                    <option value="Chile" <?php if(old('country')=="Chile" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Chile</option>
                                                    <option value="China" <?php if(old('country')=="China" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>China</option>
                                                    <option value="Christmas Island" <?php if(old('country')=="Christmas Island" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Christmas Island</option>
                                                    <option value="Cocos (Keeling) Islands" <?php if(old('country')=="Cocos (Keeling) Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cocos (Keeling) Islands</option>
                                                    <option value="Colombia" <?php if(old('country')=="Colombia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Colombia</option>
                                                    <option value="Comoros" <?php if(old('country')=="Comoros" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Comoros</option>
                                                    <option value="Congo" <?php if(old('country')=="Congo" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Congo</option>
                                                    <option value="Congo, Democratic Republic of the Congo" <?php if(old('country')=="Congo, Democratic Republic of the Congo" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Congo, Democratic Republic of the Congo</option>
                                                    <option value="Cook Islands" <?php if(old('country')=="Cook Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cook Islands</option>
                                                    <option value="Costa Rica" <?php if(old('country')=="Costa Rica" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Costa Rica</option>
                                                    <option value="Cote D'Ivoire" <?php if(old('country')=="Cote D'Ivoire" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cote D'Ivoire</option>
                                                    <option value="Croatia" <?php if(old('country')=="Croatia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Croatia</option>
                                                    <option value="Cuba" <?php if(old('country')=="Cuba" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cuba</option>
                                                    <option value="Curacao" <?php if(old('country')=="Curacao" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Curacao</option>
                                                    <option value="Cyprus" <?php if(old('country')=="Cyprus" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cyprus</option>
                                                    <option value="Czech Republic" <?php if(old('country')=="Czech Republic" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Czech Republic</option>
                                                    <option value="Denmark" <?php if(old('country')=="Denmark" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Denmark</option>
                                                    <option value="Djibouti" <?php if(old('country')=="Djibouti" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Djibouti</option>
                                                    <option value="Dominica" <?php if(old('country')=="Dominica" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Dominica</option>
                                                    <option value="Dominican Republic" <?php if(old('country')=="Dominican Republic" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Dominican Republic</option>
                                                    <option value="Ecuador" <?php if(old('country')=="Ecuador" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Ecuador</option>
                                                    <option value="Egypt" <?php if(old('country')=="Egypt" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Egypt</option>
                                                    <option value="El Salvador" <?php if(old('country')=="El Salvador" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>El Salvador</option>
                                                    <option value="Equatorial Guinea" <?php if(old('country')=="Equatorial Guinea" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Equatorial Guinea</option>
                                                    <option value="Eritrea" <?php if(old('country')=="Eritrea" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Eritrea</option>
                                                    <option value="Estonia" <?php if(old('country')=="Estonia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Estonia</option>
                                                    <option value="Ethiopia" <?php if(old('country')=="Ethiopia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Ethiopia</option>
                                                    <option value="Falkland Islands (Malvinas)" <?php if(old('country')=="Falkland Islands (Malvinas)" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Falkland Islands (Malvinas)</option>
                                                    <option value="Faroe Islands" <?php if(old('country')=="Faroe Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Faroe Islands</option>
                                                    <option value="Fiji" <?php if(old('country')=="Fiji" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Fiji</option>
                                                    <option value="Finland" <?php if(old('country')=="Finland" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Finland</option>
                                                    <option value="France" <?php if(old('country')=="France" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>France</option>
                                                    <option value="French Guiana" <?php if(old('country')=="French Guiana" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>French Guiana</option>
                                                    <option value="French Polynesia" <?php if(old('country')=="French Polynesia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>French Polynesia</option>
                                                    <option value="French Southern Territories" <?php if(old('country')=="French Southern Territories" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>French Southern Territories</option>
                                                    <option value="Gabon" <?php if(old('country')=="Gabon" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Gabon</option>
                                                    <option value="Gambia" <?php if(old('country')=="Gambia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Gambia</option>
                                                    <option value="Georgia" <?php if(old('country')=="Georgia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Georgia</option>
                                                    <option value="Germany" <?php if(old('country')=="Germany" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Germany</option>
                                                    <option value="Ghana" <?php if(old('country')=="Ghana" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Ghana</option>
                                                    <option value="Gibraltar" <?php if(old('country')=="Gibraltar" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Gibraltar</option>
                                                    <option value="Greece" <?php if(old('country')=="Greece" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Greece</option>
                                                    <option value="Greenland" <?php if(old('country')=="Greenland" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Greenland</option>
                                                    <option value="Grenada" <?php if(old('country')=="Grenada" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Grenada</option>
                                                    <option value="Guadeloupe" <?php if(old('country')=="Guadeloupe" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Guadeloupe</option>
                                                    <option value="Guam" <?php if(old('country')=="Guam" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Guam</option>
                                                    <option value="Guatemala" <?php if(old('country')=="Guatemala" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Guatemala</option>
                                                    <option value="Guernsey" <?php if(old('country')=="Guernsey" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Guernsey</option>
                                                    <option value="Guinea" <?php if(old('country')=="Guinea" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Guinea</option>
                                                    <option value="Guinea-Bissau" <?php if(old('country')=="Guinea-Bissau" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Guinea-Bissau</option>
                                                    <option value="Guyana" <?php if(old('country')=="Guyana" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Guyana</option>
                                                    <option value="Haiti" <?php if(old('country')=="Haiti" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Haiti</option>
                                                    <option value="Heard Island and Mcdonald Islands" <?php if(old('country')=="Heard Island and Mcdonald Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Heard Island and Mcdonald Islands</option>
                                                    <option value="Holy See (Vatican City State)" <?php if(old('country')=="Holy See (Vatican City State)" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Holy See (Vatican City State)</option>
                                                    <option value="Honduras" <?php if(old('country')=="Honduras" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Honduras</option>
                                                    <option value="Hong Kong" <?php if(old('country')=="Hong Kong" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Hong Kong</option>
                                                    <option value="Hungary" <?php if(old('country')=="Hungary" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Hungary</option>
                                                    <option value="Iceland" <?php if(old('country')=="Iceland" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Iceland</option>
                                                    <option value="India" <?php if(old('country')=="India" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>India</option>
                                                    <option value="Indonesia" <?php if(old('country')=="Indonesia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Indonesia</option>
                                                    <option value="Iran, Islamic Republic of" <?php if(old('country')=="Iran, Islamic Republic of" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Iran, Islamic Republic of</option>
                                                    <option value="Iraq" <?php if(old('country')=="Iraq" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Iraq</option>
                                                    <option value="Ireland" <?php if(old('country')=="Ireland" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Ireland</option>
                                                    <option value="Isle of Man" <?php if(old('country')=="Isle of Man" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Isle of Man</option>
                                                    <option value="Israel" <?php if(old('country')=="Israel" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Israel</option>
                                                    <option value="Italy" <?php if(old('country')=="Italy" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Italy</option>
                                                    <option value="Jamaica" <?php if(old('country')=="Jamaica" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Jamaica</option>
                                                    <option value="Japan" <?php if(old('country')=="Japan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Japan</option>
                                                    <option value="Jersey" <?php if(old('country')=="Jersey" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Jersey</option>
                                                    <option value="Jordan" <?php if(old('country')=="Jordan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Jordan</option>
                                                    <option value="Kazakhstan" <?php if(old('country')=="Kazakhstan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Kazakhstan</option>
                                                    <option value="Kenya" <?php if(old('country')=="Kenya" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Kenya</option>
                                                    <option value="Kiribati" <?php if(old('country')=="Kiribati" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Kiribati</option>
                                                    <option value="Korea, Democratic People's Republic of" <?php if(old('country')=="Korea, Democratic People's Republic of" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Korea, Democratic People's Republic of</option>
                                                    <option value="Korea, Republic of" <?php if(old('country')=="Korea, Republic of" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Korea, Republic of</option>
                                                    <option value="Kosovo" <?php if(old('country')=="Kosovo" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Kosovo</option>
                                                    <option value="Kuwait" <?php if(old('country')=="Kuwait" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Kuwait</option>
                                                    <option value="Kyrgyzstan" <?php if(old('country')=="Kyrgyzstan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Kyrgyzstan</option>
                                                    <option value="Lao People's Democratic Republic" <?php if(old('country')=="Lao People's Democratic Republic" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Lao People's Democratic Republic</option>
                                                    <option value="Latvia" <?php if(old('country')=="Latvia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Latvia</option>
                                                    <option value="Lebanon" <?php if(old('country')=="Lebanon" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Lebanon</option>
                                                    <option value="Lesotho" <?php if(old('country')=="Lesotho" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Lesotho</option>
                                                    <option value="Liberia" <?php if(old('country')=="Liberia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Liberia</option>
                                                    <option value="Libyan Arab Jamahiriya" <?php if(old('country')=="Libyan Arab Jamahiriya" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Libyan Arab Jamahiriya</option>
                                                    <option value="Liechtenstein" <?php if(old('country')=="Liechtenstein" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Liechtenstein</option>
                                                    <option value="Lithuania" <?php if(old('country')=="Lithuania" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Lithuania</option>
                                                    <option value="Luxembourg" <?php if(old('country')=="Luxembourg" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Luxembourg</option>
                                                    <option value="Macao" <?php if(old('country')=="Macao" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Macao</option>
                                                    <option value="Macedonia, the Former Yugoslav Republic of" <?php if(old('country')=="Macedonia, the Former Yugoslav Republic of" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Macedonia, the Former Yugoslav Republic of</option>
                                                    <option value="Madagascar" <?php if(old('country')=="Madagascar" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Madagascar</option>
                                                    <option value="Malawi" <?php if(old('country')=="Malawi" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Malawi</option>
                                                    <option value="Malaysia" <?php if(old('country')=="Malaysia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Malaysia</option>
                                                    <option value="Maldives" <?php if(old('country')=="Maldives" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Maldives</option>
                                                    <option value="Mali" <?php if(old('country')=="Mali" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mali</option>
                                                    <option value="Malta" <?php if(old('country')=="Malta" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Malta</option>
                                                    <option value="Marshall Islands" <?php if(old('country')=="Marshall Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Marshall Islands</option>
                                                    <option value="Martinique" <?php if(old('country')=="Martinique" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Martinique</option>
                                                    <option value="Mauritania" <?php if(old('country')=="Mauritania" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mauritania</option>
                                                    <option value="Mauritius" <?php if(old('country')=="Mauritius" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mauritius</option>
                                                    <option value="Mayotte" <?php if(old('country')=="Mayotte" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mayotte</option>
                                                    <option value="Mexico" <?php if(old('country')=="Mexico" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mexico</option>
                                                    <option value="Micronesia, Federated States of" <?php if(old('country')=="Micronesia, Federated States of" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Micronesia, Federated States of</option>
                                                    <option value="Moldova, Republic of" <?php if(old('country')=="Moldova, Republic of" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Moldova, Republic of</option>
                                                    <option value="Monaco" <?php if(old('country')=="Monaco" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Monaco</option>
                                                    <option value="Mongolia" <?php if(old('country')=="Mongolia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mongolia</option>
                                                    <option value="Montenegro" <?php if(old('country')=="Montenegro" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Montenegro</option>
                                                    <option value="Montserrat" <?php if(old('country')=="Montserrat" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Montserrat</option>
                                                    <option value="Morocco" <?php if(old('country')=="Morocco" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Morocco</option>
                                                    <option value="Mozambique" <?php if(old('country')=="Mozambique" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mozambique</option>
                                                    <option value="Myanmar" <?php if(old('country')=="Myanmar" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Myanmar</option>
                                                    <option value="Namibia" <?php if(old('country')=="Namibia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Namibia</option>
                                                    <option value="Nauru" <?php if(old('country')=="Nauru" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Nauru</option>
                                                    <option value="Nepal" <?php if(old('country')=="Nepal" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Nepal</option>
                                                    <option value="Netherlands" <?php if(old('country')=="Netherlands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Netherlands</option>
                                                    <option value="Netherlands Antilles" <?php if(old('country')=="Netherlands Antilles" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Netherlands Antilles</option>
                                                    <option value="New Caledonia" <?php if(old('country')=="New Caledonia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>New Caledonia</option>
                                                    <option value="New Zealand" <?php if(old('country')=="New Zealand" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>New Zealand</option>
                                                    <option value="Nicaragua" <?php if(old('country')=="Nicaragua" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Nicaragua</option>
                                                    <option value="Niger" <?php if(old('country')=="Niger" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Niger</option>
                                                    <option value="Nigeria" <?php if(old('country')=="Nigeria" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Nigeria</option>
                                                    <option value="Niue" <?php if(old('country')=="Niue" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Niue</option>
                                                    <option value="Norfolk Island" <?php if(old('country')=="Norfolk Island" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Norfolk Island</option>
                                                    <option value="Northern Mariana Islands" <?php if(old('country')=="Northern Mariana Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Northern Mariana Islands</option>
                                                    <option value="Norway" <?php if(old('country')=="Norway" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Norway</option>
                                                    <option value="Oman" <?php if(old('country')=="Oman" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Oman</option>
                                                    <option value="Pakistan" <?php if(old('country')=="Pakistan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Pakistan</option>
                                                    <option value="Palau" <?php if(old('country')=="Palau" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Palau</option>
                                                    <option value="Palestinian Territory, Occupied" <?php if(old('country')=="Palestinian Territory, Occupied" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Palestinian Territory, Occupied</option>
                                                    <option value="Panama" <?php if(old('country')=="Panama" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Panama</option>
                                                    <option value="Papua New Guinea" <?php if(old('country')=="Papua New Guinea" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Papua New Guinea</option>
                                                    <option value="Paraguay" <?php if(old('country')=="Paraguay" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Paraguay</option>
                                                    <option value="Peru" <?php if(old('country')=="Peru" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Peru</option>
                                                    <option value="Philippines" <?php if(old('country')=="Philippines" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Philippines</option>
                                                    <option value="Pitcairn" <?php if(old('country')=="Pitcairn" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Pitcairn</option>
                                                    <option value="Poland" <?php if(old('country')=="Poland" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Poland</option>
                                                    <option value="Portugal" <?php if(old('country')=="Portugal" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Portugal</option>
                                                    <option value="Puerto Rico" <?php if(old('country')=="Puerto Rico" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Puerto Rico</option>
                                                    <option value="Qatar" <?php if(old('country')=="Qatar" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Qatar</option>
                                                    <option value="Reunion" <?php if(old('country')=="Reunion" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Reunion</option>
                                                    <option value="Romania" <?php if(old('country')=="Romania" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Romania</option>
                                                    <option value="Russian Federation" <?php if(old('country')=="Russian Federation" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Russian Federation</option>
                                                    <option value="Rwanda" <?php if(old('country')=="Rwanda" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Rwanda</option>
                                                    <option value="Saint Barthelemy" <?php if(old('country')=="Saint Barthelemy" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saint Barthelemy</option>
                                                    <option value="Saint Helena" <?php if(old('country')=="Saint Helena" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saint Helena</option>
                                                    <option value="Saint Kitts and Nevis" <?php if(old('country')=="Saint Kitts and Nevis" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saint Kitts and Nevis</option>
                                                    <option value="Saint Lucia" <?php if(old('country')=="Saint Lucia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saint Lucia</option>
                                                    <option value="Saint Martin" <?php if(old('country')=="Saint Martin" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saint Martin</option>
                                                    <option value="Saint Pierre and Miquelon" <?php if(old('country')=="Saint Pierre and Miquelon" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saint Pierre and Miquelon</option>
                                                    <option value="Saint Vincent and the Grenadines" <?php if(old('country')=="Saint Vincent and the Grenadines" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saint Vincent and the Grenadines</option>
                                                    <option value="Samoa" <?php if(old('country')=="Samoa" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Samoa</option>
                                                    <option value="San Marino" <?php if(old('country')=="San Marino" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>San Marino</option>
                                                    <option value="Sao Tome and Principe" <?php if(old('country')=="Sao Tome and Principe" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Sao Tome and Principe</option>
                                                    <option value="Saudi Arabia" <?php if(old('country')=="Saudi Arabia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saudi Arabia</option>
                                                    <option value="Senegal" <?php if(old('country')=="Senegal" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Senegal</option>
                                                    <option value="Serbia" <?php if(old('country')=="Serbia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Serbia</option>
                                                    <option value="Serbia and Montenegro" <?php if(old('country')=="Serbia and Montenegro" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Serbia and Montenegro</option>
                                                    <option value="Seychelles" <?php if(old('country')=="Seychelles" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Seychelles</option>
                                                    <option value="Sierra Leone" <?php if(old('country')=="Sierra Leone" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Sierra Leone</option>
                                                    <option value="Singapore" <?php if(old('country')=="Singapore" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Singapore</option>
                                                    <option value="Sint Maarten" <?php if(old('country')=="Sint Maarten" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Sint Maarten</option>
                                                    <option value="Slovakia" <?php if(old('country')=="Slovakia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Slovakia</option>
                                                    <option value="Slovenia" <?php if(old('country')=="Slovenia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Slovenia</option>
                                                    <option value="Solomon Islands" <?php if(old('country')=="Solomon Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Solomon Islands</option>
                                                    <option value="Somalia" <?php if(old('country')=="Somalia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Somalia</option>
                                                    <option value="South Africa" <?php if(old('country')=="South Africa" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>South Africa</option>
                                                    <option value="South Georgia and the South Sandwich Islands" <?php if(old('country')=="South Georgia and the South Sandwich Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>South Georgia and the South Sandwich Islands</option>
                                                    <option value="South Sudan" <?php if(old('country')=="South Sudan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>South Sudan</option>
                                                    <option value="Spain" <?php if(old('country')=="Spain" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Spain</option>
                                                    <option value="Sri Lanka" <?php if(old('country')=="Sri Lanka" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Sri Lanka</option>
                                                    <option value="Sudan" <?php if(old('country')=="Sudan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Sudan</option>
                                                    <option value="Suriname" <?php if(old('country')=="Suriname" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Suriname</option>
                                                    <option value="Svalbard and Jan Mayen" <?php if(old('country')=="Svalbard and Jan Mayen" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Svalbard and Jan Mayen</option>
                                                    <option value="Swaziland" <?php if(old('country')=="Swaziland" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Swaziland</option>
                                                    <option value="Sweden" <?php if(old('country')=="Sweden" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Sweden</option>
                                                    <option value="Switzerland" <?php if(old('country')=="Switzerland" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Switzerland</option>
                                                    <option value="Syrian Arab Republic" <?php if(old('country')=="Syrian Arab Republic" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Syrian Arab Republic</option>
                                                    <option value="Taiwan, Province of China" <?php if(old('country')=="Taiwan, Province of China" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Taiwan, Province of China</option>
                                                    <option value="Tajikistan" <?php if(old('country')=="Tajikistan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Tajikistan</option>
                                                    <option value="Tanzania, United Republic of" <?php if(old('country')=="Tanzania, United Republic of" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Tanzania, United Republic of</option>
                                                    <option value="Thailand" <?php if(old('country')=="Thailand" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Thailand</option>
                                                    <option value="Timor-Leste" <?php if(old('country')=="Timor-Leste" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Timor-Leste</option>
                                                    <option value="Togo" <?php if(old('country')=="Togo" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Togo</option>
                                                    <option value="Tokelau" <?php if(old('country')=="Tokelau" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Tokelau</option>
                                                    <option value="Tonga" <?php if(old('country')=="Tonga" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Tonga</option>
                                                    <option value="Trinidad and Tobago" <?php if(old('country')=="Trinidad and Tobago" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Trinidad and Tobago</option>
                                                    <option value="Tunisia" <?php if(old('country')=="Tunisia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Tunisia</option>
                                                    <option value="Turkey" <?php if(old('country')=="Turkey" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Turkey</option>
                                                    <option value="Turkmenistan" <?php if(old('country')=="Turkmenistan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Turkmenistan</option>
                                                    <option value="Turks and Caicos Islands" <?php if(old('country')=="Turks and Caicos Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Turks and Caicos Islands</option>
                                                    <option value="Tuvalu" <?php if(old('country')=="Tuvalu" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Tuvalu</option>
                                                    <option value="Uganda" <?php if(old('country')=="Uganda" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Uganda</option>
                                                    <option value="Ukraine" <?php if(old('country')=="Ukraine" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Ukraine</option>
                                                    <option value="United Arab Emirates" <?php if(old('country')=="United Arab Emirates" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>United Arab Emirates</option>
                                                    <option value="United Kingdom" <?php if(old('country')=="United Kingdom" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>United Kingdom</option>
                                                    <option value="United States" <?php if(old('country')=="United States" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>United States</option>
                                                    <option value="United States Minor Outlying Islands" <?php if(old('country')=="United States Minor Outlying Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>United States Minor Outlying Islands</option>
                                                    <option value="Uruguay" <?php if(old('country')=="Uruguay" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Uruguay</option>
                                                    <option value="Uzbekistan" <?php if(old('country')=="Uzbekistan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Uzbekistan</option>
                                                    <option value="Vanuatu" <?php if(old('country')=="Vanuatu" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Vanuatu</option>
                                                    <option value="Venezuela" <?php if(old('country')=="Venezuela" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Venezuela</option>
                                                    <option value="Viet Nam" <?php if(old('country')=="Viet Nam" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Viet Nam</option>
                                                    <option value="Virgin Islands, British" <?php if(old('country')=="Virgin Islands, British" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Virgin Islands, British</option>
                                                    <option value="Virgin Islands, U.s." <?php if(old('country')=="Virgin Islands, U.s." ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Virgin Islands, U.s.</option>
                                                    <option value="Wallis and Futuna" <?php if(old('country')=="Wallis and Futuna" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Wallis and Futuna</option>
                                                    <option value="Western Sahara" <?php if(old('country')=="Western Sahara" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Western Sahara</option>
                                                    <option value="Yemen" <?php if(old('country')=="Yemen" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Yemen</option>
                                                    <option value="Zambia" <?php if(old('country')=="Zambia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Zambia</option>
                                                    <option value="Zimbabwe" <?php if(old('country')=="Zimbabwe" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Province/State <span class="red">*</span> </label>
                                                <select name="province_state" id="province_state" class="form-select" aria-label="Default select example">
                                                    <option value="">Select State</option>
                                                    <option value="Andhra Pradesh" <?php if(old('province_state')=="Andhra Pradesh" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Andhra Pradesh</option>
                                                    <option value="Andaman and Nicobar Islands" <?php if(old('Andaman and Nicobar Islands')=="Zambia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Andaman and Nicobar Islands</option>
                                                    <option value="Arunachal Pradesh" <?php if(old('province_state')=="Arunachal Pradesh" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Arunachal Pradesh</option>
                                                    <option value="Assam" <?php if(old('province_state')=="Assam" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Assam</option>
                                                    <option value="Bihar" <?php if(old('province_state')=="Bihar" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bihar</option>
                                                    <option value="Chandigarh" <?php if(old('province_state')=="Chandigarh" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Chandigarh</option>
                                                    <option value="Chhattisgarh" <?php if(old('province_state')=="Chhattisgarh" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Chhattisgarh</option>
                                                    <option value="Dadar and Nagar Haveli" <?php if(old('province_state')=="Dadar and Nagar Haveli" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Dadar and Nagar Haveli</option>
                                                    <option value="Daman and Diu" <?php if(old('province_state')=="Daman and Diu" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Daman and Diu</option>
                                                    <option value="Delhi" <?php if(old('province_state')=="Delhi" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Delhi</option>
                                                    <option value="Lakshadweep" <?php if(old('province_state')=="Lakshadweep" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Lakshadweep</option>
                                                    <option value="Puducherry" <?php if(old('province_state')=="Puducherry" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Puducherry</option>
                                                    <option value="Goa" <?php if(old('province_state')=="Goa" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Goa</option>
                                                    <option value="Gujarat" <?php if(old('province_state')=="Gujarat" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Gujarat</option>
                                                    <option value="Haryana" <?php if(old('province_state')=="Haryana" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Haryana</option>
                                                    <option value="Himachal Pradesh" <?php if(old('province_state')=="Himachal Pradesh" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Himachal Pradesh</option>
                                                    <option value="Jammu and Kashmir" <?php if(old('province_state')=="Jammu and Kashmir" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Jammu and Kashmir</option>
                                                    <option value="Jharkhand" <?php if(old('province_state')=="Jharkhand" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Jharkhand</option>
                                                    <option value="Karnataka" <?php if(old('province_state')=="Karnataka" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Karnataka</option>
                                                    <option value="Kerala" <?php if(old('province_state')=="Kerala" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Kerala</option>
                                                    <option value="Madhya Pradesh" <?php if(old('province_state')=="Madhya Pradesh" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Madhya Pradesh</option>
                                                    <option value="Maharashtra" <?php if(old('province_state')=="Maharashtra" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Maharashtra</option>
                                                    <option value="Manipur" <?php if(old('province_state')=="Manipur" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Manipur</option>
                                                    <option value="Meghalaya" <?php if(old('province_state')=="Meghalaya" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Meghalaya</option>
                                                    <option value="Mizoram" <?php if(old('province_state')=="Mizoram" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mizoram</option>
                                                    <option value="Nagaland" <?php if(old('province_state')=="Nagaland" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Nagaland</option>
                                                    <option value="Odisha" <?php if(old('province_state')=="Odisha" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Odisha</option>
                                                    <option value="Punjab" <?php if(old('province_state')=="Punjab" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Punjab</option>
                                                    <option value="Rajasthan" <?php if(old('province_state')=="Rajasthan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Rajasthan</option>
                                                    <option value="Sikkim" <?php if(old('province_state')=="Sikkim" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Sikkim</option>
                                                    <option value="Tamil Nadu" <?php if(old('province_state')=="Tamil Nadu" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Tamil Nadu</option>
                                                    <option value="Telangana" <?php if(old('province_state')=="Telangana" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Telangana</option>
                                                    <option value="Tripura" <?php if(old('province_state')=="Tripura" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Tripura</option>
                                                    <option value="Uttar Pradesh" <?php if(old('province_state')=="Uttar Pradesh" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Uttar Pradesh</option>
                                                    <option value="Uttarakhand" <?php if(old('province_state')=="Uttarakhand" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Uttarakhand</option>
                                                    <option value="West Bengal" <?php if(old('province_state')=="West Bengal" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>West Bengal</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Postal/Zip Code <span class="red">*</span> </label>
                                                <input name="postal_code" id="postal_code" type="text" class="form-control" placeholder="Enter Pin Code...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Email <span class="red">*</span> </label>
                                                <input name="email" id="email" type="text" class="form-control" readonly placeholder="Enter Email...">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Phone Number <span class="red">*</span> </label>
                                                <input name="phone_number" id="phone_number" type="tel" class="form-control" placeholder="Enter Phone Number...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-md-3">
                                        <div class="col-md-12">
                                            <button id="gotoStep2" class="btn-next float-end" type="button">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="setup-content" id="step-2">
                    <form id="form2">
                        <div class="education-summary">
                            <div class="card p-2">
                                <div class="card-body">
                                    <h4>Education Summary</h4>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Country of Education <span class="red">*</span> </label>
                                                <select name="country_of_education" id="country_of_education" class="form-select" aria-label="Default select example">
                                                    <option value="">Select Country of Education</option>
                                                    <option value="Afghanistan" <?php if(old('country_of_education')=="Afghanistan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Afghanistan</option>
                                                    <option value="Aland Islands" <?php if(old('country_of_education')=="Aland Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Aland Islands</option>
                                                    <option value="Albania" <?php if(old('country_of_education')=="Albania" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Albania</option>
                                                    <option value="Algeria" <?php if(old('country_of_education')=="Algeria" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Algeria</option>
                                                    <option value="American Samoa" <?php if(old('country_of_education')=="American Samoa" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>American Samoa</option>
                                                    <option value="Andorra" <?php if(old('country_of_education')=="Andorra" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Andorra</option>
                                                    <option value="Angola" <?php if(old('country_of_education')=="Angola" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Angola</option>
                                                    <option value="Anguilla" <?php if(old('country_of_education')=="Anguilla" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Anguilla</option>
                                                    <option value="Antarctica" <?php if(old('country_of_education')=="Antarctica" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Antarctica</option>
                                                    <option value="Antigua and Barbuda" <?php if(old('country_of_education')=="Antigua and Barbuda" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Antigua and Barbuda</option>
                                                    <option value="Argentina" <?php if(old('country_of_education')=="Argentina" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Argentina</option>
                                                    <option value="Armenia" <?php if(old('country_of_education')=="Armenia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Armenia</option>
                                                    <option value="Aruba" <?php if(old('country_of_education')=="Aruba" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Aruba</option>
                                                    <option value="Australia" <?php if(old('country_of_education')=="Australia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Australia</option>
                                                    <option value="Austria" <?php if(old('country_of_education')=="Austria" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Austria</option>
                                                    <option value="Azerbaijan" <?php if(old('country_of_education')=="Azerbaijan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Azerbaijan</option>
                                                    <option value="Bahamas" <?php if(old('country_of_education')=="Bahamas" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bahamas</option>
                                                    <option value="Bahrain" <?php if(old('country_of_education')=="Bahrain" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bahrain</option>
                                                    <option value="Bangladesh" <?php if(old('country_of_education')=="Bangladesh" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bangladesh</option>
                                                    <option value="Barbados" <?php if(old('country_of_education')=="Barbados" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Barbados</option>
                                                    <option value="Belarus" <?php if(old('country_of_education')=="Belarus" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Belarus</option>
                                                    <option value="Belgium" <?php if(old('country_of_education')=="Belgium" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Belgium</option>
                                                    <option value="Belize" <?php if(old('country_of_education')=="Belize" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Belize</option>
                                                    <option value="Benin" <?php if(old('country_of_education')=="Benin" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Benin</option>
                                                    <option value="Bermuda" <?php if(old('country_of_education')=="Bermuda" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bermuda</option>
                                                    <option value="Bhutan" <?php if(old('country_of_education')=="Bhutan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bhutan</option>
                                                    <option value="Bolivia" <?php if(old('country_of_education')=="Bolivia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bolivia</option>
                                                    <option value="Bonaire, Sint Eustatius and Saba" <?php if(old('country_of_education')=="Bonaire, Sint Eustatius and Saba" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bonaire, Sint Eustatius and Saba</option>
                                                    <option value="Bosnia and Herzegovina" <?php if(old('country_of_education')=="Bosnia and Herzegovina" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bosnia and Herzegovina</option>
                                                    <option value="Botswana" <?php if(old('country_of_education')=="Botswana" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Botswana</option>
                                                    <option value="Bouvet Island" <?php if(old('country_of_education')=="Bouvet Island" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bouvet Island</option>
                                                    <option value="Brazil" <?php if(old('country_of_education')=="Brazil" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Brazil</option>
                                                    <option value="British Indian Ocean Territory" <?php if(old('country_of_education')=="British Indian Ocean Territory" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>British Indian Ocean Territory</option>
                                                    <option value="Brunei Darussalam" <?php if(old('country_of_education')=="Brunei Darussalam" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Brunei Darussalam</option>
                                                    <option value="Bulgaria" <?php if(old('country_of_education')=="Bulgaria" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bulgaria</option>
                                                    <option value="Burkina Faso" <?php if(old('country_of_education')=="Burkina Faso" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Burkina Faso</option>
                                                    <option value="Burundi" <?php if(old('country_of_education')=="Burundi" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Burundi</option>
                                                    <option value="Cambodia" <?php if(old('country_of_education')=="Cambodia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cambodia</option>
                                                    <option value="Cameroon" <?php if(old('country_of_education')=="Cameroon" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cameroon</option>
                                                    <option value="Canada" <?php if(old('country_of_education')=="Canada" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Canada</option>
                                                    <option value="Cape Verde" <?php if(old('country_of_education')=="Cape Verde" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cape Verde</option>
                                                    <option value="Cayman Islands" <?php if(old('country_of_education')=="Cayman Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cayman Islands</option>
                                                    <option value="Central African Republic" <?php if(old('country_of_education')=="Central African Republic" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Central African Republic</option>
                                                    <option value="Chad" <?php if(old('country_of_education')=="Chad" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Chad</option>
                                                    <option value="Chile" <?php if(old('country_of_education')=="Chile" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Chile</option>
                                                    <option value="China" <?php if(old('country_of_education')=="China" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>China</option>
                                                    <option value="Christmas Island" <?php if(old('country_of_education')=="Christmas Island" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Christmas Island</option>
                                                    <option value="Cocos (Keeling) Islands" <?php if(old('country_of_education')=="Cocos (Keeling) Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cocos (Keeling) Islands</option>
                                                    <option value="Colombia" <?php if(old('country_of_education')=="Colombia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Colombia</option>
                                                    <option value="Comoros" <?php if(old('country_of_education')=="Comoros" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Comoros</option>
                                                    <option value="Congo" <?php if(old('country_of_education')=="Congo" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Congo</option>
                                                    <option value="Congo, Democratic Republic of the Congo" <?php if(old('country_of_education')=="Congo, Democratic Republic of the Congo" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Congo, Democratic Republic of the Congo</option>
                                                    <option value="Cook Islands" <?php if(old('country_of_education')=="Cook Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cook Islands</option>
                                                    <option value="Costa Rica" <?php if(old('country_of_education')=="Costa Rica" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Costa Rica</option>
                                                    <option value="Cote D'Ivoire" <?php if(old('country_of_education')=="Cote D'Ivoire" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cote D'Ivoire</option>
                                                    <option value="Croatia" <?php if(old('country_of_education')=="Croatia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Croatia</option>
                                                    <option value="Cuba" <?php if(old('country_of_education')=="Cuba" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cuba</option>
                                                    <option value="Curacao" <?php if(old('country_of_education')=="Curacao" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Curacao</option>
                                                    <option value="Cyprus" <?php if(old('country_of_education')=="Cyprus" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cyprus</option>
                                                    <option value="Czech Republic" <?php if(old('country_of_education')=="Czech Republic" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Czech Republic</option>
                                                    <option value="Denmark" <?php if(old('country_of_education')=="Denmark" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Denmark</option>
                                                    <option value="Djibouti" <?php if(old('country_of_education')=="Djibouti" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Djibouti</option>
                                                    <option value="Dominica" <?php if(old('country_of_education')=="Dominica" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Dominica</option>
                                                    <option value="Dominican Republic" <?php if(old('country_of_education')=="Dominican Republic" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Dominican Republic</option>
                                                    <option value="Ecuador" <?php if(old('country_of_education')=="Ecuador" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Ecuador</option>
                                                    <option value="Egypt" <?php if(old('country_of_education')=="Egypt" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Egypt</option>
                                                    <option value="El Salvador" <?php if(old('country_of_education')=="El Salvador" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>El Salvador</option>
                                                    <option value="Equatorial Guinea" <?php if(old('country_of_education')=="Equatorial Guinea" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Equatorial Guinea</option>
                                                    <option value="Eritrea" <?php if(old('country_of_education')=="Eritrea" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Eritrea</option>
                                                    <option value="Estonia" <?php if(old('country_of_education')=="Estonia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Estonia</option>
                                                    <option value="Ethiopia" <?php if(old('country_of_education')=="Ethiopia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Ethiopia</option>
                                                    <option value="Falkland Islands (Malvinas)" <?php if(old('country_of_education')=="Falkland Islands (Malvinas)" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Falkland Islands (Malvinas)</option>
                                                    <option value="Faroe Islands" <?php if(old('country_of_education')=="Faroe Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Faroe Islands</option>
                                                    <option value="Fiji" <?php if(old('country_of_education')=="Fiji" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Fiji</option>
                                                    <option value="Finland" <?php if(old('country_of_education')=="Finland" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Finland</option>
                                                    <option value="France" <?php if(old('country_of_education')=="France" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>France</option>
                                                    <option value="French Guiana" <?php if(old('country_of_education')=="French Guiana" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>French Guiana</option>
                                                    <option value="French Polynesia" <?php if(old('country_of_education')=="French Polynesia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>French Polynesia</option>
                                                    <option value="French Southern Territories" <?php if(old('country_of_education')=="French Southern Territories" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>French Southern Territories</option>
                                                    <option value="Gabon" <?php if(old('country_of_education')=="Gabon" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Gabon</option>
                                                    <option value="Gambia" <?php if(old('country_of_education')=="Gambia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Gambia</option>
                                                    <option value="Georgia" <?php if(old('country_of_education')=="Georgia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Georgia</option>
                                                    <option value="Germany" <?php if(old('country_of_education')=="Germany" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Germany</option>
                                                    <option value="Ghana" <?php if(old('country_of_education')=="Ghana" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Ghana</option>
                                                    <option value="Gibraltar" <?php if(old('country_of_education')=="Gibraltar" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Gibraltar</option>
                                                    <option value="Greece" <?php if(old('country_of_education')=="Greece" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Greece</option>
                                                    <option value="Greenland" <?php if(old('country_of_education')=="Greenland" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Greenland</option>
                                                    <option value="Grenada" <?php if(old('country_of_education')=="Grenada" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Grenada</option>
                                                    <option value="Guadeloupe" <?php if(old('country_of_education')=="Guadeloupe" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Guadeloupe</option>
                                                    <option value="Guam" <?php if(old('country_of_education')=="Guam" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Guam</option>
                                                    <option value="Guatemala" <?php if(old('country_of_education')=="Guatemala" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Guatemala</option>
                                                    <option value="Guernsey" <?php if(old('country_of_education')=="Guernsey" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Guernsey</option>
                                                    <option value="Guinea" <?php if(old('country_of_education')=="Guinea" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Guinea</option>
                                                    <option value="Guinea-Bissau" <?php if(old('country_of_education')=="Guinea-Bissau" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Guinea-Bissau</option>
                                                    <option value="Guyana" <?php if(old('country_of_education')=="Guyana" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Guyana</option>
                                                    <option value="Haiti" <?php if(old('country_of_education')=="Haiti" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Haiti</option>
                                                    <option value="Heard Island and Mcdonald Islands" <?php if(old('country_of_education')=="Heard Island and Mcdonald Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Heard Island and Mcdonald Islands</option>
                                                    <option value="Holy See (Vatican City State)" <?php if(old('country_of_education')=="Holy See (Vatican City State)" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Holy See (Vatican City State)</option>
                                                    <option value="Honduras" <?php if(old('country_of_education')=="Honduras" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Honduras</option>
                                                    <option value="Hong Kong" <?php if(old('country_of_education')=="Hong Kong" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Hong Kong</option>
                                                    <option value="Hungary" <?php if(old('country_of_education')=="Hungary" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Hungary</option>
                                                    <option value="Iceland" <?php if(old('country_of_education')=="Iceland" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Iceland</option>
                                                    <option value="India" <?php if(old('country_of_education')=="India" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>India</option>
                                                    <option value="Indonesia" <?php if(old('country_of_education')=="Indonesia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Indonesia</option>
                                                    <option value="Iran, Islamic Republic of" <?php if(old('country_of_education')=="Iran, Islamic Republic of" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Iran, Islamic Republic of</option>
                                                    <option value="Iraq" <?php if(old('country_of_education')=="Iraq" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Iraq</option>
                                                    <option value="Ireland" <?php if(old('country_of_education')=="Ireland" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Ireland</option>
                                                    <option value="Isle of Man" <?php if(old('country_of_education')=="Isle of Man" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Isle of Man</option>
                                                    <option value="Israel" <?php if(old('country_of_education')=="Israel" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Israel</option>
                                                    <option value="Italy" <?php if(old('country_of_education')=="Italy" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Italy</option>
                                                    <option value="Jamaica" <?php if(old('country_of_education')=="Jamaica" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Jamaica</option>
                                                    <option value="Japan" <?php if(old('country_of_education')=="Japan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Japan</option>
                                                    <option value="Jersey" <?php if(old('country_of_education')=="Jersey" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Jersey</option>
                                                    <option value="Jordan" <?php if(old('country_of_education')=="Jordan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Jordan</option>
                                                    <option value="Kazakhstan" <?php if(old('country_of_education')=="Kazakhstan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Kazakhstan</option>
                                                    <option value="Kenya" <?php if(old('country_of_education')=="Kenya" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Kenya</option>
                                                    <option value="Kiribati" <?php if(old('country_of_education')=="Kiribati" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Kiribati</option>
                                                    <option value="Korea, Democratic People's Republic of" <?php if(old('country_of_education')=="Korea, Democratic People's Republic of" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Korea, Democratic People's Republic of</option>
                                                    <option value="Korea, Republic of" <?php if(old('country_of_education')=="Korea, Republic of" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Korea, Republic of</option>
                                                    <option value="Kosovo" <?php if(old('country_of_education')=="Kosovo" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Kosovo</option>
                                                    <option value="Kuwait" <?php if(old('country_of_education')=="Kuwait" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Kuwait</option>
                                                    <option value="Kyrgyzstan" <?php if(old('country_of_education')=="Kyrgyzstan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Kyrgyzstan</option>
                                                    <option value="Lao People's Democratic Republic" <?php if(old('country_of_education')=="Lao People's Democratic Republic" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Lao People's Democratic Republic</option>
                                                    <option value="Latvia" <?php if(old('country_of_education')=="Latvia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Latvia</option>
                                                    <option value="Lebanon" <?php if(old('country_of_education')=="Lebanon" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Lebanon</option>
                                                    <option value="Lesotho" <?php if(old('country_of_education')=="Lesotho" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Lesotho</option>
                                                    <option value="Liberia" <?php if(old('country_of_education')=="Liberia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Liberia</option>
                                                    <option value="Libyan Arab Jamahiriya" <?php if(old('country_of_education')=="Libyan Arab Jamahiriya" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Libyan Arab Jamahiriya</option>
                                                    <option value="Liechtenstein" <?php if(old('country_of_education')=="Liechtenstein" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Liechtenstein</option>
                                                    <option value="Lithuania" <?php if(old('country_of_education')=="Lithuania" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Lithuania</option>
                                                    <option value="Luxembourg" <?php if(old('country_of_education')=="Luxembourg" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Luxembourg</option>
                                                    <option value="Macao" <?php if(old('country_of_education')=="Macao" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Macao</option>
                                                    <option value="Macedonia, the Former Yugoslav Republic of" <?php if(old('country_of_education')=="Macedonia, the Former Yugoslav Republic of" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Macedonia, the Former Yugoslav Republic of</option>
                                                    <option value="Madagascar" <?php if(old('country_of_education')=="Madagascar" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Madagascar</option>
                                                    <option value="Malawi" <?php if(old('country_of_education')=="Malawi" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Malawi</option>
                                                    <option value="Malaysia" <?php if(old('country_of_education')=="Malaysia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Malaysia</option>
                                                    <option value="Maldives" <?php if(old('country_of_education')=="Maldives" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Maldives</option>
                                                    <option value="Mali" <?php if(old('country_of_education')=="Mali" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mali</option>
                                                    <option value="Malta" <?php if(old('country_of_education')=="Malta" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Malta</option>
                                                    <option value="Marshall Islands" <?php if(old('country_of_education')=="Marshall Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Marshall Islands</option>
                                                    <option value="Martinique" <?php if(old('country_of_education')=="Martinique" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Martinique</option>
                                                    <option value="Mauritania" <?php if(old('country_of_education')=="Mauritania" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mauritania</option>
                                                    <option value="Mauritius" <?php if(old('country_of_education')=="Mauritius" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mauritius</option>
                                                    <option value="Mayotte" <?php if(old('country_of_education')=="Mayotte" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mayotte</option>
                                                    <option value="Mexico" <?php if(old('country_of_education')=="Mexico" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mexico</option>
                                                    <option value="Micronesia, Federated States of" <?php if(old('country_of_education')=="Micronesia, Federated States of" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Micronesia, Federated States of</option>
                                                    <option value="Moldova, Republic of" <?php if(old('country_of_education')=="Moldova, Republic of" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Moldova, Republic of</option>
                                                    <option value="Monaco" <?php if(old('country_of_education')=="Monaco" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Monaco</option>
                                                    <option value="Mongolia" <?php if(old('country_of_education')=="Mongolia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mongolia</option>
                                                    <option value="Montenegro" <?php if(old('country_of_education')=="Montenegro" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Montenegro</option>
                                                    <option value="Montserrat" <?php if(old('country_of_education')=="Montserrat" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Montserrat</option>
                                                    <option value="Morocco" <?php if(old('country_of_education')=="Morocco" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Morocco</option>
                                                    <option value="Mozambique" <?php if(old('country_of_education')=="Mozambique" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mozambique</option>
                                                    <option value="Myanmar" <?php if(old('country_of_education')=="Myanmar" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Myanmar</option>
                                                    <option value="Namibia" <?php if(old('country_of_education')=="Namibia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Namibia</option>
                                                    <option value="Nauru" <?php if(old('country_of_education')=="Nauru" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Nauru</option>
                                                    <option value="Nepal" <?php if(old('country_of_education')=="Nepal" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Nepal</option>
                                                    <option value="Netherlands" <?php if(old('country_of_education')=="Netherlands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Netherlands</option>
                                                    <option value="Netherlands Antilles" <?php if(old('country_of_education')=="Netherlands Antilles" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Netherlands Antilles</option>
                                                    <option value="New Caledonia" <?php if(old('country_of_education')=="New Caledonia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>New Caledonia</option>
                                                    <option value="New Zealand" <?php if(old('country_of_education')=="New Zealand" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>New Zealand</option>
                                                    <option value="Nicaragua" <?php if(old('country_of_education')=="Nicaragua" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Nicaragua</option>
                                                    <option value="Niger" <?php if(old('country_of_education')=="Niger" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Niger</option>
                                                    <option value="Nigeria" <?php if(old('country_of_education')=="Nigeria" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Nigeria</option>
                                                    <option value="Niue" <?php if(old('country_of_education')=="Niue" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Niue</option>
                                                    <option value="Norfolk Island" <?php if(old('country_of_education')=="Norfolk Island" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Norfolk Island</option>
                                                    <option value="Northern Mariana Islands" <?php if(old('country_of_education')=="Northern Mariana Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Northern Mariana Islands</option>
                                                    <option value="Norway" <?php if(old('country_of_education')=="Norway" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Norway</option>
                                                    <option value="Oman" <?php if(old('country_of_education')=="Oman" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Oman</option>
                                                    <option value="Pakistan" <?php if(old('country_of_education')=="Pakistan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Pakistan</option>
                                                    <option value="Palau" <?php if(old('country_of_education')=="Palau" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Palau</option>
                                                    <option value="Palestinian Territory, Occupied" <?php if(old('country_of_education')=="Palestinian Territory, Occupied" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Palestinian Territory, Occupied</option>
                                                    <option value="Panama" <?php if(old('country_of_education')=="Panama" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Panama</option>
                                                    <option value="Papua New Guinea" <?php if(old('country_of_education')=="Papua New Guinea" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Papua New Guinea</option>
                                                    <option value="Paraguay" <?php if(old('country_of_education')=="Paraguay" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Paraguay</option>
                                                    <option value="Peru" <?php if(old('country_of_education')=="Peru" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Peru</option>
                                                    <option value="Philippines" <?php if(old('country_of_education')=="Philippines" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Philippines</option>
                                                    <option value="Pitcairn" <?php if(old('country_of_education')=="Pitcairn" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Pitcairn</option>
                                                    <option value="Poland" <?php if(old('country_of_education')=="Poland" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Poland</option>
                                                    <option value="Portugal" <?php if(old('country_of_education')=="Portugal" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Portugal</option>
                                                    <option value="Puerto Rico" <?php if(old('country_of_education')=="Puerto Rico" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Puerto Rico</option>
                                                    <option value="Qatar" <?php if(old('country_of_education')=="Qatar" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Qatar</option>
                                                    <option value="Reunion" <?php if(old('country_of_education')=="Reunion" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Reunion</option>
                                                    <option value="Romania" <?php if(old('country_of_education')=="Romania" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Romania</option>
                                                    <option value="Russian Federation" <?php if(old('country_of_education')=="Russian Federation" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Russian Federation</option>
                                                    <option value="Rwanda" <?php if(old('country_of_education')=="Rwanda" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Rwanda</option>
                                                    <option value="Saint Barthelemy" <?php if(old('country_of_education')=="Saint Barthelemy" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saint Barthelemy</option>
                                                    <option value="Saint Helena" <?php if(old('country_of_education')=="Saint Helena" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saint Helena</option>
                                                    <option value="Saint Kitts and Nevis" <?php if(old('country_of_education')=="Saint Kitts and Nevis" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saint Kitts and Nevis</option>
                                                    <option value="Saint Lucia" <?php if(old('country_of_education')=="Saint Lucia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saint Lucia</option>
                                                    <option value="Saint Martin" <?php if(old('country_of_education')=="Saint Martin" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saint Martin</option>
                                                    <option value="Saint Pierre and Miquelon" <?php if(old('country_of_education')=="Saint Pierre and Miquelon" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saint Pierre and Miquelon</option>
                                                    <option value="Saint Vincent and the Grenadines" <?php if(old('country_of_education')=="Saint Vincent and the Grenadines" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saint Vincent and the Grenadines</option>
                                                    <option value="Samoa" <?php if(old('country_of_education')=="Samoa" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Samoa</option>
                                                    <option value="San Marino" <?php if(old('country_of_education')=="San Marino" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>San Marino</option>
                                                    <option value="Sao Tome and Principe" <?php if(old('country_of_education')=="Sao Tome and Principe" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Sao Tome and Principe</option>
                                                    <option value="Saudi Arabia" <?php if(old('country_of_education')=="Saudi Arabia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saudi Arabia</option>
                                                    <option value="Senegal" <?php if(old('country_of_education')=="Senegal" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Senegal</option>
                                                    <option value="Serbia" <?php if(old('country_of_education')=="Serbia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Serbia</option>
                                                    <option value="Serbia and Montenegro" <?php if(old('country_of_education')=="Serbia and Montenegro" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Serbia and Montenegro</option>
                                                    <option value="Seychelles" <?php if(old('country_of_education')=="Seychelles" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Seychelles</option>
                                                    <option value="Sierra Leone" <?php if(old('country_of_education')=="Sierra Leone" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Sierra Leone</option>
                                                    <option value="Singapore" <?php if(old('country_of_education')=="Singapore" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Singapore</option>
                                                    <option value="Sint Maarten" <?php if(old('country_of_education')=="Sint Maarten" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Sint Maarten</option>
                                                    <option value="Slovakia" <?php if(old('country_of_education')=="Slovakia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Slovakia</option>
                                                    <option value="Slovenia" <?php if(old('country_of_education')=="Slovenia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Slovenia</option>
                                                    <option value="Solomon Islands" <?php if(old('country_of_education')=="Solomon Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Solomon Islands</option>
                                                    <option value="Somalia" <?php if(old('country_of_education')=="Somalia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Somalia</option>
                                                    <option value="South Africa" <?php if(old('country_of_education')=="South Africa" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>South Africa</option>
                                                    <option value="South Georgia and the South Sandwich Islands" <?php if(old('country_of_education')=="South Georgia and the South Sandwich Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>South Georgia and the South Sandwich Islands</option>
                                                    <option value="South Sudan" <?php if(old('country_of_education')=="South Sudan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>South Sudan</option>
                                                    <option value="Spain" <?php if(old('country_of_education')=="Spain" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Spain</option>
                                                    <option value="Sri Lanka" <?php if(old('country_of_education')=="Sri Lanka" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Sri Lanka</option>
                                                    <option value="Sudan" <?php if(old('country_of_education')=="Sudan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Sudan</option>
                                                    <option value="Suriname" <?php if(old('country_of_education')=="Suriname" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Suriname</option>
                                                    <option value="Svalbard and Jan Mayen" <?php if(old('country_of_education')=="Svalbard and Jan Mayen" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Svalbard and Jan Mayen</option>
                                                    <option value="Swaziland" <?php if(old('country_of_education')=="Swaziland" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Swaziland</option>
                                                    <option value="Sweden" <?php if(old('country_of_education')=="Sweden" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Sweden</option>
                                                    <option value="Switzerland" <?php if(old('country_of_education')=="Switzerland" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Switzerland</option>
                                                    <option value="Syrian Arab Republic" <?php if(old('country_of_education')=="Syrian Arab Republic" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Syrian Arab Republic</option>
                                                    <option value="Taiwan, Province of China" <?php if(old('country_of_education')=="Taiwan, Province of China" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Taiwan, Province of China</option>
                                                    <option value="Tajikistan" <?php if(old('country_of_education')=="Tajikistan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Tajikistan</option>
                                                    <option value="Tanzania, United Republic of" <?php if(old('country_of_education')=="Tanzania, United Republic of" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Tanzania, United Republic of</option>
                                                    <option value="Thailand" <?php if(old('country_of_education')=="Thailand" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Thailand</option>
                                                    <option value="Timor-Leste" <?php if(old('country_of_education')=="Timor-Leste" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Timor-Leste</option>
                                                    <option value="Togo" <?php if(old('country_of_education')=="Togo" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Togo</option>
                                                    <option value="Tokelau" <?php if(old('country_of_education')=="Tokelau" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Tokelau</option>
                                                    <option value="Tonga" <?php if(old('country_of_education')=="Tonga" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Tonga</option>
                                                    <option value="Trinidad and Tobago" <?php if(old('country_of_education')=="Trinidad and Tobago" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Trinidad and Tobago</option>
                                                    <option value="Tunisia" <?php if(old('country_of_education')=="Tunisia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Tunisia</option>
                                                    <option value="Turkey" <?php if(old('country_of_education')=="Turkey" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Turkey</option>
                                                    <option value="Turkmenistan" <?php if(old('country_of_education')=="Turkmenistan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Turkmenistan</option>
                                                    <option value="Turks and Caicos Islands" <?php if(old('country_of_education')=="Turks and Caicos Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Turks and Caicos Islands</option>
                                                    <option value="Tuvalu" <?php if(old('country_of_education')=="Tuvalu" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Tuvalu</option>
                                                    <option value="Uganda" <?php if(old('country_of_education')=="Uganda" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Uganda</option>
                                                    <option value="Ukraine" <?php if(old('country_of_education')=="Ukraine" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Ukraine</option>
                                                    <option value="United Arab Emirates" <?php if(old('country_of_education')=="United Arab Emirates" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>United Arab Emirates</option>
                                                    <option value="United Kingdom" <?php if(old('country_of_education')=="United Kingdom" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>United Kingdom</option>
                                                    <option value="United States" <?php if(old('country_of_education')=="United States" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>United States</option>
                                                    <option value="United States Minor Outlying Islands" <?php if(old('country_of_education')=="United States Minor Outlying Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>United States Minor Outlying Islands</option>
                                                    <option value="Uruguay" <?php if(old('country_of_education')=="Uruguay" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Uruguay</option>
                                                    <option value="Uzbekistan" <?php if(old('country_of_education')=="Uzbekistan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Uzbekistan</option>
                                                    <option value="Vanuatu" <?php if(old('country_of_education')=="Vanuatu" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Vanuatu</option>
                                                    <option value="Venezuela" <?php if(old('country_of_education')=="Venezuela" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Venezuela</option>
                                                    <option value="Viet Nam" <?php if(old('country_of_education')=="Viet Nam" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Viet Nam</option>
                                                    <option value="Virgin Islands, British" <?php if(old('country_of_education')=="Virgin Islands, British" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Virgin Islands, British</option>
                                                    <option value="Virgin Islands, U.s." <?php if(old('country_of_education')=="Virgin Islands, U.s." ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Virgin Islands, U.s.</option>
                                                    <option value="Wallis and Futuna" <?php if(old('country_of_education')=="Wallis and Futuna" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Wallis and Futuna</option>
                                                    <option value="Western Sahara" <?php if(old('country_of_education')=="Western Sahara" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Western Sahara</option>
                                                    <option value="Yemen" <?php if(old('country_of_education')=="Yemen" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Yemen</option>
                                                    <option value="Zambia" <?php if(old('country_of_education')=="Zambia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Zambia</option>
                                                    <option value="Zimbabwe" <?php if(old('country_of_education')=="Zimbabwe" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Highest Level of Education <span class="red">*</span> </label>
                                                <select name="highest_level_of_education" id="highest_level_of_education" class="form-select" aria-label="Default select example">
                                                    <option value="">Select Highest Level of Education</option>
                                                    <option value="3-Year Undergraduate Advanced Diploma" <?php if(old('highest_level_of_education')=="3-Year Undergraduate Advanced Diploma" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>3-Year Undergraduate Advanced Diploma</option>
                                                    <option value="3-Yaar Bachelors Degree" <?php if(old('highest_level_of_education')=="3-Yaar Bachelors Degree" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>3-Yaar Bachelors Degree</option>
                                                    <option value="4-Yaar Bachelors Degree" <?php if(old('highest_level_of_education')=="4-Yaar Bachelors Degree" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>4-Yaar Bachelors Degree</option>
                                                    <optgroup label="Postgraduate"></optgroup>
                                                    <option value="Postgraduate Certificate/Diploma" <?php if(old('highest_level_of_education')=="Postgraduate Certificate/Diploma" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Postgraduate Certificate/Diploma</option>
                                                    <option value="Masters Degree" <?php if(old('highest_level_of_education')=="Masters Degree" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Masters Degree</option>
                                                    <option value="Doctoral Degree (Phd,M.D..)" <?php if(old('highest_level_of_education')=="Doctoral Degree (Phd,M.D..)" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Doctoral Degree (Phd,M.D..)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Grading Scheme <span class="red">*</span> </label>
                                                <select name="grading_scheme" id="grading_scheme" class="form-select" aria-label="Default select example">
                                                    <option value="">Select Grading Scheme</option>
                                                    <option value="High Education (Degree) Division Scale">High Education (Degree) Division Scale</option>
                                                    <option value="High Education (Bechelor and Above) Grade Point 10 Scale">High Education (Bechelor and Above) Grade Point 10 Scale </option>
                                                    <option value="High Education (Bechelor and Above) Percentage Scale 0-100">High Education (Bechelor and Above) Percentage Scale 0-100 </option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-md-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Grade Average <span class="red">*</span> </label>
                                                <input name="grade_average" id="grade_average" type="tel" class="form-control" placeholder="Enter Grade Average...">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pt-md-5">
                                            <div class="form-group form-check">
                                                <input class="form-check-input" type="checkbox" value="Yes" id="graduated_from_most_recent_school" name="graduated_from_most_recent_school">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Graduated from most recent school
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="schools-attended">
                            <div class="card mt-md-3">
                                <div class="card-body">
                                    <h4>Schools Attended</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>
                                                <i class="fa-solid fa-triangle-exclamation"></i>
                                                Enter the school attended for Grade 12 / High School
                                            </p>
                                            <button class="btn-next mx-md-3 add_now" type="button">Add Now <i class="fa-solid fa-plus"></i></button>
                                        </div>
                                    </div>
                                    <div class="school-attended">
                                        <div class="row mt-md-3">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Country of Institution <span class="red">*</span> </label>
                                                    <select name="country_of_institution" id="country_of_institution" class="form-select" aria-label="Default select example">
                                                        <option value="">Select Country of Institution</option>
                                                        <option value="Afghanistan" <?php if(old('country_of_institution')=="Afghanistan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Afghanistan</option>
                                                        <option value="Aland Islands" <?php if(old('country_of_institution')=="Aland Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Aland Islands</option>
                                                        <option value="Albania" <?php if(old('country_of_institution')=="Albania" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Albania</option>
                                                        <option value="Algeria" <?php if(old('country_of_institution')=="Algeria" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Algeria</option>
                                                        <option value="American Samoa" <?php if(old('country_of_institution')=="American Samoa" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>American Samoa</option>
                                                        <option value="Andorra" <?php if(old('country_of_institution')=="Andorra" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Andorra</option>
                                                        <option value="Angola" <?php if(old('country_of_institution')=="Angola" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Angola</option>
                                                        <option value="Anguilla" <?php if(old('country_of_institution')=="Anguilla" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Anguilla</option>
                                                        <option value="Antarctica" <?php if(old('country_of_institution')=="Antarctica" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Antarctica</option>
                                                        <option value="Antigua and Barbuda" <?php if(old('country_of_institution')=="Antigua and Barbuda" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Antigua and Barbuda</option>
                                                        <option value="Argentina" <?php if(old('country_of_institution')=="Argentina" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Argentina</option>
                                                        <option value="Armenia" <?php if(old('country_of_institution')=="Armenia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Armenia</option>
                                                        <option value="Aruba" <?php if(old('country_of_institution')=="Aruba" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Aruba</option>
                                                        <option value="Australia" <?php if(old('country_of_institution')=="Australia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Australia</option>
                                                        <option value="Austria" <?php if(old('country_of_institution')=="Austria" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Austria</option>
                                                        <option value="Azerbaijan" <?php if(old('country_of_institution')=="Azerbaijan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Azerbaijan</option>
                                                        <option value="Bahamas" <?php if(old('country_of_institution')=="Bahamas" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bahamas</option>
                                                        <option value="Bahrain" <?php if(old('country_of_institution')=="Bahrain" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bahrain</option>
                                                        <option value="Bangladesh" <?php if(old('country_of_institution')=="Bangladesh" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bangladesh</option>
                                                        <option value="Barbados" <?php if(old('country_of_institution')=="Barbados" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Barbados</option>
                                                        <option value="Belarus" <?php if(old('country_of_institution')=="Belarus" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Belarus</option>
                                                        <option value="Belgium" <?php if(old('country_of_institution')=="Belgium" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Belgium</option>
                                                        <option value="Belize" <?php if(old('country_of_institution')=="Belize" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Belize</option>
                                                        <option value="Benin" <?php if(old('country_of_institution')=="Benin" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Benin</option>
                                                        <option value="Bermuda" <?php if(old('country_of_institution')=="Bermuda" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bermuda</option>
                                                        <option value="Bhutan" <?php if(old('country_of_institution')=="Bhutan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bhutan</option>
                                                        <option value="Bolivia" <?php if(old('country_of_institution')=="Bolivia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bolivia</option>
                                                        <option value="Bonaire, Sint Eustatius and Saba" <?php if(old('country_of_institution')=="Bonaire, Sint Eustatius and Saba" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bonaire, Sint Eustatius and Saba</option>
                                                        <option value="Bosnia and Herzegovina" <?php if(old('country_of_institution')=="Bosnia and Herzegovina" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bosnia and Herzegovina</option>
                                                        <option value="Botswana" <?php if(old('country_of_institution')=="Botswana" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Botswana</option>
                                                        <option value="Bouvet Island" <?php if(old('country_of_institution')=="Bouvet Island" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bouvet Island</option>
                                                        <option value="Brazil" <?php if(old('country_of_institution')=="Brazil" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Brazil</option>
                                                        <option value="British Indian Ocean Territory" <?php if(old('country_of_institution')=="British Indian Ocean Territory" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>British Indian Ocean Territory</option>
                                                        <option value="Brunei Darussalam" <?php if(old('country_of_institution')=="Brunei Darussalam" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Brunei Darussalam</option>
                                                        <option value="Bulgaria" <?php if(old('country_of_institution')=="Bulgaria" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Bulgaria</option>
                                                        <option value="Burkina Faso" <?php if(old('country_of_institution')=="Burkina Faso" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Burkina Faso</option>
                                                        <option value="Burundi" <?php if(old('country_of_institution')=="Burundi" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Burundi</option>
                                                        <option value="Cambodia" <?php if(old('country_of_institution')=="Cambodia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cambodia</option>
                                                        <option value="Cameroon" <?php if(old('country_of_institution')=="Cameroon" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cameroon</option>
                                                        <option value="Canada" <?php if(old('country_of_institution')=="Canada" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Canada</option>
                                                        <option value="Cape Verde" <?php if(old('country_of_institution')=="Cape Verde" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cape Verde</option>
                                                        <option value="Cayman Islands" <?php if(old('country_of_institution')=="Cayman Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cayman Islands</option>
                                                        <option value="Central African Republic" <?php if(old('country_of_institution')=="Central African Republic" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Central African Republic</option>
                                                        <option value="Chad" <?php if(old('country_of_institution')=="Chad" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Chad</option>
                                                        <option value="Chile" <?php if(old('country_of_institution')=="Chile" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Chile</option>
                                                        <option value="China" <?php if(old('country_of_institution')=="China" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>China</option>
                                                        <option value="Christmas Island" <?php if(old('country_of_institution')=="Christmas Island" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Christmas Island</option>
                                                        <option value="Cocos (Keeling) Islands" <?php if(old('country_of_institution')=="Cocos (Keeling) Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cocos (Keeling) Islands</option>
                                                        <option value="Colombia" <?php if(old('country_of_institution')=="Colombia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Colombia</option>
                                                        <option value="Comoros" <?php if(old('country_of_institution')=="Comoros" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Comoros</option>
                                                        <option value="Congo" <?php if(old('country_of_institution')=="Congo" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Congo</option>
                                                        <option value="Congo, Democratic Republic of the Congo" <?php if(old('country_of_institution')=="Congo, Democratic Republic of the Congo" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Congo, Democratic Republic of the Congo</option>
                                                        <option value="Cook Islands" <?php if(old('country_of_institution')=="Cook Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cook Islands</option>
                                                        <option value="Costa Rica" <?php if(old('country_of_institution')=="Costa Rica" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Costa Rica</option>
                                                        <option value="Cote D'Ivoire" <?php if(old('country_of_institution')=="Cote D'Ivoire" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cote D'Ivoire</option>
                                                        <option value="Croatia" <?php if(old('country_of_institution')=="Croatia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Croatia</option>
                                                        <option value="Cuba" <?php if(old('country_of_institution')=="Cuba" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cuba</option>
                                                        <option value="Curacao" <?php if(old('country_of_institution')=="Curacao" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Curacao</option>
                                                        <option value="Cyprus" <?php if(old('country_of_institution')=="Cyprus" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Cyprus</option>
                                                        <option value="Czech Republic" <?php if(old('country_of_institution')=="Czech Republic" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Czech Republic</option>
                                                        <option value="Denmark" <?php if(old('country_of_institution')=="Denmark" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Denmark</option>
                                                        <option value="Djibouti" <?php if(old('country_of_institution')=="Djibouti" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Djibouti</option>
                                                        <option value="Dominica" <?php if(old('country_of_institution')=="Dominica" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Dominica</option>
                                                        <option value="Dominican Republic" <?php if(old('country_of_institution')=="Dominican Republic" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Dominican Republic</option>
                                                        <option value="Ecuador" <?php if(old('country_of_institution')=="Ecuador" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Ecuador</option>
                                                        <option value="Egypt" <?php if(old('country_of_institution')=="Egypt" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Egypt</option>
                                                        <option value="El Salvador" <?php if(old('country_of_institution')=="El Salvador" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>El Salvador</option>
                                                        <option value="Equatorial Guinea" <?php if(old('country_of_institution')=="Equatorial Guinea" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Equatorial Guinea</option>
                                                        <option value="Eritrea" <?php if(old('country_of_institution')=="Eritrea" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Eritrea</option>
                                                        <option value="Estonia" <?php if(old('country_of_institution')=="Estonia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Estonia</option>
                                                        <option value="Ethiopia" <?php if(old('country_of_institution')=="Ethiopia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Ethiopia</option>
                                                        <option value="Falkland Islands (Malvinas)" <?php if(old('country_of_institution')=="Falkland Islands (Malvinas)" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Falkland Islands (Malvinas)</option>
                                                        <option value="Faroe Islands" <?php if(old('country_of_institution')=="Faroe Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Faroe Islands</option>
                                                        <option value="Fiji" <?php if(old('country_of_institution')=="Fiji" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Fiji</option>
                                                        <option value="Finland" <?php if(old('country_of_institution')=="Finland" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Finland</option>
                                                        <option value="France" <?php if(old('country_of_institution')=="France" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>France</option>
                                                        <option value="French Guiana" <?php if(old('country_of_institution')=="French Guiana" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>French Guiana</option>
                                                        <option value="French Polynesia" <?php if(old('country_of_institution')=="French Polynesia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>French Polynesia</option>
                                                        <option value="French Southern Territories" <?php if(old('country_of_institution')=="French Southern Territories" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>French Southern Territories</option>
                                                        <option value="Gabon" <?php if(old('country_of_institution')=="Gabon" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Gabon</option>
                                                        <option value="Gambia" <?php if(old('country_of_institution')=="Gambia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Gambia</option>
                                                        <option value="Georgia" <?php if(old('country_of_institution')=="Georgia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Georgia</option>
                                                        <option value="Germany" <?php if(old('country_of_institution')=="Germany" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Germany</option>
                                                        <option value="Ghana" <?php if(old('country_of_institution')=="Ghana" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Ghana</option>
                                                        <option value="Gibraltar" <?php if(old('country_of_institution')=="Gibraltar" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Gibraltar</option>
                                                        <option value="Greece" <?php if(old('country_of_institution')=="Greece" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Greece</option>
                                                        <option value="Greenland" <?php if(old('country_of_institution')=="Greenland" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Greenland</option>
                                                        <option value="Grenada" <?php if(old('country_of_institution')=="Grenada" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Grenada</option>
                                                        <option value="Guadeloupe" <?php if(old('country_of_institution')=="Guadeloupe" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Guadeloupe</option>
                                                        <option value="Guam" <?php if(old('country_of_institution')=="Guam" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Guam</option>
                                                        <option value="Guatemala" <?php if(old('country_of_institution')=="Guatemala" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Guatemala</option>
                                                        <option value="Guernsey" <?php if(old('country_of_institution')=="Guernsey" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Guernsey</option>
                                                        <option value="Guinea" <?php if(old('country_of_institution')=="Guinea" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Guinea</option>
                                                        <option value="Guinea-Bissau" <?php if(old('country_of_institution')=="Guinea-Bissau" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Guinea-Bissau</option>
                                                        <option value="Guyana" <?php if(old('country_of_institution')=="Guyana" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Guyana</option>
                                                        <option value="Haiti" <?php if(old('country_of_institution')=="Haiti" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Haiti</option>
                                                        <option value="Heard Island and Mcdonald Islands" <?php if(old('country_of_institution')=="Heard Island and Mcdonald Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Heard Island and Mcdonald Islands</option>
                                                        <option value="Holy See (Vatican City State)" <?php if(old('country_of_institution')=="Holy See (Vatican City State)" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Holy See (Vatican City State)</option>
                                                        <option value="Honduras" <?php if(old('country_of_institution')=="Honduras" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Honduras</option>
                                                        <option value="Hong Kong" <?php if(old('country_of_institution')=="Hong Kong" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Hong Kong</option>
                                                        <option value="Hungary" <?php if(old('country_of_institution')=="Hungary" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Hungary</option>
                                                        <option value="Iceland" <?php if(old('country_of_institution')=="Iceland" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Iceland</option>
                                                        <option value="India" <?php if(old('country_of_institution')=="India" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>India</option>
                                                        <option value="Indonesia" <?php if(old('country_of_institution')=="Indonesia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Indonesia</option>
                                                        <option value="Iran, Islamic Republic of" <?php if(old('country_of_institution')=="Iran, Islamic Republic of" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Iran, Islamic Republic of</option>
                                                        <option value="Iraq" <?php if(old('country_of_institution')=="Iraq" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Iraq</option>
                                                        <option value="Ireland" <?php if(old('country_of_institution')=="Ireland" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Ireland</option>
                                                        <option value="Isle of Man" <?php if(old('country_of_institution')=="Isle of Man" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Isle of Man</option>
                                                        <option value="Israel" <?php if(old('country_of_institution')=="Israel" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Israel</option>
                                                        <option value="Italy" <?php if(old('country_of_institution')=="Italy" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Italy</option>
                                                        <option value="Jamaica" <?php if(old('country_of_institution')=="Jamaica" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Jamaica</option>
                                                        <option value="Japan" <?php if(old('country_of_institution')=="Japan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Japan</option>
                                                        <option value="Jersey" <?php if(old('country_of_institution')=="Jersey" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Jersey</option>
                                                        <option value="Jordan" <?php if(old('country_of_institution')=="Jordan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Jordan</option>
                                                        <option value="Kazakhstan" <?php if(old('country_of_institution')=="Kazakhstan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Kazakhstan</option>
                                                        <option value="Kenya" <?php if(old('country_of_institution')=="Kenya" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Kenya</option>
                                                        <option value="Kiribati" <?php if(old('country_of_institution')=="Kiribati" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Kiribati</option>
                                                        <option value="Korea, Democratic People's Republic of" <?php if(old('country_of_institution')=="Korea, Democratic People's Republic of" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Korea, Democratic People's Republic of</option>
                                                        <option value="Korea, Republic of" <?php if(old('country_of_institution')=="Korea, Republic of" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Korea, Republic of</option>
                                                        <option value="Kosovo" <?php if(old('country_of_institution')=="Kosovo" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Kosovo</option>
                                                        <option value="Kuwait" <?php if(old('country_of_institution')=="Kuwait" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Kuwait</option>
                                                        <option value="Kyrgyzstan" <?php if(old('country_of_institution')=="Kyrgyzstan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Kyrgyzstan</option>
                                                        <option value="Lao People's Democratic Republic" <?php if(old('country_of_institution')=="Lao People's Democratic Republic" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Lao People's Democratic Republic</option>
                                                        <option value="Latvia" <?php if(old('country_of_institution')=="Latvia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Latvia</option>
                                                        <option value="Lebanon" <?php if(old('country_of_institution')=="Lebanon" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Lebanon</option>
                                                        <option value="Lesotho" <?php if(old('country_of_institution')=="Lesotho" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Lesotho</option>
                                                        <option value="Liberia" <?php if(old('country_of_institution')=="Liberia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Liberia</option>
                                                        <option value="Libyan Arab Jamahiriya" <?php if(old('country_of_institution')=="Libyan Arab Jamahiriya" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Libyan Arab Jamahiriya</option>
                                                        <option value="Liechtenstein" <?php if(old('country_of_institution')=="Liechtenstein" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Liechtenstein</option>
                                                        <option value="Lithuania" <?php if(old('country_of_institution')=="Lithuania" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Lithuania</option>
                                                        <option value="Luxembourg" <?php if(old('country_of_institution')=="Luxembourg" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Luxembourg</option>
                                                        <option value="Macao" <?php if(old('country_of_institution')=="Macao" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Macao</option>
                                                        <option value="Macedonia, the Former Yugoslav Republic of" <?php if(old('country_of_institution')=="Macedonia, the Former Yugoslav Republic of" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Macedonia, the Former Yugoslav Republic of</option>
                                                        <option value="Madagascar" <?php if(old('country_of_institution')=="Madagascar" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Madagascar</option>
                                                        <option value="Malawi" <?php if(old('country_of_institution')=="Malawi" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Malawi</option>
                                                        <option value="Malaysia" <?php if(old('country_of_institution')=="Malaysia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Malaysia</option>
                                                        <option value="Maldives" <?php if(old('country_of_institution')=="Maldives" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Maldives</option>
                                                        <option value="Mali" <?php if(old('country_of_institution')=="Mali" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mali</option>
                                                        <option value="Malta" <?php if(old('country_of_institution')=="Malta" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Malta</option>
                                                        <option value="Marshall Islands" <?php if(old('country_of_institution')=="Marshall Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Marshall Islands</option>
                                                        <option value="Martinique" <?php if(old('country_of_institution')=="Martinique" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Martinique</option>
                                                        <option value="Mauritania" <?php if(old('country_of_institution')=="Mauritania" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mauritania</option>
                                                        <option value="Mauritius" <?php if(old('country_of_institution')=="Mauritius" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mauritius</option>
                                                        <option value="Mayotte" <?php if(old('country_of_institution')=="Mayotte" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mayotte</option>
                                                        <option value="Mexico" <?php if(old('country_of_institution')=="Mexico" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mexico</option>
                                                        <option value="Micronesia, Federated States of" <?php if(old('country_of_institution')=="Micronesia, Federated States of" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Micronesia, Federated States of</option>
                                                        <option value="Moldova, Republic of" <?php if(old('country_of_institution')=="Moldova, Republic of" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Moldova, Republic of</option>
                                                        <option value="Monaco" <?php if(old('country_of_institution')=="Monaco" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Monaco</option>
                                                        <option value="Mongolia" <?php if(old('country_of_institution')=="Mongolia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mongolia</option>
                                                        <option value="Montenegro" <?php if(old('country_of_institution')=="Montenegro" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Montenegro</option>
                                                        <option value="Montserrat" <?php if(old('country_of_institution')=="Montserrat" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Montserrat</option>
                                                        <option value="Morocco" <?php if(old('country_of_institution')=="Morocco" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Morocco</option>
                                                        <option value="Mozambique" <?php if(old('country_of_institution')=="Mozambique" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mozambique</option>
                                                        <option value="Myanmar" <?php if(old('country_of_institution')=="Myanmar" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Myanmar</option>
                                                        <option value="Namibia" <?php if(old('country_of_institution')=="Namibia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Namibia</option>
                                                        <option value="Nauru" <?php if(old('country_of_institution')=="Nauru" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Nauru</option>
                                                        <option value="Nepal" <?php if(old('country_of_institution')=="Nepal" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Nepal</option>
                                                        <option value="Netherlands" <?php if(old('country_of_institution')=="Netherlands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Netherlands</option>
                                                        <option value="Netherlands Antilles" <?php if(old('country_of_institution')=="Netherlands Antilles" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Netherlands Antilles</option>
                                                        <option value="New Caledonia" <?php if(old('country_of_institution')=="New Caledonia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>New Caledonia</option>
                                                        <option value="New Zealand" <?php if(old('country_of_institution')=="New Zealand" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>New Zealand</option>
                                                        <option value="Nicaragua" <?php if(old('country_of_institution')=="Nicaragua" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Nicaragua</option>
                                                        <option value="Niger" <?php if(old('country_of_institution')=="Niger" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Niger</option>
                                                        <option value="Nigeria" <?php if(old('country_of_institution')=="Nigeria" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Nigeria</option>
                                                        <option value="Niue" <?php if(old('country_of_institution')=="Niue" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Niue</option>
                                                        <option value="Norfolk Island" <?php if(old('country_of_institution')=="Norfolk Island" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Norfolk Island</option>
                                                        <option value="Northern Mariana Islands" <?php if(old('country_of_institution')=="Northern Mariana Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Northern Mariana Islands</option>
                                                        <option value="Norway" <?php if(old('country_of_institution')=="Norway" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Norway</option>
                                                        <option value="Oman" <?php if(old('country_of_institution')=="Oman" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Oman</option>
                                                        <option value="Pakistan" <?php if(old('country_of_institution')=="Pakistan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Pakistan</option>
                                                        <option value="Palau" <?php if(old('country_of_institution')=="Palau" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Palau</option>
                                                        <option value="Palestinian Territory, Occupied" <?php if(old('country_of_institution')=="Palestinian Territory, Occupied" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Palestinian Territory, Occupied</option>
                                                        <option value="Panama" <?php if(old('country_of_institution')=="Panama" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Panama</option>
                                                        <option value="Papua New Guinea" <?php if(old('country_of_institution')=="Papua New Guinea" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Papua New Guinea</option>
                                                        <option value="Paraguay" <?php if(old('country_of_institution')=="Paraguay" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Paraguay</option>
                                                        <option value="Peru" <?php if(old('country_of_institution')=="Peru" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Peru</option>
                                                        <option value="Philippines" <?php if(old('country_of_institution')=="Philippines" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Philippines</option>
                                                        <option value="Pitcairn" <?php if(old('country_of_institution')=="Pitcairn" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Pitcairn</option>
                                                        <option value="Poland" <?php if(old('country_of_institution')=="Poland" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Poland</option>
                                                        <option value="Portugal" <?php if(old('country_of_institution')=="Portugal" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Portugal</option>
                                                        <option value="Puerto Rico" <?php if(old('country_of_institution')=="Puerto Rico" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Puerto Rico</option>
                                                        <option value="Qatar" <?php if(old('country_of_institution')=="Qatar" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Qatar</option>
                                                        <option value="Reunion" <?php if(old('country_of_institution')=="Reunion" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Reunion</option>
                                                        <option value="Romania" <?php if(old('country_of_institution')=="Romania" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Romania</option>
                                                        <option value="Russian Federation" <?php if(old('country_of_institution')=="Russian Federation" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Russian Federation</option>
                                                        <option value="Rwanda" <?php if(old('country_of_institution')=="Rwanda" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Rwanda</option>
                                                        <option value="Saint Barthelemy" <?php if(old('country_of_institution')=="Saint Barthelemy" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saint Barthelemy</option>
                                                        <option value="Saint Helena" <?php if(old('country_of_institution')=="Saint Helena" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saint Helena</option>
                                                        <option value="Saint Kitts and Nevis" <?php if(old('country_of_institution')=="Saint Kitts and Nevis" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saint Kitts and Nevis</option>
                                                        <option value="Saint Lucia" <?php if(old('country_of_institution')=="Saint Lucia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saint Lucia</option>
                                                        <option value="Saint Martin" <?php if(old('country_of_institution')=="Saint Martin" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saint Martin</option>
                                                        <option value="Saint Pierre and Miquelon" <?php if(old('country_of_institution')=="Saint Pierre and Miquelon" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saint Pierre and Miquelon</option>
                                                        <option value="Saint Vincent and the Grenadines" <?php if(old('country_of_institution')=="Saint Vincent and the Grenadines" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saint Vincent and the Grenadines</option>
                                                        <option value="Samoa" <?php if(old('country_of_institution')=="Samoa" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Samoa</option>
                                                        <option value="San Marino" <?php if(old('country_of_institution')=="San Marino" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>San Marino</option>
                                                        <option value="Sao Tome and Principe" <?php if(old('country_of_institution')=="Sao Tome and Principe" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Sao Tome and Principe</option>
                                                        <option value="Saudi Arabia" <?php if(old('country_of_institution')=="Saudi Arabia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Saudi Arabia</option>
                                                        <option value="Senegal" <?php if(old('country_of_institution')=="Senegal" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Senegal</option>
                                                        <option value="Serbia" <?php if(old('country_of_institution')=="Serbia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Serbia</option>
                                                        <option value="Serbia and Montenegro" <?php if(old('country_of_institution')=="Serbia and Montenegro" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Serbia and Montenegro</option>
                                                        <option value="Seychelles" <?php if(old('country_of_institution')=="Seychelles" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Seychelles</option>
                                                        <option value="Sierra Leone" <?php if(old('country_of_institution')=="Sierra Leone" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Sierra Leone</option>
                                                        <option value="Singapore" <?php if(old('country_of_institution')=="Singapore" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Singapore</option>
                                                        <option value="Sint Maarten" <?php if(old('country_of_institution')=="Sint Maarten" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Sint Maarten</option>
                                                        <option value="Slovakia" <?php if(old('country_of_institution')=="Slovakia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Slovakia</option>
                                                        <option value="Slovenia" <?php if(old('country_of_institution')=="Slovenia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Slovenia</option>
                                                        <option value="Solomon Islands" <?php if(old('country_of_institution')=="Solomon Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Solomon Islands</option>
                                                        <option value="Somalia" <?php if(old('country_of_institution')=="Somalia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Somalia</option>
                                                        <option value="South Africa" <?php if(old('country_of_institution')=="South Africa" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>South Africa</option>
                                                        <option value="South Georgia and the South Sandwich Islands" <?php if(old('country_of_institution')=="South Georgia and the South Sandwich Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>South Georgia and the South Sandwich Islands</option>
                                                        <option value="South Sudan" <?php if(old('country_of_institution')=="South Sudan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>South Sudan</option>
                                                        <option value="Spain" <?php if(old('country_of_institution')=="Spain" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Spain</option>
                                                        <option value="Sri Lanka" <?php if(old('country_of_institution')=="Sri Lanka" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Sri Lanka</option>
                                                        <option value="Sudan" <?php if(old('country_of_institution')=="Sudan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Sudan</option>
                                                        <option value="Suriname" <?php if(old('country_of_institution')=="Suriname" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Suriname</option>
                                                        <option value="Svalbard and Jan Mayen" <?php if(old('country_of_institution')=="Svalbard and Jan Mayen" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Svalbard and Jan Mayen</option>
                                                        <option value="Swaziland" <?php if(old('country_of_institution')=="Swaziland" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Swaziland</option>
                                                        <option value="Sweden" <?php if(old('country_of_institution')=="Sweden" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Sweden</option>
                                                        <option value="Switzerland" <?php if(old('country_of_institution')=="Switzerland" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Switzerland</option>
                                                        <option value="Syrian Arab Republic" <?php if(old('country_of_institution')=="Syrian Arab Republic" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Syrian Arab Republic</option>
                                                        <option value="Taiwan, Province of China" <?php if(old('country_of_institution')=="Taiwan, Province of China" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Taiwan, Province of China</option>
                                                        <option value="Tajikistan" <?php if(old('country_of_institution')=="Tajikistan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Tajikistan</option>
                                                        <option value="Tanzania, United Republic of" <?php if(old('country_of_institution')=="Tanzania, United Republic of" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Tanzania, United Republic of</option>
                                                        <option value="Thailand" <?php if(old('country_of_institution')=="Thailand" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Thailand</option>
                                                        <option value="Timor-Leste" <?php if(old('country_of_institution')=="Timor-Leste" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Timor-Leste</option>
                                                        <option value="Togo" <?php if(old('country_of_institution')=="Togo" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Togo</option>
                                                        <option value="Tokelau" <?php if(old('country_of_institution')=="Tokelau" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Tokelau</option>
                                                        <option value="Tonga" <?php if(old('country_of_institution')=="Tonga" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Tonga</option>
                                                        <option value="Trinidad and Tobago" <?php if(old('country_of_institution')=="Trinidad and Tobago" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Trinidad and Tobago</option>
                                                        <option value="Tunisia" <?php if(old('country_of_institution')=="Tunisia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Tunisia</option>
                                                        <option value="Turkey" <?php if(old('country_of_institution')=="Turkey" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Turkey</option>
                                                        <option value="Turkmenistan" <?php if(old('country_of_institution')=="Turkmenistan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Turkmenistan</option>
                                                        <option value="Turks and Caicos Islands" <?php if(old('country_of_institution')=="Turks and Caicos Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Turks and Caicos Islands</option>
                                                        <option value="Tuvalu" <?php if(old('country_of_institution')=="Tuvalu" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Tuvalu</option>
                                                        <option value="Uganda" <?php if(old('country_of_institution')=="Uganda" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Uganda</option>
                                                        <option value="Ukraine" <?php if(old('country_of_institution')=="Ukraine" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Ukraine</option>
                                                        <option value="United Arab Emirates" <?php if(old('country_of_institution')=="United Arab Emirates" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>United Arab Emirates</option>
                                                        <option value="United Kingdom" <?php if(old('country_of_institution')=="United Kingdom" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>United Kingdom</option>
                                                        <option value="United States" <?php if(old('country_of_institution')=="United States" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>United States</option>
                                                        <option value="United States Minor Outlying Islands" <?php if(old('country_of_institution')=="United States Minor Outlying Islands" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>United States Minor Outlying Islands</option>
                                                        <option value="Uruguay" <?php if(old('country_of_institution')=="Uruguay" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Uruguay</option>
                                                        <option value="Uzbekistan" <?php if(old('country_of_institution')=="Uzbekistan" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Uzbekistan</option>
                                                        <option value="Vanuatu" <?php if(old('country_of_institution')=="Vanuatu" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Vanuatu</option>
                                                        <option value="Venezuela" <?php if(old('country_of_institution')=="Venezuela" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Venezuela</option>
                                                        <option value="Viet Nam" <?php if(old('country_of_institution')=="Viet Nam" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Viet Nam</option>
                                                        <option value="Virgin Islands, British" <?php if(old('country_of_institution')=="Virgin Islands, British" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Virgin Islands, British</option>
                                                        <option value="Virgin Islands, U.s." <?php if(old('country_of_institution')=="Virgin Islands, U.s." ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Virgin Islands, U.s.</option>
                                                        <option value="Wallis and Futuna" <?php if(old('country_of_institution')=="Wallis and Futuna" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Wallis and Futuna</option>
                                                        <option value="Western Sahara" <?php if(old('country_of_institution')=="Western Sahara" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Western Sahara</option>
                                                        <option value="Yemen" <?php if(old('country_of_institution')=="Yemen" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Yemen</option>
                                                        <option value="Zambia" <?php if(old('country_of_institution')=="Zambia" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Zambia</option>
                                                        <option value="Zimbabwe" <?php if(old('country_of_institution')=="Zimbabwe" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> Name of Institution <span class="red">*</span> </label>
                                                    <input type="text" name="name_of_institution" id="name_of_institution" class="form-control" placeholder="Enter Name of Institution...">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> Level of Education <span class="red">*</span> </label>
                                                    <select name="level_of_education" id="level_of_education" class="form-select" aria-label="Default select example">
                                                        <option value="">None</option>
                                                        <optgroup label="Primary"></optgroup>
                                                        <option value="Greda 1" <?php if(old('level_of_education')=="Grade 1" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Grade 1</option>
                                                        <option value="Greda 2" <?php if(old('level_of_education')=="Grade 2" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Grade 2</option>
                                                        <option value="Greda 3" <?php if(old('level_of_education')=="Grade 3" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Grade 3</option>
                                                        <option value="Greda 4" <?php if(old('level_of_education')=="Grade 4" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Grade 4</option>
                                                        <option value="Greda 5" <?php if(old('level_of_education')=="Grade 5" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Grade 5</option>
                                                        <option value="Greda 6" <?php if(old('level_of_education')=="Grade 6" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Grade 6</option>
                                                        <option value="Greda 7" <?php if(old('level_of_education')=="Grade 7" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Grade 7</option>
                                                        <option value="Greda 8" <?php if(old('level_of_education')=="Grade 8" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Grade 8</option>
                                                        <optgroup label="Secondary"></optgroup>
                                                        <option value="Greda 9" <?php if(old('level_of_education')=="Grade 9" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Grade 9</option>
                                                        <option value="Greda 10" <?php if(old('level_of_education')=="Grade 10" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Grade 10</option>
                                                        <option value="Greda 11" <?php if(old('level_of_education')=="Grade 11" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Grade 11</option>
                                                        <option value="Greda 12" <?php if(old('level_of_education')=="Grade 12 / High School" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Grade 12 / High School</option>
                                                        <optgroup label="Undergraduate"></optgroup>
                                                        <option value="1-Year Post-Secondary Certificate" <?php if(old('level_of_education')=="1-Year Post-Secondary Certificate" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>1-Year Post-Secondary Certificate</option>
                                                        <option value="2-Year Undergradute Diploma" <?php if(old('level_of_education')=="2-Year Undergradute Diploma" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>2-Year Undergradute Diploma</option>
                                                        <option value="2-Year Undergradute Advanced Diploma" <?php if(old('level_of_education')=="2-Year Undergradute Advanced Diploma" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>2-Year Undergradute Advanced Diploma</option>
                                                        <option value="3-Year Bachelors Degree" <?php if(old('level_of_education')=="3-Year Bachelors Degree" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>3-Year Bachelors Degree</option>
                                                        <option value="4-Year Bachelors Degree" <?php if(old('level_of_education')=="4-Year Bachelors Degree" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>4-Year Bachelors Degree</option>
                                                        <optgroup label="Postgraduate"></optgroup>
                                                        <option value="Postgraduate" <?php if(old('level_of_education')=="Postgraduate Certificate/Diploma" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Postgraduate Certificate/Diploma</option>
                                                        <option value="Masters Degree" <?php if(old('level_of_education')=="Masters Degree" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Masters Degree</option>
                                                        <option value="Doctoral Degree (Phd, M.D., ...)" <?php if(old('level_of_education')=="Doctoral Degree (Phd, M.D., ...)" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Doctoral Degree (Phd, M.D., ...)</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-md-3">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Primary Language of Instruction <span class="red">*</span> </label>
                                                    <input name="primary_language_of_instruction" id="primary_language_of_instruction" type="text" class="form-control" placeholder="Enter Language of Instrucation...">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Attended Institution From<span class="red">*</span> </label>
                                                    <input name="attended_institution_from" id="attended_institution_from" type="date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Attended Institution To<span class="red">*</span> </label>
                                                    <input name="attended_institution_to" id="attended_institution_to" type="date" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-md-3">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Degree Name <span class="red">*</span> </label>
                                                    <input name="degree_name" id="degree_name" type="text" class="form-control" placeholder="Enter Degree Name...">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group radio-main">
                                                    <label>I have graduated from this institution <span class="red">*</span> </label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Yes" name="graduated_institution" id="graduated_institution">
                                                        <label class="form-check-label" for="flexRadioDefault6">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="No" name="graduated_institution" id="graduated_institution" checked>
                                                        <label class="form-check-label" for="flexRadioDefault5">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Graduation Date <span class="red">*</span> </label>
                                                    <input id="graduation_date" name="graduation_date" type="date" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="physical_certificate_for_this_degree" id="physical_certificate_for_this_degree" value="Yes">
                                                    <label class="form-check-label" for="flexCheckDefaultphysical">
                                                        I have the physical certificate for this degree
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3>School Address</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Address<span class="red">*</span> </label>
                                                    <input name="school_address" id="school_address" type="text" class="form-control" placeholder="Enter Address...">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>City/Town<span class="red">*</span> </label>
                                                    <input name="school_city_town" id="school_city_town" type="text" class="form-control" placeholder="Enter City/Town...">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Province<span class="red">*</span> </label>
                                                    <input name="school_province" id="school_province" type="text" class="form-control" placeholder="Enter Province...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Postal/Zip Code </label>
                                                    <input name="school_postal_code" id="school_postal_code" type="text" class="form-control" placeholder="Enter Postal/Zip Code...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-md-3">
                                        <div class="col-md-12">
                                            <div class="float-end">
                                                <button class="btn-prev prevBtn" type="button">Back</button>
                                                <button id="gotoStep3" class="btn-next" type="button">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="setup-content" id="step-3">
                    <form id="form3">
                        <div class="card p-2">
                            <div class="card-body">
                                <h5 class="heading-registration">Registration Date: May 12th, 2022</h5>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>English Exam Type</label>
                                            <select name="english_exam_type" id="english_exam_type" class="form-select" aria-label="Default select example">
                                                <option value="">Select English Exam Type</option>
                                                <option value="I don't have this" <?php if(old('english_exam_type')=="I don't have this" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>I don't have this</option>
                                                <option value="I will provide this later" <?php if(old('english_exam_type')=="I will provide this later" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>I will provide this later</option>
                                                <option value="TOEFL" <?php if(old('english_exam_type')=="TOEFL" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>TOEFL</option>
                                                <option value="IELTS" <?php if(old('english_exam_type')=="IELTS" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>IELTS</option>
                                                <option value="Duolingo English Test" <?php if(old('english_exam_type')=="Duolingo English Test" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>Duolingo English Test</option>
                                                <option value="PTE" <?php if(old('english_exam_type')=="PTE" ): ?> <?php echo e('selected'); ?> <?php endif; ?>>PTE</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Date of Exam <span class="red">*</span> </label>
                                            <input name="date_of_exam" id="date_of_exam" type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label> Enter Exact Scores <span class="red">*</span> </label>
                                            <input name="lisenting" id="lisenting" type="tel" class="form-control" placeholder="Lisenting ...">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group pt-md-4-custom ">
                                            <input name="reading" id="reading" type="tel" class="form-control" placeholder="Reading ...">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group pt-md-4-custom ">
                                            <input name="writing" id="writing" type="tel" class="form-control" placeholder="Writing ...">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group pt-md-4-custom">
                                            <input name="speaking" id="speaking" type="tel" class="form-control" placeholder="Speaking  ...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-md-3">
                            <div class="card-body">
                                <h5 class="heading-registration">Additional Qualifications</h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input main-switch" type="checkbox" id="flexSwitchCheckDefaultexam">
                                            <label class="form-check-label" for="flexSwitchCheckDefaultexam"> I have GRE exam scores </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-switch-toggle mt-md-3">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> GRE Exam Date </label>
                                                <input name="gre_exam_date" id="gre_exam_date" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Verbal </label>
                                                <input name="gre_verbal_score" id="gre_verbal_score" type="tel" class="form-control" placeholder="Score">
                                                <input name="gre_verbal_rank" id="gre_verbal_rank" type="tel" class="form-control" placeholder="Rank %">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Quantitative </label>
                                                <input name="gre_quantitative_score" id="gre_quantitative_score" type="tel" class="form-control" placeholder="Score">
                                                <input name="gre_quantitative_rank" id="gre_quantitative_rank" type="tel" class="form-control" placeholder="Rank %">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Writing </label>
                                                <input name="gre_writing_score" id="gre_writing_score" type="tel" class="form-control" placeholder="Score">
                                                <input name="gre_writing_rank" id="gre_writing_rank" type="tel" class="form-control" placeholder="Rank %">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-md-3">
                                    <div class="col-md-12">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input main-switch2" type="checkbox" id="flexSwitchCheckDefaultgmat">
                                            <label class="form-check-label" for="flexSwitchCheckDefaultgmat"> I have GMAT exam scores </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-switch-toggle2 mt-md-3">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> GRE Exam Date </label>
                                                <input name="gmat_gre_exam_date" id="gmat_gre_exam_date" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Verbal </label>
                                                <input name="gmat_verbal_score" id="gmat_verbal_score" type="tel" class="form-control" placeholder="Score">
                                                <input name="gmat_verbal_rank" id="gmat_verbal_rank" type="tel" class="form-control" placeholder="Rank %">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Quantitative </label>
                                                <input name="gmat_quantitative_score" id="gmat_quantitative_score" type="tel" class="form-control" placeholder="Score">
                                                <input name="gmat_quantitative_rank" id="gmat_quantitative_rank" type="tel" class="form-control" placeholder="Rank %">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Writing </label>
                                                <input name="gmat_writing_score" id="gmat_writing_score" type="tel" class="form-control" placeholder="Score">
                                                <input name="gmat_writing_rank" id="gmat_writing_rank" type="tel" class="form-control" placeholder="Rank %">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-md-3">
                                    <div class="col-md-12">
                                        <div class="float-end">
                                            <button class="btn-prev prevBtn" type="button">Back</button>
                                            <button id="gotoStep4" class="btn-next" type="button">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="setup-content" id="step-4">
                    <div class="card p-2">
                        <form id="form4">
                            <div class="card-body">
                                <h4>Background Information</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Have you been refused a visa from Canada, the USA, the United Kingdom, New Zealand, Australia or Ireland?</p>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Yes" name="refused_visa" id="refused_visa" checked>
                                                        <label class="form-check-label px-md-2" for="flexRadioDefaultyes1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="No" name="refused_visa" id="refused_visa">
                                                        <label class="form-check-label px-md-2" for="flexRadioDefaultno1">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-md-3">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Do you have a valid Study Permit / Visa?</label>
                                            <select class="select2 form-control select2-multiple" name="study_permit_visa[]" id="study_permit_visa" multiple="multiple" data-placeholder="Choose ...">
                                                <option value="I don't have this">I don't have this</option>
                                                <option value="USA F1 Visa">USA F1 Visa</option>
                                                <option value="Canadian Study Permit or Visitor Visa">Canadian Study Permit or Visitor Visa</option>
                                                <option value="UK Student Visa (Tier 4) or Short Term Study Visa">UK Student Visa (Tier 4) or Short Term Study Visa </option>
                                                <option value="Australian Student Visa">Australian Student Visa</option>
                                                <option value="Irish Stamp 2">Irish Stamp 2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-md-3">
                                    <div class="form-group">
                                        <label>If you answered "Yes" to any of the questions above, please provide more details below:</label>
                                        <textarea name="more_background_details" id="more_background_details" cols="10" rows="4" class="form-control" placeholder="Provide details..."></textarea>
                                    </div>
                                </div>
                                <div class="row mt-md-3">
                                    <div class="col-md-12">
                                        <div class="float-end">
                                            <button class="btn-prev prevBtn" type="button">Back</button>
                                            <button id="gotoStep5" class="btn-next" type="button">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="setup-content" id="step-5">
                    <div class="card p-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div>
                                        <h4 class="d-inline">Profile Complete!</h4>
                                        <button type="button" class="discover-programs float-end">Discourse School and Programs</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <form id="form5">
                        <div class="upload-documents">
                            <div class="card mt-md-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>Upload Documents</h3>
                                        </div>
                                    </div>
                                    <hr>
                                    <ul>
                                        <li>
                                            <div class="d-flex justify-content-between">
                                                <div class="upload-content">
                                                    <h4>Transcript For 3-Year Undergraduate Advanced Diploma Form</h4>
                                                    <h6>Default Transcript Education History Prototype</h6>
                                                </div>
                                                <div class="upload-img">
                                                    <input type="file" accept=".png, .jpg, .jpeg" name="three_year_undergraduate_advanced_diploma" id="three_year_undergraduate_advanced_diploma" class="form-control">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between">
                                                <div class="upload-content">
                                                    <h4>Transcript For 3-Year Undergraduate Advanced Diploma Form</h4>
                                                    <h6>Default Transcript Education History Prototype</h6>
                                                </div>
                                                <div class="upload-img">
                                                    <input type="file" class="form-control">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between">
                                                <div class="upload-content">
                                                    <h4>Transcript For 3-Year Undergraduate Advanced Diploma Form</h4>
                                                    <h6>Default Transcript Education History Prototype</h6>
                                                </div>
                                                <div class="upload-img">
                                                    <input type="file" class="form-control">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between">
                                                <div class="upload-content">
                                                    <h4>Transcript For 3-Year Undergraduate Advanced Diploma Form</h4>
                                                    <h6>Default Transcript Education History Prototype</h6>
                                                </div>
                                                <div class="upload-img">
                                                    <input type="file" class="form-control">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between">
                                                <div class="upload-content">
                                                    <h4>Transcript For 3-Year Undergraduate Advanced Diploma Form</h4>
                                                    <h6>Default Transcript Education History Prototype</h6>
                                                </div>
                                                <div class="upload-img">
                                                    <input type="file" class="form-control">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-md-3">
                            <div class="col-md-12">
                                <div class="float-end">
                                    <button class="btn-prev prevBtn" type="button">Back</button>
                                    <button class="btn-next" type="submit">Finsh</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>


<script>
    $(document).ready(function() {
        getStudentProfile();
    });
</script>


<script>
    function getStudentProfile() {
        $.ajax({
            url: "<?php echo e(route('getStudentProfile')); ?>",
            type: "GET",
            success: function(response) {
                if (response.studentProfile != null) {
                    $("#first_name").val(response.studentProfile.first_name);
                    $("#middle_name").val(response.studentProfile.middle_name);
                    $("#last_name").val(response.studentProfile.last_name);
                    $("#date_of_birth").val(response.studentProfile.date_of_birth);
                    $("#first_language").val(response.studentProfile.first_language);
                    $("#country_of_citizenship").val(response.studentProfile.country_of_citizenship);
                    $("#passport_number").val(response.studentProfile.passport_number);
                    $("#address").val(response.studentProfile.address);
                    $("#city_town").val(response.studentProfile.city_town);
                    $("#country").val(response.studentProfile.country);
                    $("#province_state").val(response.studentProfile.province_state);
                    $("#postal_code").val(response.studentProfile.postal_code);
                    $("#email").val(response.studentProfile.email);
                    $("#phone_number").val(response.studentProfile.phone_number);
                    var gender = response.studentProfile.gender;
                    var marital_status = response.studentProfile.marital_status;
                    var graduated_institution = response.studentProfile.graduated_institution;
                    var refused_visa = response.studentProfile.refused_visa;

                    $("input[name=gender][value=" + gender + "]").prop('checked', true);
                    $("input[name=marital_status][value=" + marital_status + "]").prop('checked', true);
                    $("input[name=graduated_institution][value=" + graduated_institution + "]").prop('checked', true);
                    $("input[name=refused_visa][value=" + refused_visa + "]").prop('checked', true);

                    $("#country_of_education").val(response.studentProfile.country_of_education);
                    $("#highest_level_of_education").val(response.studentProfile.highest_level_of_education);
                    $("#grading_scheme").val(response.studentProfile.grading_scheme);
                    $("#grade_average").val(response.studentProfile.grade_average);
                    $("#country_of_institution").val(response.studentProfile.country_of_institution);
                    $("#name_of_institution").val(response.studentProfile.name_of_institution);
                    $("#level_of_education").val(response.studentProfile.level_of_education);
                    $("#primary_language_of_instruction").val(response.studentProfile.primary_language_of_instruction);
                    $("#attended_institution_from").val(response.studentProfile.attended_institution_from);
                    $("#attended_institution_to").val(response.studentProfile.attended_institution_to);
                    $("#degree_name").val(response.studentProfile.degree_name);
                    $("#graduation_date").val(response.studentProfile.graduation_date);
                    $("#school_address").val(response.studentProfile.school_address);
                    $("#school_city_town").val(response.studentProfile.school_city_town);
                    $("#school_province").val(response.studentProfile.school_province);
                    $("#school_postal_code").val(response.studentProfile.school_postal_code);
                    $("#english_exam_type").val(response.studentProfile.english_exam_type);
                    $("#date_of_exam").val(response.studentProfile.date_of_exam);
                    $("#lisenting").val(response.studentProfile.lisenting);
                    $("#reading").val(response.studentProfile.reading);
                    $("#writing").val(response.studentProfile.writing);
                    $("#speaking").val(response.studentProfile.speaking);
                    $("#gre_exam_date").val(response.studentProfile.gre_exam_date);
                    $("#gre_verbal_score").val(response.studentProfile.gre_verbal_score);
                    $("#gre_verbal_rank").val(response.studentProfile.gre_verbal_rank);
                    $("#gre_quantitative_score").val(response.studentProfile.gre_quantitative_score);
                    $("#gre_quantitative_rank").val(response.studentProfile.gre_quantitative_rank);
                    $("#gre_writing_score").val(response.studentProfile.gre_writing_score);
                    $("#gre_writing_rank").val(response.studentProfile.gre_writing_rank);
                    $("#gmat_gre_exam_date").val(response.studentProfile.gmat_gre_exam_date);
                    $("#gmat_verbal_score").val(response.studentProfile.gmat_verbal_score);
                    $("#gmat_verbal_rank").val(response.studentProfile.gmat_verbal_rank);
                    $("#gmat_quantitative_score").val(response.studentProfile.gmat_quantitative_score);
                    $("#gmat_quantitative_rank").val(response.studentProfile.gmat_quantitative_rank);
                    $("#gmat_writing_score").val(response.studentProfile.gmat_writing_score);
                    $("#gmat_writing_rank").val(response.studentProfile.gmat_writing_rank);
                    $("#more_background_details").val(response.studentProfile.more_background_details);

                    if (response.studentProfile.graduated_from_most_recent_school == 'Yes') {
                        $("#graduated_from_most_recent_school").prop('checked', true);
                    } else {
                        $("#graduated_from_most_recent_school").prop('checked', false);
                    }
                    if (response.studentProfile.physical_certificate_for_this_degree == 'Yes') {
                        $("#physical_certificate_for_this_degree").prop('checked', true);
                    } else {
                        $("#physical_certificate_for_this_degree").prop('checked', false);
                    }

                    var study_permit_visa = response.studentProfile.study_permit_visa;
                    if (study_permit_visa != '' || study_permit_visa != null) {
                        var result = study_permit_visa.split(',');
                        $('#study_permit_visa').val(result).change();
                    }


                    var threeYearUndergraduateAdvancedDiplomaImage = response.studentProfile.three_year_undergraduate_advanced_diploma;
                    threeYearUndergraduateAdvancedDiplomaImage = "/images/" + threeYearUndergraduateAdvancedDiplomaImage;

                    getImgURL(threeYearUndergraduateAdvancedDiplomaImage, (imgBlob) => {
                        let fileName = response.studentProfile.three_year_undergraduate_advanced_diploma;
                        let file = new File([imgBlob], fileName, {
                            type: "image/jpeg",
                            lastModified: new Date().getTime()
                        }, 'utf-8');
                        let container = new DataTransfer();
                        container.items.add(file);
                        document.querySelector('#three_year_undergraduate_advanced_diploma').files = container.files;

                    })

                    function getImgURL(url, callback) {
                        var xhr = new XMLHttpRequest();
                        xhr.onload = function() {
                            callback(xhr.response);
                        };
                        xhr.open('GET', url);
                        xhr.responseType = 'blob';
                        xhr.send();
                    }




                }
            }
        });
    }
</script>

<script>
    $(document).ready(function() {

        $('#form1').validate({
            rules: {
                first_name: {
                    required: true
                },
                date_of_birth: {
                    required: true
                },
                first_language: {
                    required: true
                },
                country_of_citizenship: {
                    required: true
                },
                passport_number: {
                    required: true
                },
                marital_status: {
                    required: true
                },
                gender: {
                    required: true
                },
                address: {
                    required: true
                },
                city_town: {
                    required: true
                },
                country: {
                    required: true
                },
                province_state: {
                    required: true
                },
                postal_code: {
                    required: true
                },
                email: {
                    required: true
                },
                phone_number: {
                    required: true
                },
            },
            messages: {
                first_name: {
                    required: "Please enter first name",
                },
                'date_of_birth': {
                    required: "Please select date of birth",
                },
                first_language: {
                    required: "Please enter first language",
                },
                country_of_citizenship: {
                    required: "Please select country of citizenship",
                },
                passport_number: {
                    required: "Please enter passport number",
                },
                marital_status: {
                    required: "Please select marital status",
                },
                gender: {
                    required: "Please select gender",
                },
                address: {
                    required: "Please enter address",
                },
                city_town: {
                    required: "Please enter city",
                },
                country: {
                    required: "Please select country",
                },
                province_state: {
                    required: "Please select province/state",
                },
                postal_code: {
                    required: "Please enter pincode",
                },
                email: {
                    required: "Please please enter email",
                },
                phone_number: {
                    required: "Please enter your phone number",
                }

            },
        });

        $('#form2').validate({
            rules: {
                country_of_education: {
                    required: true
                },
                highest_level_of_education: {
                    required: true
                },
                grading_scheme: {
                    required: true
                },
                grade_average: {
                    required: true
                },
                country_of_institution: {
                    required: true
                },
                name_of_institution: {
                    required: true
                },
                level_of_education: {
                    required: true
                },
                primary_language_of_instruction: {
                    required: true
                },
                attended_institution_from: {
                    required: true
                },
                attended_institution_to: {
                    required: true
                },
                degree_name: {
                    required: true
                },
                graduated_institution: {
                    required: true
                },
                graduation_date: {
                    required: true
                },
                school_address: {
                    required: true
                },
                school_city_town: {
                    required: true
                },
                school_province: {
                    required: true
                },
                school_postal_code: {
                    required: true
                }
            },
            messages: {
                country_of_education: {
                    required: "Please select country of education",
                },
                'highest_level_of_education': {
                    required: "Please select highest level of education",
                },
                grading_scheme: {
                    required: "Please select grading scheme",
                },
                grade_average: {
                    required: "Please enter grade average",
                },
                country_of_institution: {
                    required: "Please select country of institution",
                },
                name_of_institution: {
                    required: "Please enter name of institution",
                },
                level_of_education: {
                    required: "Please select level of education",
                },
                primary_language_of_instruction: {
                    required: "Please enter primary language of instruction",
                },
                attended_institution_from: {
                    required: "Please choose attended institution from",
                },
                attended_institution_to: {
                    required: "Please choose attended institution to",
                },
                degree_name: {
                    required: "Please enter degree name",
                },
                graduated_institution: {
                    required: "Please select graduated institution",
                },
                graduation_date: {
                    required: "Please choose graduation date",
                },
                school_address: {
                    required: "Please enter your school address",
                },
                school_city_town: {
                    required: "Please enter your school city town",
                },
                school_province: {
                    required: "Please enter your province",
                },
                school_postal_code: {
                    required: "Please enter your school postal code",
                }

            },
        });

        $('#form3').validate({
            rules: {
                english_exam_type: {
                    required: true
                },
                date_of_exam: {
                    required: true
                },
                lisenting: {
                    required: true
                },
                reading: {
                    required: true
                },
                writing: {
                    required: true
                },
                speaking: {
                    required: true
                },
                gre_exam_date: {
                    required: true
                },
                gre_verbal_score: {
                    required: true
                },
                gre_verbal_rank: {
                    required: true
                },
                gre_quantitative_score: {
                    required: true
                },
                gre_quantitative_rank: {
                    required: true
                },
                gre_writing_score: {
                    required: true
                },
                gre_writing_rank: {
                    required: true
                },
                gmat_gre_exam_date: {
                    required: true
                },
                gmat_verbal_score: {
                    required: true
                },
                gmat_verbal_rank: {
                    required: true
                },
                gmat_quantitative_score: {
                    required: true
                },
                gmat_quantitative_rank: {
                    required: true
                },
                gmat_writing_score: {
                    required: true
                },
                gmat_writing_rank: {
                    required: true
                },
                gmat_verbal_rank: {
                    required: true
                },
                gmat_verbal_rank: {
                    required: true
                },
                gmat_verbal_rank: {
                    required: true
                },

            },
            messages: {
                english_exam_type: {
                    required: "Please select english exam type",
                },
                'date_of_exam': {
                    required: "Please choose date of exam",
                },
                lisenting: {
                    required: "Please enter enter exact Scores of lisenting",
                },
                reading: {
                    required: "Please enter enter exact Scores of reading",
                },
                writing: {
                    required: "Please enter enter exact Scores of writing",
                },
                speaking: {
                    required: "Please enter name of institution",
                },
                gre_exam_date: {
                    required: "Please choose gre exam date",
                },
                gre_verbal_score: {
                    required: "Please enter gre verbal score",
                },
                gre_verbal_rank: {
                    required: "Please enter gre verbal rank",
                },
                gre_quantitative_score: {
                    required: "Please enter gre quantitative score",
                },
                gre_quantitative_rank: {
                    required: "Please enter gre quantitative rank",
                },
                gre_writing_score: {
                    required: "Please enter gre writing score",
                },
                gre_writing_rank: {
                    required: "Please enter gre writing rank",
                },
                gmat_gre_exam_date: {
                    required: "Please choose gmat gre exam date",
                },
                gmat_verbal_score: {
                    required: "Please enter gmat verbal score",
                },
                gmat_verbal_rank: {
                    required: "Please enter gmat verbal rank",
                },
                gmat_quantitative_score: {
                    required: "Please enter gmat quantitative score",
                },
                gmat_quantitative_rank: {
                    required: "Please enter gmat quantitative rank",
                },
                gmat_writing_score: {
                    required: "Please enter gmat writing score",
                },
                gmat_writing_rank: {
                    required: "Please enter gmat writing rank",
                }

            },



        });

        $('#form4').validate({
            rules: {
                field3: {
                    required: true
                }
            },

        });

        $('#form5').validate({
            rules: {
                field3: {
                    required: true
                }
            },

            submitHandler: function(form) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });


                var formData = new FormData()

                var image = $("#three_year_undergraduate_advanced_diploma")[0].files[0];

                formData.append('three_year_undergraduate_advanced_diploma', image);


                var first_name = $('input[name="first_name"]').val();
                var middle_name = $('input[name="middle_name"]').val();
                var last_name = $('input[name="last_name"]').val();
                var date_of_birth = $('input[name="date_of_birth"]').val();
                var first_language = $('input[name="first_language"]').val();


                var more_background_details = $('textarea#more_background_details').val();


                var passport_number = $('input[name="passport_number"]').val();
                var marital_status = $('input[name="marital_status"]').val();
                var gender = $('input[name="gender"]').val();
                var graduated_institution = $('input[name="graduated_institution"]').val();
                country = document.getElementById('country').value;
                country_of_citizenship = document.getElementById('country_of_citizenship').value;
                province_state = document.getElementById('province_state').value;
                country_of_education = document.getElementById('country_of_education').value;
                highest_level_of_education = document.getElementById('highest_level_of_education').value;
                grading_scheme = document.getElementById('grading_scheme').value;
                country_of_institution = document.getElementById('country_of_institution').value;
                level_of_education = document.getElementById('level_of_education').value;
                english_exam_type = document.getElementById('english_exam_type').value;



                var refused_visa = $("input[name=refused_visa]");
                var refused_visaSelected = refused_visa.filter(":checked").val();


                var address = $('input[name="address"]').val();
                var city_town = $('input[name="city_town"]').val();
                var postal_code = $('input[name="postal_code"]').val();
                var email = $('input[name="email"]').val();
                var phone_number = $('input[name="phone_number"]').val();
                var grade_average = $('input[name="grade_average"]').val();
                var graduated_from_most_recent_school = $('input[name="graduated_from_most_recent_school"]').val();
                var physical_certificate_for_this_degree = $('input[name="physical_certificate_for_this_degree"]').val();
                var name_of_institution = $('input[name="name_of_institution"]').val();
                var primary_language_of_instruction = $('input[name="primary_language_of_instruction"]').val();
                var attended_institution_from = $('input[name="attended_institution_from"]').val();
                var attended_institution_to = $('input[name="attended_institution_to"]').val();
                var degree_name = $('input[name="degree_name"]').val();
                var graduation_date = $('input[name="graduation_date"]').val();
                var school_address = $('input[name="school_address"]').val();
                var school_city_town = $('input[name="school_city_town"]').val();
                var school_province = $('input[name="school_province"]').val();

                var school_postal_code = $('input[name="school_postal_code"]').val();
                var date_of_exam = $('input[name="date_of_exam"]').val();
                var lisenting = $('input[name="lisenting"]').val();
                var reading = $('input[name="reading"]').val();
                var writing = $('input[name="writing"]').val();
                var speaking = $('input[name="speaking"]').val();
                var gre_exam_date = $('input[name="gre_exam_date"]').val();
                var gre_verbal_score = $('input[name="gre_verbal_score"]').val();
                var gre_verbal_rank = $('input[name="gre_verbal_rank"]').val();

                var gre_quantitative_score = $('input[name="gre_quantitative_score"]').val();
                var gre_quantitative_rank = $('input[name="gre_quantitative_rank"]').val();
                var gre_writing_score = $('input[name="gre_writing_score"]').val();
                var gre_writing_rank = $('input[name="gre_writing_rank"]').val();
                var gmat_gre_exam_date = $('input[name="gmat_gre_exam_date"]').val();
                var gmat_verbal_score = $('input[name="gmat_verbal_score"]').val();
                var gmat_verbal_rank = $('input[name="gmat_verbal_rank"]').val();
                var gmat_quantitative_score = $('input[name="gmat_quantitative_score"]').val();
                var gmat_quantitative_rank = $('input[name="gmat_quantitative_rank"]').val();
                var gmat_writing_score = $('input[name="gmat_writing_score"]').val();
                var gmat_writing_rank = $('input[name="gmat_writing_rank"]').val();







                formData.append('first_name', first_name);
                formData.append('middle_name', middle_name);
                formData.append('last_name', last_name);
                formData.append('date_of_birth', date_of_birth);
                formData.append('first_language', first_language);
                formData.append('more_background_details', more_background_details);
                formData.append('passport_number', passport_number);
                formData.append('marital_status', marital_status);
                formData.append('gender', gender);
                formData.append('country', country);
                formData.append('country_of_citizenship', country_of_citizenship);
                formData.append('province_state', province_state);
                formData.append('country_of_education', country_of_education);
                formData.append('highest_level_of_education', highest_level_of_education);
                formData.append('grading_scheme', grading_scheme);
                formData.append('country_of_institution', country_of_institution);
                formData.append('level_of_education', level_of_education);
                formData.append('english_exam_type', english_exam_type);
                formData.append('address', address);
                formData.append('city_town', city_town);
                formData.append('postal_code', postal_code);
                formData.append('email', email);
                formData.append('phone_number', phone_number);
                formData.append('grade_average', grade_average);
                formData.append('graduated_from_most_recent_school', graduated_from_most_recent_school);
                formData.append('name_of_institution', name_of_institution);
                formData.append('primary_language_of_instruction', primary_language_of_instruction);
                formData.append('attended_institution_from', attended_institution_from);
                formData.append('attended_institution_to', attended_institution_to);
                formData.append('degree_name', degree_name);
                formData.append('graduated_institution', graduated_institution);
                formData.append('graduation_date', graduation_date);
                formData.append('school_address', school_address);
                formData.append('school_city_town', school_city_town);
                formData.append('school_province', school_province);
                formData.append('school_postal_code', school_postal_code);
                formData.append('date_of_exam', date_of_exam);
                formData.append('lisenting', lisenting);
                formData.append('reading', reading);
                formData.append('writing', writing);
                formData.append('speaking', speaking);
                formData.append('gre_exam_date', gre_exam_date);
                formData.append('gre_verbal_score', gre_verbal_score);
                formData.append('gre_verbal_rank', gre_verbal_rank);
                formData.append('gre_quantitative_score', gre_quantitative_score);
                formData.append('gre_quantitative_rank', gre_quantitative_rank);
                formData.append('gre_writing_score', gre_writing_score);
                formData.append('gre_writing_rank', gre_writing_rank);
                formData.append('gmat_verbal_score', gmat_verbal_score);
                formData.append('gmat_gre_exam_date', gmat_gre_exam_date);
                formData.append('gmat_verbal_rank', gmat_verbal_rank);
                formData.append('gmat_quantitative_score', gmat_quantitative_score);
                formData.append('gmat_quantitative_rank', gmat_quantitative_rank);
                formData.append('gmat_writing_score', gmat_writing_score);
                formData.append('gmat_writing_rank', gmat_writing_rank);
                formData.append('refused_visa', refused_visaSelected);
                formData.append('physical_certificate_for_this_degree', physical_certificate_for_this_degree);

                formData.append('study_permit_visa', $('#study_permit_visa').select2("val"));


                $.ajax({
                    url: "<?php echo e(route('updateStudentProfile')); ?>",
                    enctype: 'multipart/form-data',
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $("html, body").animate({
                            scrollTop: 0
                        }, "slow");
                        $("#success_messae span").html(response.success);
                        $('#success_messae').show();

                        window.setTimeout(function() {
                            location.reload()
                        }, 2000)
                        // console.log(response);
                    }
                });
            }
        });

        $('#gotoStep2').on('click', function() {
            if ($('#form1').valid()) {
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;

                $(".form-group").removeClass("has-error");
                for (var i = 0; i < curInputs.length; i++) {
                    if (!curInputs[i].validity.valid) {
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }
                if (isValid)
                    nextStepWizard.removeAttr('disabled').trigger('click');
            }
        });

        $('#gotoStep3').on('click', function() {
            if ($('#form2').valid()) {
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;

                $(".form-group").removeClass("has-error");
                for (var i = 0; i < curInputs.length; i++) {
                    if (!curInputs[i].validity.valid) {
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }
                if (isValid)
                    nextStepWizard.removeAttr('disabled').trigger('click');
            }
        });

        $('#gotoStep4').on('click', function() {
            if ($('#form3').valid()) {
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;

                $(".form-group").removeClass("has-error");
                for (var i = 0; i < curInputs.length; i++) {
                    if (!curInputs[i].validity.valid) {
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }
                if (isValid)
                    nextStepWizard.removeAttr('disabled').trigger('click');
            }
        });
        $('#gotoStep5').on('click', function() {
            if ($('#form4').valid()) {
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;

                $(".form-group").removeClass("has-error");
                for (var i = 0; i < curInputs.length; i++) {
                    if (!curInputs[i].validity.valid) {
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }
                if (isValid)
                    nextStepWizard.removeAttr('disabled').trigger('click');
            }
        });

    });
</script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.student_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/enrolhere/public_html/design/resources/views/student/student_profile.blade.php ENDPATH**/ ?>
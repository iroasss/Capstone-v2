<?php
include("header.php");
include("config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== ICON PAGE ===============-->
    <link rel="icon" type="image" href="img/LG-YELLOW.png" width=25px height=25px>
    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="css/remixicons.css" media="screen">
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!----===== Fa Icons CSS ===== -->
    <link rel="stylesheet" href="css/icons.css" media="screen">
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="css/styles.css" media="screen">
    <title>Adopt a Pet • FurFect Match</title>
</head>
<>
<?php include("header.php"); ?>


<div class="adoption-container">
    <h2>ADOPTION APPLICATION</h2>
    <p class="required-fields">** indicates required fields</p>

    <div class="form-section active" id="step1">
        <h3>APPLICANT'S INFO</h3>
        
        <form action="submit_application.php" method="POST">
            <div class="form-group">
                <label for="name">Name <span class="required">*</span></label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="address">Address <span class="required">*</span></label>
                <input type="text" id="address" name="address" required>
            </div>

            <div class="form-container">
                <div class="form-group">
                    <label for="phone">Phone *</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="birth-date">Birth Date *</label>
                    <input type="date" id="birth-date" name="birth-date" required>
                </div>
                <div class="form-group">
                    <label for="occupation">Occupation *</label>
                    <input type="text" id="occupation" name="occupation" required>
                </div>
                <div class="form-group">
                    <label for="company">Company/Business Name *</label>
                    <input type="text" id="company" name="company" required>
                </div>
                <div class="form-group">
                    <label for="social-media">Social Media Profile *</label>
                    <input type="url" id="social-media" name="social-media" required>
                </div>
            </div>
            <div class="form-buttons">
                <button type="button" class="cancel-button" onclick="window.history.back()">Cancel</button>
                <button type="button" class="next-button" onclick="nextStep(2)">Next</button>
            </div>
        </form>
    </div>
    
    <div class="form-section" id="step2">
        <h3>APPLICANT'S INFO</h3>
        
        <form action="submit_application.php" method="POST">
            <div class="form-group">
                <label for="status">Status <span class="required">*</span></label>
                <div class="form-options">
                    <label><input type="radio" name="status" value="single" required> Single</label>
                    <label><input type="radio" name="status" value="married"> Married</label>
                    <label><input type="radio" name="status" value="others"> Others</label>
                </div>
            </div>

            <div class="form-group">
                <label for="pronouns">Pronouns <span class="required">*</span></label>
                <div class="form-options">
                    <label><input type="radio" name="pronouns" value="she/her" required> She/her</label>
                    <label><input type="radio" name="pronouns" value="he/him"> He/him</label>
                    <label><input type="radio" name="pronouns" value="they/them"> They/them</label>
                </div>
            </div>

            <div class="form-group">
                <label for="prompted">What prompted you to adopt from CVO? <span class="required">*</span></label>
                <div class="form-options">
                    <label><input type="checkbox" name="prompted" value="friends" required> Friends</label>
                    <label><input type="checkbox" name="prompted" value="website"> Website</label>
                    <label><input type="checkbox" name="prompted" value="social-media"> Social Media</label>
                    <label><input type="checkbox" name="prompted" value="other"> Other</label>
                </div>
            </div>

            <div class="form-group">
                <label for="adopted-before">Have you adopted from CVO before? <span class="required">*</span></label>
                <div class="form-options">
                    <label><input type="radio" name="adopted-before" value="yes" required> Yes</label>
                    <label><input type="radio" name="adopted-before" value="no"> No</label>
                </div>
            </div>

            <div class="form-group">
                <label for="alt-contact">Alternate Contact <span class="required">*</span></label>
                <input type="text" id="alt-contact" name="alt-contact" placeholder="Full Name" required>
            </div>

            <div class="form-group">
                <p>If the applicant is a minor, a parent or guardian must be the alternate contact and co-sign the application.</p>
                <label for="relationship">Relationship <span class="required">*</span></label>
                <input type="text" id="relationship" name="relationship" required>
            </div>

            <div class="form-container">
                <div class="form-group">
                    <label for="phone">Phone <span class="required">*</span></label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="email">Email <span class="required">*</span></label>
                    <input type="email" id="email" name="email" required>
                </div>
            </div>

            <div class="form-buttons">
                <button type="button" class="back-button" onclick="previousStep(1)">Back</button>
                <button type="button" class="next-button" onclick="nextStep(3)">Next</button>
            </div>
        </form>
    </div>    

    <div class="form-section" id="step3">
    
        <p>In an effort to help the process go smoothly, please be as detailed as possible with your responses to the questions below.</p>
        <h3>QUESTIONNAIRE</h3>
        <form action="submit_application.php" method="POST">
            <div class="form-group">
                <label for="adopt-what">What are you looking to adopt? <span class="required">*</span></label>
                <div class="form-options">
                    <label><input type="radio" name="adopt-what" value="cat" required> Cat</label>
                    <label><input type="radio" name="adopt-what" value="dog"> Dog</label>
                    <label><input type="radio" name="adopt-what" value="both"> Both</label>
                    <label><input type="radio" name="adopt-what" value="not-decided"> Not decided</label>
                </div>
            </div>

            <div class="form-group">
                <label for="shelter-animal">Are you applying to adopt a specific shelter animal? <span class="required">*</span></label>
                <div class="form-options">
                    <label><input type="radio" name="shelter-animal" value="yes" required> Yes</label>
                    <label><input type="radio" name="shelter-animal" value="no"> No</label>
                </div>
            </div>

            <div class="form-group">
                <label for="ideal-pet">Describe your ideal pet, including its sex, age, appearance, etc. <span class="required">*</span></label>
                <textarea id="ideal-pet" name="ideal-pet" rows="4" required></textarea>
            </div>

            <div class="form-container">
                <div class="form-group">
                    <label for="building-type">What type of building do you live in? <span class="required">*</span></label>
                    <div class="form-options">
                        <label><input type="radio" name="building-type" value="house" required> House</label>
                        <label><input type="radio" name="building-type" value="apartment"> Apartment</label>
                        <label><input type="radio" name="building-type" value="condo"> Condo</label>
                        <label><input type="radio" name="building-type" value="other"> Other</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="rent">Do you rent? <span class="required">*</span></label>
                    <div class="form-options">
                        <label><input type="radio" name="rent" value="yes" required> Yes</label>
                        <label><input type="radio" name="rent" value="no"> No</label>
                    </div>
                </div>
            </div>

            <div class="form-buttons">
                <button type="button" class="back-button" onclick="previousStep(2)">Back</button>
                <button type="button" class="next-button" onclick="nextStep(4)">Next</button>
            </div>
        </form>
    </div>

    <div class="form-section" id="step4">
    <h3>QUESTIONNAIRE</h3>

    <div class="form-group">
        <label for="pet-move">What happens to your pet if or when you move? <span class="required">*</span></label>
        <textarea id="pet-move" name="pet-move" rows="4" required></textarea>
    </div>

    <div class="form-group">
        <label for="live-with">Who do you live with? <span class="required">*</span></label>
        <div class="form-options">
            <label><input type="checkbox" name="live-with" value="living-alone" required> Living alone</label>
            <label><input type="checkbox" name="live-with" value="spouse"> Spouse</label>
            <label><input type="checkbox" name="live-with" value="parents"> Parents</label>
            <label><input type="checkbox" name="live-with" value="roommates"> Roommate(s)</label>
            <label><input type="checkbox" name="live-with" value="children-over-18"> Children over 18</label>
            <label><input type="checkbox" name="live-with" value="children-below-18"> Children below 18</label>
            <label><input type="checkbox" name="live-with" value="relatives"> Relatives</label>
        </div>
    </div>

    <div class="form-group">
        <label for="allergic">Are any members of your household allergic to animals? <span class="required">*</span></label>
        <div class="form-options">
            <label><input type="radio" name="allergic" value="yes" required> Yes</label>
            <label><input type="radio" name="allergic" value="no"> No</label>
        </div>
    </div>

    <div class="form-group">
        <label for="responsible-care">Who will be responsible for feeding, grooming, and generally caring for your pet? <span class="required">*</span></label>
        <input type="text" id="responsible-care" name="responsible-care" required>
    </div>

    <div class="form-group">
        <label for="financial-responsibility">Who will be financially responsible for your pet’s needs (i.e. food, vet bills, etc.)? <span class="required">*</span></label>
        <input type="text" id="financial-responsibility" name="financial-responsibility" required>
    </div>

    <div class="form-buttons">
        <button type="button" class="cancel-button" onclick="previousStep(3)">Back</button>
        <button type="button" class="next-button" onclick="nextStep(5)">Next</button>
    </div>
</div>

    <div class="form-section" id="step5">
        <h3>QUESTIONNAIRE</h3>

        <div class="form-group">
            <label for="pet-care">Who will look after your pet if you go on vacation or in case of emergency? <span class="required">*</span></label>
            <input type="text" id="pet-care" name="pet-care" required>
        </div>

        <div class="form-group">
            <label for="workday-hours">How many hours in an average workday will your pet be left alone? <span class="required">*</span></label>
            <input type="text" id="workday-hours" name="workday-hours" required>
        </div>

        <div class="form-group">
            <label for="new-surroundings">What steps will you take to introduce your new pet to his/her new surroundings? <span class="required">*</span></label>
            <textarea id="new-surroundings" name="new-surroundings" required></textarea>
        </div>

        <div class="form-group">
            <label for="family-support">Does everyone in the family support your decision to adopt a pet? <span class="required">*</span></label>
            <div class="form-options">
                <label><input type="radio" name="family-support" value="yes" required> Yes</label>
                <label><input type="radio" name="family-support" value="no"> No</label>
            </div>
        </div>

        <div class="form-group">
            <label for="family-support-explanation">Please explain <span class="required">*</span></label>
            <textarea id="family-support-explanation" name="family-support-explanation" required></textarea>
        </div>

        <div class="form-buttons">
            <button type="button" class="cancel-button" onclick="previousStep(4)">Back</button>
            <button type="button" class="next-button" onclick="nextStep(6)">Next</button>
        </div>
    </div>

    <div class="form-section" id="step6">
    <h3>ADOPTION APPLICATION</h3>

    <div class="form-group">
        <label for="other-pets">Do you have other pets? <span class="required">*</span></label>
        <div class="form-options">
            <label><input type="radio" name="other-pets" value="yes" required> Yes</label>
            <label><input type="radio" name="other-pets" value="no"> No</label>
        </div>
    </div>

    <div class="form-group">
        <label for="past-pets">Have you had pets in the past? <span class="required">*</span></label>
        <div class="form-options">
            <label><input type="radio" name="past-pets" value="yes" required> Yes</label>
            <label><input type="radio" name="past-pets" value="no"> No</label>
        </div>
    </div>

    <div class="form-group">
        <p>Please attach photos of your home. This has replaced our on-site ocular inspections.</p>
        <ol>
            <li>Front of the house</li>
            <li>Street photo</li>
            <li>Living room</li>
            <li>Dining area</li>
            <li>Kitchen</li>
            <li>Bedroom(s) (if your pet will have access)</li>
            <li>Windows (if adopting a cat)</li>
            <li>Front & backyard (if adopting a dog)</li>
        </ol>
    </div>

    <div class="form-group">
        <p>We value your privacy. Your photos will not be used for purposes other than this adoption application. <span class="required">*</span></p>
        <div class="file-upload">
            <input type="file" id="home-photos" name="home-photos[]" multiple required>
            <label for="home-photos">Drop file here or <span>Select files</span></label>
        </div>
    </div>

    <div class="form-buttons">
        <button type="button" class="cancel-button" onclick="previousStep(5)">Back</button>
        <button type="button" class="next-button" onclick="nextStep(7)">Next</button>
    </div>
</div>

<div class="form-section" id="step7">
    <h3>ADOPTION APPLICATION</h3>

    <div class="form-container">
        <div class="form-group">
            <label for="valid-id">Upload a valid ID <span class="required">*</span></label>
            <p>Below is the list of IDs that you can submit</p>
            <ul>
                <li>Driver's License</li>
                <li>Professional Regulation Commission (PRC) ID</li>
                <li>Passport</li>
                <li>SSS ID</li>
                <li>COMELEC / Voter's ID / COMELEC Registration Form</li>
                <li>Philippine Identification (PhilID / EPhilID)</li>
                <li>BIR (TIN)</li>
                <li>Pag-Ibig ID</li>
                <li>Barangay ID</li>
                <li>Philippine Postal ID</li>
                <li>Phil-Health ID</li>
            </ul>
            <input type="file" id="valid-id" name="valid-id" required>
            <small>Max. file size: 256 MB.</small>
        </div>

        <div class="form-group">
            <label for="barangay-clearance">Upload a Barangay Clearance <span class="required">*</span></label>
            <p>It should be at least one month of the date issue</p>
            <input type="file" id="barangay-clearance" name="barangay-clearance" required>
            <small>Max. file size: 256 MB.</small>

            <label for="formal-picture">Upload a Formal Picture <span class="required">*</span></label>
            <p>It should be clear and file should be formatted as either .jpg or .png</p>
            <input type="file" id="formal-picture" name="formal-picture" required>
            <small>Max. file size: 256 MB.</small>
        </div>
    </div>

    <div class="form-buttons">
        <button type="button" class="cancel-button" onclick="previousStep(6)">Back</button>
        <button type="submit" class="next-button">Submit</button>
    </div>
</div>



</div>







<script>
    function nextStep(step) {
    document.querySelector('.form-section.active').classList.remove('active');
    document.getElementById('step' + step).classList.add('active');
    }

    function previousStep(step) {
        document.querySelector('.form-section.active').classList.remove('active');
        document.getElementById('step' + step).classList.add('active');
    }

</script>

<?php include("footer.php"); ?>

</body>
</html>
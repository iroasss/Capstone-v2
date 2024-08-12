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
    <title>FAQs • FurFect Match</title>
</head>
<body>
<div class="faq-container">
    <div class="faq-sidebar">
        <h2>Table of Contents</h2>
        <ul>
            <li><i class="fas fa-paw" style="color: var(--mid-blue);"></i><a href="#general"> General</a></li>
            <li><i class="fas fa-paw" style="color: var(--mid-blue);"></i><a href="#vaccination"> Vaccination</a></li>
            <li><i class="fas fa-paw" style="color: var(--mid-blue);"></i><a href="#adoption"> Adoption Process</a></li>
            <li><i class="fas fa-paw" style="color: var(--mid-blue);"></i><a href="#animal-cruelty"> Animal Cruelty & Neglect</a></li>
            <li><i class="fas fa-paw" style="color: var(--mid-blue);"></i><a href="#lost-found"> Lost & Found Pets</a></li>
            <li><i class="fas fa-paw" style="color: var(--mid-blue);"></i><a href="#donating"> Donations </a></li>
            <li><i class="fas fa-paw" style="color: var(--mid-blue);"></i><a href="#laws"> Laws </a></li>
        </ul>
    </div>
    <div class="faq-content">
        <h2>Frequently Asked Questions</h2>
        
        <!-- General -->
        <div id="general" class="faq-section">
            <h3>General</h3>
            <div class="faq-item">
                <div class="faq-question">
                    <span>What are the requirements for Adoption?</span>
                    <button class="toggle-answer"><i class="fas fa-plus" style="color: var(--mid-blue);"></i></button>
                </div>
                <div class="faq-answer">
                    <p>Formal Picture</p>
                    <p>Sample images of the House</p>
                    <p>Upload Valid ID(s)</p>
                    <p>Upload Barangay Clearance</p>
                    <p>Fill out and submit adoption Application form</p>
                    <p>Attend online screening</p>
                    <p>Visit and make a bond with your chosen pet</p>
                    <p>Wait for City Veterinarian's Clearance and approval</p>
                </div>
            </div>
        </div>
        
        <!-- Vaccination -->
        <div id="vaccination" class="faq-section">
            <h3>Vaccination</h3>
            <div class="faq-item">
                <div class="faq-question">
                    <span>How frequently do Dogs/Cats need Vaccinations?</span>
                    <button class="toggle-answer"><i class="fas fa-plus" style="color: var(--mid-blue);"></i></button>
                </div>
                <div class="faq-answer">
                    <p>There are two lines of thought on providing complete a vaccine for dogs/cats every year. 
                        Some vets feel that giving older dogs/cats too many vaccinations can be harmful to their health. Others, however, argue that it is better to vaccinate dogs/cats yearly to protect against deadly infections like distemper. 
                        Consult your veterinarian to decide the best vaccination protocol for you and dog/cat.
                    </p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>What is the ideal age to Vaccinate the Dog/Cat?</span>
                    <button class="toggle-answer"><i class="fas fa-plus" style="color: var(--mid-blue);"></i></button>
                </div>
                <div class="faq-answer">
                    <p>
                    The ideal age for vaccinating your pet can vary depending on the specific vaccine and your veterinarian's recommendation. 
                    In general, puppies and kittens should start their vaccination series at around 6-8 weeks of age.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Adoption Process -->
        <div id="adoption" class="faq-section">
            <h3>Adoption Process</h3>
            <div class="faq-item">
                <div class="faq-question">
                    <span>How does the Adoption process work?</span>
                    <button class="toggle-answer"><i class="fas fa-plus" style="color: var(--mid-blue);"></i></button>
                </div>
                <div class="faq-answer">
                    <p>The adoption process in cludes submitting the required documents, attending an online screening, and bonding with your chosen pet.</p>
                </div>
            </div>
        </div>
        
        <!-- Animal Cruelty & Neglect -->
        <div id="animal-cruelty" class="faq-section">
            <h3>Animal Cruelty & Neglect</h3>
            <div class="faq-item">
                <div class="faq-question">
                    <span>How do I report Animal Cruelty?</span>
                    <button class="toggle-answer"><i class="fas fa-plus" style="color: var(--mid-blue);"></i></button>
                </div>
                <div class="faq-answer">
                    <p>Animal cruelty MUST be reported to your barangay officials and/or police hotline 911 immediately. You may also seek free legal assistance from City Veterinarian Office. As the witness and reporting citizen, you will need to execute an affidavit so that City Veterinarian Office can file the case and appear in court. Learn more here.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>Is Dog "katay" Legal?</span>
                    <button class="toggle-answer"><i class="fas fa-plus" style="color: var(--mid-blue);"></i></button>
                </div>
                <div class="faq-answer">
                    <p>NO. If you see dog slaughter in progress, you must stop it IMMEDIATELY and report it to the barangay. In many cases, it is enough to save the animal's life.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>My neighbor is Neglecting their pet. Can you help?</span>
                    <button class="toggle-answer"><i class="fas fa-plus" style="color: var(--mid-blue);"></i></button>
                </div>
                <div class="faq-answer">
                    <p>Please talk to your neighbor first and attempt to educate them in a friendly manner. City Veterinarian Office cannot intervene or confiscate an owned pet without legal grounds. If you wish to file a case, please follow due process so that City Veterinarian Office can assist.</p>
                </div>
            </div>
        </div>
        
        <!-- Lost & Found Pets -->
        <div id="lost-found" class="faq-section">
            <h3>Lost & Found Pets</h3>
            <div class="faq-item">
                <div class="faq-question">
                    <span>Can you help me find my lost pet?</span>
                    <button class="toggle-answer"><i class="fas fa-plus" style="color: var(--mid-blue);"></i></button>
                </div>
                <div class="faq-answer">
                    <p>City Veterinarian Office can assist by posting your lost pet ad on our Facebook page. Just send us your pet's info and we shall make the announcement. Learn more here.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>My pet has been stolen. What should I do?</span>
                    <button class="toggle-answer"><i class="fas fa-plus" style="color: var(--mid-blue);"></i></button>
                </div>
                <div class="faq-answer">
                    <p>Theft is a crime that must be reported to the police. You should also distribute flyers to alert people in case the thief tries to sell your pet. Use all available channels, especially social media, to increase the chances of your pet being returned to you.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>I found a missing pet. Can I take it to City Veterinarian Office?</span>
                    <button class="toggle-answer"><i class="fas fa-plus" style="color: var(--mid-blue);"></i></button>
                </div>
                <div class="faq-answer">
                    <p>We cannot admit lost pets to the shelter because admission is limited to rescued animals in distress. Please foster the animal in the meantime and send us the info so we can post an ad on our Facebook page to look for the owner. Learn more here.</p>
                </div>
            </div>
        </div>

        <!-- -- Donations -- -->
        <div id="donating" class="faq-section">
            <h3>Donations</h3>
            <div class="faq-item">
                <div class="faq-question">
                    <span>How do I donate to City Veterinarian Office?</span>
                    <button class="toggle-answer"><i class="fas fa-plus" style="color: var(--mid-blue);"></i></button>
                </div>
                <div class="faq-answer">
                    <p>We don’t accept cash donations.  Donations in kind are accepted and can be delivered to the shelter. Check out our donation procedure below. </p>
                        <div class="donation-section">
                            <h2>If you want to Donate or Help Us!</h2>
                            <p><strong>ADDRESS:</strong> Gov. Malvar St., Poblacion 1, City of Sto. Tomas, Batangas 4234 Philippines<br>
                            <strong>Office Hours :</strong> 8:00am - 5:00pm, Monday to Friday</p>
                            <h3>IN KIND DONATIONS FOR CATS & DOGS</h3>
                        <ul>
                            <li>Dog food (kibble and canned)</li>
                            <li>Cat food (kibble and canned)</li>
                            <li>Crates, carriers or cages</li>
                            <li>Pee pads</li>
                            <li>Scratching posts for the cats</li>
                            <li>Chew toys for the dogs</li>
                            <li>Vaccines, medicine and vitamins</li>
                            <li>Dog and cat treats</li>
                            <li>Leashes, harnesses and collars</li>
                        </ul>
                        </div> 
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>Can I donate my pet to you?</span>
                    <button class="toggle-answer"><i class="fas fa-plus" style="color: var(--mid-blue);"></i></button>
                </div>
                <div class="faq-answer">
                    <p>Pets are not donations. A donation is meant to help a charity organization and leaving your pet with us is the opposite of helping.</p>
                </div>
            </div>
        </div>
        
        <!-- -- Laws -- -->
        <div id="laws" class="faq-section">
            <h3>Laws and Animal Rights</h3>
    <!-- Animal Welfare Act of 1998 -->
            <div class="faq-item">
                <div class="faq-question">
                    <span>THE ANIMAL WELFARE ACT OF 1998</span>
                    <button class="toggle-answer"><i class="fas fa-plus" style="color: var(--mid-blue);"></i></button>
                </div>
                    <div class="faq-answer" style="border-left: none; background-color:white;">
                        <div class="laws-grid">
                            <div class="law-item">
                                <h4>Republic Act No. 8485 
                                    <a href="https://paws.org.ph/downloads/ra8485_animal_welfare_act.pdf" target="_blank" class="download-link">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </h4>
                                <p>An Act to promote Animal Welfare in the Philippines, otherwise known as The Animal Welfare Act of 1998.</p>
                            </div>
                            <div class="law-item">
                                <h4>Republic Act No.10631 
                                    <a href="https://paws.org.ph/downloads/ra8485_as_amended_by_ra10631.pdf" target="_blank" class="download-link">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </h4>
                                <p>An Act amending certain sections of RA 8485, otherwise known as The Animal Welfare Act of 1998.</p>
                            </div>
                            <div class="law-item">
                                <h4>AWA Implementing Rules and Regulations
                                    <a href="https://paws.org.ph/downloads/awa_implementing_rules_and_regulations.pdf" target="_blank" class="download-link">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </h4>
                                <p>The Implementing Rules and Regulation Pursuant to Republic Act 8485</p>
                            </div>
                            <div class="law-item">
                                <h4>AWA Administrative Order No. 2 
                                    <a href="https://paws.org.ph/downloads/ao_2_-rules_and_regulations_on_the_transport_of_animals_by_sea.pdf" target="_blank" class="download-link">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </h4>
                                <p>Rules and Regulations on the Transport of Animals by Sea</p>
                            </div>
                            <div class="law-item">
                                <h4>AWA Administrative Order No. 7 
                                    <a href="https://paws.org.ph/downloads/ao_7s.2001_-_code_of_practice_for_poultry_dressing.pdf" target="_blank" class="download-link">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </h4>
                                <p>Code of Practice for Poultry Dressing</p>
                            </div>
                            <div class="law-item">
                                <h4>AWA Administrative Order No. 8 
                                    <a href="https://paws.org.ph/downloads/ao_8_s.1999_-_rules_and_regulations_registration_of_animal_control_facility.pdf" target="_blank" class="download-link">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </h4>
                                <p>Rules and regulations on registration of animal control facility, aviary, cattery, circus/carnival animal show, etc.</p>
                            </div>
                            <div class="law-item">
                                <h4>AWA Administrative Order No. 10
                                    <a href="https://paws.org.ph/downloads/ao_10_rules_&_regulations_of_cats_&_dogs.pdf" target="_blank" class="download-link">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </h4>
                                <p>Rules and regulations governing the apprehension and prosecution of persons transporting and/or trading dogs and cats</p>
                            </div>
                            <div class="law-item">
                                <h4>AWA Administrative Order No. 12
                                    <a href="https://paws.org.ph/downloads/ao12_s2002.pdf" target="_blank" class="download-link">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </h4>
                                <p>Code of Practice and Minimum Standards for the Welfare of Chickens</p>
                            </div>
                            <div class="law-item">
                                <h4>AWA Administrative Order No. 14
                                    <a href="https://paws.org.ph/downloads/ao_14-_rules_&_regulations_on_kennels_.pdf" target="_blank" class="download-link">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </h4>
                                <p>Rules and Regulations on Kennels</p>
                            </div>
                            <div class="law-item">
                                <h4>AWA Administrative Order No. 15
                                    <a href="https://paws.org.ph/downloads/awa_ao15_-_rules_and_regulations_governing_the_welfare_of_horses.pdf" target="_blank" class="download-link">
                                        <i class="fas fa-download"></i>
                                    </a></h4>
                                <p>Rules and Regulations Governing the Welfare of Horses</p>
                            </div>
                            <div class="law-item">
                                <h4>AWA Administrative Order No. 19
                                    <a href="https://paws.org.ph/downloads/ao_19_-_transport_of_live_animals_by_land.pdf" target="_blank" class="download-link">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </h4>
                                <p>Rules and Regulations on the Transport of Live Animals by Land</p>
                            </div>
                            <div class="law-item">
                                <h4>AWA Administrative Order No. 21
                                    <a href="https://paws.org.ph/downloads/ao_21s.2003_-_rules_&_regulations_on_pet_shop.pdf" target="_blank" class="download-link">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </h4>
                                <p>Rules and Regulations on Pet Shops</p>
                            </div>
                            <div class="law-item">
                                <h4>AWA Administrative Order No. 24
                                    <a href="https://paws.org.ph/downloads/ao_24_-mandatory_identification_and_registry_of_dogs_and_cats_imported-exported.pdf" target="_blank" class="download-link">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </h4>
                                <p>Rules and regulations on mandatory identification and registry of dogs and cats imported into and exported from the Philippines</p>
                            </div>
                            <div class="law-item">
                                <h4>AWA Administrative Order No. 25
                                    <a href="https://paws.org.ph/downloads/ao_25_rules_and_regulations_during_rituals.pdf" target="_blank" class="download-link">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </h4>
                                <p>Rules and regulations in the implementation of Section 6 or RA 8485 regarding the use of animals during rituals or an established religion or sect or by tribal or ethnic customs or indigenous cultural communities</p>
                            </div>
                            <div class="law-item">
                                <h4>AWA Administrative Order No. 32
                                    <a href="https://paws.org.ph/downloads/awa_ao32-_irr_on_dog_shows.pdf" target="_blank" class="download-link">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </h4>
                                <p>Rules and Regulations on Dog Shows</p>
                            </div>
                            <div class="law-item">
                                <h4>AWA Administrative Order No. 40
                                    <a href="https://paws.org.ph/downloads/awa_ao40-rules_and_regulations_on_the_conduct_of_scientific_procedures_using_animals.pdf" target="_blank" class="download-link">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </h4>
                                <p>Rules and Regulations on the Conduct of Scientific Procedures Using Animals</p>
                            </div>
                            <div class="law-item">
                                <h4>AWA Administrative Order No. 41
                                    <a href="https://paws.org.ph/downloads/ao_41_-_code_of_practice_and_minimum_standards_for_pigs.pdf" target="_blank" class="download-link">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </h4>
                                <p>Code of Practice and Minimum Standards for the Welfare of Pigs</p>
                            </div>
                            <div class="law-item">
                                <h4>AWA Administrative Order No. 43
                                    <a href="https://paws.org.ph/downloads/awa_ao43_-_rules_and_regulations_on_animal_air_transport.pdf" target="_blank" class="download-link">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </h4>
                                <p>Rules and Regulations on Animal Air Transport</p>
                            </div>
                            <div class="law-item">
                                <h4>AWA Administrative Order No. 54
                                    <a href="https://paws.org.ph/downloads/awa_ao54-_code_of_standards_for_veterinary_clinics_and_hospitals_for_small_companion_animals.pdf" target="_blank" class="download-link">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </h4>
                                <p>Code of Standards for Veterinary Clinics and Hospitals for Small Companion Animals</p>
                            </div>
                            <div class="law-item">
                                <h4>AWA Administrative Order No. 3 s2015
                                    <a href="https://paws.org.ph/downloads/ac_03_-_pound_guidelines.pdf" target="_blank" class="download-link">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </h4>
                                <p>Policies and Guidelines in the Establishment and Maintenance of Animal Pounds</p>
                            </div>
                            <div class="law-item">
                                <h4>AWA Administrative Order No. 5 s2015
                                    <a href="https://paws.org.ph/downloads/ac_05_-shelter_guidelines.pdf" target="_blank" class="download-link">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </h4>
                                <p>Policies and Guidelines in the Establishment and Maintenance of Animal Shelters</p>
                            </div>
                        </div>
                    </div>
            </div>

            <!-- Anti-Rabies Act of 2007 -->
            <div class="faq-item">
                <div class="faq-question">
                    <span>THE ANTI-RABIES ACT OF 2007</span>
                    <button class="toggle-answer"><i class="fas fa-plus" style="color: var(--mid-blue);"></i></button>
                </div>
                <div class="faq-answer" style="border-left: none; background-color:#ffffff;">
                    <div class="laws-grid">
                        <div class="law-item">
                            <h4>Republic Act No. 9482
                                <a href="https://paws.org.ph/downloads/ra9482_anti_rabies_act_of_2007.pdf" target="_blank" class="download-link">
                                    <i class="fas fa-download"></i>
                                </a>
                            </h4>
                            <p>An Act providing for the control and elimination of human and animal rabies, penalties for violation thereof and appropriating funds therefor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


  
        
    </div>
</div>

<script>
//Icon Dropdown
$(document).ready(function() {
    $(".toggle-answer").click(function() {
        const icon = $(this).find('i');
        icon.toggleClass('fa-plus fa-minus');
        $(this).parent().next(".faq-answer").slideToggle();
    });
});

//Download
document.addEventListener('DOMContentLoaded', function() {
const downloadLinks = document.querySelectorAll('.download-link');

downloadLinks.forEach(link => {
    link.addEventListener('click', function(event) {
        const confirmDownload = confirm("Do you want to Download and view this Document?");
        if (!confirmDownload) {
            event.preventDefault();
        }
    });
});
});
</script>

<?php
include("footer.php");
?>
</body>
</html>
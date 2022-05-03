<?php
include 'top.php';

$programList = array("Mount Ellen", "Mount Mansfield", "The Complete Long Trail", "Camel's Hump Trail", "Jay Peak Trail", "Mount Olga", "Children's Day Camp");
$status = false;

$camper = "Self";

$firstName = "";
$lastName = "";
$email = "";
$phone = "";

$age = "Child";

$backpacking = false;
$hiking = false;
$dayCamp = false;

$program = "The Complete Long Trail";

$date = "";

// This function validates text data
function verifyAlphaNum($testString) {
    // Check for letters, numbers and dash, period, space and single quote only.
    // added & ; and # as a single quote sanitized with html entities will have 
    // this in it bob's will be come bob's
    return (preg_match ("/^([[:alnum:]]|-|\.| |\'|&|;|#)+$/", $testString));
}

// this function validates a phone number
function verifyPhone($testString) {
    if (preg_match ("/^[0-9]{10}+$/", $testString)) {
        return true;
    }
    else {
        return false;
    }
}

// This function sanitizes data
function getData($field) {
    if (!isset($_POST[$field])) {
        $data = "";
    }
    else {
        $data = trim($_POST[$field]);
        $data = htmlspecialchars($data);
    }
    return $data;
}
?>
    <main class = "main">
        <section class = "dbConnection">
            <h2>Enter your information to sign up for The Long Trail Nature Camp</h2>
    <?php
        /* SANITIZE FORM */
        if ($_SERVER ["REQUEST_METHOD"] == "POST") {

            $status = true;
            // Sanitize first radio boxes
            $camper = getData("radCamper");

            // Sanitize text boxes
            $firstName = getData("txtFirstName");
            $lastName = getData("txtLastName");
            $email = getData("txtEmail");
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            $phone = getData("txtPhone");

            // Sanitize radio boxes
            $age = getData("radAge");

            // Sanitize checkboxes
            $backpacking = (int) getData("chkBackpacking");
            $hiking = (int) getData("chkHiking");
            $dayCamp = (int) getData("chkDayCamp");

            // Sanitize list box
            $program = getData("lstProgram");

            // Sanitize textarea 
            $date = getData("txtDate");

            /* VALIDATE FORM */
            if ($camper != "Self" AND $camper != "Someone Else") {
                print "<p class = 'mistake'>Please tell us who you are registering for.</p>";
                $status = false;
            }
            // Validate text boxes
                // first name
            if ($firstName == "") {
                print "<p class = 'mistake'>Please enter your first name.</p>";
                $status = false;
            }
            elseif (!verifyAlphaNum($firstName)) {
                print "<p class = 'mistake'>Please re-enter your first name, as the one you entered contains invalid characters.</p>";
                $status = false;
            }
                
                // last name 
            if ($lastName == "") {
                print "<p class = 'mistake'>Please enter your last name</p>";
                $status = false;
            }
            elseif (!verifyAlphaNum($lastName)) {
                print "<p class = 'mistake'>Please re-enter your last name, as the one you entered has invalid characters</p>";
                $status = false;
            }

                // email
            if ($email == "") {
                print "<p class = 'mistake'>Please enter your email</p>";
                $staus = false;
            }
            elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                print "<p class = 'mistake'>Please enter a valid email.</p>";
                $status = false;
            }
                //phone
            if ($phone = "") {
                print "<p class = 'mistake'>Please enter your phone number</p>";
                $status = false;
            }
            /*elseif (!filter_var($phone, FILTER_SANITIZE_NUMBER_INT)) {
                print "<p class = 'mistake'>Please enter a valid phone number</p>";
                $status = false;
            }*/

            // Validate radio boxes
            if ($age != "Child" AND $age != "Teen" AND $age != "Adult") {
                print "<p class = 'mistake'>Please tell us the age group of your camper</p>";
                $status = false;
            }
            //Validate check boxes
            $totalChecked = 0;
            if ($backpacking != 1) 
                $backpacking = 0;
            $totalChecked += $backpacking;

            if ($hiking != 1) 
                $hiking = 0;
            $totalChecked += $hiking;

            if ($dayCamp != 1) 
                $dayCamp = 0;
            $totalChecked += $dayCamp;

            if ($totalChecked == 0) {
                print "<p class = 'mistake'>Please choose at least one activity you are interested in.</p>";
                $status = false;
            }
            // Validate list box
            if ($program == "") {
                print "<p class = 'mistake'>Please choose the program you would like to attend.</p>";
                $status = false;
            }
            elseif(!in_array($program, $programList)) {
                print "<p class = 'mistake'>Please choose a value in the list.</p>";
                $status = false;
            }

            // Validate text area
            if ($date == "") {
                print "<p class = 'mistake'>Please enter a date that works for you</p>";
                $status = false;
            }
            elseif (!verifyAlphaNum($date)) {
                print "<p class = 'mistake'>Please re-enter your date, as the one you entered has invalid characters</p>";
                $status = false;
            }
            // save data 
            if ($status) {
                try {
                    $sql = "INSERT INTO tblCampForm 
                    (fldCamper, fldFirstName, fldLastName, 
                    fldEmail, fldPhone, fldAge, fldBackpacking, 
                    fldHiking, fldDayCamp, fldProgram, fldDate) VALUES 
                    (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                    $statement = $pdo->prepare($sql);
                    $data = array($camper, $firstName, $lastName, $email,
                    $phone, $age, $backpacking, $hiking, $dayCamp, $program, $date);

                    if($statement->execute($data)) {
                        print "<h3>Thank you!</h3><p>Your information has been submitted successfully.</p>";
                        $to = $email;
                        $from = 'The Long Trail Hiking Camp <hgsherid@uvm.edu>';
                        $subject = 'Thank You!';
                        $mailMessage = "<p>Hello, ";
                        $mailMessage .= $firstName;
                        $mailMessage .= "</p><p>Thank you for signing up for the Long Trail Nature Camp! We look forward to seeing you :)</p><p>Best,<p></p>The Long Trail Hiking Camp</p>";
                        $headers = "MIME-Version: 1.0\r\n";
                        $headers .= "Content-type: text/html; charset = utf-8\r\n";
                        $headers .= "From: " . $from . "\r\n";
                        $mailSent = mail($to, $subject, $mailMessage, $headers);
                        if ($mailSent) {
                            print "<p>Check your email for confirmation of your sign up!</p>";
                            print $mailMessage;
                        }
                    }
                    else {
                        print "<p>Your information was not successfully saved. Please contact hgsherid@uvm.edu to save your information.</p>";
                    }
                }

                catch(PDOException $e) {
                    print "<p>Couldn't insert data successfully. Please contact hgsherid@uvm.edu to save your data</p>";
                }
            }
        }
        
    ?> 
        </section>

        <section class = "the-form">
            <h3>Sign Up Form</h3>
            <form action = "#" method = "POST">
                <!-- text box -->
                <fieldset class = "fieldset">
                    <legend>Who are you regestering as a camper?</legend>
                    <p>
                        <input type = "radio" name = "radCamper" id = "radSelf" value = "Self"
                        <?php 
                            if ($camper == "Self")
                                print 'checked'; ?>>
                        <label for = "radSelf">Self</label>
                    </p>
                    <p>
                        <input type = "radio" name = "radCamper" id = "radElse" value = "Someone Else"
                        <?php 
                            if ($help == "Someone Else")
                                print 'checked'; ?>>
                        <label for = "radElse">Someone Else</label>
                    </p>
                </fieldset>
                <fieldset class = "fieldset">
                    <legend>Contact Information</legend>
                    <p>
                        <input type="text" name="txtFirstName" id="txtFirstName" value = "<?php print $firstName; ?>"
                            placeholder="Enter your first name" required>
                        <label for="txtFirstName">First Name</label>
                    </p>
                    <p>
                        <input type="text" name="txtLastName" id="txtLastName" value = "<?php print $lastName; ?>"
                            placeholder="Enter your last name" required>
                        <label for="txtLastName">Last Name</label>
                    </p>
                    <p>
                        <input type="email" name="txtEmail" id="txtEmail" value = "<?php print $email; ?>"
                            placeholder="xx@yy.zz" required>
                        <label for="txtEmail">Email</label>
                    </p>
                    <p>
                        <input type="text" name="txtPhone" id="txtPhone" value = "<?php print $phone; ?>"
                            placeholder="(123) 456 - 789" required>
                        <label for="txtPhone">Phone Number</label>
                    </p>
                </fieldset>
                <!-- radio box -->
                <fieldset class = "fieldset">
                    <legend>What is your camper's age group?</legend>
                    <p>
                        <input type = "radio" name = "radAge" id = "radChild" value = "Child"
                        <?php    
                            if ($age == "Child")
                                print 'checked'; ?>>
                        <label for = "radTeen">Child</label>
                    </p>
                    <p>
                        <input type = "radio" name = "radAge" id = "radTeen" value = "Teen"
                        <?php   
                            if ($age == "Teen")
                                print 'checked'; ?>>
                        <label for = "radTeen">Teen</label>
                    </p>
                    <p>
                        <input type = "radio" name = "radAge" id = "radAdult" value = "Adult"
                        <?php
                            if ($age == "Adult")
                            print 'checked'; ?>>
                        <label for = "radAdult">Adult</label>
                    </p>
                </fieldset>
                <!-- check box -->
                <fieldset class = "fieldset">
                    <legend>Which activity is your camper interested in?</legend>
                    <p>
                        <input type = "checkbox" name = "chkBackpacking" id = "chkBackpacking" value = "1"
                        <?php 
                            if ($backpacking)
                                print 'checked'; ?>>
                        <label for = "chkBackpacking">Backpacking</label>
                    </p>
                    <p>
                        <input type = "checkbox" name = "chkHiking" id = "chkHiking" value = "1"
                        <?php
                            if ($hiking) 
                                print 'checked'; ?>>
                        <label for = "chkHiking">Hiking</label>
                    </p>
                    <p>
                        <input type = "checkbox" name = "chkDayCamp" id = "chkDayCamp" value = "1"
                        <?php
                            if ($dayCamp)
                                print 'checked'; ?>>
                        <label for = "chkDayCamp">Day Camp for Kids</label>
                    </p>
                </fieldset>
                <fieldset class = "fieldset">
                    <legend>Which program does your camper want to attend?</legend>
                    <p>
                        <select name = "lstProgram">
                            <option value = "Mount Ellen"
                            <?php 
                            if ($program == "Mount Ellen")
                                print 'selected'; ?>>Mount Ellen</option>

                            <option value = "Mount Mansfield"
                            <?php 
                            if ($program == "Mount Mansfield")
                                print 'selected'; ?>>Mount Mansfield</option>

                            <option value = "The Complete Long Trail"
                            <?php
                            if ($program == "The Complete Long Trail")
                                print 'selected'; ?>>The Complete Long Trail</option>

                            <option value = "Camel's Hump Trail"
                            <?php
                            if ($program == "Camel's Hump Trail")
                                print 'selected'; ?>>Camel's Hump Trail</option>

                            <option value = "Jay Peak Trail"
                            <?php
                            if ($program == "Jay Peak Trail")
                                print 'selected'; ?>>Jay Peak Trail</option>

                            <option value = "Mount Olga"
                            <?php
                            if ($program == "Mount Olga")
                                print 'selected'; ?>>Mount Olga</option>

                            <option value = "Children's Day Camp"
                            <?php
                            if ($program == "Children's Day Camp")
                                print 'selected'; ?>>Children's Day Camp</option>
                        </select>
                    </p>
                </fieldset>
                <fieldset class = "fieldset">
                    <legend>Please enter the date of the specific program you are interested in</legend>
                    <p>
                        <textarea name = "txtDate"><?php print $date; ?></textarea>
                    </p>
                </fieldset>
                <fieldset class="fieldset">
                    <input type="submit" value="Submit" name="btnSubmit">
                </fieldset>
            </form>
        </section>
    </main>
<?php
include 'footer.php';
?>
</body>
</html>
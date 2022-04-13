<?php
include 'top.php';

$rainforestList = array("Amazon Rainforest", "Congo Rainforest", "Southeast Asian Rainforest", "Kinabalu National Forest", "Tongass National Forest");
$status = false;

$firstName = "";
$lastName = "";
$email = "";

$help = "Yes";

$planting = false;
$donate = false;
$meat = false;
$farms = false; 
$notInterested = false;

$favRainforest = "Amazon Rainforest";

$comments = "";

// This function validates text data
function verifyAlphaNum($testString) {
    // Check for letters, numbers and dash, period, space and single quote only.
    // added & ; and # as a single quote sanitized with html entities will have 
    // this in it bob's will be come bob's
    return (preg_match ("/^([[:alnum:]]|-|\.| |\'|&|;|#)+$/", $testString));
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
        <h1 class = "helpsave">Help Save Our Rainforests</h1>
        <section class = "dbConnection">
            <h3>Enter your information to help save our rainforests.</h3>
        <?php
            /* SANITIZE FORM */
            if ($_SERVER ["REQUEST_METHOD"] == "POST") {

                $status = true;
                    
                // Sanitize text boxes
                $firstName = getData("txtFirstName");
                $lastName = getData("txtLastName");
                $email = getData("txtEmail");
                $email = filter_var($email, FILTER_SANITIZE_EMAIL);

                // Sanitize radio boxes
                $help = getData("radHelp");

                // Sanitize checkboxes
                $planting = (int) getData("chkPlanting");
                $donate = (int) getData("chkDonate");
                $meat = (int) getData("chkMeat");
                $farms = (int) getData("chkFarms");
                $notInterested = (int) getData("chkNotInterested");

                // Sanitize list box
                $favRainforest = getData("lstRainforest");

                // Sanitize textarea 
                $comments = getData("txtComments");

            /* VALIDATE FORM */
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

                // Validate radio boxes
                if ($help != "Yes" AND $help != "No" AND $help != "Maybe") {
                    print "<p class = 'mistake'>Please let us know if you would like to help save our rainforests.</p>";
                    $status = false;
                }
                // Validate check boxes
                $totalChecked = 0;
                if ($planting != 1)
                    $planting = 0;
                $totalChecked += $planting;

                if ($donate != 1)
                    $donate =0;
                $totalChecked += $donate;

                if ($meat != 1)
                    $meat = 0;
                $totalChecked += $meat;

                if ($farms != 1) 
                    $farms = 0;
                $totalChecked += $farms;

                if ($notInterested != 1)
                    $notInterested = 0;
                $totalChecked += $notInterested;

                if ($totalChecked == 0) {
                    print "<p class = 'mistake'>Please choose at least one option that describes how you'd like to help our rainforests</p>";
                    $status = false;
                }

                // Validate list box
                if ($favRainforest == "") {
                    print "<p class = 'mistake'>Please choose your favorite rainforest.</p>";
                    $status = false;
                }
                elseif(!in_array($favRainforest, $rainforestList)) {
                    print "<p class = 'mistake'>Please choose a value in the list.</p>";
                    $status = false;
                }

                // Validate text area
                if ($comments == "") {
                    print "<p class = 'mistake'>Please enter a comment</p>";
                    $status = false;
                }
                elseif (!verifyAlphaNum($comments)) {
                    print "<p class = 'mistake'>Please re-enter your comment, as the one you entered has invalid characters</p>";
                    $status = false;
                }

                // save data 
                if ($status) {
                    try {
                        $sql = "INSERT INTO tblRainforestForm 
                        (fldFirstName, fldLastName, fldEmail, 
                        fldHelp, fldPlanting, fldDonate, 
                        fldMeat, fldFarms, fldNotInterested, 
                        fldFavRainforest, fldComments) VALUES 
                        (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                        $statement = $pdo->prepare($sql);
                        $data = array($firstName, $lastName, $email,
                        $help, $planting, $donate, $meat,
                        $farms, $notInterested, $favRainforest, $comments);

                        if($statement->execute($data)) {
                            print "<h3>Thank you!</h3><p>Your information has been submitted successfully.</p>";
                        }
                        else {
                            print "<p>Your information was not successfully saved. Please contact hgsherid@uvm.edu to save your information.</p>";
                        }
                    }
                    catch(PDOException $e) {
                        print "<p>Couldn't insert data successfully. Please contact hgsherid@uvm.edu to save your data</p>";
                    }
                }

            } // end form submit

        ?>  
        </section>


        <section class="postarray">
            <h3>Post Array</h3>
            <?php
                print '<p>Post Array:</p><pre>';
                print_r($_POST);
                print '</pre>'; 
            ?>
        </section>
        <figure class="forest-image">
            <img src="images/planting-tree.jpg" class="forest" alt="Planting A Tree">
            <figcaption>Tree in Your Hands [photo: Getty Images] <cite>Getty Images</cite></figcaption>
        </figure>
        <section class="the-form">
            <h4>Rainforest Form</h4>
            <form action="#" method="POST">
          <!-- text boxes -->
                <fieldset class="fieldset">
                    <legend>Contact Information</legend>
                    <p>
                        <input type="text" name="txtFirstName" id="txtFirstName" value = "<?php print $firstName; ?>"
                            placeholder="Please enter your first name" required>
                        <label for="txtFirstName">First Name</label>
                    </p>
                    <p>
                        <input type="text" name="txtLastName" id="txtLastName" placeholder="Please enter your last name" 
                            value = "<?php print $lastName; ?>" 
                            required>
                        <label for="txtLastName">Last Name</label>
                    </p>
                    <p>
                        <input type="email" name="txtEmail" id="txtEmail" placeholder="Ex: johndoe@email.com" value = "<?php print $email; ?>" required>
                        <label for="txtEmail">Email</label>
                    </p>
                </fieldset>
                <!-- radio buttons -->
                <fieldset class="fieldset">
                    <legend>Are you interested in helping save our forests?</legend>
                    <p>
                        <input type="radio" name="radHelp" value="Yes" id="radYes" 
                        <?php 
                            if ($help == "Yes")
                                print 'checked'; ?>>
                        <label for="radYes">Yes</label>
                    </p>

                    <p>
                        <input type="radio" name="radHelp" value="No" id="radNo" 
                        <?php 
                            if ($help == "No")
                                print 'checked'; ?>>
                        <label for="radNo">No</label>
                    </p>
                    
                    <p>
                        <input type="radio" name="radHelp" value="Maybe" id="radMaybe" 
                        <?php 
                            if ($help == "Maybe")
                                print 'checked'; ?>>
                        <label for="radMaybe">Maybe later</label>
                    </p>
                </fieldset>
                <!-- checkboxes -->
                <fieldset class="fieldset">
                    <legend>If yes, how are you interested in helping? (choose at least one)</legend>
                    <p>
                        <input type="checkbox" name="chkPlanting" id="chkPlanting" value="1"
                        <?php 
                            if ($planting)
                                print 'checked'; ?>>
                        <label for="chkPlanting">Volunteering to plant trees</label>
                    </p>
                    <p>
                        <input type="checkbox" name="chkDonate" id="chkDonate" value="1" 
                        <?php 
                            if ($donate)
                                print 'checked'; ?>>
                        <label for="chkDonate">Donating to an organization</label>
                    </p>
                    <p>
                        <input type="checkbox" name="chkMeat" id="chkMeat" value="1" 
                        <?php 
                            if ($meat)
                                print 'checked'; ?>>
                        <label for="chkMeat">Reducing meat intake</label>
                    </p>
                    <p>
                        <input type="checkbox" name="chkFarms" id="chkFarms" value="1" 
                        <?php 
                            if ($farms)
                                print 'checked'; ?>>
                        <label for="chkFarms">Buying only from sustainable and forest-friendly sources</label>
                    </p>
                    <p>
                        <input type="checkbox" name="chkNotInterested" id="chkNotInterested" value="1" 
                        <?php 
                            if ($notInterested)
                                print 'checked'; ?>>
                        <label for="chkNotInterested">I am not interested in helping</label>
                    </p>
                </fieldset>
                <!-- select list -->
                <fieldset class="fieldset">
                    <legend>What is your favorite rainforest?</legend>
                    <p>
                        <select name="lstRainforest">
                            <option value="Amazon Rainforest" 
                            <?php 
                            if ($favRainforest == "Amazon Rainforest")
                                print 'selected'; ?>>Amazon Rainforest</option>

                            <option value="Congo Rainforest"
                            <?php 
                            if ($favRainforest == "Congo Rainforest")
                                print 'selected'; ?>>Congo Rainforest</option>

                            <option value="Southeast Asian Rainforest"
                            <?php 
                            if ($favRainforest == "Southeast Asian Rainforest")
                                print 'selected'; ?>>Southeast Asian Rainforest</option>

                            <option value="Kinabalu National Forest"
                            <?php 
                            if ($favRainforest == "Kinabalu National Forest")
                                print 'selected'; ?>>Kinabalu National Forest</option>

                            <option value="Tongass National Forest" 
                            <?php 
                            if ($favRainforest == "Tongass National Forest")
                                print 'selected'; ?>>Tongass National Forest</option>
                        </select>
                    </p>
                </fieldset>
                <fieldset class="fieldset">
                    <legend>Any comments?</legend>
                    <p>
                        <textarea name="txtComments"><?php print $comments; ?></textarea>
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

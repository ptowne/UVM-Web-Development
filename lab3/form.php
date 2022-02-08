<!DOCTYPE HTML>
<html lang="en">

<head>
    <!-- meta tags and title -->
    <meta charset="utf-8">
    <title>Plant More Trees</title>
    <meta name="author" content="Hannah Sheridan">
    <!-- description: about trees, deforestation, and how planting can save the environment -->
    <meta name="description" content="Around 80,000 acres of tropical rainforest are cut down every day. Deforestation has ridden our planet and is
        killing one of the earth's most helpful and beautiful plants: trees. It is uncertain whether this deforestation will ever end, but we can ease its
        damaging effects by planting more trees.">
    <link rel="stylesheet" href="css/cusstom.css?version=<?php print time(); ?>" type="text/css">
</head>

<body class = "if-needed">
    <header>
        <!-- main header: plant more trees -->
        <h1>Plant More Trees</h1>
        <h2>Deforestation's damaging effects and how we can stop it</h2>
    </header>
    <figure>
        <img src="images/planting-tree.jpg" alt="Planting a Tree" width="300">
        <figcaption>Plant a Tree [photo: Greener Land]</figcaption>
    </figure>
    <nav>
        <a href="index.php">Home</a>
        <a href="detail.php">Detail</a>
        <a href="form.php">Form</a>
    </nav>
    <main>
        <section>
            
            <?php
            print '<p>Post Array:</p><pre>';
            print_r($_POST);
            print '</pre>';
            ?>

            <form action = "#" method = "POST">
                <!-- text boxes -->
                <fieldset>
                    <legend>Contact Information</legend>
                    <p>
                        <input type = "text" name = "txtFirstName" id = "txtFirstName" placeholder = "Please enter your first name">
                        <label for = "txtFirstName">First Name</label>
                    </p>
                    <p>
                        <input type = "text" name = "txtLastName" id = "txtLastName" placeholder = "Please enter your last name">
                        <label for = "txtLastName">Last Name</label>
                    </p>
                    <p>
                        <input type = "text" name = "txtEmail" id = "txtEmail" placeholder = "Ex: johndoe@email.com">
                        <label for = "txtEmail">Email</label>
                    </p>
                </fieldset>
                <!-- radio buttons -->
                <fieldset>
                    <legend>Are you interested in helping save our forests?</legend>
                    <p>
                        <input type = "radio" name = "radHelp" value = "Yes" id = "radYes">
                        <label for = "radYes">Yes</label>
                    </p>
                    <p>
                        <input type = "radio" name = "radHelp" value = "No" id = "radNo">
                        <label for = "radNo">No</label>
                    </p>
                    <p>
                        <input type = "checkbox" name = "radHelp" value = "Maybe later" id = "radMaybe">
                        <label for = "radMaybe">Maybe later</label>
                    </p>
                </fieldset>
                <!-- checkboxes -->
                <fieldset>
                    <legend>If yes, how are you interested in helping? (select all that apply)</legend>
                    <p>
                        <input type = "checkbox" name = "chkPlanting" id = "chkPlanting" value = "1">
                        <label for = "chkPlanting">Volunteering to plant trees</label>
                    </p>
                    <p>
                        <input type = "checkbox" name = "chkDonate" id = "chkDonate" value = "1">
                        <label for = "chkDonate">Donating to an organization</label>
                    </p>
                    <p>
                        <input type = "checkbox" name = "chkMeat" id = "chkMeat" value = "1">
                        <label for = "chkMeat">Reducing meat intake</label>
                    </p>
                    <p>
                        <input type = "checkbox" name = "chkFarms" id = "chkFarms" value ="1">
                        <label for = "chkFarms">Buying only from sustainable and forest-friendly sources</label>
                    </p>
                    <p>
                        <input type = "checkbox" name = "chkNotInterested" id = "chkNotInterested" value = "1">
                        <label for = "chkNotInterested">I am not interested in helping</label>
                    </p>
                </fieldset>
                <!-- select list -->
                <fieldset>
                    <legend>What is your favorite rainforest?</legend>
                    <p>
                        <select name = "lstRainforest">
                            <option value = "amazon">Amazon Rainforest</option>
                            <option value = "congo">Congo Rainforest</option>
                            <option value = "southeast_asian">Southeast Asian Rainforest</option>
                            <option value = "kinabalu">Kinabalu National Forest</option>
                            <option value = "tongass">Tongass National Forest</option>
                        </select>
                    </p>
                </fieldset>
                <fieldset>
                    <legend>Any comments?</legend>
                    <p>
                        <textarea name = "txtComments"></textarea>
                    </p>
                </fieldset>
                <fieldset>
                    <input type = "submit" value = "Submit" name = "btnSubmit">
                </fieldset>
            </form>
        </section>



       
    </main>
    <footer>
        <p><a href = "../index.php">Site map (Main index)</a></p>
    </footer>

</body>

</html>
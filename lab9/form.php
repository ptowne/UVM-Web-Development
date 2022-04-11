<?php
include 'top.php';
?>
    <main class = "main">
        <h1 class = "helpsave">Help Save Our Rainforests</h1>
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
                        <input type="text" name="txtFirstName" id="txtFirstName"
                            placeholder="Please enter your first name" required>
                        <label for="txtFirstName">First Name</label>
                    </p>
                    <p>
                        <input type="text" name="txtLastName" id="txtLastName" placeholder="Please enter your last name"
                            required>
                        <label for="txtLastName">Last Name</label>
                    </p>
                    <p>
                        <input type="text" name="txtEmail" id="txtEmail" placeholder="Ex: johndoe@email.com" required>
                        <label for="txtEmail">Email</label>
                    </p>
                </fieldset>
                <!-- radio buttons -->
                <fieldset class="fieldset">
                    <legend>Are you interested in helping save our forests?</legend>
                    <p>
                        <input type="radio" name="radHelp" value="Yes" id="radYes">
                        <label for="radYes">Yes</label>
                    </p>
                    <p>
                        <input type="radio" name="radHelp" value="No" id="radNo">
                        <label for="radNo">No</label>
                    </p>
                    <p>
                        <input type="radio" name="radHelp" value="Maybe later" id="radMaybe">
                        <label for="radMaybe">Maybe later</label>
                    </p>
                </fieldset>
                <!-- checkboxes -->
                <fieldset class="fieldset">
                    <legend>If yes, how are you interested in helping? (select all that apply)</legend>
                    <p>
                        <input type="checkbox" name="chkPlanting" id="chkPlanting" value="1">
                        <label for="chkPlanting">Volunteering to plant trees</label>
                    </p>
                    <p>
                        <input type="checkbox" name="chkDonate" id="chkDonate" value="1">
                        <label for="chkDonate">Donating to an organization</label>
                    </p>
                    <p>
                        <input type="checkbox" name="chkMeat" id="chkMeat" value="1">
                        <label for="chkMeat">Reducing meat intake</label>
                    </p>
                    <p>
                        <input type="checkbox" name="chkFarms" id="chkFarms" value="1">
                        <label for="chkFarms">Buying only from sustainable and forest-friendly sources</label>
                    </p>
                    <p>
                        <input type="checkbox" name="chkNotInterested" id="chkNotInterested" value="1">
                        <label for="chkNotInterested">I am not interested in helping</label>
                    </p>
                </fieldset>
                <!-- select list -->
                <fieldset class="fieldset">
                    <legend>What is your favorite rainforest?</legend>
                    <p>
                        <select name="lstRainforest">
                            <option value="amazon">Amazon Rainforest</option>
                            <option value="congo">Congo Rainforest</option>
                            <option value="southeast_asian">Southeast Asian Rainforest</option>
                            <option value="kinabalu">Kinabalu National Forest</option>
                            <option value="tongass">Tongass National Forest</option>
                        </select>
                    </p>
                </fieldset>
                <fieldset class="fieldset">
                    <legend>Any comments?</legend>
                    <p>
                        <textarea name="txtComments"></textarea>
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
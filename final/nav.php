<nav class = "nav">
    <a class = "<?php
    if($pathParts['filename'] == 'index') {
        print 'activePage';
    }
    ?>" href="index.php">Home</a>


    <a class = "<?php
    if ($pathParts['filename'] == 'about') {
        print 'activePage';
    }
    ?>" href="about.php">About Us</a>

    <a class = "<?php
    if($pathParts['filename'] == 'programs') {
        print 'activePage';
    }
    ?>" href="programs.php">Programs</a>

    <a class = "<?php
    if($pathParts['filename'] == 'signup') {
        print 'activePage';
    }
    ?>" href="form.php">Sign Up</a>
</nav>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Hannah's CS008 Index</title>
        <meta name="author" content="Hannah Sheridan">
        <meta name="description" content="A site map to my CS008 assignments for the 2022 Spring Semester.">
        <link rel="SHORTCUT ICON" type="image/x-icon" href="images/trees.ico">
        <style>
            /* Basic CSS */
            body {
                margin: auto;
                padding: 3%;
                width: 90%;
            }
            figure {
                border: thin solid darkslategray;
                border-radius: 3%;
                padding: 3%;
                text-align: center;
            }
            figcaption {
                color: #839e99;
                font-style: italic;
                text-align: center;
            }
            img {
                border-radius: 3%;
                max-width: 100%;
            }
            .right {
                float: right;
                margin-left: 3%;
            }
            .small {
                width: 20%
            }
            .header {
                grid-area: header;
                grid-column: 1 / 3;
                padding: .5%;
                margin: .5%;
            }
            .public-files {
                grid-area: public-files;
                padding: .5%;
                margin: .5%;
            }
            .supporting-files {
                grid-area: supporting-files;
                padding: .5%;
                margin: .5%;
            }
            .grader-notes {
                grid-area: grader-notes;
                padding: .5%;
                margin: .5%;
            }
            .grid-layout {
                border-bottom: thin dashed navy;
                display: inline-grid;
                grid-template-columns: 25% 25% 50%;
                grid-template-areas: "header header header" 
                    "public-files supporting-files grader-notes";
                padding: .5%;
                margin: .5%;
                width: 100%;
            }
        </style>
    </head>

    <body>
        <figure class = "right small">
            <img alt="Hannah Sheridan circ- 2020" 
                 src="images/hannah-sheridan.jpg">
            <figcaption>Me during my junior year of High School.</figcaption>
        </figure>

        <h1>CS 008-<em>B</em> Spring 2022</h1>
        <h2>Hannah Sheridan - Site map</h2>
        <p><a href="ADMIN/admin.php">My Admin Folder</a></p>
<!-- Section: Lab Six -->
        <section class = "grid-layout">
        <h2 class = "header">Lab Six - Responsive Design.</h2>
        <!-- Public Files -->
            <section class = "public-files">
                <h3>Public Files</h3>
                <p><a href = "lab6/detail.php">detail.php</a></p>
                <p><a href = "lab6/form.php">form.php</a></p>
                <p><a href = "lab6/index.php">index.php</a></p>
                <p></p>
            </section>
        <!-- Supporting Files -->
            <section class = "supporting-files">
                <h3>Supporting Files</h3>
                <p><a href = "lab6/css/custom.css">custom.css</a></p>
                <p><a href = "lab6/css/custom-phone.css">custom-phone.css</a></p>
                <p><a href = "lab6/css/custom-tablet.css">custom-tablet.css</a></p>

                <p><a href = "lab6/images/wireframe.png">wireframe desktop</a></p>
                <p><a href = "lab6/images/phone-wireframe.png">wireframe phone</a></p>
                <p><a href = "lab6/images/wireframe-tablet.png">wireframe tablet</a></p>
            </section>
        <!-- Notes to grader -->
            <section class = "grader-notes">
                <h3>Notes to Grader</h3>
                <p></p>
            </section>
        </section>
<!-- Section: Lab Five -->
        <section class = "grid-layout">
        <h2 class = "header">Lab Five - Adding more style.</h2>
            <!-- Public Files -->
            <section class = "public-files">
                <h3>Public Files</h3>
                <p><a href = "lab5/detail.php">detail.php</a></p>
                <p><a href = "lab5/form.php">form.php</a></p>
                <p><a href = "lab5/index.php">index.php</a></p>
                <p></p>
            </section>
            <!-- Supporting Files -->
            <section class = "supporting-files">
                <h3>Supporting Files</h3>
                <p><a href = "lab5/css/custom.css">custom.css</a></p>
                <p><a href = "wireframe.png">wireframe.png</a></p>
                <p></p>
            </section>
            <!-- Grader Notes -->
            <section class = "grader-notes">
                <h3>Notes to Grader</h3>
                <p></p>
            </section>
        </section>

<!-- Section: Lab Four -->
        <section class = "grid-layout">
            <h2 class = "header">Lab Four - Styling your site.</h2>
            <!-- Public Files -->
            <section class = "public-files">
                <h3>Public Files</h3>
                <p><a href = "lab4/detail.php">detail.php</a></p>
                <p><a href = "lab4/form.php">form.php</a></p>
                <p><a href = "lab4/index.php">index.php</a></p>
                <p></p>
            </section>
            <!-- Supporting files -->
            <section class = "supporting-files">
                <h3>Supporting Files</h3>
                <p><a href = "lab4/css/custom.css">custom.css</a></p>
                <p><a href = "wireframe.png">wireframe.png</a></p>
                <p></p>
            </section>
            <!-- Notes to grader -->
            <section class = "grader-notes">
                <h3>Notes to Grader</h3>
                <p></p>
            </section>
        </section>
<!-- Section: Lab Three -->
        <section class = "grid-layout">
            <h2 class = "header">Lab Three - Adding Detail and a Form</h2>
        <!-- Public files -->
            <section class = "public-files">
                <h3>Public Files</h3>
                <p><a href = "lab3/detail.php">detail.php</a></p>
                <p><a href = "lab3/form.php">form.php</a></p>
                <p><a href = "lab3/index.php">index.php</a></p>
                <p></p>
            </section>
        <!-- Supporting files -->
            <section class = "supporting-files">
                <h3>Supporting Files</h3>
                <p><a href = "lab3/css/custom.css">custom.css</a></p>
                <p><a href = "lab3/wireframe.png">wireframe.png</a></p>
                <p></p>
            </section>
        <!-- Notes to grader -->
            <section class = "grader-notes">
                <h3>Notes to Grader</h3>
                <p></p>
            </section>
        </section>

<!-- Section: Lab Two -->
        <section class = "grid-layout">
            <h2 class = "header">Lab Two - Making the World a Better Place</h2>
        <!-- Public files = lab2/index.php -->
            <section class = "public-files">
                <h3>Public Files</h3>
                <p><a href = "lab2/index.php">index.php</a></p>
            </section>

        <!-- Supporting files = lab2/css/custom.css -->
            <section class = "supporting-files">
                <h3>Supporting Files</h3>
                <p><a href = "lab2/css/custom.css">custom.css</a></p>
                <p></p>
            </section>

        <!-- Notes to grader -->
            <section class = "grader-notes">
                <h3>Notes to Grader</h3>
                <p></p>
            </section>
        </section>
    <!-- Section: Lab One -->
        <section class = "grid-layout">
            <h2 class = "header">Lab One - Setting up your Sitemap</h2>
        
        <!-- Public files = testing.php -->
            <section class = "public-files">
                <h3>Public Files</h3>
                <p><a href = "testing.php">Testing Page</a></p>
            </section>
        
        <!-- Supporting files -->
            <section class = "supporting-files">
                <h3>Supporting Files</h3>
                <p><a href = "lab2/css/custom.css">custom.css</a></p>
                <p></p>
            </section>

        <!-- Notes to grader -->
            <section class = "grader-notes">
                <h3>Notes to Grader</h3>
                <p></p>
            </section>
        </section>
    </body>
</html>
    





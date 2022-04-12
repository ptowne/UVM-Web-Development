<?php
include 'top.php';
?>

<main class = "sql">
<h1>SQL</h1>
<h2>Create Table</h2>
<pre>
CREATE TABLE tblTimeline (
    pmkTimeId INT AUTO_INCREMENT PRIMARY KEY,
    fldYear VARCHAR(15),
    fldCause VARCHAR(70),
    fldEffect VARCHAR(70)
)
</pre>

<h2>Insert Date</h2>
<pre>

INSERT INTO tblTimeline (fldYear, fldCause, fldEffect)
VALUES
('1700s-1800s', 'Industrial Revolution', '~47 million acres'),
('1850-1920', 'Invention of the rubber tire', '~74 million acres'),
('1950-1980', 'Construction of Belem-Brasilia Highway and Transamazon Highway', '~286 million acres'),
('1990-2020', 'Forests reach their forest transition point', '~192 million acres (late 1900s) to ~116 million acres (2000s)');
</pre>

<h2>Select Records</h2>
<pre>
SELECT fldYear, fldCause, fldEffect FROM tblTimeline;
</pre>

<h2>Create Table for Forms</h2>
<pre>
CREATE TABLE tblRainforestForm (
    pmkRainforestFormId INT AUTO_INCREMENT PRIMARY KEY,
    fldFirstName VARCHAR(30),
    fldLastName VARCHAR(30),
    fldEmail VARCHAR(50),
    fldHelp VARCHAR(11),
    fldPlanting TINYINT(1),
    fldDonate TINYINT(1),
    fldMeat TINYINT(1),
    fldFarms TINYINT(1),
    fldNotInterested TINYINT(1),
    fldFavRainforest VARCHAR(25),
    fldComments TEXT;
)
</pre>

</main>
<?php
include 'footer.php';
?>
</body>
</html>

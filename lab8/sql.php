<?php
include 'top.php';
?>

<main>
<pre>
    <p>Create Table SQL<p>
CREATE TABLE tblTimeline (
    pmkTimeId INT AUTO_INCREMENT PRIMARY KEY,
    fldYear VARCHAR(15),
    fldCause VARCHAR(70),
    fldEffect VARCHAR(70)
)

INSERT INTO tblTimeline (fldYear, fldCause, fldEffect)
VALUES
('1700s-1800s', 'Industrial Revolution', '~47 million acres'),
('1850-1920', 'Invention of the rubber tire', '~74 million acres'),
('1950-1980', 'Construction of Belem-Brasilia Highway and Transamazon Highway', '~286 million acres'),
('1990-2020', 'Forests reach their forest transition point', '~192 million acres (late 1900s) to ~116 million acres (2000s)');

SELECT fldYear, fldCause, fldEffect FROM tblTimeline;
</pre>

</main>
<?php
include 'footer.php';
?>
</body>
</html>

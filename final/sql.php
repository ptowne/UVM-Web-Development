<?php
include 'top.php';
?>
<main class = "sql">
<h1>SQL</h1>
<h2>Create Table</h2>
<pre>
CREATE TABLE tblMountEllen(
    pmkMountEllenId INT AUTO_INCREMENT PRIMARY KEY,
    fldAge VARCHAR(10),
    fldDays VARCHAR(40),
    fldLeader VARCHAR(10)
);
CREATE TABLE tblMountMansfield(
    pmkMountMansfieldId INT AUTO_INCREMENT PRIMARY KEY,
    fldAge VARCHAR(10),
    fldDays VARCHAR(40),
    fldLeader VARCHAR(10)
);
CREATE TABLE tblLongTrail(
    pmkLongTrailId INT AUTO_INCREMENT PRIMARY KEY,
    fldAge VARCHAR(10),
    fldDays VARCHAR(40),
    fldLeader VARCHAR(10)
);

</pre>

<h2>Insert Data</h2>
<pre>
INSERT INTO tblMountEllen (fldAge, fldDays, fldLeader)
    VALUES
    ('Teens', 'June 13th - June 17th', 'Fern'),
    ('Teens', 'July 8th - July 12th', 'Grass'),
    ('Teens', 'July 28th - August 1st', 'Fern'),
    ('Adults', 'June 2nd - June 6th', 'Cedar'),
    ('Adults', 'June 27th - July 1st', 'Grass'),
    ('Adult', 'July 22nd - July 26th', 'Willow');

INSERT INTO tblMountMansfield (fldAge, fldDays, fldLeader)
    VALUES
    ('Teens', 'June 1st - June 5th', 'Willow'),
    ('Teens', 'June 14th - June 18th', 'Grass'),
    ('Teens', 'July 5th - July 9th', 'Willow'),
    ('Teens', 'July 28th - August 1st', 'Grass'),
    ('Adults', 'June 8th - June 12th', 'Fern'),
    ('Adults', 'June 16th - June 20th', 'Cedar'),
    ('Adults', 'July 11th - July 15th', 'Willow'),
    ('Adults', 'July 31st - August 4th', 'Cedar');

INSERT INTO tblLongTrail (fldAge, fldDays, fldLeader)
    VALUES
    ('Teens', 'June 6th - June 17th', 'Willow'),
    ('Teens', 'June 17th - July 8th', 'Fern'),
    ('Teens', 'July 25th - August 5th', 'Cedar'),
    ('Adults', 'June 20th - July 1st', 'Cedar'),
    ('Adults', 'July 4th - July 15th', 'Fern'),
    ('Adult', 'August 1st - August 12th', 'Grass');
</pre>
<h2>Select Records</h2>
<pre>
SELECT fldAge, fldDays, fldLeader FROM tblMountEllen;
SELECT fldAge, fldDays, fldLeader FROM tblMountMansfield;
SELECT fldAge, fldDays, fldLeader FROM tblLongTrail;
</pre>
<h2>Create Table for Forms</h2>
<pre>
CREATE TABLE tblCampForm (
    pmkCampFormId INT AUTO_INCREMENT PRIMARY KEY,
    fldCamper VARCHAR(15),
    fldFirstName VARCHAR(30),
    fldLastName VARCHAR(30),
    fldEmail VARCHAR(50),
    fldPhone VARCHAR(10),
    fldAge VARCHAR(5),
    fldBackpacking TINYINT(1),
    fldHiking TINYINT(1),
    fldDayCamp TINYINT(1),
    fldProgram VARCHAR(25),
    fldDate TEXT
);
</pre>
<h2>Insert Record</h2>
<pre>
INSERT INTO tblCampForm 
    (fldCamper, fldFirstName, fldLastName, fldEmail, fldPhone,
    fldAge, fldBackpacking, fldHiking, fldDayCamp,
    fldProgram, fldDate)
VALUES 
    ('Self', 'Hannah', 'Sheridan', 'hgsherid@uvm.edu' '3334566896' 'Adult', '1', '0', '0',
    'The Complete Long Trail', 'june 20th')
</pre>
</main>
<?php
include 'footer.php';
?>
</body>
</html>
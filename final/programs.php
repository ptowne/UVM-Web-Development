<?php
include 'top.php';
?>
    <main class = "main">
        <section class = "backpacking" id = "backpacking">
            <h2 class = "backpackingH2">Backpacking Programs</h2>
            <p class = "backpackingInfo">Backpacking at The Long Trail Hiking Camp is easy and fun! Trips go out all summer at different areas to allow 
                our campers opportunities to peak many mountains on The Long Trail! Our backpacking trips go out this Summer 2022 
            in the months of June, July, and August.</p>
            <section class = "backpacking1">
                <h3 class = "mountEllen">Mount Ellen</h3>
                <figure class = "mountEllenFigure">
                    <img src = "images/mountEllen.jpg" alt = "Mount Ellen" class = "mountEllenPhoto">
                    <figcaption>Mount Ellen | Source: <cite><a href = "https://en.wikipedia.org/wiki/Mount_Ellen_(Vermont)" target = "_blank">Wikipedia</a></cite></figcaption>
                </figure>
                <p class = "mountEllenInfo">The Jerusalem Trail near Starksboro, VT explores Mount Ellen in an 8.5 mile out-and-back hike. On this trail, our 
                    campers will reach a peak elevation of 2,500 feet and will be able to summit Mount Ellen! The Jerusalem Trail is popular,
                    so it is likely our group will encounter other hikers along the way! However, we will find solitude in the quiet forests of Mount Ellen and 
                    set up camp by a beautiful creek. Campers will meet at our facility at 8am the first day and will venture out to the trail shortly after! </p>
                <table class = "backpackingTable1">
                    <tr>
                        <th>Age Group</th>
                        <th>Days</th>
                        <th>Leader</th>
                    </tr>
<?php
$sql = 'SELECT fldAge, fldDays, fldLeader FROM tblMountEllen';

$statement = $pdo->prepare($sql);
$statement->execute();

$records = $statement->fetchAll();

foreach ($records as $record) {
    print '<tr>';
    print '<td>' . $record['fldAge'] . '</td>';
    print '<td>' . $record['fldDays'] . '</td>';
    print '<td>' . $record['fldLeader'] . '</td>';
    print '</tr>' . PHP_EOL;
}
?>
  
                </table>
            </section>
            <section class = "backpacking2">
                <h3 class = "mountMansfield">Mount Mansfield</h3>
                <figure class = "mountMansfieldFigure">
                    <img src = "images/mountMansfield.jpg" alt = "Mount Mansfield" class = "mountMansfieldPhoto">
                    <figcaption>Mount Mansfield | Source: <cite><a href = "https://en.wikipedia.org/wiki/Mount_Mansfield" target = "_blank">Wikipedia</a></cite></figcaption>
                </figure>
                <p class = "mountMansfieldInfo">An opportunity to explore the tallest mountain in Vermont awaits! Mount Mansfield reaches an elevation of 4,395 feet, and contains the Haselton Loop, a challenging trail that spans around 7 miles. Our groups start at Barnes Camp and cross the Smuggler's Notch Boardwalk, leading into 
                    The Long Trail. The loop trail has many camp sites for our campers to set up their tents, as well as lodges where we will stop for quick meals along the way! Be careful not to trample the beautiful and striking plants along the way! Our campers will meet at our facility at Barnes Camp 
                    at 9am on the first day where they will prepare for the trip and meet their fellow hikers! Each group has one trip leader and consists of around 15 campers.</p>
                <table class = "backpackingTable2">
                    <tr>
                        <th>Age Group</th>
                        <th>Days</th>
                        <th>Leader</th>
                    </tr>
<?php
$sql = 'SELECT fldAge, fldDays, fldLeader FROM tblMountMansfield';

$statement = $pdo->prepare($sql);
$statement->execute();

$records = $statement->fetchAll();

foreach ($records as $record) {
    print '<tr>';
    print '<td>' . $record['fldAge'] . '</td>';
    print '<td>' . $record['fldDays'] . '</td>';
    print '<td>' . $record['fldLeader'] . '</td>';
    print '</tr>' . PHP_EOL;
}
?>
    
                </table>
            </section>
            <section class = "backpacking3">
                <h3 class = "completeLongTrail">The Complete Long Trail</h3>
                <figure class = "longTrailFigure">
                    <img src = "images/longTrail.jpg" alt = "The Long Trail" class = "longTrailPhoto">
                    <figcaption>The Long Trail | Source: <cite><a href = "https://sectionhiker.com/how-to-hike-vermonts-long-trail/" target = "_blank">Section Hiker</a></cite></figcaption>
                    
                </figure>
                <p class = "longTrailInfo">The Long Trail runs 272 miles with an elevation gain of 65,370 ft. The trail follows the Green Mountains from the Massachusetts-Vermont border line to Canada. The trail 
                    is of varied terrain and difficulty, so hikers can never get bored! The trail also offers amazing views and allows experienced hikers to explore many mountains on the Northern East Coast. 
                    Hiking groups will consist of around 20 passionate campers and two trip leaders. Our campers will meet at our facility at 7am on the first day where they will recieve and pack their backpacks, 
                    learn about the trip ahead of them, and meet their new friends. From there, the campers will be transported and taken to the trail head where the adventure begins!</p>
                <table class = "backpackingTable3">
                    <tr>
                        <th>Age Group</th>
                        <th>Days</th>
                        <th>Leader</th>
                    </tr>
<?php
$sql = 'SELECT fldAge, fldDays, fldLeader FROM tblLongTrail';

$statement = $pdo->prepare($sql);
$statement->execute();

$records = $statement->fetchAll();

foreach ($records as $record) {
    print '<tr>';
    print '<td>' . $record['fldAge'] . '</td>';
    print '<td>' . $record['fldDays'] . '</td>';
    print '<td>' . $record['fldLeader'] . '</td>';
    print '</tr>' . PHP_EOL;
}
?>
               
                </table>
            </section>
        </section>

        <section class = "hiking" id = "hiking">
            <h2 class = "hikingH2">Hiking Programs</h2>
            <p class = "hikingInfo">Day hikes with The Long Trail Hiking Camp go out most days of the week in the summer from June 6th, 2022 - August 1st, 2022.</p>
            <section class = "hiking1">
                <h3 class = "camelsHump">Camel's Hump Trail</h3>
                <figure class = "camelsHumpFigure">
                    <img src = "images/camelsHump.jpg" alt = "Camel's Hump" class = "camelsHumpPhoto">
                    <figcaption>Camel's Hump | Source: <cite><a href = "https://en.wikipedia.org/wiki/Camel%27s_Hump" target = "_blank">Wikipedia</a></cite></figcaption>
                </figure>
                <p class = "camelsHumpInfo">The Camel's Hump trail spans 6 miles near Waterbury, Vermont. The popular trail takes around 4 hours to complete, and is beautiful no matter what time of year you hike!
                    Every weekend, we have multiple groups going out on the magnificent trail at three separate times of day for both age groups. Look out for the magnificent wildlife! </p>
                <table class = "hikingTable1">
                    <tr>
                        <th>Age Group</th>
                        <th>Day</th>
                        <th>Time</th>
                        <th>Trip Leader</th> 
                    </tr>
                    <tr>
                        <td>Teens</td>
                        <td>Fri</td>
                        <td>8:00am-12:00pm</td>
                        <td>Fern</td>
                    </tr>
                    <tr>
                        <td>Teens</td>
                        <td>Sat</td>
                        <td>10:00am-2:00pm</td>
                        <td>Grass</td>
                    </tr>
                    <tr>
                        <td>Teens</td>
                        <td>Sun</td>
                        <td>12:00pm-4:00pm</td>
                        <td>Willow</td>
                    </tr>

                    <tr>
                        <td>Adults</td>
                        <td>Fri</td>
                        <td>12:00pm-4:00pm</td>
                        <td>Cedar</td>
                    </tr>
                    <tr>
                        <td>Adults</td>
                        <td>Sat</td>
                        <td>9:00am-1:00pm</td>
                        <td>Grass</td>
                    </tr>
                    <tr>
                        <td>Adults</td>
                        <td>Sun</td>
                        <td>8:00am-12:00pm</td>
                        <td>Fern</td>
                    </tr>
                </table>
            </section>
            <section class = "hiking2">
                <h3 class = "jayPeak">Jay Peak Trail</h3>
                <figure class = "jayPeakFigure">
                    <img src = "images/jayPeak.jpg" alt = "Jay Peak" class = "jayPeakPhoto">
                    <figcaption>Jay Peak | Source: <cite><a href = "https://en.wikipedia.org/wiki/Jay_Peak_(Vermont)" target = "_blank">Wikipedia</a></cite></figcaption>
                </figure>
                <p class = "jayPeakInfo">This trail is 1.7 miles long, but is still a rigorous, challenging, yet beautiful hike. This hike allows us and our campers to summit Jay Peak in one day! 
                    At the top, you can see a magnificent view of Northern Vermont and Quebec.</p>
                <table class = "hikingTable2">
                    <tr>
                        <th>Age Group</th>
                        <th>Day</th>
                        <th>Time</th>
                        <th>Trip Leader</th>
                    </tr>
                    <tr>
                        <td>Teens</td>
                        <td>Sun</td>
                        <td>10:00am-11:30am</td>
                        <td>Grass</td>
                    </tr>
                    <tr>
                        <td>Teens</td>
                        <td>Tues</td>
                        <td>7:00am-8:30am</td>
                        <td>Fern</td>
                    </tr>
                    <tr>
                        <td>Teens</td>
                        <td>Thurs</td>
                        <td>9:00am-10:30am</td>
                        <td>Cedar</td>
                    </tr>
                    <tr>
                        <td>Adults</td>
                        <td>Sat</td>
                        <td>9:00am-10:30am</td>
                        <td>Cedar</td>
                    </tr>
                    <tr>
                        <td>Adults</td>
                        <td>Sun</td>
                        <td>8:00am-9:30am</td>
                        <td>Willow</td>
                    </tr>
                    <tr>
                        <td>Adults</td>
                        <td>Tues</td>
                        <td>6:00am-7:30am</td>
                        <td>Fern</td>
                    </tr>
                </table>        
            </section>
            <section class = "hiking3">
                <h3 class = "mountOlga">Mount Olga</h3>
                <figure class = "mountOlgaFigure">
                    <img src = "images/mountOlga.jpg" alt = "Mount Olga" class = "mountOlgaPhoto">
                    <figcaption>Mount Olga | Source: <cite><a href = "https://www.eastcoasthiker.com/trails/mountolga/" target = "_blank">East Coast Hiker</a></cite></figcaption>
                </figure>
                <p class = "mountOlgaInfo">This 2 mile hike explores the small Mount Olga and takes you to the summit where you will see beautiful 
                    views of Southern Vermont, New Hampshire, and Massachusetts. Though challenging, the trail only takes about
                     an hour to complete, making it the perfect hike to complete at any time of day! When we summit, we
                     will enjoy lunch while staring at the amazing views.</p>
                <table class = "hikingTable3">
                    <tr>
                        <th>Age Group</th>
                        <th>Day</th>
                        <th>Time</th>
                        <th>Trip Leader</th>
                    </tr>
                    <tr>
                        <td>Teens</td>
                        <td>Mon</td>
                        <td>11:00am-12:30pm</td>
                        <td>Grass</td>
                    </tr>
                    <tr>
                        <td>Teens</td>
                        <td>Wed</td>
                        <td>12:00pm-1:30pm</td>
                        <td>Cedar</td>
                    </tr>
                    <tr>
                        <td>Teens</td>
                        <td>Sat</td>
                        <td>12:00pm-1:30am</td>
                        <td>Fern</td>
                    </tr>
                    <tr>
                        <td>Adults</td>
                        <td>Mon</td>
                        <td>12:00pm-1:30pm</td>
                        <td>Fern</td>
                    </tr>
                    <tr>
                        <td>Adults</td>
                        <td>Sat</td>
                        <td>11:00am-12:30pm</td>
                        <td>Cedar</td>
                    </tr>
                    <tr>
                        <td>Adults</td>
                        <td>Sun</td>
                        <td>11:00am-12:30pm</td>
                        <td>Willow</td>
                    </tr>
                </table>     
            </section>
        </section>
        <section class = "dayCampProgram" id = "dayCampProgram">
            <h2 class = "dayCampH2">Day Camp for Kids</h2>
            <figure class = "dayCampProgramFigure">
                <img src = "images/dayCampProgram.jpg" alt = "Day Camp for Kids" class = "dayCampProgramPhoto">
                <figcaption>Children's Day Camp | Source: <cite><a href = "https://www.thegrammarschool.org/summer" target = "_blank">The Grammar School</a></cite></figcaption>
            </figure>
            <p class = "dayCampInfo">We also offer a children's nature camp that teaches campers about the outdoors and prepares them for hiking. At the day camp, our trip leaders teach
                important backpacking concepts like Leave-No-Trace, setting up tents, and even hanging bear bags! We want to prepare kids to become 
                avid and passionate hikers and to have positive relationships with Mother Nature. We have four sections throughout the summer that run from Monday 
                to Firday so you can't miss it!
            </p>
            <table class = "dayCampTable">
                <tr>
                    <th>Section</th>
                    <th>Day</th>
                    <th>Time</th>
                </tr>
                <tr>
                    <td>A</td>
                    <td>June 6th - June 18th</td>
                    <td>9:00am - 4:00pm</td>
                </tr>
                <tr>
                    <td>B</td>
                    <td>June 20th - July 1st</td>
                    <td>9:00am - 4:00pm</td>
                </tr>
                <tr>
                    <td>C</td>
                    <td>July 11th - July 22nd</td>
                    <td>8:00am - 3:00pm</td>
                </tr>
                <tr>
                    <td>D</td>
                    <td>July 25th - August 5th</td>
                    <td>8:00am - 3:00pm</td>
                </tr>
            </table>
        </section>
    </main>
<?php
include 'footer.php';
?>
</body>
</html>
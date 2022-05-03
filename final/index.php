<?php
include 'top.php';
?>
    <main class = "main">
        <section class = "intro">
            <h2>Explore the Beautiful Outdoors of Vermont</h2>
            <p>We are passionate about nature; at The Long Trail Hiking camp, our mission is to unite adults and children alike with memories 
                and experiences in the wonderful outdoors. At our camp, we offer backpacking trips along the mountain ranges of 
                Vermont, as well as day hikes! Through our wilderness adventure trips, we hope to build communities and create 
                memories that will last a lifetime! Continue exploring our site to encounter amazing opporitunities!
            </p>
            <form action = "about.php">
                <input type="submit" value="Find Out More!" name="btnFindOutMore">
            </form>
        </section> 
            <h2 class = "programsLinks">Programs</h2>
            <section class = "backpackProgram">
                <h3>Backpack Trips</h3>
                <p>At our camp, we offer backpacking trips around rural Vermont. Our trips span across The Long Trail of Vermont, allowing our campers to backpack magnificent mountains like Mount Mansfield and Mount Ellen.</p>
                <form action = "programs.php#backpacking">
                    <input type = "submit" value = "Backpacking" name = "btnBackpack">
                </form>
            </section>
            <figure class = "backpackFigure">
                <img src = "images/backpacking.jpg" alt = "Backpacking the Long Trail" class = "backpackingPhoto">
                <figcaption>Source: <cite><a href = "https://www.cleverhiker.com/blog/a-short-guide-to-vermonts-long-trail" target = "_blank">The Clever Hiker</a></cite></figcaption>
            </figure>
            <section class = "hikingProgram">
                <h3>Hiking Expeditions</h3>
                <p>For those who aren't interested in a long expedition but love to hike, we also offer day hikes on The Long Trail! We have hikes at multiple times of the day, so both early and late risers can enjoy! We have hikes all along 
                    the Long Trail around Jay Peak, Mount Olga, and Camel's Hump.
                </p>
                <form action = "programs.php#hiking">
                    <input type ="submit" value = "Hiking" name = "btnHiking">
                </form> 
            </section>  
            <figure class = "hikingFigure">
                    <img src = "images/hiking.jpg" alt = "Hiking the Long Trail" class = "hikingPhoto">
                    <figcaption>Source: <cite><a href = "https://www.cleverhiker.com/blog/a-short-guide-to-vermonts-long-trail" target = "_blank">The Clever Hiker</a></cite></figcaption>
            </figure>
            <section class = "dayCamp">
                <h3>Day Camp for Kids</h3>
                <p>We also offer a day camp for children that prepares children for hiking and backpacking with demonstrations and activities. We also take our campers 
                    on nature expeditions to give them a hands-on learning experience!
                </p>
                <form action = "programs.php#dayCampProgram">
                    <input type = "submit" value = "Day Camp" name = "btnDayCamp">
                </form>
            </section>
            <figure class = "dayCampFigure">
                <img src = "images/dayCamp.jpg" alt = "Children's Day Camp" class = "dayCampPhoto">
                <figcaption>Source: <cite><a href = "https://www.sevendaysvt.com/vermont/camp-therapy-sending-kids-away-this-summer-could-help-boost-their-social-skills-and-sense-of-connection/Content?oid=34947467" target = "_blank">Seven Days</a></cite></figcaption>
            </figure>
        <section class ="insta">
            <h2 class = "instaHeader">Follow Our Instagram!</h2>
            <figure class = "insta1">
                <img src = "images/instagram1.jpg" alt = "Long Trail Instagram" class = "insta1">
            </figure>
            <figure class = "insta2">
                <img src = "images/instagram2.jpg" alt = "Long Trail Instagram" class = "insta2">
            </figure>
            <figure class = "insta3">
                <img src = "images/instagram3.jpg" alt = "Long Trail Instagram" class = "insta3">
            </figure>
            <figure class = "insta4">
                <img src = "images/instagram4.jpg" alt = "Long Trail Instagram" class = "insta4">
            </figure>
            <figure class = "insta5">
                <img src = "images/instagram5.jpg" alt = "Long Trail Instagram" class = "insta5">
            </figure>
            <figure class = "insta6">
                <img src = "images/instagram6.jpg" alt = "Long Trail Instagram" class = "insta6">
            </figure>
            <form action = "https://www.instagram.com/thelongtrailhikingcamp/">
                <input type = "submit" value = "Our Instagram" name = "btnInsta">
            </form>
        </section>
    </main>
<?php
include 'footer.php';
?>
</body>
</html>


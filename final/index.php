<?php
include 'top.php';
?>
    <main class = "main">
        <section class = "intro">
            <h2>Explore the Beautiful Outdoors of Vermont</h2>
            <p>We are passionate about nature; at The Long Trail Hiking camp, our mission is to unite adults and children alilke with memories 
                and experiences in the wonderful outdoors. At our camp, we offer backpacking trips along the mountain ranges of 
                Vermont, as well as day hikes! Through our wilderness adventure trips, we hope to build communities and create 
                memories that will last a lifetime! Continue exploring our site to encounter amazing opporitunities!
            </p>
            <form action = "about.php">
                <input type="submit" value="Find Out More!" name="btnFindOutMore">
            </form>
        </section> 

        <section class = "programsLinks">
            <h2>Programs</h2>
            <section class = "backpackProgram">
                <h3>Backpack Trips</h3>
                <p>At our camp, we offer backpacking trips around rural Vermont. Our trips span across The Long Trail of Vermont, allowing our campers to backpack magnificent mountains like Mount Mansfield and Mount Ellen.</p>
                <form action = "programs.php#backpacking">
                    <input type = "submit" value = "Backpacking Programs" name = "btnBackpack">
                </form>
                <figure class = "backpackFigure">
                    <img src = "images/backpacking.jpg" alt = "Backpacking the Long Trail" class = "backpackingPhoto">
                </figure>
            </section>
            <section class = "hikingProgram">
                <h3>Hiking Expeditions</h3>
                <figure class = "hikingFigure">
                    <img src = "images/hiking.jpg" alt = "Hiking the Long Trail" class = "hikingPhoto">
                </figure>
                <p>For those who aren't interested in a long expedition but love to hike, we also offer day hikes on The Long Trail! We have hikes at multiple times of the day, so both early and late risers can enjoy! We have hikes all along 
                    the Long Trail around Jay Peak, Mount Olga, and Camel's Hump.
                </p>
                <form action = "programs.php#hiking">
                    <input type ="submit" value = "Hiking Programs" name = "btnHiking">
                </form> 
            </section>  
            <section class = "dayCamp">
                <h3>Day Camp for Kids</h3>
                <p>We also offer a day camp for children that prepares children for hiking and backpacking with demonstrations and activities. We also take our campers 
                    on nature expeditions to give them a hands-on learning experience!
                </p>
                <form action = "programs.php#dayCampProgram">
                    <input type = "submit" value = "Children's Day Camp" name = "btnDayCamp">
                </form>
                <figure class = "dayCampFigure">
                    <img src = "images/dayCamp.jpg" alt = "Children's Day Camp" class = "dayCampPhoto">
                </figure>

        </section>

        <section class ="insta">
            <h2>Follow Our Instagram!</h2>
            <section class = "instaPhotos">
                <figure class = "insta1">
                    <img src="images/insta1.jpg" alt="The Long Trail" width="300" class = "insta1photo">
                </figure>
                <figure class = "insta2">
                    <img src="images/insta2.jpg" alt="The Long Trail" width="300" class = "insta2photo">
                </figure>
                <figure class = "insta3">
                    <img src="images/insta3.jpg" alt="The Long Trail" width="300" class = "insta3photo">
                </figure>
                <figure class = "insta4">
                    <img src="images/insta4.jpg" alt="The Long Trail" width="300" class = "insta4photo">
                </figure>
                <figure class = "insta5">
                    <img src="images/insta5.jpg" alt="The Long Trail" width="300" class = "insta5photo">
                </figure>
                <figure class = "insta6">
                    <img src="images/insta6.jpg" alt="The Long Trail" width="300" class = "insta6photo">
                </figure>
            </section>
        </section>
    </main>
<?php
include 'footer.php';
?>
</body>
</html>
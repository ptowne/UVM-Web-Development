<?php
include 'top.php';
$treeMissions = array(
    array('Billion Tree Campaign', 1977, '1 Billion', 'Worldwide'),
    array('Trillion Tree Campaign', 2018, '13.96 Billion', 'Worldwide'),
    array('Plant with a Purpose', 1984, '40 Million', 8),
    array('One Tree Planted', 2014, '40 Million', 28),
    array('Eden Reforestation Projects', 2005, '580 Million', 8)
)
?>
    <main class = "main">
        <h1>How Trees Help our Earth</h1>
        <section class="how-trees-help">
                <h2>Trees Provide Oxygen</h2>
                <p>As we breathe in air, we release carbon dioxide. Similarily, trees breathe in CO2 and produce oxygen.
                    Trees take in the carbon dioxide in our air to create oxygen for us to breathe, reducing CO2 
                    levels in the process. While the ocean provides most of the earth's oxygen, rainforests 
                    account for around 28% of the earth's oxygen: one tree can create enough oxygen every year to keep two people alive. Without trees, our air would have high levels of CO2,
                which would make it unhospitible for humans and would have detrimental effects on our planet and its atmosphere. </p>
 
                <h2>Trees Provide Habitats</h2>
                <p>Trees give a variety of animals and insects shelter and food, as they are extremely important
                    to many ecosystems. Along with reducing carbon for nature's creatures to breathe, trees improve the 
                    ecostystem surrounding these creatures. Wildlife often choose to be in areas with a good amount of trees, as they
                    can provide shade, shelter, food, and protection. Without trees, wildlife would lack an adequate shelter and food source, causing
                many of them to fall victim to predators and unpredicable weather. </p>
        
           
                <h2>Trees Reduce Erosion and Flooding</h2>
                <p>Trees can reduce flooding and erosion in two ways: trees can redirect flooding, and their roots
                    can also absorb water. A Tree's leaves catches rain as it falls, lessening the amount of water that reaches 
                    the ground and reducing flooding. A tree's large, sturdy roots can also keep soil from washing away;
                    the roots of a tree can absorb water and hold soil in place, reducing erosion. With their mighty forms, trees 
                can mitigate the strength of a storm and improve water quality by reducing soil runoff into our bodies of water.</p>
         
       
                <h2>Trees Decrease Air Pollutants</h2>
                <p>Trees trap air pollutants like dirt, dust, and debris in their leaves, filtering our air and 
                    making it easier for us and our wildlife to breathe. Without trees trapping air polutants, our air 
                would be much harder to breathe and much more uncomfortable to breathe. Our cities and towns produce a lot 
            of air pollution, which makes trees even more necessary to filter our air so we can breathe.</p>
          
      
                <h2>Trees Lower Temperatures</h2>
                <p>The beneficial effects of trees amazingly do not stop there! Trees can also regulate air temperatures and humidity,
                    and reduce harsh wind. Places like cities can absorb heat and radiate it back, resulting in uncomfortably high 
                    temperatures and humidity. When trees evaporate water, they cool the area around them. 
                    This tempers the climate and reduces humidity. It has been observed that a trees in parking lots can significantly 
                    reduce the heat that they radiate, reducing asphalt temperatures by up to 36 degrees Farenheit and car temperatures by up to 
                47 degrees Farenheit.</p>
         
        </section>

        <section class = "missions">
            <h2><?php print count($treeMissions);?> Tree Helping Missions</h2>
            <table>
                <tr>
                    <th>Mission</th>
                    <th>Launch Date</th>
                    <th>Trees Planted</th>
                    <th>Number of Countries</th>
                </tr>
<?php
foreach($treeMissions as $mission) {
    print '<tr>';
    print '<td>' . $mission[0] . '</td>';
    print '<td>' . $mission[1] . '</td>';
    print '<td>' . $mission[2] . '</td>';
    print '<td>' . $mission[3] . '</td>';
    print '</tr>';
}
?>
            </table>
        <p>Source:<cite><a href = "https://impactful.ninja/best-charities-for-reforestation/" target = "_blank">https://impactful.ninja/best-charities-for-reforestation/</a></cite></p>

        </section>
            
    </main>
<?php
include 'footer.php';
?>
</body>
</html>
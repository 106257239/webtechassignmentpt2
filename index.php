<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <meta name = "description" content = "Save the Krill non-profit home page">
        <meta name = "keywords" content = "homepage, non-profit, organisation, savethekrill, krill, whale">
        <meta name = "author" content = "Jack Milan Krbaleski">
        <link rel="icon" type="image/x-icon" href="styles/images/shrimp.jpg">
        <link rel = "stylesheet" href="./styles/style.css">

        <title>Save The Krill Home Page</title>
    </head>
    <body>
        <!-- Banner Image goes above here -->
        <!-- top navigation bar leading to other pages -->
<?php
    include('header.inc');
    include('nav.inc');
?>
        <section id = "indb1">
            <!-- Inspirational/Relevent Image goes here, placeholder text below btw -->
            <h2 style="font-size:3vw"><span>Why Krill?</span></h2>
            <h3 style="font-size:2vw"><span>Krill are majestic and facinating creatures</span></h3>
            <p style="font-size:1vw"><span>You may be wondering what it is about Krill that makes them worth protecting from the collective horrid maw of whales worldwide. <br> Here are but a few out of the countless reasons to fight back against the Cetacea menace:</span></p>
            <ul id="indlist">
                <li style="font-size:1vw"><span>At least 10,000 innocent krill are slaughtered by whales every month</span></li>
                <li style="font-size:1vw"><span>Krill have big, cute eyes</span></li>
                <li style="font-size:1vw"><span>All life should be valued equally (excluding whales for obvious reasons)</span></li>
            </ul>
        </section>
        <section id="indb2">
            <!-- Another inpirational/relevent image goes here, on the right of the text-->
            <h2 style="font-size:3vw">Krill deserve better</h2>
            <h3 style="font-size:2vw">What we are doing to change things:</h3>
            <p style="font-size:1vw">Our organisation has been <s>hunting whales</s> protecting krill for almost <strong>200</strong> years and we strive to  <br> continue the endless <s>crusade</s> protective mission of our ancestors and hopefully make them <br> proud through constant innovation and pride.</p>
            <ul id="indlist">
                <li style="font-size:1vw">We hold year long <s>hunting</s> conservation trips to reduce the impact whales have on krill population.</li>
                <li style="font-size:1vw">We are constantly innovating to create new specialised equiptement to help conservation efforts.</li>
                <li style="font-size:1vw">We have several <s>whale bait</s> krill conservation sancturies set up across the world</li>
            </ul>
        </section>
        <!-- IMG SOURCED FROM https://pixabay.com/ USER: TheMoodCreator  full link: https://pixabay.com/photos/river-boat-sunset-nature-blue-8235272-->
        <img src="styles/images/river-8235272_1920.jpg"; alt="river by TheMoodCreator"; title="river"; id="indimg2">
        <section id="indb3">
            <h2 style="font-size:3vw">The Marine Menace</h2>
            <!-- Cap Ahab quote in very fancy font with fancy effects -->
            <h3 id="indquote" style="font-style: italic; font-size:1.5vw">"He's not a whale, he's the <strong>devil</strong> himself" - Capt Ahab</h3>
            <p style="font-size:1vw">Whales are the no.1 predator for krill in the wild, some species of whale exclusively <br> feed on them and kill <strong>billions</strong> of krill over their lifetime. We specialise in reducing <br> the whale population in order to lessen the impact that they have on the krill population. <br>Here are but a few reasons this is absolutely nessisary:</p>
            <ul id = "indlist">
                <li style="font-size:1vw">Blue whales exclusively feed on krill, that's the animal equivilent of genocide!</li>
                <li style="font-size:1vw">Blue whales are on average the size of three busses, thats just kind of too big</li>
                <li style="font-size:1vw">They make weird noises</li>
                <li style="font-size:1vw">For a single blue whale to be fed for 1 day, <strong>millions</strong> of krill must die, the loss of life is too great</li>
            </ul>
        </section>
        <!--IMG SOURCED FROM https://www.publicdomainpictures.net/en/view-image.php?image=266592&picture=whale-in-water "Whale in water" by Linnaea Mallette-->
        <img src="styles/images/whale-in-water.jpg" alt="Whale in Water by Linnaea Mellette" title="Whale in Water" id="indimg3"/>
        <section id="indb4">
            <!-- Inspirational stuff asking to volenteer or donate to make a change -->
            <h2 style="font-size:3vw">You can make a change!</h2>
            <h3 style="font-size:2vw">Join us or donate now to help save the lives of innocent krill</h3>
            <p style="font-size:1vw">Join one of our all year round voyages and help stem the flood of Cetacea invading our waters. <br> Sea life not for you? <br> Join our R&D department or fill one of the newly created web/software developer positions</p>
        </section>

<?php
    include('footer.inc');
?>
    </body>
</html>
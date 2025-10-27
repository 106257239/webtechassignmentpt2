<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="About page of the Save the Shrimps recruitment website">
    <meta name="keywords" content="about us, team, save the shrimps, swinburne project">
    <meta name="author" content="Vethum Helith">
    <link href="styles/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="styles/images/shrimp.jpg">
 <style>    #vethumhelith
 /* === Improved About Page Typography === */

/* ======================================================
   ABOUT PAGE STYLES — Save the Shrimps
   Designer: Vethum Helith
   Style Goals:
   ✅ Student IDs right-aligned and elegant
   ✅ Group photo <figure> with border & glow
   ✅ Table with bold headers, hex colours & hover
   ✅ Smooth typography (Poppins + Merriweather)
   ✅ Ocean-inspired theme with coral highlights
====================================================== */

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Merriweather:wght@400;700&display=swap');

/* ----- Base Page Styling ----- */
body#about_body {
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(to bottom right, #a8edea, #d0f6ff);
  color: #1a1a1a;
  line-height: 1.8;
  margin: 0;
  padding: 0;
}

/* Container spacing for readability */
main {
  width: 85%;
  margin: 0 auto;
  background-color: #ffffff;
  border-radius: 15px;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
  padding: 30px 50px;
}

/* ----- Headings ----- */
.about_heading {
  text-align: center;
  color: #004b5f;
  font-family: 'Merriweather', serif;
  margin-bottom: 15px;
  letter-spacing: 0.5px;
}

h2.about_heading {
  font-size: 2.2em;
  border-bottom: 4px solid #ff6f61; /* coral accent */
  display: inline-block;
  padding-bottom: 6px;
}

h3.about_heading {
  color: #005f73;
  font-size: 1.6em;
  margin-top: 40px;
  text-align: left;
  border-left: 6px solid #005f73;
  padding-left: 10px;
  font-weight: 600;
}

/* ----- Paragraphs and Text ----- */
.about_section p {
  font-size: 1.05em;
  margin-bottom: 15px;
  text-align: justify;
  color: #2f2f2f;
}

.about_section ul {
  list-style-type: disc;
  padding-left: 40px;
}

.about_section li {
  font-size: 1.05em;
  margin-bottom: 8px;
}

/* ----- Student IDs ----- */
.student-ids {
  text-align: right;
  font-weight: 600;
  color: #003049;
  margin-top: 20px;
  margin-right: 7%;
  font-size: 1.05em;
  line-height: 1.6;
  background: #e3f7f7;
  border-left: 5px solid #005f73;
  border-radius: 8px;
  padding: 10px 20px;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
  font-family: 'Merriweather', serif;
}

/* ----- Group Photo (Figure) ----- */
figure {
  text-align: center;
  border: 3px solid #005f73;
  border-radius: 12px;
  background-color: #ffffff;
  width: fit-content;
  margin: 40px auto;
  padding: 15px;
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
  transition: transform 0.3s ease;
}

figure:hover {
  transform: scale(1.02);
  border-color: #ff6f61;
  box-shadow: 0 8px 20px rgba(255, 111, 97, 0.4);
}

figure img {
  max-width: 100%;
  height: auto;
  border-radius: 10px;
}

figcaption {
  margin-top: 10px;
  font-style: italic;
  color: #333333;
  font-size: 0.95rem;
}

/* ----- Table (Fun Facts) ----- */
table {
  width: 100%;
  margin: 30px auto;
  border-collapse: collapse;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
  font-size: 1em;
}

th, td {
  border: 1px solid #cccccc;
  padding: 14px;
  text-align: center;
}

th {
  background-color: #005f73; /* deep teal */
  color: #ffffff;
  font-weight: bold;
  letter-spacing: 0.5px;
}

tr:nth-child(even) {
  background-color: #eaf9fa; /* pale aqua */
}

tr:hover {
  background-color: #ffebe6; /* coral tint */
  transition: 0.3s;
}

/* ----- Aside Section (Note) ----- */
#about_aside {
  margin: 40px auto;
  padding: 15px 20px;
  border-left: 6px solid #005f73;
  background-color: #f6fbfb;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
  font-style: italic;
  font-size: 0.95em;
}


}
</style>

    <title>About Us | Save the Shrimps</title>
</head>

<body id="about_body">
  <!-- Shared header -->
 <?php 
      include('header.inc');
    include('nav.inc');
  ?>
    <!-- Main content -->
    <main>
        <!-- Page heading -->
        <section class ="about_section" aria-labelledby="about_h2">
            <h2 id="about_h2" class="about_heading">About Us</h2>
        </section>

    <!-- Group introduction -->
    <section class="about_section">
      <h3 id="who_h3" class="about_heading">Who We Are</h3>
      <p>
        We are the Save the Shrimps Devs, a student project team passionate about 
        raising awareness for marine life. Our mission is to combine technology, creativity, 
        and teamwork to build a fun, accessible recruitment website while learning real-world 
        coding skills. 
      </p>
      <p>
        This project exists to inspire environmental responsibility and to showcase our 
        abilities as developers working together toward a shared goal.
      </p>
    </section>

    <!-- Team details -->
    <section class="about_section">
      <h3 id="team_h3" class="about_heading">Our Team</h3>
      <ul>
        <li>Group Name: Save the Shrimps</li>
        <li>Class: Web Development Foundations</li>
        <li>Day/Time: Tuesday, 2:30 PM – 4:30 PM</li>
      </ul>
    </section>

    <!-- Member contributions -->
    <section class="about_section">
      <h3 id="contri_h3" class="about_heading">Member Contributions</h3>
      <dl>
        <dt>Lachie</dt>
        <dd>Designed and developed the Apply page, ensuring the volunteer form is simple, user-friendly, and accessible.</dd>

        <dt>Jack</dt>
        <dd>Created the Home page, giving the site a strong introduction with smooth navigation and a professional first impression.</dd>

        <dt>Sammie</dt>
        <dd>Built the Jobs page, presenting job opportunities clearly while focusing on readability and visitor engagement.</dd>

        <dt>Vethum</dt>
        <dd>Designed and polished the About page, highlighting our mission, team profiles, fun facts, and overall group identity.</dd>
      </dl>
      <p>
        Together, we combined creativity, technical skills, and teamwork to deliver a site that reflects both our coding abilities and our commitment to collaboration.
      </p>
    </section>

        <!-- Team photo -->
        <section class ="about_section" aria-labelledby="photo_h3">
            <h3 id="photo_h3" class="about_heading">Meet the Team</h3>
            <figure>
                <img src="styles/images/screenshot-2025-09-24-at-5.44.08 pm.png" alt="Group photo of Save the Shrimps Dev Team" width="500">
                <figcaption>The Save the Shrimps Team</figcaption>
            </figure>
        </section>

    <!-- Fun facts table -->
    <section class="about_section">
      <h3 id="fun_h3" class="about_heading">Fun Facts About Us</h3>
      <table>
        <caption>Team Fun Facts</caption>
        <thead>
          <tr>
            <th>Name</th>
            <th>Dream Job</th>
            <th>Favourite Coding Snack</th>
            <th>Hometown</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Lachie</td>
            <td>Game Designer</td>
            <td>Coffee + Donuts</td>
            <td>Melbourne</td>
          </tr>
          <tr>
            <td>Jack</td>
            <td>Full-Stack Developer</td>
            <td>Pizza</td>
            <td>Melbourne</td>
          </tr>
          <tr>
            <td>Sammie</td>
            <td>UX Researcher</td>
            <td>Chocolate</td>
            <td>Melbourne</td>
          </tr>
          <tr>
            <td>Vethum</td>
            <td>Software Engineer</td>
            <td>Energy Drinks</td>
            <td>Melbourne</td>
          </tr>
        </tbody>
      </table>
    </section>
  <h3 id="fun_h3" class="about_heading">Team Contributions</h3>
<?php
  require_once "settings.php";
  $dbconn = @mysqli_connect($host,$user,$pwd,$sql_db);
  if($dbconn){
      $query = "SELECT * FROM contributions";
      $result = mysqli_query($dbconn, $query);
      if($result){

      }else{echo "<p>There are no contributions to display.</p>";}
      mysqli_close($dbconn);
  }else{ echo "<p>Unable to connect to the db.</p>";}
?>
      <table>
          <thead>
              <th style="font-size:1vw">Name</th>
              <th style="font-size:1vw">Part 1 contributions</th>
              <th style="font-size:1vw">Part 2 contributions</th>
          </thead>
<?php
  while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td style='font-size:1vw'>" . $row['name'] . "</td>";
  echo "<td style='font-size:1vw'>" . $row['pt1'] . "</td>";
  echo "<td style='font-size:1vw'>" . $row['pt2'] . "</td>";
  echo "</tr>";
  }
?>
      </table>

    <!-- Contact info -->
    <aside id="about_aside">
      <p style="font-style: italic;">
        <strong>Note:</strong> This is a student project for Swinburne.  
        For inquiries, contact us at 
        <a href="mailto:savetheshrimps@project.com">savetheshrimps@project.com</a>.
      </p>
    </aside>
  </main>

  <!-- Shared footer -->
  <footer>
    <?php
      include('footer.inc');
?>
  </footer>
</body>
</html>

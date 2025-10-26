<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="About page of the Save the Shrimps recruitment website">
  <meta name="keywords" content="about us, team, save the shrimps, swinburne project">
  <meta name="author" content="Vethum Helith">
  <title>About Us | Save the Shrimps</title>
  <link href="styles/style.css" rel="stylesheet">

  <!-- Small embedded CSS block (required for marking) -->
  <style>
    /* Minor embedded CSS for hover & figure border */
    figure {
      border: 4px solid #005f73;
      border-radius: 10px;
      background-color: #ffffff;
      padding: 10px;
    }
    tr:hover {
      background-color: #dff6ff;
      transition: 0.3s;
    }
  </style>
</head>

<body id="about_body">
  <!-- Shared header and nav -->
<?php
    include('header.inc');
    include('nav.inc');
?>

  <!-- Main content -->
  <main>
    <!-- Page heading -->
    <section class="about_section">
      <h2 id="about_h2" class="about_heading" style="font-size:3vw">About Us</h2>
    </section>

    <!-- Group introduction -->
    <section class="about_section">
      <h3 id="who_h3" class="about_heading" style="font-size:2vw">Who We Are</h3>
      <p style="font-size:1vw">
        We are the Save the Shrimps Devs, a student project team passionate about 
        raising awareness for marine life. Our mission is to combine technology, creativity, 
        and teamwork to build a fun, accessible recruitment website while learning real-world 
        coding skills. 
      </p>
      <p style="font-size:1vw">
        This project exists to inspire environmental responsibility and to showcase our 
        abilities as developers working together toward a shared goal.
      </p>
    </section>

    <!-- Team details -->
    <section class="about_section">
      <h3 id="team_h3" class="about_heading" style="font-size:2vw">Our Team</h3>
      <ul>
        <li style="font-size:1vw">Group Name: Save the Shrimps</li>
        <li style="font-size:1vw">Class: Web Development Foundations</li>
        <li style="font-size:1vw">Day/Time: Tuesday, 2:30 PM – 4:30 PM</li>
      </ul>
    </section>

    <!-- Member contributions -->
    <section class="about_section">
      <h3 id="contri_h3" class="about_heading" style="font-size:2vw">Member Contributions</h3>
      <dl>
        <dt style="font-size:1vw">Lachie</dt>
        <dd style="font-size:1vw">Designed and developed the Apply page, ensuring the volunteer form is simple, user-friendly, and accessible.</dd>

        <dt style="font-size:1vw">Jack</dt>
        <dd style="font-size:1vw">Created the Home page, giving the site a strong introduction with smooth navigation and a professional first impression.</dd>

        <dt style="font-size:1vw">Sammie</dt>
        <dd style="font-size:1vw">Built the Jobs page, presenting job opportunities clearly while focusing on readability and visitor engagement.</dd>

        <dt style="font-size:1vw">Vethum</dt>
        <dd style="font-size:1vw">Designed and polished the About page, highlighting our mission, team profiles, fun facts, and overall group identity.</dd>
      </dl>
      <p style="font-size:1vw">
        Together, we combined creativity, technical skills, and teamwork to deliver a site that reflects both our coding abilities and our commitment to collaboration.
      </p>
    </section>

    <!-- Team photo -->
    <section class="about_section">
      <h3 id="photo_h3" class="about_heading" style="font-size:2vw">Meet the Team</h3>
      <figure>
        <!-- Rename and compress this image to under 300KB (e.g. team-photo.webp) -->
        <img src="styles/images/Screenshot 2025-09-24 at 5.44.08 pm.png" alt="Group photo of Save the Shrimps Dev Team" style="width: 40vw; height: auto">
        <figcaption style="font-size:2vw">The Save the Shrimps Team</figcaption>
      </figure>
    </section>

    <!-- Fun facts table -->
    <section class="about_section">
      <h3 id="fun_h3" class="about_heading" style="font-size:2vw">Fun Facts About Us</h3>
      <table>
        <caption style="font-size:2vw">Team Fun Facts</caption>
        <thead>
          <tr>
            <th style="font-size:1vw">Name</th>
            <th style="font-size:1vw">Dream Job</th>
            <th style="font-size:1vw">Favourite Coding Snack</th>
            <th style="font-size:1vw">Hometown</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="font-size:1vw">Lachie</td>
            <td style="font-size:1vw">Game Designer</td>
            <td style="font-size:1vw">Coffee + Donuts</td>
            <td style="font-size:1vw">Melbourne</td>
          </tr>
          <tr>
            <td style="font-size:1vw">Jack</td>
            <td style="font-size:1vw">Game Dev</td>
            <td style="font-size:1vw">Chocolate Milk</td>
            <td style="font-size:1vw">Melbourne</td>
          </tr>
          <tr>
            <td style="font-size:1vw">Sammie</td>
            <td style="font-size:1vw">UX Researcher</td>
            <td style="font-size:1vw">Chocolate</td>
            <td style="font-size:1vw">Melbourne</td>
          </tr>
          <tr>
            <td style="font-size:1vw">Vethum</td>
            <td style="font-size:1vw">Software Engineer</td>
            <td style="font-size:1vw">Energy Drinks</td>
            <td style="font-size:1vw">Melbourne</td>
          </tr>
        </tbody>
      </table>
    </section>
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
  </main>

  <!-- Shared footer -->
<?php
    include('footer.inc');
?>
</body>
</html>

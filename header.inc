<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<header>
    <!-- Logo -->
    <img src="styles/images/shrimp_no_bg.png" alt="Shrimp Logo" title="Save The Shrimps" id="shrimp">

    <!-- Main site heading -->
    <h1 id="main_title">Join Save The Shrimps Team!</h1>

    <!-- Spacer to align flex layout -->
    <p></p>

    <?php
    // Show Logout only for logged-in users
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        echo '<div style="position:absolute; top:10px; right:20px;">
                <a href="logout.php" style="color:white; background-color:#1abc9c; padding:8px 14px; border-radius:6px; text-decoration:none; font-weight:bold;">
                  Logout
                </a>
              </div>';
    }
    ?>
</header>

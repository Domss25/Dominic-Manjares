<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="STYLE P.css">
</head>

<body>






<div class="header-container">
  <img src="PAGE LOGO.png" alt="Header Image" class="header-image"> 
  <div class="header-text"></div>
</div>

<div class="navbar">
  <a class="active" href="#" onclick="reloadPage()">Home</a>
  <a href="#" id="searchLink">Search</a>
  <a href="#" id="referenceLink">References</a>
  <a href="#" id="aboutLink">About</a>

  <div class="search-container" id="searchContainer">
    <form method="post" action="">
      <input type="text" id="searchInput" name="searchInput" placeholder="Enter a Wrestler...">
      <button type="submit" id="searchButton">Search</button>
    </form>
  </div>
</div>

<div class="reference-paragraph" id="referenceParagraph">
  Pictures came from <a href="http://mdickie.com" target="_blank">MDICKIE</a>
  <br>
  <p>The information came from:</p> <a href="https://prowrestling.fandom.com/wiki/Pro_Wrestling_Wiki" target="_blank">WRESTLING FANDOM</a>
</div>

<div class="about-paragraph" id="aboutParagraph" style="display: none;"> 
  This is about information about my favorite wrestlers of all time.
  <br>
  This is also for my project in Integrative.
</div>

<div class="bg"></div>



<script src="FINAL P.js"></script>
<script src="search js.js"></script>

</body>
</html>

<?php
// Function to perform the search
function performSearch($searchTerm) {
    $searchTerm = strtolower($searchTerm); // Convert search term to lowercase

    $pages = [
        "undertaker" => "Undertaker.php",
        "4" => "Undertaker.php",
        "randy orton" => "Randy Orton.php",
        "6" => "Randy Orton.php",
        "triple h" => "H.php",
        "5" => "H.php",
        "john cena" => "Cena.php",
        "1" => "Cena.php",
        "rey mysterio" => "Mysterio.php",
        "7" => "Mysterio.php",
        "seth rollins" => "Rollins.php",
        "3" => "Rollins.php",
        "roman reigns" => "Reigns.php",
        "2" => "Reigns.php",
        "aj styles" => "Styles.php",
        "8" => "Styles.php",
        "cody rhodes" => "Rhodes.php",
        "9" => "Rhodes.php",
        "drew mcintyre" => "McIntyre.php",
        "10" => "McIntyre.php"
    ];

    if (array_key_exists($searchTerm, $pages)) {
        header("Location: " . $pages[$searchTerm]);
        exit();
    } else {
        echo "<script>alert('No results found for your search term.');</script>";
    }
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['searchInput'])) {
        performSearch($_POST['searchInput']);
    } else {
        echo "<script>alert('Please enter a search term.');</script>";
    }
}
?>

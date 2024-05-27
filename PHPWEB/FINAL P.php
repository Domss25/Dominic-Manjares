<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="STYLE P.css">
<style>
  /* Sidebar styles */
  .sidebar {
    height: 100%;
    width: 250px;
    position: fixed;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    display: none; /* Initially hidden */
  }

  .sidebar a {
    padding: 10px 15px;
    text-decoration: none;
    font-size: 18px;
    color: #818181;
    display: block;
    transition: 0.3s;
  }

  .sidebar a:hover {
    color: #f1f1f1;
  }

  .open-btn {
    font-size: 20px;
    cursor: pointer;
    background-color: #111;
    color: white;
    border: none;
    position: fixed;
    top: 15px;
    left: 15px;
    z-index: 1;
  }

  .open-btn:hover {
    background-color: #444;
  }

  .main-content {
    margin-left: 60px; /* Margin to avoid overlapping the button */
  }
</style>
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

<!-- Sidebar -->
<div id="mySidebar" class="sidebar">
  <a href="#">1. John Cena</a>
  <a href="#">2. Roman Reigns</a>
  <a href="#">3. Seth Rollins</a>
  <a href="#">4. The Undertaker</a>
  <a href="#">5. Triple H</a>
  <a href="#">6. Randy Orton</a>
  <a href="#">7. Rey Mysterio</a>
  <a href="#">8. AJ Styles</a>
  <a href="#">9. Cody Rhodes</a>
  <a href="#">10. Drew McIntyre</a>
</div>

<!-- Button to toggle sidebar -->
<button class="open-btn" onclick="toggleSidebar()">☰ Rankings</button>

<div class="main-content">
  <!-- Your main content here -->
</div>

<script>
function toggleSidebar() {
  var sidebar = document.getElementById("mySidebar");
  if (sidebar.style.display === "block") {
    sidebar.style.display = "none";
  } else {
    sidebar.style.display = "block";
  }
}
</script>

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

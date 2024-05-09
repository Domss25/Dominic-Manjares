// Function to perform the search
function performSearch() {
  var searchTerm = document.getElementById("searchInput").value.toLowerCase(); // Get the search term and convert it to lowercase

  // Example search results
  if (searchTerm === "undertaker") {
    // Redirect to another HTML website
    window.location.href = "Undertaker.html"; // Replace "Undertaker.html" with the URL of the HTML file you want to open
  }else if (searchTerm === "randy orton") {
    window.location.href = "Randy Orton.html"; 
  } else if (searchTerm === "triple h") {
    window.location.href = "H.html"; 
  }
  else if (searchTerm === "john cena") {
    window.location.href = "Cena.html"; 
  }
  else if (searchTerm === "rey mysterio") {
    window.location.href = "Mysterio.html"; 
  }
  else {
    alert("No results found for your search term."); // Show an alert if no results are found
  }
}
// Event listener for search button click
document.getElementById("searchButton").onclick = performSearch;
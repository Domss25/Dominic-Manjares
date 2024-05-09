document.getElementById("searchLink").onclick = function() {
  document.getElementById("searchContainer").style.display = "block";
  document.getElementById("referenceParagraph").style.display = "none";
  document.getElementById("aboutParagraph").style.display = "none";
  changeBackground();
};




document.getElementById("referenceLink").onclick = function() {
  console.log("Reference link clicked");
  // Your code for handling the References link click
  var referenceParagraph = document.getElementById("referenceParagraph");
  referenceParagraph.style.display = referenceParagraph.style.display === 'block' ? 'none' : 'block';
  document.getElementById("searchContainer").style.display = "none";
  document.getElementById("aboutParagraph").style.display = "none";
  changeBackground1();
};

document.getElementById("aboutLink").addEventListener("click", function() {
  console.log("About link clicked");
  // Your code for handling the About link click
  var aboutParagraph = document.getElementById("aboutParagraph");
  aboutParagraph.style.display = (aboutParagraph.style.display === "none") ? "block" : "none";
  document.getElementById("searchContainer").style.display = "none";
  document.getElementById("referenceParagraph").style.display = "none";
  changeBackground2();
});

function reloadPage() {
  // Reload the page
  window.location.reload();
}

// Function to change the background image
function changeBackground() {
  var bgElement = document.querySelector(".bg");
  bgElement.style.backgroundImage = "url('bg 2.jpg')"; // Change 'new_bg_image.jpg' to the path of your new background image
}

function changeBackground1() {
  var bgElement = document.querySelector(".bg");
  bgElement.style.backgroundImage = "url('bg ref.png')"; // Change 'new_bg_image.jpg' to the path of your new background image
}

function changeBackground2() {
  var bgElement = document.querySelector(".bg");
  bgElement.style.backgroundImage = "url('bg about.png')"; // Change 'new_bg_image.jpg' to the path of your new background image
}

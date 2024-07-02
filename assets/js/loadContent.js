// Function to load external HTML content into an element
function loadHTML(elementID, url) {
  fetch(url)
    .then(response => {
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      return response.text();
    })
    .then(data => document.getElementById(elementID).innerHTML = data)
    .catch(error => console.error('Error loading HTML:', error));
}

// Load header and footer
document.addEventListener("DOMContentLoaded", function() {
  loadHTML('header-placeholder', 'header.html');
  loadHTML('footer-placeholder', 'footer.html');
});
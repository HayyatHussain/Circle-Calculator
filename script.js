// Get the DOM elements
const circle = document.getElementById("circle");
const form = document.querySelector("form");
const text = document.querySelector("p");
const input = document.getElementById("war");

// Add an event listener to the form
form.addEventListener("submit", (event) => {
  // Prevent the page from reloading after form submission
  event.preventDefault();

  // Generate a random color for the circle
  circle.style.backgroundColor =
    "rgb(" +
    Math.round(Math.random() * 255) +
    "," +
    Math.round(Math.random() * 255) +
    "," +
    Math.round(Math.random() * 255) +
    ")";

  // Get the user-provided radius
  const radiusInPixels = parseFloat(input.value);

  // Calculate the diameter
  const diameter = 2 * radiusInPixels;

  if (radiusInPixels >= 300) {
    // Set the width and height of the circle element
    circle.style.width = "200px";
    circle.style.height = "200px";

    // Display text if circle is too big
    text.style.display = "block";
  } else {
    // Set the width and height of the circle element
    circle.style.width = diameter + "px";
    circle.style.height = diameter + "px";

    // Display text if circle is too big
    text.style.display = "none";
  }

  // Change the placeholder of input field
  input.placeholder = radiusInPixels;
});

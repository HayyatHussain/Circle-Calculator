<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Circle Calculator</title>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <br /><br />
    <form action="index.php" method="post">
      <label for="war">Radius in px:</label>
      <input
        type="number"
        name="radius"
        id="war"
        required
        placeholder="0"
      /><br /><br />
      <input type="submit" value="Submit" id="btn" /><br /><br />
    </form>

    <div id="circle"></div>
    <br /><br />
    <p>
      Radius is too big. Anything greater than 299px is not supported, and a
      circle of width/height = 200px is sketched. If allowed, that would be one
      thicc circle!!!!
    </p>

    <script src="script.js"></script>
  </body>
</html>

<?php
    // Validate and sanitize user input
    $radius = isset($_POST["radius"]) ? floatval($_POST["radius"]) : 0;

    // Perform calculations
    $pi = pi();
    $area = abs(round($radius ** 2 * $pi, 2));
    $circumference = abs(round($radius * $pi * 2, 2));
    $volume = abs(round(4/3 * $pi * pow($radius, 3), 2));

    // Display results
    echo "Circumference = {$circumference}px.<br><br>";
    echo "The area of the circle is {$area}px.<br><br>"; 
    echo "If the radius is of a sphere, then the volume of that sphere is = {$volume}px.<br><br>";
    echo "All these values are absolute values and are rounded off.";
?>
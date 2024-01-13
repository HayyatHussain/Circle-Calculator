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
<!doctype html>
<html>
    <head>
        <title>PHP Custom Functions</title>
    </head>
    <body>
    
        <h1>PHP Custom Functions</h1>

        <p>The following function allows PHP to easily convert a numeric rating to a visual rating:</p>

        <?php

        // Define a function to visually output a rating
        // $rating - number - the rating to display
        // $total - number - what is the rating out of
        // $color - string - what colour shoudl the stars be
        // $alternate - string - if specified the stars will be displayed using two colours
        function rating_stars ($rating, $total = 5, $color = 'black', $alternate = false) {

            // Start the result with a div using the specified colour
            $html = '<div style="color:'.$color.'">';

            // Loop based on the $total parameter
            for ($i = 0; $i < $total; $i++)
            {

                // If an alternate colour is specified use two different colours for the on and off stars
                if ($alternate) {

                    if ($rating > $i) {
                        $html .= '&#9733; ';
                    } else {
                        $html .= '<span style="color:'.$alternate.'">&#9733;</span> ';
                    }

                // If no alternate is specifed us ful and outlined stars for on and off
                } else {

                    if ($rating > $i) {
                        $html .= '&#9733; ';
                    } else {
                        $html .= '&#9734; ';
                    }
                }
            }

            // Close the original div
            $html .= '</div>';

            // Return the HTML result
            return $html;

        }
        
        echo rating_stars (3);

        echo '<br>';

        echo rating_stars (9, 10);

        echo '<br>';

        $stars = rating_stars (2, 20, 'red', 'grey');
        echo $stars;

        echo '<br>';

        echo rating_stars (4, 5, 'red', 'green');

        echo '<br>';

        echo rating_stars (3, 10, 'blue', 'purple');

        ?>    

    </body>
</html>

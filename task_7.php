standard deviation:

<?php

    // function to calculate the standard deviation
    // of array elements
    function Stand_Deviation($arr)
    {
        $num_of_elements = count($arr);

        $variance = 0.0;

                // calculating mean using array_sum() method
        $average = array_sum($arr)/$num_of_elements;

        foreach($arr as $i)
        {
            // sum of squares of differences between
                        // all numbers and means.
            $variance += pow(($i - $average), 2);
        }

        return (float)sqrt($variance/$num_of_elements);
    }

    // Input array
    $arr = array(2, 3, 5, 6, 7);

    print_r(Stand_Deviation($arr));

?>
<?php

    class RepeatCounter {

        function countRepeats($input_search, $input_string) {


          $search = strtolower($input_search);
          $string = strtolower($input_string);
          $final_count = 0;


                    if ($search == $string) {
                        $final_count++;
                    }
            return $final_count;
        }
    }
?>

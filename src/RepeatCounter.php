<?php

    class RepeatCounter {

        function countRepeats($input_search, $input_string) {

          $count = 0;
          $search = strtolower($input_search);//lower case input search
          $string = strtolower($input_string);//lower case input string
          $string_array = explode(' ', $string);//seperate into individual words
          $words = array_count_values($string_array);

          foreach($string_array as $word) {
            $count += substr_count($search, $word);
          }
            return $count;
        }
    }
?>

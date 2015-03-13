<?php

    require_once "src/RepeatCounter.php";
    //
    // Spec 1-
    //     Take single input letter and count how many occurrences in single string. Return that number.
    // input_word: "a"
    // input_string: "a"
    //
    //     return: "1"
    // ---------------------------------------
    // Spec 2-
    //     Take single input letter and count how many occurrences in multi character string, which contains the input once. Return that number.
    // input_word: "a"
    // input_string: "a b"
    //
    //     return: "1"
    // ---------------------------------------
    // Spec 3-
    //     Take single input letter and count how many occurrences in multi character string, which contains the input twice. Return that number.
    // input_word: "a"
    // input_string: "a b a"
    //
    //     return: "2"
    // ---------------------------------------

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_RepeatCounter_singleString()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_search = "a";
            $input_string = "a";
            //Act
            $result = $test_RepeatCounter->countRepeats($input_search, $input_string);
            //Assert
            $this->assertEquals("1", $result);
        }

        function test_RepeatCounter_multiString()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_search = "a";
            $input_string = "a b";
            //Act
            $result = $test_RepeatCounter->countRepeats($input_search, $input_string);
            //Assert
            $this->assertEquals("1", $result);
        }

        function test_RepeatCounter_multiResult()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_search = 'a';
            $input_string = 'a a b';
            //Act
            $result = $test_RepeatCounter->countRepeats($input_search, $input_string);
            //Assert
            $this->assertEquals("2", $result);
        }

    }
?>

<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_RepeatCounter_singleLetter()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_search = ['a'];
            $input_string = ['a'];
            //Act
            $result = $test_RepeatCounter->countRepeats($input_search);
            //Assert
            $this->assertEquals("1", $result);
        }

    }
?>

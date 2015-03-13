<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_RepeatCounter_singleString()
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
    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_RepeatCounter_multiString()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_search = ['a'];
            $input_string = ['a b'];
            //Act
            $result = $test_RepeatCounter->countRepeats($input_search);
            //Assert
            $this->assertEquals("1", $result);
        }

    }
    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_RepeatCounter_multiResult()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_search = ['a'];
            $input_string = ['a a b'];
            //Act
            $result = $test_RepeatCounter->countRepeats($input_search);
            //Assert
            $this->assertEquals("2", $result);
        }

    }
?>

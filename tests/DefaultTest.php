<?php

use app\DeleteMe;
use PHPUnit\Framework\TestCase;

class DefaultTest extends TestCase
{
    public function testItShouldWorkWhenWeExecuteTheTest()
    {
        // Assert
        $this->assertTrue(true);
    }

    public function testDeleteMeShouldCreateAValidInstanceWhenWeCreateAnInstanceOfDeleteMeClass()
    {
        // Arrange
        $instance = new DeleteMe();

        // Act
        $isInstanceOfDelete = $instance instanceof DeleteMe;

        // Assert
        $this->assertEquals(true, $isInstanceOfDelete, 'Instance is not a valid instance of DeleteMe Class.');
    }

}

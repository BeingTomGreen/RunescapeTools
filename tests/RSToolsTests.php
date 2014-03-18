<?php

class RSToolsTests extends PHPUnit_Framework_TestCase {

  public function __construct()
  {
    $this->rsTools = new \RSChallenges\RunescapeTools\RSTools;
  }

  /**
   * Tests that the RSTools->shortenNumber() returns the correct values
   *
   * @return void
   */
  public function test_shortenNumber_returns_correct_value()
  {
    $this->assertEquals('75', $this->rsTools->shortenNumber(75));
    $this->assertEquals('999', $this->rsTools->shortenNumber(999));
    $this->assertEquals('1k', $this->rsTools->shortenNumber(1000));
    $this->assertEquals('999k', $this->rsTools->shortenNumber(999000));
    $this->assertEquals('1m', $this->rsTools->shortenNumber(1000000));
    $this->assertEquals('999m', $this->rsTools->shortenNumber(999000000));
    $this->assertEquals('1b', $this->rsTools->shortenNumber(1000000000));
  }

  /**
   * Tests that the RSTools->shortenNumber() correctly handles invalid input
   *
   * @return void
   */
  public function test_shortenNumber_handles_invalid_input()
  {

  	$this->setExpectedException('InvalidArgumentException');

  	$this->rsTools->shortenNumber(true);
  	$this->rsTools->shortenNumber(11464654);

    // try {
    //   $this->rsTools->shortenNumber(true);
    // }
    // catch (InvalidArgumentException $expected) {
    //   return;
    // }

    // $this->fail('shortenNumber() not correctly handling incorrect parameters.');
  }

}
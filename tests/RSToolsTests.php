<?php

class RSToolsTests extends PHPUnit_Framework_TestCase {

  public function __construct()
  {
    $this->rsTools = new \RSChallenges\RunescapeTools\RSTools;
  }

  public function test_shortenNumber_returns_correct_value()
  {
    $this->assertEquals('999', $this->rsTools->shortenNumber(999));
    $this->assertEquals('1k', $this->rsTools->shortenNumber(1000));
    $this->assertEquals('1m', $this->rsTools->shortenNumber(1000000));
    $this->assertEquals('1b', $this->rsTools->shortenNumber(1000000000));
  }

  public function test_shortenNumber_handles_invalid_parameters()
  {
    $this->assertEquals('999', $this->rsTools->shortenNumber(999));
    $this->assertEquals('1k', $this->rsTools->shortenNumber(1000));
    $this->assertEquals('1m', $this->rsTools->shortenNumber(1000000));
    $this->assertEquals('1b', $this->rsTools->shortenNumber(1000000000));
  }

}
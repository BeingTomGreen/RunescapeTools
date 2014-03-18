<?php namespace RSChallenges\RunescapeTools;

class RSTools {

  // The maximum possible value for a 32bit int
  private $max32BitInterger = 2147483647;

  public function experienceToLevel()
  {
    return '';
  }

  public function levelToExperience()
  {
    return '';
  }

  /**
   * Takes a large number and shrinks it down returning the shorter number with the appropriate metric prefix
   *
   * @todo calling pow() 9 times seems like a bad idea....
   *
   * @param  integer  $number       The number to shorten
   * @param  boolean $limitTo32Bit  If true, we will never return more than $this->max32BitInterger
   *
   * @return string   The shortened number with the appropriate metric prefix
   */
  public function shortenNumber($number, $limitTo32Bit = false)
  {
    // Non-numeric parameter passed? Exception time!
    if (!is_numeric($number))
    {
      throw new \InvalidArgumentException('Expected numeric value, '. gettype($number) .' passed!', 1);
    }

    // Check if we want to limit to 32 bit integers
    if ($limitTo32Bit === true)
    {
      // Override $number to be the max 32 bit integer
      $number = $max32BitInterger;
    }

    // Handle 1000-999999
    if ($number >= pow(10, 3) && $number < pow(10, 6))
    {
      return ($number/pow(10, 3)) . 'k';
    }
    // Handle 1000000-999999999
    elseif ($number >= pow(10, 6) && $number < pow(10, 9))
    {
      return ($number/pow(10, 6)) . 'm';
    }
    // Handle 1000000000-999999999999
    elseif ($number >= pow(10, 9) && $number < pow(10, 12))
    {
      return ($number/pow(10,9)) . 'b';
    }
    // Else (lower than 1k)
    else {
      return $number;
    }
  }

  public function expandNumber()
  {
    return '';
  }

}
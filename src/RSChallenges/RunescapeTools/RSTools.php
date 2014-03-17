<?php namespace RSChallenges\RunescapeTools;

class RSTools {


  public function experienceToLevel()
  {
    return '';
  }

  public function levelToExperience()
  {
    return '';
  }

  /**
   * [shortenNumber description]
   *
   * @param  int      $number The number to shorten
   *
   * @todo this needs to properly handle things like ->shortenNumber(1500000) which should return "1.5M" instead of "1M"
   *
   * @return string   The shortened number
   */
  public function shortenNumber($number)
  {
    // Setup our array of pseudo-metric prefixes
    $prefixes = array(9 => 'b', 6 => 'm', 3 => 'k', 0 => '');

    // Loop through each of our prefixes
    foreach($prefixes as $exponent => $suffix)
    {
      // If the p
      if ($number >= pow(10, $exponent))
      {

        $return = intval($number / pow(10, $exponent)) . $suffix;

        break;
      }
    }

    return $return;
  }

  public function expandNumber()
  {
    return '';
  }

}
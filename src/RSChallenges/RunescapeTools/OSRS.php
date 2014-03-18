<?php namespace RSChallenges\RunescapeTools;

class OSRS {

  private $rstools;

  /**
   * __construct
   *
   * @param RSTools $rstools Our RSTools instance
   *
   * @return void
   */
  public function __construct(RSTools $rstools)
  {
    $this->rstools = $rstools;
  }

}
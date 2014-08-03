<?php namespace RSChallenges\RunescapeTools;

class RS3
{
  private $rstools;

  /**
   * Holds any resources we need
   *
   * @var array
   */
  private $resources =[
    'highscores_url' => 'http://hiscore.runescape.com/index_lite.ws?player=%s',
  ];

  /**
   * An array of the available skills
   *
   * @var array
   */
  private $skills = ['overall', 'attack', 'defence', 'strength', 'constitution', 'ranged', 'prayer', 'magic', 'cooking', 'woodcutting', 'fletching', 'fishing', 'firemaking', 'crafting', 'smithing', 'mining', 'herblore', 'agility', 'thieving', 'slayer', 'farming', 'runecrafting', 'hunter', 'construction', 'summoning', 'dungeoneering', 'divination'];

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

  /**
   * Returns an array of the available skills
   *
   * @return array the available skills
   */
  public function getSkills()
  {
    return $this->skills;
  }

}

<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 2/12/17
 * Time: 9:58 PM
 */

namespace CidicGamesLibrary;

/**
 * Class CombatMagic
 * @package CidicGamesLibrary
 */
trait CombatMagic {


    /**
     * @param Player $Player
     * @return mixed
     */
    public function Fire(Player $Player){

        return round($Player->getMagic() * .5, 0,PHP_ROUND_HALF_UP);
    }
}
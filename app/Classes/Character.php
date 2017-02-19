<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 2/12/17
 * Time: 9:46 PM
 */

namespace CidicGamesLibrary;


class Character {
    protected $Hp;
    protected $Mp;
    protected $magic;
    protected $speed;
    protected $defense;
    protected $spirit;

    public function getHp(){return $this->Hp;}
    public function getMp(){return $this->Mp;}
    public function getMagic(){return $this->magic;}
    public function getSpeed(){return $this->speed;}
    public function getDefense(){return $this->defense;}
    public function getSpirit(){return $this->spirit;}

    public function setHp($x){$this->Hp = $x;}
    public function setMp($x){$this->Mp = $x;}
    public function setMagic($x){$this->magic = $x;}
    public function setSpeed($x){$this->speed = $x;}
    public function setDefense($x){$this->defense = $x;}
    public function setSpirit($x){$this->spirit = $x;}
}
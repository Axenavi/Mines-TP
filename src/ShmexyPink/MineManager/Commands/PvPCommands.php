<?php

namespace ShmexyPink\MineManager\Commands;

use pocketmine\command\CommandSender;
use ShmexyPink\MineManager\MineManager;
use pocketmine\Player;
use pocketmine\command\PluginCommand;

class PvPCommand extends PluginCommand {
    private $main;

    public function __construct(string $name, MineManager $main){
        $this->main = $main;
        parent::__construct($name, $main);
    }

    public function execute(CommandSender $p, string $commandLabel, array $args) : bool{
        if($p instanceOf Player){

        }
        return true;
    }
}
<?php

namespace ShmexyPink\MineManager\Commands;

use pocketmine\command\CommandSender;
use ShmexyPink\MineManager\MineManager;
use pocketmine\Player;
use pocketmine\command\PluginCommand;

class PlotsCommand extends PluginCommand {
    private $main;

    public function __construct(string $name, MineManager $main){
        $this->main = $main;
        parent::__construct($name, $main);
    }

    public function execute(CommandSender $p, string $commandLabel, array $args) : bool{
        if($p instanceOf Player){
            $p->setLevel($this->main->getServer()->getLevelByName("Plots"));
            $p->teleport($this->main->getServer()->getLevelByName("Plots")->getSpawnLocation()->add(0.5, 0, 0.5));
        }
        return true;
    }
}
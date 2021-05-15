<?php

namespace ShmexyPink\MineManager\Commands;

use pocketmine\command\CommandSender;
use ShmexyPink\MineManager\MineManager;
use pocketmine\Player;
use pocketmine\command\PluginCommand;

class SpawnCommand extends PluginCommand {
    private $main;

    public function __construct(string $name, MineManager $main){
        $this->main = $main;
        parent::__construct($name, $main);
        $this->setDescription("Go back to spawn!");
    }

    public function execute(CommandSender $p, string $commandLabel, array $args) : bool{
        if($p instanceOf Player){
            $p->setLevel($this->main->getServer()->getDefaultLevel());
            $p->teleport($this->main->getServer()->getDefaultLevel()->getSpawnLocation()->add(0.5, 0, 0.5));
        }
        return true;
    }
}
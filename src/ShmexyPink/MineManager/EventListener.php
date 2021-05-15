<?php

namespace ShmexyPink\MineManager;

use ShmexyPink\MineManager\MineManager;
use pocketmine\event\Listener;
use pocketmine\event\player\{
    PlayerJoinEvent,
    PlayerQuitEvent,
    PlayerLoginEvent
};

class EventListener implements Listener {

    private $main;

    public function __construct(MineManager $main){
        $this->main = $main;
    }

    public function onLogin(PlayerLoginEvent $e){
        $p = $e->getPlayer();
        $p->setLevel($this->main->getServer()->getDefaultLevel());
        $p->teleport($this->main->getServer()->getDefaultLevel()->getSpawnLocation()->add(0.5, 0, 0.5));
    }

    public function onJoin(PlayerJoinEvent $e){
        $p = $e->getPlayer();
        $e->setJoinMessage("§8[§a+§8] §7{$p->getName()}!");
    }

    public function onQuit(PlayerQuitEvent $e){
        $p = $e->getPlayer();
        $e->setQuitMessage("§8[§c-§8] §7{$p->getName()}!");
    }
}
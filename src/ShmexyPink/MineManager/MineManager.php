<?php

namespace ShmexyPink\MineManager;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

use ShmexyPink\MineManager\EventListener;
use ShmexyPink\MineManager\Forms\MainForm;
use ShmexyPink\MineManager\Forms\DonorForm;
use ShmexyPink\MineManager\Forms\MineForm;
use ShmexyPink\MineManager\Commands\CellsCommand;
use ShmexyPink\MineManager\Commands\HubCommand;
use ShmexyPink\MineManager\Commands\PlotsCommand;
use ShmexyPink\MineManager\Commands\SpawnCommand;
use ShmexyPink\MineManager\Commands\WarpCommand;

class MineManager extends PluginBase {

    public function onEnable(){
        $this->loadFormClass();
        $this->loadEvents();
        $this->getServer()->getCommandMap()->registerAll("MineManager", [
            new CellsCommand("cells", $this),
            new HubCommand("hub", $this),
            new PlotsCommand("plots", $this),
            new SpawnCommand("spawn", $this),
            new WarpCommand("warp", $this)
        ]);
    }

    private function loadEvents() : void {
        $this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
    }

    private function loadFormClass() : void {
		$this->category = new MainForm($this);
        $this->donormines = new DonorForm($this);
        $this->mines = new MineForm($this);
	}

    function getMainForm() : MainForm {
		return $this->category;
	}
    function getDonorForm() : DonorForm {
		return $this->donormines;
	}
    function getMineForm() : MineForm {
		return $this->mines;
	}

}
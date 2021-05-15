<?php

namespace ShmexyPink\MineManager\Forms;

use ShmexyPink\MineManager\MineManager;
use pocketmine\Player;
use ShmexyPink\MineManager\libs\SimpleForm;

class MainForm {
    private $main;

    public function __construct(MineManager $main){
        $this->main = $main;
    }

    public function openMainForm($player){
        $form = new SimpleForm(function (Player $p, $data){
            if($data === null){
                return true;
            }

            switch($data){
                case 0:
                    if($p instanceOf Player){
                        $p->teleport($this->main->getServer()->getDefaultLevel()->getSpawnLocation()->add(0.5, 0, 0.5));
                    }
                    break;
                case 1:

                    break;
                case 2:

                    break;
                case 3:
                    if($p instanceOf Player){
                        $p->teleport($this->main->getServer()->getLevelByName("Plots")->getSpawnLocation()->add(0.5, 0, 0.5));
                    }
                    break;
                case 4:
                    $this->main->getMineForm()->openMineForm($p);
                    break;
                case 5:
                    $this->main->getDonorForm()->openDonorMineForm($p);
                    break;
            }   
        });
        $form->setTitle("§l§eWarp §6Menu");
        $form->addButton("§l§8« §7Spawn", 0, "textures/blocks/barrier");
        $form->addButton("§l§4PvP");
        $form->addButton("§l§6Cells");
        $form->addButton("§l§aPlots");
        $form->addButton("§l§eMines");
        $form->addButton("§l§bDonor §eMines");
        $form->sendToPlayer($player);
    }
}
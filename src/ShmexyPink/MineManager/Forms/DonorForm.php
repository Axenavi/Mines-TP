<?php

namespace ShmexyPink\MineManager\Forms;

use ShmexyPink\MineManager\MineManager;
use pocketmine\Player;
use ShmexyPink\MineManager\libs\SimpleForm;

class DonorForm {
    private $main;

    public function __construct(MineManager $main){
        $this->main = $main;
    }

    public function openDonorMineForm($player){
        $form = new SimpleForm(function (Player $p, $data){
            if($data === null){
                return true;
            }

            switch($data){
                case 0:
                    $this->main->getMainForm()->openMainForm($p);
                break;
                case 1:
                    $player->sendMessage(TF::RED . "DonorMines are currently unavailable!");
                break;

                case 2:
                    $player->sendMessage(TF::RED . "DonorMines are currently unavailable!");
                break;

                case 3:
                    $player->sendMessage(TF::RED . "DonorMines are currently unavailable!");
                break;

                case 4:
                    $player->sendMessage(TF::RED . "DonorMines are currently unavailable!");
                break;

                case 5:
                    $player->sendMessage(TF::RED . "DonorMines are currently unavailable!");
                break;

                case 6:
                    $player->sendMessage(TF::RED . "DonorMines are currently unavailable!");
                break;

                case 7:
                    $player->sendMessage(TF::RED . "DonorMines are currently unavailable!");
                break;
            }   
        });
        $form->setTitle("§l§bDonor §eMines");
        $form->setContent("Choose a mine to go to!");
        $form->addButton("§l§8« §7Back", 0, "textures/blocks/barrier");

        if(!$player->hasPermission("mine.frozen")){
            $form->addButton("§l§bFro§1zen \n§r§cLocked");
        } else {
            $form->addButton("§l§bFro§1zen \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.storm")){
            $form->addButton("§l§eStorm \n§r§cLocked");
        } else {
            $form->addButton("§l§eStorm \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.seaoverlord")){
            $form->addButton("§l§bSea §9Overlord \n§r§cLocked");
        } else {
            $form->addButton("§l§bSea §9Overlord \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.nebula")){
            $form->addButton("§l§5Nebula \n§r§cLocked");
        } else {
            $form->addButton("§l§5Nebula \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.firelord")){
            $form->addButton("§l§cFire§4Lord \n§r§cLocked");
        } else {
            $form->addButton("§l§cFire§4Lord \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.heavenlydemonic")){
            $form->addButton("§l§fHeavenly §4Demonic \n§r§cLocked");
        } else {
            $form->addButton("§l§fHeavenly §4Demonic \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.kingpin")){
            $form->addButton("§l§eKing§6pin \n§r§cLocked");
        } else {
            $form->addButton("§l§eKing§6pin \n§r§aUnlocked");
        }
        $form->sendToPlayer($player);
    }
}
<?php

namespace ShmexyPink\MineManager\Forms;

use ShmexyPink\MineManager\MineManager;
use pocketmine\Player;
use ShmexyPink\MineManager\libs\SimpleForm;

class MineForm {
    private $main;

    public function __construct(MineManager $main){
        $this->main = $main;
    }

    public function openMineForm($player){
        $form = new SimpleForm(function (Player $p, $data){
            if($data === null){
                return true;
            }

            switch($data){
                case 0:
                    $this->main->getMainForm()->openMainForm($p);
                    break;
                case 1:
                    if($p instanceOf Player){
                        $p->setLevel($this->main->getServer()->getLevelByName("AMine"));
                        $p->teleport($this->main->getServer()->getLevelByName("AMine")->getSpawnLocation()->add(0.5, 0, 0.5));
                        $p->sendMessage("§l§8»§r §aYou have been teleported to A Mine!");
                    }
                    break;
                case 2:
                    if($p instanceOf Player){
                        $p->setLevel($this->main->getServer()->getLevelByName("BMine"));
                        $p->teleport($this->main->getServer()->getLevelByName("BMine")->getSpawnLocation()->add(0.5, 0, 0.5));
                        $p->sendMessage("§l§8»§r §aYou have been teleported to B Mine!");
                    }
                    break;
                case 3:
                    if($p instanceOf Player){
                        $p->setLevel($this->main->getServer()->getLevelByName("CMine"));
                        $p->teleport($this->main->getServer()->getLevelByName("CMine")->getSpawnLocation()->add(0.5, 0, 0.5));
                        $p->sendMessage("§l§8»§r §aYou have been teleported to C Mine!");
                    }
                    break;
                case 4:
                    if($p instanceOf Player){
                        $p->setLevel($this->main->getServer()->getLevelByName("DMine"));
                        $p->teleport($this->main->getServer()->getLevelByName("DMine")->getSpawnLocation()->add(0.5, 0, 0.5));
                        $p->sendMessage("§l§8»§r §aYou have been teleported to D Mine!");
                    }
                    break;
                case 5:
                    if($p instanceOf Player){
                        $p->setLevel($this->main->getServer()->getLevelByName("EMine"));
                        $p->teleport($this->main->getServer()->getLevelByName("EMine")->getSpawnLocation()->add(0.5, 0, 0.5));
                        $p->sendMessage("§l§8»§r §aYou have been teleported to E Mine!");
                    }
                    break;
                case 6:
                    if($p instanceOf Player){
                        $p->setLevel($this->main->getServer()->getLevelByName("FMine"));
                        $p->teleport($this->main->getServer()->getLevelByName("FMine")->getSpawnLocation()->add(0.5, 0, 0.5));
                        $p->sendMessage("§l§8»§r §aYou have been teleported to F Mine!");
                    }
                    break;
                case 7:
                    if($p instanceOf Player){
                        $p->setLevel($this->main->getServer()->getLevelByName("GMine"));
                        $p->teleport($this->main->getServer()->getLevelByName("GMine")->getSpawnLocation()->add(0.5, 0, 0.5));
                        $p->sendMessage("§l§8»§r §aYou have been teleported to G Mine!");
                    }
                    break;
                case 8:
                    if($p instanceOf Player){
                        $p->setLevel($this->main->getServer()->getLevelByName("HMine"));
                        $p->teleport($this->main->getServer()->getLevelByName("HMine")->getSpawnLocation()->add(0.5, 0, 0.5));
                        $p->sendMessage("§l§8»§r §aYou have been teleported to H Mine!");
                    }
                    break;
                case 9:
                    if($p instanceOf Player){
                        $p->setLevel($this->main->getServer()->getLevelByName("IMine"));
                        $p->teleport($this->main->getServer()->getLevelByName("IMine")->getSpawnLocation()->add(0.5, 0, 0.5));
                        $p->sendMessage("§l§8»§r §aYou have been teleported to I Mine!");
                    }
                    break;
                case 10:
                    if($p instanceOf Player){
                        $p->setLevel($this->main->getServer()->getLevelByName("JMine"));
                        $p->teleport($this->main->getServer()->getLevelByName("JMine")->getSpawnLocation()->add(0.5, 0, 0.5));
                        $p->sendMessage("§l§8»§r §aYou have been teleported to J Mine!");
                    }
                    break;
                case 11:
                    if($p instanceOf Player){
                        $p->setLevel($this->main->getServer()->getLevelByName("KMine"));
                        $p->teleport($this->main->getServer()->getLevelByName("KMine")->getSpawnLocation()->add(0.5, 0, 0.5));
                        $p->sendMessage("§l§8»§r §aYou have been teleported to K Mine!");
                    }
                    break;
                case 12:
                    if($p instanceOf Player){
                        $p->setLevel($this->main->getServer()->getLevelByName("LMine"));
                        $p->teleport($this->main->getServer()->getLevelByName("LMine")->getSpawnLocation()->add(0.5, 0, 0.5));
                        $p->sendMessage("§l§8»§r §aYou have been teleported to L Mine!");
                    }
                    break;
                case 13:
                    if($p instanceOf Player){
                        $p->setLevel($this->main->getServer()->getLevelByName("MMine"));
                        $p->teleport($this->main->getServer()->getLevelByName("MMine")->getSpawnLocation()->add(0.5, 0, 0.5));
                        $p->sendMessage("§l§8»§r §aYou have been teleported to M Mine!");
                    }
                    break;
                case 14:
                    if($p instanceOf Player){
                        $p->setLevel($this->main->getServer()->getLevelByName("NMine"));
                        $p->teleport($this->main->getServer()->getLevelByName("NMine")->getSpawnLocation()->add(0.5, 0, 0.5));
                        $p->sendMessage("§l§8»§r §aYou have been teleported to N Mine!");
                    }
                    break;
                case 15:
                    if($p instanceOf Player){
                        $p->setLevel($this->main->getServer()->getLevelByName("OMine"));
                        $p->teleport($this->main->getServer()->getLevelByName("OMine")->getSpawnLocation()->add(0.5, 0, 0.5));
                        $p->sendMessage("§l§8»§r §aYou have been teleported to O Mine!");
                    }
                    break;
                case 16:
                    if($p instanceOf Player){
                        $p->setLevel($this->main->getServer()->getLevelByName("PMine"));
                        $p->teleport($this->main->getServer()->getLevelByName("PMine")->getSpawnLocation()->add(0.5, 0, 0.5));
                        $p->sendMessage("§l§8»§r §aYou have been teleported to P Mine!");
                    }
                    break;
                case 17:
                    if($p instanceOf Player){
                        $p->setLevel($this->main->getServer()->getLevelByName("QMine"));
                        $p->teleport($this->main->getServer()->getLevelByName("QMine")->getSpawnLocation()->add(0.5, 0, 0.5));
                        $p->sendMessage("§l§8»§r §aYou have been teleported to Q Mine!");
                    }
                    break;
                case 18:
                    if($p instanceOf Player){
                        $p->setLevel($this->main->getServer()->getLevelByName("RMine"));
                        $p->teleport($this->main->getServer()->getLevelByName("RMine")->getSpawnLocation()->add(0.5, 0, 0.5));
                        $p->sendMessage("§l§8»§r §aYou have been teleported to R Mine!");
                    }
                    break;
                case 19:
                    if($p instanceOf Player){
                        $p->setLevel($this->main->getServer()->getLevelByName("SMine"));
                        $p->teleport($this->main->getServer()->getLevelByName("SMine")->getSpawnLocation()->add(0.5, 0, 0.5));
                        $p->sendMessage("§l§8»§r §aYou have been teleported to S Mine!");
                    }
                    break;
                case 20:
                    if($p instanceOf Player){
                        $p->setLevel($this->main->getServer()->getLevelByName("TMine"));
                        $p->teleport($this->main->getServer()->getLevelByName("TMine")->getSpawnLocation()->add(0.5, 0, 0.5));
                        $p->sendMessage("§l§8»§r §aYou have been teleported to T Mine!");
                    }
                    break;
                case 21:
                    if($p instanceOf Player){
                        $p->setLevel($this->main->getServer()->getLevelByName("UMine"));
                        $p->teleport($this->main->getServer()->getLevelByName("UMine")->getSpawnLocation()->add(0.5, 0, 0.5));
                        $p->sendMessage("§l§8»§r §aYou have been teleported to U Mine!");
                    }
                    break;
                case 22:
                    if($p instanceOf Player){
                        $p->setLevel($this->main->getServer()->getLevelByName("VMine"));
                        $p->teleport($this->main->getServer()->getLevelByName("VMine")->getSpawnLocation()->add(0.5, 0, 0.5));
                        $p->sendMessage("§l§8»§r §aYou have been teleported to V Mine!");
                    }
                    break;
                case 23:
                    if($p instanceOf Player){
                        $p->setLevel($this->main->getServer()->getLevelByName("WMine"));
                        $p->teleport($this->main->getServer()->getLevelByName("WMine")->getSpawnLocation()->add(0.5, 0, 0.5));
                        $p->sendMessage("§l§8»§r §aYou have been teleported to W Mine!");
                    }
                    break;
                case 24:
                    if($p instanceOf Player){
                        $p->setLevel($this->main->getServer()->getLevelByName("XMine"));
                        $p->teleport($this->main->getServer()->getLevelByName("XMine")->getSpawnLocation()->add(0.5, 0, 0.5));
                        $p->sendMessage("§l§8»§r §aYou have been teleported to X Mine!");
                    }
                    break;
                case 25:
                    if($p instanceOf Player){
                        $p->setLevel($this->main->getServer()->getLevelByName("YMine"));
                        $p->teleport($this->main->getServer()->getLevelByName("YMine")->getSpawnLocation()->add(0.5, 0, 0.5));
                        $p->sendMessage("§l§8»§r §aYou have been teleported to Y Mine!");
                    }
                    break;
                case 26:
                    if($p instanceOf Player){
                        $p->setLevel($this->main->getServer()->getLevelByName("ZMine"));
                        $p->teleport($this->main->getServer()->getLevelByName("ZMine")->getSpawnLocation()->add(0.5, 0, 0.5));
                        $p->sendMessage("§l§8»§r §aYou have been teleported to Z Mine!");
                    }
                    break;
            }   
        });
        $form->setTitle("§l§eMines");
        $form->addButton("§l§8« §7Back", 0, "textures/blocks/barrier");
        $form->addButton("§l§4A \n§r§aUnlocked");

        if(!$player->hasPermission("mine.b")){
            $form->addButton("§l§6B \n§r§cLocked");
        } else {
            $form->addButton("§l§6B \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.c")){
            $form->addButton("§l§eC \n§r§cLocked");
        } else {
            $form->addButton("§l§eC \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.d")){
            $form->addButton("§l§aD \n§r§cLocked");
        } else {
            $form->addButton("§l§aD \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.e")){
            $form->addButton("§l§bE \n§r§cLocked");
        } else {
            $form->addButton("§l§bE \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.f")){
            $form->addButton("§l§5F \n§r§cLocked");
        } else {
            $form->addButton("§l§5F \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.g")){
            $form->addButton("§l§dG \n§r§cLocked");
        } else {
            $form->addButton("§l§dG \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.h")){
            $form->addButton("§l§4H \n§r§cLocked");
        } else {
            $form->addButton("§l§4H \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.i")){
            $form->addButton("§l§6I \n§r§cLocked");
        } else {
            $form->addButton("§l§6I \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.j")){
            $form->addButton("§l§eJ \n§r§cLocked");
        } else {
            $form->addButton("§l§eJ \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.k")){
            $form->addButton("§l§aK \n§r§cLocked");
        } else {
            $form->addButton("§l§aK \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.l")){
            $form->addButton("§l§bL \n§r§cLocked");
        } else {
            $form->addButton("§l§bL \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.m")){
            $form->addButton("§l§5M \n§r§cLocked");
        } else {
            $form->addButton("§l§5M \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.n")){
            $form->addButton("§l§dN \n§r§cLocked");
        } else {
            $form->addButton("§l§dN \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.o")){
            $form->addButton("§l§4O \n§r§cLocked");
        } else {
            $form->addButton("§l§4O \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.p")){
            $form->addButton("§l§6P \n§r§cLocked");
        } else {
            $form->addButton("§l§6P \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.q")){
            $form->addButton("§l§eQ \n§r§cLocked");
        } else {
            $form->addButton("§l§eQ \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.r")){
            $form->addButton("§l§aR \n§r§cLocked");
        } else {
            $form->addButton("§l§aR \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.s")){
            $form->addButton("§l§bS \n§r§cLocked");
        } else {
            $form->addButton("§l§bS \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.t")){
            $form->addButton("§l§5T \n§r§cLocked");
        } else {
            $form->addButton("§l§5T \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.u")){
            $form->addButton("§l§dU \n§r§cLocked");
        } else {
            $form->addButton("§l§dU \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.v")){
            $form->addButton("§l§4V \n§r§cLocked");
        } else {
            $form->addButton("§l§4V \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.w")){
            $form->addButton("§l§6W \n§r§cLocked");
        } else {
            $form->addButton("§l§6W \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.x")){
            $form->addButton("§l§eX \n§r§cLocked");
        } else {
            $form->addButton("§l§eX \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.y")){
            $form->addButton("§l§aY \n§r§cLocked");
        } else {
            $form->addButton("§l§aY \n§r§aUnlocked");
        }

        if(!$player->hasPermission("mine.z")){
            $form->addButton("§l§bZ \n§r§cLocked");
        } else {
            $form->addButton("§l§bZ \n§r§aUnlocked");
        }
        $form->sendToPlayer($player);
    }
}
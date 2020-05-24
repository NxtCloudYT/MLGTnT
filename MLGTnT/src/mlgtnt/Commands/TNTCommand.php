<?php


namespace mlgtnt\Commands;


use mlgtnt\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\item\Item;
use pocketmine\Player;

class TNTCommand extends Command
{

    public function __construct()
    {
        parent::__construct("gettnt", "Give you an MLGTNT Block!", "/gettnt");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if ($sender instanceof Player) {

            $sender->sendMessage(Main::PREFIX . "§a+ 1 MLGTnT");
            $sender->getInventory()->addItem(Item::get(Item::TNT, 0, 1)->setCustomName("§r§cMLGTnT"));

        }
    }

}
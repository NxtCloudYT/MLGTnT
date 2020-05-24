<?php


namespace mlgtnt;

use pocketmine\block\TNT;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\item\Item;
use pocketmine\math\Vector3;

class EventListener implements Listener
{
    private $plugin;

    public function __construct(Main $plugin)
    {
        $this->plugin = $plugin;
    }

    public function onInteract(PlayerInteractEvent $event) {

        $item = $event->getPlayer()->getInventory()->getItemInHand();
        $player = $event->getPlayer();

        if ($item->getCustomName() === "§r§cMLGTnT" or $item->getCustomName() === "§r§cMlgTnt") {

            $event->setCancelled(true);

            $tnt = Item::get(Item::TNT, 0, 1);

            $player->getInventory()->removeItem($tnt);
            $yaw = $player->getYaw();
            if ($yaw < 45 && $yaw > 0 || $yaw < 360 && $yaw > 315) {

                $player->setMotion(new Vector3(0, 3, 4));

            } else if ($yaw < 135 && $yaw > 45) {

                $player->setMotion(new Vector3(-4, 3, 0));

            } else if ($yaw < 225 && $yaw > 135) {

                $player->setMotion(new Vector3(0, 3, -4));

            } elseif($yaw < 315 && $yaw > 225){

                $player->setMotion(new Vector3(4, 3, 0));

            }

        }

    }

}
<?php


namespace mlgtnt;


use mlgtnt\Commands\TNTCommand;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{
    const PREFIX = "§cMLGTnT §8| §7";

    public function onEnable()
    {
        $this->getLogger()->info(self::PREFIX . "§aThis Plugin was Enabled!");

        $this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
        $this->getServer()->getCommandMap()->register("gettnt", new TNTCommand());
    }

    public function onDisable()
    {
        $this->getLogger()->info(self::PREFIX . "§cThis Plugin was Disabled!");
    }

}
<?php

namespace UpdateCreative;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\item\Item;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\block\Flower;
use pocketmine\block\Block;
use pocketmine\block\Fence;
use pocketmine\entity\Entity;
use pocketmine\entity\Squid;
use pocketmine\entity\Villager;
use pocketmine\entity\Zombie;

class Main extends PluginBase implements Listener{
  public function onEnable(){
	$this->getserver()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info("§aUpdateCreative loaded.");
	$this->clearMenu();
	$this->buildingTab();
	$this->decorationTab();
	$this->toolsTab();
	$this->seedsTab();
  }
	private static function clearMenu(){
		Item::clearCreativeItems();
	}
	private static function buildingTab(){
		//Building
		Item::addCreativeItem(Item::get(Item::COBBLESTONE, 0));
		Item::addCreativeItem(Item::get(Item::STONE_BRICKS, 0));
		Item::addCreativeItem(Item::get(Item::STONE_BRICKS, 1));
		Item::addCreativeItem(Item::get(Item::STONE_BRICKS, 2));
		Item::addCreativeItem(Item::get(Item::STONE_BRICKS, 3));
		Item::addCreativeItem(Item::get(Item::MOSS_STONE, 0));
		Item::addCreativeItem(Item::get(Item::WOODEN_PLANKS, 0));
		Item::addCreativeItem(Item::get(Item::WOODEN_PLANKS, 1));
		Item::addCreativeItem(Item::get(Item::WOODEN_PLANKS, 2));
		Item::addCreativeItem(Item::get(Item::WOODEN_PLANKS, 3));
		Item::addCreativeItem(Item::get(Item::WOODEN_PLANKS, 4));
		Item::addCreativeItem(Item::get(Item::WOODEN_PLANKS, 5));
		Item::addCreativeItem(Item::get(Item::BRICKS, 0));
		Item::addCreativeItem(Item::get(Item::STONE, 0));
		Item::addCreativeItem(Item::get(Item::STONE, 1));
		Item::addCreativeItem(Item::get(Item::STONE, 2));
		Item::addCreativeItem(Item::get(Item::STONE, 3));
		Item::addCreativeItem(Item::get(Item::STONE, 4));
		Item::addCreativeItem(Item::get(Item::STONE, 5));
		Item::addCreativeItem(Item::get(Item::STONE, 6));
		Item::addCreativeItem(Item::get(Item::DIRT, 0));
		Item::addCreativeItem(Item::get(Item::PODZOL, 0));
		Item::addCreativeItem(Item::get(Item::GRASS, 0));
		Item::addCreativeItem(Item::get(Item::MYCELIUM, 0));
		Item::addCreativeItem(Item::get(Item::CLAY_BLOCK, 0));
		Item::addCreativeItem(Item::get(Item::HARDENED_CLAY, 0));
		Item::addCreativeItem(Item::get(Item::STAINED_CLAY, 0));
		Item::addCreativeItem(Item::get(Item::STAINED_CLAY, 7));
		Item::addCreativeItem(Item::get(Item::STAINED_CLAY, 6));
		Item::addCreativeItem(Item::get(Item::STAINED_CLAY, 5));
		Item::addCreativeItem(Item::get(Item::STAINED_CLAY, 4));
		Item::addCreativeItem(Item::get(Item::STAINED_CLAY, 3));
		Item::addCreativeItem(Item::get(Item::STAINED_CLAY, 2));
		Item::addCreativeItem(Item::get(Item::STAINED_CLAY, 1));
		Item::addCreativeItem(Item::get(Item::STAINED_CLAY, 15));
		Item::addCreativeItem(Item::get(Item::STAINED_CLAY, 14));
		Item::addCreativeItem(Item::get(Item::STAINED_CLAY, 13));
		Item::addCreativeItem(Item::get(Item::STAINED_CLAY, 12));
		Item::addCreativeItem(Item::get(Item::STAINED_CLAY, 11));
		Item::addCreativeItem(Item::get(Item::STAINED_CLAY, 10));
		Item::addCreativeItem(Item::get(Item::STAINED_CLAY, 9));
		Item::addCreativeItem(Item::get(Item::STAINED_CLAY, 8));
		Item::addCreativeItem(Item::get(Item::SANDSTONE, 0));
		Item::addCreativeItem(Item::get(Item::SANDSTONE, 1));
		Item::addCreativeItem(Item::get(Item::SANDSTONE, 2));
		Item::addCreativeItem(Item::get(Item::SAND, 0));
		Item::addCreativeItem(Item::get(Item::SAND, 1));
		Item::addCreativeItem(Item::get(Item::GRAVEL, 0));
		Item::addCreativeItem(Item::get(Item::TRUNK, 0));
		Item::addCreativeItem(Item::get(Item::TRUNK, 1));
		Item::addCreativeItem(Item::get(Item::TRUNK, 2));
		Item::addCreativeItem(Item::get(Item::TRUNK, 3));
		Item::addCreativeItem(Item::get(Item::TRUNK2, 0));
		Item::addCreativeItem(Item::get(Item::TRUNK2, 1));
		Item::addCreativeItem(Item::get(Item::NETHER_BRICKS, 0));
		Item::addCreativeItem(Item::get(Item::NETHERRACK, 0));
		Item::addCreativeItem(Item::get(Item::BEDROCK, 0));
		Item::addCreativeItem(Item::get(Item::COBBLESTONE_STAIRS, 0));
		Item::addCreativeItem(Item::get(Item::OAK_WOODEN_STAIRS, 0));
		Item::addCreativeItem(Item::get(Item::SPRUCE_WOODEN_STAIRS, 0));
		Item::addCreativeItem(Item::get(Item::BIRCH_WOODEN_STAIRS, 0));
		Item::addCreativeItem(Item::get(Item::JUNGLE_WOODEN_STAIRS, 0));
		Item::addCreativeItem(Item::get(Item::ACACIA_WOODEN_STAIRS, 0));
		Item::addCreativeItem(Item::get(Item::DARK_OAK_WOODEN_STAIRS, 0));
		Item::addCreativeItem(Item::get(Item::BRICK_STAIRS, 0));
		Item::addCreativeItem(Item::get(Item::SANDSTONE_STAIRS, 0));
		Item::addCreativeItem(Item::get(Item::STONE_BRICK_STAIRS, 0));
		Item::addCreativeItem(Item::get(Item::NETHER_BRICKS_STAIRS, 0));
		Item::addCreativeItem(Item::get(Item::QUARTZ_STAIRS, 0));
		Item::addCreativeItem(Item::get(Item::SLAB, 0));
		Item::addCreativeItem(Item::get(Item::SLAB, 1));
		Item::addCreativeItem(Item::get(Item::WOODEN_SLAB, 0));
		Item::addCreativeItem(Item::get(Item::WOODEN_SLAB, 1));
		Item::addCreativeItem(Item::get(Item::WOODEN_SLAB, 2));
		Item::addCreativeItem(Item::get(Item::WOODEN_SLAB, 3));
		Item::addCreativeItem(Item::get(Item::WOODEN_SLAB, 4));
		Item::addCreativeItem(Item::get(Item::WOODEN_SLAB, 5));
		Item::addCreativeItem(Item::get(Item::SLAB, 3));
		Item::addCreativeItem(Item::get(Item::SLAB, 4));
		Item::addCreativeItem(Item::get(Item::SLAB, 5));
		Item::addCreativeItem(Item::get(Item::SLAB, 6));
		Item::addCreativeItem(Item::get(Item::QUARTZ_BLOCK, 0));
		Item::addCreativeItem(Item::get(Item::QUARTZ_BLOCK, 1));
		Item::addCreativeItem(Item::get(Item::QUARTZ_BLOCK, 2));
		Item::addCreativeItem(Item::get(Item::COAL_ORE, 0));
		Item::addCreativeItem(Item::get(Item::IRON_ORE, 0));
		Item::addCreativeItem(Item::get(Item::GOLD_ORE, 0));
		Item::addCreativeItem(Item::get(Item::DIAMOND_ORE, 0));
		Item::addCreativeItem(Item::get(Item::LAPIS_ORE, 0));
		Item::addCreativeItem(Item::get(Item::REDSTONE_ORE, 0));
		Item::addCreativeItem(Item::get(Item::EMERALD_ORE, 0));
		Item::addCreativeItem(Item::get(Item::NETHER_QUARTZ, 0));
		Item::addCreativeItem(Item::get(Item::OBSIDIAN, 0));
		Item::addCreativeItem(Item::get(Item::ICE, 0));
		//Item::addCreativeItem(Item::get(Item::PACKED_ICE, 0));
		Item::addCreativeItem(Item::get(Item::SNOW_BLOCK, 0));
		Item::addCreativeItem(Item::get(Item::END_STONE, 0));
        //        Item::addCreativeItem(Item::get(Item::QUARTZ, 0));
	}
	private static function decorationTab(){
		//Decoration
		Item::addCreativeItem(Item::get(Item::COBBLESTONE_WALL, 0));
		Item::addCreativeItem(Item::get(Item::COBBLESTONE_WALL, 1));
		Item::addCreativeItem(Item::get(Item::WATER_LILY, 0));
		Item::addCreativeItem(Item::get(Item::GOLD_BLOCK, 0));
		Item::addCreativeItem(Item::get(Item::IRON_BLOCK, 0));
		Item::addCreativeItem(Item::get(Item::DIAMOND_BLOCK, 0));
		Item::addCreativeItem(Item::get(Item::LAPIS_BLOCK, 0));
		Item::addCreativeItem(Item::get(Item::COAL_BLOCK, 0));
		Item::addCreativeItem(Item::get(Item::EMERALD_BLOCK, 0));
		Item::addCreativeItem(Item::get(Item::REDSTONE_BLOCK, 0));
		Item::addCreativeItem(Item::get(Item::SNOW_LAYER, 0));
		Item::addCreativeItem(Item::get(Item::GLASS, 0));
		Item::addCreativeItem(Item::get(Item::GLOWSTONE_BLOCK, 0));
		Item::addCreativeItem(Item::get(Item::VINES, 0));
		//Item::addCreativeItem(Item::get(Item::NETHER_REACTOR, 0));
		Item::addCreativeItem(Item::get(Item::LADDER, 0));
		Item::addCreativeItem(Item::get(Item::SPONGE, 0));
		Item::addCreativeItem(Item::get(Item::GLASS_PANE, 0));
		Item::addCreativeItem(Item::get(Item::WOODEN_DOOR, 0));
		Item::addCreativeItem(Item::get(Item::TRAPDOOR, 0));
		Item::addCreativeItem(Item::get(Item::FENCE, Fence::FENCE_OAK));
		Item::addCreativeItem(Item::get(Item::FENCE, Fence::FENCE_SPRUCE));
		Item::addCreativeItem(Item::get(Item::FENCE, Fence::FENCE_BIRCH));
		Item::addCreativeItem(Item::get(Item::FENCE, Fence::FENCE_JUNGLE));
		Item::addCreativeItem(Item::get(Item::FENCE, Fence::FENCE_ACACIA));
		Item::addCreativeItem(Item::get(Item::FENCE, Fence::FENCE_DARKOAK));
		Item::addCreativeItem(Item::get(Item::NETHER_BRICK_FENCE, 0));
		Item::addCreativeItem(Item::get(Item::FENCE_GATE, 0));
		Item::addCreativeItem(Item::get(Item::FENCE_GATE_BIRCH, 0));
		Item::addCreativeItem(Item::get(Item::FENCE_GATE_SPRUCE, 0));
		Item::addCreativeItem(Item::get(Item::FENCE_GATE_DARK_OAK, 0));
		Item::addCreativeItem(Item::get(Item::FENCE_GATE_JUNGLE, 0));
		Item::addCreativeItem(Item::get(Item::FENCE_GATE_ACACIA, 0));
		Item::addCreativeItem(Item::get(Item::IRON_BARS, 0));
		Item::addCreativeItem(Item::get(Item::BED, 0));
		Item::addCreativeItem(Item::get(Item::BOOKSHELF, 0));
		Item::addCreativeItem(Item::get(Item::PAINTING, 0));
		Item::addCreativeItem(Item::get(Item::WORKBENCH, 0));
		Item::addCreativeItem(Item::get(Item::STONECUTTER, 0));
		Item::addCreativeItem(Item::get(Item::CHEST, 0));
		Item::addCreativeItem(Item::get(Item::FURNACE, 0));
		//Item::addCreativeItem(Item::get(Item::BREWING_STAND, 0));
		Item::addCreativeItem(Item::get(Item::END_PORTAL, 0));
		Item::addCreativeItem(Item::get(Item::ANVIL, 0));
		Item::addCreativeItem(Item::get(Item::ANVIL, 4));
		Item::addCreativeItem(Item::get(Item::ANVIL, 8));
		Item::addCreativeItem(Item::get(Item::DANDELION, 0));
		Item::addCreativeItem(Item::get(Item::RED_FLOWER, Flower::TYPE_POPPY));
		Item::addCreativeItem(Item::get(Item::RED_FLOWER, Flower::TYPE_BLUE_ORCHID));
		Item::addCreativeItem(Item::get(Item::RED_FLOWER, Flower::TYPE_ALLIUM));
		Item::addCreativeItem(Item::get(Item::RED_FLOWER, Flower::TYPE_AZURE_BLUET));
		Item::addCreativeItem(Item::get(Item::RED_FLOWER, Flower::TYPE_RED_TULIP));
		Item::addCreativeItem(Item::get(Item::RED_FLOWER, Flower::TYPE_ORANGE_TULIP));
		Item::addCreativeItem(Item::get(Item::RED_FLOWER, Flower::TYPE_WHITE_TULIP));
		Item::addCreativeItem(Item::get(Item::RED_FLOWER, Flower::TYPE_PINK_TULIP));
		Item::addCreativeItem(Item::get(Item::RED_FLOWER, Flower::TYPE_OXEYE_DAISY));
		
		Item::addCreativeItem(Item::get(Block::DOUBLE_PLANT, 0));
		Item::addCreativeItem(Item::get(Block::DOUBLE_PLANT, 1));
		Item::addCreativeItem(Item::get(Block::DOUBLE_PLANT, 2));
		Item::addCreativeItem(Item::get(Block::DOUBLE_PLANT, 3));
		Item::addCreativeItem(Item::get(Block::DOUBLE_PLANT, 4));
		Item::addCreativeItem(Item::get(Block::DOUBLE_PLANT, 5));
		
		Item::addCreativeItem(Item::get(Item::BROWN_MUSHROOM, 0));
		Item::addCreativeItem(Item::get(Item::RED_MUSHROOM, 0));
		//TODO: Mushroom block (brown, cover)	//
		//TODO: Mushroom block (red, cover)		//
		//TODO: Mushroom block (brown, stem)	// Not implimented into pocketmine yet.
		//TODO: Mushroom block (red, stem)		//
		Item::addCreativeItem(Item::get(Item::CACTUS, 0));
		Item::addCreativeItem(Item::get(Item::MELON_BLOCK, 0));
		Item::addCreativeItem(Item::get(Item::PUMPKIN, 0));
		Item::addCreativeItem(Item::get(Item::LIT_PUMPKIN, 0));
		Item::addCreativeItem(Item::get(Item::COBWEB, 0));
		Item::addCreativeItem(Item::get(Item::HAY_BALE, 0));
		Item::addCreativeItem(Item::get(Item::TALL_GRASS, 1));
		Item::addCreativeItem(Item::get(Item::TALL_GRASS, 2));
		Item::addCreativeItem(Item::get(Item::DEAD_BUSH, 0));
		
		Item::addCreativeItem(Item::get(Item::SAPLING, 0));
		Item::addCreativeItem(Item::get(Item::SAPLING, 1));
		Item::addCreativeItem(Item::get(Item::SAPLING, 2));
		Item::addCreativeItem(Item::get(Item::SAPLING, 3));
		Item::addCreativeItem(Item::get(Item::SAPLING, 4));
		Item::addCreativeItem(Item::get(Item::SAPLING, 5));
		
		Item::addCreativeItem(Item::get(Item::LEAVES, 0));
		Item::addCreativeItem(Item::get(Item::LEAVES, 1));
		Item::addCreativeItem(Item::get(Item::LEAVES, 2));
		Item::addCreativeItem(Item::get(Item::LEAVES, 3));
		Item::addCreativeItem(Item::get(Item::LEAVES2, 0));
		Item::addCreativeItem(Item::get(Item::LEAVES2, 1));
		
		Item::addCreativeItem(Item::get(Item::CAKE, 0));
		//TODO: Heads
		Item::addCreativeItem(Item::get(Item::SIGN, 0));
		//TODO: Flower Pot
		Item::addCreativeItem(Item::get(Item::MONSTER_SPAWNER, 0));
		Item::addCreativeItem(Item::get(Item::ENCHANTING_TABLE, 0));
		
		Item::addCreativeItem(Item::get(Item::WOOL, 0));
		Item::addCreativeItem(Item::get(Item::WOOL, 1));
		Item::addCreativeItem(Item::get(Item::WOOL, 2));
		Item::addCreativeItem(Item::get(Item::WOOL, 3));
		Item::addCreativeItem(Item::get(Item::WOOL, 4));
		Item::addCreativeItem(Item::get(Item::WOOL, 5));
		Item::addCreativeItem(Item::get(Item::WOOL, 6));
		Item::addCreativeItem(Item::get(Item::WOOL, 7));
		Item::addCreativeItem(Item::get(Item::WOOL, 8));
		Item::addCreativeItem(Item::get(Item::WOOL, 9));
		Item::addCreativeItem(Item::get(Item::WOOL, 10));
		Item::addCreativeItem(Item::get(Item::WOOL, 11));
		Item::addCreativeItem(Item::get(Item::WOOL, 12));
		Item::addCreativeItem(Item::get(Item::WOOL, 13));
		Item::addCreativeItem(Item::get(Item::WOOL, 14));
		Item::addCreativeItem(Item::get(Item::WOOL, 15));
		
		
		Item::addCreativeItem(Item::get(Item::CARPET, 0));
		Item::addCreativeItem(Item::get(Item::CARPET, 1));
		Item::addCreativeItem(Item::get(Item::CARPET, 2));
		Item::addCreativeItem(Item::get(Item::CARPET, 3));
		Item::addCreativeItem(Item::get(Item::CARPET, 4));
		Item::addCreativeItem(Item::get(Item::CARPET, 5));
		Item::addCreativeItem(Item::get(Item::CARPET, 6));
		Item::addCreativeItem(Item::get(Item::CARPET, 7));
		Item::addCreativeItem(Item::get(Item::CARPET, 8));
		Item::addCreativeItem(Item::get(Item::CARPET, 9));
		Item::addCreativeItem(Item::get(Item::CARPET, 10));
		Item::addCreativeItem(Item::get(Item::CARPET, 11));
		Item::addCreativeItem(Item::get(Item::CARPET, 12));
		Item::addCreativeItem(Item::get(Item::CARPET, 13));
		Item::addCreativeItem(Item::get(Item::CARPET, 14));
		Item::addCreativeItem(Item::get(Item::CARPET, 15));

	}
	private static function toolsTab(){
		//Tools
		//TODO Item::addCreativeItem(Item::get(Item::RAILS, 0));
		//TODO Item::addCreativeItem(Item::get(Item::POWERED_RAILS, 0));
		Item::addCreativeItem(Item::get(Item::TORCH, 0));
		Item::addCreativeItem(Item::get(Item::BUCKET, 0));
		Item::addCreativeItem(Item::get(Item::BUCKET, 1));
		Item::addCreativeItem(Item::get(Item::BUCKET, 8));
		Item::addCreativeItem(Item::get(Item::BUCKET, 10));
		Item::addCreativeItem(Item::get(Item::TNT, 0));
		Item::addCreativeItem(Item::get(Item::REDSTONE, 0));
		Item::addCreativeItem(Item::get(Item::BOW, 0));
		//Item::addCreativeItem(Item::get(Item::FISHING_ROD, 0));
		Item::addCreativeItem(Item::get(Item::FLINT_AND_STEEL, 0));
		Item::addCreativeItem(Item::get(Item::SHEARS, 0));
		Item::addCreativeItem(Item::get(Item::CLOCK, 0));
		Item::addCreativeItem(Item::get(Item::COMPASS, 0));
		Item::addCreativeItem(Item::get(Item::MINECART, 0));
		//Item::addCreativeItem(Item::get(Item::BOAT, 0));
		//TODO: ALL BOAT TYPES		
		Item::addCreativeItem(Item::get(Item::SPAWN_EGG, Villager::NETWORK_ID));
		//Item::addCreativeItem(Item::get(Item::SPAWN_EGG, 10)); //Chicken
		//Item::addCreativeItem(Item::get(Item::SPAWN_EGG, 11)); //Cow
		//Item::addCreativeItem(Item::get(Item::SPAWN_EGG, 12)); //Pig
		//Item::addCreativeItem(Item::get(Item::SPAWN_EGG, 13)); //Sheep
		//TODO: Wolf
		//TODO: Mooshroom
		//TODO: Creeper
		//TODO: Enderman
		//TODO: Silverfish
		//TODO: Skeleton
		//TODO: Slime
		Item::addCreativeItem(Item::get(Item::SPAWN_EGG, Zombie::NETWORK_ID));
		//TODO: PigZombie
		Item::addCreativeItem(Item::get(Item::SPAWN_EGG, Squid::NETWORK_ID));
		
		Item::addCreativeItem(Item::get(Item::WOODEN_SWORD));
		Item::addCreativeItem(Item::get(Item::WOODEN_HOE));
		Item::addCreativeItem(Item::get(Item::WOODEN_SHOVEL));
		Item::addCreativeItem(Item::get(Item::WOODEN_PICKAXE));
		Item::addCreativeItem(Item::get(Item::WOODEN_AXE));
		
		Item::addCreativeItem(Item::get(Item::STONE_SWORD));
		Item::addCreativeItem(Item::get(Item::STONE_HOE));
		Item::addCreativeItem(Item::get(Item::STONE_SHOVEL));
		Item::addCreativeItem(Item::get(Item::STONE_PICKAXE));
		Item::addCreativeItem(Item::get(Item::STONE_AXE));

		Item::addCreativeItem(Item::get(Item::IRON_SWORD));
		Item::addCreativeItem(Item::get(Item::IRON_HOE));
		Item::addCreativeItem(Item::get(Item::IRON_SHOVEL));
		Item::addCreativeItem(Item::get(Item::IRON_PICKAXE));
		Item::addCreativeItem(Item::get(Item::IRON_AXE));
		
		Item::addCreativeItem(Item::get(Item::DIAMOND_SWORD));
		Item::addCreativeItem(Item::get(Item::DIAMOND_HOE));
		Item::addCreativeItem(Item::get(Item::DIAMOND_SHOVEL));
		Item::addCreativeItem(Item::get(Item::DIAMOND_PICKAXE));
		Item::addCreativeItem(Item::get(Item::DIAMOND_AXE));		
		
		Item::addCreativeItem(Item::get(Item::GOLD_SWORD));
		Item::addCreativeItem(Item::get(Item::GOLD_HOE));
		Item::addCreativeItem(Item::get(Item::GOLD_SHOVEL));
		Item::addCreativeItem(Item::get(Item::GOLD_PICKAXE));
		Item::addCreativeItem(Item::get(Item::GOLD_AXE));
		
		Item::addCreativeItem(Item::get(Item::LEATHER_CAP));
		Item::addCreativeItem(Item::get(Item::LEATHER_TUNIC));
		Item::addCreativeItem(Item::get(Item::LEATHER_PANTS));
		Item::addCreativeItem(Item::get(Item::LEATHER_BOOTS));
		
		Item::addCreativeItem(Item::get(Item::CHAIN_HELMET));
		Item::addCreativeItem(Item::get(Item::CHAIN_CHESTPLATE));
		Item::addCreativeItem(Item::get(Item::CHAIN_LEGGINGS));
		Item::addCreativeItem(Item::get(Item::CHAIN_BOOTS));
		
		Item::addCreativeItem(Item::get(Item::IRON_HELMET));
		Item::addCreativeItem(Item::get(Item::IRON_CHESTPLATE));
		Item::addCreativeItem(Item::get(Item::IRON_LEGGINGS));
		Item::addCreativeItem(Item::get(Item::IRON_BOOTS));		
		
		Item::addCreativeItem(Item::get(Item::DIAMOND_HELMET));
		Item::addCreativeItem(Item::get(Item::DIAMOND_CHESTPLATE));
		Item::addCreativeItem(Item::get(Item::DIAMOND_LEGGINGS));
		Item::addCreativeItem(Item::get(Item::DIAMOND_BOOTS));		
		
		Item::addCreativeItem(Item::get(Item::GOLD_HELMET));
		Item::addCreativeItem(Item::get(Item::GOLD_CHESTPLATE));
		Item::addCreativeItem(Item::get(Item::GOLD_LEGGINGS));
		Item::addCreativeItem(Item::get(Item::GOLD_BOOTS));
		
		Item::addCreativeItem(Item::get(Item::SNOWBALL));
	}
	private static function seedsTab(){
		//Seeds I would edit this for the update but.. cmon!! http://prntscr.com/8yakfk
		Item::addCreativeItem(Item::get(Item::SUGARCANE, 0));
		Item::addCreativeItem(Item::get(Item::WHEAT, 0));
		Item::addCreativeItem(Item::get(Item::SEEDS, 0));
		Item::addCreativeItem(Item::get(Item::MELON_SEEDS, 0));
		Item::addCreativeItem(Item::get(Item::PUMPKIN_SEEDS, 0));
		Item::addCreativeItem(Item::get(Item::CARROT, 0));
		Item::addCreativeItem(Item::get(Item::POTATO, 0));
		Item::addCreativeItem(Item::get(Item::BEETROOT_SEEDS, 0));
		Item::addCreativeItem(Item::get(Item::EGG, 0));
		Item::addCreativeItem(Item::get(Item::RAW_FISH, 0));
		Item::addCreativeItem(Item::get(Item::RAW_FISH, 1));
		Item::addCreativeItem(Item::get(Item::RAW_FISH, 2));
		Item::addCreativeItem(Item::get(Item::RAW_FISH, 3));
		Item::addCreativeItem(Item::get(Item::COOKED_FISH, 0));
		Item::addCreativeItem(Item::get(Item::COOKED_FISH, 1));
		Item::addCreativeItem(Item::get(Item::DYE, 0));
		Item::addCreativeItem(Item::get(Item::DYE, 7));
		Item::addCreativeItem(Item::get(Item::DYE, 6));
		Item::addCreativeItem(Item::get(Item::DYE, 5));
		Item::addCreativeItem(Item::get(Item::DYE, 4));
		Item::addCreativeItem(Item::get(Item::DYE, 3));
		Item::addCreativeItem(Item::get(Item::DYE, 2));
		Item::addCreativeItem(Item::get(Item::DYE, 1));
		Item::addCreativeItem(Item::get(Item::DYE, 15));
		Item::addCreativeItem(Item::get(Item::DYE, 14));
		Item::addCreativeItem(Item::get(Item::DYE, 13));
		Item::addCreativeItem(Item::get(Item::DYE, 12));
		Item::addCreativeItem(Item::get(Item::DYE, 11));
		Item::addCreativeItem(Item::get(Item::DYE, 10));
		Item::addCreativeItem(Item::get(Item::DYE, 9));
		Item::addCreativeItem(Item::get(Item::DYE, 8));
	}
}

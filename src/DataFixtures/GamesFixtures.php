<?php

namespace App\DataFixtures;

use App\Entity\Game;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class GamesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $game = new Game();
        $game->setTitle('The Legend of Zelda: Twilight Princess');
        $game->setGenre('action-adventure');
        $game->setConsole(['Wii', 'Wii U']);
        $game->setDescription('The best game ever. If you don\'t think so, kys');
        $game->setPrice(59.99);
        $game->setProducer('Nintendo');
        $game->setImagePath('https://www.gamestop.com/video-games/wii/products/legend-of-zelda-twilight-princess/10006821.html');
        $manager->persist($game);

        $game2 = new Game();
        $game2->setTitle('The Legend of Zelda: Skyward Sword');
        $game2->setGenre('action-adventure');
        $game2->setConsole(['Wii', 'Nintendo Switch']);
        $game2->setDescription('Not the best game ever because Twilight Princess is better, but still a very solid fucking game. If you don\'t think so, kys');
        $game2->setPrice(59.99);
        $game2->setProducer('Nintendo');
        $game2->setImagePath('https://static.gamesmen.com.au/media/catalog/product/cache/43c1b9e48526c06c9c8010675100b71d/w/i/wii_zelda_ss.jpg');
        $manager->persist($game2);

        $manager->flush();
    }
}

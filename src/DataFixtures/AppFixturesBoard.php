<?php

namespace App\DataFixtures;

use App\Entity\Board;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixturesBoard extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $board = new Board();
        for ($i = 0; $i < 10; $i++) {
            $board->setName('Board'. $i);
            $manager->persist($board);
        }

        $manager->flush();
    }
}

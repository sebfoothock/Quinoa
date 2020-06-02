<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Evenement;

class DonneesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 0; $i <= 50; $i++)
        {
            $Evenement = new Evenement();
        }

        $manager->flush();
    }
}

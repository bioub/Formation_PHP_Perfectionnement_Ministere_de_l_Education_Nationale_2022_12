<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setFirstName('Steve')->setLastName('Jobs')->setEmail('sjobs@apple.com');
        $manager->persist($user);

        $user = new User();
        $user->setFirstName('Bill')->setLastName('Gates')->setEmail('bill@microsoft.com');
        $manager->persist($user);

        $manager->flush();
    }
}

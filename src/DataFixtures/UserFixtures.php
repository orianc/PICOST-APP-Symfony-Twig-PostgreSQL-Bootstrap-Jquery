<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
// use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{

    // private $passwordHasher;

    // public function __construct(UserPasswordHasherInterface $passwordHasher)
    // {
    //     $this->passwordHasher = $passwordHasher;
    // }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user
            ->setLogin('admin')
            ->setPassword('1234')
            ->setRoles([
                "ROLE_ADMIN"
            ]);


        $manager->persist($user);
        $manager->flush();
    }
}

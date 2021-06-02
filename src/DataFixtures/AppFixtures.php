<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\Album;
use App\Entity\Photo;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $album = [
            'Portrait',
            'Landscade',
            'Event'
        ];

        foreach ($album as $a) {
            $album = new Album;
            $album
                ->setName($a);

            $albumArrayObj[] = $album;
            $manager->persist($album);
        }
        for ($i = 1; $i <= 10; $i++) {
            $photoPortrait = new Photo;
            $photoPortrait
                ->setName('pexels-photo-' . $i . '.jpeg')
                ->setIntoAlbum($albumArrayObj[0]);
            $manager->persist($photoPortrait);
            $photoPortrait2 = new Photo;
            $photoPortrait2
                ->setName('pexels-photo-' . $i . '.jpeg')
                ->setIntoAlbum($albumArrayObj[1]);
            $manager->persist($photoPortrait2);
            $photoPortrait3 = new Photo;
            $photoPortrait3
                ->setName('pexels-photo-' . $i . '.jpeg')
                ->setIntoAlbum($albumArrayObj[2]);
            $manager->persist($photoPortrait3);
        }


        $manager->flush();
    }
}

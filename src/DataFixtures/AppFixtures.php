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

        foreach ($album as $a){
            $album = new Album;
            $album
                ->setName($a)
                ->setCreateAt(new DateTime('now'))
                ->setUpdateAt(new DateTime('now'))
                ;
            
            $albumArrayObj[] = $album;
            $manager->persist($album);
        }
        for ($i=0; $i < 10; $i++) { 
            $photoPortrait = new Photo;
            $photoPortrait
                ->setName('pexels-photo-' . $i)
                ->setIntoAlbum($albumArrayObj[0])
            ;
            $manager->persist($photoPortrait);
        }
        
      
        $manager->flush();
    }
}

<?php

namespace App\Entity;

use DateTimeZone;
use App\Entity\User;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\AlbumRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass=AlbumRepository::class)
 */
class Album
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;



    /**
     * @ORM\OneToMany(targetEntity=Photo::class, mappedBy="intoAlbum")
     */
    private $photos;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="album")
     */
    private $userLink;

    public function __construct()
    {
        $this->photos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name = ' '): self
    {
        $this->name = $name;

        return $this;
    }


    /**
     * @return Collection|Photo[]
     */
    public function getPhotos(): Collection
    {
        return $this->photos;
    }

    public function addPhoto(Photo $photo): self
    {
        if (!$this->photos->contains($photo)) {
            $this->photos[] = $photo;
            $photo->setIntoAlbum($this);
        }

        return $this;
    }

    public function removePhoto(Photo $photo): self
    {
        if ($this->photos->removeElement($photo)) {
            // set the owning side to null (unless already changed)
            if ($photo->getIntoAlbum() === $this) {
                $photo->setIntoAlbum(null);
            }
        }

        return $this;
    }

    public function getUserLink(): ?User
    {
        return $this->userLink;
    }

    public function setUserLink(?User $userLink): self
    {
        $this->userLink = $userLink;

        return $this;
    }
}

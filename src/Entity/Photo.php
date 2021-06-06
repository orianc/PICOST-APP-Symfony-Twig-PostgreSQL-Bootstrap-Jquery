<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\PhotoRepository;
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=PhotoRepository::class)
 * @Vich\Uploadable
 */
class Photo
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * 
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity=Album::class, inversedBy="photos")
     */
    private $intoAlbum;

    /**
     * @Vich\UploadableField(mapping="pictures", fileNameProperty="name")
     * @Assert\NotBlank(message="Selectionner un fichier")
     * @var File|null
     * 
     */
    private $pictureFile;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getIntoAlbum(): ?Album
    {
        return $this->intoAlbum;
    }

    public function setIntoAlbum(?Album $intoAlbum): self
    {
        $this->intoAlbum = $intoAlbum;

        return $this;
    }

    public function getPictureFile(): ?File
    {
        return $this->pictureFile;
    }

    public function setPictureFile(?File $pictureFile = null): self
    {
        $this->pictureFile = $pictureFile;
        return $this;
        if (null !== $pictureFile) {
            $this->updatedAt = new \DateTimeImmutable();
        }
    }
}

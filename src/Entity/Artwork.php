<?php

namespace App\Entity;

use App\Repository\ArtworkRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: ArtworkRepository::class)]
#[Gedmo\TranslationEntity(class: ArtworkRepository::class)]
#[Vich\Uploadable]

class Artwork extends AbstractEntity
{
    #[ORM\Column(length: 255)]
    private ?string $language = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $series_name = null;

    #[ORM\Column(length: 255)]
    private ?string $artist = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $year = null;

    #[ORM\Column(length: 255)]
    private ?string $inventory_id = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\Column(length: 255)]
    private ?string $availability = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ownership = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $tags = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $dimensions = null;

    #[ORM\Column]
    private ?bool $variable_dimensions = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $duration = null;

    #[ORM\Column(nullable: true)]
    private ?float $weight = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $edition = null;

    #[ORM\Column(nullable: true)]
    private ?bool $unique_edition = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private array $price = [];

    #[ORM\Column(nullable: true)]
    private ?bool $no_price = null;

    #[ORM\Column(nullable: true)]
    private ?float $artist_amount = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $artist_amount_type = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $type = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $support = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $material = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $location = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sublocation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $notes = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $documentation_notes = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $pdf_notes = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image_file = null;

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): static
    {
        $this->language = $language;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getSeriesName(): ?string
    {
        return $this->series_name;
    }

    public function setSeriesName(?string $series_name): static
    {
        $this->series_name = $series_name;

        return $this;
    }

    public function getArtist(): ?string
    {
        return $this->artist;
    }

    public function setArtist(string $artist): static
    {
        $this->artist = $artist;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(?int $year): static
    {
        $this->year = $year;

        return $this;
    }

    public function getInventoryId(): ?string
    {
        return $this->inventory_id;
    }

    public function setInventoryId(string $inventory_id): static
    {
        $this->inventory_id = $inventory_id;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getAvailability(): ?string
    {
        return $this->availability;
    }

    public function setAvailability(string $availability): static
    {
        $this->availability = $availability;

        return $this;
    }

    public function getOwnership(): ?string
    {
        return $this->ownership;
    }

    public function setOwnership(?string $ownership): static
    {
        $this->ownership = $ownership;

        return $this;
    }

    public function getTags(): ?array
    {
        return $this->tags;
    }

    public function setTags(?array $tags): static
    {
        $this->tags = $tags;

        return $this;
    }

    public function getDimensions(): ?array
    {
        return $this->dimensions;
    }

    public function setDimensions(?array $dimensions): static
    {
        $this->dimensions = $dimensions;

        return $this;
    }

    public function isVariableDimensions(): ?bool
    {
        return $this->variable_dimensions;
    }

    public function setVariableDimensions(bool $variable_dimensions): static
    {
        $this->variable_dimensions = $variable_dimensions;

        return $this;
    }

    public function getDuration(): ?array
    {
        return $this->duration;
    }

    public function setDuration(?array $duration): static
    {
        $this->duration = $duration;

        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(?float $weight): static
    {
        $this->weight = $weight;

        return $this;
    }

    public function getEdition(): ?int
    {
        return $this->edition;
    }

    public function setEdition(int $edition): static
    {
        $this->edition = $edition;

        return $this;
    }

    public function isUniqueEdition(): ?bool
    {
        return $this->unique_edition;
    }

    public function setUniqueEdition(?bool $unique_edition): static
    {
        $this->unique_edition = $unique_edition;

        return $this;
    }

    public function getPrice(): array
    {
        return $this->price;
    }

    public function setPrice(array $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function isNoPrice(): ?bool
    {
        return $this->no_price;
    }

    public function setNoPrice(?bool $no_price): static
    {
        $this->no_price = $no_price;

        return $this;
    }

    public function getArtistAmount(): ?float
    {
        return $this->artist_amount;
    }

    public function setArtistAmount(?float $artist_amount): static
    {
        $this->artist_amount = $artist_amount;

        return $this;
    }

    public function getArtistAmountType(): ?string
    {
        return $this->artist_amount_type;
    }

    public function setArtistAmountType(?string $artist_amount_type): static
    {
        $this->artist_amount_type = $artist_amount_type;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getSupport(): ?string
    {
        return $this->support;
    }

    public function setSupport(?string $support): static
    {
        $this->support = $support;

        return $this;
    }

    public function getMaterial(): ?string
    {
        return $this->material;
    }

    public function setMaterial(?string $material): static
    {
        $this->material = $material;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): static
    {
        $this->location = $location;

        return $this;
    }

    public function getSublocation(): ?string
    {
        return $this->sublocation;
    }

    public function setSublocation(?string $sublocation): static
    {
        $this->sublocation = $sublocation;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): static
    {
        $this->notes = $notes;

        return $this;
    }

    public function getDocumentationNotes(): ?string
    {
        return $this->documentation_notes;
    }

    public function setDocumentationNotes(?string $documentation_notes): static
    {
        $this->documentation_notes = $documentation_notes;

        return $this;
    }

    public function getPdfNotes(): ?string
    {
        return $this->pdf_notes;
    }

    public function setPdfNotes(?string $pdf_notes): static
    {
        $this->pdf_notes = $pdf_notes;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getImageFile(): ?string
    {
        return $this->image_file;
    }

    public function setImageFile(?string $image_file): static
    {
        $this->image_file = $image_file;

        return $this;
    }

}

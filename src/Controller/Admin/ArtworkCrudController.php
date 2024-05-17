<?php

namespace App\Controller\Admin;

use App\Entity\Artwork;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ArtworkCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Artwork::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud::new()
            ->overrideTemplates([
                'crud/new' => 'admin/artwork_new.html.twig'
            ])
        ;
    }
    public function configureFields(string $pageName): iterable
    {
        $image = ImageField::new('image', 'Image')
            ->setUploadDir('public/uploads/artworks')
            ->setBasePath('uploads/artworks');
        $language = TextField::new('language');
        $title = TextField::new('name', 'title');
        $series_name = TextField::new('series_name');
        $artist = TextField::new('artist');
        $year = NumberField::new('year');
        $inventory_id = TextField::new('inventory_id');
        $status = TextField::new('status');
        $availability = TextField::new('availability');
        $ownership = TextField::new('ownership');
        $tags = ArrayField::new('tags');
        $dimensions = ArrayField::new('dimensions');
        $variable_dimensions = BooleanField::new('variable_dimensions');
        $duration = ArrayField::new('duration');
        $weight = NumberField::new('weight');
        $edition = NumberField::new('edition');
        $unique_edition = BooleanField::new('unique_edition');
        $price = ArrayField::new('price');
        $no_price = BooleanField::new('no_price');
        $artist_amount = NumberField::new('artist_amount');
        $artist_amount_type = TextField::new('artist_amount_type');
        $description = TextEditorField::new('description');
        $type = TextField::new('type');
        $support = TextField::new('support');
        $material = TextField::new('material');
        $location = TextField::new('location');
        $sublocation = TextField::new('sublocation');
        $notes = TextField::new('notes');
        $documentation_notes = TextEditorField::new('documentation_notes');
        $pdf_notes = TextField::new('pdf_notes');

        if (Crud::PAGE_INDEX === $pageName) {
            return [
                $image,
                $title,
                $artist
            ];
        }

        return [
            FormField::addColumn(4),
            $language,
            $image,
            $title,
            $series_name,
            $year,
            $inventory_id,
            $status,
            $availability,
            $ownership,
            $tags,
            $dimensions,
            $variable_dimensions,
            $duration,
            $weight,
            $edition,
            $unique_edition,
            $price,
            $no_price,
            $artist_amount,
            $artist_amount_type,
            $description,
            $type,
            $support,
            $material,
            $location,
            $sublocation,
            $notes,
            $documentation_notes,
            $pdf_notes
        ];
    }
}

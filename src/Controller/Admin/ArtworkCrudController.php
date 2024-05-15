<?php

namespace App\Controller\Admin;

use App\Entity\Artwork;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Vich\UploaderBundle\VichUploaderBundle;

class ArtworkCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Artwork::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('image', 'Image')
                ->setUploadDir('public/uploads/artworks'),
//                ->setBasePath('public/uploads/artworks')
//                ->setUploadDir('public/uploads/artworks'),
            TextField::new('language'),

            TextField::new('name', 'title'),
            TextField::new('series_name'),
            TextField::new('artist'),
            NumberField::new('year'),
            TextField::new('inventory_id'),
            TextField::new('status'),
            TextField::new('availability'),
            TextField::new('ownership'),
            ArrayField::new('tags'),
            ArrayField::new('dimensions'),
            BooleanField::new('variable_dimensions'),
            ArrayField::new('duration'),
            NumberField::new('duration'),
            NumberField::new('weight'),
            NumberField::new('edition'),
            BooleanField::new('unique_edition'),
            ArrayField::new('price'),
            BooleanField::new('no_price'),
            NumberField::new('artist_amount'),
            TextField::new('artist_amount_type'),
            TextEditorField::new('description'),
            TextField::new('type'),
            TextField::new('support'),
            TextField::new('material'),
            TextField::new('location'),
            TextField::new('sublocation'),
            TextField::new('notes'),
            TextEditorField::new('documentation_notes'),
            TextField::new('pdf_notes')
        ];
    }
}

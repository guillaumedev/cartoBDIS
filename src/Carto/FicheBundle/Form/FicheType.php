<?php

namespace Carto\FicheBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FicheType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('sigle')
            ->add('adresse')
            ->add('codepostal')
            ->add('ville')
            ->add('departement')
            ->add('region')
            ->add('pays')
            ->add('latitude')
            ->add('longitude')
            ->add('telephone')
            ->add('fax')
            ->add('courriel')
            ->add('site')
            ->add('contacts')
            ->add('statutJuridique')
            ->add('structurePorteuse')
            ->add('anneeCreation')
            ->add('situation')
            ->add('siret')
            ->add('naf')
            ->add('joursOuverture')
            ->add('nombreSalaries')
            ->add('nombreEtp')
            ->add('nombreAssocies')
            ->add('nombreBenevoles')
            ->add('nombreAdherents')
            ->add('volontaires')
            ->add('slogan')
            ->add('objectifs')
            ->add('presentation')
            ->add('activites')
            ->add('charte')
            ->add('utiliteSociale')
            ->add('territoire')
            ->add('organismesUsagers')
            ->add('detailsUsagers')
            ->add('implicationUsagers')
            ->add('lieuVenteProduits')
            ->add('lieuVenteServices')
            ->add('reseaux')
            ->add('partenairesFinanciers')
            ->add('autresPartenaires')
            ->add('innovationsSocioeco')
            ->add('rolesEss')
            ->add('qualificatifsStructure')
            ->add('instances')
            ->add('compositionDirection')
            ->add('evalutationPartenaire')
            ->add('approvisionnement')
            ->add('garanties')
            ->add('plusvalueSociale')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Carto\FicheBundle\Entity\Fiche'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'carto_fichebundle_fiche';
    }
}

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
            ->add('nom', 'text', array('label' => 'Nom'))
            ->add('sigle', 'text', array('label' => 'Sigle'))
            ->add('adresse', 'text', array('label' => 'Adresse'))
            ->add('codepostal', 'text', array('label' => 'Code postal'))
            ->add('ville', 'text', array('label' => 'Ville'))
            ->add('departement', 'text', array('label' => 'Département'))
            ->add('region', 'choice', array(
                'label' => 'Région',
                'choices' => array(
                    'FR-A' => 'Alsace',
                    'FR-B' => 'Aquitaine',
                    'FR-C' => 'Auvergne',
                    'FR-P' => 'Basse-Normande',
                    'FR-D' => 'Bourgogne',
                    'FR-E' => 'Bretagne',
                    'FR-F' => 'Centre',
                    'FR-G' => 'Champagne-Ardenne',
                    'FR-H' => 'Corse',
                    'FR-I' => 'Franche-Comté',
                    'FR-Q' => 'Haute-Normandie',
                    'FR-J' => 'Ile de France',
                    'FR-K' => 'Languedoc-Roussillon',
                    'FR-L' => 'Limousin',
                    'FR-M' => 'Lorraine',
                    'FR-N' => 'Midi-Pyrénées',
                    'FR-O' => 'Nord Pas de Calais',
                    'FR-R'=> 'Pays de la Loire',
                    'FR-S' => 'Picardie',
                    'FR-T' => 'Poitou-Charente',
                    'FR-U' => 'Provence-Alpes-Côte-Azur',
                    'FR-V' => 'Rhône-Alpes',
                    'MQ' => 'Martinique')

                ))
            ->add('pays', 'text', array('label' => 'Pays'))
//            ->add('latitude', 'text', array('label' => 'Nom'))
//            ->add('longitude', 'text', array('label' => 'Nom'))
            ->add('telephone', 'text', array('label' => 'Téléphone'))
            ->add('fax', 'text', array('label' => 'Fax'))
            ->add('courriel', 'text', array('label' => 'Courriel'))
            ->add('site', 'text', array('label' => 'Site'))
            ->add('contacts', 'text', array('label' => 'Personne à contacter'))
            ->add('statutJuridique', 'choice', array(
                'label' => 'Statut juridique',
                'choices' => array(
                    'ASSO' => 'Association 1901',
                    'EURL' => 'EURL',
                    'GIE' => 'Groupement d\'intérêt économique',
                    'IND' => 'Indivision',
                    'INF' => 'Informel',
                    'SA' => 'Socité anonyme',
                    'SACOOP' => 'SA coopérative',
                    'SARL' => 'SARL',
                    'SARLCOOP' => 'SARL coopérative',
                    'SAS' => 'SAS',
                    'SCIC' => 'SCIC',
                    'SCOP' => 'Société coopérative de production',
                    'SCC' => 'Société civile coopérative',
                    'GFA' => 'Groupement foncier agricole',
                    'ZZ' => 'Autre',
                    'SYM' => 'Syndicat mixte',
                    'MUT' => 'Mutuelle',
                    'FON'=> 'Fondation')

            ))
            ->add('structurePorteuse', 'text', array('label' => 'Structure Porteuse','required' => false))
            ->add('anneeCreation', 'text', array('label' => 'Année de création'))
            ->add('situation', 'text', array('label' => 'Situation'))
            ->add('siret', 'text', array('label' => 'SIRET'))
            ->add('naf', 'text', array('label' => 'NAF'))
            ->add('joursOuverture', 'text', array('label' => 'Jour d\'ouverture'))
            ->add('nombreSalaries', 'text', array('label' => 'Nombre de salariés'))
            ->add('nombreEtp', 'text', array('label' => 'Equivalent Temp-Plein (ETP)'))
            ->add('nombreAssocies', 'text', array('label' => 'Nombre d\'associés/administrateur'))
            ->add('nombreBenevoles', 'text', array('label' => 'Nombre de bénévoles actifs'))
            ->add('nombreAdherents', 'text', array('label' => 'Nombre d\'adhérents/sociétaires'))
            ->add('volontaires', 'text', array('label' => 'Nom'))
            ->add('slogan', 'text', array('label' => 'Slogan'))
            ->add('objectifs', 'textarea', array('label' => 'Objectifs'))
            ->add('presentation', 'textarea', array('label' => 'Présentation libre de la structure'))
            ->add('activites', 'textarea', array('label' => 'Nom'))
            ->add('charte', 'textarea', array('label' => 'Charte référente'))
            ->add('utiliteSociale', 'textarea', array('label' => 'Utilité sociale'))
            ->add('territoire', 'text', array('label' => 'Territoire d\'intervention, lieux de distribution, usagers'))
            ->add('organismesUsagers', 'choice', array(
                'label' => 'Organisme usagers',
                'expanded' => 'true',
                'multiple' => 'true',
                'choices' => array(
                    'ENT' => 'Entreprise',
                    'COL' => 'Secteur publique',
                    'PAR' => 'Particuliers',
                    'ASSO' => 'Associations',
                    'ECO' => 'Ecoles',
                    'JEU' => 'Jeunesse')))
            ->add('detailsUsagers', 'textarea', array('label' => 'Détails sur les usagers'))
            ->add('implicationUsagers', 'textarea', array('label' => 'Implication des usagers'))
            ->add('lieuVenteProduits', 'choice', array(
                'label' => 'Lieux de vente des produits',
                'expanded' => 'true',
                'multiple' => 'true',
                'choices' => array(
                    'ENT' => 'Magasin',
                    'DOM' => 'A domicile',
                    'INT' => 'Internet',
                    'FRM' => 'A la ferme',
                    'MAR' => 'Marché',
                    'CAF' => 'Café',
                    'RES' => 'Restaurant',
                    'AUT' => 'Autres lieux de distribution groupée',
                    'SAL' => 'Salle de spectacle',
                    'ETR' => 'Etranger',
                    'LIB' => 'Librairie'
                    )))
            ->add('lieuVenteServices', 'choice', array(
                'label' => 'Lieux de vente des services',
                'expanded' => 'true',
                'multiple' => 'true',
                'choices' => array(
                    'DOM' => 'A domicile',
                    'INT' => 'Internet',
                    'SIT' => 'Sur site',
                    'BUR' => 'Bureau',
                    'ETR' => 'Etranger',
                    'NOM' => 'Nomade'
                )))
            ->add('reseaux', 'textarea', array('label' => 'Réseaux'))
            ->add('partenairesFinanciers', 'textarea', array('label' => 'Partenaires financiers'))
            ->add('autresPartenaires', 'textarea', array('label' => 'Autres partenaires'))
            ->add('innovationsSocioeco',  'choice', array(
                'label' => 'Innovation socio-économiques',
                'expanded' => 'true',
                'multiple' => 'true',
                'choices' => array(
                    'PRD' => 'Autoproduction',
                    'ECH' => 'Echanges non monétaires',
                    'SOL' => 'Monnaie solidaire',
                    'IAE' => 'Insertion par l\'activité économique',
                    'MUT' => 'Mutualisation de moyens et de compétences',
                    'CIRC' => 'Circuits courts',
                    'COE' => 'Commerce équitable',
                    'EDU' => 'Education populaire'
                )))
            ->add('rolesEss', 'choice', array(
                'label' => 'Rôle dans l\'ESS',
                'expanded' => 'true',
                'multiple' => 'true',
                'choices' => array(
                    'APP' => 'Structure d\'appuie',
                    'RES' => 'Centre de ressources',
                    'MER' => 'Mise en réseau',
                    'INF' => 'Informations et sensibilisation'
                )))
            ->add('qualificatifsStructure', 'choice', array(
                'label' => 'Dénomination',
                'expanded' => 'true',
                'multiple' => 'true',
                'choices' => array(
                    'ACI' => 'Atelier chantier d\'insertion',
                    'AMA' => 'AMAP',
                    'ASS' => 'Association intermédiaire',
                    'BGE' => 'Boutique de gestion',
                    'BIO' => 'Biocoop',
                    'CAE' => 'Coopérative d\'activité et d\'emploi',
                    'CAF' => 'Café associatif',
                    'CBE' => 'Comité de bassin d\'emploi',
                    'CCO' => 'Coopérative de consommateurs',
                    'CHR' => 'CHRS',
                    'CIG' => 'Cigales',
                    'COU' => 'Couveuse',
                    'CRC' => 'Crèche familiale ou associative',
                    'CRES' => 'Chambre régionale de l\'économie sociale',
                    'CSO' => 'Centre social',
                    'DLA' => 'Dispositif local d\'accompagnement',
                    'EIN' => 'Entreprise d\'insertion',
                    'EPSC' => 'Epicerie sociale',
                    'EPSL' => 'Epicerie solidaire',
                    'ERIC' => 'Espace régional Internet Citoyens',
                    'ETT' => 'Entreprise de travail temporaire d\'insertion',
                    'FJT' => 'Foyer de jeunes travailleurs',
                    'FRU' => 'Foyer rural',
                    'GEM' => 'Groupement d\'employeurs',
                    'JCG' => 'Jardin de Cocagne',
                    'JCL' => 'Jardin collectif',
                    'JCM' => 'Jardin communautaire',
                    'JFA' => 'Jardin familiaux',
                    'PEP' => 'Pépinières',
                    'PIL' => 'PILES',
                    'PVC' => 'Point de vente collectif',
                    'RERS' => 'Réseau d\'échanges réciproques de savoirs',
                    'RQU' => 'Régie de quartier',
                    'SEL' => 'Système d\'échanges locaux',
                    'SFI' => 'Société financiére',
                    'SOL' => 'SOL',
                    'GEIQ' => 'Groupement d\'employeurs pour l\'insertion et la qualification'
                )))
            ->add('instances', 'choice', array(
                'label' => 'Instances',
                'expanded' => 'true',
                'multiple' => 'true',
                'choices' => array(
                    'DEC01' => 'Conseil d\'Administration',
                    'DEC02' => 'Bureau',
                    'DEC03' => 'Conseil de direction',
                    'PAR01' => 'Comité de gestion',
                    'PAR02' => 'Comité d\'entreprise',
                    'PAR03' => 'Conseil de concertation',
                    'PAR04' => 'Comité de surveillance',
                    'PAR05' => 'Comité d\'éthique',
                    'PAR06' => 'Comité de suivi'
                )))
            ->add('compositionDirection', 'textarea', array('label' => 'Qui compose vos instances de directions (conseil
             d\'administration, comité de direction, bureau )'))
            ->add('evalutationPartenaire', 'textarea', array('label' => 'Vos partenaires sont-ils associés à
            l\'évaluation de votre structure ?'))
            ->add('approvisionnement', 'text', array('label' => 'Nom'))
            ->add('garanties', 'text', array('label' => 'Nom'))
            ->add('plusvalueSociale', 'text', array('label' => 'Nom'))
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

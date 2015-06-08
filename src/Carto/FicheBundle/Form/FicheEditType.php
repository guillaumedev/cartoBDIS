<?php

namespace Carto\FicheBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FicheEditType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text', array('label' => 'Nom'))
            ->add('sigle', 'text', array('label' => 'Sigle','required' => false))
            ->add('adresse', 'text', array('label' => 'Adresse','required' => false))
            ->add('codepostal', 'text', array('label' => 'Code postal','required' => false))
            ->add('ville', 'text', array('label' => 'Ville','required' => false))
            ->add('departement', 'text', array('label' => 'Département','required' => false))
            ->add('region', 'choice', array(
                'label' => 'Région',
                'required' => false,
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
            ->add('pays', 'text', array('label' => 'Pays','required' => false))
//            ->add('latitude', 'text', array('label' => 'Nom'))
//            ->add('longitude', 'text', array('label' => 'Nom'))
            ->add('telephone', 'text', array('label' => 'Téléphone','required' => false))
            ->add('fax', 'text', array('label' => 'Fax','required' => false))
            ->add('courriel', 'text', array('label' => 'Courriel','required' => false))
            ->add('site', 'text', array('label' => 'Site','required' => false))
            ->add('contacts', 'text', array('label' => 'Personne à contacter','required' => false))
            ->add('statutJuridique', 'choice', array(
                'label' => 'Statut juridique',
                'required' => false,
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
            ->add('structurePorteuse', 'text', array('label' => 'Structure Porteuse','required' => false,'required' => false))
            ->add('anneeCreation', 'text', array('label' => 'Année de création','required' => false))
            ->add('situation', 'text', array('label' => 'Situation','required' => false))
            ->add('siret', 'text', array('label' => 'SIRET','required' => false))
//            ->add('naf', 'text', array('label' => 'NAF'))
            ->add('joursOuverture', 'text', array('label' => 'Jour d\'ouverture','required' => false))
            ->add('nombreSalaries', 'text', array('label' => 'Nombre de salariés','required' => false))
            ->add('nombreEtp', 'text', array('label' => 'Equivalent Temp-Plein (ETP)','required' => false))
            ->add('nombreAssocies', 'text', array('label' => 'Nombre d\'associés/administrateur','required' => false))
            ->add('nombreBenevoles', 'text', array('label' => 'Nombre de bénévoles actifs','required' => false))
            ->add('nombreAdherents', 'text', array('label' => 'Nombre d\'adhérents/sociétaires','required' => false))
            ->add('volontaires', 'text', array('label' => 'Nom','required' => false))
            ->add('slogan', 'text', array('label' => 'Slogan','required' => false))
            ->add('objectifs', 'textarea', array('label' => 'Objectifs','required' => false))
            ->add('presentation', 'textarea', array('label' => 'Présentation libre de la structure','required' => false))
            ->add('activites', 'textarea', array('label' => 'Nom','required' => false))
            ->add('charte', 'textarea', array('label' => 'Charte référente','required' => false))
            ->add('utiliteSociale', 'textarea', array('label' => 'Utilité sociale','required' => false))
            ->add('territoire', 'text', array('label' => 'Territoire d\'intervention, lieux de distribution, usagers','required' => false))
            ->add('organismesUsagers', 'choice', array(
                'label' => 'Organisme usagers',
                'required' => false,
                'expanded' => 'true',
                'multiple' => 'true',
                'choices' => array(
                    'ENT' => 'Entreprise',
                    'COL' => 'Secteur publique',
                    'PAR' => 'Particuliers',
                    'ASSO' => 'Associations',
                    'ECO' => 'Ecoles',
                    'JEU' => 'Jeunesse')
            ))
            ->add('detailsUsagers', 'textarea', array('label' => 'Détails sur les usagers','required' => false))
            ->add('implicationUsagers', 'textarea', array('label' => 'Implication des usagers','required' => false))
            ->add('lieuVenteProduit', 'choice', array(
                'label' => 'Lieux de vente des produits',
                'required' => false,
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
//            ->add('lieuVenteServices', 'choice', array(
//                'label' => 'Lieux de vente des services',
//                'expanded' => 'true',
//                'multiple' => 'true',
//                'choices' => array(
//                    'DOM' => 'A domicile',
//                    'INT' => 'Internet',
//                    'SIT' => 'Sur site',
//                    'BUR' => 'Bureau',
//                    'ETR' => 'Etranger',
//                    'NOM' => 'Nomade'
//                )))
            ->add('reseaux', 'textarea', array('label' => 'Réseaux','required' => false))
            ->add('partenairesFinanciers', 'textarea', array('label' => 'Partenaires financiers','required' => false))
            ->add('autresPartenaires', 'textarea', array('label' => 'Autres partenaires','required' => false))
//            ->add('innovationsSocioeco',  'choice', array(
//                'label' => 'Innovation socio-économiques',
//                'expanded' => 'true',
//                'multiple' => 'true',
//                'choices' => array(
//                    'PRD' => 'Autoproduction',
//                    'ECH' => 'Echanges non monétaires',
//                    'SOL' => 'Monnaie solidaire',
//                    'IAE' => 'Insertion par l\'activité économique',
//                    'MUT' => 'Mutualisation de moyens et de compétences',
//                    'CIRC' => 'Circuits courts',
//                    'COE' => 'Commerce équitable',
//                    'EDU' => 'Education populaire'
//                )))
//            ->add('rolesEss', 'choice', array(
//                'label' => 'Rôle dans l\'ESS',
//                'expanded' => 'true',
//                'multiple' => 'true',
//                'choices' => array(
//                    'APP' => 'Structure d\'appuie',
//                    'RES' => 'Centre de ressources',
//                    'MER' => 'Mise en réseau',
//                    'INF' => 'Informations et sensibilisation'
//                )))
            ->add('qualificatifsStructure', 'choice', array(
                'label' => 'Dénomination',
                'required' => false,
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
//            ->add('instances', 'choice', array(
//                'label' => 'Instances',
//                'expanded' => 'true',
//                'multiple' => 'true',
//                'choices' => array(
//                    'DEC01' => 'Conseil d\'Administration',
//                    'DEC02' => 'Bureau',
//                    'DEC03' => 'Conseil de direction',
//                    'PAR01' => 'Comité de gestion',
//                    'PAR02' => 'Comité d\'entreprise',
//                    'PAR03' => 'Conseil de concertation',
//                    'PAR04' => 'Comité de surveillance',
//                    'PAR05' => 'Comité d\'éthique',
//                    'PAR06' => 'Comité de suivi'
//                )))
//            ->add('compositionDirection', 'textarea', array('label' => 'Qui compose vos instances de directions (conseil
//             d\'administration, comité de direction, bureau )'))
//            ->add('evalutationPartenaire', 'textarea', array('label' => 'Vos partenaires sont-ils associés à
//            l\'évaluation de votre structure ?'))
            ->add('approvisionnement', 'text', array('label' => 'Nom','required' => false))
            ->add('garanties', 'text', array('label' => 'Nom','required' => false))
            ->add('plusvalueSociale', 'text', array('label' => 'Nom','required' => false))
            ->add('categorie', 'entity', array(
                'class' => 'Carto\FicheBundle\Entity\Categorie',
                'property' => 'libelle',
                'expanded' => 'true',
                'multiple' => 'true',
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->orderBy('c.libelle', 'ASC');
                },
                "label"=> "Categorie"
            ))
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

<?php

namespace Carto\FicheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fiche
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Carto\FicheBundle\Entity\FicheRepository")
 */
class Fiche
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    public $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="sigle", type="string", length=50, nullable=true)
     */
    public $sigle;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    public $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="codepostal", type="integer", nullable=true)
     */
    public $codepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    public $ville;

    /**
     * @var integer
     *
     * @ORM\Column(name="departement", type="integer", nullable=true)
     */
    public $departement;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=255, nullable=true)
     */
    public $region;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=20, nullable=true)
     */
    public $pays;
    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float", nullable=true)
     */
    public $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float", nullable=true)
     */
    public $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=100, nullable=true)
     */
    public $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=100, nullable=true)
     */
    public $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="courriel", type="string", length=255, nullable=true)
     */
    public $courriel;

    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=255, nullable=true)
     */
    public $site;

    /**
     * @var string
     *
     * @ORM\Column(name="contacts", type="text", nullable=true)
     */
    public $contacts;

    /**
     * @var string
     *
     * @ORM\Column(name="statut_juridique", type="string", length=255, nullable=true)
     */
    public $statutJuridique;

    /**
     * @var string
     *
     * @ORM\Column(name="structure_porteuse", type="text", nullable=true)
     */
    public $structurePorteuse;

    /**
     * @var integer
     *
     * @ORM\Column(name="annee_creation", type="integer", nullable=true)
     */
    public $anneeCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="situation", type="string", length=255, nullable=true)
     */
    public $situation;

    /**
     * @var string
     *
     * @ORM\Column(name="siret", type="string", length=255, nullable=true)
     */
    public $siret;

    /**
     * @var string
     *
     * @ORM\Column(name="jours_ouverture", type="text", nullable=true)
     */
    public $joursOuverture;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_salaries", type="integer", nullable=true)
     */
    public $nombreSalaries;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_etp", type="integer", nullable=true)
     */
    public $nombreEtp;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_associes", type="string", length=255, nullable=true)
     */
    public $nombreAssocies;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_benevoles", type="integer", nullable=true)
     */
    public $nombreBenevoles;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_adherents", type="integer", nullable=true)
     */
    public $nombreAdherents;

    /**
     * @var string
     *
     * @ORM\Column(name="volontaires", type="string", length=255, nullable=true)
     */
    public $volontaires;

    /**
     * @var string
     *
     * @ORM\Column(name="slogan", type="string", length=255, nullable=true)
     */
    public $slogan;

    /**
     * @var string
     *
     * @ORM\Column(name="objectifs", type="text", nullable=true)
     */
    public $objectifs;

    /**
     * @var string
     *
     * @ORM\Column(name="presentation", type="text", nullable=true)
     */
    public $presentation;

    /**
     * @var string
     *
     * @ORM\Column(name="activites", type="text", nullable=true)
     */
    public $activites;

    /**
     * @var string
     *
     * @ORM\Column(name="utilite_sociale", type="text", nullable=true)
     */
    public $utiliteSociale;

    /**
     * @var string
     *
     * @ORM\Column(name="charte", type="text", nullable=true)
     */
    public $charte;

    /**
     * @var string
     *
     * @ORM\Column(name="territoire", type="string", length=255, nullable=true)
     */
    public $territoire;

    /**
     * @var string
     *
     * @ORM\Column(name="organismes_usagers", type="text", nullable=true)
     */
    public $organismesUsagers;

    /**
     * @var string
     *
     * @ORM\Column(name="details_usagers", type="text", nullable=true)
     */
    public $detailsUsagers;

    /**
     * @var string
     *
     * @ORM\Column(name="implication_usagers", type="text", nullable=true)
     */
    public $implicationUsagers;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_vente_produits", type="text", nullable=true)
     */
    public $lieuVenteProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="reseaux", type="text", nullable=true)
     */
    public $reseaux;

    /**
     * @var string
     *
     * @ORM\Column(name="partenaires_financiers", type="text", nullable=true)
     */
    public $partenairesFinanciers;

    /**
     * @var string
     *
     * @ORM\Column(name="autres_partenaires", type="text", nullable=true)
     */
    public $autresPartenaires;

    /**
     * @var string
     *
     * @ORM\Column(name="filiere_economique_1", type="text", nullable=true)
     */
    public $filiereEconomique1;

    /**
     * @var string
     *
     * @ORM\Column(name="sousfilieres_classiques_1", type="text", nullable=true)
     */
    public $sousfilieresClassiques1;

    /**
     * @var string
     *
     * @ORM\Column(name="sousfilieres_ess_1", type="text", nullable=true)
     */
    public $sousfilieresEss1;

    /**
     * @var string
     *
     * @ORM\Column(name="filiere_economique_2", type="text", nullable=true)
     */
    public $filiereEconomique2;

    /**
     * @var string
     *
     * @ORM\Column(name="sousfilieres_classiques_2", type="text", nullable=true)
     */
    public $sousfilieresClassiques2;

    /**
     * @var string
     *
     * @ORM\Column(name="sousfilieres_ess_2", type="text", nullable=true)
     */
    public $sousfilieresEss2;

    /**
     * @var string
     *
     * @ORM\Column(name="filiere_economique_3", type="text", nullable=true)
     */
    public $filiereEconomique3;

    /**
     * @var string
     *
     * @ORM\Column(name="sousfilieres_classiques_3", type="text", nullable=true)
     */
    public $sousfilieresClassiques3;

    /**
     * @var string
     *
     * @ORM\Column(name="sousfilieres_ess_3", type="text", nullable=true)
     */
    public $sousfilieresEss3;

    /**
     * @var string
     *
     * @ORM\Column(name="qualificatifs_structure", type="string", length=255, nullable=true)
     */
    public $qualificatifsStructure;

    /**
     * @var integer
     *
     * @ORM\Column(name="anneere_ference", type="integer", nullable=true)
     */
    public $anneereFerence;

    /**
     * @var string
     *
     * @ORM\Column(name="propriete_budget", type="string", length=255, nullable=true)
     */
    public $proprieteBudget;

    /**
     * @var string
     *
     * @ORM\Column(name="propriete_chiffreaffaires", type="string", length=255, nullable=true)
     */
    public $proprieteChiffreaffaires;

    /**
     * @var string
     *
     * @ORM\Column(name="propriete_valorisationbenevolat", type="string", length=255, nullable=true)
     */
    public $proprieteValorisationbenevolat;

    /**
     * @var string
     *
     * @ORM\Column(name="prestations_precises", type="text", nullable=true)
     */
    public $prestationsPrecises;

    /**
     * @var string
     *
     * @ORM\Column(name="approvisionnement", type="text", nullable=true)
     */
    public $approvisionnement;

    /**
     * @var string
     *
     * @ORM\Column(name="garanties", type="text", nullable=true)
     */
    public $garanties;

    /**
     * @var string
     *
     * @ORM\Column(name="plusvalue_sociale", type="text", nullable=true)
     */
    public $plusvalueSociale;

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean")
     */
    public $published=false;

    /**
     * @ORM\ManyToMany(targetEntity="Carto\FicheBundle\Entity\Categorie", cascade={"persist"})
     * @ORM\JoinColumn(name="categorie_id", referencedColumnName="id")
     */
    protected $categorie;

//    /**
//     * @ORM\OneToOne(targetEntity="Carto\UserBundle\Entity\User")
//     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
//     */
//    protected $user;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Fiche
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set sigle
     *
     * @param string $sigle
     * @return Fiche
     */
    public function setSigle($sigle)
    {
        $this->sigle = $sigle;
    
        return $this;
    }

    /**
     * Get sigle
     *
     * @return string 
     */
    public function getSigle()
    {
        return $this->sigle;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Fiche
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codepostal
     *
     * @param integer $codepostal
     * @return Fiche
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;
    
        return $this;
    }

    /**
     * Get codepostal
     *
     * @return integer 
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Fiche
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    
        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set departement
     *
     * @param integer $departement
     * @return Fiche
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;
    
        return $this;
    }

    /**
     * Get departement
     *
     * @return integer 
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return Fiche
     */
    public function setRegion($region)
    {
        $this->region = $region;
    
        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return Fiche
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    
        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return Fiche
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    
        return $this;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return Fiche
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    
        return $this;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Fiche
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    
        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Fiche
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    
        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set courriel
     *
     * @param string $courriel
     * @return Fiche
     */
    public function setCourriel($courriel)
    {
        $this->courriel = $courriel;
    
        return $this;
    }

    /**
     * Get courriel
     *
     * @return string 
     */
    public function getCourriel()
    {
        return $this->courriel;
    }

    /**
     * Set site
     *
     * @param string $site
     * @return Fiche
     */
    public function setSite($site)
    {
        $this->site = $site;
    
        return $this;
    }

    /**
     * Get site
     *
     * @return string 
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set contacts
     *
     * @param string $contacts
     * @return Fiche
     */
    public function setContacts($contacts)
    {
        $this->contacts = $contacts;
    
        return $this;
    }

    /**
     * Get contacts
     *
     * @return string 
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Set statutJuridique
     *
     * @param string $statutJuridique
     * @return Fiche
     */
    public function setStatutJuridique($statutJuridique)
    {
        $this->statutJuridique = $statutJuridique;
    
        return $this;
    }

    /**
     * Get statutJuridique
     *
     * @return string 
     */
    public function getStatutJuridique()
    {
        return $this->statutJuridique;
    }

    /**
     * Set structurePorteuse
     *
     * @param string $structurePorteuse
     * @return Fiche
     */
    public function setStructurePorteuse($structurePorteuse)
    {
        $this->structurePorteuse = $structurePorteuse;
    
        return $this;
    }

    /**
     * Get structurePorteuse
     *
     * @return string 
     */
    public function getStructurePorteuse()
    {
        return $this->structurePorteuse;
    }

    /**
     * Set anneeCreation
     *
     * @param integer $anneeCreation
     * @return Fiche
     */
    public function setAnneeCreation($anneeCreation)
    {
        $this->anneeCreation = $anneeCreation;
    
        return $this;
    }

    /**
     * Get anneeCreation
     *
     * @return integer 
     */
    public function getAnneeCreation()
    {
        return $this->anneeCreation;
    }

    /**
     * Set situation
     *
     * @param string $situation
     * @return Fiche
     */
    public function setSituation($situation)
    {
        $this->situation = $situation;
    
        return $this;
    }

    /**
     * Get situation
     *
     * @return string 
     */
    public function getSituation()
    {
        return $this->situation;
    }

    /**
     * Set siret
     *
     * @param string $siret
     * @return Fiche
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;
    
        return $this;
    }

    /**
     * Get siret
     *
     * @return string 
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * Set joursOuverture
     *
     * @param string $joursOuverture
     * @return Fiche
     */
    public function setJoursOuverture($joursOuverture)
    {
        $this->joursOuverture = $joursOuverture;
    
        return $this;
    }

    /**
     * Get joursOuverture
     *
     * @return string 
     */
    public function getJoursOuverture()
    {
        return $this->joursOuverture;
    }

    /**
     * Set nombreSalaries
     *
     * @param integer $nombreSalaries
     * @return Fiche
     */
    public function setNombreSalaries($nombreSalaries)
    {
        $this->nombreSalaries = $nombreSalaries;
    
        return $this;
    }

    /**
     * Get nombreSalaries
     *
     * @return integer 
     */
    public function getNombreSalaries()
    {
        return $this->nombreSalaries;
    }

    /**
     * Set nombreEtp
     *
     * @param integer $nombreEtp
     * @return Fiche
     */
    public function setNombreEtp($nombreEtp)
    {
        $this->nombreEtp = $nombreEtp;
    
        return $this;
    }

    /**
     * Get nombreEtp
     *
     * @return integer 
     */
    public function getNombreEtp()
    {
        return $this->nombreEtp;
    }

    /**
     * Set nombreAssocies
     *
     * @param string $nombreAssocies
     * @return Fiche
     */
    public function setNombreAssocies($nombreAssocies)
    {
        $this->nombreAssocies = $nombreAssocies;
    
        return $this;
    }

    /**
     * Get nombreAssocies
     *
     * @return string 
     */
    public function getNombreAssocies()
    {
        return $this->nombreAssocies;
    }

    /**
     * Set nombreBenevoles
     *
     * @param integer $nombreBenevoles
     * @return Fiche
     */
    public function setNombreBenevoles($nombreBenevoles)
    {
        $this->nombreBenevoles = $nombreBenevoles;
    
        return $this;
    }

    /**
     * Get nombreBenevoles
     *
     * @return integer 
     */
    public function getNombreBenevoles()
    {
        return $this->nombreBenevoles;
    }

    /**
     * Set nombreAdherents
     *
     * @param integer $nombreAdherents
     * @return Fiche
     */
    public function setNombreAdherents($nombreAdherents)
    {
        $this->nombreAdherents = $nombreAdherents;
    
        return $this;
    }

    /**
     * Get nombreAdherents
     *
     * @return integer 
     */
    public function getNombreAdherents()
    {
        return $this->nombreAdherents;
    }

    /**
     * Set volontaires
     *
     * @param string $volontaires
     * @return Fiche
     */
    public function setVolontaires($volontaires)
    {
        $this->volontaires = $volontaires;
    
        return $this;
    }

    /**
     * Get volontaires
     *
     * @return string 
     */
    public function getVolontaires()
    {
        return $this->volontaires;
    }

    /**
     * Set slogan
     *
     * @param string $slogan
     * @return Fiche
     */
    public function setSlogan($slogan)
    {
        $this->slogan = $slogan;
    
        return $this;
    }

    /**
     * Get slogan
     *
     * @return string 
     */
    public function getSlogan()
    {
        return $this->slogan;
    }

    /**
     * Set objectifs
     *
     * @param string $objectifs
     * @return Fiche
     */
    public function setObjectifs($objectifs)
    {
        $this->objectifs = $objectifs;
    
        return $this;
    }

    /**
     * Get objectifs
     *
     * @return string 
     */
    public function getObjectifs()
    {
        return $this->objectifs;
    }

    /**
     * Set presentation
     *
     * @param string $presentation
     * @return Fiche
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;
    
        return $this;
    }

    /**
     * Get presentation
     *
     * @return string 
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Set activites
     *
     * @param string $activites
     * @return Fiche
     */
    public function setActivites($activites)
    {
        $this->activites = $activites;
    
        return $this;
    }

    /**
     * Get activites
     *
     * @return string 
     */
    public function getActivites()
    {
        return $this->activites;
    }

    /**
     * Set utiliteSociale
     *
     * @param string $utiliteSociale
     * @return Fiche
     */
    public function setUtiliteSociale($utiliteSociale)
    {
        $this->utiliteSociale = $utiliteSociale;
    
        return $this;
    }

    /**
     * Get utiliteSociale
     *
     * @return string 
     */
    public function getUtiliteSociale()
    {
        return $this->utiliteSociale;
    }

    /**
     * Set charte
     *
     * @param string $charte
     * @return Fiche
     */
    public function setCharte($charte)
    {
        $this->charte = $charte;
    
        return $this;
    }

    /**
     * Get charte
     *
     * @return string 
     */
    public function getCharte()
    {
        return $this->charte;
    }

    /**
     * Set territoire
     *
     * @param string $territoire
     * @return Fiche
     */
    public function setTerritoire($territoire)
    {
        $this->territoire = $territoire;
    
        return $this;
    }

    /**
     * Get territoire
     *
     * @return string 
     */
    public function getTerritoire()
    {
        return $this->territoire;
    }

    /**
     * Set organismesUsagers
     *
     * @param string $organismesUsagers
     * @return Fiche
     */
    public function setOrganismesUsagers($organismesUsagers)
    {
        $this->organismesUsagers = $organismesUsagers;
    
        return $this;
    }

    /**
     * Get organismesUsagers
     *
     * @return string 
     */
    public function getOrganismesUsagers()
    {
        return $this->organismesUsagers;
    }

    /**
     * Set detailsUsagers
     *
     * @param string $detailsUsagers
     * @return Fiche
     */
    public function setDetailsUsagers($detailsUsagers)
    {
        $this->detailsUsagers = $detailsUsagers;
    
        return $this;
    }

    /**
     * Get detailsUsagers
     *
     * @return string 
     */
    public function getDetailsUsagers()
    {
        return $this->detailsUsagers;
    }

    /**
     * Set implicationUsagers
     *
     * @param string $implicationUsagers
     * @return Fiche
     */
    public function setImplicationUsagers($implicationUsagers)
    {
        $this->implicationUsagers = $implicationUsagers;
    
        return $this;
    }

    /**
     * Get implicationUsagers
     *
     * @return string 
     */
    public function getImplicationUsagers()
    {
        return $this->implicationUsagers;
    }

    /**
     * Set lieuVenteProduit
     *
     * @param string $lieuVenteProduit
     * @return Fiche
     */
    public function setLieuVenteProduit($lieuVenteProduit)
    {
        $this->lieuVenteProduit = $lieuVenteProduit;
    
        return $this;
    }

    /**
     * Get lieuVenteProduit
     *
     * @return string 
     */
    public function getLieuVenteProduit()
    {
        return $this->lieuVenteProduit;
    }

    /**
     * Set reseaux
     *
     * @param string $reseaux
     * @return Fiche
     */
    public function setReseaux($reseaux)
    {
        $this->reseaux = $reseaux;
    
        return $this;
    }

    /**
     * Get reseaux
     *
     * @return string 
     */
    public function getReseaux()
    {
        return $this->reseaux;
    }

    /**
     * Set partenairesFinanciers
     *
     * @param string $partenairesFinanciers
     * @return Fiche
     */
    public function setPartenairesFinanciers($partenairesFinanciers)
    {
        $this->partenairesFinanciers = $partenairesFinanciers;
    
        return $this;
    }

    /**
     * Get partenairesFinanciers
     *
     * @return string 
     */
    public function getPartenairesFinanciers()
    {
        return $this->partenairesFinanciers;
    }

    /**
     * Set autresPartenaires
     *
     * @param string $autresPartenaires
     * @return Fiche
     */
    public function setAutresPartenaires($autresPartenaires)
    {
        $this->autresPartenaires = $autresPartenaires;
    
        return $this;
    }

    /**
     * Get autresPartenaires
     *
     * @return string 
     */
    public function getAutresPartenaires()
    {
        return $this->autresPartenaires;
    }

    /**
     * Set filiereEconomique1
     *
     * @param string $filiereEconomique1
     * @return Fiche
     */
    public function setFiliereEconomique1($filiereEconomique1)
    {
        $this->filiereEconomique1 = $filiereEconomique1;
    
        return $this;
    }

    /**
     * Get filiereEconomique1
     *
     * @return string 
     */
    public function getFiliereEconomique1()
    {
        return $this->filiereEconomique1;
    }

    /**
     * Set sousfilieresClassiques1
     *
     * @param string $sousfilieresClassiques1
     * @return Fiche
     */
    public function setSousfilieresClassiques1($sousfilieresClassiques1)
    {
        $this->sousfilieresClassiques1 = $sousfilieresClassiques1;
    
        return $this;
    }

    /**
     * Get sousfilieresClassiques1
     *
     * @return string 
     */
    public function getSousfilieresClassiques1()
    {
        return $this->sousfilieresClassiques1;
    }

    /**
     * Set sousfilieresEss1
     *
     * @param string $sousfilieresEss1
     * @return Fiche
     */
    public function setSousfilieresEss1($sousfilieresEss1)
    {
        $this->sousfilieresEss1 = $sousfilieresEss1;
    
        return $this;
    }

    /**
     * Get sousfilieresEss1
     *
     * @return string 
     */
    public function getSousfilieresEss1()
    {
        return $this->sousfilieresEss1;
    }

    /**
     * Set filiereEconomique2
     *
     * @param string $filiereEconomique2
     * @return Fiche
     */
    public function setFiliereEconomique2($filiereEconomique2)
    {
        $this->filiereEconomique2 = $filiereEconomique2;
    
        return $this;
    }

    /**
     * Get filiereEconomique2
     *
     * @return string 
     */
    public function getFiliereEconomique2()
    {
        return $this->filiereEconomique2;
    }

    /**
     * Set sousfilieresClassiques2
     *
     * @param string $sousfilieresClassiques2
     * @return Fiche
     */
    public function setSousfilieresClassiques2($sousfilieresClassiques2)
    {
        $this->sousfilieresClassiques2 = $sousfilieresClassiques2;
    
        return $this;
    }

    /**
     * Get sousfilieresClassiques2
     *
     * @return string 
     */
    public function getSousfilieresClassiques2()
    {
        return $this->sousfilieresClassiques2;
    }

    /**
     * Set sousfilieresEss2
     *
     * @param string $sousfilieresEss2
     * @return Fiche
     */
    public function setSousfilieresEss2($sousfilieresEss2)
    {
        $this->sousfilieresEss2 = $sousfilieresEss2;
    
        return $this;
    }

    /**
     * Get sousfilieresEss2
     *
     * @return string 
     */
    public function getSousfilieresEss2()
    {
        return $this->sousfilieresEss2;
    }

    /**
     * Set filiereEconomique3
     *
     * @param string $filiereEconomique3
     * @return Fiche
     */
    public function setFiliereEconomique3($filiereEconomique3)
    {
        $this->filiereEconomique3 = $filiereEconomique3;
    
        return $this;
    }

    /**
     * Get filiereEconomique3
     *
     * @return string 
     */
    public function getFiliereEconomique3()
    {
        return $this->filiereEconomique3;
    }

    /**
     * Set sousfilieresClassiques3
     *
     * @param string $sousfilieresClassiques3
     * @return Fiche
     */
    public function setSousfilieresClassiques3($sousfilieresClassiques3)
    {
        $this->sousfilieresClassiques3 = $sousfilieresClassiques3;
    
        return $this;
    }

    /**
     * Get sousfilieresClassiques3
     *
     * @return string
     */
    public function getSousfilieresClassiques3()
    {
        return $this->sousfilieresClassiques3;
    }

    /**
     * Set sousfilieresEss3
     *
     * @param string $sousfilieresEss3
     * @return Fiche
     */
    public function setSousfilieresEss3($sousfilieresEss3)
    {
        $this->sousfilieresEss3 = $sousfilieresEss3;
    
        return $this;
    }

    /**
     * Get sousfilieresEss3
     *
     * @return string
     */
    public function getSousfilieresEss3()
    {
        return $this->sousfilieresEss3;
    }

    /**
     * Set qualificatifsStructure
     *
     * @param string $qualificatifsStructure
     * @return Fiche
     */
    public function setQualificatifsStructure($qualificatifsStructure)
    {
        $this->qualificatifsStructure = $qualificatifsStructure;
    
        return $this;
    }

    /**
     * Get qualificatifsStructure
     *
     * @return string
     */
    public function getQualificatifsStructure()
    {
        return $this->qualificatifsStructure;
    }

    /**
     * Set anneereFerence
     *
     * @param integer $anneereFerence
     * @return Fiche
     */
    public function setAnneereFerence($anneereFerence)
    {
        $this->anneereFerence = $anneereFerence;
    
        return $this;
    }

    /**
     * Get anneereFerence
     *
     * @return integer
     */
    public function getAnneereFerence()
    {
        return $this->anneereFerence;
    }

    /**
     * Set proprieteBudget
     *
     * @param string $proprieteBudget
     * @return Fiche
     */
    public function setProprieteBudget($proprieteBudget)
    {
        $this->proprieteBudget = $proprieteBudget;
    
        return $this;
    }

    /**
     * Get proprieteBudget
     *
     * @return string
     */
    public function getProprieteBudget()
    {
        return $this->proprieteBudget;
    }

    /**
     * Set proprieteChiffreaffaires
     *
     * @param string $proprieteChiffreaffaires
     * @return Fiche
     */
    public function setProprieteChiffreaffaires($proprieteChiffreaffaires)
    {
        $this->proprieteChiffreaffaires = $proprieteChiffreaffaires;
    
        return $this;
    }

    /**
     * Get proprieteChiffreaffaires
     *
     * @return string
     */
    public function getProprieteChiffreaffaires()
    {
        return $this->proprieteChiffreaffaires;
    }

    /**
     * Set proprieteValorisationbenevolat
     *
     * @param string $proprieteValorisationbenevolat
     * @return Fiche
     */
    public function setProprieteValorisationbenevolat($proprieteValorisationbenevolat)
    {
        $this->proprieteValorisationbenevolat = $proprieteValorisationbenevolat;
    
        return $this;
    }

    /**
     * Get proprieteValorisationbenevolat
     *
     * @return string
     */
    public function getProprieteValorisationbenevolat()
    {
        return $this->proprieteValorisationbenevolat;
    }

    /**
     * Set prestationsPrecises
     *
     * @param string $prestationsPrecises
     * @return Fiche
     */
    public function setPrestationsPrecises($prestationsPrecises)
    {
        $this->prestationsPrecises = $prestationsPrecises;
    
        return $this;
    }

    /**
     * Get prestationsPrecises
     *
     * @return string
     */
    public function getPrestationsPrecises()
    {
        return $this->prestationsPrecises;
    }

    /**
     * Set approvisionnement
     *
     * @param string $approvisionnement
     * @return Fiche
     */
    public function setApprovisionnement($approvisionnement)
    {
        $this->approvisionnement = $approvisionnement;
    
        return $this;
    }

    /**
     * Get approvisionnement
     *
     * @return string
     */
    public function getApprovisionnement()
    {
        return $this->approvisionnement;
    }

    /**
     * Set garanties
     *
     * @param string $garanties
     * @return Fiche
     */
    public function setGaranties($garanties)
    {
        $this->garanties = $garanties;
    
        return $this;
    }

    /**
     * Get garanties
     *
     * @return string
     */
    public function getGaranties()
    {
        return $this->garanties;
    }

    /**
     * Set plusvalueSociale
     *
     * @param string $plusvalueSociale
     * @return Fiche
     */
    public function setPlusvalueSociale($plusvalueSociale)
    {
        $this->plusvalueSociale = $plusvalueSociale;
    
        return $this;
    }

    /**
     * Get plusvalueSociale
     *
     * @return string 
     */
    public function getPlusvalueSociale()
    {
        return $this->plusvalueSociale;
    }

    /**
     * Set published
     *
     * @param string $nom
     * @return Fiche
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return string
     */
    public function getPublished()
    {
        return $this->published;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categorie = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add categorie
     *
     * @param \Carto\FicheBundle\Entity\Categorie $categorie
     * @return Fiche
     */
    public function addCategorie(\Carto\FicheBundle\Entity\Categorie $categorie)
    {
        $this->categorie[] = $categorie;

        return $this;
    }

    /**
     * Remove categorie
     *
     * @param \Carto\FicheBundle\Entity\Categorie $categorie
     */
    public function removeCategorie(\Carto\FicheBundle\Entity\Categorie $categorie)
    {
        $this->categorie->removeElement($categorie);
    }

    /**
     * Get categorie
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

//    /**
//     * Set user
//     *
//     * @param \Carto\UserBundle\Entity\User $user
//     * @return Fiche
//     */
//    public function setUser(\Carto\UserBundle\Entity\User $user = null)
//    {
//        $this->user = $user;
//
//        return $this;
//    }
//
//    /**
//     * Get user
//     *
//     * @return \Carto\UserBundle\Entity\User
//     */
//    public function getUser()
//    {
//        return $this->user;
//    }
}

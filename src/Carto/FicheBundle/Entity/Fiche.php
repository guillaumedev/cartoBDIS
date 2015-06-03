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
     * @ORM\Column(name="sigle", type="string", length=100)
     */
    public $sigle;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    public $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="codepostal", type="integer")
     */
    public $codepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=100)
     */
    public $ville;

    /**
     * @var integer
     *
     * @ORM\Column(name="departement", type="integer")
     */
    public $departement;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=100)
     */
    public $region;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=20)
     */
    public $pays;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float")
     */
    public $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float")
     */
    public $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=100)
     */
    public $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=100)
     */
    public $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="courriel", type="string", length=255)
     */
    public $courriel;

    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=255)
     */
    public $site;

    /**
     * @var string
     *
     * @ORM\Column(name="contacts", type="string", length=255)
     */
    public $contacts;

    /**
     * @var string
     *
     * @ORM\Column(name="statut_juridique", type="string", length=255)
     */
    public $statutJuridique;

    /**
     * @var string
     *
     * @ORM\Column(name="structure_porteuse", type="string", length=255)
     */
    public $structurePorteuse;

    /**
     * @var integer
     *
     * @ORM\Column(name="annee_creation", type="integer")
     */
    public $anneeCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="situation", type="string", length=100)
     */
    public $situation;

    /**
     * @var string
     *
     * @ORM\Column(name="siret", type="string", length=255)
     */
    public $siret;

    /**
     * @var string
     *
     * @ORM\Column(name="naf", type="string", length=255)
     */
    public $naf;

    /**
     * @var string
     *
     * @ORM\Column(name="jours_ouverture", type="text")
     */
    public $joursOuverture;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_salaries", type="integer")
     */
    public $nombreSalaries;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_etp", type="integer")
     */
    public $nombreEtp;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_associes", type="integer")
     */
    public $nombreAssocies;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_benevoles", type="integer")
     */
    public $nombreBenevoles;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_adherents", type="integer")
     */
    public $nombreAdherents;

    /**
     * @var string
     *
     * @ORM\Column(name="volontaires", type="string", length=255)
     */
    public $volontaires;

    /**
     * @var string
     *
     * @ORM\Column(name="slogan", type="string", length=255)
     */
    public $slogan;

    /**
     * @var string
     *
     * @ORM\Column(name="objectifs", type="text")
     */
    public $objectifs;

    /**
     * @var string
     *
     * @ORM\Column(name="presentation", type="text")
     */
    public $presentation;

    /**
     * @var string
     *
     * @ORM\Column(name="activites", type="text")
     */
    public $activites;

    /**
     * @var string
     *
     * @ORM\Column(name="charte", type="text")
     */
    public $charte;

    /**
     * @var string
     *
     * @ORM\Column(name="utilite_sociale", type="text")
     */
    public $utiliteSociale;

    /**
     * @var string
     *
     * @ORM\Column(name="territoire", type="text")
     */
    public $territoire;

    /**
     * @var string
     *
     * @ORM\Column(name="organismes_usagers", type="text")
     */
    public $organismesUsagers;

    /**
     * @var string
     *
     * @ORM\Column(name="details_usagers", type="text")
     */
    public $detailsUsagers;

    /**
     * @var string
     *
     * @ORM\Column(name="implication_usagers", type="text")
     */
    public $implicationUsagers;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_vente_produits", type="text")
     */
    public $lieuVenteProduits;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_vente_services", type="text")
     */
    public $lieuVenteServices;

    /**
     * @var string
     *
     * @ORM\Column(name="reseaux", type="text")
     */
    public $reseaux;

    /**
     * @var string
     *
     * @ORM\Column(name="partenaires_financiers", type="text")
     */
    public $partenairesFinanciers;

    /**
     * @var string
     *
     * @ORM\Column(name="autres_partenaires", type="text")
     */
    public $autresPartenaires;

    /**
     * @var string
     *
     * @ORM\Column(name="innovations_socioeco", type="text")
     */
    public $innovationsSocioeco;

    /**
     * @var string
     *
     * @ORM\Column(name="roles_ess", type="text")
     */
    public $rolesEss;

    /**
     * @var string
     *
     * @ORM\Column(name="qualificatifs_structure", type="string", length=255)
     */
    public $qualificatifsStructure;

    /**
     * @var string
     *
     * @ORM\Column(name="instances", type="text")
     */
    public $instances;

    /**
     * @var string
     *
     * @ORM\Column(name="composition_direction", type="text")
     */
    public $compositionDirection;

    /**
     * @var string
     *
     * @ORM\Column(name="evalutation_partenaire", type="text")
     */
    public $evalutationPartenaire;

    /**
     * @var string
     *
     * @ORM\Column(name="approvisionnement", type="text")
     */
    public $approvisionnement;

    /**
     * @var string
     *
     * @ORM\Column(name="garanties", type="text")
     */
    public $garanties;

    /**
     * @var string
     *
     * @ORM\Column(name="plusvalue_sociale", type="text")
     */
    public $plusvalueSociale;


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
     * Set naf
     *
     * @param string $naf
     * @return Fiche
     */
    public function setNaf($naf)
    {
        $this->naf = $naf;
    
        return $this;
    }

    /**
     * Get naf
     *
     * @return string 
     */
    public function getNaf()
    {
        return $this->naf;
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
     * @param integer $nombreAssocies
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
     * @return integer 
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
     * Set lieuVenteProduits
     *
     * @param string $lieuVenteProduits
     * @return Fiche
     */
    public function setLieuVenteProduits($lieuVenteProduits)
    {
        $this->lieuVenteProduits = $lieuVenteProduits;
    
        return $this;
    }

    /**
     * Get lieuVenteProduits
     *
     * @return string 
     */
    public function getLieuVenteProduits()
    {
        return $this->lieuVenteProduits;
    }

    /**
     * Set lieuVenteServices
     *
     * @param string $lieuVenteServices
     * @return Fiche
     */
    public function setLieuVenteServices($lieuVenteServices)
    {
        $this->lieuVenteServices = $lieuVenteServices;
    
        return $this;
    }

    /**
     * Get lieuVenteServices
     *
     * @return string 
     */
    public function getLieuVenteServices()
    {
        return $this->lieuVenteServices;
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
     * Set innovationsSocioeco
     *
     * @param string $innovationsSocioeco
     * @return Fiche
     */
    public function setInnovationsSocioeco($innovationsSocioeco)
    {
        $this->innovationsSocioeco = $innovationsSocioeco;
    
        return $this;
    }

    /**
     * Get innovationsSocioeco
     *
     * @return string 
     */
    public function getInnovationsSocioeco()
    {
        return $this->innovationsSocioeco;
    }

    /**
     * Set rolesEss
     *
     * @param string $rolesEss
     * @return Fiche
     */
    public function setRolesEss($rolesEss)
    {
        $this->rolesEss = $rolesEss;
    
        return $this;
    }

    /**
     * Get rolesEss
     *
     * @return string 
     */
    public function getRolesEss()
    {
        return $this->rolesEss;
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
     * Set instances
     *
     * @param string $instances
     * @return Fiche
     */
    public function setInstances($instances)
    {
        $this->instances = $instances;
    
        return $this;
    }

    /**
     * Get instances
     *
     * @return string 
     */
    public function getInstances()
    {
        return $this->instances;
    }

    /**
     * Set compositionDirection
     *
     * @param string $compositionDirection
     * @return Fiche
     */
    public function setCompositionDirection($compositionDirection)
    {
        $this->compositionDirection = $compositionDirection;
    
        return $this;
    }

    /**
     * Get compositionDirection
     *
     * @return string 
     */
    public function getCompositionDirection()
    {
        return $this->compositionDirection;
    }

    /**
     * Set evalutationPartenaire
     *
     * @param string $evalutationPartenaire
     * @return Fiche
     */
    public function setEvalutationPartenaire($evalutationPartenaire)
    {
        $this->evalutationPartenaire = $evalutationPartenaire;
    
        return $this;
    }

    /**
     * Get evalutationPartenaire
     *
     * @return string
     */
    public function getEvalutationPartenaire()
    {
        return $this->evalutationPartenaire;
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
}

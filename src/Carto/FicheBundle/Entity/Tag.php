<?php

namespace Carto\FicheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tag
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Tag
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /***
     * @ORM\ManyToMany(targetEntity="Carto\FicheBundle\Entity\Fiche")
     * @ORM\JoinColumn(name="fiche_id", referencedColumnName="id")
     *
    protected $fiche;*/


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
     * Set libelle
     *
     * @param string $libelle
     * @return Tag
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    /**
     * Constructor
     */
    /*public function __construct()
    {
        $this->fiche = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add fiche
     *
     * @param \Carto\FicheBundle\Entity\Fiche $fiche
     * @return Tag
     *
    public function addFiche(\Carto\FicheBundle\Entity\Fiche $fiche)
    {
        $this->fiche[] = $fiche;

        return $this;
    }

    /**
     * Remove fiche
     *
     * @param \Carto\FicheBundle\Entity\Fiche $fiche
     *
    public function removeFiche(\Carto\FicheBundle\Entity\Fiche $fiche)
    {
        $this->fiche->removeElement($fiche);
    }

    /**
     * Get fiche
     *
     * @return \Doctrine\Common\Collections\Collection 
     *
    public function getFiche()
    {
        return $this->fiche;
    }*/
}

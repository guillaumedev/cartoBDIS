<?php

namespace Carto\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="Carto\FicheBundle\Entity\Fiche")
     * @ORM\JoinColumn(name="fiche_id", referencedColumnName="id")
     */
    protected $fiche;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

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
     * Set fiche
     *
     * @param \Carto\FicheBundle\Entity\Fiche $fiche
     * @return User
     */
    public function setFiche(\Carto\FicheBundle\Entity\Fiche $fiche = null)
    {
        $this->fiche = $fiche;

        return $this;
    }

    /**
     * Get fiche
     *
     * @return \Carto\FicheBundle\Entity\Fiche 
     */
    public function getFiche()
    {
        return $this->fiche;
    }
}

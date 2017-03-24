<?php

namespace Boissiere\E4Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producteur
 *
 * @ORM\Table(name="producteur")
 * @ORM\Entity
 */
class Producteur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdProd", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprod;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;



    /**
     * Get idprod
     *
     * @return integer 
     */
    public function getIdprod()
    {
        return $this->idprod;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Producteur
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
}

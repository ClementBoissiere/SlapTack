<?php

namespace Boissiere\E4Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Songs
 *
 * @ORM\Table(name="songs", indexes={@ORM\Index(name="idGroup", columns={"idGroup"})})
 * @ORM\Entity(repositoryClass="Boissiere\E4Bundle\Entity\SongsRepository")
 */
class Songs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idSong", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsong;

    /**
     * @var string
     *
     * @ORM\Column(name="nameSong", type="string", length=255, nullable=false)
     */
    private $namesong;

    /**
     * @var string
     *
     * @ORM\Column(name="style", type="string", length=255, nullable=false)
     */
    private $style;

    /**
     * @var integer
     *
     * @ORM\Column(name="idGroup", type="integer", nullable=false)
     */
    private $idgroup;



    /**
     * Get idsong
     *
     * @return integer 
     */
    public function getIdsong()
    {
        return $this->idsong;
    }

    /**
     * Set namesong
     *
     * @param string $namesong
     * @return Songs
     */
    public function setNamesong($namesong)
    {
        $this->namesong = $namesong;

        return $this;
    }

    /**
     * Get namesong
     *
     * @return string 
     */
    public function getNamesong()
    {
        return $this->namesong;
    }

    /**
     * Set style
     *
     * @param string $style
     * @return Songs
     */
    public function setStyle($style)
    {
        $this->style = $style;

        return $this;
    }

    /**
     * Get style
     *
     * @return string 
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set idgroup
     *
     * @param integer $idgroup
     * @return Songs
     */
    public function setIdgroup($idgroup)
    {
        $this->idgroup = $idgroup;

        return $this;
    }

    /**
     * Get idgroup
     *
     * @return integer 
     */
    public function getIdgroup()
    {
        return $this->idgroup;
    }
}

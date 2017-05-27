<?php

namespace Boissiere\E4Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Songs
 *
 * @ORM\Table(name="songs", indexes={@ORM\Index(name="idGroup", columns={"idGroup"})})
 * @ORM\Entity
 */
class Songs
{
    /**
     * @var int
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
     * @var string
     *
     * @ORM\Column(name="idGroup", type="string", length=255, nullable=false)
     */
    private $idgroup;

    /**
     * @var string
     *
     * @ORM\Column(name="songPath", type="string", length=255, nullable=false)
     */
    private $songpath;



    /**
     * Get idsong.
     *
     * @return int
     */
    public function getIdsong()
    {
        return $this->idsong;
    }

    /**
     * Set namesong.
     *
     * @param string $namesong
     *
     * @return Songs
     */
    public function setNamesong($namesong)
    {
        $this->namesong = $namesong;
    
        return $this;
    }

    /**
     * Get namesong.
     *
     * @return string
     */
    public function getNamesong()
    {
        return $this->namesong;
    }

    /**
     * Set style.
     *
     * @param string $style
     *
     * @return Songs
     */
    public function setStyle($style)
    {
        $this->style = $style;
    
        return $this;
    }

    /**
     * Get style.
     *
     * @return string
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set idgroup.
     *
     * @param string $idgroup
     *
     * @return Songs
     */
    public function setIdgroup($idgroup)
    {
        $this->idgroup = $idgroup;
    
        return $this;
    }

    /**
     * Get idgroup.
     *
     * @return string
     */
    public function getIdgroup()
    {
        return $this->idgroup;
    }

    /**
     * Set songpath.
     *
     * @param string $songpath
     *
     * @return Songs
     */
    public function setSongpath($songpath)
    {
        $this->songpath = $songpath;
    
        return $this;
    }

    /**
     * Get songpath.
     *
     * @return string
     */
    public function getSongpath()
    {
        return $this->songpath;
    }
}

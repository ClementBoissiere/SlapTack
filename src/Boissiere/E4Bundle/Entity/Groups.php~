<?php

namespace Boissiere\E4Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groups
 *
 * @ORM\Table(name="groups", uniqueConstraints={@ORM\UniqueConstraint(name="idsongs", columns={"idsongs"}), @ORM\UniqueConstraint(name="idGroup", columns={"idGroup"})}, indexes={@ORM\Index(name="idmembers", columns={"idmembers"})})
 * @ORM\Entity
 */
class Groups
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idGroup", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgroup;

    /**
     * @var string
     *
     * @ORM\Column(name="groupName", type="string", length=255, nullable=false)
     */
    private $groupname;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmembers", type="integer", nullable=false)
     */
    private $idmembers;

    /**
     * @var integer
     *
     * @ORM\Column(name="idsongs", type="integer", nullable=false)
     */
    private $idsongs;



    /**
     * Get idgroup
     *
     * @return integer 
     */
    public function getIdgroup()
    {
        return $this->idgroup;
    }

    /**
     * Set groupname
     *
     * @param string $groupname
     * @return Groups
     */
    public function setGroupname($groupname)
    {
        $this->groupname = $groupname;

        return $this;
    }

    /**
     * Get groupname
     *
     * @return string 
     */
    public function getGroupname()
    {
        return $this->groupname;
    }

    /**
     * Set idmembers
     *
     * @param integer $idmembers
     * @return Groups
     */
    public function setIdmembers($idmembers)
    {
        $this->idmembers = $idmembers;

        return $this;
    }

    /**
     * Get idmembers
     *
     * @return integer 
     */
    public function getIdmembers()
    {
        return $this->idmembers;
    }

    /**
     * Set idsongs
     *
     * @param integer $idsongs
     * @return Groups
     */
    public function setIdsongs($idsongs)
    {
        $this->idsongs = $idsongs;

        return $this;
    }

    /**
     * Get idsongs
     *
     * @return integer 
     */
    public function getIdsongs()
    {
        return $this->idsongs;
    }
}

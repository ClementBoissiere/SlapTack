<?php

namespace Boissiere\E4Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Members
 *
 * @ORM\Table(name="members")
 * @ORM\Entity(repositoryClass="Boissiere\E4Bundle\Entity\MembersRepository")
 */
class Members
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idMember", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmember;

    /**
     * @var string
     *
     * @ORM\Column(name="nameMember", type="string", length=255, nullable=false)
     */
    private $namemember;

    /**
     * @var string
     *
     * @ORM\Column(name="instrument", type="string", length=255, nullable=false)
     */
    private $instrument;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255, nullable=false)
     */
    private $picture;



    /**
     * Get idmember
     *
     * @return integer 
     */
    public function getIdmember()
    {
        return $this->idmember;
    }

    /**
     * Set namemember
     *
     * @param string $namemember
     * @return Members
     */
    public function setNamemember($namemember)
    {
        $this->namemember = $namemember;

        return $this;
    }

    /**
     * Get namemember
     *
     * @return string 
     */
    public function getNamemember()
    {
        return $this->namemember;
    }

    /**
     * Set instrument
     *
     * @param string $instrument
     * @return Members
     */
    public function setInstrument($instrument)
    {
        $this->instrument = $instrument;

        return $this;
    }

    /**
     * Get instrument
     *
     * @return string 
     */
    public function getInstrument()
    {
        return $this->instrument;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Members
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return Members
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
    }
}

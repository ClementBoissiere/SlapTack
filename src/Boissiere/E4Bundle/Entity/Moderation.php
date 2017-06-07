<?php

namespace Boissiere\E4Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moderation
 *
 * @ORM\Table(name="moderation")
 * @ORM\Entity(repositoryClass="Boissiere\E4Bundle\Entity\ModerationRepository")
 */
class Moderation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idMod", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmod;

    /**
     * @var string
     *
     * @ORM\Column(name="request", type="text", length=65535, nullable=false)
     */
    private $request;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255, nullable=false)
     */
    private $mail;



    /**
     * Get idmod.
     *
     * @return int
     */
    public function getIdmod()
    {
        return $this->idmod;
    }

    /**
     * Set request.
     *
     * @param string $request
     *
     * @return Moderation
     */
    public function setRequest($request)
    {
        $this->request = $request;

        return $this;
    }

    /**
     * Get request.
     *
     * @return string
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Set mail.
     *
     * @param string $mail
     *
     * @return Moderation
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail.
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }
}

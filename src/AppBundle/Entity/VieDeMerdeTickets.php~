<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VieDeMerdeTickets
 *
 * @ORM\Table(name="vie_de_merde_tickets")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VieDeMerdeTicketsRepository")
 */
class VieDeMerdeTickets
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string", length=255)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @var int
     *
     * @ORM\Column(name="liketicket", type="integer")
     */
    private $liketicket;

    /**
     * @var int
     *
     * @ORM\Column(name="unliketicket", type="integer")
     */
    private $unliketicket;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return VieDeMerdeTickets
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return VieDeMerdeTickets
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return VieDeMerdeTickets
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set liketicket
     *
     * @param integer $liketicket
     *
     * @return VieDeMerdeTickets
     */
    public function setLiketicket($liketicket)
    {
        $this->liketicket = $liketicket;

        return $this;
    }

    /**
     * Get liketicket
     *
     * @return int
     */
    public function getLiketicket()
    {
        return $this->liketicket;
    }

    /**
     * Set unliketicket
     *
     * @param integer $unliketicket
     *
     * @return VieDeMerdeTickets
     */
    public function setUnliketicket($unliketicket)
    {
        $this->unliketicket = $unliketicket;

        return $this;
    }

    /**
     * Get unliketicket
     *
     * @return int
     */
    public function getUnliketicket()
    {
        return $this->unliketicket;
    }
}

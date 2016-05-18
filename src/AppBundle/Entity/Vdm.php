<?php
namespace AppBundle\Entity;

class Vdm
{
    protected $pseudo;
    protected $titre;
    protected $content;
    protected $like;
    protected $unlike;


    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->$content = $content;
    }

    public function getLike()
    {
        return $this->like;
    }

    public function setLike($like)
    {
        $this->like = $like;
    }

    public function getDislike()
    {
        return $this->dislike;
    }

    public function setDislike($dislike)
    {
        $this->dislike = $dislike;
    }
}

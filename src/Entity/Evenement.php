<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EvenementRepository")
 */
class Evenement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="integer")
     */
    private $periode;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $lieu;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $lutte;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $strategie;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $action;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $victoire;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $anecdote;

    /**
    * @ORM\Column(type="string", length=500)
    */
    private $citation;

    /**
    * @ORM\Column(type="string", length=350)
    */
    private $question;

    /**
    * @ORM\Column(type="string", length=200)
    */
    private $reponse1;

    /**
    * @ORM\Column(type="string", length=200)
    */
    private $reponse2;

    /**
    * @ORM\Column(type="string", length=200)
    */
    private $reponse3;

    /**
    * @ORM\Column(type="string", length=500)
    */
    private $video;

    /**
    * @ORM\Column(type="string", length=500)
    */
    private $article;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * @param mixed $periode
     */
    public function setPeriode($periode): void
    {
        $this->periode = $periode;
    }

    /**
     * @return mixed
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * @param mixed $lieu
     */
    public function setLieu($lieu): void
    {
        $this->lieu = $lieu;
    }

    /**
     * @return mixed
     */
    public function getLutte()
    {
        return $this->lutte;
    }

    /**
     * @param mixed $lutte
     */
    public function setLutte($lutte): void
    {
        $this->lutte = $lutte;
    }

    /**
     * @return mixed
     */
    public function getStrategie()
    {
        return $this->strategie;
    }

    /**
     * @param mixed $strategie
     */
    public function setStrategie($strategie): void
    {
        $this->strategie = $strategie;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action): void
    {
        $this->action = $action;
    }

    /**
     * @return mixed
     */
    public function getVictoire()
    {
        return $this->victoire;
    }

    /**
     * @param mixed $victoire
     */
    public function setVictoire($victoire): void
    {
        $this->victoire = $victoire;
    }

    /**
     * @return mixed
     */
    public function getAnecdote()
    {
        return $this->anecdote;
    }

    /**
     * @param mixed $anecdote
     */
    public function setAnecdote($anecdote): void
    {
        $this->anecdote = $anecdote;
    }

    /**
     * @return mixed
     */
    public function getCitation()
    {
        return $this->citation;
    }

    /**
     * @param mixed $citation
     */
    public function setCitation($citation): void
    {
        $this->citation = $citation;
    }

    /**
     * @return mixed
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param mixed $question
     */
    public function setQuestion($question): void
    {
        $this->question = $question;
    }

    /**
     * @return mixed
     */
    public function getReponse1()
    {
        return $this->reponse1;
    }

    /**
     * @param mixed $reponse1
     */
    public function setReponse1($reponse1): void
    {
        $this->reponse1 = $reponse1;
    }

    /**
     * @return mixed
     */
    public function getReponse2()
    {
        return $this->reponse2;
    }

    /**
     * @param mixed $reponse2
     */
    public function setReponse2($reponse2): void
    {
        $this->reponse2 = $reponse2;
    }

    /**
     * @return mixed
     */
    public function getReponse3()
    {
        return $this->reponse3;
    }

    /**
     * @param mixed $reponse3
     */
    public function setReponse3($reponse3): void
    {
        $this->reponse3 = $reponse3;
    }

    /**
     * @return mixed
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param mixed $video
     */
    public function setVideo($video): void
    {
        $this->video = $video;
    }

    /**
     * @return mixed
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * @param mixed $article
     */
    public function setArticle($article): void
    {
        $this->article = $article;
    }

    public function toArray()
    {
        return [
            'id' => $this->getId(),
            'nom' => $this->getNom(),
            'periode' => $this->getPeriode(),
            'lieu' => $this->getLieu(),
            'lutte' => $this->getLutte(),
            'strategie' => $this->getStrategie(),
            'action' => $this->getAction(),
            'victoire' => $this->getVictoire(),
            'anecdote' => $this->getAnecdote(),
            'citation' => $this->getCitation(),
            'question' => $this->getQuestion(),
            'reponse1' => $this->getReponse1(),
            'reponse2' => $this->getReponse2(),
            'reponse3' => $this->getReponse3(),
            'video' => $this->getVideo(),
            'article' => $this->getArticle(),
        ];
    }

}
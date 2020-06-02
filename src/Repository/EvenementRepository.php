<?php

namespace App\Repository;

use App\Entity\Evenement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @method Evenement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Evenement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Evenement[]    findAll()
 * @method Evenement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EvenementRepository extends ServiceEntityRepository
{
    private $manager;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $manager)
    {
        parent::__construct($registry, Evenement::class);
        $this->manager = $manager;
    }

    public function saveEvenement($nom, $periode, $lieu, $lutte, $strategie, $action, $victoire, $anecdote, $citation,
                                  $question, $reponse1, $reponse2, $reponse3, $video, $article)
    {
        $newEvenement = new Evenement();

        $newEvenement->setNom($nom);
        $newEvenement->setPeriode($periode);
        $newEvenement->setLieu($lieu);
        $newEvenement->setLutte($lutte);
        $newEvenement->setStrategie($strategie);
        $newEvenement->setAction($action);
        $newEvenement->setVictoire($victoire);
        $newEvenement->setAnecdote($anecdote);
        $newEvenement->setCitation($citation);
        $newEvenement->setCitation($question);
        $newEvenement->setCitation($reponse1);
        $newEvenement->setCitation($reponse2);
        $newEvenement->setCitation($reponse3);
        $newEvenement->setCitation($video);
        $newEvenement->setCitation($article);

        $this->manager->persist($newEvenement);
        $this->manager->flush();
    }

    public function updateEvenement(Evenement $evenement): Evenement
    {
        $this->manager->persist($evenement);
        $this->manager->flush();

        return $evenement;
    }

    public function removeEvenement(Evenement $evenement)
    {
        $this->manager->remove($evenement);
        $this->manager->flush();
    }
}

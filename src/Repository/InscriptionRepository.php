<?php

namespace App\Repository;

use App\Entity\Inscription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @method Inscription|null find($id, $lockMode = null, $lockVersion = null)
 * @method Inscription|null findOneBy(array $criteria, array $orderBy = null)
 * @method Inscription[]    findAll()
 * @method Inscription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InscriptionRepository extends ServiceEntityRepository
{
    private $manager;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $manager)
    {
        parent::__construct($registry, Inscription::class);
        $this->manager = $manager;
    }

    public function saveInscription($pseudo, $mail, $age, $desobeissant, $sexe)
    {
        $newInscription = new Inscription();

        $newInscription->setPseudo($pseudo);
        $newInscription->setMail($mail);
        $newInscription->setAge($age);
        $newInscription->setDesobeissant($desobeissant);
        $newInscription->setSexe($sexe);

        $this->manager->persist($newInscription);
        $this->manager->flush();
    }

    public function updateInscription(Inscription $inscription): Inscription
    {
        $this->manager->persist($inscription);
        $this->manager->flush();

        return $inscription;
    }

    public function removeInscription(Inscription $inscription)
    {
        $this->manager->remove($inscription);
        $this->manager->flush();
    }
}
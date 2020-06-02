<?php

namespace App\Repository;

use App\Entity\Resultats;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Resultats|null find($id, $lockMode = null, $lockVersion = null)
 * @method Resultats|null findOneBy(array $criteria, array $orderBy = null)
 * @method Resultats[]    findAll()
 * @method Resultats[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResultatsRepository extends ServiceEntityRepository
{
    private $manager;
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $manager)
    {
        parent::__construct($registry, Resultats::class);
        $this->manager = $manager;
    }

    /**
     * Sauve les résultats en bases de donnes
     */
    public function saveResultats($idSession, $reponse1 = NULL, $reponse2 = NULL, $reponse3 = NULL, $reponse4 = NULL,
                                  $reponse5 = NULL, $reponse6 = NULL, $reponse7 = NULL, $reponse8 = NULL,
                                  $reponse9 = NULL, $reponse10 = NULL, $reponse11 = NULL, $reponse12 = NULL,
                                  $reponse13 = NULL, $reponse14 = NULL, $reponse15 = NULL, $reponse16 = NULL,
                                  $reponse17 = NULL, $reponse18 = NULL, $reponse19 = NULL, $reponse20 = NULL,
                                  $reponse21 = NULL, $reponse22 = NULL, $reponse23 = NULL, $reponse24 = NULL,
                                  $reponse25 = NULL, $reponse26 = NULL, $reponse27 = NULL, $reponse28 = NULL,
                                  $reponse29 = NULL, $reponse30 = NULL, $reponse31 = NULL, $reponse32 = NULL,
                                  $reponse33 = NULL, $reponse34 = NULL, $reponse35 = NULL, $reponse36 = NULL,
                                  $reponse37 = NULL, $reponse38 = NULL, $reponse39 = NULL, $reponse40 = NULL)
    {
        $newResultats = new Resultats();

        $newResultats->setIdSession($idSession);
        $newResultats->setReponse1($reponse1);
        $newResultats->setReponse2($reponse2);
        $newResultats->setReponse3($reponse3);
        $newResultats->setReponse4($reponse4);
        $newResultats->setReponse5($reponse5);
        $newResultats->setReponse6($reponse6);
        $newResultats->setReponse7($reponse7);
        $newResultats->setReponse8($reponse8);
        $newResultats->setReponse9($reponse9);
        $newResultats->setReponse10($reponse10);
        $newResultats->setReponse11($reponse11);
        $newResultats->setReponse12($reponse12);
        $newResultats->setReponse13($reponse13);
        $newResultats->setReponse14($reponse14);
        $newResultats->setReponse15($reponse15);
        $newResultats->setReponse16($reponse16);
        $newResultats->setReponse17($reponse17);
        $newResultats->setReponse18($reponse18);
        $newResultats->setReponse19($reponse19);
        $newResultats->setReponse20($reponse20);
        $newResultats->setReponse21($reponse21);
        $newResultats->setReponse22($reponse22);
        $newResultats->setReponse23($reponse23);
        $newResultats->setReponse24($reponse24);
        $newResultats->setReponse25($reponse25);
        $newResultats->setReponse26($reponse26);
        $newResultats->setReponse27($reponse27);
        $newResultats->setReponse28($reponse28);
        $newResultats->setReponse29($reponse29);
        $newResultats->setReponse30($reponse30);
        $newResultats->setReponse31($reponse31);
        $newResultats->setReponse32($reponse32);
        $newResultats->setReponse33($reponse33);
        $newResultats->setReponse34($reponse34);
        $newResultats->setReponse35($reponse35);
        $newResultats->setReponse36($reponse36);
        $newResultats->setReponse37($reponse37);
        $newResultats->setReponse38($reponse38);
        $newResultats->setReponse39($reponse39);
        $newResultats->setReponse40($reponse40);

        $this->manager->persist($newResultats);
        $this->manager->flush();
    }

    /**
     * @param Resultats $resultats
     * @return Resultats permet de mettre à jour les résultats
     */
    public function updateResultats(Resultats $resultats): Resultats
    {
        $this->manager->persist($resultats);
        $this->manager->flush();

        return $resultats;
    }

    /**
     * @param Resultats $resultats retire les resultats
     */
    public function removeResultats(Resultats $resultats)
    {
        $this->manager->remove($resultats);
        $this->manager->flush();
    }
}

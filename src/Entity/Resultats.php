<?php

namespace App\Entity;

use App\Repository\ResultatsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ResultatsRepository::class)
 */
class Resultats
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="datetime")
     */
    private $finQuizz = //date('d/m/Y H:i:s', NOW);

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse1 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse2 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse3 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse4 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse5 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse6 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse7 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse8 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse9 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse10 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse11 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse12 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse13 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse14 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse15 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse16 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse17 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse18 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse19 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse20 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse21 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse22 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse23 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse24 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse25 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse26 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse27 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse28 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse29 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse30 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse31 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse32 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse33 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse34 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse35 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse36 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse37 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse38 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse39 = NULL;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $reponse40 = NULL;

    /**
     * @return mixed
     */
    public function getIdSession()
    {
        return $this->idSession;
    }

    /**
     * @param mixed $idSession
     */
    public function setIdSession($idSession): void
    {
        $this->idSession = $idSession;
    }

    /**
     * @return mixed
     */
    public function getFinQuizz()
    {
        return $this->finQuizz;
    }

    /**
     * @param mixed $finQuizz
     */
    public function setFinQuizz($finQuizz): void
    {
        $this->finQuizz = $finQuizz;
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
    public function getReponse4()
    {
        return $this->reponse4;
    }

    /**
     * @param mixed $reponse4
     */
    public function setReponse4($reponse4): void
    {
        $this->reponse4 = $reponse4;
    }

    /**
     * @return mixed
     */
    public function getReponse5()
    {
        return $this->reponse5;
    }

    /**
     * @param mixed $reponse5
     */
    public function setReponse5($reponse5): void
    {
        $this->reponse5 = $reponse5;
    }

    /**
     * @return mixed
     */
    public function getReponse6()
    {
        return $this->reponse6;
    }

    /**
     * @param mixed $reponse6
     */
    public function setReponse6($reponse6): void
    {
        $this->reponse6 = $reponse6;
    }

    /**
     * @return mixed
     */
    public function getReponse7()
    {
        return $this->reponse7;
    }

    /**
     * @param mixed $reponse7
     */
    public function setReponse7($reponse7): void
    {
        $this->reponse7 = $reponse7;
    }

    /**
     * @return mixed
     */
    public function getReponse8()
    {
        return $this->reponse8;
    }

    /**
     * @param mixed $reponse8
     */
    public function setReponse8($reponse8): void
    {
        $this->reponse8 = $reponse8;
    }

    /**
     * @return mixed
     */
    public function getReponse9()
    {
        return $this->reponse9;
    }

    /**
     * @param mixed $reponse9
     */
    public function setReponse9($reponse9): void
    {
        $this->reponse9 = $reponse9;
    }

    /**
     * @return mixed
     */
    public function getReponse10()
    {
        return $this->reponse10;
    }

    /**
     * @param mixed $reponse10
     */
    public function setReponse10($reponse10): void
    {
        $this->reponse10 = $reponse10;
    }

    /**
     * @return mixed
     */
    public function getReponse11()
    {
        return $this->reponse11;
    }

    /**
     * @param mixed $reponse11
     */
    public function setReponse11($reponse11): void
    {
        $this->reponse11 = $reponse11;
    }

    /**
     * @return mixed
     */
    public function getReponse12()
    {
        return $this->reponse12;
    }

    /**
     * @param mixed $reponse12
     */
    public function setReponse12($reponse12): void
    {
        $this->reponse12 = $reponse12;
    }

    /**
     * @return mixed
     */
    public function getReponse13()
    {
        return $this->reponse13;
    }

    /**
     * @param mixed $reponse13
     */
    public function setReponse13($reponse13): void
    {
        $this->reponse13 = $reponse13;
    }

    /**
     * @return mixed
     */
    public function getReponse14()
    {
        return $this->reponse14;
    }

    /**
     * @param mixed $reponse14
     */
    public function setReponse14($reponse14): void
    {
        $this->reponse14 = $reponse14;
    }

    /**
     * @return mixed
     */
    public function getReponse15()
    {
        return $this->reponse15;
    }

    /**
     * @param mixed $reponse15
     */
    public function setReponse15($reponse15): void
    {
        $this->reponse15 = $reponse15;
    }

    /**
     * @return mixed
     */
    public function getReponse16()
    {
        return $this->reponse16;
    }

    /**
     * @param mixed $reponse16
     */
    public function setReponse16($reponse16): void
    {
        $this->reponse16 = $reponse16;
    }

    /**
     * @return mixed
     */
    public function getReponse17()
    {
        return $this->reponse17;
    }

    /**
     * @param mixed $reponse17
     */
    public function setReponse17($reponse17): void
    {
        $this->reponse17 = $reponse17;
    }

    /**
     * @return mixed
     */
    public function getReponse18()
    {
        return $this->reponse18;
    }

    /**
     * @param mixed $reponse18
     */
    public function setReponse18($reponse18): void
    {
        $this->reponse18 = $reponse18;
    }

    /**
     * @return mixed
     */
    public function getReponse19()
    {
        return $this->reponse19;
    }

    /**
     * @param mixed $reponse19
     */
    public function setReponse19($reponse19): void
    {
        $this->reponse19 = $reponse19;
    }

    /**
     * @return mixed
     */
    public function getReponse20()
    {
        return $this->reponse20;
    }

    /**
     * @param mixed $reponse20
     */
    public function setReponse20($reponse20): void
    {
        $this->reponse20 = $reponse20;
    }

    /**
     * @return mixed
     */
    public function getReponse21()
    {
        return $this->reponse21;
    }

    /**
     * @param mixed $reponse21
     */
    public function setReponse21($reponse21): void
    {
        $this->reponse21 = $reponse21;
    }

    /**
     * @return mixed
     */
    public function getReponse22()
    {
        return $this->reponse22;
    }

    /**
     * @param mixed $reponse22
     */
    public function setReponse22($reponse22): void
    {
        $this->reponse22 = $reponse22;
    }

    /**
     * @return mixed
     */
    public function getReponse23()
    {
        return $this->reponse23;
    }

    /**
     * @param mixed $reponse23
     */
    public function setReponse23($reponse23): void
    {
        $this->reponse23 = $reponse23;
    }

    /**
     * @return mixed
     */
    public function getReponse24()
    {
        return $this->reponse24;
    }

    /**
     * @param mixed $reponse24
     */
    public function setReponse24($reponse24): void
    {
        $this->reponse24 = $reponse24;
    }

    /**
     * @return mixed
     */
    public function getReponse25()
    {
        return $this->reponse25;
    }

    /**
     * @param mixed $reponse25
     */
    public function setReponse25($reponse25): void
    {
        $this->reponse25 = $reponse25;
    }

    /**
     * @return mixed
     */
    public function getReponse26()
    {
        return $this->reponse26;
    }

    /**
     * @param mixed $reponse26
     */
    public function setReponse26($reponse26): void
    {
        $this->reponse26 = $reponse26;
    }

    /**
     * @return mixed
     */
    public function getReponse27()
    {
        return $this->reponse27;
    }

    /**
     * @param mixed $reponse27
     */
    public function setReponse27($reponse27): void
    {
        $this->reponse27 = $reponse27;
    }

    /**
     * @return mixed
     */
    public function getReponse28()
    {
        return $this->reponse28;
    }

    /**
     * @param mixed $reponse28
     */
    public function setReponse28($reponse28): void
    {
        $this->reponse28 = $reponse28;
    }

    /**
     * @return mixed
     */
    public function getReponse29()
    {
        return $this->reponse29;
    }

    /**
     * @param mixed $reponse29
     */
    public function setReponse29($reponse29): void
    {
        $this->reponse29 = $reponse29;
    }

    /**
     * @return mixed
     */
    public function getReponse30()
    {
        return $this->reponse30;
    }

    /**
     * @param mixed $reponse30
     */
    public function setReponse30($reponse30): void
    {
        $this->reponse30 = $reponse30;
    }

    /**
     * @return mixed
     */
    public function getReponse31()
    {
        return $this->reponse31;
    }

    /**
     * @param mixed $reponse31
     */
    public function setReponse31($reponse31): void
    {
        $this->reponse31 = $reponse31;
    }

    /**
     * @return mixed
     */
    public function getReponse32()
    {
        return $this->reponse32;
    }

    /**
     * @param mixed $reponse32
     */
    public function setReponse32($reponse32): void
    {
        $this->reponse32 = $reponse32;
    }

    /**
     * @return mixed
     */
    public function getReponse33()
    {
        return $this->reponse33;
    }

    /**
     * @param mixed $reponse33
     */
    public function setReponse33($reponse33): void
    {
        $this->reponse33 = $reponse33;
    }

    /**
     * @return mixed
     */
    public function getReponse34()
    {
        return $this->reponse34;
    }

    /**
     * @param mixed $reponse34
     */
    public function setReponse34($reponse34): void
    {
        $this->reponse34 = $reponse34;
    }

    /**
     * @return mixed
     */
    public function getReponse35()
    {
        return $this->reponse35;
    }

    /**
     * @param mixed $reponse35
     */
    public function setReponse35($reponse35): void
    {
        $this->reponse35 = $reponse35;
    }

    /**
     * @return mixed
     */
    public function getReponse36()
    {
        return $this->reponse36;
    }

    /**
     * @param mixed $reponse36
     */
    public function setReponse36($reponse36): void
    {
        $this->reponse36 = $reponse36;
    }

    /**
     * @return mixed
     */
    public function getReponse37()
    {
        return $this->reponse37;
    }

    /**
     * @param mixed $reponse37
     */
    public function setReponse37($reponse37): void
    {
        $this->reponse37 = $reponse37;
    }

    /**
     * @return mixed
     */
    public function getReponse38()
    {
        return $this->reponse38;
    }

    /**
     * @param mixed $reponse38
     */
    public function setReponse38($reponse38): void
    {
        $this->reponse38 = $reponse38;
    }

    /**
     * @return mixed
     */
    public function getReponse39()
    {
        return $this->reponse39;
    }

    /**
     * @param mixed $reponse39
     */
    public function setReponse39($reponse39): void
    {
        $this->reponse39 = $reponse39;
    }

    /**
     * @return mixed
     */
    public function getReponse40()
    {
        return $this->reponse40;
    }

    /**
     * @param mixed $reponse40
     */
    public function setReponse40($reponse40): void
    {
        $this->reponse40 = $reponse40;
    }

    /**
     * @return array qui contient toutes les valeurs de la ligne de donnée
     */
    public function toArray()
    {
        return [
            'idSession' => $this->getIdSession(),
            'finQuizz' => $this->getFinQuizz(),
            'reponse1' => $this->getReponse1(),
            'reponse2' => $this->getReponse2(),
            'reponse3' => $this->getReponse3(),
            'reponse4' => $this->getReponse4(),
            'reponse5' => $this->getReponse5(),
            'reponse6' => $this->getReponse6(),
            'reponse7' => $this->getReponse7(),
            'reponse8' => $this->getReponse8(),
            'reponse9' => $this->getReponse9(),
            'reponse10' => $this->getReponse10(),
            'reponse11' => $this->getReponse11(),
            'reponse12' => $this->getReponse12(),
            'reponse13' => $this->getReponse13(),
            'reponse14' => $this->getReponse14(),
            'reponse15' => $this->getReponse15(),
            'reponse16' => $this->getReponse16(),
            'reponse17' => $this->getReponse17(),
            'reponse18' => $this->getReponse18(),
            'reponse19' => $this->getReponse19(),
            'reponse20' => $this->getReponse20(),
            'reponse21' => $this->getReponse21(),
            'reponse22' => $this->getReponse22(),
            'reponse23' => $this->getReponse23(),
            'reponse24' => $this->getReponse24(),
            'reponse25' => $this->getReponse25(),
            'reponse26' => $this->getReponse26(),
            'reponse27' => $this->getReponse27(),
            'reponse28' => $this->getReponse28(),
            'reponse29' => $this->getReponse29(),
            'reponse30' => $this->getReponse30(),
            'reponse31' => $this->getReponse31(),
            'reponse32' => $this->getReponse32(),
            'reponse33' => $this->getReponse33(),
            'reponse34' => $this->getReponse34(),
            'reponse35' => $this->getReponse35(),
            'reponse36' => $this->getReponse36(),
            'reponse37' => $this->getReponse37(),
            'reponse38' => $this->getReponse38(),
            'reponse39' => $this->getReponse39(),
            'reponse40' => $this->getReponse40(),
        ];
    }
}

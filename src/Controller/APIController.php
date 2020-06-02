<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Repository\EvenementRepository;
use App\Repository\InscriptionRepository;
//use App\Repository\ResultatsRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class APIController
{
    private $inscriptionRepository;
    private $evenementRepository;
    private $resultatsRepository;

    public function __construct(InscriptionRepository $inscriptionRepository, EvenementRepository $evenementRepository/*,
                                ResultatsRepository $resultatsRepository*/)
    {
        $this->inscriptionRepository = $inscriptionRepository;
        $this->evenementRepository = $evenementRepository;
        //$this->resultatsRepository = $resultatsRepository;
    }

    /**
     * @Route("/api/users/add/", name="add_utilisateur", methods={"POST"})
     */
    public function addUser(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $pseudo = $data['mdp'];
        $mail = $data['mail'];
        $age = $data['age'];
        $desobeissant = $data['desobeissant'];
        $sexe = $data['sexe'];

        if (empty($pseudo) || empty($mail) || empty($age) || empty($desobeissant) || empty($sexe)) {
            throw new NotFoundHttpException('Paramètres obligatoires attendus!');
        }

        $this->inscriptionRepository->saveInscription($pseudo, $mail, $age, $desobeissant, $sexe);

        return new JsonResponse(['status' => 'Utilisateur crée!'], Response::HTTP_CREATED);
    }

    /**
     * @Route("/api/users/{mail}", name="get_un_utilisateur", methods={"GET"})
     */
    public function getUser($mail): JsonResponse
    {
        $inscription = $this->inscriptionRepository->findOneBy(['mail' => $mail]);

        $data = [
            'pseudo' => $inscription->getPseudo(),
            'mail' => $inscription->getMail(),
            'age' => $inscription->getAge(),
            'desobeissant' => $inscription->getDesobeissant(),
            'sexe' => $inscription->getSexe(),
        ];

        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * @Route("/api/users/", name="get_tous_utilisateur", methods={"GET"})
     */
    public function getAllUser(): JsonResponse
    {
        $inscriptions = $this->inscriptionRepository->findAll();
        $data = [];

        foreach ($inscriptions as $inscription) {
            $data[] = [
                'pseudo' => $inscription->getPseudo(),
                'mail' => $inscription->getMail(),
                'age' => $inscription->getAge(),
                'desobeissant' => $inscription->getDesobeissant(),
                'sexe' => $inscription->getSexe(),
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * @Route("/api/users/update/{mail}", name="update_utilisateur", methods={"PUT"})
     */
    public function updateUser($mail, Request $request): JsonResponse
    {
        $inscription = $this->inscriptionRepository->findOneBy(['mail' => $mail]);

        $data = json_decode($request->getContent(), true);

        empty($data['pseudo']) ? true : $inscription->setPseudo($data['pseudo']);
        empty($data['mail']) ? true : $inscription->setMail($data['mail']);
        empty($data['age']) ? true : $inscription->setAge($data['age']);
        empty($data['desobeissant']) ? true : $inscription->setDesobeissant($data['desobeissant']);
        empty($data['sexe']) ? true : $inscription->setSexe($data['sexe']);

        $updatedInscription = $this->inscriptionRepository->updateInscription($inscription);

        return new JsonResponse($updatedInscription->toArray(), Response::HTTP_OK);
    }

    /**
     * @Route("/api/users/delete/{mail}", name="delete_utilisateur", methods={"DELETE"})
     */
    public function deleteUser($mail): JsonResponse
    {
        $inscription = $this->inscriptionRepository->findOneBy(['mail' => $mail]);

        $this->inscriptionRepository->removeInscription($inscription);

        return new JsonResponse(['status' => 'Inscription deleted'], Response::HTTP_NO_CONTENT);
    }

    /**
     * @Route("/api/users/listes/", name="get_liste_mails", methods={"POST"})
     */
    public function getListeMails(): JsonResponse
    {
        $inscriptions = $this->inscriptionRepository->findAll();
        $data = [];

        foreach ($inscriptions as $inscription) {
            $data[] = [
                'mail' => $inscription->getMail(),
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * @Route("/api/evenements/add", name="add_evenement", methods={"POST"})
     */
    public function addEvent(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $nom = $data['nom'];
        $periode = $data['periode'];
        $lieu = $data['lieu'];
        $lutte = $data['lutte'];
        $strategie = $data['strategie'];
        $action = $data['action'];
        $victoire = $data['victoire'];
        $anecdote = $data['anecdote'];
        $citation = $data['citation'];
        $question = $data['question'];
        $reponse1 = $data['reponse1'];
        $reponse2 = $data['reponse2'];
        $reponse3 = $data['reponse3'];
        $video = $data['video'];
        $article = $data['Article'];

        if (empty($nom) || empty($periode) || empty($lieu) || empty($lutte) || empty($strategie) || empty($action)
            || empty($victoire) || empty($anecdote) || empty($citation) || empty($question) || empty($reponse1)
            || empty($reponse2) || empty($reponse3)) {
            throw new NotFoundHttpException('Paramètres obligatoires attendus!');
        }

        $this->evenementRepository->saveEvenement($nom, $periode, $lieu, $lutte, $strategie, $action, $victoire,
            $anecdote, $citation, $question, $reponse1, $reponse2, $reponse3, $video, $article);

        return new JsonResponse(['status' => 'Evenement créé!'], Response::HTTP_CREATED);
    }

    /**
     * @Route("/api/evenements/{id}", name="get_un_evenement", methods={"GET"})
     */
    public function getEvent($id): JsonResponse
    {
        if (is_numeric($id)) {
            $evenement = $this->evenementRepository->findOneBy(['id' => $id]);
        } else {
            $evenement = $this->evenementRepository->findOneBy(['nom' => $id]);
        }

        $data = [
            'id' => $evenement->getId(),
            'nom' => $evenement->getNom(),
            'periode' => $evenement->getPeriode(),
            'lieu' => $evenement->getLieu(),
            'lutte' => $evenement->getLutte(),
            'strategie' => $evenement->getStrategie(),
            'action' => $evenement->getAction(),
            'victoire' => $evenement->getVictoire(),
            'anecdote' => $evenement->getAnecdote(),
            'citation' => $evenement->getCitation(),
            'question' => $evenement->getQuestion(),
            'reponse1' => $evenement->getReponse1(),
            'reponse2' => $evenement->getReponse2(),
            'reponse3' => $evenement->getReponse3(),
            'video' => $evenement->getVideo(),
            'article' => $evenement->getArticle(),
        ];

        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * @Route("/api/evenements/", name="get_tous_evenements", methods={"GET"})
     */
    public function getAllEvent(): JsonResponse
    {
        $evenements = $this->evenementRepository->findAll();
        $data = [];

        foreach ($evenements as $evenement) {
            $data[] = [
                'id' => $evenement->getId(),
                'nom' => $evenement->getNom(),
                'periode' => $evenement->getPeriode(),
                'lieu' => $evenement->getLieu(),
                'lutte' => $evenement->getLutte(),
                'strategie' => $evenement->getStrategie(),
                'action' => $evenement->getAction(),
                'victoire' => $evenement->getVictoire(),
                'anecdote' => $evenement->getAnecdote(),
                'citation' => $evenement->getCitation(),
                'question' => $evenement->getQuestion(),
                'reponse1' => $evenement->getReponse1(),
                'reponse2' => $evenement->getReponse2(),
                'reponse3' => $evenement->getReponse3(),
                'video' => $evenement->getVideo(),
                'article' => $evenement->getArticle(),
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * @Route("/api/evenements/update/{id}", name="update_evenement", methods={"PUT"})
     */
    public function updateEvent($id, Request $request): JsonResponse
    {
        if (is_numeric($id)) {
            $evenement = $this->evenementRepository->findOneBy(['id' => $id]);
        } else {
            $evenement = $this->evenementRepository->findOneBy(['nom' => $id]);
        }
        $data = json_decode($request->getContent(), true);

        empty($data['nom']) ? true : $evenement->setNom($data['nom']);
        empty($data['periode']) ? true : $evenement->setPeriode($data['periode']);
        empty($data['lieu']) ? true : $evenement->setLieu($data['lieu']);
        empty($data['lutte']) ? true : $evenement->setLutte($data['lutte']);
        empty($data['strategie']) ? true : $evenement->setStrategie($data['strategie']);
        empty($data['action']) ? true : $evenement->setAction($data['action']);
        empty($data['victoire']) ? true : $evenement->setVictoire($data['victoire']);
        empty($data['anecdote']) ? true : $evenement->setAnecdote($data['anecdote']);
        empty($data['citation']) ? true : $evenement->setCitation($data['citation']);
        empty($data['question']) ? true : $evenement->setQuestion($data['question']);
        empty($data['reponse1']) ? true : $evenement->setReponse1($data['reponse1']);
        empty($data['reponse2']) ? true : $evenement->setReponse2($data['reponse2']);
        empty($data['reponse3']) ? true : $evenement->setReponse3($data['reponse3']);
        empty($data['video']) ? true : $evenement->setVideo($data['video']);
        empty($data['article']) ? true : $evenement->setArticle($data['article']);

        $updatedEvenement = $this->evenementRepository->updateEvenement($evenement);

        return new JsonResponse($updatedEvenement->toArray(), Response::HTTP_OK);
    }

    /**
     * @Route("/api/evenements/delete/{id}", name="delete_evenement", methods={"DELETE"})
     */
    public function deleteEvent($id): JsonResponse
    {
        if (is_numeric($id)) {
            $evenement = $this->evenementRepository->findOneBy(['id' => $id]);
        } else {
            $evenement = $this->evenementRepository->findOneBy(['nom' => $id]);
        }

        $this->evenementRepository->removeEvenement($evenement);

        return new JsonResponse(['status' => 'Evenement deleted'], Response::HTTP_NO_CONTENT);
    }

    /**
     * @Route("/api/quizz/{id}", name="get_quizz", methods={"GET"})
     */
    public function getQuizz($id): JsonResponse
    {
        if (is_numeric($id)) {
            $evenement = $this->evenementRepository->findOneBy(['id' => $id]);
        } else {
            $evenement = $this->evenementRepository->findOneBy(['nom' => $id]);
        }

        $data = [
            'id' => $evenement->getId(),
            'nom' => $evenement->getNom(),
            'question' => $evenement->getQuestion(),
            'reponse1' => $evenement->getReponse1(),
            'reponse2' => $evenement->getReponse2(),
            'reponse3' => $evenement->getReponse3(),
        ];

        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * @Route("/api/quizz/", name="get_tous_quizz", methods={"GET"})
     */
    public function getAllQuizz(): JsonResponse
    {
        $evenements = $this->evenementRepository->findAll();
        $data = [];

        foreach ($evenements as $evenement) {
            $data[] = [
                'id' => $evenement->getId(),
                'nom' => $evenement->getNom(),
                'question' => $evenement->getQuestion(),
                'reponse1' => $evenement->getReponse1(),
                'reponse2' => $evenement->getReponse2(),
                'reponse3' => $evenement->getReponse3(),
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * @Route("/api/startQuizz/", name="get_ordre_quizz", methods={"GET"})
     */
    public function getOrdreQuizz(): JsonResponse
    {
        $number = range(1, 40);
        shuffle($number);
        $data = array_slice($number, 0, 20, false);

        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * @Route("/api/resultats/add/", name="update_resultats", methods={"POST"})
     * @param Request $request
     * @return JsonResponse
     */
    /*public function addResultats(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $idSession = $data['idSession'];
        for($i=1;$i<40;$i++){
            '$reponse'.$i.' = $data[reponse'.$i.'];';
        }
        $reponse40=$data['reponse40'];

        $reponseGroupe = "";
        for($i=1;$i<40;$i++)
            {$reponseGroupe.= '$reponse'.$i.', ';}
        $this->resultatsRepository->saveResultats($idSession, $reponseGroupe, $reponse40);

        return new JsonResponse(['status' => 'Résultats ajoutés!'], Response::HTTP_CREATED);
    }*/
}
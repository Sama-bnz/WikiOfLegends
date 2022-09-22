<?php

namespace App\Controller\admin;

use App\Repository\ChampionsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminChampionsController extends AbstractController
{
    /**
     * Cette fonction va permettre d'afficher la liste de toutes les prestations
     * @Route("/admin/list/champions", name="admin_list_champions")
     */
    public function listChampions(ChampionsRepository $championsRepository)
    {
        //FindAll permet de sélectionner tous les éléments d'une liste
        $categories = $championsRepository->findAll();
        return $this->render('admin/list_champions.html.twig', [
            'champions' => $champions
        ]);
    }

}
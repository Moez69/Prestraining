<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\DeveloperRepository;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Developer;
use App\service\update;

class FileController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(update $update)
    {   
        
        return $this->render('file/home.html.twig');
        
           if($update->getmessage()==true)
          {
            return $this->redirectToRoute('file');
          }
    }

    /**
     * @Route("/file", name="file")
     */
    public function index(DeveloperRepository $DeveloperRepository)
    {   
        $developers_reports = $DeveloperRepository->findAll();
        return $this->render('file/show.html.twig', [
            'developers_reports' => $developers_reports]);
    }
    
}

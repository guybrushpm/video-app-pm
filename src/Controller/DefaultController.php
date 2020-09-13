<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    public function index()
    {
        $videos = [
              'video1' => ['name' => 'Sweeping Arches and Loops', 'file' => 'video1.mp4'],
              'video2' => ['name' => 'Black Holes Dancing with Stars', 'file' => 'video2.mp4']
              ];

        return $this->render('homepage.html.twig', ['videos' => $videos]);
    }
}

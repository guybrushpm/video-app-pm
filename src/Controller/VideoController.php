<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VideoController extends AbstractController
{
    public function index($video)
    {
        $paths = [
            'videos' => '/videofiles/',
            'player' => '/static/plyr/'
            ];
        $videos = [
            'video1' => ['name' => 'Sweeping Arches and Loops', 'file' => 'video1.mp4'],
            'video2' => ['name' => 'Black Holes Dancing with Stars', 'file' => 'video2.mp4']
         ];

         $videodata = $videos[$video];

        return $this->render('video.html.twig', ['videodata' => $videodata,  'paths' => $paths]);
    }
}

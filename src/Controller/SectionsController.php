<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Video;

class SectionsController extends AbstractController {

  public function index(Video $video, Request $request) {

    return $this->render('sections/home.twig');

    $cur_page = (Int) $request->query->get('page');
    $per_page = 4;
    $response = $video->lastVideos($cur_page, $per_page);

    return $this->render('sections/home.twig', [
      'videos' => $response,
      'cur_page' => $cur_page,
      'next_page' => $cur_page+1,
      'prev_page' => $cur_page-1
    ]);
  }

}

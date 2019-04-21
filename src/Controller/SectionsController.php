<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Menu;

class SectionsController extends AbstractController
{
  public function index(Request $request)
  {
    $menu = $this->getDoctrine()
    ->getRepository(Menu::class)
    ->findByMenuTypeName('navbar');
    
    return $this->render('pages/_home.twig', [
      'header' => [
        'menu' => []//$menu
      ],
      'config' => [
        'img_dir' => '/img',
        'js_dir' => '/js',
        'fonts' => '/fonts',
        'css_dir' => '/css'
      ],
      'site' => [
        'name' => 'CrisDev',
        'slogan' => 'Desarrollo de software',
        'description' => 'Sitios web, aplicaciones móviles y sistemas de información profesionales.'
      ]
    ]);
  }
}

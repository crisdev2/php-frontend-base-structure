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
    
    return $this->render('base.twig', [
      'header' => [
        'menu' => $menu
      ],
      'config' => [
        'img_dir' => '/img',
        'js_dir' => '/js',
        'fonts' => '/fonts',
        'css_dir' => '/css'
      ],
      'site' => [
        'name' => 'Lorem',
        'slogan' => 'The best php-frontend structure!'
      ]
    ]);
  }
}

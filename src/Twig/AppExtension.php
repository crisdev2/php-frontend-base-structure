<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use phpDocumentor\Reflection\Types\Mixed_;

class AppExtension extends AbstractExtension {

  public function getFunctions() {
    return [
      new TwigFunction('render_media', [
        $this,
        'renderMedia'
      ]),
      new TwigFunction('render_duration', [
        $this,
        'renderDuration'
      ])
      
    ];
  }

  public function renderMedia(string $path) {
    return getenv('API_URI') . $path;   
  }
  
  public function renderDuration($duration) {
    if(!is_array($duration) OR empty($duration['seconds'])){
      return null;
    }
    if($duration['seconds'] >= (60*60)){
      return gmdate('H:i:s', $duration['seconds']);
    }else{
      return gmdate('i:s', $duration['seconds']);
    }
  }

}
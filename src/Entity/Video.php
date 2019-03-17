<?php
namespace App\Entity;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Api\BackRequest;

class Video extends AbstractController {

  public function lastVideos(Int $cur_page, Int $per_page) {
    $query = [
      'include' => 'youtubers,thumbnail,preview',
      'fields[youtubers]' => 'path,nid,title',
      'fields[videos]' => 'path,nid,title,thumbnail,preview,youtubers,duration',
      'page[limit]' => $per_page,
      'page[offset]' => ($per_page * $cur_page),
      'sort' => '-created'
    ];

    return BackRequest::request('node/videos', $query);

  }

}

<?php

namespace Songhub\App\Controllers;

use Songhub\app\repositories\CoverRepository;
use Songhub\core\Controller;


class CoverController extends Controller
{

    public function __construct()
    {
        $this->repositoryName = CoverRepository::class;
        parent::__construct();
    }

    public function createCover($content)
    {


        $cover["SMALL_COVER_URL"] = $content["images"][0]["url"];
        $cover["MEDIUM_COVER_URL"] = $content["images"][1]["url"];
        $cover["LARGE_COVER_URL"] = $content["images"][2]["url"];


        if (!$this->repository->existsCover($cover["SMALL_COVER_URL"])) {
            $this->repository->createCover($cover);
        }
    }
}

<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Author;
use App\Info;
use App\Services;
use App\Services_date;
use App\Review;
use App\Portfolio;
use App\Differences;
use App\Price_section;
use App\Pricelist;

class MainController extends Controller
{
    public function getInfoForMainPage(){
        $auth = new Author;
        $auth_info = $auth->getAuthorInfo();

        $info = new Info;
        $info = $info->getInfo();

        $service = new Services();
        $service = $service->getServiceInfo();

        $service_phrase = new Services_date;
        $service1_phrase = $service_phrase->getServicePhrases(1);
        $service2_phrase = $service_phrase->getServicePhrases(2);
        $service3_phrase = $service_phrase->getServicePhrases(3);

        $reviews = new Review();
        $reviews = $reviews->getReviews();

        $photos = new Portfolio();
        $photos = $photos->getPhotos();

        $diff = new Differences();
        $diff = $diff->getDiff();

        return view('welcome', ['auth' => $auth_info, 'info' => $info, 'services' => $service,
            'service1' => $service1_phrase, 'service2' => $service2_phrase, 'service3' => $service3_phrase,
            'reviews' => $reviews, 'photos' => $photos, 'diff' => $diff]);
    }

    public function getPricelist(){
        if(isset($_POST['select'])){
            $id = $_POST['select'];
        }
        else{
            $id = 1; /*Изменить!! Вытащить первую запись и определить ее id*/
        }

        $sect = new Price_section();
        $section = $sect->getPriceSection($id);
        $sections = $sect->getAllSections();

        $pricelist = new Pricelist();
        $pricelist = $pricelist->getPricelist($id);


        return view('pricelist', ['section' => $section, 'all_sections' => $sections,
            'pricelist' => $pricelist]);

    }
}
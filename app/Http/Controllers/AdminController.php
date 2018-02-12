<?php
namespace App\Http\Controllers;
session_start();

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
use App\Main_photos;

class AdminController extends Controller
{
    public function showMainPage(){

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

        $header_photos = new Main_photos();
        $header_photos = $header_photos->getPhotos();


        if (isset($_SESSION['admin']))
            return view('admin', ['auth' => $auth_info, 'info' => $info, 'services' => $service,
                'service1' => $service1_phrase, 'service2' => $service2_phrase, 'service3' => $service3_phrase,
                'reviews' => $reviews, 'photos' => $photos, 'diff' => $diff, 'main_photos' => $header_photos]);

        else return view('empty');
    }

    public function changeHeader(Request $request){
        $info = new Info();
        $info = $info->getInfo();

        $info->setDesc($request->input('main-desc'));

        if($request->hasFile('main-image')) {
            $file = $request->file('main-image');
            $name = 'new'.rand().'.jpg';
            $file->move(public_path() . '/images/header', $name);
            $image = new Main_photos();
            $image->SetPhoto($name);
        }

        if ($request->input('radio-photo') != null)
            $info->photo = '/images/header/'.$request->input('radio-photo');

        $info->save();

        return redirect('/admin-panel');
    }


    public function delPhoto(Request $request){
        $photo = new Main_photos();
        $photo->DeletePhoto($request->input('id'));
        unlink(public_path('images/header/'.$request->input('id')));
    }

    public function changeAuthor(Request $request){
        $author = new Author();
        $author = $author->getAuthorInfo();

        $author->setName($request->input('auth-name'));
        $author->setText($request->input('auth-text'));

        if($request->hasFile('auth-image')) {
            $file = $request->file('auth-image');
            $name = '/images/portret.jpg';
            $file->move(public_path() . '/images/', $name);
            $author->setPhoto($name);
        }

        $author->save();

        return redirect('/admin-panel');
    }


}

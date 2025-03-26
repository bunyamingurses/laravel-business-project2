<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Controllers\support\functionController;
use App\Models\contact;
use App\Models\product;
use App\Models\productGallery;
use App\Models\project;
use App\Models\projectGallery;
use App\Models\services;
use App\Models\setting;
use Illuminate\Http\Request;

class indexTRController extends Controller
{
    public function indexTR()
    {
        return View("front.tr.index");
    }

    public function aboutTR()
    {
        return View("front.tr.business.about");
    }

    public function missionTR()
    {
        return View("front.tr.business.mission");
    }

    public function visionTR()
    {
        return View("front.tr.business.vision");
    }

    public function serviceTR()
    {
        return View("front.tr.service.index");
    }

    public function kvkkTR()
    {
        return View("front.tr.business.kvkk");
    }

    public function serviceDetailTR(Request $request)
    {
        if (isset($request->id)) {
            $id = functionController::security($request->id);
            $getService = services::find($id);
            if (isset($getService->id)) {
                return View("front.tr.service.detail", ["service" => $getService]);
            } else {
                return redirect(route("indexHtmlTR"));
            }
        }
    }

    public function portfolioTR()
    {
        return View("front.tr.portfolio.index");
    }

    public function portfolioDetailTR(Request $request)
    {
        if (isset($request->id)) {
            $id = functionController::security($request->id);
            $getPortfolio = project::find($id);
            if (isset($getPortfolio->id)) {
                $getGallery=projectGallery::where("projectId",$id)->get();
                return View("front.tr.portfolio.detail", ["portfolio" => $getPortfolio,"gallery"=>$getGallery]);
            } else {
                return redirect(route("indexHtmlTR"));
            }
        }
    }

    public function productTR()
    {
        return View("front.tr.product.index");
    }

    public function productDetailTR(Request $request)
    {
        if (isset($request->id)) {
            $id = functionController::security($request->id);
            $getProduct = product::find($id);
            if (isset($getProduct->id)) {
                $getGallery=productGallery::where("productId",$id)->get();
                return View("front.tr.product.detail", ["product" => $getProduct,"gallery"=>$getGallery]);
            } else {
                return redirect(route("indexHtmlTR"));
            }
        }
    }

    public function referenceTR()
    {
        return View("front.tr.reference");
    }

    public function contactTR()
    {
        return View("front.tr.contact");
    }

    public function contactPostTR(Request $request)
    {
        $request->validate(array(
            "name" => "required|max:50",
            "email" => "required|email",
            "subject" => "required|max:100",
            "message" => "required|max:250"
        ),array(
            "name.required"=>"İsim Alanı Boş Bırakılamaz","name.max"=>"İsim Alanı 50 karakterden fazla olamaz.",
            "email.required"=>"E-Posta alanı boş bırakılamaz.","email.email"=>"E-Posta alanına E-Posta girilmelidir.",
            "subject.required"=>"Konu alanı boş bırakılamaz.","subject.max"=>"Konu en fazla 100 karakterden oluşmalıdır.",
            "message.required"=>"Mesaj alanı boş bırakılamaz","message.max"=>"Mesaj alanı en fazla 250 karakter olmalıdır."
        ));



        $name=functionController::security($request->name);
        $email=functionController::security($request->email);
        $subject=functionController::security($request->subject);
        $message=functionController::security($request->message);

        $all=[
            "name"=>$name,
            "email"=>$email,
            "subject"=>$subject,
            "message"=>$message
        ];

        $create=contact::create($all);
        if ($create->id){
            return redirect()->back()->with("status","Mesajınız Başarıyla iletildi. En kısa zamanda dönüş yapılacaktır.");
        }else{
            return redirect()->back()->with("status","Mesajınız iletilemedi. Lütfen tekrar deneyin.");
        }
    }



    // Sitemap Start
    public function sitemap()
    {
        header('Content-type: Application/xml; charset="utf8"', true);
        $xml_path = setting::getSetting("siteUrl") . "/sitemap.xml";
        define("PATH", setting::getSetting("siteUrl"));

        $xml_output = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
        $xml_output .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9">';
        $xml_output .= "<url><loc>" . PATH . "/</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/index</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/index.html</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/hakkimda</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/hakkimda.html</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/misyon</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/misyon.html</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/vizyon</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/vizyon.html</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/urunler</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/urunler.html</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/hizmetler</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/hizmetler.html</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/projeler</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/projeler.html</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/iletisim</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/iletisim.html</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";


        $services = services::get();
        foreach ($services as $serviceWrite) {
            $xml_output .= "<url><loc>" . PATH . "/hizmetdetay/" . $serviceWrite->id . "-" . functionController::seo($serviceWrite->title) . ".html" . "</loc><lastmod>" . substr($serviceWrite->created_at, 0, 11) . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        }

        $product = product::get();
        foreach ($product as $productWrite) {
            $xml_output .= "<url><loc>" . PATH . "/urundetay/" . $productWrite->id . "-" . functionController::seo($productWrite->title) . ".html" . "</loc><lastmod>" . substr($productWrite->created_at, 0, 11) . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        }

        $project = project::get();
        foreach ($project as $projectWrite) {
            $xml_output .= "<url><loc>" . PATH . "/portfoliodetay/" . $projectWrite->id . "-" . functionController::seo($projectWrite->title) . ".html" . "</loc><lastmod>" . substr($projectWrite->created_at, 0, 11) . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        }


        $xml_output .= "</urlset>";


        print_r($xml_output);
    }

    // Sitemap Finish

}

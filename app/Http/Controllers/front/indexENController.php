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

class indexENController extends Controller
{
    public function indexEN()
    {
        return View("front.en.index");
    }

    public function aboutEN()
    {
        return View("front.en.business.about");
    }

    public function missionEN()
    {
        return View("front.en.business.mission");
    }

    public function visionEN()
    {
        return View("front.en.business.vision");
    }

    public function serviceEN()
    {
        return View("front.en.service.index");
    }

    public function kvkkEN()
    {
        return View("front.en.business.kvkk");
    }

    public function serviceDetailEN(Request $request)
    {
        if (isset($request->id)) {
            $id = functionController::security($request->id);
            $getService = services::find($id);
            if (isset($getService->id)) {
                return View("front.en.service.detail", ["service" => $getService]);
            } else {
                return redirect(route("indexHtmlEN"));
            }
        }
    }

    public function portfolioEN()
    {
        return View("front.en.portfolio.index");
    }

    public function portfolioDetailEN(Request $request)
    {
        if (isset($request->id)) {
            $id = functionController::security($request->id);
            $getPortfolio = project::find($id);
            if (isset($getPortfolio->id)) {
                $getGallery=projectGallery::where("projectId",$id)->get();
                return View("front.en.portfolio.detail", ["portfolio" => $getPortfolio,"gallery"=>$getGallery]);
            } else {
                return redirect(route("indexHtmlEN"));
            }
        }
    }



    public function productEN()
    {
        return View("front.en.product.index");
    }

    public function productDetailEN(Request $request)
    {
        if (isset($request->id)) {
            $id = functionController::security($request->id);
            $getProduct = product::find($id);
            if (isset($getProduct->id)) {
                $getGallery=productGallery::where("productId",$id)->get();
                return View("front.en.product.detail", ["product" => $getProduct,"gallery"=>$getGallery]);
            } else {
                return redirect(route("indexHtmlEN"));
            }
        }
    }

    public function referenceEN()
    {
        return View("front.en.reference");
    }

    public function contactEN()
    {
        return View("front.en.contact");
    }

    public function contactPostEN(Request $request)
    {
        $request->validate(array(
            "name" => "required|max:50",
            "email" => "required|email",
            "subject" => "required|max:100",
            "message" => "required|max:250"
        ),array(
            "name.required"=>"Name Field Cannot Be Left Blank","name.max"=>"Name Field cannot exceed 50 characters.",
            "email.required"=>"Email field cannot be left blank.","email.email"=>"E-Mail must be entered in the E-Mail field.",
            "subject.required"=>"Subject field cannot be left blank.","subject.max"=>"Subject must be 100 characters maximum.",
            "message.required"=>"Message field cannot be left blank","message.max"=>"The message field must be at most 250 characters.."
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
            return redirect()->back()->with("status","Your message has been successfully sent. We will get back to you as soon as possible.");
        }else{
            return redirect()->back()->with("status","Your message was not delivered. Please try again.");
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
        $xml_output .= "<url><loc>" . PATH . "/en/</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/en/index.html</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/en/about</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/en/about.html</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/en/mission</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/en/mission.html</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/en/vision</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/en/vision.html</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/en/products</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/en/products.html</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/en/services</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/en/services.html</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/en/portfolio</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/en/portfolio.html</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/en/contact</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        $xml_output .= "<url><loc>" . PATH . "/en/contact.html</loc><lastmod>" . date("Y-m-d") . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";


        $services = services::get();
        foreach ($services as $serviceWrite) {
            $xml_output .= "<url><loc>" . PATH . "/servicedetail/" . $serviceWrite->id . "-" . functionController::seo($serviceWrite->titleEnglish) . ".html" . "</loc><lastmod>" . substr($serviceWrite->created_at, 0, 11) . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        }

        $product = product::get();
        foreach ($product as $productWrite) {
            $xml_output .= "<url><loc>" . PATH . "/productdetail/" . $productWrite->id . "-" . functionController::seo($productWrite->titleEnglish) . ".html" . "</loc><lastmod>" . substr($productWrite->created_at, 0, 11) . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        }

        $project = project::get();
        foreach ($project as $projectWrite) {
            $xml_output .= "<url><loc>" . PATH . "/portfoliodetail/" . $projectWrite->id . "-" . functionController::seo($projectWrite->titleEnglish) . ".html" . "</loc><lastmod>" . substr($projectWrite->created_at, 0, 11) . "</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>";
        }


        $xml_output .= "</urlset>";


        print_r($xml_output);
    }

    // Sitemap Finish



}

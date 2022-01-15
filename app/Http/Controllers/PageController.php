<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\If_;
use App\Models\Slider;
use App\Models\Car;
use App\Models\About;
use App\Models\Featured;
use App\Models\Statistic;
use App\Models\Contact;
use App\Models\Subscribe;
use App\Models\News;
use App\Http\Requests\SubscribeRequest;
use App\Mail\Message;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function home(){
        $sliders=Slider::all();
        $cars=Car::limit(4)->get();
        $abouts=About::where('status', 1)->first();
        $featureds=Featured::where('status', 1)->get();
        $statistics=Statistic::where('status', 1)->limit(4)->get();
        $messages=Contact::where('status', 1)->get();

        return view('welcome',compact('sliders','cars','abouts','featureds','statistics','messages'));
    }
    public function about(){
        $abouts=About::where('status',1)->first();
        return view('about', compact('abouts'));
    }
    public function contact(Request $request){
        if ($request->isMethod('GET')) {
            return view('contact');
        }else{
            $message=<<<TEXT
                Murojaat qoldirildi!
                Murojaat qoldirgan shaxs ismi: {$request->name}
                Murojaat qoldirgan shaxs telefoni: {$request->phoneNumber}
                Murojaat qoldirgan shaxs emaili: {$request->email}
                Murojaat qoldirgan shaxs xabari: "{$request->message}"
            TEXT;
            $apiToken="2099151072:AAEyFEGlva5ht3VJxiIPY6e9zCqItPbuR8s";
            $dataT=[
                'chat_id' => '-1001768281254',
                'text' => $message,
            ];
            $response=file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .http_build_query($dataT));
            $data=$request->all();
            Mail::to('abduhalimabdulkhamidov@gmail.com')->send(new Message($data));
                Contact::create($request->all());
                return redirect()->route('home')->with('message', 'Murojaatingiz qoldirildi.');
                // bot token: 2099151072:AAEyFEGlva5ht3VJxiIPY6e9zCqItPbuR8s
                // chat id: -1001768281254
        }
    }

    public function cars(){

        $cars=Car::all();
        return view('cars', compact('cars'));
    }
    public function portfolio(){
        $featureds=Featured::where('status', 1)->get();
        return view('portfolio',compact('featureds'));
    }
    public function news(){
        $news=News::where('status', 1)->get();

        return view('news', compact('news'));
    }
    public function admin(){
        return view('admin.index');
    }
    public function subscribe(SubscribeRequest $request){
        if ($request->isMethod('GET')) {
            return redirect()->route('home');
        }else{
        $c=Subscribe::create($request->all());
        // dd($c);
         return redirect()->route('home');
            // return back();
        }
    }
}

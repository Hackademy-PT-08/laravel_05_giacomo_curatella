<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public $games = [
        [
            "id" => 1,
            "img" => "https://cdn.akamai.steamstatic.com/steam/apps/730/header.jpg?t=1683566799",
            "title" => "Counter-Strike: Global Offensive",
            "desc" => "Counter-Strike: Global Offensive (CS:GO) amplia il gameplay d'azione a squadre presentato per la prima volta 19 anni fa. CS:GO include nuove mappe, personaggi, armi e modalità di gioco e offre versioni aggiornate del classico contenuto di Counter-Strike (de_dust2, ecc.).",
            "price" => 14.29,
            "date" => "21 Ago 2012",
            "carousel" => [
                "https://cdn.akamai.steamstatic.com/steam/apps/730/ss_118cb022b9a43f70d2e5a2df7427f29088b6b191.600x338.jpg?t=1683566799",
                "https://cdn.akamai.steamstatic.com/steam/apps/730/ss_2b9e362287b509bb3864fa7bad654fe1fda0f7ed.600x338.jpg?t=1683566799",
                "https://cdn.akamai.steamstatic.com/steam/apps/730/ss_92c05c1cb1319beb15ed92c63b6b1d6f261d2f64.600x338.jpg?t=1683566799"
            ]
        ],
        [
            "id" => 2,
            "img" => "https://cdn.akamai.steamstatic.com/steam/apps/252490/header.jpg?t=1678981332",
            "title" => "Rust",
            "desc" => "The only aim in Rust is to survive. Everything wants you to die - the island’s wildlife and other inhabitants, the environment, other survivors. Do whatever it takes to last another night.",
            "price" => 39.99,
            "date" => "8 Feb 2018",
            "carousel" => [
                "https://cdn.akamai.steamstatic.com/steam/apps/252490/ss_271feae67943bdc141c1249aba116349397e9ba9.600x338.jpg?t=1678981332",
                "https://cdn.akamai.steamstatic.com/steam/apps/252490/ss_e825b087b95e51c3534383cfd75ad6e8038147c3.600x338.jpg?t=1678981332",
                "https://cdn.akamai.steamstatic.com/steam/apps/252490/ss_0e646f1a70e5cb8eed00efef8adb9579d40d5b2e.600x338.jpg?t=1678981332"
            ]
        ],
        [
            "id" => 3,
            "img" => "https://cdn.akamai.steamstatic.com/steam/apps/1282100/header.jpg?t=1689706767",
            "title" => "Remnant II",
            "desc" => "In Remnant II, sequel del gioco best-seller Remnant: From the Ashes, gli ultimi sopravvissuti dell'umanità devono affrontare una schiera di nuovi boss sovrumani e creature letali, esplorando mondi terrificanti.",
            "price" => 49.99,
            "date" => "25 Lug 2023",
            "carousel" => [
                "https://cdn.akamai.steamstatic.com/steam/apps/1282100/ss_00d09f2e2cc5eee5e3af45c6f158120deb0fcef3.600x338.jpg?t=1689706767",
                "https://cdn.akamai.steamstatic.com/steam/apps/1282100/ss_99a1020923f500c3f8668b67a2b5e04fa6eb7558.600x338.jpg?t=1689706767",
                "https://cdn.akamai.steamstatic.com/steam/apps/1282100/ss_04516c2d149e9089a1950bf84a51a9f92f30559d.600x338.jpg?t=1689706767"
            ]
        ],
        [
            "id" => 4,
            "img" => "https://cdn.akamai.steamstatic.com/steam/apps/1222670/header.jpg?t=1689364700",
            "title" => "The Sims™ 4",
            "desc" => "Acquisisci il potere di creare e controllare personaggi in un mondo virtuale dove non esistono regole. Goditi il potere e la libertà, divertiti e gioca con la vita!",
            "price" => "Free to Play",
            "date" => "2 Set 2014",
            "carousel" => [
                "https://cdn.akamai.steamstatic.com/steam/apps/1222670/ss_537683e5e29c2d6d02c64aa7321dcb26166f7d82.600x338.jpg?t=1689873354",
                "https://cdn.akamai.steamstatic.com/steam/apps/1222670/ss_2fc938d99a1e87893852cb2d2113478190607941.600x338.jpg?t=1689873354",
                "https://cdn.akamai.steamstatic.com/steam/apps/1222670/ss_b447d6436d2d00cd5e7c170e509b2246dfc879e8.600x338.jpg?t=1689873354"
            ]
        ]
    ];
    public function home(){
        return view('home');
    }

    public function index(){
        return view('product', ['games' => $this->games]);
    }

    public function contacts(){
        return view('contatti');
    }
    public function form(Request $request){
        $name = $request->name;
        $mail = $request->mail;
        $user_message = $request->user_message;

        try {
            Mail::to($mail)->send(new ContactMail($name, $mail, $user_message));
        } catch (Exception $error) {
            return redirect()->back()->with('emailNotSent', 'Errore durante l\'invio della mail, la preghiamo di riprovare più tardi!');
        }

        return redirect(route('home'))->with('emailSent', 'Email inviata con successo!');
    }
}

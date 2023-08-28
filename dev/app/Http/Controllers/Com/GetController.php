<?php

namespace App\Http\Controllers\Com;

use App\Http\Controllers\Controller;
use App\Struct\Link;
use App\{Article, Profile, Carousel, CarouselItem, Client, Page};

class GetController extends Controller
{
    public function articles($article_slug)
    {
        $article = Article::where('slug', $article_slug)->first();
        if ($article != NULL) {
            return view('pages.com.articles.display', [
                'article' => $article,
            ]);
        } else {
            return view('pages.com.articles.unknown');
        }
    }

    public function newsAndEvents()
    {
        $news_articles = Article::allNews();
        $event_articles = Article::allEvents();

        $news_links = [];
        $event_links = [];

        foreach ($news_articles as $article) {
            $news_links[] = new Link($article->title, url($article->getLocation()));
        }

        foreach ($event_articles as $article) {
            $event_links[] = new Link($article->title, url($article->getLocation()));
        }

        $context = [
            'news_links' => json_encode($news_links),
            'event_links' => json_encode($event_links)
        ];

        return view('pages.com.news-and-events', $context);
    }

    public function boardOfAdvisors()
    {
        $context = [
            'profiles' => Profile::where('page', 'board-of-advisors')->orderBy('ord', 'asc')->get()
        ];
        return view('pages.com.board-of-advisors', $context);
    }

    public function ceoCoo()
    {
        return view('pages.com.ceo-coo');
    }

    public function cfo()
    {
        return view('pages.com.cfo');
    }

    public function chro()
    {
        return view('pages.com.chro');
    }

    public function cioCto()
    {
        return view('pages.com.cio-cto');
    }

    public function compliance()
    {
        return view('pages.com.compliance');
    }

    public function dynamics()
    {
        return view('pages.com.dynamics');
    }

    public function e2()
    {
        return view('pages.com.e2');
    }

    public function engineeringConsulting()
    {
        return view('pages.com.engineering-consulting');
    }

    public function epicor()
    {
        return view('pages.com.epicor');
    }

    public function fishbowl()
    {
        return view('pages.com.fishbowl');
    }

    public function globalSupplyChain()
    {
        return view('pages.com.global-supply-chain');
    }

    public function globalshop()
    {
        return view('pages.com.globalshop');
    }

    public function home()
    {
        $context = [
            'carousel_obj' => Page::where('name', 'index')->first()->carousel,
            'portfolio_links' => json_encode([
                new Link('Our Clients', url('/our-clients')),
                new Link('Our Industries', url('/industries'))
            ]),
            'leadership_links' => json_encode([
                new Link('Officers', url('/officers')),
                new Link('Board of Advisors', url('/board-of-advisors')),
                new Link('Meet our Team', url('/meet-our-team'))
            ]),
            'about_links' => json_encode([
                new Link('Overview', url('/overview')),
                new Link('News & Events', url('/news-and-events')),
                new Link('Locations', url('/location'))
            ]),
            'service_links' => json_encode([
                new Link('Business Strategy', url('/overview')),
                new Link('Engineering Consulting', url('/engineering-consulting')),
                new Link('Human Capital', url('/human-capital')),
                new Link('Interim Executive', url('/interim-executive')),
                new Link('CEO/COO', url('/ceo-coo'), true),
                new Link('CHRO', url('/chro'), true),
                new Link('CFO', url('/cfo'), true),
                new Link('CIO/CTO', url('/cio-cto'), true),
                new Link('IT & Systems', url('/it-and-systems')),
                new Link('Lean/Six Sigma', url('/lean-six-sigma')),
                new Link('Project Management', url('/project-management')),
                new Link('Quality Systems', url('/quality-systems')),
                new Link('Sales & Marketing', url('/sales-and-marketing')),
                new Link('Security', url('/security')),
                new Link('Supply Chain', url('/supply-chain')),
                new Link('Import/Export', url('/import-export'), true),
                new Link('Compliance', url('/compliance'), true),
                new Link('Global Supply Chain', url('/global-supply-chain'), true)
            ])
        ];

        return view('pages.com.home', $context);
    }

    public function humanCapital()
    {
        return view('pages.com.human-capital');
    }

    public function importExport()
    {
        return view('pages.com.import-export');
    }

    public function industries()
    {
        return view('pages.com.industries');
    }

    public function infor()
    {
        return view('pages.com.infor');
    }

    public function interimExecutive()
    {
        return view('pages.com.interim-executive');
    }

    public function iqms()
    {
        return view('pages.com.iqms');
    }

    public function iso9000()
    {
        return view('pages.com.iso9000');
    }

    public function itAndSystems()
    {
        return view('pages.com.it-and-systems');
    }

    public function jdedwards()
    {
        return view('pages.com.jdedwards');
    }

    public function leanSixSigma()
    {
        $context = [
            'carousel_obj' => Page::where('name', 'lean-six-sigma')->first()->carousel
        ];
        return view('pages.com.lean-six-sigma', $context);
    }

    public function location()
    {
        return view('pages.com.location');
    }

    public function meetOurTeam()
    {
        $context = [
            'profiles' => Profile::where('page', 'meet-our-team')->orderBy('ord', 'asc')->get()
        ];
        return view('pages.com.meet-our-team', $context);
    }

    public function officers()
    {
        $context = [
            'profiles' => Profile::where('page', 'officers')->orderBy('ord', 'asc')->get()
        ];

        return view('pages.com.officers', $context);
    }

    public function ourClients()
    {
        $context = [
            'clients' => Client::orderBy('name', 'asc')->get()
        ];
        return view('pages.com.our-clients', $context);
    }

    public function overview()
    {
        return view('pages.com.overview');
    }

    public function privacyPolicy()
    {
        return view('pages.com.privacy-policy');
    }

    public function problemSolving()
    {
        return view('pages.com.problem-solving');
    }

    public function projectManagement()
    {
        return view('pages.com.project-management');
    }

    public function qualitySystems()
    {
        $context = [
            'carousel_obj' => Page::where('name', 'quality-systems')->first()->carousel
        ];
        return view('pages.com.quality-systems', $context);
    }

    public function salesAndMarketing()
    {
        return view('pages.com.sales-and-marketing');
    }

    public function sap()
    {
        return view('pages.com.sap');
    }

    public function security()
    {
        return view('pages.com.security');
    }

    public function supplyChainExamples()
    {
        return view('pages.com.supply-chain-examples');
    }

    public function supplyChain()
    {
        return view('pages.com.supply-chain');
    }

    public function syspro()
    {
        return view('pages.com.syspro');
    }

    public function traverse()
    {
        return view('pages.com.traverse');
    }
}

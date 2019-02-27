<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        //check main.blade.php, the ensted foreach loop and add the remaining dropdowns
        $dropdowns = [
            'dropdown1' => ['اﻟﺘﺎﺭﻳﺦ', 'اﻟﻤﻤﻴﺰاﺕ ﻭ اﻟﺨﺼﺎﺋﺺ', 'ﻣﺪﻳﻮﻧﺔ ﺑﺎﻷﺭﻗﺎﻡ', 'ﻣﺪﻳﻮﻧﺔ ﻓﻲ ﺻﻮﺭ'],
            'dropdown2' => ['ﻣﻜﺘﺐ اﻟﻤﺠﻠﺲ', 'ﻛﻠﻤﺔ اﻟﺮﺋﻴﺲ', 'اﻟﻤﺸﺎﺭﻳﻊ', 'ﺃﻧﺸﻄﺔ اﻟﻤﺠﻠﺲ'],
            'dropdown3' => ['ﻣﻜﺘﺐ اﻟﻤﺠﻠﺲ', 'ﻛﻠﻤﺔ اﻟﺮﺋﻴﺲ', 'اﻟﻤﺸﺎﺭﻳﻊ', 'ﺃﻧﺸﻄﺔ اﻟﻤﺠﻠﺲ'],
            'dropdown4' => ['ﻣﻜﺘﺐ اﻟﻤﺠﻠﺲ', 'ﻛﻠﻤﺔ اﻟﺮﺋﻴﺲ', 'اﻟﻤﺸﺎﺭﻳﻊ', 'ﺃﻧﺸﻄﺔ اﻟﻤﺠﻠﺲ'],
            'dropdown5' => ['ﻣﻜﺘﺐ اﻟﻤﺠﻠﺲ', 'ﻛﻠﻤﺔ اﻟﺮﺋﻴﺲ', 'اﻟﻤﺸﺎﺭﻳﻊ', 'ﺃﻧﺸﻄﺔ اﻟﻤﺠﻠﺲ'],
            'dropdown6' => ['ﻣﻜﺘﺐ اﻟﻤﺠﻠﺲ', 'ﻛﻠﻤﺔ اﻟﺮﺋﻴﺲ', 'اﻟﻤﺸﺎﺭﻳﻊ', 'ﺃﻧﺸﻄﺔ اﻟﻤﺠﻠﺲ']
        ];
        
        $navs = ['dropdown1' => 'مديونة ', 'dropdown2' => 'ﻓﻀﺎء اﻟﻤﻮاﻃﻨﻴﻦ', 'dropdown3' => 'اﻟﻤﺸﺎﺭﻳﻊ اﻟﺘﻨﻤﻮﻳﺔ', 'dropdown4'=>'اﻟﻤﺠﻠﺲ' , 'dropdown5' => 'اﻟﺠﻤﻌﻴﺎﺕ ', 'dropdown6' => 'ﺇﻗﺘﺼﺎﺩ ' ];

        return view('index', [
            'navs' => $navs,
            'dropdowns' => $dropdowns,
            'active' => 'الرئيسية '
        ]);
    }
}


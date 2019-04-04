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
            'dropdown2' => ['ﻣﻜﺘﺐ اﻟﻤﺠﻠﺲ  ', 'ﻛﻠﻤﺔ اﻟﺮﺋﻴﺲ'  ,'اﻟﻤﺸﺎﺭﻳﻊ ','اﻧﺸﻄﺔ اﻟﻤﺠﻠﺲ'],
            'dropdown3' => ['اﺟﺘﻤﺎﻋﻴﺔ  ', 'ﺛﻘﺎﻓﻴﺔ ', 'ﺭﻳﺎﺿﻴﺔ ' ],
            'dropdown4' => [' ﺃﺟﻨﺪﺓ  ﻣﺪﻳﻮﻧﺔ ','ﻣﺴﺎﻃﺮ ﺇﺩاﺭﻳﺔ  ' ,  'ﺧﺪﻣﺎ ﺕ' ],
            'dropdown5' => ['ﺟﻤﻌﻴﺎﺕ ﻣﺪﻳﻮﻧﺔ','  ﻓﻀﺎءاﺕ ﻣﺪﻳﻮﻧﺔ   ','ﻣﻨﺢ اﻟﺠﻤﻌﻴﺎﺕ'],
           'dropdown6' => ['اﻗﺘﺼﺎﺩ ﻣﺪﻳﻮﻧﺔ ', 'ﻃﻠﺒﺎﺕ اﻟﻌﺮﻭﺽ', 'ﻋﺮﻭﺽ اﻟﻌﻤﻞ ']
         
           
        ];
        
        $navs = ['dropdown1' => 'ﻣﺪﻳﻮﻧﺔ ', 'dropdown2' => 'اﻟﻤﺠﻠﺲ   ', 'dropdown3' => 'اﻟﻤﺸﺎﺭﻳﻊ اﻟﺘﻨﻤﻮﻳﺔ    ' , 'dropdown4'=>'ﻓﻀﺎء اﻟﻤﻮاﻃﻨﻴﻦ  ' , 'dropdown5' => 'اﻟﺠﻤﻌﻴﺎﺕ  ',  'dropdown6' => 'اﻗﺘﺼﺎﺩ  '];

        return view('index', [
            'navs' => $navs,
            'dropdowns' => $dropdowns,
            'active' => 'اﻟﺮﺋﻴﺴﻴﺔ '
        ]);
        
    }
}


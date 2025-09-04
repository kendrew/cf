<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;



class CfController extends BaseController
{
	

	public function display_home_page(Request $request){	


				$data = [	
    	  			
    	  			];

		 return view("pages.cf_home_page", $data); 
	}
	
	
	public function display_single_company(Request $request, $slug){	


				$data = [	
    	  			
    	  			];

		 return view("pages.cf_company_single", $data); 
	}
	
	
	
}//end controller
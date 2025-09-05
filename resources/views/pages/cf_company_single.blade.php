@extends('layouts.default')

	@section('metadata')
    	<title></title>
    	<meta name="description" content="">		 
	@endsection
	
    
    
    
    
@section('content')



<div class="flex min-h-full flex-col" style="background-color:#f7f7f7;padding-bottom:150px;">


  <!-- 3 column wrapper -->
  <div class="mx-auto w-full max-w-7xl grow lg:flex xl:px-2">
    <!-- Left sidebar & main wrapper -->
    <div class="flex-1 xl:flex">
      <div class="px-4 py-6 sm:px-6 lg:pl-8 xl:flex-1 xl:pl-6">
        <!-- Main area -->
        <!-- start header -->
		<div class="overflow-hidden rounded-lg bg-white shadow-sm dark:bg-gray-900 dark:shadow-none dark:outline dark:-outline-offset-1 dark:outline-white/10">
		  <h2 id="profile-overview-title" class="sr-only">Profile Overview</h2>
		  <div class="bg-white p-6 dark:bg-gray-800/75">
			<div class="sm:flex sm:items-center sm:justify-between">
			  <div class="sm:flex sm:space-x-5">
				<div class="shrink-0">
				  <img src="{{ asset('images/company-filer-icon.jpg') }}" alt="" class="rounded-md mx-auto size-20  dark:outline dark:-outline-offset-1 dark:outline-white/10" />
				</div>
				<div class="mt-4 text-center sm:mt-0 sm:pt-1 sm:text-left">
			 
			         <p class="text-xs text-gray-500 uppercase tracking-wide">Company Profile</p>
				  <h1 class="text-xl font-bold text-gray-900 sm:text-2xl dark:text-white">Motion In Pictures Pte Ltd</h1>
				  <p class="text-sm font-bold text-gray-600 dark:text-gray-400 ">Singapore</span></p>
				</div>
			  </div>
			  <div class="mt-5 flex justify-center sm:mt-0">
			  </div>
			</div>
		  </div>
		</div>
		<!-- end header -->
		
		
		<!-- top nav bar -->
		<nav class="flex space-x-6 border-b border-gray-200 pb-2 mt-6" style="margin-top:50px">
		  <a href="#overview" class="cf-submenu text-teal-600 border-b-2 border-teal-600 font-semibold pb-2">
			Overview
		  </a>
		  <a href="#contact" class="cf-submenu text-gray-600 hover:text-teal-500 hover:border-teal-500 border-b-2 border-transparent pb-2 transition">
			Contact Info
		  </a>
		  <a href="#pricing" class=" cf-submenu text-gray-600 hover:text-teal-500 hover:border-teal-500 border-b-2 border-transparent pb-2 transition">
			Reviews
		  </a>
		  <a href="#contact" class="cf-submenu text-gray-600 hover:text-teal-500 hover:border-teal-500 border-b-2 border-transparent pb-2 transition">
			Jobs
		  </a>
		</nav>
		<!-- end top nav bar -->


        
        <!-- start details section -->      
        <div style="margin-top:70px;">
        
        
        <div class="text-center mb-10">
		  <p class="text-sm font-medium text-gray-500  tracking-wide">
		   Company's Registered Information
		  </p>
		  <h2 class="mt-1 text-3xl font-bold text-gray-900 dark:text-white">
			Company Details
		  </h2>
		  <div class="mt-3 w-16 h-1 bg-teal-500 rounded-full mx-auto"></div>
		</div>
        
        
          @if(0)
		  <div class="px-4 sm:px-0">
			<h3 class="text-base/7 font-semibold text-gray-900 dark:text-white">Company Details</h3>
			    <p class="mt-1 max-w-2xl text-sm/6 text-gray-500 dark:text-gray-300">Company's registered information and contact information.</p>
		  </div>
		  @endif
		  <div class="mt-6 border-t border-gray-100 dark:border-white/5">
			<dl class="divide-y divide-gray-100 dark:divide-white/5">
			  <div class="bg-gray-50 px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-3 dark:bg-gray-800/25">
				<dt class="text-sm/6 font-medium text-gray-900 dark:text-white">Company Name</dt>
				<dd class="mt-1 text-sm/6 text-black sm:col-span-2 sm:mt-0 dark:text-gray-400">Motion In Pictures Pte Ltd</dd>
			  </div>
			  <div class="bg-white px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-3 dark:bg-gray-900">
				<dt class="text-sm/6 font-medium text-gray-900 dark:text-white">Business Registration Number
				 	<p class="mt-1 text-xs text-black dark:text-gray-400">
  					Unique Entity Number (UEN)
  					</p>
  					
				</dt>
				<dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0 dark:text-gray-400">202215027D</dd>
			  </div>
			  <div class="bg-gray-50 px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-3 dark:bg-gray-800/25">
				<dt class="text-sm/6 font-medium text-gray-900 dark:text-white">Registered Address</dt>
				<dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0 dark:text-gray-400">
					326 SMITH STREET <br/>
					#15-23 NEW BRIDGE CENTRE<br/>
					SINGAPORE 021536

				</dd>
			  </div>
			  <div class="bg-white px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-3 dark:bg-gray-900">
				<dt class="text-sm/6 font-medium text-gray-900 dark:text-white">Operating Status</dt>
				<dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0 dark:text-gray-400">Live Company</dd>
			  </div>
			  <div class="bg-gray-50 px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-3 dark:bg-gray-800/25">
				<dt class="text-sm/6 font-medium text-gray-900 dark:text-white">Company Type</dt>
				<dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0 dark:text-gray-400">Private Limited</dd>
			  </div>
			  <div class="bg-white px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-3 dark:bg-gray-900">
				<dt class="text-sm/6 font-medium text-gray-900 dark:text-white">Date Of Incorporation</dt>
				<dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0 dark:text-white">
				  5th July 2022
				</dd>
			  </div>
			  
			  <div class="bg-white px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-3 dark:bg-gray-900">
				<dt class="text-sm/6 font-medium text-gray-900 dark:text-white">Company Age</dt>
				<dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0 dark:text-white">
				  3 Years 2 Months
				</dd>
			  </div>
			  
			  
			</dl>
		  </div>
		</div>



          <!-- end details section-->     
          
          <!-- start activity section -->      
        <div style="margin-top:120px;">
        
        
        <div class="text-center mb-10">
		  <p class="text-sm font-medium text-gray-500  tracking-wide">
		  What Does The Company Do
		  </p>
		  <h2 class="mt-1 text-3xl font-bold text-gray-900 dark:text-white">
			Company Industry
		  </h2>
		  <div class="mt-3 w-16 h-1 bg-teal-500 rounded-full mx-auto"></div>
		</div>
        
    
		  <div class="mt-6 border-t border-gray-100 dark:border-white/5">
			<dl class="divide-y divide-gray-100 dark:divide-white/5">
			 
			  <div class="bg-gray-50 px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-3 dark:bg-gray-800/25">
				<dt class="text-sm/6 font-medium text-gray-900 dark:text-white">Primary Business Activity</dt>
				<dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0 dark:text-gray-400">
					<a href="#">MANAGEMENT CONSULTANCY SERVICES N.E.C. </a>

				</dd>
			  </div>
			  <div class="bg-gray-50 px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-3 dark:bg-gray-800/25">
				<dt class="text-sm/6 font-medium text-gray-900 dark:text-white">Primary Business Activity SSIC Code
					
				</dt>
				<dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0 dark:text-gray-400">
					70209

				</dd>
			  </div>
			  
			  
			  
			  <div class="bg-white px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-3 dark:bg-gray-900">
				<dt class="text-sm/6 font-medium text-gray-900 dark:text-white">Secondary Business Activity</dt>
				<dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0 dark:text-gray-400">
					<a href="#">TRAVEL AGENCIES AND TOUR OPERATORS (MAINLY INBOUND)</a>
				</dd>
			  </div>
			  <div class="bg-white px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-3 dark:bg-gray-900">
				<dt class="text-sm/6 font-medium text-gray-900 dark:text-white">Secondary Business Activity SSIC Code</dt>
				<dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0 dark:text-gray-400">79101</dd>
			  </div>
			
			</dl>
		  </div>
		</div>
			<p class="mt-1 text-xs text-black dark:text-gray-400">
  						Singapore Standard Industrial Classification (SSIC)
  					</p>


          <!-- end activity section-->   
          
          <a name="contact"></a>
           <!-- start contact section -->      
        <div style="margin-top:120px;">
        
        
        <div class="text-center mb-10">
		  <p class="text-sm font-medium text-gray-500  tracking-wide">
		  How To Reach The Company
		  </p>
		  <h2 class="mt-1 text-3xl font-bold text-gray-900 dark:text-white">
			Contact Information
		  </h2>
		  <div class="mt-3 w-16 h-1 bg-teal-500 rounded-full mx-auto"></div>
		</div>
        
    
		  <div class="mt-6 border-t border-gray-100 dark:border-white/5">
			<dl class="divide-y divide-gray-100 dark:divide-white/5">
			
			  <div class="bg-gray-50 px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-3 dark:bg-gray-800/25">
				<dt class="text-sm/6 font-medium text-gray-900 dark:text-white">Registered Address</dt>
				<dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0 dark:text-gray-400">
					326 SMITH STREET <br/>
					#15-23 NEW BRIDGE CENTRE<br/>
					Singapore 021536

				</dd>
			  </div>
			  <div class="bg-white px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-3 dark:bg-gray-900">
				<dt class="text-sm/6 font-medium text-gray-900 dark:text-white">Contact Number</dt>
				<dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0 dark:text-gray-400">+65 98765432</dd>
			  </div>
			  <div class="bg-gray-50 px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-3 dark:bg-gray-800/25">
				<dt class="text-sm/6 font-medium text-gray-900 dark:text-white">Website</dt>
				<dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0 dark:text-gray-400">https://www.motioninpteltd.com.sg</dd>
			  </div>
			
			</dl>
		  </div>
		</div>



          <!-- end contact section-->       
        
        
        
        
        
        
        
        
      </div>
    </div>

    <div class="shrink-0 border-t border-gray-200 px-4 py-6 sm:px-6 lg:w-96 lg:border-t-0 lg:border-l lg:pr-8 xl:pr-6 dark:border-white/10">
      <!-- Right column area -->
      Right Column
    </div>
  </div>
</div>







@stop
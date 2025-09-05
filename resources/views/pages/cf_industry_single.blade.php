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
			 
			         <p class="text-xs text-gray-500 uppercase tracking-wide">Company Industry & Business Activity</p>
				  <h1 class="text-xl font-bold text-gray-900 sm:text-2xl dark:text-white">MANAGEMENT CONSULTANCY SERVICES N.E.C.</h1>
				  <p class="text-sm font-bold text-gray-600 dark:text-gray-400 ">Singapore</span></p>
				</div>
			  </div>
			  <div class="mt-5 flex justify-center sm:mt-0">
			  </div>
			</div>
		  </div>
		</div>
		<!-- end header -->
		
		
	


        
        <!-- start details section -->      
        <div style="margin-top:70px;">
        
        
        <div class="text-center mb-10">
		  <p class="text-sm font-medium text-gray-500  tracking-wide">
		  Primary & Secondary Business Activity 
		  </p>
		  <h2 class="mt-1 text-xl font-bold mx-auto text-gray-900 dark:text-white" style="max-width:550px;">
			Companies Whose Core Business Is MANAGEMENT CONSULTANCY SERVICES N.E.C.
		  </h2>
		  <div class="mt-3 w-16 h-1 bg-teal-500 rounded-full mx-auto"></div>
		</div>
        
          <!-- end details section-->     
          
     
<!-- start list -->
 <div class="max-w-4xl mx-auto mt-10 grid gap-6 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1">
  
  <!-- Card 1 -->
  <div class="bg-white dark:bg-gray-900 shadow-md rounded-md border border-gray-200 dark:border-gray-700 p-6">

    
    <!-- Header with Avatar -->
    <div class="flex items-center space-x-3">
      <img src="{{ asset('images/company-filer-icon.jpg') }}" alt="Company Logo" class="w-10 h-10 rounded-full border border-gray-200 dark:border-gray-700" />
      <div>
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Motion In Pictures Pte Ltd</h3>
        <p class="text-xs text-gray-500 dark:text-gray-400">326 SMITH STREET #15-23 NEW BRIDGE CENTRE, SINGAPORE 021536 </p>
      </div>
    </div>
    
    
    <div class="mt-4 space-y-2 text-sm">
      <p><span class="font-medium text-gray-700 dark:text-gray-300">UEN:</span> 202215027D</p>
      <p><span class="font-medium text-gray-700 dark:text-gray-300"><a href="#">Learn More</a></p>
    </div>
  </div>

  <!-- Card 2 -->
  <div class="bg-white dark:bg-gray-900 shadow-md rounded-md border border-gray-200 dark:border-gray-700 p-6">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Motion In Pictures Pte Ltd</h3>
    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
      Overview of business operations and structure.
    </p>
    <div class="mt-4 space-y-2 text-sm">
      <p><span class="font-bold text-gray-700 dark:text-gray-300">UEN:</span> 202215027D</p>
      <p><span class="font-bold text-gray-700 dark:text-gray-300">Address:</span> 326 SMITH STREET #15-23 NEW BRIDGE CENTRE, SINGAPORE 021536 </p>
      <p><br/><span class="font-medium text-gray-700 dark:text-gray-300"><a href="#">Learn More</a></p>
    </div>
  </div>
  
  
    
 <!-- Card 3 -->
  <div class="bg-white dark:bg-gray-900 shadow-md rounded-md border border-gray-200 dark:border-gray-700 p-6">
    
     <!-- Header with Avatar -->
    <div class="flex items-center space-x-3">
      <img src="{{ asset('images/company-filer-icon.jpg') }}" alt="Company Logo" class="w-10 h-10 rounded-full border border-gray-200 dark:border-gray-700" />
      <div>
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Motion In Pictures Pte Ltd</h3>
        <p class="text-xs text-gray-500 dark:text-gray-400">326 SMITH STREET #15-23 NEW BRIDGE CENTRE, SINGAPORE 021536 </p>
         <p class="text-xs text-gray-500 dark:text-gray-400"><a href="#">Learn More</a></p>

      </div>
    </div>
    
  
  </div>
 <!-- end Card 3 -->
  
  
 <!-- Card 3 -->
  <div class="bg-white dark:bg-gray-900 shadow-md rounded-md border border-gray-200 dark:border-gray-700 p-6">
    
     <!-- Header with Avatar -->
    <div class="flex items-center space-x-3">
      <img src="{{ asset('images/company-filer-icon.jpg') }}" alt="Company Logo" class="w-10 h-10 rounded-full border border-gray-200 dark:border-gray-700" />
      <div>
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Motion In Pictures Pte Ltd</h3>
        <p class="text-xs text-gray-500 dark:text-gray-400">326 SMITH STREET #15-23 NEW BRIDGE CENTRE, SINGAPORE 021536 </p>
        <p class="text-xs text-gray-500 dark:text-gray-400">UEN: 202215027D</p>
        <p class="text-xs text-gray-500 dark:text-gray-400"><a href="#">Learn More</a></p>

      </div>
    </div>
    
  
  </div>
 <!-- end Card 3 -->
 
 
  <!-- Card 3 -->
  <div class="bg-white dark:bg-gray-900 shadow-md rounded-md border border-gray-200 dark:border-gray-700 p-6">
    
     <!-- Header with Avatar -->
    <div class="flex items-center space-x-3">
      <img src="{{ asset('images/company-filer-icon.jpg') }}" alt="Company Logo" class="w-10 h-10 rounded-full border border-gray-200 dark:border-gray-700" />
      <div>
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Motion In Pictures Pte Ltd</h3>
        <p class="text-xs text-gray-500 dark:text-gray-400">326 SMITH STREET #15-23 NEW BRIDGE CENTRE, SINGAPORE 021536 </p>
        <p class="text-xs text-gray-500 dark:text-gray-400">UEN: 202215027D</p>
        <p class="text-xs text-gray-500 dark:text-gray-400"><a href="#">Learn More</a></p>

      </div>
    </div>
    
  
  </div>
 <!-- end Card 3 -->
 
 
   <!-- Card 3 -->
  <div class="bg-white dark:bg-gray-900 shadow-md rounded-md border border-gray-200 dark:border-gray-700 p-6">
    
     <!-- Header with Avatar -->
    <div class="flex items-center space-x-3">
      <img src="{{ asset('images/company-filer-icon.jpg') }}" alt="Company Logo" class="w-10 h-10 rounded-full border border-gray-200 dark:border-gray-700" />
      <div>
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Motion In Pictures Pte Ltd</h3>
        <p class="text-xs text-gray-500 dark:text-gray-400">326 SMITH STREET #15-23 NEW BRIDGE CENTRE, SINGAPORE 021536 </p>
        <p class="text-xs text-gray-500 dark:text-gray-400">UEN: 202215027D</p>

      </div>
    </div>
    
  
  </div>
 <!-- end Card 3 -->

</div>
<!-- end list -->
        
        
        
        
        
        
      </div>
    </div>

    <div class="shrink-0 border-t border-gray-200 px-4 py-6 sm:px-6 lg:w-96 lg:border-t-0 lg:border-l lg:pr-8 xl:pr-6 dark:border-white/10">
      <!-- Right column area -->
      Right Column
    </div>
  </div>
</div>







@stop
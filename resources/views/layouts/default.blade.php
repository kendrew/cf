    <!doctype html>
    
    
    <html>
    
   
    
    <head>
       @yield('metadata')
       @include('includes.head')
       
    </head>
    <body class="">
    

 
   <div class="">
       
           @include('includes.header')


		  <main class="" style="min-height:550px">
			  <html class="h-full bg-white">
  				<body class="h-full">
		
             
               		@yield('content')
        	 	</body>
        	 </html>
  		   </main>


           @include('includes.footer')
    
    </div>
    </body>
    </html>
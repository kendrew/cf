    <!doctype html>
    
    
    <html>
    
   
    
    <head>
       @yield('metadata')
       @include('includes.head')
       
    </head>
    <body class="">
    

 
   <div class="">
       
           @include('includes.header')


		  <main class="">

			<!-- start of 2 columns -->
				<div class="mt-8 p-4 max-w-3xl mx-auto grid grid-cols-1 gap-6 sm:px-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3">
               		@yield('content')
        		</div>
  		   </main>


           @include('includes.footer')
    
    </div>
    </body>
    </html>
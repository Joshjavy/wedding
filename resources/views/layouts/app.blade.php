<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/js/agent.js'])
    <style>
      @font-face {
        font-family: 'SOUTH_CATALONIA';
        font-style: normal;
        font-weight: 400;
        src: url('{{ asset('font/SOUTH_CATALONIA.OTF') }}') format('truetype');
    }

      body {
        font-family: "Poppins", sans-serif;
        font-weight: 300;
        font-style: normal;
        color: #606060!important;
        font-size: 1rem;
      }

      .titulo{
      font-family: 'SOUTH_CATALONIA' ;
      color: #95977F;
    }
    .color{
      color: #95977F;
    }
    .Botones{
      font-family: "Poppins", sans-serif;
        font-weight: 300;
        font-style: normal;
        color: #95977F!important;
        font-size: .9rem;
    }
    .item .emblema{
      max-width: 85%!important;
      margin: auto;
      min-width: 50%!important;
    }

    .fade {
    opacity: 0;
    transition: all .8s ease;
}

  .fade.visible {
    opacity: 1;
  }
  /* Extra small devices (phones, 600px and down) */
  @media only screen and (min-width: 300px) {
      .info{
        padding-top:10rem;
        padding-bottom:5rem;
        width: 100%;
        margin: auto!important;
      }
      .emblema{
        width: 76%;
        margin: auto;
      }
    }
  }

  /* Small devices (portrait tablets and large phones, 600px and up) */
  @media only screen and (min-width: 600px) {
    .info{
      padding-top:10rem;
      padding-bottom:5rem;
      width: 80%;
      margin: auto!important;
    }
    .emblema{
      width: 76%;
      margin: auto;
    }
  }

  /* Medium devices (landscape tablets, 768px and up) */
  @media only screen and (min-width: 768px) {
    .info{
      padding-top:5rem;
      padding-bottom:5rem;
      width: 100%;
      
    }
    .emblema{
      width: 76%;
      margin: auto;
    }
  }
  @media only screen and (min-width: 787px) {
    .info{
      padding-top:15rem;
      padding-bottom:5rem;
      width: 100%;
      
    }
    .emblema{
      width: 76%;
      margin: auto;
    }
  }

  /* Large devices (laptops/desktops, 992px and up) max-height: 59rem; */
  @media only screen and (min-width: 992px) {
    
    .info{
      padding-top:5rem;
      padding-bottom:5rem;
      width: 60%;
      
    }
    .emblema{
      width: 76%;
      margin: auto;
    }

  } 

  /* Extra large devices (large laptops and desktops, 1200px and up) max-height: 59rem; */
  @media only screen and (min-width: 1024px) {
    
    .info{
      padding-top:5rem;
      padding-bottom:5rem;
      width: 50%;
      
    }
    .emblema{
      width: 76%;
      margin: auto;
    }
    
  }
  .info{
    
    margin: auto;
    overflow-x: hidden;
    overflow-y: scroll;
    
  }
  .info::-webkit-scrollbar {
    width:.4em;
}
 
.info::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0);
}
 
.info::-webkit-scrollbar-thumb {
  
  
}
  </style>
  @yield('hscript')
  </head>
  <body class="bg-gray-100 text-gray-800">

    
    @yield('content')
    @include('sweetalert::alert')
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    @yield('script')
    
    <script>
      $(document).ready(function() { 
        let h = $(window).height();
        let hif=h-100;
        let w =$(window).width();
        if(w<=1023){
          $('.imagebg').addClass("hidden" ) 
          $('.imagemb').removeClass("hidden" ) 
          $('.imagemb').css({'height':h+'px'})
          $('.imagemb').css({'width':w+'px'})
          $('.info').css({'height':hif+'px'})
        }else if(w>= 1024){
          $('.imagebg').removeClass("hidden" )
          $('.imagemb').addClass("hidden" ) 
          $('.info').css({'height':h+'px'})
          console.log(h)
          // $('.imagebg').css({'height':h+'px'})
        }
        console.log(h)
        


        $(window).on('resize', function(){
          let win = $(this);

          if (win.height() <=1023) {
            $('.imagebg').addClass("hidden" ) 
            $('.imagemb').removeClass("hidden" ) 
            $('.imagemb').css({'height':h+'px'})
            $('.imagemb').css({'width':w+'px'})
            $('.info').css({'height':hif+'px'})
          }

          if (win.width() >= 1024) {
            $('.imagebg').removeClass("hidden" )
            $('.imagemb').addClass("hidden" ) 
            $('.imagebg').width=win.width() 
            $('.imagebg').height=win.height() 
            $('.info').height=win.height()
          }
            
      });
    }); 
    </script>
  </body>
</html>
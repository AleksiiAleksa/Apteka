<!DOCTYPE html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Новости науки</title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="{{ asset('stylesheets/foundation.min.css') }}">
  <link rel="stylesheet" href="{{ asset('stylesheets/main.css') }}">
  <link rel="stylesheet" href="{{ asset('stylesheets/app.css') }}">

  <script src="{{ asset('javascripts/modernizr.foundation.js') }}"></script>
  
  <link rel="stylesheet" href="{{ asset('fonts/ligature.css') }}">
  
  <!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>

<body>

<!-- ######################## Main Menu ######################## -->
 
<nav>

     <div class="twelve columns header_nav">
     <div class="row">
        <div style="text-align: right">
          @if(Auth::check())
          {{ Auth::user()->name }}
          <a class="dropdown-item" href="{{ url('/logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выход
          </a>
          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
          @csrf
          </form>
          @else
          <a href="{{ url('/login') }}">Вход</a><br>
          <a href="{{ url('/register') }}">Регистрация</a>
          @endif
        </div>
      
        <ul id="menu-header" class="nav-bar horizontal">
        
          <li><a href="/">Главная</a></li>     
          <li><a href="/Category/Искусственный интеллект">Искусственный интеллект</a></li>
          <li><a href="/Category/Искусственная нейронная сеть">Искусственная нейронная сеть</a></li>
          <li><a href="/Category/Распознавание образов">Распознавание образов</a></li>
          <li><a href="/Category/Робототехника">Робототехника</a></li>
          <li><a href="/Category/Информационное общество">Информационное общество</a></li>
          <li><a href="/Category/Автоматическая обработка текста">Автоматическая обработка текста</a></li>
      
        </ul>
        

        
      </div>  
      </div>
      
</nav><!-- END main menu -->
        
<!-- ######################## Header ######################## -->
     
    <header>
       
            <div class="row">
               <h4>{{ $news->rubrica}}</h4>
    <article>
            
             <div class="twelve columns">
                 <h1>{{ $news->title}}</h1>
                      <p class="excerpt">
                      {{ $news->lid}}
                      </p>    
             </div>
             
    </article>
    
    
            </div>
            
    </header>
      
<!-- ######################## Section ######################## -->

<section class="section_light">

      
      <div class="row">
      

      <p> <img src="{{ asset('images') }}/{{ $news->image }}" alt="desc" width=400 align=left hspace=30>
      
      {{$news->content}}
      </p>
                    
      </div>


      
      

<!-- ######################## Footer ######################## -->  
      
<footer>

      <div class="row">
      
          <div class="twelve columns footer">
              <a href="" class="lsf-icon" style="font-size:16px; margin-right:15px" title="twitter">Twitter</a> 
              <a href="" class="lsf-icon" style="font-size:16px; margin-right:15px" title="facebook">Facebook</a>
              <a href="" class="lsf-icon" style="font-size:16px; margin-right:15px" title="pinterest">Pinterest</a>
              <a href="" class="lsf-icon" style="font-size:16px" title="instagram">Instagram</a>
          </div>
          
      </div>

</footer>		  

<!-- ######################## Scripts ######################## --> 

    <!-- Included JS Files (Compressed) -->
    <script src="javascripts/foundation.min.js" type="text/javascript"></script> 
    <!-- Initialize JS Plugins -->
     <script src="javascripts/app.js" type="text/javascript"></script>
</body>
</html>
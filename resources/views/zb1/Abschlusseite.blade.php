﻿<!-- MAIN SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->
    <section id="main">
    <form id="questionform" >
{{ csrf_field() }}
</form>
      <!-- NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
      <nav data-equalizer>
        <div id="instructions" class="first" data-equalizer-watch>
          <h5 class="text-center"><b>Abschlussseite</b><br> </h5>
          <p>
Hier sollten z. B. eine Danksagung für das Interesse an den ÖSD-Prüfungen sowie weitere Informationen oder Links stehen.  
         </p>
         <p>
			<a href="#" onClick="endTest()">Test erneut starten </a>
         </p>
        </div>
        <a  class="nav-button prev " onClick="loadQuestion('zb1','16');" data-equalizer-watch>
          <i class="fa fa-angle-left fa-2x"></i>
        </a>
        <a  class="nav-button next disabled" data-equalizer-watch>
          <i class="fa fa-angle-right fa-2x"></i>
        </a>
      </nav>
      <!-- //NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
    
      <!-- CONTENT SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->
      <section id="content" data-equalizer>
    
      </section>
      <!-- //CONTENT SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->
    </section>
    <!-- //MAIN SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->
    

    <script src="/assets/js/app.js"></script>
  </body>
</html>

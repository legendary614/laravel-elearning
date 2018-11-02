﻿<!-- NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
<form id="questionform" >
<input name="questionid" type="hidden" value="13" />
	{{ csrf_field() }}
      <nav data-equalizer>
          
        <div id="instructions" class="" data-equalizer-watch>
          <h5><b>Aufgabe 3</b> <span class="estimated-time">Arbeitszeit: 15 Minuten</span></h5>
          <i>Schreiben Sie eine E-Mail.</i>
		</div>
        <a onClick="loadQuestion('zb1','13_1');" class="nav-button prev" data-equalizer-watch>
          <i class="fa fa-angle-left fa-2x"></i>
        </a>
        <a onClick="loadQuestion('zb1','einleitung_sprechen');$('.title-cnt').html('<h4><b>Zertifikat B1</b> Modellsatz Sprechen</h4>');" class="nav-button next" data-equalizer-watch>
          <i class="fa fa-angle-right fa-2x"></i>
        </a>
      </nav>
      <!-- //NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
    	 <section id="content" data-equalizer>
  			<div class="left" data-equalizer-watch>
  				<p>
  					<i>Ihre Kursleiterin, Frau Müller, hat Sie zu einem Gespräch über Ihre persönlichen Lernziele eingeladen.<br>
Zu dem Termin können Sie aber nicht kommen.</i><br>
  				</p>
  				Schreiben Sie an Frau Müller. Entschuldigen Sie sich <i>höflich </i>und berichten Sie, warum Sie nicht kommen können.<br> <br>
				<ul>
					<li>Schreiben Sie eine E-Mail (circa 40 Wörter).</li>
					<li>Vergessen Sie nicht die Anrede und den Gruß am Schluss.</li>
				</ul>
  			</div>
  			<div class="right" data-equalizer-watch>
    		<div style="padding-left:10px;padding-top:10px;">
    			<div class="section-title">
            		<h5>Leistungsbeispiel</h5>
    				<a id="showvideobtn" href="#" onClick="$('#examplebox').show();$('#showvideobtn').hide();" class="primary hollow large button">Leistungsbeispiel anzeigen</a>
				</div>	
    			<div id="examplebox" style="display:none;">
    				<p>Das ist ein Beispiel für eine Leistung auf Niveau B1. <br/>
    					Sämtliche Fehler (Lexik, Grammatik, Orthografie etc.) wurden bereinigt.
    				</p>
				<div class="box" id="examplebox">
				<small><b>Sehr geehrte Frau Müller,</b><br/><br/>
				es tut mir leid, dass ich zu dem Gespräch über meine persönlichen Lernziele nicht kommen
				kann. <br/>Ich muss an diesem Tag in Deutschland meine Mutter besuchen.<br/> Sie liegt im
Krankenhaus und muss operiert werden.<br/><br/>
Mit freundlichen Grüßen<br/>
J. M.*<br/><br/></small>
				<cite>* Der Name wurde vom ÖSD-Team abgekürzt.</cite>
				</div>
				</div>
			</div>
  		</div>
	</section>
      <!-- CONTENT SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->
      <!-- //CONTENT SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->
    
      </section>
 </form>

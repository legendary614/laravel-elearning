﻿<!-- NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
<form id="questionform" >
<input name="questionid" type="hidden" value="13" />
	{{ csrf_field() }}
      <nav data-equalizer>
          
        <div id="instructions" class="" data-equalizer-watch>
          <h5><b>Aufgabe 2</b> <span class="estimated-time">Arbeitszeit: 25 Minuten</span></h5>
          <i>Schreiben Sie einen Diskussionsbeitrag.</i>
		</div>
        <a onClick="loadQuestion('zb1',13);" class="nav-button prev" data-equalizer-watch>
          <i class="fa fa-angle-left fa-2x"></i>
        </a>
        <a onClick="loadQuestion('zb1','13_2');" class="nav-button next" data-equalizer-watch>
          <i class="fa fa-angle-right fa-2x"></i>
        </a>
      </nav>
      <!-- //NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->   	 
    	 <section id="content" data-equalizer>
    	 <div class="left" data-equalizer-watch>
    	 		<p>
    	 			<i>Sie haben im Fernsehen eine Diskussionssendung zum Thema „Persönliche Kontakte und Internet“ gesehen. <br>Im Online-Gästebuch der Sendung finden Sie folgende Meinung:</i> 
    	 		</p>
  				<div class="computer" style="min-height:330px;">
  					<div class="title">Gästebuch&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;15:01&nbsp;&nbsp;16:55 Uhr</div>
  					<h5>Tanja</h5>
  					Ich finde es schlimm, dass persönliche Treffen immer seltener werden. 
  					Freunde wohnen oft sehr weit auseinander. Und da ist man dann schon froh über das Internet.
  					Aber Kontakte im Internet können doch persönliche Treffen nicht ersetzen!
        		</div>
        		<p><br/>
        			Schreiben Sie nun Ihre Meinung (circa 80 Wörter).
        		</p>
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
				<small>Wie Tanja finde ich es schade, dass persönliche Treffen immer seltener werden. In einer
				Welt, wo die Leute sich immer beeilen, haben wir immer weniger Zeit für unsere Freunde.
				Wir laufen den ganzen Tag von einem Teil von der Stadt zu einem anderen, und wir sehen
				nicht, dass wir auf diese Art persönliche Kontakte verlieren. Natürlich glaube ich nicht, dass
				das Internet nur schlecht ist; zum Beispiel ist es sehr wichtig, wenn Menschen sehr weit weg
				wohnen, in ein paar Sekunden kommt ein E-Mail von Rom nach Melbourne, von Los Angeles
			nach Wien.<br/><br/>
			Was wir nicht vergessen sollten, ist, dass persönliche Treffen nicht ersetzt werden können.<br/>
				J.*<br/>
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
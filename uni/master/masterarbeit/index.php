<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
      <html xmlns="http://www.w3.org/1999/xhtml" lang="de"
xml:lang="en">
<head>
  <title>Jan Hinzmann</title>
<link rel="stylesheet" type="text/css" href="../../../style/janhinzmann.css">
</head>
<body>

<div style="text-align:center">
  <h1>
    <a href="http://janhinzmann.de">
      <img alt="Jan Hinzmann" src="../../../img/janhinzmann2.png"/>
    </a>
  </h1>
</div>

<div style="text-align:center; padding:0px; margin-bottom:-4px">
  <img src="../../../img/janeyes.png"/>
</div>

<div class="content">
<h3 class="header">Externe Masterarbeit beim Deutschen Zentrum f&uuml;r Luft- und Raumfahrt e.V. (DLR)</h3>
<div class="entry">

<p>
[ Titel ]<br/>
<em>Kontinuierliche Qualit&auml;tssicherung in implementierten Architekturmodellen</em>
</p>

<p>
[ <a href="ma_planning.html">Planung</a> ]<br/>
Meinen Plan f&uuml;r die Masterarbeit habe ich mit <a href="http://live.gnome.org/Planner">Planner</a> erstellt. Ein Tool zur Bearbeitung von Gantt-Diagrammen.
</p>

<p>
[ <a href="./ma_hinzmann.pdf">ma_hinzmann.pdf</a> ]<br/>
Der vorl&auml;ufige Bericht zu meiner Masterarbeit. Am Dienstag ist Abgabe und
 ich bin gerade dabei, das Kapitel 7 noch mal zu &uuml;berarbeiten.
</p>


<p>
[ Design ]<br/>
Ich habe mich heute (27.01.2007) mal hingesetzt und das ungef&auml;hre Design
aufgemalt und aufgeschrieben:
<ul>
  <li><a href="./design/0_aDesignSession.jpg">Impression einer Design-Session</a></li>
  <li><a href="./design/0_bigpicture.jpg">Alles auf einen Blick</a></li>
  <li><a href="./design/0_problem.jpg">Das Problem an sich</a></li>
  <li><a href="./design/1_grobarch.jpg">Grobarchitektur</a></li>
  <li><a href="./design/20_feinArch_import.jpg">Importieren</a></li>
  <li><a href="./design/21_feinArch_compare.jpg">Vergleichen</a></li>
  <li><a href="./design/22_feinArch_communicate.jpg">Kommunizieren</a></li>
</ul>
</p>

<p>
[ <a href="./ma_architecture.pdf">ma_architecture.pdf</a> ]<br/>
Die handgemalten Diagramme habe ich nun mit LaTex in eine lesbarere Form gebracht und in dieses Architekturdokument gespeichert.
</p>

<p>
[ <a href="modiDBSchemaV2.png">DBSchema</a> ]<br/>
Das vorl&auml;ufige Datenbankschema, was Architekten- und Entwicklermodelle abbilden soll.
</p>

<p>
[ <a href="./modireport.html">MoDiReport.html</a> ]
Das Werkzeug zur Erkennung von Modelldifferenzen erstellt einen Bericht unter
anderem im XHTML-Format. Wie praktisch, dann kann man den Bericht ja gleich hier
 anschauen :D
</p>

<p>
[ Screenshots ]<br/>
<a href="./MoDiFirstImpression.png">MoDiFirstImpression.png</a>
</p>

<p>
[ <a href="http://paste07.cs.washington.edu/">PASTE 2007</a>  
  <a href="./HinzmannBSL07.pdf">HinzmannBSL07.pdf</a> ]<br/>
Auf dem <em>Workshop on Program Analysis for Software Tools and Engineering</em>
 haben wir ein Paper mit dem wundersch&ouml;nen Titel <em>Continuous 
 Qualityassurance in Implemented Architecture Models</em> eingereicht.
</p>

</div>
<h3 class="header">Feedback</h3>
<div class="entry">
<form method="post" action="sendmail.php">
<?php
$ipi = getenv("REMOTE_ADDR");
$httprefi = getenv ("HTTP_REFERER");
$httpagenti = getenv ("HTTP_USER_AGENT");
?>

<input type="hidden" name="ip" value="<?php echo $ipi ?>" />
<input type="hidden" name="httpref" value="<?php echo $httprefi ?>" />
<input type="hidden" name="httpagent" value="<?php echo $httpagenti ?>" />
<div style="text-align:center">
Name (opt.): <input type="text" name="visitor" size="35" /><br/>
<br/>
Email (opt.): <input type="text" name="visitormail" size="35" /><br/>
<br/>
<textarea name="notes" rows="8" cols="50">Ihre Nachricht ...</textarea>
<br/>
<input type="submit" value="Feedback" />
<br/>
</div>
</form>

</div><!-- end entry -->

</div><!-- end content -->
</body>
</html>


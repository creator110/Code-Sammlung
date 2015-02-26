<h2>Gaestebuch</h2>

<p><b>Ich bitte um Verstaendnis, dass dieses Gaestebuch keine Werbeplatform ist <br />
	und Links zu Shops,  gleich welcher Art,  geloescht werden. </b></p>
	

<p>Sie koennen sich in das Gaestebuch <a href="index.php?seite=3">eintragen</a></p>

<?php


// Aufbau der Verbindung zum Datenbankserver 
$links = mysql_connect( 'host' , 'user', 'password')
or die ('Verbindungsaufbau hat nicht funktioniert: ' . mysql_error());

//eine Datenbank als aktive Datenbank auswaehlen
mysql_select_db('db_name')
or die('Wechsel zu Datenbank nicht moeglich: ' . mysql_error());
	
//Abfrage 
$query =	"SELECT
				name,
				date_format(date, '%d.%m.%Y um %H:%i Uhr') as date,
				kommentar
				email
			 FROM
				db_table
			 ORDER BY
				date
			 DESC";
			 
// Abfragen an den Server senden
$result = mysql_query($query );



	
			 
			// die Schleife zeichnet Automatisch eine Tabelle mit den angegebenen Werten
			// kontakt und kommentar sind vertauscht, vermute den fehler in der 
			// reihenfolge der Spalten in der DB 
			while($datensatz = mysql_fetch_array($result, MYSQL_ASSOC)) {
		?>
			<div class="gbe-wrapper">
				<div class="gbe-header">
						<strong><?php echo $datensatz['name']; ?></strong> schrieb am <?php echo $datensatz['date'];?>
				</div>
			
				<div class="gbe-content"> 
					<?php echo $datensatz['comment']; ?> 
				</div>
				
				<div class="gbe-footer">
					Kommentar: <?php echo $datensatz['email'];?>
				</div>
				<br />
			</div>
		<?php 
		}

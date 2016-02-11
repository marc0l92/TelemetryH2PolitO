<div class="list-group">
  <a href="<?php echo site_url('databaseio');?>/insertTelemetria?voltage=&current=&speed=&race_id=" class="list-group-item">
		<h4 class="list-group-item-heading"><span class="ui-icon ui-icon-print pull-left"></span>Insert telemetria info</h4>
		<p class="list-group-item-text">Inserimento di dati sulla telemetria usanto il metodo GET o POST.</p>
    <p id="insertTelemetriaVal" class="list-group-item-text"><?php echo site_url('databaseio');?>/insertTelemetria?voltage=&current=&speed=&race_id=</p>
	</a>
	<a href="<?php echo site_url('databaseio');?>/insertGps?lat_deg=&lat_min=&lat_sec=&long_deg=&long_min=&long_sec=&id_gara=" class="list-group-item">
		<h4 class="list-group-item-heading"><span class="ui-icon ui-icon-print pull-left"></span>Insert gps info</h4>
		<p class="list-group-item-text">Inserimento di dati sul gps usanto il metodo GET o POST.</p>
    <p class="list-group-item-text"><?php echo site_url('databaseio');?>/insertGps?lat_deg=&lat_min=&lat_sec=&long_deg=&long_min=&long_sec=&id_gara=</p>
	</a>
    </a>
	<a href="<?php echo site_url('databaseio');?>/insertAll?lat_deg=&lat_min=&lat_sec=&long_deg=&long_min=&long_sec=&id_gara=" class="list-group-item">
		<h4 class="list-group-item-heading"><span class="ui-icon ui-icon-print pull-left"></span>Insert all info</h4>
		<p class="list-group-item-text">Inserimento di tutti i dati usanto il metodo GET o POST.</p>
    <p class="list-group-item-text"><?php echo site_url('databaseio');?>/insertAll</p>
	</a>
</div>

<div class="list-group">
	<a href="<?php echo site_url('databaseio');?>/getTelemetria" class="list-group-item">
		<h4 class="list-group-item-heading"><span class="ui-icon ui-icon-print pull-left"></span>Get telemetria info</h4>
		<p class="list-group-item-text">Ottieni informazioni sui dati presenti nel database riguardo la telemetria.</p>
	</a>
	<a href="<?php echo site_url('databaseio');?>/getGps" class="list-group-item">
		<h4 class="list-group-item-heading"><span class="ui-icon ui-icon-print pull-left"></span>Get gps info</h4>
		<p class="list-group-item-text">Ottieni informazioni sui dati presenti nel database riguardo il gps.</p>
	</a>
</div>
<footer role="footer" class="footer">
	<div class="row">
		<div class="col-md-3 padding--footer text-center">
			<h1>BUILD</h1>
		</div>
		<div class="col-md-3 padding--footer">
			<h3>CDMX</h3>
			<p><i class="fa fa-phone" aria-hidden="true"></i>(55) 0000 0000</p>
			<p>Av. Siembre Viva #334, Oficina 407. <br> Ciudad Satlélite.</p>
			<a href="https://www.google.com.mx/maps/search/Av.+Siempre+Viva+%23334,+Oficina+407.+Ciudad+Sat%C3%A9lite./@20.8380589,-103.6029725,8z/data=!3m1!4b1!10m2!1e2!2e9" title="Ver" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i>Ver en mapa</a>
		</div>
		<div class="col-md-3 padding--footer">
			<h3>GDL</h3>
			<p><i class="fa fa-phone" aria-hidden="true"></i>(33) 0000 0000</p>
			<p>Av. Vallarta #443 Piso 1<br>
			Jardines Vallarta</p>
			<a href="https://www.google.com.mx/maps/search/Av.+Vallarta+%23443+Piso+1+Jardines+Vallarta/@20.6908145,-103.4597923,14z/data=!3m1!4b1" title="Ver" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i>Ver en mapa</a>
		</div>
		<div class="col-md-3 end">
			<div class="footer__google-maps">
				<div id="map-canvas"></div>
			</div>
		</div>
	</div><!--row-->
</footer>

<!--footer bottom-->
<div class="footer-bottom">
	<p>Copyright © <?= date('Y');?>  |  BUILD Building Systems  |  <a  href="#" title="Aviso" target="_blank">Aviso de privacidad</a></p>
</div>
<!--footer bottom-->

<script>
	function initMap() {
		//Init
		var map = new google.maps.Map(document.getElementById('map-canvas'), {
			center: {lat:20.6574729, lng: -103.4002707},
			scrollwheel: false,
			zoom: 14
		});
		//Marker
		var image = "images/marker.png" ;
		var marker = new google.maps.Marker({
			position: {lat:20.6535894, lng: -103.3986745},
			map: map,
			title: 'BUILD',
			icon: image
		});
	}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvyT0pSOI9kpSu0G6ALkQZVhVVad3ejtc&callback=initMap"
	async defer></script>



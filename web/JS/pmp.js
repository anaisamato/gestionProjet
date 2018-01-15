console.log("coucou");

// on affiche l'introduction
$(".partie").each(function() {
	$(this).hide();
});
$("#introduction").show();


$("#intro").click(function(event) {
	event.preventDefault();
  	$(".partie").each(function() {
  		$(this).hide();
  	});
  	$("#introduction").show();
});

$("#cont").click(function(event) {
	event.preventDefault();
  	$(".partie").each(function() {
  		$(this).hide();
  	});
  	$("#contenu").show();
});

$("#parties_p").click(function(event) {
	event.preventDefault();
  	$(".partie").each(function() {
  		$(this).hide();
  	});
  	$("#parties_prenantes").show();
});

$("#dem_qual").click(function(event) {
	event.preventDefault();
  	$(".partie").each(function() {
  		$(this).hide();
  	});
  	$("#demarche_qualite").show();
});

$("#orga").click(function(event) {
	event.preventDefault();
  	$(".partie").each(function() {
  		$(this).hide();
  	});
  	$("#organisation").show();
});
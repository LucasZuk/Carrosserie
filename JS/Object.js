function Voiture (marque, modele,couleur,plaque,devis,entree,sortie){
	this.marque =marque;
	this.modele=modele;
	this.couleur=couleur;
	this.plaque=plaque;
	this.devis=devis;
	this.entree=entree;
	this.sortie=sortie;
}




(function(){
	var liste={},
		nb=0,
		form=document.getElementById("formulaireVoiture");
		

		form.addEventListener('submit', function(){
			v=new Voiture();
			v.marque=document.getElementById("marque").value;
			v.modele=document.getElementById("modele").value;
			v.couleur=document.getElementById("couleur").value;
			v.plaque=document.getElementById("plaque").value;
			v.devis=document.getElementById("devis").value;
			v.entree=document.getElementById("entree").value;
			v.sortie=document.getElementById("sortie").value;
			liste[nb].push(v);
			alerte(v);
			nb+=1;
			for (var i=0;i<nb;i++){
				console.log(liste[i]);
			}
		});

})();
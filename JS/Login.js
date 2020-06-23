
var mdp=document.getElementById("motDePasse"),
	alert=document.getElementById("alert");

mdp.addEventListener('click', function() {
	mdp.type="password";
});



var mdp2=document.getElementById("motDePasse2");

mdp2.addEventListener('click', function() {
	mdp2.type="password";
});

var nomPersonne=document.getElementById("nomPersonne");

nomPersonne.addEventListener('click', function() {
	nomPersonne.value=""; 
});

var nomSociete=document.getElementById("nomSociete");

nomSociete.addEventListener('click', function() {
	nomSociete.value=""; 
});

var email=document.getElementById("email");

email.addEventListener('click', function() {
	email.value=""; 
});

mdp2.addEventListener("blur", function(){
	if((mdp2.value != mdp.value)){
		mdp2.style.backgroundColor=mdp.style.backgroundColor="red";
		alert.style.visibility="visible";
	}
	else{
		mdp2.style.backgroundColor=mdp.style.backgroundColor="white";
		alert.style.visibility="hidden";
	}
});
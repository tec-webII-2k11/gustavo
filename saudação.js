var data = new Date();
var dia = data.getDay();
var hora = data.getHours();

	switch(dia){
		case 0:
			x = "domingo";
			break;
		case 1:
			x = "segunda-feira";
			break;
		case 2:
			x = "terça-feira";
			break;
		case 3:
			x = "quarta-feira";
			break;
		case 4:
			x = "quinta-feira";
			break;
		case 5:
			x = "sexta-feira";
			break;
		case 6:
			x = "sábado";
			break;
	}
	if(hora<12){
	alert("Bom dia,hoje é: " + x);
	}
	else{
	alert ("Boa tarde,hoje é: " + x);	
		
	}
	
	
	
	
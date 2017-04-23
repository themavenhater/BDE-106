window.onload = function(){
	var d = new Date();
	var month_name = ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Decembre'];
	var month = d.getMonth(); //0-11 <-- 0janvier-11 decembre
	var year = d.getFullYear(); //2017
	var first_date = month_name[month] + " " + 1 + " " + year; // Avril 15 2017
	var tmp = new Date(first_date).toDateString();
	//Sam Avril 15 2017
	var first_day = tmp.substring(0,1); // Sam
	var day_name = ['Sam','Dim','Lun','Mar','Mer','Jeu','Ven'];
	var day_no = day_name.indexOf(first_day); //1
	var days = new Date(year, month+1, 0).getDate(); //30
	//sam sep 30 2017

	var calendar = get_calendar(day_no, days);
	document.getElementById("calendar-mointh-year").innerHTML = month_name[month]+" "+year;
	document.getElementById("calenar-dates").appendChild(calendar);

}

function get_calendar(day_no, days){
	var table = document.createElement('table');
	var tr = document.createElement('tr');
		//row for the day letters
	for(var c=0; c<=6; c++){
		var td = document.createElement('td');
		td.innerHTML = "SDLMMJV"[c];
		tr.appendChild(td);
	}
	table.appendChild(tr)

	//creation 2nd row
	tr = document.createElement('tr');
	var c;
	for(c=0; c<=6; c++){
		if(c == day_no){
			break;
		}
		var td = document.createElement('td');
		td.innerHTML ="";
		tr.appendChild(td);
	}
	var count = 1;
	for(; c<=6; c++){
		var td = document.createElement('td');
		td.innerHTML = count;
		count++;
		tr.appendChild(td);
	}
	table.appendChild(tr);

	//rest of the date rows

	for(var r=3; r<=6; r++){
		tr = document.createElement('tr');
		for(var c=0; c<=6; c++){
			if(count > days){
				table.appendChild(tr);
				return table;
			}
			var td = document.createElement('td');
			rd.innerHTML = count;
			count++;
			tr.appendChild(td);
		}
		table.appendChild(tr);
	}
}
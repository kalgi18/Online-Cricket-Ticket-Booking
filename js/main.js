//API integration
import { MY_API_KEY } from './config.js';

fetch("https://cricket-live-data.p.rapidapi.com/fixtures", {
	"method": "GET",
	"headers": {
		"x-rapidapi-host": "cricket-live-data.p.rapidapi.com",
		"x-rapidapi-key": MY_API_KEY
    }
})

.then(response => response.json())
.then(response => {
	console.log(response);

    let matches = [];
    for(var i=0; i<50; i++){

        document.getElementById('match_title').innerHTML = response.results[i].match_title;
        document.getElementById('date').innerHTML = response.results[i].date;
        document.getElementById('venue').innerHTML = response.results[i].venue;
        document.getElementById('status').innerHTML = response.results[i].status;

        document.body.innerHTML += '<div class="fixtures"><div id="match_title"></div><div id="date"></div><div id="venue"></div><div id="status"></div></div>'
    }
    
})
.catch(err => {
	console.error(err);
});






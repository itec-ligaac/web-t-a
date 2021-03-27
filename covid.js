var request = new XMLHttpRequest()

var country = document.getElementsByName("country").value;
console.log(country);
var link = "https://api.covid19api.com/country/"+$GET['country']+"?from=2021-03-03T00:00:00Z&to=2021-03-03T01:00:00Z";
/*request.open('GET', link, true)

request.onload = function () {
    var data = JSON.parse(this.response);
        console.log(data);
    
}

request.send();*/
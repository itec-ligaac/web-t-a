var request = new XMLHttpRequest()

request.open('GET', 'https://api.github.com/repos/owid/covid-19-data/contents/public/data/vaccinations/country_data', true)

request.onload = function () {
  
  var data = JSON.parse(this.response);

  console.log(data);
}

request.send();
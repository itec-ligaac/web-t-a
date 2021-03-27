<!DOCTYPE HTML>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- CSS -->
    <link href="index.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>

            var request = new XMLHttpRequest();
            var k = 0, country=[];
            const countryURL = window.location.search;
            for (let i=9;i<countryURL.length;i++)
            {
                country[k]=countryURL[i];
                k++;
            }
            k--;
            
            var link = "https://api.covid19api.com/country/"+country+"?from=2021-03-03T00:00:00Z&to=2021-03-03T01:00:00Z";
            request.open('GET', link, true);

            request.onload = function () {
                var data = JSON.parse(this.response);
                var statusHTML = '';
                console.log(data);
                $.each(data, function(i, status) {
                    statusHTML += status.Active;
                    $('.covid').html(status.Active);
                });
               
            }

            request.send();

            var request_weather = new XMLHttpRequest();
            
            var link_weather = 'https://api.weatherapi.com/v1/current.json?key=7d86d2e7cbee41e6914225521212703&q='+ country;
            request_weather.open('GET', link_weather, true)
            
            request_weather.onload = function () {
                
                var data_weather = JSON.parse(this.response);
                var statusHTML = '';
                console.log(data_weather);
                $.each(data_weather, function(i, status_weather) {
                    statusHTML += status_weather.temp_c;
                    $('.temp').html(status_weather.temp_c);
                });
                
            }

            request_weather.send();
    </script>

    <title>Holiday Planner</title>
  </head>
  <body>
    <div class="background">
      <div class="container">
        There are <div class="covid"></div> active cases in <script> for(let i=0;i<country.length;i++)document.write(country[i]);</script>
        <br>
        The medium temperature is <div class="temp"></div>
        <h6>We all know that during COVID 19 pandemic, it is important to stay safe! <br> But you also need to take some time in order to relax!</h6>
      </div>
    </div>
  </body>
</html>
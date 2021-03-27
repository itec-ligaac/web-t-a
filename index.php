<!DOCTYPE HTML>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- CSS -->
    <link href="index.css" rel="stylesheet" type="text/css">

    <title>Holiday Planner</title>
  </head>
  <body>
    <div class="background">
      <div class="container">
        <h1>Hello there! Let us plan your holiday!</h1>
        <form action="country.php" method="GET">
          <b>Country:</b><input type="text" id="country" name="country">
          <b>From:</b><input type="date">
          <b>To:</b><input type="date">
          <br>
          <input type="submit" value="Search for holidays">
        </form>
        <h6>We all know that during COVID 19 pandemic, it is important to stay safe! <br> But you also need to take some time in order to relax!</h6>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>

            var request = new XMLHttpRequest()
            var k = 0, country=[];
            const countryURL = window.location.search;
            for (let i=9;i<countryURL.length;i++)
            {
                country[k]=countryURL[i];
                k++;
            }
            var link = "https://api.covid19api.com/country/"+country+"?from=2021-03-03T00:00:00Z&to=2021-03-03T01:00:00Z";
            request.open('GET', link, true);

            request.onload = function () {
                var data = JSON.parse(this.response);
                    console.log(data);
                
            }

            request.send();
    </script>
  </body>
</html>
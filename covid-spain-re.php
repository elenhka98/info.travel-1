<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Covid Datas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/covid.css" />
  </head>
  <body>
    <div class="container">
      <h2>COVID -19 Cases in <span id="country"></span> <img src="" id="flag"></h2>
      <div class="board">
        <div class="card a"><i class="fa fa-tachometer"></i><h5>Active Cases</h5><span id="active"></span></div>
        <div class="card ca"><i class="fa fa-th-list"></i><h5>Total Cases</h5><span id="cases"></span></div>
        <div class="card cr"><i class="fa fa-times-circle"></i><h5>Critical Cases</h5><span id="critical"></span></div>
        <div class="card d"><i class="fa fa-times"></i><h5>Total Deaths</h5><span id="death"></span></div>
        <div class="card r"><i class="fa fa-check-square-o"></i><h5>Recovered Cases</h5><span id="recovered"></span></div>
        <div class="card t"><i class="fa fa-eye"></i><h5>Total Testes Done</h5><span id="tests"></span></div>
      </div>
    </div>
  </body>
</html>
<script type="text/javascript">

fetch('https://corona.lmao.ninja/v2/countries/Spain')
.then((response) => {
  return response.json();
})
.then((data) => {
  console.log(data);
  document.getElementById("country").innerHTML = data.country;
  document.getElementById("active").innerHTML = data.active.toLocaleString();
  document.getElementById("cases").innerHTML = data.cases.toLocaleString();
  document.getElementById("critical").innerHTML = data.critical.toLocaleString();
  document.getElementById("death").innerHTML = data.deaths.toLocaleString();
  document.getElementById("recovered").innerHTML = data.recovered.toLocaleString();
  document.getElementById("tests").innerHTML = data.tests.toLocaleString();
  document.getElementById("flag").src = data.countryInfo.flag;
});
</script>
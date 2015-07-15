<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Document sans nom</title>
</head>
 
<body>
 
<script type="text/javascript">
 
function Calcul()
{
 
$couleurmaison = parseInt(teste1());
$nbchambre = parseInt(teste2());
$ajout = parseInt(teste3());
$cheminee = parseInt(document.getElementById("cheminee").value);
alert($cheminee );
$res = $couleurmaison+$nbchambre+$ajout+$cheminee;
document.getElementById("total").value=$res;
}
 
 function teste1() { 
  var m=0; 
  for (i=0;i<document.forms.totalForm.couleurmaison.length;i++) { 
    if (document.forms.totalForm.couleurmaison[i].checked==true) { 
      var rad_val = document.totalForm.couleurmaison[i].value;
      break; 
    } 
  }
  return rad_val;
 }
  function teste2() { 
  var m=0; 
  for (i=0;i<document.forms.totalForm.nbchambres.length;i++) { 
    if (document.forms.totalForm.nbchambres[i].checked==true) { 
    var rad_val = document.totalForm.nbchambres[i].value;
    break; 
    } 
  }
  return rad_val;
 }
  function teste3() { 
  var m=0; 
  for (i=0;i<document.forms.totalForm.ajout.length;i++) { 
    if (document.forms.totalForm.ajout[i].checked==true) { 
      var rad_val = document.totalForm.ajout[i].value;
      break; 
    } 
  }
  return rad_val;
 }
</script>
 
couleur:
 <form name="totalForm">
<p>
  <input type="radio" name="couleurmaison" value="100" id="blanche" checked /> blanche -> 100 &#x20AC  <br />
  <input type="radio" name="couleurmaison" value="200" id="rose" /> rose -> 200 &#x20AC  <br />
  <input type="radio" name="couleurmaison" value="300" id="petitpois" /> &agrave petits pois -> 300 &#x20AC
</p>
<p>Nb de chambres</p>
 
<p>
  <input type="radio" name="nbchambres" value="90" id="nbchvaut2" checked /> 2 -> + 90 &#x20AC  <br />
  <input type="radio" name="nbchambres" value="110" id="nbchvaut3" />   3 -> + 110 &#x20AC  <br />
  <input type="radio" name="nbchambres" value="150" id="nbchvaut4" />   4 et plus -> + 150 &#x20AC
</p>
<p>Ajout:</p>
<p>
  <input type="checkbox" name="ajout" id="jardin" value="230" />Jardin -> 230 &#x20AC  <br />
  <input type="checkbox" name="ajout" id="piscine" value="500" />Piscine -> 500 &#x20AC<br  />
  <input type="checkbox" name="ajout" id="jacuzzi" value="230" />Jacuzzi -> 350 &#x20AC
</p>
<p>Cheminee</p>
<p>
  <select name="cheminee" id="cheminee">
    <option value="0">Pas de cheminee</option>
    <option value="400">Modele 1 -> 400 &#x20AC</option>
    <option value="450">Modele 2 -> 450 &#x20AC</option>
    <option value="500">Modele 3 -> 500 &#x20AC</option>
    <option value="550">Modele 4 -> 550 &#x20AC</option>
    <option value="600">Modele 5 -> 600 &#x20AC</option>
    <option value="650">Modele 6 -> 650 &#x20AC</option>
    <option value="700">Modele 7 -> 700 &#x20AC</option>
  </select>
</p>
<p>
<INPUT type="text" maxLength=10 size=10 name='total' id="total" value="total:" readonly>
</p>
<p>&nbsp;</p>
<input type="button" value="Faire le total" onClick="Calcul()">
 </form>
</body>
</html>
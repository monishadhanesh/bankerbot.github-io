<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style2.css">
<link href="https://fonts.googleapis.com/css?family=Cabin|Nunito+Sans&display=swap" rel="stylesheet">
</head>
<body>
<style>

</style>
<div class="header">
    <img src="bank.png" width=100%">
  </div>
<div class="container">
<form action=""> 
 <div class="form-group">
 
  <select class="form-control" id="sel1"  onchange="showregion(this.value)">
    <option value="">select region:</option>
    <option value="ambadur">Ambadur</option>
    <option value="alwarpet">alwarpet</option>
    <option value="aminjikarai">aminjikarai</option>
      <option value="Adyar">Adyar</option>
        <option value="anna nagar">anna nagar</option>
          <option value="Anna flyover">Anna flyover</option>
  </select>
</div>
</form>
<br>
<div id="txtHint">bank branch information will be listed here...</div>
</div>
<script>
function showregion(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax.php?q="+str, true);
  xhttp.send();
}
</script>
</body>
</html>

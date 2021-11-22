document.getElementById('image1').onchange = function () {
  console.log(this.value);
  document.getElementById('fichero').innerHTML = document.getElementById('image1').files[0].name;
}

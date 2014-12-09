/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function computeCalories()
{
    var monbrk = parseInt(document.getElementById('monbrk').value);
    var monlun = parseInt(document.getElementById('monlun').value);
    var mondin = parseInt(document.getElementById('mondin').value);
    var tuebrk = parseInt(document.getElementById('tuebrk').value);
    var tuelun = parseInt(document.getElementById('tuelun').value);
    var tuedin = parseInt(document.getElementById('tuedin').value);
    var wedbrk = parseInt(document.getElementById('wedbrk').value);
    var wedlun = parseInt(document.getElementById('wedlun').value);
    var weddin = parseInt(document.getElementById('weddin').value);
    var thubrk = parseInt(document.getElementById('thubrk').value);
    var thulun = parseInt(document.getElementById('thulun').value);
    var thudin = parseInt(document.getElementById('thudin').value);
    var fribrk = parseInt(document.getElementById('fribrk').value);
    var frilun = parseInt(document.getElementById('frilun').value);
    var fridin = parseInt(document.getElementById('fridin').value);
    var satbrk = parseInt(document.getElementById('satbrk').value);
    var satlun = parseInt(document.getElementById('satlun').value);
    var satdin = parseInt(document.getElementById('satdin').value);
    var sunbrk = parseInt(document.getElementById('sunbrk').value);
    var sunlun = parseInt(document.getElementById('sunlun').value);
    var sundin = parseInt(document.getElementById('sundin').value);
  

document.getElementById('mon').innerHTML = monbrk + monlun + mondin;
document.getElementById('tues').innerHTML = tuebrk + tuelun + tuedin;
document.getElementById('wed').innerHTML = wedbrk + wedlun + weddin;
document.getElementById('thurs').innerHTML = thubrk + thulun + thudin;
document.getElementById('fri').innerHTML = fribrk + frilun + fridin;
document.getElementById('sat').innerHTML = satbrk + satlun + satdin;
document.getElementById('sun').innerHTML = sunbrk + sunlun + sundin;



}



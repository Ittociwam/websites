/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function quiz()
{
   var radios = document.getElementsByName('crap').value;
   var radios = document.getElementsByName('squash').value;

for (var i = 0, length = radios.length; i < length; i++) {
    if (radios[i].checked) {
        // do whatever you want with the checked radio
        alert(radios[i].value);
document.getElementsByName('squash').innerHTML = "You are not ready";
        // only one radio can be logically checked, don't check the rest
        break;
    }
}
}
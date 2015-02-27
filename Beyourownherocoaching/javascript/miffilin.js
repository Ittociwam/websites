/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function miffilinFormula()
{
 var weight = parseFloat(document.getElementById('weight').value);
 var height = parseFloat(document.getElementById('height').value);
 var age = parseInt(document.getElementById('age').value);
 var sex = (document.getElementById('sex').value);
 var activity = parseFloat(document.getElementById('activity').value);
 
 // convert in to cm and lbs to kg
 
 weight /= 2.2;
 height *= 2.54;
 
 // miffilin formula
 if (sex === 'M' || 'm')
 {
 var rmr = (10 * weight) + (6.25 * height) - (5 * age) + 5;
 }
 
 else (sex === 'F' || sex === 'f')
 {
     rmr = (10 * weight) + (6.25 * height) - (5 * age) - 161;
 }

if(activity == 1)
{
    activity = 1.2;
}
else if(activity == 2)
{
    activity = 1.375;
}
 else if(activity == 3)
{
    activity = 1.55;
}
else if(activity == 4)
{
    activity = 1.725;
}
else if(activity == 5)
{
    activity = 1.9;
}

calories = rmr * activity;

calories = Math.round(calories);

document.getElementById('calories').innerHTML = "You must eat " + "<b>" + calories + "</b>" + " calories a day to maintain a healthy weight.";
document.getElementById('minusPound').innerHTML = "You must eat " + "<b>" + (calories - 500)+ "</b>"  + " to lose aproximately 1 pound a week";
document.getElementById('minusTwoPound').innerHTML = "You must eat " + "<b>" + (calories - 1000)+ "</b>"  + " to lose aproximately 2 pounds a week";


}
//configure the paths of the images, plus corresponding target links
slideshowimages("/media/image/nutrition.jpg", "/media/image/fitness.jpg", "/media/image/weight-loss.jpg", "/media/image/body-image.jpg")
slideshowlinks("http://beyourownherocoaching.com/head-nav/nutrition/nutrition.php", "http://beyourownherocoaching.com/head-nav/fitness/fitness.php", "http://beyourownherocoaching.com/head-nav/weight-loss/weight-loss.php", "http://beyourownherocoaching.com/head-nav/body-image/body-image.php")

//configure the speed of the slideshow, in miliseconds
var slideshowspeed = 3000

var whichlink = 0
var whichimage = 0
function slideit() {
    if (!document.images)
        return
    document.images.slide.src = slideimages[whichimage].src
    whichlink = whichimage
    if (whichimage < slideimages.length - 1)
        whichimage++
    else
        whichimage = 0
    setTimeout("slideit()", slideshowspeed)
}
slideit()
//-->
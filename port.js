for (var i = 0; i < document.images.length; i++)
{
  var image = document.images[i] 
  var bigImage = document.createElement("img")
  bigImage.onload = function() {
    image.src = this.src
  }
  
  setTimeout(function() {
    bigImage.src = "images/bigversion"//replace with the main source
    
  }, 50)
}

//in the html only use the small compressed versions
//then here for the big image.src load the big version using string manip to change the src
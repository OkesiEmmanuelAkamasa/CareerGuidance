function loadMap(){
var mapCanvas=document.getElementByClassName("ourMap");

var mapProps= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
};
var map=new google.maps.Map(mapCanvas,mapProps);
}
return loadMap();
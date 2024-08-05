am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_dark);
am4core.useTheme(am4themes_animated);
// Themes end

// Create map instance
var chart = am4core.create("chartdiv", am4maps.MapChart);

// Set map definition
chart.geodata = am4geodata_worldLow;

// Set projection
chart.projection = new am4maps.projections.Miller();

// Create map polygon series
var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());

// Exclude Antartica
polygonSeries.exclude = ["AQ"];

// Make map load polygon (like country names) data from GeoJSON
polygonSeries.useGeodata = true;

// Configure series
var polygonTemplate = polygonSeries.mapPolygons.template;
polygonTemplate.tooltipText = "{name}";
polygonTemplate.polygon.fillOpacity = 0.6;


// Create hover state and set alternative fill color
var hs = polygonTemplate.states.create("hover");
hs.properties.fill = chart.colors.getIndex(0);

// Add image series
var imageSeries = chart.series.push(new am4maps.MapImageSeries());
imageSeries.mapImages.template.propertyFields.longitude = "longitude";
imageSeries.mapImages.template.propertyFields.latitude = "latitude";
imageSeries.mapImages.template.tooltipText = "{title}";
imageSeries.mapImages.template.propertyFields.url = "url";

var circle = imageSeries.mapImages.template.createChild(am4core.Circle);
circle.radius = 3;
circle.propertyFields.fill = "color";

var circle2 = imageSeries.mapImages.template.createChild(am4core.Circle);
circle2.radius = 3;
circle2.propertyFields.fill = "color";


circle2.events.on("inited", function(event){
  animateBullet(event.target);
})


function animateBullet(circle) {
    var animation = circle.animate([{ property: "scale", from: 1, to: 5 }, { property: "opacity", from: 1, to: 0 }], 1000, am4core.ease.circleOut);
    animation.events.on("animationended", function(event){
      animateBullet(event.target.object);
    })
}

var colorSet = new am4core.ColorSet();

imageSeries.data = [ {
            "title": "Albania",
            "latitude": 41.000028,
            "longitude": 19.9999619,
            "color":colorSet.next()
          }, {
            "title": "United States of America",
            "latitude": 39.7837304,
            "longitude": -100.4458825,
            "color":colorSet.next()
          },
		  {
            "title": "Kosovo",
            "latitude": 42.5869578,
            "longitude": 20.9021231,
            "color":colorSet.next()
          }, {
            "title": "Romania",
            "latitude": 45.9852129,
            "longitude": 24.6859225,
            "color":colorSet.next()
          }, {
            "title": "Ukraine",
            "latitude": 49.4871968,
            "longitude": 31.2718321,
            "color":colorSet.next()
          }, {
            "title": "Vietnam",
            "latitude": 13.2904027,
            "longitude": 108.4265113,
            "color":colorSet.next()
          }, {
            "title": "Taiwan",
            "latitude": 23.9739374,
            "longitude": 120.9820179,
            "color":colorSet.next()
          }, {
            "title": "Kuwait",
            "latitude": 29.2733964,
            "longitude": 47.4979476,
            "color":colorSet.next()
          }, {
            "title": "Israel",
            "latitude": 31.5313113,
            "longitude": 34.8667654,
            "color":colorSet.next()
          }, {
            "title": "Poland",
            "latitude": 52.215933,
            "longitude": 19.134422,
            "color":colorSet.next()
          }, {
            "title": "Colombia",
            "latitude": 2.8894434,
            "longitude": -73.783892,
            "color":colorSet.next()
          }, {
            "title": "Kazakhstan",
            "latitude": 47.2286086,
            "longitude": 65.2093197,
            "color":colorSet.next()
          }, {
            "title": "Sri lanka",
            "latitude": 7.8731,
            "longitude": 80.7718,
            "color":colorSet.next()
          },{
            "title": "UAE",
            "latitude": 24.530677795410156,
            "longitude": 54.48679733276367,
            "color":colorSet.next()
          },{
            "title": "China",
            "latitude": 35.000074,
            "longitude": 104.999927,
            "color":colorSet.next()
          },{
            "title": "Azerbaijan",
            "latitude": 40.3936294,
            "longitude": 47.7872508,
            "color":colorSet.next()
          },{
            "title": "Mexico",
            "latitude": 19.432608,
            "longitude": -99.133209,
            "color":colorSet.next()
          },{
            "title": "Brazil",
            "latitude": -10.3333333,
            "longitude": -53.2,
            "color":colorSet.next()
          },{
            "title": "Belgium",
            "latitude": 50.6402809,
            "longitude": 4.6667145,
            "color":colorSet.next()
          },{
            "title": "Nepal",
            "latitude": 28.1083929,
            "longitude": 84.0917139,
            "color":colorSet.next()
          },{
            "title": "South Africa",
            "latitude": -28.8166236,
            "longitude": 24.991639,
            "color":colorSet.next()
          },{
            "title": "Morocco ",
            "latitude": 31.1728205,
            "longitude": -7.3362482,
            "color":colorSet.next()
          },  
		  {
            "title": "Sri Lanka",
            "latitude": 7.5554942,
            "longitude": 80.7137847,
            "color":colorSet.next()
          } ];



}); // end am4core.ready()
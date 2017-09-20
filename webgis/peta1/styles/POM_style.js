var size = 0;

var styleCache_POM={}
var style_POM = function(feature, resolution){
    var value = ""
    var size = 0;
    var style = [ new ol.style.Style({
        image: new ol.style.Circle({radius: 4.0 + size,
            stroke: new ol.style.Stroke({color: "rgba(0,0,0,1.0)", lineDash: null, lineCap: 'butt', lineJoin: 'miter', width: 0}), fill: new ol.style.Fill({color: "rgba(232,0,0,1.0)"})})
    })];
    if (feature.get("Nomor_Pom") !== null) {
        var labelText = String(feature.get("Nomor_Pom"));
    } else {
        var labelText = ""
    }
    var key = value + "_" + labelText

    if (!styleCache_POM[key]){
        var text = new ol.style.Text({
              font: '12.025px \'MS Shell Dlg 2\', sans-serif',
              text: labelText,
              textBaseline: "center",
              textAlign: "left",
              offsetX: 5,
              offsetY: 3,
              fill: new ol.style.Fill({
                color: "rgba(0, 0, 0, 255)"
              }),
              stroke: new ol.style.Stroke({
                color: "#ffffff",
                width: 1
              }),
            });
        styleCache_POM[key] = new ol.style.Style({"text": text})
    }
    var allStyles = [styleCache_POM[key]];
    allStyles.push.apply(allStyles, style);
    return allStyles;
};
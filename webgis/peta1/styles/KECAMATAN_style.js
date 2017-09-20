var size = 0;
var categories_KECAMATAN = {"BEJI": [ new ol.style.Style({
        stroke: new ol.style.Stroke({color: "rgba(0,0,0,0.65)", lineDash: null, lineCap: 'butt', lineJoin: 'miter', width: 0}), fill: new ol.style.Fill({color: "rgba(255,245,235,0.65)"})
    })],
"BOJONGSARI": [ new ol.style.Style({
        stroke: new ol.style.Stroke({color: "rgba(0,0,0,0.65)", lineDash: null, lineCap: 'butt', lineJoin: 'miter', width: 0}), fill: new ol.style.Fill({color: "rgba(254,234,214,0.65)"})
    })],
"CILODONG": [ new ol.style.Style({
        stroke: new ol.style.Stroke({color: "rgba(0,0,0,0.65)", lineDash: null, lineCap: 'butt', lineJoin: 'miter', width: 0}), fill: new ol.style.Fill({color: "rgba(255,254,215,0.65)"})
    })],
"CIMANGGIS": [ new ol.style.Style({
        stroke: new ol.style.Stroke({color: "rgba(0,0,0,0.65)", lineDash: null, lineCap: 'butt', lineJoin: 'miter', width: 0}), fill: new ol.style.Fill({color: "rgba(253,204,156,0.65)"})
    })],
"CINERE": [ new ol.style.Style({
        stroke: new ol.style.Stroke({color: "rgba(0,0,0,0.65)", lineDash: null, lineCap: 'butt', lineJoin: 'miter', width: 0}), fill: new ol.style.Fill({color: "rgba(253,180,118,0.65)"})
    })],
"CIPAYUNG": [ new ol.style.Style({
        stroke: new ol.style.Stroke({color: "rgba(0,0,0,0.65)", lineDash: null, lineCap: 'butt', lineJoin: 'miter', width: 0}), fill: new ol.style.Fill({color: "rgba(253,157,83,0.65)"})
    })],
"LIMO": [ new ol.style.Style({
        stroke: new ol.style.Stroke({color: "rgba(0,0,0,0.65)", lineDash: null, lineCap: 'butt', lineJoin: 'miter', width: 0}), fill: new ol.style.Fill({color: "rgba(250,133,51,0.65)"})
    })],
"PANCORAN MAS": [ new ol.style.Style({
        stroke: new ol.style.Stroke({color: "rgba(0,0,0,0.65)", lineDash: null, lineCap: 'butt', lineJoin: 'miter', width: 0}), fill: new ol.style.Fill({color: "rgba(150,66,14,0.65)"})
    })],
"SAWANGAN": [ new ol.style.Style({
        stroke: new ol.style.Stroke({color: "rgba(0,0,0,0.65)", lineDash: null, lineCap: 'butt', lineJoin: 'miter', width: 0}), fill: new ol.style.Fill({color: "rgba(226,85,8,0.65)"})
    })],
"SUKMAJAYA": [ new ol.style.Style({
        stroke: new ol.style.Stroke({color: "rgba(0,0,0,0.65)", lineDash: null, lineCap: 'butt', lineJoin: 'miter', width: 0}), fill: new ol.style.Fill({color: "rgba(249,74,0,0.65)"})
    })],
"TAPOS": [ new ol.style.Style({
        stroke: new ol.style.Stroke({color: "rgba(0,0,0,0.65)", lineDash: null, lineCap: 'butt', lineJoin: 'miter', width: 0}), fill: new ol.style.Fill({color: "rgba(162,52,3,0.65)"})
    })],
"": [ new ol.style.Style({
        stroke: new ol.style.Stroke({color: "rgba(0,0,0,0.65)", lineDash: null, lineCap: 'butt', lineJoin: 'miter', width: 0}), fill: new ol.style.Fill({color: "rgba(127,39,4,0.65)"})
    })]};
var styleCache_KECAMATAN={}
var style_KECAMATAN = function(feature, resolution){
    var value = feature.get("Kec");
    var style = categories_KECAMATAN[value];
    if (feature.get("Kec") !== null) {
        var labelText = String(feature.get("Kec"));
    } else {
        var labelText = ""
    }
    var key = value + "_" + labelText

    if (!styleCache_KECAMATAN[key]){
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
        styleCache_KECAMATAN[key] = new ol.style.Style({"text": text})
    }
    var allStyles = [styleCache_KECAMATAN[key]];
    allStyles.push.apply(allStyles, style);
    return allStyles;
};
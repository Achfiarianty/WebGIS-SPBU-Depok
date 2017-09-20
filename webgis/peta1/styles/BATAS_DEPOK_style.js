var size = 0;
var categories_BATAS_DEPOK = {"Bekasi": [ new ol.style.Style({
        stroke: new ol.style.Stroke({color: "rgba(0,0,0,0.7)", lineDash: null, lineCap: 'butt', lineJoin: 'miter', width: 0}), fill: new ol.style.Fill({color: "rgba(255,255,0,0.7)"})
    })],
"Jakarta Selatan": [ new ol.style.Style({
        stroke: new ol.style.Stroke({color: "rgba(0,0,0,0.7)", lineDash: null, lineCap: 'butt', lineJoin: 'miter', width: 0}), fill: new ol.style.Fill({color: "rgba(238,221,0,0.7)"})
    })],
"Jakarta Timur": [ new ol.style.Style({
        stroke: new ol.style.Stroke({color: "rgba(0,0,0,0.7)", lineDash: null, lineCap: 'butt', lineJoin: 'miter', width: 0}), fill: new ol.style.Fill({color: "rgba(221,187,0,0.7)"})
    })],
"Kabupaten Bogor": [ new ol.style.Style({
        stroke: new ol.style.Stroke({color: "rgba(0,0,0,0.7)", lineDash: null, lineCap: 'butt', lineJoin: 'miter', width: 0}), fill: new ol.style.Fill({color: "rgba(204,153,0,0.7)"})
    })],
"Tanggerang Selatan": [ new ol.style.Style({
        stroke: new ol.style.Stroke({color: "rgba(0,0,0,0.7)", lineDash: null, lineCap: 'butt', lineJoin: 'miter', width: 0}), fill: new ol.style.Fill({color: "rgba(187,119,0,0.7)"})
    })],
"": [ new ol.style.Style({
        stroke: new ol.style.Stroke({color: "rgba(0,0,0,0.7)", lineDash: null, lineCap: 'butt', lineJoin: 'miter', width: 0}), fill: new ol.style.Fill({color: "rgba(170,85,0,0.7)"})
    })]};
var styleCache_BATAS_DEPOK={}
var style_BATAS_DEPOK = function(feature, resolution){
    var value = feature.get("Nama");
    var style = categories_BATAS_DEPOK[value];
    if (feature.get("Nama") !== null) {
        var labelText = String(feature.get("Nama"));
    } else {
        var labelText = ""
    }
    var key = value + "_" + labelText

    if (!styleCache_BATAS_DEPOK[key]){
        var text = new ol.style.Text({
              font: '10.725px \'MS Shell Dlg 2\', sans-serif',
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
        styleCache_BATAS_DEPOK[key] = new ol.style.Style({"text": text})
    }
    var allStyles = [styleCache_BATAS_DEPOK[key]];
    allStyles.push.apply(allStyles, style);
    return allStyles;
};
var size = 0;

var styleCache_NAMA_JALAN={}
var style_NAMA_JALAN = function(feature, resolution){
    var value = ""
    var size = 0;
    var style = [ new ol.style.Style({
        stroke: new ol.style.Stroke({color: "rgba(52,54,148,1.0)", lineDash: null, lineCap: 'square', lineJoin: 'bevel', width: 0}),
    })];
    if (feature.get("Nama") !== null) {
        var labelText = String(feature.get("Nama"));
    } else {
        var labelText = ""
    }
    var key = value + "_" + labelText

    if (!styleCache_NAMA_JALAN[key]){
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
            });
        styleCache_NAMA_JALAN[key] = new ol.style.Style({"text": text})
    }
    var allStyles = [styleCache_NAMA_JALAN[key]];
    allStyles.push.apply(allStyles, style);
    return allStyles;
};
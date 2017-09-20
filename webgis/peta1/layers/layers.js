var baseLayer = new ol.layer.Group({
    'title': 'Base maps',
    layers: [
new ol.layer.Tile({
    'title': 'OSM',
    'type': 'base',
    source: new ol.source.OSM()
})
]
});
var format_BATAS_DEPOK = new ol.format.GeoJSON();
var features_BATAS_DEPOK = format_BATAS_DEPOK.readFeatures(geojson_BATAS_DEPOK, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_BATAS_DEPOK = new ol.source.Vector();
jsonSource_BATAS_DEPOK.addFeatures(features_BATAS_DEPOK);var lyr_BATAS_DEPOK = new ol.layer.Vector({
                source:jsonSource_BATAS_DEPOK, 
                style: style_BATAS_DEPOK,
                title: "BATAS_DEPOK"
            });var format_KECAMATAN = new ol.format.GeoJSON();
var features_KECAMATAN = format_KECAMATAN.readFeatures(geojson_KECAMATAN, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_KECAMATAN = new ol.source.Vector();
jsonSource_KECAMATAN.addFeatures(features_KECAMATAN);var lyr_KECAMATAN = new ol.layer.Vector({
                source:jsonSource_KECAMATAN, 
                style: style_KECAMATAN,
                title: "KECAMATAN"
            });var format_NAMA_JALAN = new ol.format.GeoJSON();
var features_NAMA_JALAN = format_NAMA_JALAN.readFeatures(geojson_NAMA_JALAN, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_NAMA_JALAN = new ol.source.Vector();
jsonSource_NAMA_JALAN.addFeatures(features_NAMA_JALAN);var lyr_NAMA_JALAN = new ol.layer.Vector({
                source:jsonSource_NAMA_JALAN, 
                style: style_NAMA_JALAN,
                title: "NAMA_JALAN"
            });var format_POM = new ol.format.GeoJSON();
var features_POM = format_POM.readFeatures(geojson_POM, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_POM = new ol.source.Vector();
jsonSource_POM.addFeatures(features_POM);var lyr_POM = new ol.layer.Vector({
                source:jsonSource_POM, 
                style: style_POM,
                title: "POM"
            });

lyr_BATAS_DEPOK.setVisible(true);lyr_KECAMATAN.setVisible(true);lyr_NAMA_JALAN.setVisible(true);lyr_POM.setVisible(true);
var layersList = [baseLayer,lyr_BATAS_DEPOK,lyr_KECAMATAN,lyr_NAMA_JALAN,lyr_POM];
lyr_BATAS_DEPOK.set('fieldAliases', {'id': 'id', 'Nama': 'Nama', });
lyr_KECAMATAN.set('fieldAliases', {'id': 'id', 'Kec': 'Kec', });
lyr_NAMA_JALAN.set('fieldAliases', {'id': 'id', 'Nama': 'Nama', });
lyr_POM.set('fieldAliases', {'id': 'id', 'Nama_Pom': 'Nama_Pom', 'Nomor_Pom': 'Nomor_Pom', 'Alamat_Pom': 'Alamat_Pom', });
lyr_BATAS_DEPOK.set('fieldImages', {'id': 'TextEdit', 'Nama': 'TextEdit', });
lyr_KECAMATAN.set('fieldImages', {'id': 'TextEdit', 'Kec': 'TextEdit', });
lyr_NAMA_JALAN.set('fieldImages', {'id': 'TextEdit', 'Nama': 'TextEdit', });
lyr_POM.set('fieldImages', {'id': 'TextEdit', 'Nama_Pom': 'TextEdit', 'Nomor_Pom': 'TextEdit', 'Alamat_Pom': 'TextEdit', });
lyr_BATAS_DEPOK.set('fieldLabels', {'id': 'no label', 'Nama': 'header label', });
lyr_KECAMATAN.set('fieldLabels', {'id': 'no label', 'Kec': 'header label', });
lyr_NAMA_JALAN.set('fieldLabels', {'id': 'no label', 'Nama': 'header label', });
lyr_POM.set('fieldLabels', {'id': 'no label', 'Nama_Pom': 'header label', 'Nomor_Pom': 'inline label', 'Alamat_Pom': 'inline label', });

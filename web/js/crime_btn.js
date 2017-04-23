$('input[name="fancy-checkbox-crime"]').on('change', function () {

    if (document.getElementById('fancy-checkbox-crime').checked) {

        console.log(crimemarkers.length);

        for (var it in crimemarkers) {
            crimemarkers[it].setVisible(true);
        }
        //console.log(crimeMarkerCluster);
        crimeMarkerCluster.repaint();
    } else {
        for (var it2 in crimemarkers) {
            crimemarkers[it2].setVisible(false);
        }

        //crimeMarkerCluster.ignoreHiddenPoint = true;
        crimeMarkerCluster.repaint();
    }
});
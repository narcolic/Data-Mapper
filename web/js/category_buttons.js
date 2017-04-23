function categoryToggle(element, markerList, markerCluster) {
    element.on('change', function () {
            if (this.checked) {
                for (var it in markerList) {
                    if (markerList.hasOwnProperty(it)) {
                        markerList[it].setVisible(true);
                    }

                }
                //console.log(crimeMarkerCluster);
                markerCluster.repaint();
            } else {
                for (var it2 in markerList) {
                    if (markerList.hasOwnProperty(it2)) {
                        markerList[it2].setVisible(false);
                    }
                }

                //crimeMarkerCluster.ignoreHiddenPoint = true;
                markerCluster.repaint();
            }
        }
    )

}

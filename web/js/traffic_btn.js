$('input[name="fancy-checkbox-traffic"]').on('change', function () {

    if (document.getElementById('fancy-checkbox-traffic').checked) {
        trafficLayer.setMap(map);
        //console.log("in checked");
        //console.log($(this).val() + ' is now checked');
    } else {
        //console.log("not checked");
        //console.log($(this).val() + ' is now unchecked');
        trafficLayer.setMap(null);
    }
});

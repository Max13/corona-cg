// Cases map
(function() {
    let initialBounds = L.latLngBounds([4.324501493019203, 9.843750000000002], [-5.659718554577286, 19.841308593750004]),
                        //              ^-- North West                          ^-- South East
                        // L.latLngBounds([4.8337333961564255, 10.618286132812502], [-6.337137394988521, 19.676513671875004]),
        casesMap = L.map(
            'casesMap',
            {
                center: [-0.6701507351859187, 14.842529296875002],
                maxBounds: initialBounds,
                minZoom: 6,
                maxZoom: 8,
                zoom: 6
            }
        )/*.on('zoomend', function() {
            console.log(this.getBounds());
            // let bounds = this.getBounds(),
            //     shiftLat = (bounds.getEast() - bounds.getWest()) / 2,
            //     shiftLon = (bounds.getNorth() - bounds.getSouth()) / 2,
            //     nw = L.latLng(initialBounds.getNorth() + shiftLat, initialBounds.getWest() - shiftLon),
            //     se = L.latLng(initialBounds.getSouth() - shiftLat, initialBounds.getEast() + shiftLon);

            // console.log('Current bounds', initialBounds.getNorthWest());
            // console.log('Shifts (Lat/Lon)', shiftLat, shiftLon);
            // console.log('NW Clone', nw);
            // console.log('New bounds', nw.subtract([shiftLat, shiftLon]), se.add([shiftLat, shiftLon]));
            // this.setMaxBounds(nw, se);
            // console.log('Set bounds', this.getBounds());
        })*/;

    L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
    }).addTo(casesMap);

    // Overlay rest of the world, except Congo
    $.getJSON('/assets/build/json/CG.geojson')
     .done(data => {
        L.polygon(
            [
                [[90, -180], [90, 180], [-90, 180], [-90, -180], [90, -180]],
                L.GeoJSON.coordsToLatLngs(data.features[0].geometry.coordinates),
            ],
            {
                color: 'gray',
                fillOpacity: 0.85,
                pane: 'mapPane',
            }
        ).addTo(casesMap);
    });

    // Show data on the map
    $.getJSON('/data.json')
     .done(data => {
        let locations = [];

        data.locations.forEach(loc => {
            // Confirmed
            locations.push({
                coordinates: loc.coordinates,
                count: loc.count,
                options: {
                    color: loc.count ? 'crimson' : 'blue',
                    fillColor: loc.count ? 'crimson' : 'blue',
                    fillOpacity: 0.5,
                    radius: loc.count ? Math.max(loc.count, 5) * 3000 : 5000,
                    weight: 2,
                },
                popupText: `<span class="text-center"><b>${loc.city}</b><br>${loc.count} cas</span>`,
            });

            // Recovered
            if (loc.recovered) {
                locations.push({
                    coordinates: loc.coordinates,
                    count: loc.recovered,
                    options: {
                        color: 'lime',
                        fillColor: 'lime',
                        fillOpacity: 0.5,
                        radius: Math.max(loc.recovered, 5) * 3000,
                        weight: 2,
                    },
                    popupText: `<span class="text-center"><b>${loc.city}</b><br>${loc.recovered} guéris</span>`,
                });
            }
        });

        locations.sort((first, second) => second.count - first.count)
                 .forEach(loc => {
                    L.circle(loc.coordinates, loc.options)
                     .bindPopup(loc.popupText, {
                        className: 'text-center',
                    }).addTo(casesMap);
                 });
    });
})();

// Equalize prevention blocks
$(function() {
    let $doPreventions = $('.single-prevention.do-prevention'),
        $dontPreventions = $('.single-prevention.dont-prevention');

    for (let i = 0, z = $doPreventions.length; i < z; ++i) {
        let maxHeight = Math.max(
            $doPreventions.eq(i).outerHeight(),
            $dontPreventions.eq(i).outerHeight()
        );

        $doPreventions.eq(i).outerHeight(maxHeight);
        $dontPreventions.eq(i).outerHeight(maxHeight);
    }
});

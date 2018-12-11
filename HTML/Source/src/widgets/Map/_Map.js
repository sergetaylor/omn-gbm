import "mapbox-gl/dist/mapbox-gl.css";
import mapboxgl from "mapbox-gl";
import axios from "axios";


export function init() {
    let wrappers = document.querySelectorAll("[map-wrapper]");
    if (wrappers.length) {
        [].map.call(wrappers, function (wrapper) {
            if (wrapper.dataset.url) {
                getData(wrapper);
            } else {
                let map = wrapper.querySelector("[map-container]");
                intiateMap(map)
            }
        });
    }
}
var mapProp = {
    mapKey: "pk.eyJ1IjoiYWxqZGV2ZWxvcG1lbnQiLCJhIjoiY2owdXY4MDZxMDVoNzMzcng5aGhsdnk1bCJ9.wKplpS83vO0HMISMatCAdw",
    markers: [],
    center: [45.0792, 23.8859],
    zoom: 13,
    popover: false
};

function getData(wrapper) {
    let url = wrapper.dataset.url;
    let map = wrapper.querySelector("[map-container]");
    let filter = wrapper.querySelector("[map-filter]");
    let matchesList = wrapper.querySelector("[map-matches]");

    axios({
        method: "GET",
        url: url,
        params: {
            "filter": filter ? filter.value : ""
        }
    }).then(function (response) {
        if (map) {
            intiateMap(map, response.data.locators);
        }
        if (filter) {
            initiateFilter(wrapper, filter, response.data.filter);
        }
        if (matchesList) {
            matchesList.innerHTML = response.data.matches;
        }
    });
}

function filterData(wrapper) {
    let url = wrapper.dataset.url;
    let map = wrapper.querySelector("[map-container]");
    let filter = wrapper.querySelector("[map-filter]");
    let matchesList = wrapper.querySelector("[map-matches]");

    axios({
        method: "GET",
        url: url,
        params: {
            "filter": filter.value
        }
    }).then(function (response) {
        if (map) {
            intiateMap(map, response.data.locators);
        }
        if (matchesList) {
            matchesList.innerHTML = response.data.matches;
        }
    });
}

function initiateFilter(wrapper, filter, value) {
    filter.value = value;
    filter.addEventListener(
        "change",
        function (e) {
            filterData(wrapper);
        },
        false
    );
}

function intiateMap(elem, markers) {
    var obj = JSON.parse(elem.getAttribute("map-container"));
    if (markers) {
        obj.markers = markers;
    }
    obj.style = !obj.style ? (obj.style = mapProp.style) : obj.style;
    obj.zoom = !obj.zoom ? (obj.zoom = mapProp.zoom) : obj.zoom;
    obj.popover = !obj.popover ? (obj.popover = mapProp.popover) : obj.popover;
    obj.center = !obj.center ? (obj.center = mapProp.center) : obj.center;

    mapboxgl.accessToken = mapProp.mapKey;
    var mapbox = new mapboxgl.Map({
        container: elem,
        center: obj.center,
        zoom: obj.zoom,
        scrollZoom: false,
    }).on('load',function(){
        mapbox.resize();
        
    });
    
    
    if (obj.style === "streets") {
        mapbox.setStyle("mapbox://styles/mapbox/streets-v9");
    } else if (obj.style === "light") {
        mapbox.setStyle("mapbox://styles/mapbox/light-v9");
    } else if (obj.style === "dark") {
        mapbox.setStyle("mapbox://styles/mapbox/dark-v9");
    } else {
        mapbox.setStyle("mapbox://styles/aljdevelopment/cjiu9ane85cwh2sob1pqnu3em");
    }

    if (Object.keys(obj.markers).length > 0) {
        let markersLocators = obj.markers;
        if (markersLocators) {
            [].map.call(markersLocators, marker => {
                var el = document.createElement("div");
                el.className = "marker";
                if (marker.icon) {
                    el.style.backgroundImage = "URL('" + marker.icon + "')";
                } else {
                    var icon = `<a uk-tooltip="${marker.label}" class="pulse"></a>`;
                    el.innerHTML = icon;
                }
                if (obj.popover) {
                    new mapboxgl.Marker(el)
                        .setLngLat(marker.coordinates)
                        .setPopup(
                            new mapboxgl.Popup({
                                offset: 25
                            }).setHTML(
                                '<div class="header"><img src="' +
                                marker.image +
                                '"><h3>' +
                                marker.title +
                                "</h3></div>" +
                                marker.content
                            )
                        )
                        .addTo(mapbox);
                } else {
                    new mapboxgl.Marker(el).setLngLat(marker.coordinates).addTo(mapbox);
                }
            });
        }
    }
}

init();





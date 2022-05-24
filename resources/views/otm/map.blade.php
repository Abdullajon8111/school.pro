@push('after_styles')
    <script>

        const mapData = {
            "UZB364": {
                "name": "Farg‘ona viloyati",
                "description": "11"
            },
            "UZB4828": {
                "name": "Toshkent viloyati",
                "description": "9"
            },
            "UZB362": {
                "name": "Surxandaryo",
                "description": "6"
            },
            "UZB361": {"name": "Qashqadaryo", "description": "6"},
            "UZB358": {"name": "Samarqand", "description": "13"},
            "UZB357": {"name": "Navoiy", "description": "2"},
            "UZB355": {"name": "Xorazm", "description": "7"},
            "UZB354": {
                "name": "Buxoro",
                "description": "6"
            },
            "UZB365": {
                "name": "Namangan",
                "description": "3"
            },
            "UZB371": {
                "name": "Sirdaryo viloyati",
                "description": "2"
            },
            "UZB370": {
                "name": "Jizzax viloyati",
                "description": "5"
            },
            "UZB363": {
                "name": "Andijon",
                "description": "8"
            },
            "UZB372": {
                "name": "Toshkent viloyati",
                "description": "9"
            },
            "UZB356": {
                "name": "Qoraqalpog`iston Respublikasi",
                "description": "10"
            }
        };

        var simplemaps_countrymap_mapdata = {
            main_settings: {
                //General settings
                width: "responsive", //'700' or 'responsive'
                background_color: "#FFFFFF",
                background_transparent: "yes",
                border_color: "#ffffff",

                //State defaults
                state_description: "State description",
                state_color: "#88A4BC",
                state_hover_color: "#3B729F",
                state_url: "",
                border_size: 1.5,
                all_states_inactive: "no",
                all_states_zoomable: "yes",

                //Location defaults
                location_description: "Location description",
                location_url: "",
                location_color: "#FF0067",
                location_opacity: 0.8,
                location_hover_opacity: 1,
                location_size: 25,
                location_type: "square",
                location_border_color: "#FFFFFF",
                location_border: 2,
                location_hover_border: 2.5,
                all_locations_inactive: "no",
                all_locations_hidden: "no",

                //Label defaults
                label_color: "#d5ddec",
                label_hover_color: "#d5ddec",
                label_size: 22,
                label_font: "Arial",
                hide_labels: "no",
                hide_eastern_labels: "no",

                //Zoom settings
                zoom: "no",
                manual_zoom: "no",
                back_image: "no",
                initial_back: "no",
                initial_zoom: "-1",
                initial_zoom_solo: "no",
                region_opacity: 1,
                region_hover_opacity: 0.6,
                zoom_out_incrementally: "yes",
                zoom_percentage: 0.99,
                zoom_time: 0.5,

                //Popup settings
                popup_color: "white",
                popup_opacity: 0.9,
                popup_shadow: 1,
                popup_corners: 5,
                popup_font: "12px/1.5 Verdana, Arial, Helvetica, sans-serif",
                popup_nocss: "no",

                //Advanced settings
                div: "map",
                auto_load: "yes",
                url_new_tab: "no",
                images_directory: "default",
                fade_time: 0.1,
                link_text: "View Website",
                popups: "detect",
                state_image_url: "",
                state_image_position: "",
                location_image_url: ""
            },
            state_specific: mapData,
        };

    </script>

    <style>

        #map_inner a {
            display: none !important;
            width: 0;
        }

    </style>

    <script src="{{ asset('js/country-map.js') }}"></script>
@endpush

<div id="map"></div>

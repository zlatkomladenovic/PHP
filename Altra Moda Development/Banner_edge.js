/*jslint */
/*global AdobeEdge: false, window: false, document: false, console:false, alert: false */
(function (compId) {

    "use strict";
    var im='images/',
        aud='media/',
        vid='media/',
        js='js/',
        fonts = {
            '\'Exo 2\'': '',
            '\'Exo 2\', sans-serif': ''        },
        opts = {
            'gAudioPreloadPreference': 'auto',
            'gVideoPreloadPreference': 'auto'
        },
        resources = [
        ],
        scripts = [
        ],
        symbols = {
            "stage": {
                version: "6.0.0",
                minimumCompatibleVersion: "5.0.0",
                build: "6.0.0.400",
                scaleToFit: "none",
                centerStage: "none",
                resizeInstances: false,
                content: {
                    dom: [
                        {
                            id: 'Banner',
                            type: 'image',
                            rect: ['0', '0', '120px', '200px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"Banner.png",'0px','0px'],
                            boxShadow: ["", 3, 3, 3, 0, "rgba(0,0,0,0.65098)"],
                            filter: [0, 0, 1, 1, 0, 0, 0, 0, "rgba(0,0,0,0)", 0, 0, 0]
                        },
                        {
                            id: 'Banner_logo',
                            type: 'image',
                            rect: ['67px', '86px', '115px', '29px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"Banner_logo.png",'0px','0px']
                        },
                        {
                            id: 'Text5',
                            type: 'text',
                            rect: ['90px', '426px', 'auto', 'auto', 'auto', 'auto'],
                            text: "<p style=\"margin: 0px;\">​<span style=\"font-family: Arial, Helvetica, sans-serif;\">​</span><span style=\"font-family: Arial, Helvetica, sans-serif; color: rgb(255, 255, 255);\">​</span><span style=\"font-family: Arial, Helvetica, sans-serif; color: rgb(255, 255, 255); font-size: 14px;\">​низ цела</span></p>",
                            align: "left",
                            font: ['Arial, Helvetica, sans-serif', [24, "px"], "rgba(0,0,0,1)", "400", "none", "normal", "break-word", "nowrap"],
                            textStyle: ["", "", "", "", "none"]
                        },
                        {
                            id: 'Text2',
                            type: 'text',
                            rect: ['-229px', '221px', 'auto', 'auto', 'auto', 'auto'],
                            text: "<p style=\"margin: 0px;\">​<span style=\"font-family: Arial, Helvetica, sans-serif;\">​</span><span style=\"font-family: Arial, Helvetica, sans-serif; font-size: 16px;\">​</span><span style=\"font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: 700;\">​</span><span style=\"font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: 700; color: rgb(255, 255, 255);\">​</span><span style=\"font-family: Courier, 'Courier New', monospace; font-size: 16px; font-weight: 700; color: rgb(255, 255, 255);\">​​</span><span style=\"font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: 700; color: rgb(255, 255, 255);\">​БЕСПЛАТНА ИСПОРАКА​</span></p>",
                            align: "left",
                            font: ['Arial, Helvetica, sans-serif', [24, "px"], "rgba(0,0,0,1)", "400", "none", "normal", "break-word", "nowrap"],
                            textStyle: ["", "", "", "", "none"]
                        },
                        {
                            id: 'Text3',
                            type: 'text',
                            rect: ['-159px', '249px', 'auto', 'auto', 'auto', 'auto'],
                            text: "<p style=\"margin: 0px;\">​<span style=\"font-family: Arial, Helvetica, sans-serif;\">​</span><span style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px;\">​</span><span style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: rgb(255, 255, 255);\">​</span><span style=\"font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: rgb(255, 255, 255);\">​за сите нарачки</span></p>",
                            align: "left",
                            font: ['Arial, Helvetica, sans-serif', [24, "px"], "rgba(0,0,0,1)", "400", "none", "normal", "break-word", "nowrap"],
                            textStyle: ["", "", "", "", "none"]
                        },
                        {
                            id: 'Text10',
                            type: 'text',
                            rect: ['52px', '443px', 'auto', 'auto', 'auto', 'auto'],
                            text: "<p style=\"margin: 0px;\">​<span style=\"font-family: Arial, Helvetica, sans-serif;\">​</span><span style=\"font-family: Arial, Helvetica, sans-serif; color: rgb(255, 255, 255);\">​</span><span style=\"font-family: Arial, Helvetica, sans-serif; color: rgb(255, 255, 255); font-weight: 500;\">​</span><span style=\"font-family: Arial, Helvetica, sans-serif; color: rgb(255, 255, 255); font-weight: 500; font-size: 25px;\">​Македонија</span></p>",
                            align: "left",
                            font: ['Arial, Helvetica, sans-serif', [24, "px"], "rgba(0,0,0,1)", "400", "none", "normal", "break-word", "nowrap"],
                            textStyle: ["", "", "", "", "none"]
                        }
                    ],
                    style: {
                        '${Stage}': {
                            isStage: true,
                            rect: [undefined, undefined, '240px', '400px'],
                            overflow: 'hidden',
                            fill: ["rgba(255,255,255,0)"]
                        }
                    }
                },
                timeline: {
                    duration: 8000,
                    autoPlay: true,
                    data: [
                        [
                            "eid14",
                            "top",
                            750,
                            1250,
                            "easeOutBounce",
                            "${Banner_logo}",
                            '79px',
                            '86px'
                        ],
                        [
                            "eid19",
                            "left",
                            2000,
                            1500,
                            "easeInOutExpo",
                            "${Text3}",
                            '-159px',
                            '67px'
                        ],
                        [
                            "eid5",
                            "height",
                            0,
                            1250,
                            "easeInOutElastic",
                            "${Banner}",
                            '200px',
                            '400px'
                        ],
                        [
                            "eid6",
                            "width",
                            0,
                            1250,
                            "easeInOutElastic",
                            "${Banner}",
                            '120px',
                            '240px'
                        ],
                        [
                            "eid21",
                            "left",
                            3500,
                            1500,
                            "easeOutBounce",
                            "${Text10}",
                            '52px',
                            '51px'
                        ],
                        [
                            "eid2",
                            "boxShadow.color",
                            0,
                            0,
                            "linear",
                            "${Banner}",
                            'rgba(0,0,0,0.65098)',
                            'rgba(0,0,0,0.65098)'
                        ],
                        [
                            "eid13",
                            "left",
                            750,
                            1250,
                            "easeOutBounce",
                            "${Banner_logo}",
                            '273px',
                            '67px'
                        ],
                        [
                            "eid22",
                            "top",
                            3500,
                            1500,
                            "easeInOutBack",
                            "${Text10}",
                            '443px',
                            '327px'
                        ],
                        [
                            "eid20",
                            "top",
                            2750,
                            1500,
                            "easeInOutBack",
                            "${Text5}",
                            '426px',
                            '299px'
                        ],
                        [
                            "eid15",
                            "left",
                            1250,
                            1500,
                            "easeInOutExpo",
                            "${Text2}",
                            '-229px',
                            '21px'
                        ],
                        [
                            "eid1",
                            "background-color",
                            0,
                            0,
                            "linear",
                            "${Stage}",
                            'rgba(255,255,255,0)',
                            'rgba(255,255,255,0)'
                        ],
                        [
                            "eid23",
                            "background-color",
                            8000,
                            0,
                            "easeInOutBack",
                            "${Stage}",
                            'rgba(255,255,255,0)',
                            'rgba(255,255,255,0)'
                        ],
                        [
                            "eid18",
                            "top",
                            2000,
                            0,
                            "easeInOutExpo",
                            "${Text3}",
                            '249px',
                            '249px'
                        ]
                    ]
                }
            }
        };

    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);

    if (!window.edge_authoring_mode) AdobeEdge.getComposition(compId).load("Banner_edgeActions.js");
})("altra_banner");

<?php
// FROM HASH: d5112e5986c53071d8e02f8156b38703
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->inlineJs('
window.addEventListener(\'DOMContentLoaded\', (event) => {
  particlesJS("particles-js", {
    "particles": {
        "number": {
            "value": 19,
            "density": {
                "enable": true,
                "value_area": 481.0236182596568
            }
        },
        "color": {
            "value": "#ffffff"
        },
        "shape": {
            "type": "circle",
            "stroke": {
                "width": 0,
                "color": "#000000"
            },
            "polygon": {
                "nb_sides": 12
            },
        },
        "opacity": {
            "value": 0.3286994724774322,
            "random": true,
            "anim": {
                "enable": false,
                "speed": 1,
                "opacity_min": 0.1,
                "sync": false
            }
        },
        "size": {
            "value": 47.34885849793636,
            "random": true,
            "anim": {
                "enable": true,
                "speed": 9.59040959040959,
                "size_min": 5.594405594405594,
                "sync": true
            }
        },
        "line_linked": {
            "enable": true,
            "distance": 150,
            "color": "#ffffff",
            "opacity": 0.4,
            "width": 1
        },
        "move": {
            "enable": true,
            "speed": 6.413648243462092,
            "direction": "none",
            "random": true,
            "straight": false,
            "out_mode": "bounce",
            "bounce": false,
            "attract": {
                "enable": true,
                "rotateX": 320.6824121731046,
                "rotateY": 481.0236182596568
            }
        }
    },
    "interactivity": {
        "detect_on": "canvas",
        "events": {
            "onhover": {
                "enable": true,
                "mode": "repulse"
            },
            "onclick": {
                "enable": true,
                "mode": "push"
            },
            "resize": true
        },
        "modes": {
            "grab": {
                "distance": 400,
                "line_linked": {
                    "opacity": 1
                }
            },
            "bubble": {
                "distance": 400,
                "size": 40,
                "duration": 2,
                "opacity": 8,
                "speed": 3
            },
            "repulse": {
                "distance": 200,
                "duration": 0.4
            },
            "push": {
                "particles_nb": 4
            },
            "remove": {
                "particles_nb": 2
            }
        }
    },
    "retina_detect": true
  });
});
');
	return $__finalCompiled;
}
);
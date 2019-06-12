<?php $title = 'Connexion'; ?>
<?php ob_start(); ?>


<div style="padding-right: 30%; padding-left: 30%;">
  <div class="well" style="padding-right: 5%; padding-left: 5%;padding-top: 5%">
    <div style="color: #356F66;font-size:42px;text-align: center">Bienvenue</div> 
    <div id="container" style="text-align: center">
      <canvas class="zdog-canvas" width="400" height="400" style="width: 320px; height: 320px;"></canvas>
    </div>
   
   <script src="https://unpkg.com/zdog@1/dist/zdog.dist.min.js"></script>
   <script>
     // Made with Zdog (http://zzz.dog/)

// colors
const body_color = '#A4C74B',
      face_color = '#4B264B',
      tummy_color ='#8CB746',
      shell_color = '#356F66',
      accent_color = '#397E71';

// create illo
let illo = new Zdog.Illustration({
  element: '.zdog-canvas',
  rotate: { x: Zdog.TAU*10/128, y: -0.05},
  zoom: 1.2,
  dragRotate: true,
});

// SHAPES
let shell = new Zdog.Hemisphere({
  addTo: illo,
  diameter: 124,
  rotate: { x: Zdog.TAU/4 },
  // fill enabled by default
  // disable stroke for crisp edge
  stroke: false,
  color: shell_color,
});
let shell_rim = new Zdog.Ellipse({
  addTo: shell,
  translate: { z: -1 },
  diameter: 126,
  stroke: 12,
  color: accent_color,
});
let tummy = new Zdog.Ellipse({
  addTo: shell,
  translate: { z: -8 },
  diameter: 90,
  stroke: 8,
  color: tummy_color,
  fill: true,
});

let head = new Zdog.Shape({
  addTo: shell,
  translate: { y: 90, z: 15 },
  stroke: 55,
  color: body_color,
});
// eye on left
let eye = new Zdog.Shape({
  addTo: head,
  translate: { x: -16, y: 10, z: 3 },
  stroke: 10,
  color: face_color,
});
// eye on right
eye.copy({
  translate: { x: 16, y: 10, z: 3 },
});
let smile = new Zdog.Ellipse({
  addTo: head,
  diameter: 10,
  quarters: 2, // semi-circle
  translate: { x: 0, y: 24, z: -10 },
  // rotate semi-circle to point up
  rotate: { x: Zdog.TAU*11/16, z: Zdog.TAU/4 },
  color: face_color,
  stroke: 3,
});

let neck = new Zdog.Shape({
	addTo: shell,
	path: [
    { x: 0, y: 40, z: -14 }, // start at 1st point (in shell)
    { arc: [
      { x:  0, y: 60, z: -30 }, // corner
      { x:  0, y: 80, z: -6 }, // end point (in head)
    ]},
  ],
  closed: false,
  stroke: 24,
  color: body_color,
});
// leg on front, right
let leg_fr = new Zdog.Shape({
	addTo: shell,
	path: [
    { x: 23, y: 28, z: -16 }, // start at 1st point (in shell)
    { arc: [
      { x: 60, y: 34, z: -24 }, // corner
      { x: 60, y: 36, z: -36 }, // end point (in head)
    ]},
  ],
  closed: false,
  stroke: 20,
  color: body_color,
});
// back, right
let leg_br = new Zdog.Shape({
	addTo: shell,
	path: [
    { x: 30, y: -28, z: -16 }, // start at 1st point (in shell)
    { arc: [
      { x: 60, y: -34, z: -24 }, // corner
      { x: 60, y: -36, z: -36 }, // end point (in head)
    ]},
  ],
  closed: false,
  stroke: 20,
  color: body_color,
});
// back, left
let leg_bl = new Zdog.Shape({
	addTo: shell,
	path: [
    { x: -30, y: -28, z: -16 }, // start at 1st point (in shell)
    { arc: [
      { x: -60, y: -34, z: -24 }, // corner
      { x: -60, y: -36, z: -36 }, // end point (in head)
    ]},
  ],
  closed: false,
  stroke: 20,
  color: body_color,
});
// front, left
let leg_fl = new Zdog.Shape({
	addTo: shell,
	path: [
    { x: -30, y: 28, z: -16 }, // start at 1st point (in shell)
    { arc: [
      { x: -60, y: 34, z: -24 }, // corner
      { x: -60, y: 36, z: -36 }, // end point (in head)
    ]},
  ],
  closed: false,
  stroke: 20,
  color: body_color,
});
let tail = new Zdog.Shape({
  addTo: shell,
  path: [
  	{ x: 0, y: -50, z: -14 }, // start (in shell)
    { arc: [
      { x: 0, y: -65, z: -16 }, // corner
      { x: 0, y: -76, z: -8 }, // end point (tail)
    ]},
	],
  closed: false,
  stroke: 10,
  color: body_color,
});

let fwd = true;
let walk_count = 0;

let mv = false;
let above = { x: -Zdog.TAU/4, y: Zdog.TAU*3/8, z: 0 },
    below = { x: Zdog.TAU*21/64, y: Zdog.TAU*129/256, z: 0 };
let reset = { x: Zdog.TAU*10/128, y: -0.05, z: 0}
let mv_count = 0;
let mv_amt = { x: 0, y: 0, z: 0 };

// RENDER
function animate() {
  if (fwd) {
    head.translate.z -= 0.04;
    head.translate.y -= 0.05;
    neck.translate.z -= 0.003;

    leg_fr.rotate.z += 0.001;
    leg_bl.rotate.z += 0.001;
    leg_br.rotate.z += 0.001;
    leg_fl.rotate.z += 0.001;
  } else {
    head.translate.z += 0.04;
    head.translate.y += 0.05;
    neck.translate.z += 0.003;

    leg_fr.rotate.z -= 0.001;
    leg_bl.rotate.z -= 0.001;
    leg_br.rotate.z -= 0.001;
    leg_fl.rotate.z -= 0.001;
  }
  if (walk_count % 150 == 0) {
    fwd = !fwd;
  }
  walk_count += 1;
  
  if (mv) {
    illo.rotate.x += mv_amt.x / 30;
    illo.rotate.y += mv_amt.y / 30;
    illo.rotate.z += mv_amt.z / 30;
    mv_count += 1;
    if (mv_count == 31 ) {
      mv = false;
      mv_count = 0;
    }
  }

  illo.updateRenderGraph();
  requestAnimationFrame( animate );
}
animate();

function moveAbove() {
  mv = true;
  mv_count = 0;
  mv_amt.x = above.x - illo.rotate.x;
  mv_amt.y = above.y - illo.rotate.y;
  mv_amt.z = above.z - illo.rotate.z;
}

function moveBelow() {
  mv = true;
  mv_count = 0;
  mv_amt.x = below.x - illo.rotate.x;
  mv_amt.y = below.y - illo.rotate.y;
  mv_amt.z = below.z - illo.rotate.z;
}

function moveReset() {
  mv = true;
  mv_count = 0;
  mv_amt.x = reset.x - illo.rotate.x;
  mv_amt.y = reset.y - illo.rotate.y;
  mv_amt.z = reset.z - illo.rotate.z;
}
   </script>
  </div>
<div>
      



<?php $content = ob_get_clean(); ?>

</body>

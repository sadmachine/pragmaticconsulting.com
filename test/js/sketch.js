const fireworks = [];
let gravity;
let fontSize;
let msg = [
  "1 month ago today...",
  "you said yes...",
  "and made me \n the happiest man alive"
];
let msgIdx = 0;
let vectY;
let font;

let R = 150;
const xh = angle => R / 15.0 * 16 * Math.pow(Math.sin(angle), 3);
const yh = p => R / 15.0 * (-13 * Math.cos(p) + 5 * Math.cos(2 * p) + 2 * Math.cos(3 * p) + Math.cos(4 * p));

function preload() {
  font = loadFont('assets/DancingScript-VariableFont_wght.ttf');
}

function setup() {
  createCanvas(windowWidth, windowHeight);

  msg[0] = dateDiff('7/20/20', today()) + ' days ago today...';

  // Setup gravity for our fireworks
  vectY = Math.log(windowHeight/2)/(windowHeight/14);
  gravity = createVector(0, vectY);
}

function dateDiff(dateStr1, dateStr2) {
  var date1 = new Date(dateStr1); 
  var date2 = new Date(dateStr2); 
  
  // To calculate the time difference of two dates 
  var differenceInTime = date2.getTime() - date1.getTime(); 
    
  // To calculate the no. of days between two dates 
  var differenceInDays = differenceInTime / (1000 * 3600 * 24); 
    
  return differenceInDays;
}

function today() {
  var today = new Date();
  var dd = String(today.getDate()).padStart(2, '0');
  var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
  var yyyy = today.getFullYear();

  today = mm + '/' + dd + '/' + yyyy;
  return today;
}

function draw() {
  textFont(font);
  colorMode(RGB);
  background(0, 0, 0, 25);
  
  if (random(1) < 0.03) {
    fireworks.push(new Firework());
  }
  
  for (let i = fireworks.length - 1; i >= 0; i--) {
    fireworks[i].update();
    fireworks[i].show();
    
    if (fireworks[i].done()) {
      fireworks.splice(i, 1);
    }
  }

  noStroke();
  noFill();
  strokeWeight(1);
  fill(255);
  if (msgIdx < msg.length) {
    base = ((frameCount/8)+10)%(50);
    if (base > 0) {
      textSize(Math.pow(base, 1.2));
    } else {
      msgIdx++;
      clear();
    }
    textAlign(CENTER, CENTER);
    text(msg[msgIdx], width/2, height/2);
  } else {
    drawHeart(0, -100);
  }
}

function drawHeart(xOffset=0, yOffset=0) {
  colorMode(RGB);

  fill('#e31b23');
  stroke('#e31b23');
  strokeWeight(3);

  beginShape();
  let n = 200;
  beat1 = frameCount%100;
  beat2 = (frameCount+15)%100;
  if (beat1 == 0 || beat2 == 0) {
    extra = 5;
  } else {
    extra = 0;
  }
  for (let i = 0; i < n; i++) {
    R = R + extra;
    let x = width / 2 + xh(TAU * i / n) + xOffset;
    let y = height / 2 + yh(TAU * i / n) + yOffset;
    R = R - extra;
    vertex(x, y);
  }
  endShape();

  fill(225);
  stroke(225);
  strokeWeight(1);

  xPos = width / 2 - 5 + xOffset;
  yPos = height / 2 - 40 + yOffset;
  size = Math.pow(45, 1.2) + (extra/2);
  textSize(size);
  text("SG+AF", xPos, yPos);

  xPos = width / 2 + 5 + xOffset;
  yPos = height / 2 + 35 + yOffset;
  size = Math.pow(28, 1.2) + (extra/2);
  textSize(size);
  text("forever", xPos, yPos);

  xPos = width / 2 + xOffset;
  yPos = height / 2 + 200 + yOffset;
  size = Math.pow(28, 1.2);
  textSize(size);
  text("My heart beats only for you", xPos, yPos);
}
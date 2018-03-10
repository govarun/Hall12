let db,ref;

function setup() {
  noCanvas();
  var config = {
   apiKey: "AIzaSyB09BJHHUiPtfTmsGyQ785q1-7MzO1PVTY",
   authDomain: "my-project-1496533920980.firebaseapp.com",
   databaseURL: "https://my-project-1496533920980.firebaseio.com",
   projectId: "my-project-1496533920980",
   storageBucket: "my-project-1496533920980.appspot.com",
   messagingSenderId: "920752506149"
 };
 firebase.initializeApp(config);
  db=firebase.database();
  ref=db.ref('hec-message');
  ref.on('value',gotd,err);
}
function gotd(data) {
  let dt = data.val();
  keys = Object.keys(dt);
  for (let i = keys.length-1; i >=0; i--) {
    a=createDiv('<div style="overflow-y:scroll;height:100%;"><div><h3>'+dt[keys[i]].title+'</h3>'+dt[keys[i]].user+'<h5></div>'+'<h4>'+dt[keys[i]].text+'</h4><h5></div>');
    a.parent('not-center');
    a.class('events');
  }
}
function err(data){}

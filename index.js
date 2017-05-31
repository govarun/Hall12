var doing =0,present=1;
  function sd() {
    if(doing==0){
      present=present%8;
      console.log('hello')
      doing=1;
      var f= document.getElementById('p'+present);
      var d= document.getElementById('p'+(present+1)%8);
      d.style.zIndex='0';
      d.style.visibility='visible';
      d.className+='animated zoomIn';
      f.className += " animated slideOutUp";
      setTimeout(function(){
        d.style.zIndex='1';
        f.style.zIndex='0';
        f.style.visibility='hidden';
        d.className='pages';
        f.className = 'pages';
              doing=0;
      },1000);

      present++;

    }
  }
  function go(i) {
    if(doing==0&&i!=present){
      present=present%8;
      console.log('hello')
      doing=1;
      var f= document.getElementById('p'+present);
      var d= document.getElementById('p'+i%8);
      d.style.zIndex='0';
      d.style.visibility='visible';
      f.className += " animated slideOutUp";
      d.className+='animated zoomIn';
      setTimeout(function(){
        f.style.zIndex='0';
        d.style.zIndex='1';

        f.style.visibility='hidden';
        d.style.visibility='visible';
        d.className='pages';
        f.className = 'pages';
        doing=0;
        present=i;
      },1000);



    }
  }
  function su() {
    if(doing==0){
      present=present%8;
      console.log('hello')
      doing=1;
      var f= document.getElementById('p'+present),
      d=document.getElementById('p'+(present+7)%8);
      f.style.zIndex='0';
      d.style.zIndex='1';
      d.style.visibility='visible';
      d.className += " animated slideInDown";
      f.className+=" animated zoomOut";
      setTimeout(function(){
        d.style.zIndex='1';
        d.className='pages';
        f.style.visibility='hidden';
        f.className = 'pages';
              doing=0;
      },1000);

      present--;
      if (present==-1) {
        present=7;
      }
    }
  }
/* setIntervel(function abbas() {
   if(present==2){
    var as=document.getElementsByClassName('pa');
    as.className+=" animated slideInDown";
    setTimeout(function () {
      as.className="pa";
    },1000);
  },5}); */
  window.addEventListener('wheel', function(e) {
    if (e.deltaY < 0) {
      su();
      console.log('scrolling up');
    }
    if (e.deltaY > 0) {
      console.log('scrolling down');
      sd();
    }
  });

var doing =0,present=1,no=0,previous=0;
  function sd() {
    setTimeout(function () {
    if(doing==0&&no==0){
      present=present%8;
      console.log('hello');
      doing=1;
      document.getElementById('a'+present). style.boxShadow='none';
      document.getElementById('a'+present). style.backgroundColor='rgba(0,0,0,0)';
      document.getElementById('a'+(present+1)%8). style.backgroundColor=' #ff5a00';
      document.getElementById('a'+(present+1)%8). style.boxShadow='10px 5px 40px rgb(0,0,0)';
      var f= document.getElementById('p'+present);
      var d= document.getElementById('p'+(present+1)%8);
      d.style.zIndex='0';
      d.style.visibility='visible';
      f.className += " animated slideOutUp";
      setTimeout(function(){
        d.style.zIndex='1';
        f.style.zIndex='0';
        f.style.visibility='hidden';
        f.className = 'pages';

              doing=0;
      },1000);

      present++;

    }
  },2);
  }
  function nonnn() {
    console.log(110);
    no=1;
  }
  function yes() {
    no=0;
  }
  function go(i) {
    if(doing==0&&i!=present){
      present=present%8;
      console.log('hello');
      doing=1;
      document.getElementById('a'+present). style.boxShadow='none';
      document.getElementById('a'+present). style.backgroundColor='rgba(0,0,0,0)';
      document.getElementById('a'+(i)%8). style.backgroundColor=' #ff5a00';
      document.getElementById('a'+i%8). style.boxShadow='10px 5px 40px rgb(0,0,0)';
      var f= document.getElementById('p'+present);
      var d= document.getElementById('p'+i%8);
      d.style.zIndex='0';
      d.style.visibility='visible';

      f.className += " animated slideOutUp";
      setTimeout(function(){
        f.style.zIndex='0';
        d.style.zIndex='1';

        f.style.visibility='hidden';
        d.style.visibility='visible';
        f.className = 'pages';
        doing=0;
        present=i;
      },1000);
    }
  }
  function su() {
    setTimeout(function () {
    if(doing==0&&no==0){
      present=present%8;
      console.log('hello');
      doing=1;
      var f= document.getElementById('p'+present),
      d=document.getElementById('p'+(present+7)%8);
      document.getElementById('a'+present). style.boxShadow='none';
      document.getElementById('a'+(present+7)%8). style.boxShadow='10px 5px 40px rgb(0,0,0)';
      document.getElementById('a'+present). style.backgroundColor='rgba(0,0,0,0)';
      document.getElementById('a'+(present+7)%8). style.backgroundColor=' #ff5a00';
      f.style.zIndex='0';
      d.style.zIndex='1';
      d.style.visibility='visible';
      d.className += " animated slideInDown";
      setTimeout(function(){
        d.style.zIndex='1';
        f.style.visibility='hidden';
        f.className = 'pages';
              doing=0;
      },1000);

      present--;
      if (present==-1) {
        present=7;
      }
    }
  },2);
  }
  function club() {
    document.getElementById(previous).style.visibility='hidden';
    previous=document.getElementById('abbu').value;
        document.getElementById(previous).style.visibility='visible';
  }
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

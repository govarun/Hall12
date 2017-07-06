var doing =0,present=0,no=0,previous=0,pre=0;
$('.menu-toggle').click(function() {

$('.site-nav').toggleClass('site-nav--open');
$(this).toggleClass('open');
});
$('.site-nav').click(function() {

$('.site-nav').toggleClass('site-nav--open');
$(this).toggleClass('open');
});
  function sd() {
    setTimeout(function () {
      if(doing==0&&no==0){
        present=present%7;
        console.log('hello');
        doing=1;
        if (present==6) {
          document.getElementById(previous).style.visibility='hidden';
          document.getElementById(previous).style.zIndex='0';
        }
        if(present==4){
          document.getElementById('b'+pre).style.visibility='hidden';
          document.getElementById('b'+pre).style.zIndex='0';
        }
        var f= document.getElementById('p'+present);
        var d= document.getElementById('p'+(present+1)%7);
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
      present=present%7;
      console.log('hello');
      if (present==6) {
        document.getElementById(previous).style.visibility='hidden';
        document.getElementById(previous).style.zIndex='0';
      }
      if (present==4) {
        document.getElementById('b'+pre).style.visibility='hidden';
        document.getElementById('b'+pre).style.zIndex='0';
      }
      doing=1;
      var f= document.getElementById('p'+present);
      var d= document.getElementById('p'+i%7);
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
      present=present%7;
      console.log('hello');
      if (present==6) {
        document.getElementById(previous).style.visibility='hidden';
        document.getElementById(previous).style.zIndex='0';
      }
      if(present==4){
        document.getElementById('b'+pre).style.visibility='hidden';
        document.getElementById('b'+pre).style.zIndex='0';
      }
      doing=1;
      var f= document.getElementById('p'+present),
      d=document.getElementById('p'+(present+6)%7);
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
        present=6;
      }
    }
  },2);
  }
  function club() {
    document.getElementById(previous).style.visibility='hidden';
    document.getElementById(previous).style.zIndex='0';
    previous=document.getElementById('abbu').value;
        document.getElementById(previous).style.visibility='visible';
    document.getElementById(previous).style.zIndex='1';
  }
  function cs() {
    document.getElementById('b'+pre).style.visibility='hidden';
        document.getElementById('b'+pre).style.zIndex='0';
    pre=document.getElementById('abba').value;
        document.getElementById('b'+pre).style.visibility='visible';
        document.getElementById('b'+pre).style.zIndex='1';
  }
  function mess() {
    var n=document.getElementById('abbba').value;
    messing(n);
  }
  function messing(n) {
    if(n==7){
      var ddd = new Date();
      n= ddd.getDay();
    }
    var a;
    if(n==0){
      a= "Jalebi, Poha - Parathe - Aloo Cabbage, Mix Dal    ";
    }
    else if(n==1){
      a= "Bada pav or Macroni - Kadhai, Aloo Jeera - Veg Kofta, Arhar Dal";
    }
    else if(n==2){
      a= "Parathe - Aloo Soyabeen, Rajma - Matar paneer, Parathe";
    }
    else if(n==3){
      a= "Matar kachauri - Baigan Bharta, Masoor Dal - Aloo Palak, Tahri";
    }
    else if(n==4){
      a= "Idli or Uttpam - Jhalfry gravy, Arhar Dal - Chole, Kulche or Bhature";
    }
    else if(n==5){
      a= "Sandwiches - Lauki Chana, Dal Makhani - Aloo Matar Tamatar, Puri";
    }
    else if(n==6){
      a= "Masala Dosa - Soya Methi Aloo, Arhar Dal - Kadhai paneer, Masoor Dal";
    }
    var bbbb=a.split('-');
    document.getElementById('bbbb').innerHTML="<div style='font-family:rio;font-size:2vh; background-color:rgba(0,0,0,0.3);padding:1vh;'>Mess menu</div>Breakfast : "+bbbb[0]+"<br><br><hr>Lunch : "+bbbb[1]+"<br><br><hr>Dinner:"+bbbb[2];
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
  var last=null;
  $(document).ready(function(){
      messing(7);
      $("#flip").click(function(){
        if(last!=null&&last!=$("#panel")){
          last.slideToggle("slow");
        }
        last=$("#panel");
          $("#panel").slideToggle("slow");
      });

      $("#fli").click(function(){
        if(last!=null&&last!=$("#pane")){
          last.slideToggle("slow");
        }
        last=$("#pane");
          $("#pane").slideToggle("slow");
      });

      $("#fl").click(function(){
        if(last!=null||last!=$("#pan")){
          last.slideToggle("slow");
        }
        last=$("#pan");
          $("#pan").slideToggle("slow");
      });

      $("#flii").click(function(){
        if(last!=null||last!=$("#pann")){
          last.slideToggle("slow");
        }
        last=$("#pann");
        $("#pann").slideToggle("slow");
        });

        $("#fliii").click(function(){
        if(last!=null||last!=$("#pannn")){
          last.slideToggle("slow");
        }
        last=$("#pannn");
        $("#pannn").slideToggle("slow");
        });
      });
  var lastY;
  $(document).bind('touchmove', function (e){
       var currentY = e.originalEvent.touches[0].clientY;
       if(currentY > lastY){
           console.log('scrolling down');
           sd();
       }else if(currentY < lastY){
           su();
           console.log('scrolling up');
       }
       lastY = currentY;
  });

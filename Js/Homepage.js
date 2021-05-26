

function qs(selector) {
  return document.querySelector(selector);
}

var Frequency = setInterval(function Autoscrolling(){
  var PositionCounter = 0;
  if (PositionCounter == 0){
      // qs("#StoreScrolling").style.marginleft = "-0%";
    qs("#ProductScrolling").style.marginleft = "-0%";
    PositionCounter++;
  }
  else if (PositionCounter == 1){
    // qs("#StoreScrolling").style.marginleft = "-25%";
    qs("#ProductScrolling").style.marginleft = "-25%";
    PositionCounter++;
  }
  else if (PositionCounter ==2){
    // qs("#StoreScrolling").style.marginleft = "-25%";
    qs("#ProductScrolling").style.marginleft = "-25%";
    PositionCounter++;
  }
  else if (PositionCounter ==3){
    // qs("#StoreScrolling").style.marginleft = "-25%";
    qs("#ProductScrolling").style.marginleft = "-25%";
    PositionCounter++;
  }
  else if (PositionCounter ==4){
    // qs("#StoreScrolling").style.marginleft = "-25%";
    qs("#ProductScrolling").style.marginleft = "-25%";
    PositionCounter = 0;
  }
},1500);

  function StopScrolling(){
    clearInterval(Frequency);
  }

function ContinueScrolling(){
  var Frequency = setInterval(function Autoscrolling(){

    let ScrollStore = document.getElementById("StoreScrolling");
    let ScrollProduct= document.getElementById("ProductScrolling");
    if (PositionCounter == 0){
      // qs("#StoreScrolling").style.marginleft = "-0%";
      qs("#ProductScrolling").style.marginleft = "-0%";
      PositionCounter++;
    }
    else if (PositionCounter == 1){
      // qs("#StoreScrolling").style.marginleft = "-25%";
      qs("#ProductScrolling").style.marginleft = "-25%";
      PositionCounter++;
    }
    else if (PositionCounter ==2){
      // qs("#StoreScrolling").style.marginleft = "-25%";
      qs("#ProductScrolling").style.marginleft = "-25%";
      PositionCounter++;
    }

    else if (PositionCounter ==3){
      // qs("#StoreScrolling").style.marginleft = "-25%";
      qs("#ProductScrolling").style.marginleft = "-25%";
      PositionCounter++;
    }

    else if (PositionCounter ==4){
      // qs("#StoreScrolling").style.marginleft = "-25%";
      qs("#ProductScrolling").style.marginleft = "-25%";
      PositionCounter = 0;
    }

  },1500);
}

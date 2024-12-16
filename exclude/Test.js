// this resize event for check design in Mobile and web at small , larg screens 
document.addEventListener("DOMContentLoaded", checkWindowSize); 
window.addEventListener("resize", checkWindowSize);  
 
// this function to add TSMView and TSWView after some point of viewport 
function checkWindowSize() {

    if (window.innerWidth < 800 && window.innerWidth>200) {
        document.querySelector('body').classList.remove('TSWView')
        document.querySelector('body').classList.add('TSMView');
 
    } else {
        document.querySelector('body').classList.remove('TSMView')
        document.querySelector('body').classList.add('TSWView');
        
    }
  }

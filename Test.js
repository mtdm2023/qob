// this resize event for check design in Mobile and web at small , larg screens 
document.addEventListener("DOMContentLoaded", checkWindowSize); 
window.addEventListener("resize", checkWindowSize);  
 
// this function to add TSMView and TSWView after some point of viewport 
function checkWindowSize() {

    console.log("Dom");
    if (window.innerWidth < 800 && window.innerWidth>200) {
        document.querySelector('body').classList.remove('TSWView')
        document.querySelector('body').classList.add('TSMView');
        console.log('mobileView');        
    } else {
        document.querySelector('body').classList.remove('TSMView')
        document.querySelector('body').classList.add('TSWView');
        console.log('   webView');   
    }
  }
  
//   (function ($) {
//     $(document).ready(function () {
//         window.addEventListener('resize' , ()=>{
//             AOS.init({
//                 easing: 'ease-in-out-sine',
//                 duration: 1000,
//             });
//         })
      
//     });
// })(jQuery);
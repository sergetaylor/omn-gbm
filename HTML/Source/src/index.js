//uikit
import "uikit/dist/css/uikit.min.css";
import Icons from "uikit/dist/js/uikit-icons";
import UIkit from "uikit";
import { Monthpicker } from './ui/monthpicker/_monthpicker';
import ParticlesBackdrop from './utils/ParticlesBackdrop/ParticlesBackdrop';
import ClipboardJS from 'clipboard';
import LinkedInSubmit from './cards/action-buttons/_action-buttons';
import Vivus from 'vivus';
import scrollToElement from 'scroll-to-element';
import Validate from './ui/validate/validate';

//import 
// Styles
import "./index.scss";

// UI JS
//import './ui/_index';

// Tiles JS
import './cards/_index';

// Widgets JS
import './widgets/_index';

//Icons
UIkit.use(Icons);
//Validate();
window.onload = function () {
  document.body.classList.add("loaded");
};

if (document.querySelectorAll("#my-svg").length > 0) {
  var GBM = new Vivus('my-svg', {
    type: 'sync',
    duration: 200,
    reverseStack: true,
    animTimingFunction: Vivus.EASE,
    pathTimingFunction: Vivus.EASE_IN
  });

  setInterval(() => {
    GBM.play(1, () => {
      GBM.play(-1)
    })
  }, 5000)
}


// Date Picker
let monthPickers = document.querySelectorAll(".date-picker");
monthPickers.forEach(mp => {
  new Monthpicker(mp);
});


// Initialize Particles JS
ParticlesBackdrop();

// Copy to clipboard functionality
let clipboard = new ClipboardJS('.share-button', {
  text: function (trigger) {
    return window.location.href;
  }
});
clipboard.on('success', function (e) {

  let tt = UIkit.tooltip(e.trigger, {
    title: 'Link copied to clipboard',
    pos: 'bottom',

  });
  tt.show();
  setTimeout(() => {
    tt.$destroy();
  }, 5000);
  e.clearSelection();
});


// Bind Linked In Handlers
LinkedInSubmit();




// Add Event Listener to parent Element 
let scrollbuttons = document.querySelectorAll('[data-scrollto]');
scrollbuttons.forEach(function (e) {
  e.addEventListener("click", (ev)=>{
    ev.preventDefault();
    scrollToElement(ev.srcElement.attributes.href.value, {
      offset: -100,
    });
  });
});

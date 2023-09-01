import './bootstrap';
// 
import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
//

// Initialization for ES Users
import {
    Stepper,
    Sidenav,
    Select,
    Dropdown,
    Input,
    Timepicker,
    Tab,
    Modal,
    Ripple,
    initTE,
  } from "tw-elements";
  
initTE({ Dropdown, Sidenav, Stepper, Select, Input, Timepicker, Tab, Modal, Ripple });

///
const sidenav2 = document.getElementById("sidenav-1");
const sidenavInstance2 = Sidenav.getInstance(sidenav2);

let innerWidth2 = null;

const setMode2 = (e) => {
  // Check necessary for Android devices
  if (window.innerWidth === innerWidth2) {
    return;
  }

  innerWidth2 = window.innerWidth;

  if (window.innerWidth < sidenavInstance2.getBreakpoint("md")) {
    sidenavInstance2.changeMode("over");
    sidenavInstance2.hide();
  } else {
    sidenavInstance2.changeMode("side");
    sidenavInstance2.show();
  }
};

if (window.innerWidth < sidenavInstance2.getBreakpoint("sm")) {
  setMode2();
}

// Event listeners
window.addEventListener("resize", setMode2)


/////////////
const sidenav3 = document.getElementById("sidenav-2");
const sidenavInstance3 = Sidenav.getInstance(sidenav3);

let innerWidth3 = null;

const setMode3 = (e) => {
  // Check necessary for Android devices
  if (window.innerWidth === innerWidth3) {
    return;
  }

  innerWidth3 = window.innerWidth;

  if (window.innerWidth < sidenavInstance3.getBreakpoint("xl")) {
    sidenavInstance3.changeMode("over");
    sidenavInstance3.hide();
  } else {
    sidenavInstance3.changeMode("side");
    sidenavInstance3.show();
  }
};

if (window.innerWidth < sidenavInstance3.getBreakpoint("sm")) {
  setMode3();
}

// Event listeners
window.addEventListener("resize", setMode3)


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

////////////
let content = document.getElementById("content");
content.style +=" padding-left:-256px; ";


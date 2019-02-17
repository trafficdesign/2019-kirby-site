import lightgallery from "lightgallery.js";
import MicroModal from "micromodal";
import { throttle } from "lodash";

require("./styles/main.scss");

var magic = () => {
  // get DOM elements
  const GALLERY = document.getElementById("lightgallery");
  const MODAL_CLOSE = document.getElementById("modalClose");
  const MODAL_OPEN = document.getElementById("modalOpen");
  const TOPBAR = document.getElementById("topbar");

  // define global vars
  let HAS_MENU = false;
  let HAS_SCROLL = false;
  let IS_HDESKTOP = null;
  let IS_HOMEPAGE = TOPBAR.classList.contains("is-home");

  const doTheMagic = () => {
    // set state
    HAS_SCROLL = window.scrollY > 50;
    IS_HDESKTOP = window.innerWidth >= 1440;

    if (IS_HOMEPAGE && HAS_MENU) {
      TOPBAR.classList.remove("theme--dark");
    }

    if (HAS_SCROLL && IS_HOMEPAGE) {
      TOPBAR.classList.remove("theme--dark");
    }

    // re-apply topbar dark theme on home when scrolling top
    if (HAS_SCROLL) {
      TOPBAR.classList.add("Topbar--stick");
    }
    if (!HAS_SCROLL) {
      TOPBAR.classList.remove("Topbar--stick");
    }

    // topbar adjustments when menu triggered down the page
    if (HAS_MENU && HAS_SCROLL) {
      TOPBAR.classList.remove("Topbar--stick");
    }

    // re-apply topbar dark theme on home when scrolling top
    if (!HAS_SCROLL && IS_HOMEPAGE) {
      TOPBAR.classList.add("theme--dark");
    }

    // close the menu when canvas changes to hdesktop
    if (HAS_MENU && IS_HDESKTOP) {
      MicroModal.close("mobileMenu");
    }

    if (IS_HOMEPAGE && HAS_MENU && !HAS_SCROLL) {
      TOPBAR.classList.remove("theme--dark");
    }

    // menu togglers
    if (HAS_MENU) {
      MODAL_CLOSE.style.display = "inline-block";
      MODAL_OPEN.style.display = "none";
    }
    if (!HAS_MENU) {
      MODAL_CLOSE.style.display = "none";
      MODAL_OPEN.style.display = "inline-block";
    }

    // console.log state
    // console.log({ HAS_MENU }, { HAS_SCROLL }, { IS_HDESKTOP }, { IS_HOMEPAGE });
  };

  // global var magic
  throttle((window.onscroll = () => doTheMagic()), 5000);
  throttle((window.onresize = () => doTheMagic()), 5000);
  doTheMagic();

  // extras
  lightGallery(GALLERY, {
    cssEasing: "cubic-bezier(0.25, 0, 0.25, 1)",
    download: false,
    mode: "lg-fade",
    speed: 500
  });

  // modal
  MODAL_OPEN.onclick = () => {
    MicroModal.show("mobileMenu", {
      onShow: modal => {
        HAS_MENU = true;
        doTheMagic();
      },
      onClose: modal => {
        HAS_MENU = false;
        doTheMagic();
      },
      disableScroll: true,
      disableFocus: true,
      debugMode: false
    });
  };
  MODAL_CLOSE.onclick = () => {
    MicroModal.close("mobileMenu");
  };
};

function ready(fn) {
  if (
    document.attachEvent
      ? document.readyState === "complete"
      : document.readyState !== "loading"
  ) {
    fn();
  } else {
    document.addEventListener("DOMContentLoaded", fn);
  }
}

ready(magic);

// unregister service worker as per https://stackoverflow.com/questions/49740931/unregistering-removing-a-service-worker

self.addEventListener("install", function(e) {
  self.skipWaiting();
});

self.addEventListener("activate", function(e) {
  self.registration
    .unregister()
    .then(function() {
      return self.clients.matchAll();
    })
    .then(function(clients) {
      clients.forEach(client => client.navigate(client.url));
    });
});

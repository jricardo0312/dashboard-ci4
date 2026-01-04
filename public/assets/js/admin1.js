// Import stylesheets
import "bulma/css/bulma.min.css";
import $ from "jquery";
import "jquery.nicescroll";
import './style.css';
$(document).ready(function() {
  $(".toggler").on("click", function() {
    $(".menu-container").toggleClass("active");
  });

  $(".nav-toggler").on("click", function() {
    $(".navbar-toggler").toggleClass("is-active");
    $(".navbar-menu").toggleClass("is-active");
  });

  function setMenuHeight() {
    var navbarHeight = $(".navbar").outerHeight();
    $(".menu-wrapper")
      .outerHeight(document.documentElement.clientHeight - navbarHeight)
      .niceScroll({
        emulatetouch: true
      });
  }
  setMenuHeight();
  $(window).on("resize", function() {
    setMenuHeight();
  });
});
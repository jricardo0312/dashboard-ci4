import "bulma/css/bulma.min.css";
import $ from "jquery";
import "jquery.nicescroll";
import './style.css';

$(document).ready(function() {
  $(".toggler").on("click", function() {
    $(".sidebar-container").toggleClass("collapsed");
    $("#main-content").toggleClass("collapsed");
  });

  $(".nav-toggler").on("click", function() {
    $(this).toggleClass("is-active");
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


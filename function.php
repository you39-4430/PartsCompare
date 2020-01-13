<?php
  define('ROOT_PATH', dirname(__FILE__));
  define('DATA_PATH', ROOT_PATH . '/data');

  function getCpuList() {
    return file(DATA_PATH . '/cpu.csv');
  }

  function getGraphicsList() {
    return file(DATA_PATH . '/graphics.csv');
  }

  function getMbList() {
    return file(DATA_PATH . '/mb.csv');
  }

  function getMemoryList() {
    return file(DATA_PATH . '/memory.csv');
  }

  function getHead($title) {
    include("partials/head.php");
  }

  function getHeader() {
    include("partials/header.php");
  }

  function sideMenu() {
    include("partials/side_menu.php");
  }

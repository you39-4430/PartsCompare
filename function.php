<?php
  define('ROOT_PATH', dirname(__FILE__));
  define('DATA_PATH', ROOT_PATH . '/data');

  /**
   * CPUのリストを取得する
   * @return Array CPUのリスト
   */
  function getCpuList() {
    return file(DATA_PATH . '/cpu.csv');
  }

  /**
   * グラフィックボードのリストを取得する
   * @return Array グラフィックボードのリスト
   */
  function getGraphicsList() {
    return file(DATA_PATH . '/graphics.csv');
  }

  /**
   * マザーボードのリストを取得する
   * @return Array マザーボードのリスト
   */
  function getMbList() {
    return file(DATA_PATH . '/mb.csv');
  }

  /**
   * メモリのリストを取得する
   * @return Array メモリのリスト
   */
  function getMemoryList() {
    return file(DATA_PATH . '/memory.csv');
  }

  /**
   * headを取得する
   * @return void
   */
  function getHead($title) {
    include("partials/head.php");
  }

  /**
   * Headerを取得する
   * @return void 
   */
  function getHeader() {
    include("partials/header.php");
  }

  /**
   * サイドメニューを取得する
   * @return void 
   */
  function sideMenu() {
    include("partials/side_menu.php");
  }

  /**
   * scriptsを取得する
   * @return void 
   */
  function scripts() {
    include("partials/scripts.php");
  }

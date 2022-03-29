<?php
include_once 'templates/header.php';
if (isset($_GET['page'])) {
  switch ($_GET['page']) {
    case "help":
      include_once "templates/sidebar.php";
      if (isset($_GET['help'])) {
        if ($_GET['help'] == 'home') include_once "help/feature/home_help.php";
        else if ($_GET['help'] == 'guest_book') include_once "help/feature/guest_book_help.php";
        else if ($_GET['help'] == 'guest_data') include_once "help/feature/guest_data_help.php";
        else if ($_GET['help'] == 'employee_data') include_once "help/feature/employee_data_help.php";
      } else include_once "help/feature/help.php";
      break;
    case "guest_book":
      include_once "templates/sidebar.php";
      include_once "guest/feature/guest_book_page.php";
      break;
    case "guest_data":
      include_once "templates/sidebar.php";
      include_once "guest/feature/guest_data_page.php";
      break;
    case "employee_data":
      include_once "templates/sidebar.php";
      include_once "employee/feature/employee_data_page.php";
      break;
    case "employee_form":
      include_once "templates/sidebar.php";
      include_once "employee/feature/employee_form_page.php";
      break;
    case "employee_edit_form":
      include_once "templates/sidebar.php";
      include_once "employee/feature/employee_edit_form_page.php";
      break;
    case "employee_report":
      include_once "home/report/employee_report.php";
      break;
    case "guest_report":
      include_once "home/report/guest_report.php";
      break;
    case "employee_visitor_count_report":
      include_once "home/report/employee_visitor_count_report.php";
      break;
    case "guest_detail_report":
      include_once "guest/report/guest_detail_report.php";
      break;
    case "guest_graph":
      include_once "home/report/guest_graph.php";
      break;
    default:
      include_once "page_not_found.html";
  }
} else {
  include_once "templates/sidebar.php";
  include_once('home/feature/home_page.php');
}
include_once 'templates/footer.php';

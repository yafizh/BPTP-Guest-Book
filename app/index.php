<?php
include_once 'templates/header.php';
if (isset($_GET['page'])) {
  switch ($_GET['page']) {
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
    default:
      include_once "page_not_found.html";
  }
} else {
  include_once "templates/sidebar.php";
  include_once('home/feature/home_page.php');
}
include_once 'templates/footer.php';

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../../content/css/adminstyle.css">
    <style>
      aside .card{
        width: 100% !important;
      }
    </style>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <header>
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark row">
          <div class="col-sm-3 offset-xs-1">
            <h4 style="color: white;">Trang Quản Trị Cấp 2</h4>
          </div>
          <div class="col-sm-3 offset-sm-6">
            <a style=" text-decoration: none ; color: white;" href="?role=main">Vào Website</a>
            <a style=" text-decoration: none ; color: white;" href="?role=logout">Đăng Xuất</a>
          </div>
        </nav>
  </header>
  <div class="content">
    <div class="row">
      <aside class="col-sm-2">
        <div class="card">
          <div class="card-header">Order</div>
            <div class="list-group">
              <a href=".?role=c_2&action=wait_orders" class="list-group-item list-group-item-action">New Order</a>
              <a href=".?role=c_2&action=list_orders" class="list-group-item list-group-item-action">All Orders</a>
            </div>
        </div>
      </aside>
      <article class="col-sm-9">
          
        

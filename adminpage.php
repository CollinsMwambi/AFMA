<?php

session_start();
 if(!isset($_SESSION["loggedin"]) ){
    header("location:login.php");
}
?>

<html>
    <head>
        <link rel="stylesheet" href="admin.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   <title>Admin</title>

    </head>
    <body>
        <div class="d-flex" id="wrapper">
<div class="bg-white">
    <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold-text-uppercase">

<i class=""></i>AFMA Admin
</div>
<div class="list-group list-group-flush my-3">
    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"></a>
<i class=""></i>Dashboard

</a>
<a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"></a>
<i class=""></i>Users

</a>
<a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"></a>
<i class=""></i>Admins

</a>
<a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"></a>
<i class=""></i>Products

</a>
<a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"></a>
<i class=""></i>Logout

</a>

</div>

</div>
<div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i><?php echo($_SESSION["username"]); ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
    </html>
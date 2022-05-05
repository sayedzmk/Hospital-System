<?php

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/hms/index.php">Home </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    specializations
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/hms/specializations/add.php">ADD Specializ</a>
                        <a class="dropdown-item" href="/hms/specializations/list.php">List Specializations</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        Doctors
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/hms/doctor/add.php">ADD Doctor</a>
                        <a class="dropdown-item" href="/hms/doctor/list.php">List Doctor</a>
                    </div>
                </li>
            </ul>
            <!-- <form action="./index.php" class="form-inline my-2 my-lg-0">
                <?php if ($row['color']=='1'): ?>
                <button name="change" class="btn btn-light my-2 my-sm-0" type="submit">light</button>
                <?php else : ?>
                <button name="change" class="btn btn-dark my-2 my-sm-0" type="submit">dark</button>
                <?php endif ; ?>
            </form> -->
        </div>
    </nav>
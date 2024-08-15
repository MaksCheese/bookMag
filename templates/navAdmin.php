<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="../biblioAdmin.php"><img src="../imgs/icons/logoBook.svg" style="height: 50px; width: 50px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <button class="btn btn-outline-success"><a class="nav-link" href="../biblioAdmin.php" style="color: white;">Библиотека</a></button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-outline-success" style="margin-left: 15px; ">
                        <a class="nav-link" href="../addBookPage.php" style="color: white;">Добавить</a>
                    </button>
                </li>
            </ul>
        <form class="d-flex search" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit" >Поиск</button>          
        </form>        
        <div class="auhtoriz p-2">
            <button  class="btn btn-outline-success"><a class="nav-link" href="../inc/logout.php" style="color: black;">Выход</a></button>          
        </div>
      </div>
    </div>
</nav>
<div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">

                    <img src="assets/img/logo.png" />
                </a>

            </div>

            <div class="right-div">
                <a href="logout.php" class="btn btn-danger pull-right">Ieșire</a>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="dashboard.php" class="menu-top-active">Tablou de bord</a></li>

                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Categorii <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="add-category.php">Adaugă categorie</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-categories.php">Gestionați categoriile</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Autori <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="add-author.php">Adaugă autor</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-authors.php">Gestionați autorii</a></li>
                                </ul>
                            </li>
 <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Cărți <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="add-book.php">Adaugă cărți</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-books.php">Gestionați cărțile</a></li>
                                </ul>
                            </li>

                           <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Emitere carte <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="issue-book.php">Emite o nouă carte</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-issued-books.php">Gestionați cărțile emise</a></li>
                                </ul>
                            </li>
                             <li><a href="reg-students.php">Înregistrare studenți</a></li>

  <li><a href="change-password.php">Schimbă parola</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

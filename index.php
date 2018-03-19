<?php
require_once 'Classes/CrudPost.php';

$posts = new CrudPost();



?>
<?php require_once 'template/header.php';?>
<div class="main_container">
    <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
                <a href="index.php" class="site_title"><i class="fa fa-home"></i> <span>Blog Interativa!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->

            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                    <h3>General</h3>
                    <ul class="nav side-menu">
                        <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="tables.html">Tables</a></li>
                                <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
                <a data-toggle="tooltip" data-placement="top" title="Settings">
                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Lock">
                    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                </a>
            </div>
            <!-- /menu footer buttons -->
        </div>
    </div>
    <!-- top navigation -->
    <div class="top_nav">
        <div class="nav_menu">
            <nav>
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>


            </nav>
        </div>
    </div>
    <!-- /top navigation -->
    <br><br>
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="container-fluid" style="background-color: white">
            <?php foreach ($posts->findAll() as $post) :?>
                <div class="card text-center" style="background-color: #d5d5d5">
                    <br>
                    <div class="card-body" style="color: #0f0f0f">
                        <h3 class="card-title"><?= $post['title'].' : '.$post['subtitle'] ?></h3>
                        <hr>
                        <h2 class="card-text"><?= $post['text']?></h2>
                    </div>
                    <hr>
                    <div class="card-footer text-muted">
                        <p>Data: <?= $post['data']?></p></a>
                    </div>
                    <br><br>
                    <hr>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>

<?php require_once 'template/footer.php';?>

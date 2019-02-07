<?php
$id = $_GET["id"];
include "funcs.php";
//sessChk();

$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_select_table WHERE id=:id");
$stmt->bindValue(":id", $id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
    sqlError($stmt);
} else {
    $row = $stmt->fetch();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css">
    <link href="https://getbootstrap.com/docs/4.0/examples/blog/blog.css" rel="stylesheet">
 
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="nav">
          <a class="nav-link active" href="#">Home</a>
          <a class="nav-link" href="#">New features</a>
          <a class="nav-link" href="#">Press</a>
          <a class="nav-link" href="#">New hires</a>
          <a class="nav-link" href="#">About</a>
        </nav>
      </div>
    </div>

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">ニュース</h1>
      </div>
    </div>

    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title"><?=$row["title"]?></h2>
            <p class="blog-post-meta"><?=$row["indate"]?></p>

            <p>
			<?=$row["naiyou"]?></p>
            <hr>

          </div><!-- /.blog-post -->


          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="select.php">お気に入りリストへ</a>
            <a class="btn btn-outline-primary" href="index.php">トップページ</a>
          </nav>

        </div><!-- /.blog-main -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">
<!--      <p>Blog template built for <a href="https://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>-->
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <script>/** JS：Area */



















































</script><style>/** CSS：Area */
/*
 * Globals
 */

body {
    font-family: Georgia, "Times New Roman", Times, serif;
    color: #555;
}

h1, .h1,
h2, .h2,
h3, .h3,
h4, .h4,
h5, .h5,
h6, .h6 {
    margin-top: 0;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-weight: normal;
    color: #333;
}


/*
 * Override Bootstrap's default container.
 */

@media (min-width: 1200px) {
    .container {
        width: 970px;
    }
}


/*
 * Masthead for nav
 */

.blog-masthead {
    background-color: #428bca;
    -webkit-box-shadow: inset 0 -2px 5px rgba(0,0,0,.1);
    box-shadow: inset 0 -2px 5px rgba(0,0,0,.1);
}

/* Nav links */
.blog-nav-item {
    position: relative;
    display: inline-block;
    padding: 10px;
    font-weight: 500;
    color: #cdddeb;
}
.blog-nav-item:hover,
.blog-nav-item:focus {
    color: #fff;
    text-decoration: none;
}

/* Active state gets a caret at the bottom */
.blog-nav .active {
    color: #fff;
}
.blog-nav .active:after {
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 0;
    height: 0;
    margin-left: -5px;
    vertical-align: middle;
    content: " ";
    border-right: 5px solid transparent;
    border-bottom: 5px solid;
    border-left: 5px solid transparent;
}


/*
 * Blog name and description
 */

.blog-header {
    padding-top: 20px;
    padding-bottom: 20px;
}
.blog-title {
    margin-top: 30px;
    margin-bottom: 0;
    font-size: 60px;
    font-weight: normal;
}
.blog-description {
    font-size: 20px;
    color: #999;
}


/*
 * Main column and sidebar layout
 */

.blog-main {
    font-size: 18px;
    line-height: 1.5;
}

/* Sidebar modules for boxing content */
.sidebar-module {
    padding: 15px;
    margin: 0 -15px 15px;
}
.sidebar-module-inset {
    padding: 15px;
    background-color: #f5f5f5;
    border-radius: 4px;
}
.sidebar-module-inset p:last-child,
.sidebar-module-inset ul:last-child,
.sidebar-module-inset ol:last-child {
    margin-bottom: 0;
}


/* Pagination */
.pager {
    margin-bottom: 60px;
    text-align: left;
}
.pager > li > a {
    width: 140px;
    padding: 10px 20px;
    text-align: center;
    border-radius: 30px;
}


/*
 * Blog posts
 */

.blog-post {
    margin-bottom: 60px;
}
.blog-post-title {
    margin-bottom: 5px;
    font-size: 40px;
}
.blog-post-meta {
    margin-bottom: 20px;
    color: #999;
}


/*
 * Footer
 */

.blog-footer {
    padding: 40px 0;
    color: #999;
    text-align: center;
    background-color: #f9f9f9;
    border-top: 1px solid #e5e5e5;
}
.blog-footer p:last-child {
    margin-bottom: 0;
}









































</style></body>
</html>














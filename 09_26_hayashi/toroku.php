
<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>アカウント登録</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="hcss/signin.css" rel="stylesheet">
</head>

<body class="text-center">
<form class="form-signin" action="insert_toroku.php" method="post">
    <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">アカウント登録</h1>
	<label for="inputEmail" class="sr-only">名前</label>
	<input type="text" name="name" id="inputEmail" class="form-control" placeholder="名前" required autofocus>
    <label for="inputEmail" class="sr-only">id</label>
    <input type="text" name="lid" id="inputEmail" class="form-control" placeholder="ID" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="lpw" id="inputPassword" class="form-control" placeholder="Password" required>
    <div class="checkbox mb-3">
<!--
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
-->
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" value="LOGIN">登録</button>
</form>
<script>/** JS：Area */
</script><style>/** CSS：Area */
</style></body>
</html>














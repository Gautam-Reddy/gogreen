<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>
<body>

    <?php include 'menu.php'; ?>
    <div class="jumbotron">
  <h1>A Billion begins with One</h1>
  <p>Planting a billion trees can help us curb the effects of climate change.It's a big number,but we know we can do it with ur help.</p>
  </div>
   <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Contact Info</h2>
        </div>

        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email-id</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Mobile no</label>
                    <input type="text" name="mobile" class="form-control">
                </div>
                <div class="form-group">
                    <label>Comments</label>
                    <textarea class="form-control" name="comment">
                    </textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </section>
    <footer>
        <p class="p-3 bg-dark text-center text-white">@gogreen</p>
    </footer>
</body>
</html>
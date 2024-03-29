
<?php require_once 'crud-update.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/crud.css">
</head>
<body>
<div class="container">
    <form action="crud-update.php"
          method="post">

        <h4 class="display-4 text-center">Update</h4><hr><br>
        <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_GET['error']; ?>
            </div>
        <?php } ?>
        <div class="form-group">
            <label for="username">Gebruikersnaam</label>
            <input type="name"
                   class="form-control"
                   id="username"
                   name="username"
                   value="<?=$row['username'] ?>" >
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email"
                   class="form-control"
                   id="email"
                   name="email"
                   value="<?=$row['email'] ?>" >
        </div>
        <input type="text"
               name="id"
               value="<?=$row['id']?>"
               hidden >

        <button type="submit"
                class="btn btn-primary"
                name="update">Update</button>
        <a href="read.php" class="link-primary">View</a>
    </form>
</div>
</body>
</html>
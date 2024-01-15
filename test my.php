<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">

        <?php
            var_dump($_POST);
        ?>


<?php if (
            empty($_POST['email']) {
                if (empty($_POST['email'])) {
                    $_SESSION['user'] = [];
                }

                $_SESSION['is registered'] = true;

                $id = count($_SESSION['user']);

                $_SESSION['last_id'] = $id;
                
                $_SESSION['user'][$id] = [
                        'name' => $_POST['name'],
                        'email' => $_POST['email'],
                ]

            }
        ) : ?>
        
<div class="alert alert-success" role="alert">
    ви вказали імейл <?= $_POST['email']; ?>
</div>

</div>

<?php
session_destroy();
?>

<?php
        if (!($_SESSION['is registered'] ?? false)):
?>

        <form method="post">

        </form>

    
        
    <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
            <input 
            type="email" 
            class="form-control"
            name="email"> 
        </div>
      </form>
      <hr>
      <form>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Password</label>
          <input 
          type="password" 
          class="form-control"
          name="name"> 
      </div>
      <button type="submit" class="btn btn-primary">Sign up</button>
    </form>
    <?php
    else :
?>
        <h1>Ви вже зарегестровані з E-mail - 
            <span class="badge bg-secondary">
                <?= $_SESSION['user'][$_SESSION['last_id']]['email'] ?>
        </span>
    </h1>
<?php
    endif;
?>
</body>
</html>

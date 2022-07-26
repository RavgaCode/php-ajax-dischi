<?php include __DIR__ . '/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Dischi</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
     <img src="./img/logo-spotify.png" alt="logo spotify"> 
    </header>
    <main>
    <div class="grid">
      <div class="row">
        <?php foreach($database as $album) {?>
        <div
          class="col-12 col-md-6 col-lg-3 my-5"
        >
          <div class="text-center album-card">
            <img src="<?php echo($album['poster'])?>" alt="<?php echo($album['title'])?>" />
            <h3><?php echo($album['title'])?></h3>
            <h5><?php echo($album['author'])?></h5>
            <h5><?php echo($album['year'])?></h5>
          </div>
        </div>
        <?php }?>
      </div>
    </div>
    </main>
</body>
</html>
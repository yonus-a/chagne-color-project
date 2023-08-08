<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="./style.css" />
</head>

<body>
  <div class="container">
    <ul>
      <?php

      for ($i = 0; $i <= 53; $i++) {
        $randomNum = rand(111111, 999999);
        echo "<li style='--clr-bag:#$randomNum'></li>";
      }

      ?>
    </ul>
  </div>
</body>

</html>
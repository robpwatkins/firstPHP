<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  
    header {
      background: lightgray;
      padding: 2em;
      text-align: center;
    }
  
  </style>
</head>
<body>
  
    <ul>
      <?php foreach ($task as $key => $val) : ?>
        <li><strong><?= $key; ?></strong> <?= $val; ?></li>
      <?php endforeach; ?>
    </ul>
    

</body>
</html>
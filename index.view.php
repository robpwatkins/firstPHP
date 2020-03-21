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
  
  <h1>Task for the Day</h1>
    <ul>
      <li>
        <strong>Name: </strong> <?=$task['title']; ?>
      </li>
      <li>
        <strong>Due: </strong> <?=$task['due']; ?>
      </li>
      <li>
        <strong>Person Assigned: </strong> <?=$task['assigned_to']; ?>
      </li>
      <li>
        <strong>Status: </strong>
        <?php if ($task['completed']) : ?>
          <span class="icon">&#9989</span>
        <?php else : ?>
          <span class="icon">Narp.</span>
        <?php endif; ?>
      </li>
    </ul>
    

</body>
</html>
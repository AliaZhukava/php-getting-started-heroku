<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form test</title>
</head>
<body>

  <?php if (isset($_GET['submitted'])) { ?>
    <h1>The server had accepted:</h1>
    <p>radio: <?php echo htmlspecialchars($_GET['radio']); ?></p>
    <p>Try again? <a href="/index.php">Yes!</a></p>
  <?php } ?>

  <?php if (!isset($_GET['submitted'])) { ?>
  
  <h1>Play with the HTML form</h1>
  <form action="/index.php">
    <input type="hidden" name="submitted" value="yes">
    <p>
      <label for="my-radio-yes">radio Yes: </label>
      <input id="my-radio-yes" name="radio" type="radio" required value="Yes">
      <label for="my-radio-no">radio No: </label>
      <input id="my-radio-no" name="radio" type="radio" required value="No"></p>
      <p><label for="my-color">color: </label>       <input id="my-color" type="color"></p>
      <p><label for="my-date">date: </label>         <input id="my-date" type="date" required></p>
      <p><label for="my-month">month: </label>       <input id="my-month" type="month" required></p>
      <p><label for="my-email">email: </label>       <input id="my-email" type="email" required></p>
      <p><label for="my-number">number: </label>     <input id="my-number" type="number"></p>
      <p><label for="my-range">range: </label>       <input id="my-range" type="range" min="0" max="10"></p>
      <p><label for="my-checkbox">checkbox: </label> <input id="my-checkbox" type="checkbox" checked></p>
      <p><label for="my-select">select: </label>     <select id="my-select" size="1" required>
      <option value="">---------</option>
      <option value="1">Первая</option>
      <option value="2" selected>Вторая</option>
      </select></p>
      <textarea id="my-textarea" style="resize:none" placeholder="Введите многострочный текст"></textarea><br>

    <br>
    <input type="submit" value="Submit">
    <input type="reset" value="Clear">
  </form>

  <?php } ?>

</body>
</html>
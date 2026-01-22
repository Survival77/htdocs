<?php
$submitted = $_SERVER['REQUEST_METHOD'] === 'POST';
$name = $submitted ? trim($_POST['name'] ?? '') : '';
$age = $submitted ? trim($_POST['age'] ?? '') : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>PHP + HTML Demo</title>
  <style>
    body { font-family: system-ui, Arial, sans-serif; margin: 2rem; }
    form { display: grid; gap: 0.75rem; max-width: 420px; }
    label { display: grid; gap: 0.25rem; }
    input { padding: 0.5rem; }
    button { padding: 0.5rem 0.75rem; }
    .result { margin-top: 1rem; padding: 0.75rem; background: #f6f6f9; border: 1px solid #ddd; }
  </style>
</head>
<body>
  <h1>PHP + HTML on One Page</h1>

  <form method="post" action="">
    <label>
      Name
      <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>" />
    </label>
    <label>
      Age
      <input type="number" name="age" value="<?php echo htmlspecialchars($age); ?>" />
    </label>
    <button type="submit">Submit</button>
  </form>

  <?php if ($submitted): ?>
    <div class="result">
      <strong>Result:</strong>
      <p>Hello, <?php echo htmlspecialchars($name ?: 'stranger'); ?>!</p>
      <p>You are <?php echo htmlspecialchars($age ?: 'unknown'); ?> years old.</p>
      <p>(This output is rendered by PHP inside the HTML.)</p>
    </div>
  <?php endif; ?>
</body>
</html>

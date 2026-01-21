<?php
$submitted = $_SERVER['REQUEST_METHOD'] === 'POST';

// Initialize values for sticky form
$firstname = $submitted ? trim($_POST['firstname'] ?? '') : '';
$lastname  = $submitted ? trim($_POST['lastname'] ?? '') : '';
$email     = $submitted ? trim($_POST['email'] ?? '') : '';
$website   = $submitted ? trim($_POST['website'] ?? '') : '';
$comment   = $submitted ? trim($_POST['comment'] ?? '') : '';
$gender    = $submitted ? ($_POST['gender'] ?? '') : '';
$program   = $submitted ? ($_POST['program'] ?? '') : '';

$uploadInfo = null;
if ($submitted && isset($_FILES['myFile']) && is_array($_FILES['myFile'])) {
    if (!empty($_FILES['myFile']['name']) && $_FILES['myFile']['error'] === UPLOAD_ERR_OK) {
        $uploadsDir = __DIR__ . DIRECTORY_SEPARATOR . 'uploads';
        if (!is_dir($uploadsDir)) {
            @mkdir($uploadsDir, 0777, true);
        }
        $safeName = preg_replace('/[^A-Za-z0-9_.-]/', '_', basename($_FILES['myFile']['name']));
        $target = $uploadsDir . DIRECTORY_SEPARATOR . $safeName;
        if (move_uploaded_file($_FILES['myFile']['tmp_name'], $target)) {
            $uploadInfo = [
                'status' => 'success',
                'filename' => $safeName,
                'size' => (int)$_FILES['myFile']['size'],
            ];
        } else {
            $uploadInfo = [ 'status' => 'error', 'message' => 'Failed to save uploaded file.' ];
        }
    } elseif (!empty($_FILES['myFile']['name'])) {
        $uploadInfo = [ 'status' => 'error', 'message' => 'Upload error code: ' . (int)$_FILES['myFile']['error'] ];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Hospital Form</title>
  <style>
    :root { color-scheme: light; }
    body { font-family: system-ui, Arial, sans-serif; margin: 2rem; background: #FFFDD0; }
    form { display: grid; gap: 0.75rem; max-width: 560px; background: #fff; padding: 1rem 1.25rem; border: 1px solid #ddd; margin: 0 auto; }
    fieldset { border: 1px solid #ddd; padding: 0.75rem 1rem; }
    legend { font-weight: 600; }
    label { display: grid; gap: 0.25rem; }
    input[type="text"], input[type="email"], input[type="url"], input[type="number"], select, textarea { padding: 0.5rem; border: 1px solid #ccc; border-radius: 4px; }
    button { width: fit-content; padding: 0.5rem 0.9rem; }
    .row { display: grid; grid-template-columns: 1fr 1fr; gap: 0.75rem; }
    .result { margin-top: 1rem; padding: 0.9rem; background: #f6f6f9; border: 1px solid #ddd; max-width: 560px; margin-left: auto; margin-right: auto; }
    .muted { color: #555; }
    .error { color: #b00020; }
    .success { color: #0a6; }
  </style>
  <!-- Note: Serve this via Apache (XAMPP) or PHP built-in server -->
  <!-- Example: http://localhost/Tutorials/HospitalForm.php -->
  <!-- Or: php -S localhost:8080 -t C:/xampp/htdocs/Tutorials -->
  
</head>
<body>
  <h1>Hospital Intake Form</h1>

  <form method="post" action="" enctype="multipart/form-data" novalidate>
    <div class="row">
      <label>
        First name
        <input type="text" name="firstname" value="<?php echo htmlspecialchars($firstname); ?>" required />
      </label>
      <label>
        Last name
        <input type="text" name="lastname" value="<?php echo htmlspecialchars($lastname); ?>" required />
      </label>
    </div>

    <label>
      Email
      <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>" />
    </label>

    <label>
      Website
      <input type="url" name="website" value="<?php echo htmlspecialchars($website); ?>" placeholder="https://example.com" />
    </label>

    <label>
      Program / Department
      <select name="program">
        <optgroup label="STEM">
          <option value="Computer Science" <?php echo $program==='Computer Science'?'selected':''; ?>>Computer Science</option>
          <option value="Information Technology" <?php echo $program==='Information Technology'?'selected':''; ?>>Information Technology</option>
          <option value="Engineering" <?php echo $program==='Engineering'?'selected':''; ?>>Engineering</option>
        </optgroup>
        <optgroup label="Health Sciences">
          <option value="Molecular Biology" <?php echo $program==='Molecular Biology'?'selected':''; ?>>Molecular Biology</option>
          <option value="Pharmacy" <?php echo $program==='Pharmacy'?'selected':''; ?>>Pharmacy</option>
        </optgroup>
      </select>
    </label>

    <fieldset>
      <legend>Gender</legend>
      <label><input type="radio" name="gender" value="female" <?php echo $gender==='female'?'checked':''; ?> /> Female</label>
      <label><input type="radio" name="gender" value="male" <?php echo $gender==='male'?'checked':''; ?> /> Male</label>
      <label><input type="radio" name="gender" value="other" <?php echo $gender==='other'?'checked':''; ?> /> Other</label>
    </fieldset>

    <label>
      Comment
      <textarea name="comment" rows="4" cols="40"><?php echo htmlspecialchars($comment); ?></textarea>
    </label>

    <label>
      Upload file (optional)
      <input type="file" name="myFile" />
    </label>

    <button type="submit">Submit</button>
  </form>

  <?php if ($submitted): ?>
    <div class="result">
      <strong>Submitted Data</strong>
      <p><span class="muted">First name:</span> <?php echo htmlspecialchars($firstname ?: '—'); ?></p>
      <p><span class="muted">Last name:</span> <?php echo htmlspecialchars($lastname ?: '—'); ?></p>
      <p><span class="muted">Email:</span> <?php echo htmlspecialchars($email ?: '—'); ?></p>
      <p><span class="muted">Website:</span> <?php echo htmlspecialchars($website ?: '—'); ?></p>
      <p><span class="muted">Program:</span> <?php echo htmlspecialchars($program ?: '—'); ?></p>
      <p><span class="muted">Gender:</span> <?php echo htmlspecialchars($gender ?: '—'); ?></p>
      <p><span class="muted">Comment:</span> <?php echo nl2br(htmlspecialchars($comment ?: '—')); ?></p>

      <?php if ($uploadInfo): ?>
        <?php if ($uploadInfo['status'] === 'success'): ?>
          <p class="success">Uploaded: <?php echo htmlspecialchars($uploadInfo['filename']); ?> (<?php echo (int)$uploadInfo['size']; ?> bytes)</p>
        <?php else: ?>
          <p class="error">File upload error: <?php echo htmlspecialchars($uploadInfo['message']); ?></p>
        <?php endif; ?>
      <?php endif; ?>

      <p class="muted">(This section is rendered by PHP after you submit.)</p>
    </div>
  <?php endif; ?>

</body>
</html>
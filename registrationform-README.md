# Membership Registration Form

This README documents the simple HTML/PHP registration form found in [registrationform.php](registrationform.php).

## Overview
The form collects basic user details and submits them via POST to [process.php](process.php) for handling.

## Prerequisites
- A local web server (e.g., XAMPP) running Apache and PHP.
- Place the project under `htdocs` (e.g., `C:/xampp/htdocs/Tutorials`).

## How To Run
1. Start Apache in the XAMPP Control Panel.
2. Open your browser and navigate to: `http://localhost/Tutorials/registrationform.php`.
3. Fill the form and click Register.

## Form Details
- Action: [process.php](process.php)
- Method: POST
- Fields:
  - Firstname: input `name="firstname "` (note the trailing space)
  - Lastname: input `name="lastname"`
  - City: input `name="city"`
  - Submit button: input `name="submit"`, value `register`

## Expected POST Payload
On submit, [process.php](process.php) will receive:
- `firstname ` (with a trailing space in the key)
- `lastname`
- `city`
- `submit` (set when the button is clicked)

## Example Processing (PHP)
```php
<?php
// Note: the 'firstname ' key includes a trailing space.
$firstname = $_POST['firstname '] ?? '';
$lastname  = $_POST['lastname'] ?? '';
$city      = $_POST['city'] ?? '';

if (isset($_POST['submit'])) {
    // Handle registration logic
    // e.g., validate and persist, then echo a response
}
?>
```

## Notes & Recommendations
- The `firstname` field's `name` attribute currently has a trailing space (`firstname `). If you change it to `firstname` in [registrationform.php](registrationform.php), also update the processing code to read `$_POST['firstname']`.
- There is no client-side or server-side validation included. Consider adding required checks and sanitization.
- The form is wrapped in a `<pre>` tag, which may affect layout. You can remove it for more typical form styling.

## Related Files
- Form: [registrationform.php](registrationform.php)
- Handler: [process.php](process.php)

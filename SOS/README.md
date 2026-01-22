# SOS Session Counter Demo

Simple PHP session counter trio scoped to this folder.

Files
- countermain.php: Hub page showing current session count, username (if set), and navigation.
- counter1.php: Increments the shared counter and links to counter2/home.
- counter2.php: Same session counter, shows session_id, links back to counter1/home.

How to run (XAMPP/Apache)
- Place this folder under htdocs/Tutorials/SOS (already is if you are reading here) and start Apache in XAMPP.
- Open http://localhost/Tutorials/SOS/countermain.php to begin; follow links to counter1/counter2.
- Optional: countermain has a link to ../logon.php if you want to set a username in the parent session.

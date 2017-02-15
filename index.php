<!doctype html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Jornal De Bord</title>
  </head>
  <body>
    <header>
      <h1>Jornal De Bord</h1>
    </header>
      <main>
        <ul>
          <?php
            $entries = scandir("mydir", $SCANDIR_SORT_DESCENDING);
            $entries = array_diff($entries, array(".",".."));
            foreach($entries as $entry)
            {
              echo "<li><a href='index.php?content=$entry'> $entry </a></li>\n";
            }
           ?>
        </ul>
        <?php
        include "mydir/" . $_GET['content'];
        ?>
      </main>
  </body>
</html>

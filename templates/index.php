<!DOCTYPE html>
<html>
  <head>
    <title>Website name</title>
  </head>
  <body>
    <main>
      <?php
        $settings = false;
      
        if ($settings == true) {
          $theme, $blocked;
          
          $theme = "light";
          $blocked = false;
          
          if ($theme == "light") {
            echo "<meta name='color-scheme' content='light'/>";
          } else if ($theme == "dark") {
            echo "<meta name='color-scheme' content='dark'/>";
          } else if ($theme == "light dark") {
            echo "<meta name='color-scheme' content='light dark'/>";
          } else {
            return null;
          }
          
          if ($blocked == true) {
            echo "<meta http-equiv='refresh' content='0;url=page.html'/>";
          } else if ($blcoked == false) {
            // do nothing
          } else {
            return null;
          }
        }
      ?>
    </main>
  </body>
</html>

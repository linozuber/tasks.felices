<?php
require 'logic/connect.php';
require 'logic/getstats.php';
?>

<!DOCTYPE HTML>
<html lang="de">
<?php
require 'head.php';
?>
<body>
  <header class="yellow t-white mb-2">
    <h1 class="p-2">FELICES TASKS
      <a  class="fr mr-2" href="index.php?<?php echo $_GET["backlinkdata"]; ?>">
        <img class="" src="media/back.png" alt"zurück" width="28px">
      </a>
    </h1>
  </header>
  <main>
    <div class="content t-dark">
      <section class="p-2">
        <artivle>
          <h3 class="mb-1 mt-2">Stats</h3>
          <p>Hier folgt ein rudimentärer Überblich über die die erstellten Boards.</p>
        </article>
        <artivle>
          <h3 class="mb-1 mt-2">Boards</h3>
          <?php
          foreach($board_count as $_status => $_count){
            echo'
            <p><strong>'.$_status.': </strong>'.$_count.'</p>
            ';
          }
          ?>
        </article>
        <artivle>
          <h3 class="mb-1 mt-2">Aktionen</h3>
          <a href="logic/delete_boards.php?backlinkdata=<?php echo $_GET["backlinkdata"]; ?>" class="btn red">Abgelaufene und leere Boards löschen</a>
        </article>
      </section>
    </div>
  </main>
  <footer>
    <p class="t-dark sm mb-1 mt-1">Lino Zuber | Hemishoferstrasse 46 | CH-8260 Stein am Rhein | <a href="mailto:info@felices.ch">info@felices.ch</a> | <a href="https://@felices.ch" target="_blank">FELICES</a> | <a href="stats.php?backlinkdata=<?php echo $_GET["backlinkdata"]; ?>">Statistics</a></p>
  </footer>
</body>
</html>

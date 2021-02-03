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
          <h3 class="mb-1 mt-2">Aktuelles Hintergrundbild</h3>
            <p>
              Link:
              <a class="link" target="_blank" href="https://www.pexels.com/photo/flock-of-birds-917494/">
                Photo by Efdal YILDIZ from Pexels
              </a>
            </p>
        </article>
        <artivle>
          <h3 class="mb-1 mt-2">Was ist TASKS?</h3>
          <p>TASKS ist ein persönliches Projekt, um mich im Webbereich selbständig weiterzuentwickeln. Das ganze ist von Grund auf selbst gebaut, einzig jQuery ist eingebunden.</p>
          <p class="mt-1">Tasks wird auf unbestimmte Zeit von mir privat betrieben und weiterentwickelt. </p>
          <a class="link mt-1" href="index.php?visit=000000">TASKS Roadmap</a>
        </article>
        <artivle>
          <h3 class="mb-1 mt-2">Kann ich mein Board speichern?</h3>
          <p>Jedes Board wird automatisch gespeichert und ist erreichbar unter einem einzigartigen Link mit dem Format:</p>
          <p class="mt-1 mb-1">
            https://tasks.felices.ch?board=XXXXXXX <br>
            (die Board IDs – hier xxxxxxx – variieren in der Länge)<br>
            Ich empfehle den Link als Lesezeichen einzurichten.<br>
          </p>
          Boards werden gelöscht, wenn Sie 2 Monate nicht besucht wurden oder keine Tasks beinhalten.</p>
        </article>
        <artivle>
          <h3 class="mb-1 mt-2">Ich finde mein Board nicht mehr.</h3>
          <p>Dein Board ist unter einem einzigartigen Link erreichbar. Hast du bereits mit einem Board gearbeitet, erreichst du es über den Link in deinem Verlauf.</p>
          <p class="mt-1">Wiederherstellen kann ich dein Board nicht, da ich weder weiss wer du bist, noch welches dein Board ist.</p>
        </article>
        <artivle>
          <h3 class="mb-1 mt-2">Können mehrere Leute am selben Board arbeiten?</h3>
          <p>Ja und Nein. Du kannst den Link zu deinem Board teilen. So kann jeder mit dem Link das Board bearbeiten, jedoch nicht in Echtzeit.
            Damit Änderungen von einer anderen Person übernommen werden, musst du die Seite neu laden.</p>
          <p class="mt-1">Du kannst auch einen Link zu deinem Board finden der anderen erlaubt das Board anzuschauen, jedoch nichts zu verändern. </p>
        </article>
        <artivle>
          <h3 class="mb-1 mt-2">Ist TASKS sicher?</h3>
          <p>Da es keine Logins und keine Cookies gibt aber die Boards unter obigem Link erreichbar sind, ist es möglich, durch ausprobieren auf fremde Boards zu kommen.</p>

          <p class="mt-1">Erstellen Sie deswegen bitte <b>keinenfalls</b> Tasks, die persönliche oder sensible Daten beinhalten!<br>
          Die Boards sind alle in der Theorie öffentlich zugänglich.</p>
        </article>
      </section>
    </div>
  </main>
  <footer>
    <p class="t-dark sm mb-1 mt-1">Lino Zuber | Hemishoferstrasse 46 | CH-8260 Stein am Rhein | <a href="mailto:info@felices.ch">info@felices.ch</a> | <a href="https://@felices.ch" target="_blank">FELICES</a> | <a href="stats.php?backlinkdata=<?php echo $_GET["backlinkdata"]; ?>">Statistics</a></p>
  </footer>
</body>
</html>

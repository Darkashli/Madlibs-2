<!DOCTYPE html>
<html>
<head>
    <title>madlibs</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
</head>
<body>
    
  
    <header>mad Libs</header>

      <nav>
       <ul>
         <li><a href="index.php">Er heerst paniek...</a></li>
         <li><a href="onkunde.php">Onkunde</a></li>
       </ul>
      </nav>

    <div class="content">
    <form method="POST" action="actionpage.php">
         <h3>Er heerst paniek...</h3><br>

	     <span>Welke dier zou je nooit als huisdier willen hebben? <input type="text" name="v1"></span><br>
         <span>Wie is de belangrijkste persoon in je leven? <input type="text" name="v2"></span><br>
         <span>In welk land zou je graag willen wonen? <input type="text" name="v3"></span><br>
         <span>Wat doe je als je je verveelt? <input type="text" name="v4"></span><br>
         <span>Met welk speelgoed speelde je als kind het meest? <input type="text" name="v5"></span><br>
         <span>Bij welke docent spijbel je het liefst? <input type="text" name="v6"></span><br>
         <span>Als je €100.000,-had, wat zou je dan kopen? <input type="text" name="v7"></span><br>
         <span>Wat is je favoriete bezigheid? <input type="text" name="v8"></span><br>

         <input class="button" type="submit"  value="Versturen">
         </form>
         <footer>&copy;<?php echo date("Y"); ?></footer>
      </div>
  </body>
</html>

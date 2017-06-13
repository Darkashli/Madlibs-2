<!DOCTYPE html>
<html>
<head>
	<title>onkunde</title>
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
    <form method="POST" action="actionspage2.php">
         <h3>Onkunde</h3><br>

	     <span>Wat zou je graag willen kunnen? <input type="text" name="v1"></span><br>
         <span>Met welke persoon kun je goed opschieten? <input type="text" name="v2"></span><br>
         <span>Wat is je favoriete getaal? <input type="text" name="v3"></span><br>
         <span>Wat heb je altijd bij je als je op vakantie gaat? <input type="text" name="v4"></span><br>
         <span>Wat is je beste persoonlijke eigenschap? <input type="text" name="v5"></span><br>
         <span>Wat is je slechtste persoonlijke eigenschap? <input type="text" name="v6"></span><br>
         <span>Wat is het ergste dat je kan overkomen? <input type="text" name="v7"></span><br>

         <input class="button" type="submit"  value="Versturen">
    </form>
         <footer>&copy;<?php echo date("Y"); ?></footer>
    </div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Onkunde</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
</head>
<body>
  
  <header>mad Libs</header>
    
    <nav>
      <ul>
        <li><a href="index.php">Er heerst paniek...</li>
        <li><a href="onkunde.php">Onkunde</li>
      </ul>
    </nav>

<div class="content">

  <span class="paragraph">Er zijn veel mensen <?php echo $_POST['v1']; ?> die niet kunnen tekenen. Neem nou meneer Ronkes <?php echo $_POST['v2']; ?>. Zelfs met de hulp van een potlood aan of zelfs tien kan meneer Ronkes<?php echo $_POST['v3']; ?> niet tekenen. Dat heeft niet te maken met een <?php echo $_POST['v4']; ?> gebrek aan creativiteit <?php echo $_POST['v5']; ?> maar met een te veel aan perfectionisme. Te veel <?php echo $_POST['v6']; ?> perfectionisme leidt tot verveling en dat is <?php echo $_POST['v7']; ?> niet goed als je wilt tekenen. Helaas voor meneer Ronkes.</span>


<footer>&copy;<?php echo date("Y"); ?></footer>
</div>

</body>






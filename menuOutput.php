<form class="header-addTask-form" method="post" action="index.php">
    <?php if ($_SERVER['PHP_SELF'] == '/index.php') { ?>
    <input type="submit" name="coloredMenu" value="HOME" id="phpBG">
    <?php } else { ?>
    <input type="submit" name="coloredMenu" value="HOME">
    <?php } ?>
</form>
<form class="header-addTask-form" method="post" action="about.php">
    <?php if ($_SERVER['PHP_SELF'] == '/about.php') { ?>
    <input type="submit" name="coloredMenu" value="ABOUT US" id="phpBG">
    <?php } else { ?>
    <input type="submit" name="coloredMenu" value="ABOUT US">
    <?php } ?>
</form>
<form class="header-addTask-form" method="post" action="news.php">
    <?php if ($_SERVER['PHP_SELF'] == '/news.php') { ?>
    <input type="submit" name="coloredMenu" value="NEWS" id="phpBG">
    <?php } else { ?>
    <input type="submit" name="coloredMenu" value="NEWS">
    <?php } ?>
</form>
<form class="header-addTask-form" method="post" action="competitons.php">
    <?php if ($_SERVER['PHP_SELF'] == '/competitons.php') { ?>
    <input type="submit" name="coloredMenu" value="COMPETITIONS" id="phpBG">
    <?php } else { ?>
    <input type="submit" name="coloredMenu" value="COMPETITIONS">
    <?php } ?>
</form>
<form class="header-addTask-form" method="post" action="contacts.php">
    <?php if ($_SERVER['PHP_SELF'] == '/contacts.php') { ?>
    <input type="submit" name="coloredMenu" value="CONTACTS" id="phpBG">
    <?php } else { ?>
    <input type="submit" name="coloredMenu" value="CONTACTS">
    <?php } ?>
</form>
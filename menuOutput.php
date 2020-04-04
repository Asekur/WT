<form class="header-addTask-form" method="get" action="index.php">
    <?php if (isset($_GET['coloredMenu']) && 'HOME' == $_GET['coloredMenu']) { ?>
    <input type="submit" name="coloredMenu" value="HOME" id="phpBG">
    <?php } else { ?>
    <input type="submit" name="coloredMenu" value="HOME">
    <?php } ?>
</form>
<form class="header-addTask-form" method="get" action="about.php">
    <?php if (isset($_GET['coloredMenu']) && 'ABOUT US' == $_GET['coloredMenu']) { ?>
    <input type="submit" name="coloredMenu" value="ABOUT US" id="phpBG">
    <?php } else { ?>
    <input type="submit" name="coloredMenu" value="ABOUT US">
    <?php } ?>
</form>
<form class="header-addTask-form" method="get" action="news.php">
    <?php if (isset($_GET['coloredMenu']) && 'NEWS' == $_GET['coloredMenu']) { ?>
    <input type="submit" name="coloredMenu" value="NEWS" id="phpBG">
    <?php } else { ?>
    <input type="submit" name="coloredMenu" value="NEWS">
    <?php } ?>
</form>
<form class="header-addTask-form" method="get" action="competitons.php">
    <?php if (isset($_GET['coloredMenu']) && 'COMPETITIONS' == $_GET['coloredMenu']) { ?>
    <input type="submit" name="coloredMenu" value="COMPETITIONS" id="phpBG">
    <?php } else { ?>
    <input type="submit" name="coloredMenu" value="COMPETITIONS">
    <?php } ?>
</form>
<form class="header-addTask-form" method="get" action="contacts.php">
    <?php if (isset($_GET['coloredMenu']) && 'CONTACTS' == $_GET['coloredMenu']) { ?>
    <input type="submit" name="coloredMenu" value="CONTACTS" id="phpBG">
    <?php } else { ?>
    <input type="submit" name="coloredMenu" value="CONTACTS">
    <?php } ?>
</form>
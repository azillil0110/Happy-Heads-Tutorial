
<header>
    <div class="center-alignment">
        <a href="./index.php"><img id="logo" src="images/hpt_logo.png" alt="HPT Logo"></a>
        <h2>Happy Head Tutorials</h2>
    </div>
    
    <nav>
        <?php require_once('includes/functions.php') ?>
        <a class="a-nav <?php if(is_page('') or is_page('/index.php')) echo 'current-page'?>" href="index.php">Home</a>
        <a class="a-nav <?php if(is_page('/team.php')) echo 'current-page'?>" href="team.php">Team</a>
        <a class="a-nav <?php if(is_page('/program.php')) echo 'current-page'?>" href="program.php">Program</a>
        <a class="a-nav <?php if(is_page('/events.php')) echo 'current-page'?>" href="events.php">Events</a>
        <a class="a-nav <?php if(is_page('/about.php')) echo 'current-page'?>" href="about.php">About</a>
        <a class="a-nav" href="#contact-container">Contact</a>
        <a href="./enroll-form.php"><button onclick="window.location.href'../enroll-form.php'" class="btn-nav" >APPLY</button> </a>
    </nav>
</header>


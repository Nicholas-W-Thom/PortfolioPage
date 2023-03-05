<?php 
    $headerParams['title'] = $headerParams['title'] ?? "portfolio";
    $headerParams['stylesheets'] = $headerParams['stylesheets'] ?? array();//array('default.css'=>'internal');
    $headerParams['scripts'] = $headerParams['scripts'] ?? array();
?>
<!DOCTYPE HTML>
<html>
<header>
    <title><?php echo $headerParams['title']  ?></title>
    <link type='text/css' rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <link type='text/css' rel='stylesheet' href='/styles/default.css'>
    <?php 
        foreach($headerParams as $path => $location){
            if($location === 'internal'){
                echo "<link type='text/css' rel='stylesheet' href='/styles/ $path'>";
            }else{
                echo "<link type='text/css' rel='stylesheet' href='$path'>";
            }
        }
    ?>
    <link type="text/css" rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</header>
    
<body>
    <header>
        <div class="fit-max-width">
            <div id="nav-control">
                <span class="material-icons" id="open-nav">menu</span>
                <span class="material-icons hidden" id="close-nav">close</span>
            </div>
            <h1><?php echo $properties['owner-name']; ?></h1>
            
            <nav class="clear-fix hidden">
                <ul>
                    <li><a href="index.php" <?php if($currentPage === "index.php") echo "id='current'"; ?>>Home</a></li>
                    <li><a href="profile.php" <?php if($currentPage === "profile.php") echo "id='current'"; ?>>Profile</a></li>
                    <li><a href="blog.php" <?php if($currentPage === "blog.php") echo "id='current'"; ?>>Blog</a></li>
                    <li><a href="projects.php" <?php if($currentPage === "projects.php") echo "id='current'"; ?>>Projects</a></li>
                    <li><a href="skills.php" <?php if($currentPage === "skills.php") echo "id='current'"; ?>>Skills</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <script type="text/javascript">
        openNav = document.getElementById('open-nav');
        closeNav = document.getElementById('close-nav');
        nav = document.querySelector('header nav');
        openNav.onclick = toggleNav;
        closeNav.onclick = toggleNav;
        function toggleNav(){
            nav.classList.toggle("hidden");
            openNav.classList.toggle("hidden");
            closeNav.classList.toggle("hidden");
            
        }
    </script>
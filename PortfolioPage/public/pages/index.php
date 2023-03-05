<?php

require_once '../../private/initilize.php';
$currentPage = "index.php";
require_once get_file_path(TEMPLATE_PATH, 'header.php');

?>
<main class="fit-max-width">
    <article>
            <h2>Welcome!</h2>
            <p>Thank you for visiting my portfolio page. From here you can view my profile, blog page, see my latest projects, 
                or look at the skills tab to see what might end up in my projects next.</p>
    </article>
    <article>
        <h2>What to expect!</h2>
        <div class="parent">
            <div class="floating">
            <h3>Profile</h3>
            <ul>
                <li>Get to know me!</li>
                <li>General overview</li>
                <li>Contact info</li>
                <li>Github link</li>
            </ul>
            </div>
        <div class="floating">
                <h3>Blog</h3>
                <ul>
                    <li>See what I'm currently working on!</li>
                    <li>In progress photos as my applications are built</li>
                    <li>General updates</li>
                </ul>
        </div>
        <div class="floating">
                <h3>Projects</h3>
                <ul>
                    <li>A showcase location for my completed projects</li>
                    <li>project descriptions</li>
                    <li>Tagged with what technologies were involved in creation</li>
                    <li>Link to projects on github</li>
                </ul>
        </div>
        <div class="floating">
                <h3>Skills</h3>
                <ul>
                    <li>List of my skills so you know what might show up in future projects</li>
                    <li>Obviously not the best at creating a visually appealing design xD</li>
                </ul>

        </div>
    </div>
    </article>
    
</main>

<?php
require_once get_file_path(TEMPLATE_PATH, 'footer.php');

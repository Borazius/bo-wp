<!-- Inhalt und Titel eines Artikels lassen sich auf einer Einzelseite in WordPress ausgeben. 
Hierfür muss zunächst der Beitrag in einer PHP-Datei vorbereitet werden. -->
<?php get_header(); ?>

 <!-- ich muss den content / post zunächst vorbereiten       -->
 <!-- Bevor ich the_content unten ausführen kann muss ich das post-Objekt erzeugen     -->
<? the_post(); ?>

<h1><?php the_title(); ?></h1>
<div><?php the_content(); ?></div>
 
<?php get_footer(); ?>
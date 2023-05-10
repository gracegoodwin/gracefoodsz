<!-- ##### nav section ##### -->


<nav>
    <a class="<?php
    if($pathParts['filename'] == 'index') {
        print 'activePage';
    }
    ?>" href="index.php">Home</a>
 
 
<!-- ##### meal categories ##### -->
 

    <a class="<?php
    if($pathParts['filename'] == 'breakfast') {
        print 'activePage';
        }
        ?>" href="breakfast.php">Breakfast</a>

    <a class="<?php
        if($pathParts['filename'] == 'lunch') {
            print 'activePage';
        }
        ?>" href="lunch.php">Lunch</a>

    <a class="<?php
        if($pathParts['filename'] == 'dinner') {
            print 'activePage';
        }
        ?>" href="dinner.php">Dinner</a>

    <a class="<?php
        if($pathParts['filename'] == 'dessert') {
            print 'activePage';
        }
        ?>" href="dessert.php">Dessert</a>

    <a class="<?php
        if($pathParts['filename'] == 'sides') {
            print 'activePage';
        }
        ?>" href="sides.php">Sides</a>


<!-- ##### form, array, sources ##### -->


        <a class="<?php
        if($pathParts['filename'] == 'form') {
            print 'activePage';
        }
        ?>" href="form.php">Survey</a>

    <a class="<?php
        if($pathParts['filename'] == 'array') {
            print 'activePage';
        }
        ?>" href="array.php">My Opinion</a>


</nav>
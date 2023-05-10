    
<?php
include 'top.php';
?>
<main>
    <h1>SQL Statements</h1>
        
        <h2>Create table for final project</h2>
        
        <pre>
        CREATE TABLE tblRecipes (
            fldBkfst tinyint(1) DEFAULT 0,
            fldLunch tinyint(1) DEFAULT 0,
            fldDinner tinyint(1) DEFAULT 0,
            fldDsrt tinyint(1) DEFAULT 0,
            fldChef varchar(25) DEFAULT NULL,
            fldDish varchar(70) DEFAULT NULL,
            fldEmail varchar(50) DEFAULT NULL,
            fldPhone varchar(10) DEFAULT NULL
        )
        </pre>


        <h2>Array Table</h2>
        <pre>
        CREATE TABLE tblEvaluate (
          fldMeal varchar(70) DEFAULT NULL,
          fldDifficulty varchar(1) DEFAULT NULL,
          fldEnjoyment varchar(1) DEFAULT NULL,
          fldRating varchar(1) DEFAULT NULL,
          fldRemake varchar(5) DEFAULT NULL
        )
        </pre>

        <h2>Insert Data</h2>
        <pre>
        INSERT INTO tblEvaluate (fldMeal, fldDifficulty, fldEnjoyment, fldRating, fldRemake) VALUES
        ('Lemon Thyme Chicken', 2, 5, 5, 'Yes'),
        ('Mongolian Beef', 3, 5, 5, 'Yes'),
        ('Cream Cheese Pumpkin Bread', 4, 4, 5, 'Yes'),
        ('Garlic Aioli', 1, 5, 5, 'Yes'),
        ('Bagel', 4, 3, 5, 'Yes'),
        ('Reuben', 1, 3, 4, 'Maybe')
        </pre>


</main>    
<?php
include 'footer.php';
?>
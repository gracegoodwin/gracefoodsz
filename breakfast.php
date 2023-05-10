<?php
    include 'top.php';
?>
<main>
    <table class="food-list">
    <tr>
        <th></th>
        <th></th>
    </tr>    
    <tr>
        <td><a class="<?php
        if($pathParts['filename'] == 'bagel') {
            print 'activePage';
        }
        ?>" id="test" href="bagel.php">Bagel</a></td>
        <td class="food-list-img"><img src="images/bagel.jpg" alt="Bagel" class="img-bagel" style="width:250px;"></td>
    </tr>
    </table>
</main>
<?php
include 'footer.php';
?>
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
        if($pathParts['filename'] == 'reuben') {
            print 'activePage';
        }
        ?>" id="test" href="reuben.php">Reuben</a></td>
        <td class="food-list-img"><img src="images/reuben.jpg" alt="Reuben" class="img-reuben" style="width:250px;"></td>
    </tr>
    </table>
</main>
<?php
include 'footer.php';
?>
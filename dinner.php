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
            if($pathParts['filename'] == 'lemon-thyme-chicken') {
                print 'activePage';
            }
            ?>" id="test" href="lemon-thyme-chicken.php">Lemon Thyme Chicken</a></td>
            <td class="food-list-img"><img src="images/lemon-thyme-chicken.jpg" alt="Lemon Thyme Chicken" class="img-lemon-thyme-chicken" style="width:200px;height:200px;"></td>
        </tr>
        <tr>
            <td><a class="<?php
                if($pathParts['filename'] == 'mongolian-beef') {
                    print 'activePage';
                }
                ?>" id="test" href="mongolian-beef.php">Mongolian Beef</a></td>
            <td class="food-list-img"><img src="images/mongolian-beef.jpg" alt="Mongolian Beef" class="img-mongolian-beef" style:="width:200px;height:200px"></td>
        </tr>
    </table>
</main>
<?php
include 'footer.php';
?>
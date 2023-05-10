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
                if($pathParts['filename'] == 'Cream Cheese Pumpkin Bread') {
                    print 'activePage';
                }
                ?>" id="test" href="cream-cheese-pumpkin-bread.php">Cream Cheese Pumpkin Bread</a></td>
                <td><img src="images/cream-cheese-pumpkin-bread.jpg" alt="Cream Cheese Pumpkin Bread" class="img-cream-cheese-pumpkin-bread" style="width:250px;"></td>
                </tr>
                
            </table>
        </main>
<?php
include 'footer.php';
?>
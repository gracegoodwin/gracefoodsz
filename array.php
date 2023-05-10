    
<?php
include 'top.php';

$foods = array(
    array('Lemon Thyme Chicken', 2, 5, 5, 'Yes'),
    array('Mongolian Beef', 3, 5, 5, 'Yes'),
    array('Cream Cheese Pumpkin Bread', 4, 4, 5, 'Yes'),
    array('Garlic Aioli', 1, 5, 5, 'Yes'),
    array('Bagel', 4, 3, 5, 'Yes'),
    array('Reuben', 1, 3, 4, 'Maybe'),
);
?>
<main>
    <h1>Here's what I think about what I've made so far!</h1>
    <section>
        <p>I am a very new home chef so don't be intimidated by the recipes here. I only started cooking at the end of 2021! I quickly found that, if you cook a your skill level, it can be a very soothing experience. That being said, don't be afraid to step out of your comfort zone a little bit! That's the only way you'll improve! It took me a little while to get used to trying new flavors and recipes but nothing tastes as good as something you made all on your own. Don't get discouraged by a bad meal or two (or three!) because it's all part of the learning experience. Even professional chefs have made mistakes along the way! I once made pizza dough and had to throw away 10 cups of flour because I didn't read the directions carefully; mistakes are going to happen!</p>
        <p>Here are a few tips that I found to be very helpful as I learned how to cook! To start, prepping all of the ingredients beforehand will make the cooking process easier and smoother. Pro hint: the prep time listed for almost all recipes represents the time it takes a professional to prepare their food. If you're like me, then you don't have Gordon Ramsey's knife skills; it takes me about twice as long to get everything prepared. I usually prepare all of my food when I get home from the grocery store. It takes up a lot of time but it helps turn a one hour meal into a 30 minute meal!</p>
        <p>My only other tip: be patient. Things are going to take a long time to master and that's okay! Let yourself learn from your mistakes and, no matter what, always try again!</p>
    </section>

    <section>
        <h2>The <?php count($foods); ?> Meals:</h2>
        <table>
            <tr class="array">
                <th class="data">Meal</th>
                <th class="data">Difficulty (1-5)</th>
                <th class="data">Enjoyment (1-5)</th>
                <th class="data">Rating (1-5)</th>
                <th class="data">Remake?</th>
            </tr>
<?php
foreach($foods as $food) {
    print '<tr class="array">';
    print '<td class="testing">' . $food[0] . '</td>';
    print '<td class="testing">' . $food[1] . '</td>';
    print '<td class="testing">' . $food[2] . '</td>';
    print '<td class="testing">' . $food[3] . '</td>';
    print '<td class="testing">' . $food[4] . '</td>';
    print '</tr>' . PHP_EOL;
}
?>
        </table>
    </section>

    
</main>    
<?php
include 'footer.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>waterMark2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <div class="block">
        <h2><span>Н</span><span>а</span><span>л</span><span>е</span><span>п</span><span>и</span><span>т</span><span>ь</span> <span>л</span><span>э</span><span>й</span><span>б</span><span>л</span> <span>в</span><span>с</span><span>е</span><span>м</span> <span> (</span><span>j</span><span>p</span><span>g</span><span>,</span><span> j</span><span>p</span><span>e</span><span>g</span><span>,</span><span> p</span><span>n</span><span>g</span><span>)</span><span>,</span><span> е</span><span>с</span><span>л</span><span>и</span> <span>н</span><span>е</span> <span>у</span><span>к</span><span>а</span><span>з</span><span>а</span><span>н</span><span>о</span> <span>И</span><span>м</span><span>я</span><span></h2>
        <form action="/" method="get">
            <label>
                File Name
                <input class="input_name"  type="text" name="file" placeholder="without file extension" value="<?= $_GET['file'] ?>">
            </label>
            <br>
            <label class="radio_label">
                Create
                <input type="radio" name="action" value="create">
            </label>
            <label class="radio_label">
                Update
                <input type="radio" name="action" value="update">
            </label>
            </label>
            <label class="radio_label">
                Delete
                <input type="radio" name="action" value="remove">
            </label><br>
            <button>Выполнить</button>
        </form>
    </div>
 
    <div class="block 111">
        <p>
            <?php  
                include './allwater.php'; 
            ?>
        </p>
    </div>

    <div class="block 222">
        <p> <?php funText('Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia quam nam fugiat error nulla. Deleniti, animi! Perferendis praesentium unde dolor sunt nihil nisi eveniet fugiat dolore aspernatur inventore autem quis, voluptatibus laudantium obcaecati magnam minus doloremque quas. Laudantium obcaecati tenetur blanditiis neque cum. Exercitationem, eveniet! Vel numquam, eligendi asperiores libero illum iure ducimus explicabo soluta unde suscipit. Id corporis ullam deleniti aliquid laudantium quo omnis, ad quaerat, culpa similique quos officiis nulla tempora pariatur. Itaque laboriosam corrupti ea eius ducimus quae autem ut voluptas sequi nihil, quisquam minima aliquam inventore officia tempore rerum veniam maxime nam odio provident? Commodi delectus minima nulla non? Voluptatem, ipsa cumque. Deleniti cum culpa iste pariatur suscipit excepturi saepe ipsum, commodi corporis doloremque delectus exercitationem eveniet maxime voluptate recusandae optio earum, laudantium voluptates animi dolores fugiat, ex magnam reiciendis. Voluptatibus illo maxime aspernatur eum molestias corporis pariatur repellendus tempora accusamus praesentium ratione excepturi animi alias consequuntur accusantium perferendis ad porro deserunt, odit doloremque quas nulla placeat. Deserunt excepturi nulla consequuntur ipsum est iusto et vitae dolorum voluptate, ratione debitis molestias distinctio quo. Recusandae eius totam repellat incidunt laudantium laboriosam, provident maiores, nihil natus quisquam laborum reprehenderit, error impedit. In accusantium iusto impedit, illo nobis suscipit, maxime exercitationem voluptates veritatis alias officiis quidem, illum cumque. Officia nostrum maiores minima deserunt quidem in, magni earum, eveniet saepe ducimus, unde doloremque sequi fugit iste eos beatae voluptate. Error nesciunt sapiente dolorem doloribus, eligendi ipsum, voluptatibus ad cum maxime optio enim iusto voluptate vel soluta placeat cupiditate, autem atque facere? Laboriosam quo nesciunt odio! Ex exercitationem rem ullam eaque, doloribus autem. Cupiditate omnis illum,  eligendi asperiores libero illum iure ducimus explicabo soluta unde suscipit. Id corporis ullam deleniti aliquid laudantium quo omnis, ad quaerat, culpa similique quos officiis nulla tempora pariatur. Itaque laboriosam corrupti ea eius ducimus quae autem ut voluptas sequi nihil, quisquam minima aliquam inventore officia tempore rerum veniam maxime nam odio provident? Commodi delectus minima nulla non? Voluptatem, ipsa cumque. Deleniti cum culpa iste pariatur suscipit excepturi saepe ipsum, commodi corporis doloremque delectus exercitationem eveniet maxime voluptate recusandae optio earum, laudantium voluptates animi dolores fugiat, ex magnam reiciendis. Voluptatibus illo maxime aspernatur eum molestias corporis pariatur repellendus tempora accusamus praesentium ratione excepturi animi alias consequuntur accusantium perferendis ad porro deserunt, odit doloremque quas nulla placeat. Deserunt excepturi nulla consequuntur ipsum est iusto et vitae dolorum voluptate, ratione debitis molestias distinctio quo. Recusandae eius totam repellat incidunt laudantium laboriosam, provident maiores, nihil natus quisquam laborum reprehenderit, error impedit. In accusantium iusto impedit, illo nobis suscipit, maxime exercitationem nisi sed commodi doloremque molestias numquam quas repellendus officia eum!')?></p>
    </div>
 
</body>

</html>
<?php
    $posts = mysqli_fetch_all(mysqli_query($connection, 'SELECT photo, title, author_book, posts.user_id, users.id, name, email FROM posts INNER JOIN users ON posts.user_id = users.id'), MYSQLI_ASSOC);
    // print_r($posts);
?>
<div class='cards-wrapper'>
    <?php
    foreach ($posts as $post) {
        echo
        "
                    <div class='card'>
                        <img src='{$post["photo"]}'></img>
                        <div class='card-content'>
                            <div class='title' title='{$post["title"]}'>
                                {$post["title"]}
                            </div>
                            <div class='author-book'>{$post["author_book"]}</div>
                            <div class='author-post'>{$post["name"]} ({$post["email"]})</div>
                        </div>
                    </div>
                    ";
                }
                ?>
</div>
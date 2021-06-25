<?php
include_once("templates/header.php");

if (isset($_GET['id'])) {
    $postid = $_GET['id'];

    $currentpost;

    foreach ($posts as $post) {
        if ($post['id'] == $postid) {
            $currentpost = $post;
        }
    }
}
?>
<main id="post-container">
    <div id="content-container">
        <h1 id="main-title"><?= $currentpost['title'] ?></h1>
        <p id="post-description"><?= $currentpost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentpost['img'] ?>" alt="<?= $currentpost['title'] ?>">
        </div>
        <p id="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur ipsum perferendis repellendus dicta sapiente error nulla, quod, quas, eos doloremque quis placeat deserunt deleniti suscipit architecto unde ea laborum nobis!
            Temporibus, saepe placeat veritatis non dolores, inventore maxime cupiditate, voluptates fugit doloremque alias corporis labore est doloribus amet! Vero veritatis modi animi magni labore placeat totam ipsam dignissimos numquam repudiandae?
            Fuga quam dolorem nulla? Unde omnis, quo esse numquam amet aliquam fugit distinctio debitis, inventore ipsam dolorum itaque quibusdam? Dolore debitis totam doloremque excepturi atque voluptatum sequi ducimus quaerat natus?
            Quasi doloribus tempora quos quae odit quam. Incidunt nam fugiat expedita fuga vel eaque facere, in praesentium temporibus quo numquam quasi voluptatum nobis non itaque repellendus est doloremque quaerat pariatur.
            Quas facere, itaque ea totam nam debitis aperiam numquam, nihil voluptatibus esse harum quod necessitatibus ad rem nisi suscipit rerum sunt molestias nulla? Magni dolore fugit nam, id quis perferendis?</p>

        <p id="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur ipsum perferendis repellendus dicta sapiente error nulla, quod, quas, eos doloremque quis placeat deserunt deleniti suscipit architecto unde ea laborum nobis!
            Temporibus, saepe placeat veritatis non dolores, inventore maxime cupiditate, voluptates fugit doloremque alias corporis labore est doloribus amet! Vero veritatis modi animi magni labore placeat totam ipsam dignissimos numquam repudiandae?
            Fuga quam dolorem nulla? Unde omnis, quo esse numquam amet aliquam fugit distinctio debitis, inventore ipsam dolorum itaque quibusdam? Dolore debitis totam doloremque excepturi atque voluptatum sequi ducimus quaerat natus?
            Quasi doloribus tempora quos quae odit quam. Incidunt nam fugiat expedita fuga vel eaque facere, in praesentium temporibus quo numquam quasi voluptatum nobis non itaque repellendus est doloremque quaerat pariatur.
            Quas facere, itaque ea totam nam debitis aperiam numquam, nihil voluptatibus esse harum quod necessitatibus ad rem nisi suscipit rerum sunt molestias nulla? Magni dolore fugit nam, id quis perferendis?</p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentpost['tags'] as $tag) : ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category) : ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>
<?php
include_once("templates/footer.php")
?>
<div id="content">
    <h1>Tin tức</h1>
    <?php
    if (!empty($list_post)) {
    ?>
        <ul class="list_post">
            <?php
            foreach ($list_post as $item) {
            ?>
                <li>
                    <a class="post-title"><?php echo $item['post-title']; ?></a>
                    <p class="post-desc"><?php echo $item['post-desc']; ?></p>
                </li>
            <?php
            }
            ?>
        </ul>
    <?php
    } else {
        echo "<p>Không có bài viết nào.</p>";
    }
    ?>
</div>
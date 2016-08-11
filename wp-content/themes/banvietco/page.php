<?php get_header(); ?>
<?php get_template_part('page','slide');  ?>
<div class="bv-menu-tree">
    <ul class="bv-menu-tree-ul clear">
        <li><a href="#">TV Đầu tư</a></li>
        <li><a href="#">Phiên dịch</a></li>
        <li><a href="#">Cửa sổ giao dịch</a></li>
        <li><a href="#">Vận chuyển</a></li>
        <li><a href="#">Dịch vụ visa/Giấy phép LĐ</a></li>
        <li><a href="#">Thương mại - XNK</a></li>
        <li><a href="#">Tiếng Nhật</a></li>
    </ul>
</div>
</header>
<div <?php
$classes = array(
    'bv-container',
);
post_class($classes); ?>
>
    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();

        // Include the page content template.
        the_content();



        // End the loop.
    endwhile;
    ?>
</div>


<?php get_footer(); ?>

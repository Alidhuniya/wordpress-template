<?php
// categories
// retrieve all list of categories
$categories = get_categories(array(
    "orderedby"=> "name",
    "parent" => 0
));

forEach($categories as $category){
    printf('<a href="%1$s" class="link"><span>%2$s</span>',
    esc_url(get_category_link($category->term_id)),
    esc_html($category->name));
}
?>

<!-- <a href="#" class="link">
              <span>All</span>
            </a>
            <a href="#" class="link">
              <span>Commercial</span>
            </a>
            <a href="#" class="link">
              <span>Natural</span>
            </a>

            <a href="#" class="link">
              <span>People</span>
            </a>
            <a href="#" class="link">
              <span>Photography</span>
            </a>
            <a href="#" class="link">
              <span>Travel</span>
            </a>
            <a href="#" class="link">
              <span>Uncategorized</span>
            </a> -->
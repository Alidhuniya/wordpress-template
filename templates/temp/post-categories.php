<?php 
$categories =get_the_category();
if(!empty($categories)){
    foreach($categories as $category){
        printf('<a href="%1$s"><span class="text-sm uppercase text-gray">%2$s </span ></a>',
       esc_url(get_category_link($category->term_id)),
        esc_html($category->name));
    }
}
?>


<!-- <a href="#"  ><span class="text-sm uppercase text-gray">People</span ></a>
<a href="#"><span class="text-sm uppercase text-gray" >Travel</span></a >-->
                        
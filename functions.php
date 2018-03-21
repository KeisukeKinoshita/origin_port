<?php 
function custom_search($search,$wp_query){
    if(isset($wp_query->query["s"]))
    $wp_query->is_search = true;
    return $search;
}
add_filter("posts_search","custom_search",10,2); 
/*検索ボックスがカラでも検索結果ページを表示する*/
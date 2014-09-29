<?php
// Create nice page titles

function dummy_title() {
    if (is_home()) {
        if (get_option('page_for_posts', true)) {
            if(function_exists( 'get_field' ) ){
                if(get_field('alt_titel',get_option('page_for_posts'))) {
                    return the_field('alt_titel',get_option('page_for_posts'));
                } else {
                    return get_the_title(get_option('page_for_posts', true));
                }
            } else {
                return get_the_title(get_option('page_for_posts', true));
            }
        } else {
            return __('Latest Posts', 'dummy');
        }
    } elseif (is_archive()) {
        $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
        if ($term) {
            return apply_filters('single_term_title', $term->name);
        } elseif (is_post_type_archive()) {
            return apply_filters('the_title', get_queried_object()->labels->name);
        } elseif (is_day()) {
            return sprintf(__('Daily Archives: %s', 'dummy'), get_the_date());
        } elseif (is_month()) {
            return sprintf(__('Monthly Archives: %s', 'dummy'), get_the_date('F Y'));
        } elseif (is_year()) {
            return sprintf(__('Yearly Archives: %s', 'dummy'), get_the_date('Y'));
        } elseif (is_author()) {
            $author = get_queried_object();
            return sprintf(__('Author Archives: %s', 'dummy'), apply_filters('the_author', is_object($author) ? $author->display_name : null));
        } else {
            return single_cat_title('', false);
        }
    } elseif (is_search()) {
        return sprintf(__('Search Results for %s', 'dummy'), get_search_query());
    } elseif (is_404()) {
        return __('Not Found', 'dummy');
    } else {
        if(function_exists( 'get_field' ) ){
            if(get_field( 'alt_titel' )){
                the_field( 'alt_titel' );
            } else {
                return get_the_title();  
            }
        } else {
            return get_the_title();  
        }
    }
}

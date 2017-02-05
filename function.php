function wp_modify_query_order( $query ) {
    if ( $query->is_search() ) {
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'DESC' ); /// post from latest to old
        
    //    $query->set( 'order', 'ASC' ); /// post from old to latest
    /*
     $query->set( 'orderby', 'title' ); /// oder by post title Alphabatically 
        $query->set( 'order', 'ASC' );
    
    */
    }
}
add_action( 'pre_get_posts', 'wp_modify_query_order' );

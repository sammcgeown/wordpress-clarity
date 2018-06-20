<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

      <form role="search" method="get" class="search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <label for="<?php echo $unique_id; ?>">
            <input id="<?php echo $unique_id; ?>" type="text" placeholder="Search for keywords..." value="<?php echo get_search_query(); ?>" name="s">
        </label>
      </form>
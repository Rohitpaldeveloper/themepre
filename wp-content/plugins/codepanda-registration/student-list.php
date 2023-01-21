<?php

if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly
    }

if ( ! class_exists( 'WP_List_Table' ) ) {
require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}

class Student_List extends WP_List_Table {

    /** Class constructor */
    public function __construct() {

        parent::__construct( [
        'singular' => __( 'Student', 'sp' ), //singular name of the listed records
        'plural' => __( 'Students', 'sp' ), //plural name of the listed records
        'ajax' => false //should this table support ajax?

        ] );

    }

    /**
    * Retrieve customer’s data from the database
    *
    * @param int $per_page
    * @param int $page_number
    *
    * @return mixed
    */
    public static function get_customers( $per_page = 5, $page_number = 1 ) {

        global $wpdb;

        $sql = "SELECT * FROM {$wpdb->prefix}codepanda";

        if ( ! empty( $_REQUEST['orderby'] ) ) {
            $sql .= ' ORDER BY ' . esc_sql( $_REQUEST['orderby'] );
            $sql .= ! empty( $_REQUEST['order'] ) ? ' ' . esc_sql( $_REQUEST['order'] ) : ' ASC';
        }

        $sql .= " LIMIT $per_page";

        $sql .= ' OFFSET ' . ( $page_number - 1 ) * $per_page;

        $result = $wpdb->get_results( $sql, 'ARRAY_A' );

        return $result;
    }

    /**
    * Returns the count of records in the database.
    *
    * @return null|string
    */
    public static function record_count() {
        global $wpdb;

        $sql = "SELECT COUNT(*) FROM {$wpdb->prefix}codepanda";

        return $wpdb->get_var( $sql );
    }

    /** Text displayed when no customer data is available */
    public function no_items() {
        echo esc_html( 'No data avaliable.', 'sp' );
    }

        /**
    * Render a column when no column specific method exists.
    *
    * @param array $item
    * @param string $column_name
    *
    * @return mixed
    */
    public function column_default( $item, $column_name ) {
        // var_dump ($item);
    // switch ( $column_name ) {
    // case 'address':
    // case 'city':
    // return $item[ $column_name ];
    // default:
    // return print_r( $item, true ); //Show the whole array for troubleshooting purposes
    // }
    if($column_name === 'filename'){
        $src = wp_get_attachment_image_src($item[$column_name], 'thumbnail');
        if($src){
             echo "<img src='$src[0]' width='100' height='100' />";
        }
        // var_dump($src);
       
    }
    else{
        echo $item[$column_name];
    }
    }
    // var_dump($src);
        /**
    * Render the bulk edit checkbox
    *
    * @param array $item
    *
    * @return string
    */
    function column_cb( $item ) {
        return sprintf(
        '<input type="checkbox" name="bulk-delete[]" value="%s" />', $item['id']
        );
    }

        /**
    * Associative array of columns
    *
    * @return array
    */
    function get_columns() {
    $columns = [
    'cb' => '<input type="checkbox" />',
    // 'id' => __( 'ID', 'sp' ),
    'cpid'=>__('CPID','sp'),
    'name' => __( 'Name', 'sp' ),
    'phoneno'=>__('Phone no','sp'),
    'email'=>__('Email','sp'),
    // 'address'=>__('Address','sp'),
    // 'university'=>__('University','sp'),
    // 'reference'=>__('Reference','sp'),
    'counselor'=>__('Counselor','sp'),
    'qualification'=>__('Qualification','sp'),
    'yop'=>__('YOP','sp'),
    'course'=>__('Course','sp'),
    'doj'=>__('DOJ','sp'),
    'mentor'=>__('Mentor','sp'),
    'timing'=>__('Timing','sp'),
    'filename'=>__('Payment','sp'),
    // Add database name 
    ];

    return $columns;
    }

    /**
    * Handles data query and filter, sorting, and pagination.
    */
    public function prepare_items() {
        $columns  = $this->get_columns();
        $sortable = $this->get_sortable_columns();
        $hidden   = $this->get_hidden_columns();
    
        
        /** Process bulk action */
        // $this->process_bulk_action();
        
        $per_page = $this->get_items_per_page( 'customers_per_page', 5 );
        $current_page = $this->get_pagenum();
        $total_items = self::record_count();
        
        $this->_column_headers = array( $columns,[],[]);
    $this->set_pagination_args( [
    'total_items' => $total_items, //WE have to calculate the total number of items
    'per_page' => $per_page //WE have to determine how many items to show on a page
    ] );

    $this->items = self::get_customers( $per_page, $current_page );
    }

    /**
    * Columns to make sortable.
    *
    * @return array
    */
    public function get_sortable_columns() {
        $sortable_columns = array(
        'name' => array( 'name', true ),
        'city' => array( 'city', false )
        );

    return $sortable_columns;
    }

    /**
    * Returns an associative array containing the bulk action
    *
    * @return array
    */
    public function get_bulk_actions() {
        $actions = [
        'bulk-delete' => 'Delete'
        ];

    return $actions;
    }
    /**
    * For Edit & Delete Features
    *
    * @return array
    */
    // public function column_name($item) {
    //     $actions = array(
    //             'edit'      => sprintf('<a href="?page=%s&action=%s&name=%s">Edit</a>',$_REQUEST['page'],'edit',$item['name']),
    //             'delete'    => sprintf('<a href="?page=%s&action=%s&name=%s">Delete</a>',$_REQUEST['page'],'delete',$item['name']),
    //         );

    //     return sprintf('%1$s %2$s', $item['name'], $this->row_actions($actions) );
    // }

}
    ?>
    <?php
    // $myListTable = new My_Student_List();
    $student_obj = new Student_List();
    ?>
    <div class="wrap">
    <h1 class="wp-heading-inline">Student List</h1>
    <span class="page-title-action" href="javascript.void(0);" id="student-data-export">Export</span>

   <style>
    #filename{
        width:8%;
    }
   </style>
    <form method="post">
    <?php
    $student_obj->prepare_items();
    $student_obj->display();  ?>
    </form>
    
    <br class="clear">
    </div>
    <?php


?>
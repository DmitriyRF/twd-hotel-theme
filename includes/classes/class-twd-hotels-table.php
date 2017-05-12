<?php

if( ! class_exists( 'WP_List_Table' ) ) {

	require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}
require_once (  dirname( dirname( __FILE__ ) ) . '/admin/hotels_data.php');

class Twd_Hotels_List_Table extends WP_List_Table {			


	public function Take_Hotels_From_DB( $limit_start = 0, $limit = 0 ){

		return wpdb_get_all_hotels( $limit_start, $limit);

	}		

		// hotel_id
		// hotel_name 
		// hotel_description
		// hotel_loves
		// hotel_image_url
		// hotel_amenities
		// hotel_contacts
		
	public function Disblay_all_hotel()
	{
		print_r(wpdb_get_all_hotels());
	}

	function get_columns(){
		$columns = array(
			'cb'        => '<input type="checkbox" />',
			'hotel_id' => 'Number',
			'hotel_name'    => 'Hotel Name',
			'hotel_description'      => 'Description'
			);
		return $columns;
	}
	function get_sortable_columns(){
		$sortable_columns = array(
			'hotel_id'  => array('hotel_id',false),
			'hotel_name' => array('hotel_name',false)
			);
		return $sortable_columns;
	}

		// function usort_reorder( $a, $b ) {///SQL ORDERBY.
		//   // Если не отсортировано, по умолчанию title
		//   $orderby = ( ! empty( $_GET['orderby'] ) ) ? $_GET['orderby'] : 'hotel_name';
		//   // Если не отсортировано, по умолчанию asc
		//   $order = ( ! empty($_GET['order'] ) ) ? $_GET['order'] : 'asc';
		//   // Определяем порядок сортировки
		//   $result = strcmp( $a->$orderby, $b->$orderby );
		//   // Отправляем конечный порядок сортировки usort
		//   return ( $order === 'asc' ) ? $result : -$result;
		// }

	function prepare_items() {
		  // $hotel_database = Take_Hotels_From_DB();
		$columns = $this->get_columns();
		$hidden = array();//hidden column
		$sortable = $this->get_sortable_columns();//how it will be sort
		$this->_column_headers = array($columns, $hidden, $sortable);
		// usort( $this->Take_Hotels_From_DB(), array( &$this, 'usort_reorder' ) );//SQL ORDERBY.
		
		$per_page = $this->get_items_per_page('hotels_per_page', 5);
		$current_page = $this->get_pagenum();
		$total_items = count($this->Take_Hotels_From_DB());
		$this->set_pagination_args( array(
		    'total_items' => $total_items,                  //Мы должны вычислить общее количество элементов
		    'per_page'    => $per_page                     //Мы должны определить, сколько элементов отображается на странице
		  ) );

		$this->items = $this->Take_Hotels_From_DB(($current_page-1)*$per_page, $per_page);//data adn use SQL LIMIT
	}

	function column_default( $item, $column_name ) {
		switch( $column_name ) {
			case 'hotel_id':
			case 'hotel_name':
			case 'hotel_description':
			return $item->$column_name;
			default:
		    return print_r( $item, true ) ; //Мы отображаем целый массив во избежание проблем
		}
	}

	function column_hotel_id($item) {
		$actions = array(
			'edit'      => sprintf('<a href=' . admin_url( 'admin.php?page=twd_edit_hotel_options' ) . '&action=%s&hotel=%s">Edit</a>','edit', $item->hotel_id),
			'delete'    => sprintf('<a href="?page=%s&action=%s&hotel=%s">Delete</a>', $_REQUEST['page'], 'delete',$item->hotel_id),
			);

		return sprintf('%1$s %2$s', $item->hotel_id, $this->row_actions($actions) );
	}

	// function get_bulk_actions() {
	// 	$actions = array(
	// 		'delete'    => 'Delete'
	// 		);
	// 	return $actions;
	// }

	function column_cb($item) {
		return sprintf( '<input type="checkbox" name="hotel[]" value="%s" />', $item->hotel_id );
	}

}

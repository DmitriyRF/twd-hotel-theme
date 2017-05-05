<?php

	if( ! class_exists( 'WP_List_Table' ) ) {

    	require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
	}
	require_once( ABSPATH . 'wp-content/themes/twd/includes/admin/hotels_data.php' );

	class Twd_Hotels_List_Table extends WP_List_Table {

		public function TakeHotel_from_DB(){

			var $example_data = array(
			  array('ID' => 1,'booktitle' => 'Quarter Share', 'author' => 'Nathan Lowell',
			        'isbn' => '978-0982514542'),
			  array('ID' => 2, 'booktitle' => '7th Son: Descent','author' => 'J. C. Hutchins',
			        'isbn' => '0312384378'),
			  array('ID' => 3, 'booktitle' => 'Shadowmagic', 'author' => 'John Lenahan',
			        'isbn' => '978-1905548927'),
			  array('ID' => 4, 'booktitle' => 'The Crown Conspiracy', 'author' => 'Michael J. Sullivan',
			        'isbn' => '978-0979621130'),
			  array('ID' => 5, 'booktitle'     => 'Max Quick: The Pocket and the Pendant', 'author'    => 'Mark Jeffrey',
			        'isbn' => '978-0061988929'),
			  array('ID' => 6, 'booktitle' => 'Jack Wakes Up: A Novel', 'author' => 'Seth Harwood',
			        'isbn' => '978-0307454355')
			);	
		}


	}
 
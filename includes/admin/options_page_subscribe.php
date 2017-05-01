<?php


function twd_subscribe_options_page(){

		if ( ! current_user_can( 'edit_theme_options' ) ) {
			wp_die(
				'<h1>' . __( 'Cheatin&#8217; uh?' ) . '</h1>' .
				'<p>' . __( 'Sorry, you are not allowed to edit theme options .' ) . '</p>',
				403
			);
		}
		$title 												= __( 'TWD Subscribe Settings' );
	
?>
	<div class="wrap">
		<h1><?php echo esc_html( $title ); ?></h1>
		<form method="post" action="options.php" novalidate="novalidate">
<?php
			settings_fields( 'twd_subscribe_options' ); 

			do_settings_sections( 'twd_subscribe_options' );

			submit_button(); 
?>
		</form>
 	</div>
<?php
}





function subscribe_settings_init() {
	// Добавляем блок опций на базовую страницу "Чтение"
	add_settings_section(
		'eg_setting_section', // секция
		'Заголовок для секции настроек',
		'eg_setting_section_callback_function',
		'twd_subscribe_options' // страница
	);

	// Добавляем поля опций. Указываем название, описание, 
	// функцию выводящую html код поля опции.
	add_settings_field(
		'eg_setting_name',
		'Описание поля опции',
		'eg_setting_callback_function', // можно указать ''
		'twd_subscribe_options', // страница
		'eg_setting_section' // секция
	);
	
	add_settings_field(
		'eg_setting_name2',
		'Описание поля опции2',
		'eg_setting_callback_function2',
		'twd_subscribe_options', // страница
		'eg_setting_section' // секция
	);

	// Регистрируем опции, чтобы они сохранялись при отправке 
	// $_POST параметров и чтобы callback функции опций выводили их значение.
	register_setting( 'twd_subscribe_options', 'eg_setting_name' );
	register_setting( 'twd_subscribe_options', 'eg_setting_name2' );
}

// ------------------------------------------------------------------
// Сallback функция для секции
// ------------------------------------------------------------------
//
// Функция срабатывает в начале секции, если не нужно выводить 
// никакой текст или делать что-то еще до того как выводить опции, 
// то функцию можно не использовать для этого укажите '' в третьем 
// параметре add_settings_section
//
function eg_setting_section_callback_function() {
	echo '<p>Текст описывающий блок настроек</p>';
}

// ------------------------------------------------------------------
// Callback функции выводящие HTML код опций
// ------------------------------------------------------------------
//
// Создаем checkbox и text input теги
//
function eg_setting_callback_function() {
	echo '<input 
		name="eg_setting_name" 
		id="eg_setting_name"
		type="checkbox" 
		' . checked( 1, get_option( 'eg_setting_name' ), false ) . ' 
		value="1" 
	/>';
}
function eg_setting_callback_function2() {
	echo '<input 
		name="eg_setting_name2"  
		id="eg_setting_name2"
		type="text" 
		value="' . get_option( 'eg_setting_name2' ) . '"
	 />';
}
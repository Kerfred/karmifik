<?php
/*
  Plugin Name: Simple QR Code Widget
  Plugin URI: http://nemezisproject.co.uk/2012/01/29/simple-qr-code-widget-for-wordpress
  Description: Simple QR Code Generator Widget based on <a href="http://code.google.com/apis/chart/infographics/docs/qr_codes.html" title="Google Chart Tools">Google Chart Tools</a>
  Author: Pawel Zareba
  Version: 1.5
  Author URI: http://nemezisproject.co.uk/
  Docs: http://code.google.com/apis/chart/infographics/docs/qr_codes.html
 */

/**
 * Generates Simple QR Code 
 * 
 * @param int $width 
 * @param int $height
 * @param sting $choe
 * @param string $type 
 * 
 * return string
 * 
 */
function qrCodeGenerator( $width = '100', $height = '100', $url = null, $choe = 'UTF-8', $type = 'qr') {

    if(empty($url)){
        $url = get_permalink(); 
    }
    
    $title = get_the_title();

    echo sprintf('<img src="//chart.apis.google.com/chart?cht=%1$s&chs=%2$dx%3$d&chl=%4$s&choe=%5$s" alt="%6$s" />', $type, $width, $height, htmlspecialchars($url), $choe, $title);

}

// set
function qrCode_widget($args) {

    extract($args);

    $options = get_option('qrCode_widget');
    if (!is_array($options)) {
        $options = array(
            'title' => 'QR Code',
            'width' => '100',
            'height' => '100',
            'uri' => null
            );
    }

    echo $before_widget;
    echo $before_title;
    echo $options['title'];
    echo $after_title;

    //Our Widget Content
    qrCodeGenerator( $options['height'], $options['width'], $options['uri'] );
    echo $after_widget;
}

// controlls
function qrCode_control() {

    $options = get_option('qrCode_widget');

    if (!is_array($options)) {
        $options = array(
            'title' => 'QR Code',
            'width' => '100',
            'height' => '100',
            'uri' => null
            );
    }

    if (isset($_POST['qrCodeSubmit'])) {
        $options['title'] = htmlspecialchars($_POST['widgetTitle']);
        $options['height'] = htmlspecialchars($_POST['widgetHeight']);
        $options['width'] = htmlspecialchars($_POST['widgetWidth']);
        $options['uri'] = htmlspecialchars($_POST['widgetUri']);
        update_option('qrCode_widget', $options);
    }
    ?>
    <div class="widget-content">
       <p>
           <label for="widgetTitle" >Widget Title: </label>
           <input type="text" id="widgetTitle" name="widgetTitle" class="widefat" value="<?php echo $options['title']; ?>" />
       </p>
       <p>
           <label for="widgetHeight">Widget Height: </label>
           <input type="text" id="widgetHeight" name="widgetHeight" class="widefat" value="<?php echo $options['height']; ?>" />
       </p>
       <p>
           <label for="widgetWidtht">Widget Width: </label>
           <input type="text" id="widgetWidtht" name="widgetWidth" class="widefat" value="<?php echo $options['width']; ?>" />
       </p>
       <p>
           <label for="widgetUri">Url: * </label>
           <input type="text" id="widgetUri" name="widgetUri" class="widefat" value="<?php echo $options['uri']; ?>" />
           <small>* Leave empty if you want it to be generic. Only UTF-8 URL-encoded urls below 2K bytes are accepted</small>
       </p>
       <p>  
           <input type="hidden" id="qrCodeSubmit" name="qrCodeSubmit" value="1" />
       </p>
   </div>
   <?php
}

// init
function qrCode_init() {
    wp_register_sidebar_widget('qr_widget', 'QR Code Widget', 'qrCode_widget', null);
    wp_register_widget_control('qr_widget', 'QR Code Widget', 'qrCode_control', null, null);
}

add_action('plugins_loaded', 'qrCode_init');
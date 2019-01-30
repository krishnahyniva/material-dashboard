<?php
namespace krishnahyniva\CImaterial\web;

use yii\base\Exception;
use yii\web\AssetBundle as BaseMaterialAsset;

/**
 * Material AssetBundle
 * @since 0.1
 */
class MaterialAsset extends BaseMaterialAsset
{
    public $sourcePath = '@vendor/krishnahyniva/yii2-material-dashboard/assets';


    public $css = [
        'css/material-dashboard.css',
        //'demo/demo.css',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
        'https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons',
    ];

    public $js = [
      /*  
        'js/core/jquery.min.js',
        'js/core/bootstrap-material-design.min.js',
        
        'js/core/popper.min.js',
        'js/plugins/perfect-scrollbar.jquery.min.js',
        'js/plugins/moment.min.js',
        'js/plugins/sweetalert2.js',
        'js/plugins/jquery.validate.min.js',
        'js/plugins/jquery.bootstrap-wizard.js',
        'js/plugins/bootstrap-selectpicker.js',
        'js/plugins/bootstrap-datetimepicker.min.js',
        'js/plugins/jquery.dataTables.min.js',
        'js/plugins/bootstrap-tagsinput.js',
        'js/plugins/jasny-bootstrap.min.js',
        'js/plugins/fullcalendar.min.js',
        'js/plugins/jquery-jvectormap.js',
        'js/plugins/nouislider.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js',
        'js/plugins/arrive.min.js',
        //'https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE',
       */ 
        'js/core/popper.min.js',
        'js/core/bootstrap-material-design.min.js',
        //'js/material.min.js',
        'js/plugins/perfect-scrollbar.jquery.min.js',
        'js/plugins/chartist.min.js',
        'js/plugins/bootstrap-notify.js',
        'js/material-dashboard.js',
        'js/superfish.js',
        'demo/demo.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];


    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }
}

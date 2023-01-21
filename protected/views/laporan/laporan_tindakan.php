<?php
/* @var $this TindakanController */
/* @var $dataProvider CActiveDataProvider */
$this->breadcrumbs=array(
	'Chart'=>array('index'),
	'Statistik Jumlah Pemeriksaan',
);
$form=$this->beginWidget('CActiveForm', array(
	'id'=>'tinstrument-form',
	'enableAjaxValidation'=>false,
));

$l=array();
$n=array();

foreach($dataProvider->getData() as $i=>$ii)
{
    $n[$i]=(int)$ii['count(no_pemeriksaan)'];
}

foreach($dataProvider1->getData() as $i=>$ii)
{
    $l[$i]=$ii['waktu_pemeriksaan'];
}

$this->widget('application.extensions.highcharts.HighchartsWidget', array(
   'options'=>array(
     'chart'=> array('defaultSeriesType'=>'column',),
      'title' => array('text' => 'Jumlah Pemeriksaan Per Hari'),
      'legend'=>array('enabled'=>false),
      'xAxis'=>array('categories'=>$l,
			'title'=>array('text'=>'Tanggal'),),
      'yAxis'=> array(
            'min'=> 0,
            'title'=> array(
            'text'=>'Jumlah'
            ),
        ),
      'series' => array(
         array('data' => $n)
      ),
      'tooltip' => array('formatter' => 'js:function(){ return "<b>"+this.point.name+"</b> :"+this.y; }'),
      'tooltip' => array(
		'formatter' => 'js:function() {return "<b>"+ this.x +"</b><br/>"+"Jumlah : "+ this.y; }'
      ),
      'plotOptions'=>array('pie'=>(array(
                    'allowPointSelect'=>true,
                    'showInLegend'=>true,
                    'cursor'=>'pointer',
                )
            )                       
        ),
      'credits'=>array('enabled'=>false),
   )
));

?>
<?php $this->endWidget(); ?>
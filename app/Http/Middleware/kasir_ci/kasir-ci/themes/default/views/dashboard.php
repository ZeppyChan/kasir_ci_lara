<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
function row_status($x)
{
    if ($x == null) {
        return '';
    } elseif ($x == 'pending') {
        return '<div class="text-center"><span class="label label-warning">' . lang($x) . '</span></div>';
    } elseif ($x == 'completed' || $x == 'paid' || $x == 'sent' || $x == 'received') {
        return '<div class="text-center"><span class="label label-success">' . lang($x) . '</span></div>';
    } elseif ($x == 'partial' || $x == 'transferring') {
        return '<div class="text-center"><span class="label label-info">' . lang($x) . '</span></div>';
    } elseif ($x == 'due') {
        return '<div class="text-center"><span class="label label-danger">' . lang($x) . '</span></div>';
    } else {
        return '<div class="text-center"><span class="label label-default">' . lang($x) . '</span></div>';
    }
}

?>
<?php if (($Owner || $Admin) && $chatData) {
    foreach ($chatData as $month_sale) {
        $months[] = date('M-Y', strtotime($month_sale->month));
        $msales[] = $month_sale->sales;
        $mtax1[] = $month_sale->tax1;
        $mtax2[] = $month_sale->tax2;
        $mpurchases[] = $month_sale->purchases;
        $mtax3[] = $month_sale->ptax;
    }
    ?>
    <div class="box" style="margin-bottom: 15px;">
        <div class="box-header">
            <h2 class="blue"><i class="fa-fw fa fa-bar-chart-o"></i><?= lang('overview_chart'); ?></h2>
        </div>
        <div class="box-content">
            <div class="row">
                <div class="col-md-12">                
                    <p class="introtext"><?php echo lang('overview_chart_heading'); ?></p>

                    <div id="ov-chart" style="width:100%; height:450px;"></div>
                    <p class="text-center"><?= lang("chart_lable_toggle"); ?></p>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<div class="row" style="margin-bottom: 15px;">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h2 class="blue"><i class="fa-fw fa fa-tasks"></i> Langsung aja klik kasir </h2>
            </div>
           
        </div>
    </div>
</div>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}"> 

  
    <link rel="shortcut icon" href="{{ asset('assets/images/icon.png') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/styles/theme.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/styles/style.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/pos/css/posajax.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/pos/css/print.css') }}" type="text/css" media="print"/>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-2.0.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <title>POS Module | Kasirku</title>
  </head>
  <body>
    <!-- <div class="container">
      <div class="row">
        <div class="table-responsive">
          <table class="table table-bordered data-table">
              <thead>
                  <tr>
                      <th>Code</th>
                      <th>Name</th>
                      <th>Images</th>
                  </tr>
              </thead>
              <tbody>
              </tbody>
          </table>
        </div>
      </div>
    </div> -->

    <div class="wrapper">
        <header id="header" class="navbar">
            <div class="container">
                <div class="header-nav">
                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown">
                            <a class="btn account dropdown-toggle" data-toggle="dropdown" href="#">
                                <img alt="" src="" class="mini_avatar img-rounded">

                                <div class="user">
                                    <span>username</span>
                                </div>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-key"></i>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-sign-out"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown">
                            <a class="btn bblue pos-tip" title="" data-placement="bottom" href="#">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                            <li class="dropdown hidden-sm">
                                <a class="btn pos-tip" title="" data-placement="bottom" href="#">
                                    <i class="fa fa-cogs"></i>
                                </a>
                            </li>
                        <li class="dropdown hidden-xs">
                            <a class="btn pos-tip" title="" data-placement="bottom" href="#" data-toggle="dropdown">
                                <i class="fa fa-calculator"></i>
                            </a>
                            <ul class="dropdown-menu pull-right calc">
                                <li class="dropdown-content">
                                    <span id="inlineCalc"></span>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown hidden-sm">
                            <a class="btn pos-tip" title="" data-placement="bottom" href="#" data-toggle="modal" data-target="#sckModal">
                                <i class="fa fa-key"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a class="btn pos-tip" title="" data-placement="bottom" href="#" target="_blank">
                                <i class="fa fa-laptop"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a class="btn blightOrange pos-tip" id="opened_bills" title="<span></span>" data-placement="bottom" data-html="true" href="#" data-toggle="ajax">
                                <i class="fa fa-th"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a class="btn bdarkGreen pos-tip" id="register_details" title="<span></span>" data-placement="bottom" data-html="true" href="#" data-toggle="modal" data-target="#myModal">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a class="btn borange pos-tip" id="close_register" title="<span></span>" data-placement="bottom" data-html="true" data-backdrop="static" href="#" data-toggle="modal" data-target="#myModal">
                                <i class="fa fa-times-circle"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a class="btn borange pos-tip" id="add_expense" title="<span></span>" data-placement="bottom" data-html="true" href="#" data-toggle="modal" data-target="#myModal">
                                <i class="fa fa-dollar"></i>
                            </a>
                        </li>
                            <li class="dropdown">
                                <a class="btn bdarkGreen pos-tip" id="today_profit" title="<span></span>" data-placement="bottom" data-html="true" href="#" data-toggle="modal" data-target="#myModal">
                                    <i class="fa fa-hourglass-half"></i>
                                </a>
                            </li>
                    
                            <li class="dropdown">
                                <a class="btn bdarkGreen pos-tip" id="today_sale" title="" data-placement="bottom" data-html="true" href="" data-toggle="modal" data-target="#myModal">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </li>
                            <li class="dropdown hidden-xs">
                                <a class="btn bblue pos-tip" title="" data-placement="bottom" href="#">
                                    <i class="fa fa-list"></i>
                                </a>
                            </li>
                            <li class="dropdown hidden-xs">
                                <a class="btn bred pos-tip" title="" data-placement="bottom" id="clearLS" href="#">
                                    <i class="fa fa-eraser"></i>
                                </a>
                            </li>
                    </ul>

                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown">
                            <a class="btn bblack" style="cursor: default;"><span id="display_time"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <div id="content">
            <div class="c1">
                <div class="pos">
                
                 <div id="pos">

                   
                    <div id="leftdiv">
                        <div id="printhead">
                            <h4 style="text-transform:uppercase;">Settings</h4>
                            
                        </div>
                        <div id="left-top">
                            <div
                            style="position: absolute;  'right:-9999px;' : 'left:-9999px;';?>"></div>
                            
                            <div class="form-group">
                                <div class="input-group">
                                 
                                    <div class="input-group-addon no-print" style="padding: 2px 8px; border-left: 0;">
                                        <a href="#" id="toogle-customer-read-attr" class="external">
                                            <i class="fa fa-pencil" id="addIcon" style="font-size: 1.2em;"></i>
                                        </a>
                                    </div>
                                    <div class="input-group-addon no-print" style="padding: 2px 7px; border-left: 0;">
                                        <a href="#" id="view-customer" class="external" data-toggle="modal" data-target="#myModal">
                                            <i class="fa fa-eye" id="addIcon" style="font-size: 1.2em;"></i>
                                        </a>
                                    </div>
                                    
                     
                                        <div class="input-group-addon no-print" style="padding: 2px 8px;">
                                            <a href="#" id="add-customer" class="external" data-toggle="modal" data-target="#myModal">
                                                <i class="fa fa-plus-circle" id="addIcon" style="font-size: 1.5em;"></i>
                                            </a>
                                        </div>
                            
                                </div>
                                <div style="clear:both;"></div>
                            </div>
                            <div class="no-print">
                         
                                    <div class="form-group">
                                      
                                 </div>
                         
                             <div class="form-group" id="ui">
                                
                                    <div class="input-group">
                                    
                                   
                                        <div class="input-group-addon" style="padding: 2px 8px;">
                                            <a href="#" id="addManually">
                                                <i class="fa fa-plus-circle" id="addIcon" style="font-size: 1.5em;"></i>
                                            </a>
                                        </div>
                                    </div>
                           
                                <div style="clear:both;"></div>
                            </div>
                        </div>
                    </div>
                    <div id="print">
                        <div id="left-middle">
                            <div id="product-list">
                                <table class="table items table-striped table-bordered table-condensed table-hover sortable_table"
                                id="posTable" style="margin-bottom: 0;">
                                <thead>
                                    <tr>
                                        <th width="40%">product</th>
                                        <th width="15%">price</th>
                                        <th width="15%">qty</th>
                                        <th width="20%">subtotal</th>
                                        <th style="width: 5%; text-align: center;">
                                            <i class="fa fa-trash-o" style="opacity:0.5; filter:alpha(opacity=50);"></i>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                            <div style="clear:both;"></div>
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                    <div id="left-bottom">
                        <table id="totalTable"
                        style="width:100%; float:right; padding:5px; color:#000; background: #FFF;">
                        <tr>
                            <td style="padding: 5px 10px;border-top: 1px solid #DDD;">items</td>
                            <td class="text-right" style="padding: 5px 10px;font-size: 14px; font-weight:bold;border-top: 1px solid #DDD;">
                                <span id="titems">0</span>
                            </td>
                            <td style="padding: 5px 10px;border-top: 1px solid #DDD;">total</td>
                            <td class="text-right" style="padding: 5px 10px;font-size: 14px; font-weight:bold;border-top: 1px solid #DDD;">
                                <span id="total">0.00</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 5px 10px;">order_tax
                            <a href="#" id="pptax2">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>
                        <td class="text-right" style="padding: 5px 10px;font-size: 14px; font-weight:bold;">
                            <span id="ttax2">0.00</span>
                        </td>
                        <td style="padding: 5px 10px;">discount
                        
                            <a href="#" id="ppdiscount">
                                <i class="fa fa-edit"></i>
                            </a>
                      
                    </td>
                    <td class="text-right" style="padding: 5px 10px;font-weight:bold;">
                        <span id="tds">0.00</span>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 5px 10px; border-top: 1px solid #666; border-bottom: 1px solid #333; font-weight:bold; background:#333; color:#FFF;" colspan="2">
                    total_payable
                        <a href="#" id="pshipping">
                            <i class="fa fa-plus-square"></i>
                        </a>
                        <span id="tship"></span>
                    </td>
                    <td class="text-right" style="padding:5px 10px 5px 10px; font-size: 14px;border-top: 1px solid #666; border-bottom: 1px solid #333; font-weight:bold; background:#333; color:#FFF;" colspan="2">
                        <span id="gtotal">0.00</span>
                    </td>
                </tr>
            </table>

            <div class="clearfix"></div>
            <div id="botbuttons" class="col-xs-12 text-center">
                <input type="hidden" name="biller" id="biller" value=""/>
                <div class="row">
                    <div class="col-xs-4" style="padding: 0;">
                        <div class="btn-group-vertical btn-block">
                            <button type="button" class="btn btn-warning btn-block btn-flat"
                            id="suspend">
                            suspend
                        </button>
                        <button type="button" class="btn btn-danger btn-block btn-flat"
                        id="reset">
                        cancel
                    </button>
                </div>

            </div>
            <div class="col-xs-4" style="padding: 0;">
                <div class="btn-group-vertical btn-block">
                    <button type="button" class="btn btn-info btn-block" id="print_order">
                    order
                    </button>

                    <button type="button" class="btn btn-primary btn-block" id="print_bill">
                    bill
                    </button>
                </div>
            </div>
            <div class="col-xs-4" style="padding: 0;">
                <button type="button" class="btn btn-success btn-block" id="payment" style="height:67px;">
                    <i class="fa fa-money" style="margin-right: 5px;"></i>payment
                </button>
            </div>
        </div>
    </div>
    <div style="clear:both; height:5px;"></div>
    <div id="num">
        <div id="icon"></div>
    </div>
    <span id="hidesuspend"></span>
    <input type="hidden" name="pos_note" value="" id="pos_note">
    <input type="hidden" name="staff_note" value="" id="staff_note">

    <div id="payment-con">
        <?php for ($i = 1; $i <= 5; $i++) {?>
            <input type="hidden" name="amount[]" id="amount_val_<?=$i?>" value=""/>
            <input type="hidden" name="balance_amount[]" id="balance_amount_<?=$i?>" value=""/>
            <input type="hidden" name="paid_by[]" id="paid_by_val_<?=$i?>" value="cash"/>
            <input type="hidden" name="cc_no[]" id="cc_no_val_<?=$i?>" value=""/>
            <input type="hidden" name="paying_gift_card_no[]" id="paying_gift_card_no_val_<?=$i?>" value=""/>
            <input type="hidden" name="cc_holder[]" id="cc_holder_val_<?=$i?>" value=""/>
            <input type="hidden" name="cheque_no[]" id="cheque_no_val_<?=$i?>" value=""/>
            <input type="hidden" name="cc_month[]" id="cc_month_val_<?=$i?>" value=""/>
            <input type="hidden" name="cc_year[]" id="cc_year_val_<?=$i?>" value=""/>
            <input type="hidden" name="cc_type[]" id="cc_type_val_<?=$i?>" value=""/>
            <input type="hidden" name="cc_cvv2[]" id="cc_cvv2_val_<?=$i?>" value=""/>
            <input type="hidden" name="payment_note[]" id="payment_note_val_<?=$i?>" value=""/>
        <?php }
        ?>
    </div>
    <input name="order_tax" type="hidden" value="" id="postax2">
    <input name="discount" type="hidden" value="" id="posdiscount">
    <input name="shipping" type="hidden" value="" id="posshipping">
    <input type="hidden" name="rpaidby" id="rpaidby" value="cash" style="display: none;"/>
    <input type="hidden" name="total_items" id="total_items" value="0" style="display: none;"/>
    <input type="submit" id="submit_sale" value="Submit Sale" style="display: none;"/>

</div>
</div>

</div>
<div id="cp">
    <div id="cpinner">
        <div class="quick-menu">
            <div id="proContainer">
                <div id="ajaxproducts">
                                      
          <!-- <table class="table data-table">
              <thead>
                  <tr>
                      <th>Code</th>
                      <th>Name</th>
                      <th>Images</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody>
              </tbody>
          </table> -->
          <table class="table data-table">
  <thead>
    <tr>

      <th scope="col">Code</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
  </tbody>
    </table>
                   
         <div class="btn-group btn-group-justified pos-grid-nav">
                      
                      
            <div class="btn-group">
                     <button style="z-index:10003;" class="btn btn-primary pos-tip" type="button" id="sellGiftCard" title="sell_gift_card">
                              <i class="fa fa-credit-card" id="addIcon"></i>sell gift card
                        </button>
            </div>
                 
                      
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div>
        </div>
    </div>
    <div style="clear:both;"></div>
</div>
</div>
<div style="clear:both;"></div>
</div>
<div style="clear:both;"></div>
</div>
</div>
</div>
</div>  
<div class="rotate btn-cat-con">
    <button type="button" id="open-brands" class="btn btn-info open-brands">brands</button>
    <button type="button" id="open-subcategory" class="btn btn-warning open-subcategory">subcategories</button>
    <button type="button" id="open-category" class="btn btn-primary open-category">categories</button>
</div>
<div id="brands-slider">
    <div id="brands-list">
        
    </div>
</div>
<div id="category-slider">
    <!--<button type="button" class="close open-category"><i class="fa fa-2x">&times;</i></button>-->
    <div id="category-list">
       
 </div>
</div>
<div id="subcategory-slider">
    <!--<button type="button" class="close open-category"><i class="fa fa-2x">&times;</i></button>-->
    <div id="subcategory-list">
    
 </div>
</div>
<div class="modal fade in" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="payModalLabel"
aria-hidden="true">
<div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i
                class="fa fa-2x">&times;</i></span><span class="sr-only">close</span></button>
                <h4 class="modal-title" id="payModalLabel">finalize_sale</h4>
            </div>
            <div class="modal-body" id="payment_content">
                <div class="row">
                    <div class="col-md-10 col-sm-9">

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                
                                <textarea name="sale_note" id="sale_note" class="form-control kb-text skip" cols="30" rows="10" style="height: 100px;" maxlength="250"></textarea>
                            </div>
                            <div class="col-sm-6">
                                
                                <textarea name="staffnote" id="staffnote" class="form-control kb-text skip" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="clearfir"></div>
                    <div id="payments">
                        <div class="well well-sm well_1">
                            <div class="payment">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                        amount
                                            <input name="amount[]" type="text" id="amount_1"
                                            class="pa form-control kb-pad1 amount"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-sm-offset-1">
                                        <div class="form-group">
                                        paying_by
                                            <select name="paid_by[]" id="paid_by_1" class="form-control paid_by">
                                            
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-11">
                                        <div class="form-group gc_1" style="display: none;">
                                        gift_card_no
                                            <input name="paying_gift_card_no[]" type="text" id="gift_card_no_1"
                                            class="pa form-control kb-pad gift_card_no"/>

                                            <div id="gc_details_1"></div>
                                        </div>
                                        <div class="pcc_1" style="display:none;">
                                            <div class="form-group">
                                                <input type="text" id="swipe_1" class="form-control swipe"
                                                placeholder="swipe"/>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="cc_no[]" type="text" id="pcc_no_1"
                                                        class="form-control"
                                                        placeholder="cc_no"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <input name="cc_holer[]" type="text" id="pcc_holder_1"
                                                        class="form-control"
                                                        placeholder="cc_holder"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <select name="cc_type[]" id="pcc_type_1"
                                                        class="form-control pcc_type"
                                                        placeholder="card_type">
                                                        <option value="Visa">Visa</option>
                                                        <option
                                                        value="MasterCard">MasterCard</option>
                                                        <option value="Amex">Amex</option>
                                                        <option
                                                        value="Discover">Discover</option>
                                                    </select>
                                              
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input name="cc_month[]" type="text" id="pcc_month_1"
                                                    class="form-control"
                                                    placeholder="month"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">

                                                    <input name="cc_year" type="text" id="pcc_year_1"
                                                    class="form-control"
                                                    placeholder="year"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">

                                                    <input name="cc_cvv2" type="text" id="pcc_cvv2_1"
                                                    class="form-control"
                                                    placeholder="cvv2"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pcheque_1" style="display:none;">
                                        <div class="form-group">cheque_no
                                        <input name="cheque_no[]" type="text" id="cheque_no_1"
                                        class="form-control cheque_no"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                payment_note
                                    <textarea name="payment_note[]" id="payment_note_1"
                                    class="pa form-control kb-text payment_note"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="multi-payment"></div>
            <button type="button" class="btn btn-primary col-md-12 addButton"><i
                class="fa fa-plus"></i>add_more_payments</button>
                <div style="clear:both; height:15px;"></div>
                <div class="font16">
                    <table class="table table-bordered table-condensed table-striped" style="margin-bottom: 0;">
                        <tbody>
                            <tr>
                                <td width="25%">total_items</td>
                                <td width="25%" class="text-right"><span id="item_count">0.00</span></td>
                                <td width="25%">total_payable</td>
                                <td width="25%" class="text-right"><span id="twt">0.00</span></td>
                            </tr>
                            <tr>
                                <td>total_paying</td>
                                <td class="text-right"><span id="total_paying">0.00</span></td>
                                <td>balance</td>
                                <td class="text-right"><span id="balance">0.00</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-2 col-sm-3 text-center">
                <span style="font-size: 1.2em; font-weight: bold;">quick_cash</span>

                <div class="btn-group btn-group-vertical">
                    <button type="button" class="btn btn-lg btn-info quick-cash" id="quick-payable">0.00
                    </button>
                    
                 <button type="button" class="btn btn-lg btn-danger"
                 id="clear-cash-notes">clear</button>
             </div>
         </div>
     </div>
 </div>
 <div class="modal-footer">
    <button class="btn btn-block btn-lg btn-primary" id="submit-sale">submit</button>
</div>
</div>
</div>
</div>

<div class="modal" id="cmModal" tabindex="-1" role="dialog" aria-labelledby="cmModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">
                    <i class="fa fa-2x">&times;</i></span>
                    <span class="sr-only">close</span>
                </button>
                <h4 class="modal-title" id="cmModalLabel"></h4>
            </div>
            <div class="modal-body" id="pr_popover_content">
                <div class="form-group">
                comment
                  
                </div>
                <div class="form-group">
                ordered
                   
                   
                </div>
                <input type="hidden" id="irow_id" value=""/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="editComment">submit</button>
            </div>
        </div>
    </div>
</div>


<div class="modal" id="prModal" tabindex="-1" role="dialog" aria-labelledby="prModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i
                    class="fa fa-2x">&times;</i></span><span class="sr-only">close</span></button>
                    <h4 class="modal-title" id="prModalLabel"></h4>
                </div>
                <div class="modal-body" id="pr_popover_content">
                    <form class="form-horizontal" role="form">
                       
                            <div class="form-group">
                                <label class="col-sm-4 control-label">product_tax</label>
                                <div class="col-sm-8">
                                   
                               
                             </div>
                         </div>
                  
              
                        <div class="form-group">
                            <label for="pserial" class="col-sm-4 control-label">serial_no</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control kb-text" id="pserial">
                            </div>
                        </div>
                   
                    <div class="form-group">
                        <label for="pquantity" class="col-sm-4 control-label">quantity</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control kb-pad" id="pquantity">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="punit" class="col-sm-4 control-label">product_unit</label>
                        <div class="col-sm-8">
                            <div id="punits-div"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="poption" class="col-sm-4 control-label">product_option</label>
                        <div class="col-sm-8">
                            <div id="poptions-div"></div>
                        </div>
                    </div>
                    
                        <div class="form-group">
                            <label for="pdiscount" class="col-sm-4 control-label">product_discount</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control kb-pad" id="pdiscount">
                            </div>
                        </div>
                 
                    <div class="form-group">
                        <label for="pprice" class="col-sm-4 control-label">unit_price</label>

                        <div class="col-sm-8">
                            <input type="text" class="form-control kb-pad" id="pprice">
                        </div>
                    </div>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="width:25%;">net_unit_price</th>
                            <th style="width:25%;">net_price</th>
                            <th style="width:25%;">product_tax</th>
                            <th style="width:25%;"><span id="pro_tax"></span></th>
                        </tr>
                    </table>
                    <input type="hidden" id="punit_price" value=""/>
                    <input type="hidden" id="old_tax" value=""/>
                    <input type="hidden" id="old_qty" value=""/>
                    <input type="hidden" id="old_price" value=""/>
                    <input type="hidden" id="row_id" value=""/>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="editItem">submit</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade in" id="gcModal" tabindex="-1" role="dialog" aria-labelledby="mModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i
                    class="fa fa-2x">&times;</i></button>
                    <h4 class="modal-title" id="myModalLabel">sell_gift_card</h4>
                </div>
                <div class="modal-body">
                    <p>enter_info</p>

                    <div class="alert alert-danger gcerror-con" style="display: none;">
                        <button data-dismiss="alert" class="close" type="button">×</button>
                        <span id="gcerror"></span>
                    </div>
                    <div class="form-group">
                    card_no *
                        <div class="input-group">
                         
                            <input type="text" name="gcard_no", class="form-control" id="gccard_no">
                            <div class="input-group-addon" style="padding-left: 10px; padding-right: 10px;">
                                <a href="#" id="genNo"><i class="fa fa-cogs"></i></a>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="gcname" value="gift_card" id="gcname"/>

                    <div class="form-group">
                    value *
                        
                        <input type="text" name="gcvalue", class="form-control" id="gcvalue">

                    </div>
                    <div class="form-group">
                    price *
                        
                        <input type="text" name="gcprice", class="form-control" id="gcprice">

                    </div>
                    <div class="form-group">
                    customer

                        <input type="text" name="gccustomer", class="form-control" id="gccustomer">

                    </div>
                    <div class="form-group">
                    expiry_date
                        
                        <input type="text" name="gcexpiry", class="form-control date" id="gcexpiry">

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" id="addGiftCard" class="btn btn-primary">sell_gift_card</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade in" id="mModal" tabindex="-1" role="dialog" aria-labelledby="mModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i
                        class="fa fa-2x">&times;</i></span><span class="sr-only">close</span></button>
                        <h4 class="modal-title" id="mModalLabel">add_product_manually</h4>
                    </div>
                    <div class="modal-body" id="pr_popover_content">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="mcode" class="col-sm-4 control-label">product_code *</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control kb-text" id="mcode">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mname" class="col-sm-4 control-label">product_name *</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control kb-text" id="mname">
                                </div>
                            </div>
                          
                               
                                <div class="form-group">
                                    <label for="mtax" class="col-sm-4 control-label">product_tax *</label>

                                    <div class="col-sm-8">
                                       
                                 </div>
                             </div>
                    
                         <div class="form-group">
                            <label for="mquantity" class="col-sm-4 control-label">quantity *</label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control kb-pad" id="mquantity">
                            </div>
                        </div>
                      
                        
                            <div class="form-group">
                                <label for="mdiscount"
                                class="col-sm-4 control-label">product_discount</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control kb-pad" id="mdiscount">
                                </div>
                            </div>
                
                
                        <div class="form-group">
                            <label for="mprice" class="col-sm-4 control-label">unit_price *</label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control kb-pad" id="mprice">
                            </div>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th style="width:25%;">unit_price</th>
                                <th style="width:25%;"><span id="mnet_price"></span></th>
                                <th style="width:25%;">product_tax</th>
                                <th style="width:25%;"><span id="mpro_tax"></span></th>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="addItemManually">submit</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade in" id="sckModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">
                        <i class="fa fa-2x">&times;</i></span><span class="sr-only">close</span>
                    </button>
                    <button type="button" class="btn btn-xs btn-default no-print pull-right" style="margin-right:15px;" onclick="window.print();">
                        <i class="fa fa-print"></i> print
                    </button>
                    <h4 class="modal-title" id="mModalLabel">shortcut_keys</h4>
                </div>
                <div class="modal-body" id="pr_popover_content">
                    <table class="table table-bordered table-striped table-condensed table-hover"
                    style="margin-bottom: 0px;">
                    <thead>
                        <tr>
                            <th>shortcut_keys</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>focus_add_item</td>
                            <td>focus_add_item</td>
                        </tr>
                        <tr>
                            <td>add_manual_product</td>
                            <td>add_manual_product</td>
                        </tr>
                        <tr>
                            <td>customer_selection</td>
                            <td>customer_selection</td>
                        </tr>
                        <tr>
                            <td>add_customer</td>
                            <td>add_customer</td>
                        </tr>
                        <tr>
                            <td>toggle_category_slider</td>
                            <td>toggle_category_slider</td>
                        </tr>
                        <tr>
                            <td>toggle_subcategory_slider</td>
                            <td>toggle_subcategory_slider</td>
                        </tr>
                        <tr>
                            <td>cancel_sale</td>
                            <td>cancel_sale</td>
                        </tr>
                        <tr>
                            <td>suspend_sale</td>
                            <td>suspend_sale</td>
                        </tr>
                        <tr>
                            <td>print_items_list</td>
                            <td>print_items_list</td>
                        </tr>
                        <tr>
                            <td>finalize_sale</td>
                            <td>finalize_sale</td>
                        </tr>
                        <tr>
                            <td>today_sale</td>
                            <td>today_sale</td>
                        </tr>
                        <tr>
                            <td>open_hold_bills</td>
                            <td>open_hold_bills</td>
                        </tr>
                        <tr>
                            <td>close_register</td>
                            <td>close_register</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade in" id="dsModal" tabindex="-1" role="dialog" aria-labelledby="dsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="fa fa-2x">&times;</i>
                </button>
                <h4 class="modal-title" id="dsModalLabel">edit_order_discount</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                order_discount
                   
                    <input type="text" name="order_discount_input" class="form-control kb-pad" id="order_discount_input">

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" id="updateOrderDiscount" class="btn btn-primary">update</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade in" id="sModal" tabindex="-1" role="dialog" aria-labelledby="sModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="fa fa-2x">&times;</i>
                </button>
                <h4 class="modal-title" id="sModalLabel">shipping</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                shipping
             
                    <input type="text" name="shipping_input" class="form-control kb-pad" id="shipping_input">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" id="updateShipping" class="btn btn-primary">update</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade in" id="txModal" tabindex="-1" role="dialog" aria-labelledby="txModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i
                    class="fa fa-2x">&times;</i></button>
                    <h4 class="modal-title" id="txModalLabel">edit_order_tax</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                      
                 </div>

             </div>
             <div class="modal-footer">
                <button type="button" id="updateOrderTax" class="btn btn-primary">update</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade in" id="susModal" tabindex="-1" role="dialog" aria-labelledby="susModalLabel" aria-hidden="true">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/perfect-scrollbar.min.js') }}"></script>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.calculator.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrapValidator.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/pos/js/plugins.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/pos/js/parse-track-data.js') }}"></script>

<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script>
  jQuery(document).ready(function($) {

    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });

  table = $('.data-table').DataTable({

            iDisplayLength: 5,
            bStateSave: false,
            lengthChange: false,
            ordering: true,
            info:     false,
            fixedHeader: true,
            processing: true,
            serverSide: true,
            
            ajax: {
                url: '{{ route("get_products") }}'
            },
            columns: [
                {data: 'code', name: 'code'},
                {data: 'name', name: 'name' },
                {data: 'image', name: 'image', 
                    render: function( data, type, full, meta ) {
                        
                        return "<img src=\"{{ asset('assets_pos/uploads/thumbs') }}" + "/" + data + "\" height=\"50\"/>";
                }
                },
                { data: 'action', name: 'action', render:function(data, type, row){
                return "<a href='/users/"+ row.id +"' class='btn btn-primary'>" +'add'+ "</a>"
            }},
                            
            ]

        });
  });
</script>
<script type="text/javascript">
        var site = 
        var lang = {
            unexpected_value: 'unexpected_value', 
            select_above: 'select_above', 
            r_u_sure: 'r_u_sure', 
            bill: 'bill', 
            order: 'order', 
            total: 'total',
            items: 'items',
            discount: 'discount',
            order_tax: 'order_tax',
            grand_total: 'grand_total',
            total_payable: 'total_payable',
            rounding: 'rounding',
            merchant_copy: 'merchant_copy'
        };
    </script>

     <script type="text/javascript">
        var product_variant = 0, shipping = 0, p_page = 0, per_page = 0, tcp = "", pro_limit = "",
        brand_id = 0, obrand_id = 0, cat_id = "", ocat_id = "", sub_cat_id = 0, osub_cat_id,
        count = 1, an = 1, DT = "",
        product_tax = 0, invoice_tax = 0, product_discount = 0, order_discount = 0, total_discount = 0, total = 0, total_paid = 0, grand_total = 0,
        KB = "", tax_rates = "";
        var protect_delete = "", billers = "", biller = "";
        var username = '', order_data = '', bill_data = '';

        function widthFunctions(e) {
            var wh = $(window).height(),
            lth = $('#left-top').height(),
            lbh = $('#left-bottom').height();
            $('#item-list').css("height", wh - 140);
            $('#item-list').css("min-height", 515);
            $('#left-middle').css("height", wh - lth - lbh - 102);
            $('#left-middle').css("min-height", 278);
            $('#product-list').css("height", wh - lth - lbh - 107);
            $('#product-list').css("min-height", 278);
        }
        $(window).bind("resize", widthFunctions);
        $(document).ready(function () {
            $('#view-customer').click(function(){
                $('#myModal').modal({remote: site.base_url + 'customers/view/' + $("input[name=customer]").val()});
                $('#myModal').modal('show');
            });
            $('textarea').keydown(function (e) {
                if (e.which == 13) {
                   var s = $(this).val();
                   $(this).val(s+'\n').focus();
                   e.preventDefault();
                   return false;
               }
           });
            
                localStorage.setItem('positems', JSON.stringify());
           
            
            
                if (localStorage.getItem('positems')) {
                    localStorage.removeItem('positems');
                }
                if (localStorage.getItem('posdiscount')) {
                    localStorage.removeItem('posdiscount');
                }
                if (localStorage.getItem('postax2')) {
                    localStorage.removeItem('postax2');
                }
                if (localStorage.getItem('posshipping')) {
                    localStorage.removeItem('posshipping');
                }
                if (localStorage.getItem('poswarehouse')) {
                    localStorage.removeItem('poswarehouse');
                }
                if (localStorage.getItem('posnote')) {
                    localStorage.removeItem('posnote');
                }
                if (localStorage.getItem('poscustomer')) {
                    localStorage.removeItem('poscustomer');
                }
                if (localStorage.getItem('posbiller')) {
                    localStorage.removeItem('posbiller');
                }
                if (localStorage.getItem('poscurrency')) {
                    localStorage.removeItem('poscurrency');
                }
                if (localStorage.getItem('posnote')) {
                    localStorage.removeItem('posnote');
                }
                if (localStorage.getItem('staffnote')) {
                    localStorage.removeItem('staffnote');
                }
               
                widthFunctions();
  
                    localStorage.setItem('postax2', '');
                    localStorage.setItem('posdiscount', '');
                    localStorage.setItem('poswarehouse', '');
                    localStorage.setItem('poscustomer', '');
                    localStorage.setItem('posbiller', '');
                    localStorage.setItem('posshipping', '');
               
                    if (!localStorage.getItem('positems')) {
                        localStorage.setItem('poscustomer');
                    } else if (!localStorage.getItem('poscustomer')) {
                        localStorage.setItem('poscustomer');
                    }
                
                    if (!localStorage.getItem('poscustomer')) {
                        localStorage.setItem('poscustomer');
                    }
                
                if (!localStorage.getItem('postax2')) {
                    localStorage.setItem('postax2');
                }
                $('.select').select2({minimumResultsForSearch: 7});
     
        $('#poscustomer').val(localStorage.getItem('poscustomer')).select2({
            minimumInputLength: 1,
            data: [],
            initSelection: function (element, callback) {
                $.ajax({
                    type: "get", async: false,
                    url: "",
                    dataType: "json",
                    success: function (data) {
                        callback(data[0]);
                    }
                });
            },
            ajax: {
                url: site.base_url + "customers/suggestions",
                dataType: 'json',
                quietMillis: 15,
                data: function (term, page) {
                    return {
                        term: term,
                        limit: 10
                    };
                },
                results: function (data, page) {
                    if (data.results != null) {
                        return {results: data.results};
                    } else {
                        return {results: [{id: '', text: 'No Match Found'}]};
                    }
                }
            }
        });
        if (KB) {
            display_keyboards();

            var result = false, sct = '';
            $('#poscustomer').on('select2-opening', function () {
                sct = '';
                $('.select2-input').addClass('kb-text');
                display_keyboards();
                $('.select2-input').bind('change.keyboard', function (e, keyboard, el) {
                    if (el && el.value != '' && el.value.length > 0 && sct != el.value) {
                        sct = el.value;
                    }
                    if(!el && sct.length > 0) {
                        $('.select2-input').addClass('select2-active');
                        $.ajax({
                            type: "get",
                            async: false,
                            url: "" + sct,
                            dataType: "json",
                            success: function (res) {
                                if (res.results != null) {
                                    $('#poscustomer').select2({data: res}).select2('open');
                                    $('.select2-input').removeClass('select2-active');
                                } else {
                                    bootbox.alert('no_match_found');
                                    $('#poscustomer').select2('close');
                                    $('#test').click();
                                }
                            }
                        });
                    }
                });
            });

            $('#poscustomer').on('select2-close', function () {
                $('.select2-input').removeClass('kb-text');
                $('#test').click();
                $('select, .select').select2('destroy');
                $('select, .select').select2({minimumResultsForSearch: 7});
            });
            $(document).bind('click', '#test', function () {
                var kb = $('#test').keyboard().getkeyboard();
                kb.close();
                //kb.destroy();
                $('#add-item').focus();
            });

        }

        $(document).on('change', '#posbiller', function () {
            var sb = $(this).val();
            $.each(billers, function () {
                if(this.id == sb) {
                    biller = this;
                }
            });
            $('#biller').val(sb);
        });

        <?php for ($i = 1; $i <= 5; $i++) {?>
            $('#paymentModal').on('change', '#amount_<?=$i?>', function (e) {
                $('#amount_val_<?=$i?>').val($(this).val());
            });
            $('#paymentModal').on('blur', '#amount_<?=$i?>', function (e) {
                $('#amount_val_<?=$i?>').val($(this).val());
            });
            $('#paymentModal').on('select2-close', '#paid_by_<?=$i?>', function (e) {
                $('#paid_by_val_<?=$i?>').val($(this).val());
            });
            $('#paymentModal').on('change', '#pcc_no_<?=$i?>', function (e) {
                $('#cc_no_val_<?=$i?>').val($(this).val());
            });
            $('#paymentModal').on('change', '#pcc_holder_<?=$i?>', function (e) {
                $('#cc_holder_val_<?=$i?>').val($(this).val());
            });
            $('#paymentModal').on('change', '#gift_card_no_<?=$i?>', function (e) {
                $('#paying_gift_card_no_val_<?=$i?>').val($(this).val());
            });
            $('#paymentModal').on('change', '#pcc_month_<?=$i?>', function (e) {
                $('#cc_month_val_<?=$i?>').val($(this).val());
            });
            $('#paymentModal').on('change', '#pcc_year_<?=$i?>', function (e) {
                $('#cc_year_val_<?=$i?>').val($(this).val());
            });
            $('#paymentModal').on('change', '#pcc_type_<?=$i?>', function (e) {
                $('#cc_type_val_<?=$i?>').val($(this).val());
            });
            $('#paymentModal').on('change', '#pcc_cvv2_<?=$i?>', function (e) {
                $('#cc_cvv2_val_<?=$i?>').val($(this).val());
            });
            $('#paymentModal').on('change', '#cheque_no_<?=$i?>', function (e) {
                $('#cheque_no_val_<?=$i?>').val($(this).val());
            });
            $('#paymentModal').on('change', '#payment_note_<?=$i?>', function (e) {
                $('#payment_note_val_<?=$i?>').val($(this).val());
            });
        <?php }
        ?>

        $('#payment').click(function () {
          
                suspend = $('<span></span>');
                suspend.html('<input type="hidden" name="delete_id" value="" />');
                suspend.appendTo("#hidesuspend");
                      
            var twt = formatDecimal((total + invoice_tax) - order_discount + shipping);
            if (count == 1) {
                bootbox.alert('x_total');
                return false;
            }
            gtotal = formatDecimal(twt);
          
                round_total = roundNumber(gtotal, rounding);
                var rounding = formatDecimal(0 - (gtotal - round_total));
                $('#twt').text(formatMoney(round_total) + ' (' + formatMoney(rounding) + ')');
                $('#quick-payable').text(round_total);
   
                $('#twt').text(formatMoney(gtotal));
                $('#quick-payable').text(gtotal);
    
            $('#item_count').text(count - 1);
            $('#paymentModal').appendTo("body").modal('show');
            $('#amount_1').focus();
        });
        $('#paymentModal').on('show.bs.modal', function(e) {
            $('#submit-sale').text('submit').attr('disabled', false);
        });
        $('#paymentModal').on('shown.bs.modal', function(e) {
            $('#amount_1').focus();
        });
        var pi = 'amount_1', pa = 2;
        $(document).on('click', '.quick-cash', function () {
            var $quick_cash = $(this);
            var amt = $quick_cash.contents().filter(function () {
                return this.nodeType == 3;
            }).text();
            var th = ',';
            var $pi = $('#' + pi);
            amt = formatDecimal(amt.split(th).join("")) * 1 + $pi.val() * 1;
            $pi.val(formatDecimal(amt)).focus();
            var note_count = $quick_cash.find('span');
            if (note_count.length == 0) {
                $quick_cash.append('<span class="badge">1</span>');
            } else {
                note_count.text(parseInt(note_count.text()) + 1);
            }
        });

        $(document).on('click', '#clear-cash-notes', function () {
            $('.quick-cash').find('.badge').remove();
            $('#' + pi).val('0').focus();
        });

        $(document).on('change', '.gift_card_no', function () {
            var cn = $(this).val() ? $(this).val() : '';
            var payid = $(this).attr('id'),
            id = payid.substr(payid.length - 1);
            if (cn != '') {
                $.ajax({
                    type: "get", async: false,
                    url: site.base_url + "sales/validate_gift_card/" + cn,
                    dataType: "json",
                    success: function (data) {
                        if (data === false) {
                            $('#gift_card_no_' + id).parent('.form-group').addClass('has-error');
                            bootbox.alert('incorrect_gift_card ');
                        } else if (data.customer_id !== null && data.customer_id !== $('#poscustomer').val()) {
                            $('#gift_card_no_' + id).parent('.form-group').addClass('has-error');
                            bootbox.alert('gift_card_not_for_customer');
                        } else {
                            $('#gc_details_' + id).html('<small>Card No: ' + data.card_no + '<br>Value: ' + data.value + ' - Balance: ' + data.balance + '</small>');
                            $('#gift_card_no_' + id).parent('.form-group').removeClass('has-error');
                            //calculateTotals();
                            $('#amount_' + id).val(gtotal >= data.balance ? data.balance : gtotal).focus();
                        }
                    }
                });
            }
        });

        $(document).on('click', '.addButton', function () {
            if (pa <= 5) {
                $('#paid_by_1, #pcc_type_1').select2('destroy');
                var phtml = $('#payments').html(),
                update_html = phtml.replace(/_1/g, '_' + pa);
                pi = 'amount_' + pa;
                $('#multi-payment').append('<button type="button" class="close close-payment" style="margin: -10px 0px 0 0;"><i class="fa fa-2x">&times;</i></button>' + update_html);
                $('#paid_by_1, #pcc_type_1, #paid_by_' + pa + ', #pcc_type_' + pa).select2({minimumResultsForSearch: 7});
                read_card();
                pa++;
            } else {
                bootbox.alert('max_reached');
                return false;
            }
            display_keyboards();
            $('#paymentModal').css('overflow-y', 'scroll');
        });

        $(document).on('click', '.close-payment', function () {
            $(this).next().remove();
            $(this).remove();
            pa--;
        });

        $(document).on('focus', '.amount', function () {
            pi = $(this).attr('id');
            calculateTotals();
        }).on('blur', '.amount', function () {
            calculateTotals();
        });

        function calculateTotals() {
            var total_paying = 0;
            var ia = $(".amount");
            $.each(ia, function (i) {
                var this_amount = formatCNum($(this).val() ? $(this).val() : 0);
                total_paying += parseFloat(this_amount);
            });
            $('#total_paying').text(formatMoney(total_paying));
         
                $('#balance').text(formatMoney(total_paying - round_total));
                $('#balance_' + pi).val(formatDecimal(total_paying - round_total));
                total_paid = total_paying;
                grand_total = round_total;
  
                $('#balance').text(formatMoney(total_paying - gtotal));
                $('#balance_' + pi).val(formatDecimal(total_paying - gtotal));
                total_paid = total_paying;
                grand_total = gtotal;
          
        }

        $("#cust_card_scan").autocomplete({
            
        })

        $("#add_item").autocomplete({
            source: function (request, response) {
                if (!$('#poscustomer').val()) {
                    $('#add_item').val('').removeClass('ui-autocomplete-loading');
                    bootbox.alert('select_above');
                    //response('');
                    $('#add_item').focus();
                    return false;
                }
                $.ajax({
                    type: 'get',
                    url: 'sales/suggestions',
                    dataType: "json",
                    data: {
                        term: request.term,
                        warehouse_id: $("#poswarehouse").val(),
                        customer_id: $("#poscustomer").val()
                    },
                    success: function (data) {
                        $(this).removeClass('ui-autocomplete-loading');
                        response(data);
                    }
                });
            },
            minLength: 1,
            autoFocus: false,
            delay: 250,
            response: function (event, ui) {
                if ($(this).val().length >= 16 && ui.content[0].id == 0) {
                    bootbox.alert('no_match_found', function () {
                        $('#add_item').focus();
                    });
                    $(this).val('');
                }
                else if (ui.content.length == 1 && ui.content[0].id != 0) {
                    ui.item = ui.content[0];
                    $(this).data('ui-autocomplete')._trigger('select', 'autocompleteselect', ui);
                    $(this).autocomplete('close');
                }
                else if (ui.content.length == 1 && ui.content[0].id == 0) {
                    bootbox.alert('no_match_found', function () {
                        $('#add_item').focus();
                    });
                    $(this).val('');

                }
            },
            select: function (event, ui) {
                event.preventDefault();
                if (ui.item.id !== 0) {
                    var row = add_invoice_item(ui.item);
                    if (row)
                        $(this).val('');
                } else {
                    bootbox.alert('no_match_found');
                }
            }
        });

        
        // $('#posTable').stickyTableHeaders({fixedOffset: $('#product-list')});
        $('#posTable').stickyTableHeaders({scrollableArea: $('#product-list')});
        $('#product-list, #category-list, #subcategory-list').perfectScrollbar({suppressScrollX: true});
        $('select, .select').select2({minimumResultsForSearch: 7});

        $(document).on('click', '.product', function (e) {
            $('#modal-loading').show();
            code = $(this).val(),
            wh = $('#poswarehouse').val(),
            cu = $('#poscustomer').val();
            $.ajax({
                type: "get",
                url: "pos/getProductDataByCode",
                data: {code: code, warehouse_id: wh, customer_id: cu},
                dataType: "json",
                success: function (data) {
                    e.preventDefault();
                    if (data !== null) {
                        add_invoice_item(data);
                        $('#modal-loading').hide();
                    } else {
                        bootbox.alert('no_match_found ');
                        $('#modal-loading').hide();
                    }
                }
            });
        });

        $(document).on('click', '.category', function () {
            if (cat_id != $(this).val()) {
                $('#open-category').click();
                $('#modal-loading').show();
                cat_id = $(this).val();
                $.ajax({
                    type: "get",
                    url: "pos/ajaxcategorydata",
                    data: {category_id: cat_id},
                    dataType: "json",
                    success: function (data) {
                        $('#item-list').empty();
                        var newPrs = $('<div></div>');
                        newPrs.html(data.products);
                        newPrs.appendTo("#item-list");
                        $('#subcategory-list').empty();
                        var newScs = $('<div></div>');
                        newScs.html(data.subcategories);
                        newScs.appendTo("#subcategory-list");
                        tcp = data.tcp;
                        nav_pointer();
                    }
                }).done(function () {
                    p_page = 'n';
                    $('#category-' + cat_id).addClass('active');
                    $('#category-' + ocat_id).removeClass('active');
                    ocat_id = cat_id;
                    $('#modal-loading').hide();
                    nav_pointer();
                });
            }
        });
        $('#category-' + cat_id).addClass('active');

        $(document).on('click', '.brand', function () {
            if (brand_id != $(this).val()) {
                $('#open-brands').click();
                $('#modal-loading').show();
                brand_id = $(this).val();
                $.ajax({
                    type: "get",
                    url: "pos/ajaxbranddata",
                    data: {brand_id: brand_id},
                    dataType: "json",
                    success: function (data) {
                        $('#item-list').empty();
                        var newPrs = $('<div></div>');
                        newPrs.html(data.products);
                        newPrs.appendTo("#item-list");
                        tcp = data.tcp;
                        nav_pointer();
                    }
                }).done(function () {
                    p_page = 'n';
                    $('#brand-' + brand_id).addClass('active');
                    $('#brand-' + obrand_id).removeClass('active');
                    obrand_id = brand_id;
                    $('#category-' + cat_id).removeClass('active');
                    $('#subcategory-' + sub_cat_id).removeClass('active');
                    cat_id = 0; sub_cat_id = 0;
                    $('#modal-loading').hide();
                    nav_pointer();
                });
            }
        });

        $(document).on('click', '.subcategory', function () {
            if (sub_cat_id != $(this).val()) {
                $('#open-subcategory').click();
                $('#modal-loading').show();
                sub_cat_id = $(this).val();
                $.ajax({
                    type: "get",
                    url: "pos/ajaxproducts",
                    data: {category_id: cat_id, subcategory_id: sub_cat_id, per_page: p_page},
                    dataType: "html",
                    success: function (data) {
                        $('#item-list').empty();
                        var newPrs = $('<div></div>');
                        newPrs.html(data);
                        newPrs.appendTo("#item-list");
                    }
                }).done(function () {
                    p_page = 'n';
                    $('#subcategory-' + sub_cat_id).addClass('active');
                    $('#subcategory-' + osub_cat_id).removeClass('active');
                    $('#modal-loading').hide();
                });
            }
        });

        $('#next').click(function () {
            if (p_page == 'n') {
                p_page = 0
            }
            p_page = p_page + pro_limit;
            if (tcp >= pro_limit && p_page < tcp) {
                $('#modal-loading').show();
                $.ajax({
                    type: "get",
                    url: "pos/ajaxproducts",
                    data: {category_id: cat_id, subcategory_id: sub_cat_id, per_page: p_page},
                    dataType: "html",
                    success: function (data) {
                        $('#item-list').empty();
                        var newPrs = $('<div></div>');
                        newPrs.html(data);
                        newPrs.appendTo("#item-list");
                        nav_pointer();
                    }
                }).done(function () {
                    $('#modal-loading').hide();
                });
            } else {
                p_page = p_page - pro_limit;
            }
        });

        $('#previous').click(function () {
            if (p_page == 'n') {
                p_page = 0;
            }
            if (p_page != 0) {
                $('#modal-loading').show();
                p_page = p_page - pro_limit;
                if (p_page == 0) {
                    p_page = 'n'
                }
                $.ajax({
                    type: "get",
                    url: "pos/ajaxproducts",
                    data: {category_id: cat_id, subcategory_id: sub_cat_id, per_page: p_page},
                    dataType: "html",
                    success: function (data) {
                        $('#item-list').empty();
                        var newPrs = $('<div></div>');
                        newPrs.html(data);
                        newPrs.appendTo("#item-list");
                        nav_pointer();
                    }

                }).done(function () {
                    $('#modal-loading').hide();
                });
            }
        });

        $(document).on('change', '.paid_by', function () {
            var p_val = $(this).val(),
            id = $(this).attr('id'),
            pa_no = id.substr(id.length - 1);
            $('#rpaidby').val(p_val);
            if (p_val == 'cash' || p_val == 'other') {
                $('.pcheque_' + pa_no).hide();
                $('.pcc_' + pa_no).hide();
                $('.pcash_' + pa_no).show();
                $('#payment_note_' + pa_no).focus();
            } else if (p_val == 'CC' || p_val == 'stripe' || p_val == 'ppp' || p_val == 'authorize') {
                $('.pcheque_' + pa_no).hide();
                $('.pcash_' + pa_no).hide();
                $('.pcc_' + pa_no).show();
                $('#swipe_' + pa_no).focus();
            } else if (p_val == 'Cheque') {
                $('.pcc_' + pa_no).hide();
                $('.pcash_' + pa_no).hide();
                $('.pcheque_' + pa_no).show();
                $('#cheque_no_' + pa_no).focus();
            } else {
                $('.pcheque_' + pa_no).hide();
                $('.pcc_' + pa_no).hide();
                $('.pcash_' + pa_no).hide();
            }
            if (p_val == 'gift_card') {
                $('.gc_' + pa_no).show();
                $('.ngc_' + pa_no).hide();
                $('#gift_card_no_' + pa_no).focus();
            } else {
                $('.ngc_' + pa_no).show();
                $('.gc_' + pa_no).hide();
                $('#gc_details_' + pa_no).html('');
            }
        });

        $(document).on('click', '#submit-sale', function () {
            if (total_paid == 0 || total_paid < grand_total) {  
                bootbox.confirm("paid_l_t_payable", function (res) {
                    if (res == true) {
                        $('#pos_note').val(localStorage.getItem('posnote'));
                        $('#staff_note').val(localStorage.getItem('staffnote'));
                        $('#submit-sale').text('loading').attr('disabled', true);
                        $('#pos-sale-form').submit();
                    }
                });
                return false;
            } else {
                $('#pos_note').val(localStorage.getItem('posnote'));
                $('#staff_note').val(localStorage.getItem('staffnote'));
                $(this).text('loading').attr('disabled', true);
                $('#pos-sale-form').submit();
            }
        });
        $('#suspend').click(function () {
            if (count <= 1) {
                bootbox.alert('x_suspend');
                return false;
            } else {
                $('#susModal').modal();
            }
        });
        $('#suspend_sale').click(function () {
            ref = $('#reference_note').val();
            if (!ref || ref == '') {
                bootbox.alert('type_reference_note');
                return false;
            } else {
                suspend = $('<span></span>');
            
                    suspend.html('<input type="hidden" name="delete_id" value="id" /><input type="hidden" name="suspend" value="yes" /><input type="hidden" name="suspend_note" value="' + ref + '" />');
             
                    suspend.html('<input type="hidden" name="suspend" value="yes" /><input type="hidden" name="suspend_note" value="' + ref + '" />');
                
                suspend.appendTo("#hidesuspend");
                $('#total_items').val(count - 1);
                $('#pos-sale-form').submit();

            }
        });
    });

  </body>
</html>
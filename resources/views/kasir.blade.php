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
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]

        });
  });
</script>

  </body>
</html>
<?php
/**
 * @package J2Store
 * @copyright Copyright (c)2014-17 Ramesh Elamathi / J2Store.org
 * @license GNU GPL v3 or later
 */

// No direct access
defined('_JEXEC') or die;

?>
<style>
.j2store-bs .modal{
	position: absolute;
}
.j2storeRegenerateVariant{
	margin-top:100px;
    -moz-border-radius: 0 0 8px 8px;
    -webkit-border-radius: 0 0 8px 8px;
    border-radius: 0 0 8px 8px;
    border-width: 0 8px 8px 8px;
    border:1px solid #000000;
}

.j2storeRegenerateVariant .modal-header{
	border:1px solid #faa732;
	background-color:#faa732;
}
</style>
<div class="j2store-product-variants">
	<div class="form-group">
		<?php echo J2Html::label(JText::_('J2STORE_PRODUCT_VARIANTS'), 'option_name'); ?>
		<table id="attribute_options_table" class="adminlist table table-striped table-bordered j2store">
			<thead>
				<tr>
				<th><?php echo JText::_('J2STORE_VARIANT_OPTION');?></th>
				<th><?php echo JText::_('J2STORE_OPTION_ORDERING');?></th>
				<th><?php echo JText::_('J2STORE_REMOVE'); ?> </th>
				</tr>
		</thead>
		<tbody>
		<?php if(isset($this->item->product_options ) && !empty($this->item->product_options)):?>
			<?php foreach($this->item->product_options as $poption ):?>
			<tr id="pao_current_option_<?php echo $poption->j2store_productoption_id;?>">
				<td>
					<?php echo $poption->option_name;?>
					<?php echo J2Html::hidden($this->form_prefix.'[item_options]['.$poption->j2store_productoption_id .'][j2store_productoption_id]', $poption->j2store_productoption_id);?>
					<?php echo J2Html::hidden($this->form_prefix.'[item_options]['.$poption->j2store_productoption_id .'][option_id]', $poption->option_id);?>
					<small>(<?php  echo $poption->option_unique_name;?>)</small>
					<small><?php JText::_('J2STORE_OPTION_TYPE');?><?php echo JText::_('J2STORE_'.JString::strtoupper($poption->type))?></small>
					<?php echo J2StorePopup::popup("index.php?option=com_j2store&view=products&task=setproductoptionvalues&product_id=".$this->item->j2store_product_id."&productoption_id=".$poption->j2store_productoption_id."&layout=productoptionvalues&tmpl=component", JText::_( "J2STORE_SET_VALUES" ), array());?>
				</td>
				<td><?php echo J2Html::text($this->form_prefix.'[item_options]['.$poption->j2store_productoption_id .'][ordering]',$poption->ordering,array('id'=>'ordering' ,'class'=>'input-small'));?></td>
				<td>
					<span class="optionRemove" onClick="removePAOption(<?php echo $poption->j2store_productoption_id;?>)">X</span>
				</td>
			</tr>
			<?php endforeach;?>
			<?php endif;?>
			<tr class="j2store_a_options">
				<td colspan="3">
					<?php echo J2Html::label(JText::_('J2STORE_SEARCH_AND_ADD_VARIANT_OPTION')); ?>
                    <select name="option_select_id" id="option_select_id">
                        <?php foreach ($this->product_option_list as $option_list):?>
                            <option value="<?php echo $option_list->j2store_option_id?>"><?php echo $option_list->option_name .' ('.$option_list->option_unique_name.')';?></option>
                        <?php endforeach; ?>
                    </select>
                    <a onclick="addOption()" class="btn btn-success"> <?php echo JText::_('J2STORE_ADD_OPTIONS')?></a>
				</td>
			</tr>

		</tbody>

		</table>
		<div class="alert alert-block alert-info">
			<h4><?php echo JText::_('J2STORE_QUICK_HELP'); ?></h4>
			<?php echo JText::_('J2STORE_VARIANT_GENERATION_HELP_TEXT'); ?>
		</div>
	</div>
</div>
<script type="text/javascript">


function addOption() {
    (function ($) {
        var option_value = $('#option_select_id').val();
        var option_name = $('#option_select_id option[value='+option_value+']').html();
        console.log(option_value);
        console.log(option_name);
        $('<tr><td class=\"addedOption\">' + option_name+ '</td><td><input class=\"input-small\" name=\"<?php echo $this->form_prefix.'[item_options]' ;?>['+ option_value+'][ordering]\" value=\"0\"></td><td><span class=\"optionRemove\" onclick=\"j2store.jQuery(this).parent().parent().remove();\">x</span><input type=\"hidden\" value=\"' + option_value+ '\" name=\"<?php echo $this->form_prefix; ?>[item_options]['+ option_value+'][option_id]\" /><input type=\"hidden\" value="" name=\"<?php echo $this->form_prefix; ?>[item_options]['+ option_value+'][j2store_productoption_id]\" /></td></tr>').insertBefore('.j2store_a_options');
    })(j2store.jQuery);

}

/**
 * Method to remove
 */
function removePAOption(pao_id) {
	(function($) {
		var variable_option_remove = {
			option: 'com_j2store',
			view: 'products',
			task: 'removeProductOption',
			product_type: 'variable',
			pao_id: pao_id
		};
		$.ajax({
			type : 'post',
			url  : '<?php echo JRoute::_('index.php');?>',
			data : variable_option_remove,
			dataType : 'json',
			success : function(data) {
				console.log(data);
				if(data.success) {
					$('#pao_current_option_'+pao_id).remove();
				}
				if(data.error){
					$("<p class='alert alert-warning'>"+data.error+"</p>").insertBefore("#attribute_options_table");
				}
			}
		});
	})(j2store.jQuery);
}
</script>

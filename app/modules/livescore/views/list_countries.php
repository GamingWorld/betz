<?=$this->load->view(branded_view('cp/header'));?>
<h1>Country List</h1>
<?=$this->dataset->table_head();?>
<?
if (!empty($this->dataset->data)) {
	foreach ($this->dataset->data as $row) {
	?>
		<tr>
			<td><input type="checkbox" name="check_<?=$row['ID'];?>" value="1" class="action_items" /></td>
			<td><?=$row['ID'];?></td>
			<td><?=$row['country_name'];?></td>                      
			<td class="options" style="text-align:right; padding:0 5px 0 0;"><a href="<?=site_url('admincp2/livescore/edit_country/' . $row['ID']);?> " class="button action_button">edit</a></td>
		</tr>
	<?
	}
}
else {
?>
<tr><td colspan="8">Empty data set.</td></tr>
<?
}	
?>
<?=$this->dataset->table_close();?>
<?=$this->load->view(branded_view('cp/footer'));?>
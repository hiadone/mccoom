<div class="box">
	<div class="box-table">
		<?php
		echo validation_errors('<div class="alert alert-warning" role="alert">', '</div>');
		$attributes = array('class' => 'form-horizontal', 'name' => 'fadminwrite', 'id' => 'fadminwrite');
		echo form_open(current_full_url(), $attributes);
		?>	
			<input type="hidden" name="returnurl" value="<?php echo $this->agent->referrer() ?>">
			<input type="hidden" name="<?php echo element('primary_key', $view); ?>"	value="<?php echo element(element('primary_key', $view), element('data', $view)); ?>" />
			<div class="form-group">
				<label class="col-sm-2 control-label">도시 명</label>
				
				<div class="col-sm-10">
					<input type="text" class="form-control" name="hgr_title" value="<?php echo set_value('hgr_title', element('hgr_title', element('data', $view))); ?>" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">정렬순서</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" name="hgr_order" value="<?php echo set_value('hgr_order', element('hgr_order', element('data', $view))); ?>" />
					<div class="help-inline">정렬순서가 낮은 병원이 먼저 출력됩니다</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">도시 Display 선택</label>
				<div class="col-sm-10">
					<label for="hgr_display" class="checkbox-inline">
						<input type="radio" name="hgr_display" id="hgr_display" value="1" <?php echo set_radio('hgr_display', '1', (element('hgr_display', element('data', $view)) === "1" || empty(element('hgr_display', element('data', $view))) ? true : false)); ?> /> Show
					</label>
					<label for="hgr_display2" class="checkbox-inline">
						<input type="radio" name="hgr_display" id="hgr_display2" value="2" <?php echo set_radio('hgr_display', '2', (element('hgr_display', element('data', $view)) === "2" ? true : false)); ?> /> Hide
					</label>
					<br>
					<div class="help-inline" >show로 선택하시면 병원 리스트에 출력됩니다</div>
				</div>
			</div>
			<div class="btn-group pull-right" role="group" aria-label="...">
				<button type="button" class="btn btn-default btn-sm btn-history-back" >취소하기</button>
				<button type="submit" class="btn btn-success btn-sm">저장하기</button>
			</div>
		<?php echo form_close(); ?>
	</div>
</div>

<script type="text/javascript">
//<![CDATA[
$(function() {
	$('#fadminwrite').validate({
		rules: {
			hgr_title: 'required',
			
		}
	});
});
//]]>
</script>

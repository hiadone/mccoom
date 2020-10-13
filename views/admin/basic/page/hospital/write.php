<div class="box">
	<div class="box-table">
		<?php
		echo validation_errors('<div class="alert alert-warning" role="alert">', '</div>');
		$attributes = array('class' => 'form-horizontal', 'name' => 'fadminwrite', 'id' => 'fadminwrite');
		echo form_open(current_full_url(), $attributes);
		?>
			<input type="hidden" name="returnurl" value="<?php echo $this->agent->referrer() ?>">
			<input type="hidden" name="<?php echo element('primary_key', $view); ?>"	value="<?php echo element(element('primary_key', $view), element('data', $view)); ?>" />
			<input type="hidden" name="hgr_id"	value="<?php echo element('hgr_id', element('hospitalgroup', element('data', $view))); ?>" />
			<div class="form-group">
				<label class="col-sm-2 control-label">도시명</label>
				<div class="col-sm-10">
					<?php echo html_escape(element('hgr_title', element('hospitalgroup', element('data', $view)))); ?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">정렬순서</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" name="hpt_order" value="<?php echo set_value('hpt_order', element('hpt_order', element('data', $view))); ?>" />
					<div class="help-inline">정렬순서가 낮은 병원이 먼저 출력됩니다</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">병원명</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="hpt_title" value="<?php echo set_value('hpt_title', element('hpt_title', element('data', $view))); ?>" placeholder="" />
					<div class="help-inline">ex) 강남 리니어의원</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">시도 구명</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="hpt_addr" value="<?php echo set_value('hpt_addr', element('hpt_addr', element('data', $view))); ?>" placeholder="" />
					<div class="help-inline">ex) 강남구</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">지역명</label>
				<div class="col-sm-10">
					<input type="text" class="form-control " name="hpt_addr_sub" value="<?php echo set_value('hpt_addr_sub', element('hpt_addr_sub', element('data', $view))); ?>" placeholder="" />
					<div class="help-inline">ex) (신논현점)</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">병원 Display 선택</label>
				<div class="col-sm-10">
					<label for="hpt_display" class="checkbox-inline">
						<input type="radio" name="hpt_display" id="hpt_display" value="1" <?php echo set_radio('hpt_display', '1', (element('hpt_display', element('data', $view)) !== "2" ? true : false)); ?> /> Show
					</label>
					<label for="hpt_display2" class="checkbox-inline">
						<input type="radio" name="hpt_display" id="hpt_display2" value="2" <?php echo set_radio('hpt_display', '2', (element('hpt_display', element('data', $view)) === "2" ? true : false)); ?> /> Hide
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
			hpt_order: {  number:true, min:0 },
			hpt_title : {required:true },
			hpt_addr_sub : {required:true },
			
		}
	});
});
//]]>
</script>

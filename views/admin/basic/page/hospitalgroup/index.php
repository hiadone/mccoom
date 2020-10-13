<div class="box">
	<div class="box-table">
		<?php
		echo show_alert_message($this->session->flashdata('message'), '<div class="alert alert-auto-close alert-dismissible alert-info"><button type="button" class="close alertclose" >&times;</button>', '</div>');
		$attributes = array('class' => 'form-inline', 'name' => 'flist', 'id' => 'flist');
		echo form_open(current_full_url(), $attributes);
		?>
			<div class="box-table-header">
				<?php
				ob_start();
				?>
					<div class="btn-group pull-right" role="group" aria-label="...">
						<a href="<?php echo element('listall_url', $view); ?>" class="btn btn-outline btn-default btn-sm">전체목록</a>
						<button type="button" class="btn btn-outline btn-default btn-sm btn-list-delete btn-list-selected disabled" data-list-delete-url = "<?php echo element('list_delete_url', $view); ?>" >선택삭제</button>
						<a href="<?php echo element('write_url', $view); ?>" class="btn btn-outline btn-danger btn-sm">도시추가</a>
					</div>
				<?php
				$buttons = ob_get_contents();
				ob_end_flush();
				?>
			</div>
			<div class="row">전체 : <?php echo element('total_rows', element('data', $view), 0); ?>건</div>
			<div class="table-responsive">
				<table class="table table-hover table-striped table-bordered">
					<thead>
						<tr>
							<th><input type="checkbox" name="chkall" id="chkall" /></th>
							<th><a href="<?php echo element('hgr_id', element('sort', $view)); ?>">번호</a></th>
							<th><a href="<?php echo element('hgr_title', element('sort', $view)); ?>">도시명</a></th>
							<th><a href="<?php echo element('hgr_order', element('sort', $view)); ?>">정렬순서</a></th>
							<th><a href="<?php echo element('hgr_datetime', element('sort', $view)); ?>">작성일</a></th>
							<th>작성자</th>
							<th>도시내 병원 수</th>
							<th>병원 리스트</th>
							<th>Display</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
					if (element('list', element('data', $view))) {
						foreach (element('list', element('data', $view)) as $result) {
					?>
						<tr>
							<td><input type="checkbox" name="chk[]" class="list-chkbox" value="<?php echo element(element('primary_key', $view), $result); ?>" /></td>
							<td><?php echo number_format(element('num', $result)); ?></td>
							<td><a href="<?php echo admin_url('page/hospital'); ?>/?hgr_id=<?php echo element(element('primary_key', $view), $result); ?>" ><?php echo html_escape(element('hgr_title', $result)); ?></a></td>
							<td><?php echo number_format(element('hgr_order', $result)); ?></td>
							<td><?php echo display_datetime(element('hgr_datetime', $result), 'full'); ?></td>
							<td><?php echo element('display_name', $result); ?> </td>
							<td><a href="<?php echo admin_url('page/hospital'); ?>/?hgr_id=<?php echo element(element('primary_key', $view), $result); ?>" ><?php echo (int) element('hospitalcount', $result); ?></a></td>
							<td><a href="<?php echo admin_url('page/hospital'); ?>/?hgr_id=<?php echo element(element('primary_key', $view), $result); ?>" class="btn btn-outline btn-primary btn-xs">병원 리스트 확인</a></td>
							<td><a href="javascript:post_action('post_hospital_group', '<?php echo element('hgr_id', $result);?>', '<?php echo element('hgr_display', $result) === "1" ? "2":"1"; ?>',0);" class="btn <?php echo element('hgr_display', $result) === "1" ? 'btn-primary':'btn-warning';?> btn-xs"><?php echo element('hgr_display', $result) === "1" ? 'Show' : 'Hide'; ?></a></td>
							<td><a href="<?php echo admin_url($this->pagedir); ?>/write/<?php echo element(element('primary_key', $view), $result); ?>?<?php echo $this->input->server('QUERY_STRING', null, ''); ?>" class="btn btn-outline btn-default btn-xs">수정</a></td>

							
						</tr>
					<?php
						}
					}
					if ( ! element('list', element('data', $view))) {
					?>
						<tr>
							<td colspan="9" class="nopost">자료가 없습니다</td>
						</tr>
					<?php
					}
					?>
					</tbody>
				</table>
			</div>
			<div class="box-info">
				<?php echo element('paging', $view); ?>
				<div class="pull-left ml20"><?php echo admin_listnum_selectbox();?></div>
				<?php echo $buttons; ?>
			</div>
		<?php echo form_close(); ?>
	</div>
	<form name="fsearch" id="fsearch" action="<?php echo current_full_url(); ?>" method="get">
		<div class="box-search">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<select class="form-control" name="sfield" >
						<?php echo element('search_option', $view); ?>
					</select>
					<div class="input-group">
						<input type="text" class="form-control" name="skeyword" value="<?php echo html_escape(element('skeyword', $view)); ?>" placeholder="Search for..." />
						<span class="input-group-btn">
							<button class="btn btn-default btn-sm" name="search_submit" type="submit">검색!</button>
						</span>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>

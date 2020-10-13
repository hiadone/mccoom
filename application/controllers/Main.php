<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Main class
 *
 * Copyright (c) CIBoard <www.ciboard.co.kr>
 *
 * @author CIBoard (develop@ciboard.co.kr)
 */

/**
 * 메인 페이지를 담당하는 controller 입니다.
 */
class Main extends CB_Controller
{

	/**
	 * 모델을 로딩합니다
	 */
	protected $models = array('Board','Hospital', 'Hospital_group');
	
	/**
	 * 헬퍼를 로딩합니다
	 */
	protected $helpers = array('form', 'array');

	function __construct()
	{
		parent::__construct();

		/**
		 * 라이브러리를 로딩합니다
		 */
		$this->load->library(array('querystring','videoplayer'));
	}


	/**
	 * 전체 메인 페이지입니다
	 */
	public function index($section='')
	{
		// 이벤트 라이브러리를 로딩합니다
		$eventname = 'event_main_index';
		$this->load->event($eventname);

		$view = array();
		$view['view'] = array();


		$view['view']['ga'] = true;
		
		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before'] = Events::trigger('before', $eventname);

		$where = array(
			'brd_search' => 1,
		);
		$board_id = $this->Board_model->get_board_list($where);
		$board_list = array();
		if ($board_id && is_array($board_id)) {
			foreach ($board_id as $key => $val) {
				$board_list[] = $this->board->item_all(element('brd_id', $val));
			}
		}
		$view['view']['board_list'] = $board_list;
		$view['view']['canonical'] = site_url();

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before_layout'] = Events::trigger('before_layout', $eventname);

		/**
		 * 레이아웃을 정의합니다
		 */
		
		
		if(empty($section))
			$page_title = $this->cbconfig->item('site_meta_title_main');
		elseif($section ==='sectMcCoom')
			$page_title = '매쿰';
		elseif($section ==='sectFeatures')
			$page_title = '특장점';
		elseif($section ==='sectEfficacy')
			$page_title = '원리 및 사용법';
		elseif($section ==='sectSkintype')
			$page_title = '추천';
		

		$view['view']['section'] = $section;

		$file_player_1 = $this->videoplayer->get_jwplayer(base_url('/assets/video/video_mid_pc.mp4'));

		$view['view']['file_player_1'] = $file_player_1;

		$meta_description = $this->cbconfig->item('site_meta_description_main');
		$meta_keywords = $this->cbconfig->item('site_meta_keywords_main');
		$meta_author = $this->cbconfig->item('site_meta_author_main');
		$page_name = $this->cbconfig->item('site_page_name_main');

		$layoutconfig = array(
			'path' => 'main',
			'layout' => 'layout',
			'skin' => 'main',
			'layout_dir' => $this->cbconfig->item('layout_main'),
			'mobile_layout_dir' => $this->cbconfig->item('mobile_layout_main'),
			'use_sidebar' => $this->cbconfig->item('sidebar_main'),
			'use_mobile_sidebar' => $this->cbconfig->item('mobile_sidebar_main'),
			'skin_dir' => $this->cbconfig->item('skin_main'),
			'mobile_skin_dir' => $this->cbconfig->item('mobile_skin_main'),
			'page_title' => $page_title,
			'meta_description' => $meta_description,
			'meta_keywords' => $meta_keywords,
			'meta_author' => $meta_author,
			'page_name' => $page_name,
		);
		$view['layout'] = $this->managelayout->front($layoutconfig, $this->cbconfig->get_device_view_type());
		$this->data = $view;
		$this->layout = element('layout_skin_file', element('layout', $view));
		$this->view = element('view_skin_file', element('layout', $view));
	}

	/**
	 * 전체 메인 페이지입니다
	 */
	public function hospital_list($section='')
	{
		

		// 이벤트 라이브러리를 로딩합니다
		$eventname = 'event_main_index';
		$this->load->event($eventname);

		$view = array();
		$view['view'] = array();

		$view['view']['ga'] = true;
		// if ($this->member->is_admin() !== 'super') {
		// 	redirect('login?url=' . urlencode(current_full_url()));
		// }

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before'] = Events::trigger('before', $eventname);

		
		$view['view']['canonical'] = site_url();
		
		
		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before_layout'] = Events::trigger('before_layout', $eventname);

		/**
		 * 레이아웃을 정의합니다
		 */
		
		$where = array();		
		$where = array('hgr_display' => 1);
		
		$hwhere = array();		
		$hwhere = array('hpt_display' => 1);

		$is_admin = $this->member->is_admin();

		if($is_admin)
			$view['view']['list_url'] = admin_url('page/hospitalgroup');
		
		$findex = $this->input->get('findex', null, 'hpt_order');
		$forder = $this->input->get('forder', null, 'asc');
		$this->Hospital_group_model->allow_order_field = array('hgr_id','hgr_order'); // 정렬이 가능한 필드
		$this->Hospital_model->allow_order_field = array('hpt_id','hpt_title','hpt_order','hpt_order, hpt_title'); // 정렬이 가능한 필드
		$result = $this->Hospital_group_model
			->get_admin_list('', '', $where, '', $findex, $forder);

		if (element('list', $result)) {
			foreach (element('list', $result) as $key => $val) {

				$result['list'][$key]['write_url'] = '';

				if ($is_admin) 
					$result['list'][$key]['list_url'] = admin_url('page/hospitalgroup');

				if ($is_admin) {
					$result['list'][$key]['modify_url'] = admin_url('page/hospitalgroup/write/'.element('hgr_id', $val));
					$result['list'][$key]['write_url'] = admin_url('page/hospitalgroup/write/');
				}

				$hwhere['hgr_id'] = element('hgr_id', $val);

				$hresult = $this->Hospital_model->get_admin_list('', '', $hwhere,'','hpt_order, hpt_title','asc');

				$result['list'][$key]['hlist'] = element('list', $hresult);
				
			}
		}
		
		

		$view['view']['data'] = $result;


		if(empty($section))
			$page_title = $this->cbconfig->item('site_meta_title_main');
		elseif($section ==='about')
			$page_title = 'ABOUT';
		elseif($section ==='service')
			$page_title = 'SERVICE';
		elseif($section ==='work')
			$page_title = 'WORK';
		elseif($section ==='contact')
			$page_title = 'CONTACT';

		$view['view']['section'] = $section;

		$meta_description = $this->cbconfig->item('site_meta_description_main');
		$meta_keywords = $this->cbconfig->item('site_meta_keywords_main');
		$meta_author = $this->cbconfig->item('site_meta_author_main');
		$page_name = $this->cbconfig->item('site_page_name_main');

		$layoutconfig = array(
			'path' => 'main',
			'layout' => 'layout',
			'skin' => 'hospital_list',
			'layout_dir' => $this->cbconfig->item('layout_main'),
			'mobile_layout_dir' => $this->cbconfig->item('mobile_layout_main'),
			'use_sidebar' => $this->cbconfig->item('sidebar_main'),
			'use_mobile_sidebar' => $this->cbconfig->item('mobile_sidebar_main'),
			'skin_dir' => $this->cbconfig->item('skin_main'),
			'mobile_skin_dir' => $this->cbconfig->item('mobile_skin_main'),
			'page_title' => $page_title,
			'meta_description' => $meta_description,
			'meta_keywords' => $meta_keywords,
			'meta_author' => $meta_author,
			'page_name' => $page_name,
		);
		$view['layout'] = $this->managelayout->front($layoutconfig, $this->cbconfig->get_device_view_type());
		$this->data = $view;
		$this->layout = element('layout_skin_file', element('layout', $view));
		$this->view = element('view_skin_file', element('layout', $view));
	}
}

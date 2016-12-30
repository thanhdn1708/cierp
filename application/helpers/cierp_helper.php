<?php 
/*1. Function pagination_list*/
// Generate pagination
// c - var this
// total - total record of list
// url - base url of controler
function pagination_list ($c,$total,$url)
{
	// Pagination
	$c->load->library('pagination'); 
	$config['base_url'] = base_url($url); 
	$config['total_rows'] = $total; 
	$config['per_page'] = config_item('per_of_page');
	$config['uri_segment'] = 6;
	$config['full_tag_open'] = '<li>';
	$config['full_tag_close'] = '</li>';
	$config['first_link'] = 'First';
	$config['first_tag_open'] = '<li>';
	$config['first_tag_close'] = '</li>';
	$config['last_link'] = 'Last';
	$config['last_tag_open'] = '<li>';
	$config['last_tag_close'] = '</li>';
	$config['next_link'] = 'Next';
	$config['next_tag_open'] = '<li>';
	$config['next_tag_close'] = '</li>';
	$config['prev_link'] = 'Prev';
	$config['prev_tag_open'] = '<li>';
	$config['prev_tag_close'] = '</li>';
	$config['num_tag_open'] = '<li>';
	$config['num_tag_close'] = '</li>';
	$config['cur_tag_open'] = '<li><a style="color:black;">';
	$config['cur_tag_close'] = '</a></li>';
	$c->pagination->initialize($config);
	return $c->pagination->create_links();
}

/*2. Function input_field*/
// Generate all input field in module
// c - var this
// model - get model of module
// record_data - var ref Data of post
// record - Data of model
// view - Detail = 1, Edit = 2, New = 3
function input_field ($c,$model,&$record_data,&$record,$view=1)
{
	$input = array();
	$relatedInput = array();
	$blocks = $c->$model->get_block();
	$c->sm->assign('block',$blocks);
	foreach ($blocks as $value) {
		$fields = $c->$model->get_field(NULL,$value->id,$view);
		if ($view!=1)
		{
			// Editview
			foreach ($fields as $field) {
			$fieldname = $field->fieldname;// Get data of Post
			$record_data[$fieldname] = $c->input->post('input_'.$fieldname);
			$data = array(
				'name'  => 'input_'.$fieldname,
				'id'    => 'input_'.$fieldname,
				'class' => 'form-control'
				);
			//Show data of model
			if ($record->id != NULL) {
				$data['value'] = $record->$fieldname;
			}
			switch ($field->ui) {
				case 1:
					// Textbox
					$input[$field->id] = form_input($data);
				break;
				case 2:
					// textarea
					if ($fieldname != 'body') $data['class'] = 'form-control mceNoEditor';
					else $data['class'] = 'form-control mceEditor';
					$input[$field->id] = form_textarea($data);
				break;
				case 3:
					// checkbox
					unset($data['class']);
					$data['value'] = '1';
					if ($record->id != NULL) {
						if ($record->$fieldname == 1) {
							$data['checked'] = 'checked';
						}
					}
					$input[$field->id] = form_checkbox($data);
					if ($record_data[$fieldname] == false)
						$record_data[$fieldname] = 0;
					else $record_data[$fieldname] = 1;
				break;
				case 4:
					// combobox
					$options = array();
					foreach ($c->$model->get_picklist(NULL,$fieldname) as $i) {
						$options[$i->value] = $i->label;
						if ($c->input->post('input_'.$fieldname) == $i->value)
							$record_data[$fieldname] = $i->value;
					}
					if ($record->id != NULL) {
						$input[$field->id] = form_dropdown('input_'.$fieldname, $options, $record->$fieldname, 'class="form-control"');
					}
					else $input[$field->id] = form_dropdown('input_'.$fieldname, $options, '1', 'class="form-control"');
				break;
				case 5:
					// date
					unset($data['id']);
					$input[$field->id] = '<div class="input-group date" name="input_'.$fieldname.'">'.form_input($data).'<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div>';
				break;
				case 6:
					// time
					unset($data['id']);
					$input[$field->id] = '<div class="input-group date" name="input_'.$fieldname.'">'.form_input($data).'<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div>';			
				break;
				case 7:
					// password
					$record_data[$fieldname] = $c->$model->hash($c->input->post('input_'.$fieldname));
					$input[$field->id] = form_password($data);
				break;
				case 8:
					// email
					$input[$field->id] = form_input($data);
				break;	
				case 9:
					// datetime
					unset($data['id']);
					$input[$field->id] = '<div class="input-group date" name="input_'.$fieldname.'">'.form_input($data).'<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div>';			
				break;
				case 10:
					// related
					$relatedtab = $c->$model->get_relatedtab($model,$fieldname);
					if ($record->id != NULL) {
						$label = $c->$model->get_label($record->$fieldname,$relatedtab->relatedtab);
						$data['value'] = $label;
						$data['autocomplete'] = 'off';
						$data['disabled'] = 'disabled';
						$input[$field->id] = '<div class="input-group"><span class="input-group-btn">'.anchor('#', '<i class="glyphicon glyphicon glyphicon-remove"></i>','class="btn btn-default" name="btn_'.$fieldname.'"').'</span>'.form_input($data).form_hidden('inputhiden_'.$fieldname, $record->$fieldname).'</div>';
					} else{
						$data['autocomplete'] = 'off';
						$input[$field->id] = '<div class="input-group"><span class="input-group-btn">'.anchor('#', '<i class="glyphicon glyphicon glyphicon-remove"></i>','class="btn btn-default" name="btn_'.$fieldname.'"').'</span>'.form_input($data).form_hidden('inputhiden_'.$fieldname, '').'</div>';
					}
					// Get data from hiden
					$record_data[$fieldname] = $c->input->post('inputhiden_'.$fieldname);
					// Generate to JS Related
					$jsRelated = array();
					$jsRelated['name'] = $fieldname;
					$jsRelated['data'] = $c->$model->get_relatedtab_autocomplete ($relatedtab->relatedtab);
					array_push($relatedInput,$jsRelated);
				break;											
				}
			}
			// Set relatedInput to view
			$c->sm->assign('relatedInput',$relatedInput);
			// Set input to view
			$c->sm->assign('input',$input);
			// Set field to View
			$c->sm->assign('field_'.$value->id,$fields);
		}
		else
		{
			// Detailview
			foreach ($fields as $field) {
			$fieldname = $field->fieldname;// Get data of Post
			switch ($field->ui) {
				case 3:
					// checkbox
					if ($record->$fieldname == 0)
						$record->$fieldname = 'No';
					else $record->$fieldname = 'Yes';
				break;
				case 4:
					// combobox
					foreach ($c->$model->get_picklist(NULL,$fieldname) as $i) {
						if ($record->$fieldname == $i->value)
							$record->$fieldname = $i->label;
					}
				break;
				case 10:
					// Lấy dữ liệu từ relate tab
					$relatedtab = $c->$model->get_relatedtab($model,$fieldname);
					$label = $c->$model->get_label($record->$fieldname,$relatedtab->relatedtab);
					if ($label !='')
						$record->$fieldname = anchor($c->$model->get_detailurl($record->$fieldname,$relatedtab->relatedtab), $label);
					else $record->$fieldname = $label;
				break;									
				}
			}
			// Set record to view
			$c->sm->assign('record',$record);
			// Set field to View
			$c->sm->assign('field_'.$value->id,$fields);
		}
	}
}

/*3. Function data_list*/
// Set data for listview
// c - var this
// model - get model of module
// page - trang lựa chọn của list
// like - điều kiện tìm kiếm dữ liệu
function data_list ($c,$model,$page,$like)
{
	// Lấy dữ liệu từ DB
	$data = $c->$model->get_offset(config_item('per_of_page'),$page,$like);
	foreach ($data as $i) {
		$fields = $c->$model->get_field(NULL,NULL,0);
		foreach ($fields as $field) {
			$fieldname = $field->fieldname;// Get data of Post
			switch ($field->ui) {
					case 3:
						// checkbox
						if ($i->$fieldname == 0)
							$i->$fieldname = 'No';
						else $i->$fieldname = 'Yes';
					break;
					case 4:
						// combobox
						foreach ($c->$model->get_picklist(NULL,$fieldname) as $j) {
							if ($i->$fieldname == $j->value)
								$i->$fieldname = $j->label;
						}
					break;
					case 10:
						// related
						// Lấy dữ liệu từ relate tab
						$relatedtab = $c->$model->get_relatedtab($model,$fieldname);
						$label = $c->$model->get_label($i->$fieldname,$relatedtab->relatedtab);
						if ($label !='')
							$i->$fieldname = anchor($c->$model->get_detailurl($i->$fieldname,$relatedtab->relatedtab), $label);
						else $i->$fieldname = $label;
					break;	
			}
		}
	}
	return $data;
}

/*4. Save sortview*/
// Set data
// c - var this
// model - get model of module
function save_sortview ($c,$model)
{
	$reload = false;
	$block = $c->input->post('result_block');
	if ($block!='')
	{
		$block = explode(',',$block);
		for ($i=0; $i < sizeof($block); $i++) { 
			$blockid = str_replace('block_', '', $block[$i]);
			$c->$model->set_block_sequence($blockid,$i+1);
			$reload = true;
		}
	}
	foreach ($c->$model->get_block() as $j) {
		$field = $c->input->post('result_field_'.$j->id);
		if ($field!='')
		{
			$field = explode(',',$field);
			for ($i=0; $i < sizeof($field); $i++) { 
				$fieldid = str_replace('field_', '', $field[$i]);
				$c->$model->set_field_sequence($fieldid,$i+1);
				$reload = true;
			}
		}
	}
	if ($reload) redirect($c->$model->get_baseurl().'sortview');
}

/*5. Input filter field*/
// Generate field
// c - var this
// model - get model of module
function inputfilter ($c,$model,$filter_name,$filter_value,&$input,&$relatedInput)
{
	$field = $c->$model->get_fieldbyname(NULL,$filter_name);
	if ($field == NULL)
	{
		$input[$filter_name] = form_input($filter_name, $filter_value, 'class="form-control"');
		return;
	}
	switch ($field->ui) {
		case 3:
			// checkbox
			if ($filter_value == '') {
				$value = '';
			}
			else{
				if ($filter_value == 1) {
					$value = 'Yes';
				}
				else{
					$value = 'No';
				}				
			}
			$input[$filter_name] = form_input('show_'.$filter_name, $value, 'class="form-control"').form_hidden($filter_name, $filter_value);
			$jsRelated = array();
			$jsRelated['name'] = $filter_name;
			$jsRelated['data'] = "[{ id: 0, name: 'No'}, { id: 1, name: 'Yes'}]";
			array_push($relatedInput,$jsRelated);
		break;
		case 4:
			// combobox
			if ($filter_value == '') $value = '';
			$options = array();
			$data = "[";
			foreach ($c->$model->get_picklist(NULL,$filter_name) as $i) {
				$options[$i->value] = $i->label;
				$data = $data . "{ id:".$i->value.",name:'".$i->label."'},";
				if ($filter_value == $i->value) $value = $i->label;
			}
			$data = $data . "]";
			$input[$filter_name] = form_input('show_'.$filter_name, $value, 'class="form-control"').form_hidden($filter_name, $filter_value);
			$jsRelated = array();
			$jsRelated['name'] = $filter_name;
			$jsRelated['data'] = $data;
			array_push($relatedInput,$jsRelated);
		break;
		case 10:
			// related
			$relatedtab = $c->$model->get_relatedtab($model,$filter_name);
			if ($filter_value == '') $value = '';
			else $value = $c->$model->get_label($filter_value,$relatedtab->relatedtab);
			$input[$filter_name] = form_input('show_'.$filter_name, $value, 'class="form-control"').form_hidden($filter_name, $filter_value);
			$jsRelated = array();
			$jsRelated['name'] = $filter_name;
			$jsRelated['data'] = $c->$model->get_relatedtab_autocomplete ($relatedtab->relatedtab);
			array_push($relatedInput,$jsRelated);
		break;	
		default:
			// default
			$input[$filter_name] = form_input($filter_name, $filter_value, 'class="form-control"');
		break;	
	}
}

/*6. Save picklist*/
// Set data
// c - var this
// model - get model of module
function save_picklist ($c,$model,$tabid)
{
	$reload = false;
	foreach ($c->$model->get_field_picklist($tabid) as $j) {
		$record = $c->input->post('result_relatedField_'.$j->id);
		if ($record!='')
		{
			$record = explode(',',$record);
			for ($i=0; $i < sizeof($record); $i++) { 
				$recordid = str_replace('picklistValue_', '', $record[$i]);
				$c->$model->set_picklist_sequence($recordid,$i+1);
				$reload = true;
			}
		}
	}
	if ($reload) redirect($c->$model->get_baseurl().'picklist');
}

/*7. Generate Menu*/
// Set data
// c - var this
function gen_menu ($c,$parentid)
{
	$menu = '';
	foreach ($c->user->get_menu($parentid) as $i) {
		$menu = $menu.'<li>'.anchor($i->url, $i->label).'</li>';
	}
	return $menu;
}

/*8. Generate Menu*/
// Set data
// c - var this
function gen_menu_sidebar ($c,$parentid)
{
	$menu = '';
	foreach ($c->user->get_menu($parentid) as $i) {
		if ($i->url == '#')
		{
			$menu = $menu.'<li>'.anchor($i->url.$i->name, $i->label,'data-toggle="collapse"').'</li>';
			$menu = $menu.'<div class="collapse" id="'.$i->name.'">';
			foreach ($c->user->get_menu($i->id) as $j)
			{
				$menu = $menu.anchor($j->url, $j->label,'class="list-group-item"');
			}
			$menu = $menu.'</div>';
		}
		else $menu = $menu.'<li>'.anchor($i->url, $i->label).'</li>';
	}
	return $menu;
}

/*9. Generate Menu*/
// Set data
// c - var this
function gen_menu_fixtop ($c,$parentid)
{
	$menu = '';
	foreach ($c->user->get_menu($parentid) as $i) {
		if ($i->url == '#')
		{
			$menu = $menu.'<li>'.anchor($i->url, $i->label.' <span class="caret"></span>','data-toggle="dropdown" aria-expanded="false"');
			$menu = $menu.'<ul class="dropdown-menu" role="menu">';
			foreach ($c->user->get_menu($i->id) as $j)
			{
				$menu = $menu.'<li>'.anchor($j->url, $j->label).'</li>';
			}
			$menu = $menu.'</ul></li>';
		}
		else $menu = $menu.'<li>'.anchor($i->url, $i->label).'</li>';
	}
	return $menu;
}

?>
<?php
class DswinAction extends Action{
    public function show(){
		$this->display('./Public/plus/ds/ds_win.html');
	}
    public function wait(){
		$listarr = F('_ppvod/list');
		foreach($listarr as $key=>$value){
			$keynew = $value['list_sid'];
			$list[$keynew][$key] = $value['list_id'];
		}
		$this->assign($array);
		$this->assign('list_vod_all',implode(',',$list[1]));
		//
		$array = getWDSrt($_REQUEST['ds']);
		$array['min'] = $array['caiji']+$array['data'];
		$this->assign($array);
		$this->display('./Public/plus/ds/ds_wait.html');
	}
}
?>
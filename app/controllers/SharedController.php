<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * tb_posto_id_municipiu_option_list Model Action
     * @return array
     */
	function tb_posto_id_municipiu_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT naran_municipio AS value,naran_municipio AS label FROM tb_municipiu ORDER BY naran_municipio DESC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * tb_aldeia_id_municipiu_option_list Model Action
     * @return array
     */
	function tb_aldeia_id_municipiu_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT naran_suco AS value,naran_suco AS label FROM tb_suco ORDER BY naran_suco DESC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * tb_aldeia_id_posto_option_list Model Action
     * @return array
     */
	function tb_aldeia_id_posto_option_list($lookup_id_municipiu){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT naran_posto AS value,naran_posto AS label FROM tb_posto WHERE id_municipiu= ? ORDER BY naran_posto ASC" ;
		$queryparams = array($lookup_id_municipiu);
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * tb_aldeia_id_suco_option_list Model Action
     * @return array
     */
	function tb_aldeia_id_suco_option_list($lookup_id_posto){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT naran_suco AS value,naran_suco AS label FROM tb_suco WHERE id_posto= ? ORDER BY naran_suco ASC" ;
		$queryparams = array($lookup_id_posto);
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * tb_suco_id_municipiu_option_list Model Action
     * @return array
     */
	function tb_suco_id_municipiu_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT naran_municipio AS value,naran_municipio AS label FROM tb_municipiu ORDER BY naran_municipio DESC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * tb_suco_id_posto_option_list Model Action
     * @return array
     */
	function tb_suco_id_posto_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT naran_posto AS value,naran_posto AS label FROM tb_posto ORDER BY naran_posto DESC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * tb_prossesu_id_funsionario_option_list Model Action
     * @return array
     */
	function tb_prossesu_id_funsionario_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT naran_funsionariu AS value,naran_funsionariu AS label FROM tb_funsionario ORDER BY naran_funsionariu DESC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * tb_prossesu_id_municipiu_option_list Model Action
     * @return array
     */
	function tb_prossesu_id_municipiu_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT naran_municipio AS value,naran_municipio AS label FROM tb_municipiu ORDER BY naran_municipio DESC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * tb_prossesu_id_posto_option_list Model Action
     * @return array
     */
	function tb_prossesu_id_posto_option_list($lookup_id_municipiu){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT naran_posto AS value,naran_posto AS label FROM tb_posto WHERE id_municipiu= ? ORDER BY naran_posto ASC" ;
		$queryparams = array($lookup_id_municipiu);
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * tb_prossesu_id_suco_option_list Model Action
     * @return array
     */
	function tb_prossesu_id_suco_option_list($lookup_id_posto){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT naran_suco AS value,naran_suco AS label FROM tb_suco WHERE id_posto= ? ORDER BY naran_suco ASC" ;
		$queryparams = array($lookup_id_posto);
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * tb_prossesu_id_aldeia_option_list Model Action
     * @return array
     */
	function tb_prossesu_id_aldeia_option_list($lookup_id_suco){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT naran_aldeia AS value,naran_aldeia AS label FROM tb_aldeia WHERE id_suco= ? ORDER BY naran_aldeia ASC" ;
		$queryparams = array($lookup_id_suco);
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * tb_user_username_value_exist Model Action
     * @return array
     */
	function tb_user_username_value_exist($val){
		$db = $this->GetModel();
		$db->where("username", $val);
		$exist = $db->has("tb_user");
		return $exist;
	}

	/**
     * tb_user_email_value_exist Model Action
     * @return array
     */
	function tb_user_email_value_exist($val){
		$db = $this->GetModel();
		$db->where("email", $val);
		$exist = $db->has("tb_user");
		return $exist;
	}

}

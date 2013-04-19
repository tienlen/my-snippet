<?php
/**
 * [class description]
 *
 * @category Controller
 */
class controllerClass extends abstractControllerClass {
	/* Constants
	-------------------------------*/
	const PIYO = 'piyo';

	/* Public Properties
	-------------------------------*/
	/* Protected Properties
	-------------------------------*/
	protected $_root = NULL;
	protected static $_active = NULL;

	/* Private Properties
	-------------------------------*/
	/* Magic Methods
	-------------------------------*/
	public function __construct() {
		parent::__construct();
	}

	/* Public Methods
	-------------------------------*/
	/**
	 * 一覧画面の表示
	 */
	public function index()
	{
		
	}

	/**
	 * 詳細画面の表示
	 * @param integer $id
	 */
	public function show($id)
	{
		
	}

	/**
	 * 新規登録画面の表示
	 * @param integer $id
	 */
	public function add($id)
	{
		
	}

	/**
	 * 新規登録処理
	 * @return string (json format)
	 */
	public function create()
	{
		$result = array(
			'value' => '1234',
			'params' => array(
				'value1' => 'key1',
				'value2' => 'key2',
			)
		);
		$is_success = true;
		if(!$is_success)
		{
			$result = array(
				'status' => 401,
				'code' => 1234,
				'message' => 'エンドユーザ向けメッセージ',
				'dev_message' => '開発者向けメッセージ',
			);
		}
		$result_json = json_encode($result);
		return $result_json;
	}

	/**
	 * 更新画面の表示
	 * @param integer $id
	 */
	public function edit($id)
	{

	}

	/**
	 * [update description]
	 * @return string (json format)
	 */
	public function update()
	{
		$result = array(
			'value' => '1234',
			'params' => array(
				'value1' => 'key1',
				'value2' => 'key2',
			)
		);
		$is_success = true;
		if(!$is_success)
		{
			$result = array(
				'status' => 401,
				'code' => 1234,
				'message' => 'エンドユーザ向けメッセージ',
				'dev_message' => '開発者向けメッセージ',
			);
		}
		$result_json = json_encode($result);
		return $result_json;
	}

	/**
	 * [destroy description]
	 * @return string (json format)
	 */
	public function destroy() {
		$result = array(
			'value' => '1234',
			'params' => array(
				'value1' => 'key1',
				'value2' => 'key2',
			);
		);
		$is_success = true;
		if(!$is_success)
		{
			$result = array(
				'status' => 401,
				'code' => 1234,
				'message' => 'エンドユーザ向けメッセージ',
				'dev_message' => '開発者向けメッセージ',
			);
		}
		$result_json = json_encode($result);
		return $result_json;
	}

	/**
	 * [foo description]
	 * @param  [type] $bar [description(option)]
	 * @return [type]      [description(option)]
	 */
	public function fooBar($piyo_piyo)
	{
		$result = '';
		return $result;
	}

	/* Protected Methods
	-------------------------------*/
	/* Private Methods
	-------------------------------*/
}
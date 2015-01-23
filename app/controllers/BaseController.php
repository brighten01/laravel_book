<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
//    protected $layout='master';
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

    /**
     * 报告脚本
     * @param $url
     * @param $msg
     */
    public function reportScript($url,$msg){
        echo "<script language='javascript'>";
        echo "alert('".$msg."'); location.href='".$url."';";
        echo "</script>";
    }
}

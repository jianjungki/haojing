<?php
//lianghonghao@baixing.com
class U_Controller {
	public function handle(Url $url) {
		echo new View('header');
		echo "This is a hello world Sample! <br />";
		echo "UserId is " , $url->segments(1);
		echo new View('footer');

	}
}

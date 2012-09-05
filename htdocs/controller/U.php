<?php
//lianghonghao@baixing.com
class U_Controller {
	public function handle(Url $url) {
		echo new View('header');
		$user_id = "u" . $url->segments(1);

		$user = graph($user_id);

		if ($user->jobPort) {
			$content = new View('u/normal', [
				'user' => $user,
			]);
		} else {
			$content = new View('u/normal', [
				'user' => $user,
			]);
		}

		echo $content;

		echo new View('footer');

	}
}

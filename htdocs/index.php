<?php
include __DIR__ . "/init.php";

$dispatch_result = Router::urlDispatch(new Url);

Controller::delegate($dispatch_result);

# @todo 代码应该是这样的！先写成上面那样让大家可以跑起来
# $response = Controller::handle($dispatch_result);
# $response->render();

?>
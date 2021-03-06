<?php
class HomeController extends Controller {
	public function __construct(){
		parent::__construct();
	}
	public function Map(){
		$this->router->map( 'GET', '/', function() {
			if(Auth::IsAuthenticated()){
				if(Auth::GetSchülerId()){
					$this->redirect('schueler');
				} else if(Auth::GetLehrkraftId()) {
					$this->redirect('lehrkraft');
				}
			} else {
				$this->redirect('login');
			}
		});
	}
}
?>
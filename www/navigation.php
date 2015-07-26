<?

include_once 'index.php';
include_once 'Router.php';

function nav(){
	$tpl = new_template();
		if(!$_SESSION['user_is_entered'])
		{
			$nav = array(
			array('link'=>'Sign Up', 'href'=>'/login'),
			array('link'=>'Sign In', 'href'=>'/reg'),
			);
		}
		else
		{	$nav = array(
			array('link'=>'Sign Out', 'href'=>'/log_out'),
			);
		}

	 $tpl->assign('nav', $nav);
	 return $tpl->fetch('nav.tpl');
}
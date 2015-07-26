<?

include_once 'index.php';
include_once 'Router.php';

function nav(){
	$tpl = new_template();
		if(!$_SESSION['user_is_entered'])
		{
			$nav = array(
			array('link'=>'Sign In', 'href'=>'/login'),
			array('link'=>'Sign Up', 'href'=>'/reg'),
			);
		}
		else
		{	$nav = array(
			array('link'=>'Sign Out', 'href'=>'/sign_out'),
			);
		}

	 $tpl->assign('nav', $nav);
	 return $tpl->fetch('nav.tpl');
}
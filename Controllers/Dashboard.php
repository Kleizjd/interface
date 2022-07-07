<?php 

	class Dashboard extends Controllers{
		public function __construct()
		{
			sessionStart();
			parent::__construct();
			
			if(empty($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
				die();
			}
			getPermisos(MDASHBOARD);
		}

		public function dashboard()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "Dashboard - Tienda Virtual";
			$data['page_title'] = "Dashboard - Tienda Virtual";
			$data['page_name'] = "dashboard";
			$data['page_functions_js'] = "functions_dashboard.js";
			
				$this->views->getView($this,"dashboard",$data);

		}

	
	}
 ?>
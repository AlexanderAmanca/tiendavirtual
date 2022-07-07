<?php 

	class Home extends Controllers{
		use TCategoria;
		public function __construct()
		{
			parent::__construct();
		}

		public function home()
		{
			dep($this->model->getCategorias(CAT_SLIDER));
			exit;
			$data['page_tag'] = "Home";
			$data['page_title'] = "Página principal";
			$data['page_name'] = "tienda_virtual";
			$data['slider'] = $this->getCategoriasT(CAT_SLIDER);
			$data['banner'] = $this->getCategoriasT(CAT_BANNER);
			$this->views->getView($this,"home",$data);
		}

	}
 ?>
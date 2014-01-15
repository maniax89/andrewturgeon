<?php

class Pages extends CI_Controller {
<<<<<<< HEAD

	public function view($page = 'home')
	{
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			//no page
			show_404();
		}
		
		$data['title'] = ucfirst($page);
		
		$this->load->view('templates/header',$data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
		
	}

=======
    
    public function view($page = 'home')
    {
        if ( ! file_exists('application/views/pages/'.$page.'.php'))
	{
		show_404();
	}

	$data['title'] = ucfirst($page); // Capitalize the first letter

	$this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
	$this->load->view('pages/'.$page, $data);
	$this->load->view('templates/footer', $data);

    }
>>>>>>> 3ed011268203cf92ffd4da9eac6eeb64f32080d8
}

?>
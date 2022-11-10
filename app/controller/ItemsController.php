<?php

class Items extends Controller
{
    public function index()
    {
        $data['judul'] = 'Items' ;
        $data['mhs'] = $this->model('ItemsModel')->get();
        $data['no'] = 1;
        $this->view('templates/header', $data);
        $this->view('items/index', $data);
        $this->view('templates/footer');
    }

    public function store()
    {
       $name = $_POST['name'];
       $description = $_POST['description'];
       $released = $_POST['released'];
       $file = $_FILES['file']['tmp_name'];
       $file_name = $_FILES['file']['name'];
       $path = "../public/storage/img/";
       move_uploaded_file($file, $path . $file_name);
       $this->model('ItemsModel')->create($name, $description, $released, $file_name);
       header('Location:http://mvc.test/Items/index');
        
    }

    public function delete($id)
    {
    //    if($this->model('ItemsModel')->delete($id) > 0){
    //      header('Location: '. REDIRECT . '/Items/index');
    //    }
       $this->model('ItemsModel')->delete($id);
       header('Location:http://mvc.test/Items/index');

    }
}   


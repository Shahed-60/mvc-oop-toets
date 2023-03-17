<?php
class Home extends BaseController
{
    public function index($id = NULL, $name = NULL, $haircolor = NULL)
    {

        $data = [
            'title' => 'Homepage van de webapp',
            'id'    => $id,
            'name'  => $name,
            'haircolor' => $haircolor
        ];
        $this->view('home/index', $data);
    }
}

<?php

namespace App\Controllers;
use App\Models\PlantModel;

class Plant extends BaseController
{
    public function index()
    {
        $model = new PlantModel();
        $data['plants'] = $model->findAll();
        return view('plant/index', $data);
    }

    public function create()
    {
        return view('plant/create');
    }

    public function store()
    {
        $validation = \Config\Services::validation();
        $rules = [
            'productname' => 'required',
            'category'     => 'required',
            'price'        => 'required|decimal',
            'quantity'     => 'required|integer',
        ];

        if (!$this->validate($rules)) {
            return view('plant/create', [
                'validation' => $this->validator
            ]);
        }

        $file = $this->request->getFile('image');
        $newName = $file->getRandomName();
        $file->move('uploads/', $newName);

        $model = new PlantModel();
        $model->save([
            'productname'   => $this->request->getPost('productname'),
            'category'       => $this->request->getPost('category'),
            'price'          => $this->request->getPost('price'),
            'quantity'       => $this->request->getPost('quantity'),
            'wateringneed'  => $this->request->getPost('wateringneed'),
            'sunlight'       => $this->request->getPost('sunlight'),
            'status'         => $this->request->getPost('status'),
            'image'          => $newName,
        ]);

        return redirect()->to('/plant')->with('success', 'Plant added successfully.');
    }

    public function edit($id)
    {
        $model = new \App\Models\PlantModel();
        $data['plant'] = $model->find($id);

        if (!$data['plant']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Plant not found');
        }

    return view('plant/edit', $data);
}


    public function update($id)
    {
        $model = new PlantModel();

        $data = [
            'productname'   => $this->request->getPost('productname'),
            'category'       => $this->request->getPost('category'),
            'price'          => $this->request->getPost('price'),
            'quantity'       => $this->request->getPost('quantity'),
            'wateringneed'  => $this->request->getPost('wateringneed'),
            'sunlight'       => $this->request->getPost('sunlight'),
            'status'         => $this->request->getPost('status'),
        ];

        // Handle image update
        $file = $this->request->getFile('image');
        if ($file && $file->isValid()) {
            $newName = $file->getRandomName();
            $file->move('uploads/', $newName);
            $data['image'] = $newName;
        }

        $model->update($id, $data);

        return redirect()->to('/plant')->with('success', 'Plant updated successfully.');
    }

    public function delete($id)
    {
        $model = new PlantModel();
        $model->delete($id);
        return redirect()->to('/plant')->with('success', 'Plant deleted successfully.');
    }
    
}

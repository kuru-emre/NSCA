<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use CodeIgniter\Shield\Model\UserIdentityModel;

class SettingsController extends BaseController
{
    protected $helpers = ['form', 'file'];

    public function index()
    {
        $data = [
            'title' => 'Settings',
            'user'  => auth()->user(),
            'fileData' => $this->getBackupFiles()
        ];
        return view('pages/admin/settings', $data);
    }

    public function backup()
    {
        helper('filesystem');
        $db = \Config\Database::connect();
        $dbname = $db->database;
        $path = WRITEPATH . 'uploads/';

        $filename = $dbname . '_' . date('d_M-Y');
        $prefs = ['filename' => $filename, 'format' => 'sql'];

        $util = (new \App\Database\Utils($db));
        $backup = $util->backup($prefs, $db);

        write_file($path . $filename . '.sql', $backup);

        return $this->response->download($path . $filename . '.sql', null);
    }

    private function getBackupFiles(): array
    {
        helper('filesystem');
        $path = WRITEPATH . 'uploads/';
        $fileData = array();
        $fileNames = get_filenames($path);

        foreach ($fileNames as $fileName) {
            if (pathinfo($fileName, PATHINFO_EXTENSION) === 'sql') {
                $filePath = $path . $fileName;
                $fileData[] = array(
                    'filename' => $fileName,
                    'date' => date('Y-m-d H:i:s', filemtime($filePath))
                );
            }
        }
        return $fileData;
    }

    public function updatePassword()
    {
        $model = model(UserIdentityModel::class);

        $rules = [
            'oldPassword' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'You must provide your old password.'
                ]
            ],
            'newPassword' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'You must provide a new password.'
                ]
            ],
            'newConfirmPassword' => [
                'rules' => 'required|matches[newPassword]',
                'errors' => [
                    'required' => 'You must confirm your new password.',
                    'matches' => 'The confirmation password does not match the new password.'
                ]
            ]
        ];

        if (!$this->validate($rules)) {
            // validation failed, handle error here
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $oldPassword = $this->request->getPost('oldPassword');
        $newPassword = $this->request->getPost('newPassword');

        $model->whereIn('user_id', [auth()->user()->id])->set(['secret2' => password_hash($newPassword, PASSWORD_DEFAULT)])->update();

        session()->setFlashdata('toast', ['content' => 'Password changed successfully!', 'type' => 'success']);
    
        // Redirect to the settings page or wherever you want to show the toast
        return redirect()->back();
    }

    public function updateInformation()
    {
        $user = auth()->user();
        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'street' => $this->request->getPost('street'),
            'city' => $this->request->getPost('city'),
            'region' => $this->request->getPost('region'),
            'postal' => $this->request->getPost('postal'),
        ];
        session()->setFlashdata('toast', ['content' => 'Information updated successfully', 'type' => 'success']);
        return redirect()->back();
    }
}

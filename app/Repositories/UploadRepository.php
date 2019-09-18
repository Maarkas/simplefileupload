<?php

namespace App\Repositories;

use App\Upload;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Storage;

/**
 * Class UploadRepository
 * @package App\Repositories
 */
class UploadRepository implements UploadRepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->model = new Upload();
    }

    /**
     * Gets a single upload.
     *
     * @param Upload $upload_id
     * @return mixed
     */
    public function get($upload_id)
    {
        return $this->model->find($upload_id);
    }

    /**
     * Gets all uploaded files and paginate them by specified number.
     *
     * @param int $pagination - The number of pages per paginated data quantity
     * @return mixed
     */
    public function all($pagination = 9)
    {
        return $this->model->paginate($pagination);
    }

    public function store($title, $file)
    {
        if (!$title && !$file && !$file->isValid()) {
            return null;
        }

        $filesize = $file->getSize();
        $folderPath = public_path().'/uploads/';
        $fileName = $title . '.' . $file->getClientOriginalExtension();

        $file->move($folderPath, $fileName);

        return $this->model->create([
            'title' => $title,
            'filename' => $fileName,
            'extension' => $file->getClientOriginalExtension(),
            'path' => $folderPath . $fileName,
            'filesize' => $filesize
        ]);
    }
}
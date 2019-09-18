<?php

namespace App\Repositories;

use App\Upload;

/**
 * Class UploadRepository
 * @package App\Repositories
 */
class UploadRepository implements UploadRepositoryInterface
{
    /**
     * Gets a single upload by its ID.
     *
     * @param int
     * @return collection
     */
    public function get($upload_id)
    {
        return Upload::find($upload_id);
    }

    /**
     * Gets all uploaded files.
     *
     * @return mixed
     */
    public function all()
    {
        return Upload::all();
    }

    /**
     * Deletes an uploaded file.
     *
     * @param int
     */
    public function delete($upload_id)
    {
        Upload::destroy($upload_id);
    }

    /**
     * Updates an uploaded file.
     *
     * @param int
     * @param array
     */
    public function update($upload_id, array $file_data)
    {
        Upload::find($upload_id)->update($file_data);
    }
}
<?php

namespace App\Repositories;

/**
 * Interface UploadRepositoryInterface
 * @package App\Repositories
 */
interface UploadRepositoryInterface
{
    /**
     * Gets all uploaded files.
     *
     * @return mixed
     */
    public function all();

    /**
     * Gets a single upload by its ID.
     *
     * @param int
     */
    public function get($upload_id);

    /**
     * Deletes an uploaded file.
     *
     * @param int
     */
    public function delete($upload_id);

    /**
     * Updates an uploaded file.
     *
     * @param int
     * @param array
     */
    public function update($upload_id, array $file_data);
}
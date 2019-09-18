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
     * Stores files.
     *
     * @param $title
     * @param $files
     * @return mixed
     */
    public function store($title, $files);
}
<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadFileRequest;
use App\Repositories\UploadRepositoryInterface;
use App\Upload;

/**
 * Class UploadController
 * @package App\Http\Controllers
 */
class UploadController extends Controller
{
    /**
     * @var UploadRepositoryInterface
     */
    protected $repository;

    /**
     * UploadController constructor.
     *
     * @param UploadRepositoryInterface $upload
     */
    public function __construct(UploadRepositoryInterface $upload) {
        $this->repository = $upload;
    }

    /**
     * Index page of uploads, passing all uploads stored.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        $uploads = $this->repository->all();
        return view('uploads.index')
            ->with('uploads', $uploads);
    }

    public function store(UploadFileRequest $request) {
        if($request->hasfile('file')) {
            $this->repository->store($request->get('title'), $request->file('file'));
        }
        return $this->index();
    }

    public function show(Upload $upload) {
        return view('uploads.show')
            ->with('upload', $upload);
    }
}

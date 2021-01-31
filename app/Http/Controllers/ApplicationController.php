<?php

namespace App\Controllers;

use App\Http\Controllers\Controller;
use App\DataTables\ApplicationDataTable;
use App\Requests\CreateApplicationRequest;
use App\Requests\UpdateApplicationRequest;
use App\Repositories\ApplicationRepository;

class ApplicationController extends Controller
{
    /** @var  ApplicationRepository */
    private $applicationRepository;

    public function __construct(ApplicationRepository $applicationRepo)
    {
        $this->applicationRepository = $applicationRepo;
    }

    /**
     * Display a listing of the Application.
     *
     * @param ApplicationDataTable $applicationDataTable
     * @return Response
     */
    public function index(ApplicationDataTable $applicationDataTable)
    {
        return $applicationDataTable->render('applications.index');
    }

    /**
     * Store a newly created Application in storage.
     *
     * @param CreateApplicationRequest $request
     *
     * @return Response
     */
    public function store(CreateApplicationRequest $request)
    {
        $input = $request->all();

        $application = $this->applicationRepository->create($input);

        return $this->success(__('crud.add_success'));
    }

    /**
     * Display the specified Application.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $application = $this->applicationRepository->find($id);

        if (empty($application)) {
            return redirect(route('applications.index'));
        }

        return view('applications.show')->with('application', $application);
    }

    /**
     * Update the specified Application in storage.
     *
     * @param  int              $id
     * @param UpdateApplicationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateApplicationRequest $request)
    {
        $application = $this->applicationRepository->find($id);

        if (empty($application)) {
            return $this->error(__('crud.not_found'));
        }

        $application = $this->applicationRepository->update($request->all(), $id);

        return $this->success(__('crud.update_success'));
    }

    /**
     * Remove the specified Application from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $application = $this->applicationRepository->find($id);

        if (empty($application)) {
            return $this->error(__('crud.not_found'));
        }

        $this->applicationRepository->delete($id);

        return $this->success(__('crud.delete_success'));
    }
}

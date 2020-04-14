<?php


namespace App\Services;


use App\Criteria;
use App\Http\Requests\StoreCriteriaRequest;
use App\Http\Requests\UpdateCriteriaRequest;
use App\Services\Interfaces\CriteriaServiceInterface;

class CriteriaService extends Service implements CriteriaServiceInterface
{
    public function getAllCriteria()
    {
        return Criteria::all();
    }

    public function changeStatus($request) {
        return Criteria::findOrFail($request->id)
            ->update([
                Criteria::COL_STATUS => $request->input(Criteria::COL_STATUS),
            ]);
    }

    public function getCriteriaById($id) {
        return Criteria::findOrFail($id);
    }

    public function update(UpdateCriteriaRequest $request, $id) {
        return Criteria::findOrFail($id)
            ->update([
                Criteria::COL_NAME => $request->input(Criteria::COL_NAME),
                Criteria::COL_DESCRIPTION => $request->input(Criteria::COL_DESCRIPTION),
                Criteria::COL_EXPLAIN => $request->input(Criteria::COL_EXPLAIN),
                Criteria::COL_EXAMPLE => $request->input(Criteria::COL_EXAMPLE),
                Criteria::COL_WEIGHT => $request->input(Criteria::COL_WEIGHT),
            ]);
    }

    public function store(StoreCriteriaRequest $request) {
        return Criteria::create([
            Criteria::COL_NAME => $request->input(Criteria::COL_NAME),
            Criteria::COL_DESCRIPTION => $request->input(Criteria::COL_DESCRIPTION),
            Criteria::COL_EXPLAIN => $request->input(Criteria::COL_EXPLAIN),
            Criteria::COL_EXAMPLE => $request->input(Criteria::COL_EXAMPLE),
            Criteria::COL_WEIGHT => $request->input(Criteria::COL_WEIGHT),
        ]);
    }
}

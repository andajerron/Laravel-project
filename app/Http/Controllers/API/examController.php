<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Resources\exam as exams;
use App\Models\exam;
use Illuminate\Http\Request;

class examController extends Controller
{
    //ERROR HANDLING
    public function handleResponse($result, $msg)
    {
        $res = [
            'success' => true,
            'data'    => $result,
            'message' => $msg,
        ];
        return response()->json($res, 200);
    }
 
    public function handleError($error, $errorMsg = [], $code = 404)
    {
        $res = [
            'success' => false,
            'message' => $error,
        ];
        if(!empty($errorMsg)){
            $res['data'] = $errorMsg;
        }
        return response()->json($res, $code);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = exam::all();
        return exams::collection($tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $tasks = exam::create($request->all());
        
        return new exams($tasks);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\exam  $exam
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {
        $tasks = exam::find($id);
        if (is_null($tasks)) {
            return $this->handleError('Task not found!');
        }
        return $this->handleResponse(new exams($tasks), 'Task retrieved.');
        
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit(exam $exam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostRequest $request, exam $exam)
    {
        $exam->update($request->all());
        
        return new exams($exam);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(exam $exam)
    {
        $exam->delete();

        //return response(null, 204);
        return $this->handleResponse([], 'Task deleted!');
    }
     
}

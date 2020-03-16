<?php

namespace App\Http\Controllers;

use App\Topic;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\SubCategory;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Traits\CommonTrait;

class TopicController extends BaseController
{
    use CommonTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Show all employees from the database and return to view
        $topic = Topic::all();
        return $this->sendResponse($topic, "successful");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'label' => 'required|string',
            'sub_category_id' => 'required|string'
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $input['id'] = uniqid("gb", false);
        $input['name'] = Str::slug($input['label']);
        $input['label'] = $input['label'];
        $input->sub_category_id = $this->columnToId($input['sub_category'], 'name', new SubCategory()) ? $this->columnToId($input['sub_category'], 'name', new SubCategory()) : null;

        $topic = Topic::create($input);

        return $this->sendResponse($topic, 'Topic created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $topic = Topic::with(['subCategory','contents'])->where('name','=',$id)->first();

        if (is_null($topic)) {
            return $this->sendError('Topic not found.');
        }
        return $this->sendResponse($topic, 'Topic retrieved successfully.');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topic $topic)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'label' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $topic->name = Str::slug($input['label']);
        $topic->label = $input['label'];
        $topic->sub_category_id = $this->columnToId($input['sub_category'], 'name', new SubCategory()) ? $this->columnToId($input['sub_category'], 'name', new SubCategory()) : null;
        $topic->save();

        return $this->sendResponse($topic, 'Topic updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topic $topic)
    {
        $topic->delete();

        return $this->sendResponse([], 'Topic deleted successfully.');
    }
}

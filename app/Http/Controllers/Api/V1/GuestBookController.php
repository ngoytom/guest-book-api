<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\GuestBook;
use App\Http\Requests\V1\StoreGuestBookRequest;
use App\Http\Requests\V1\UpdateGuestBookRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\GuestBookResource;
use App\Http\Resources\V1\GuestBookCollection;
use Illuminate\Http\Request;
use App\Filters\V1\GuestBookFilter;

class GuestBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = new GuestBookFilter();
        $queryItems = $filter->transform($request);

        if (count($queryItems) == 0) {
            return new GuestBookCollection(GuestBook::paginate());
        } else {
            return new GuestBookCollection(GuestBook::where($queryItems)->paginate()); 
        }   
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
     * @param  \App\Http\Requests\V1\StoreGuestBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGuestBookRequest $request)
    {
        // Address headers in Postman; Accept - application/json
        return new GuestBookResource(GuestBook::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GuestBook  $guestbook
     * @return \Illuminate\Http\Response
     */
    public function show(GuestBook $guestbook)
    {
        return new GuestBookResource($guestbook);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GuestBook  $guestbook
     * @return \Illuminate\Http\Response
     */
    public function edit(GuestBook $guestbook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\V1\UpdateGuestBookRequest  $request
     * @param  \App\Models\GuestBook  $guestbook
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGuestBookRequest $request, GuestBook $guestbook)
    {
        $guestbook->update($request->all());

        return[
            'status'=>1,
            'data'=>$guestbook,
            'msg'=>'Entry updated successfully!'
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GuestBook  $guestbook
     * @return \Illuminate\Http\Response
     */
    public function destroy(GuestBook $guestbook)
    {
        $guestbook->delete();

        return[
            'status'=>1,
            'data'=>$guestbook,
            'msg'=>'Entry deleted successfully!'
        ];
    }
}

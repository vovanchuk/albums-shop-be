<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlbumStoreRequest;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        $data = Album::where('user_id', Auth::id())->get();

        $json = $data->toJson();
        return new Response($json);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AlbumStoreRequest $request
     * @return Response
     */
    public function store(AlbumStoreRequest $request): Response
    {
        $albumModel = new Album();

        $file = $request->file('file');
        $userId = Auth::id();
        $fileName = 'album_' . $userId . '_' . time() . '.pdf';
        $filePath = $file->storeAs('uploads', $fileName, 'public');
        $albumModel->path = '/storage/' . $filePath;
        $albumModel->user_id = $userId;
        $albumModel->save();

        return new Response('Success', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return Response
     */
    public function show(Album $album)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Album  $album
     * @return Response
     */
    public function update(Request $request, Album $album)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Album  $album
     * @return Response
     */
    public function destroy(Album $album)
    {
        //
    }
}

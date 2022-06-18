<?php

namespace App\Http\Controllers\Api;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(10);
        // if($articles){
        //     return ArticleResource::collection($articles)->response();
        // }
        
        if($articles){
            return response()->json([
                'status' =>[
                    'code' => 200,
                    'message' => 'Berhasil menampilkan semua article. (OK)',
                ],
                'data' => ArticleResource::collection($articles),
            ]);
        } else {
            return response()->json([
                'status' =>[
                    'code' => 204,
                    'message' => 'Gagal menampilkan semua article. (No Content)',
                ],
                'data' => NULL,
            ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'title' => 'required',
            'photo' => 'string',
            'body' => 'required',
        ]);

        $request->slug = str()->of($request->title)->slug('-');

        $store = Article::create([
            'user_id' => $request->user_id,
            'slug' => $request->slug,
            'title' => $request->title,
            'photo' => $request->photo,
            'body' => $request->body,
        ]);
        $articles = Article::where('slug', $request->slug)->get();
        if($store){
            return response()->json([
                'status' =>[
                    'code' => 201,
                    'message' => 'Article berhasil ditambahkan.',
                ],
                'data' => ArticleResource::collection($articles),
            ]);
        } else {
            return response()->json([
                'status' =>[
                    'code' => 400,
                    'message' => 'Article gagal ditambahkan.',
                ],
                'data' => NULL,
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articles = Article::where('id', $id)->get();
        return ArticleResource::collection($articles)->response();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required',
            'title' => 'required',
            'photo' => 'string',
            'body' => 'required',
        ]);

        $article = Article::where('id', $id)->firstOrFail();
        $data = $request->all();
        $data['slug'] = str()->of($request['title'])->slug('-');
        $article->update($data);

        $articles = Article::where('id', $id);
        return response()->json([
            'status' =>[
                'code' => 200,
                'message' => 'Article berhasil diperbarui.',
            ],
            'data' => ArticleResource::collection($articles->get()),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);

        $data = $article->get();

        $article->delete();

        return response()->json([
            'status' =>[
                'code' => 200,
                'message' => 'Article berhasil dihapus.',
            ],
            'data' => ArticleResource::collection($data),
        ]);    }

    /**
     * Show user article
     * @param int $id
     */
    public function userArticles($id)
    {
        $articles = Article::where('user_id', $id)->get();
        // return ArticleResource::collection($articles)->response();
        return response()->json([
            'status' =>[
                'code' => 200,
                'message' => 'Berhasil menampilkan article dari id: '. $id .' (OK)',
            ],
            'data' => ArticleResource::collection($articles)->response(),
        ]);
    }
}

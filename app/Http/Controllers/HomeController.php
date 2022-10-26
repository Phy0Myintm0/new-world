<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

// use Artesaos\SEOTools\Facades\SEOTools;

class HomeController extends Controller
{
    public function index()
    {
        $data['test'] = 'test';
        // --------- seo ------------
        // SEOTools::setTitle('Home');
        // SEOTools::setDescription('This is my page description');
        // SEOTools::opengraph()->setUrl('http://current.url.com');
        // SEOTools::setCanonical('https://codecasts.com.br/lesson');
        // SEOTools::opengraph()->addProperty('type', 'articles');
        // SEOTools::twitter()->setSite('@zeneight');
        // SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');
        // --------------------------

        $data['keywords'] = DB::table('keywords')
            ->select('title_en', 'title_jp', 'slug')
            // ->limit(4)
            ->orderBy('id', 'asc')
            ->get();

        $data['actions'] = DB::table('actions')
            ->select('title_en', 'title_jp', 'img', 'slug')
            // ->limit(4)
            ->orderBy('id', 'asc')
            ->get();

        // $data['blog'] = DB::table('posts')
        //     ->join(
        //         'categories',
        //         'posts.cat_id',
        //         '=',
        //         'categories.id'
        //     )
        //     ->select('posts.title', 'posts.id', 'slug', 'img', 'created_at', 'categories.title as cat')
        //     ->limit(3)
        //     ->orderBy('id', 'desc')
        //     ->get();

        return view('front.home')
        ->with('data', $data);
    }

    public function action($slug)
    {
        $data['test'] = 'test';

        $data['data'] = DB::table('actions')
            ->select('*')
            ->where('slug', $slug)
            ->first();

        $data['activities'] = DB::table('activities')
            ->select('*')
            ->where('id_action', $data['data']->id)
            ->get();

        

        // --------- seo ------------
        // SEOTools::setTitle($data['data']->title);
        // --------------------------

        return view('front.action')
        ->with('data', $data);
    }

    public function blog()
    {
        $data['test'] = 'test';
        $data['footer_menu'] = DB::table('packages')
            ->select('id', 'slug', 'title', 'price')
            ->limit(6)
            ->orderBy('id', 'asc')
            ->get();
            
        $data['data'] = DB::table('posts')
            ->join(
                'categories',
                'posts.cat_id',
                '=',
                'categories.id'
            )
            ->select('posts.title', 'posts.id', 'slug', 'img', 'created_at', 'categories.title as cat')
            ->orderBy('id', 'desc')
            ->get();
        
        // --------- seo ------------
        // SEOTools::setTitle('Blog');
        // --------------------------

        return view('front.blog')
        ->with('data', $data);
    }

    public function post($slug)
    {
        $data['test'] = 'test';
        $data['footer_menu'] = DB::table('packages')
            ->select('id', 'slug', 'title', 'price')
            ->limit(6)
            ->orderBy('id', 'asc')
            ->get();
            

        $data['data'] = DB::table('posts')
            ->join(
                'categories',
                'posts.cat_id',
                '=',
                'categories.id'
            )
            ->select('posts.*', 'categories.title as cat')
            ->where('slug', $slug)
            ->first();

        $data['recents'] = DB::table('posts')
            ->select('title', 'created_at', 'slug', 'img')
            ->where('slug', '<>', $slug)
            ->get();

        $data['categories'] = DB::table('categories')
            ->select('title', 'id')
            ->limit(6)
            ->orderBy('id', 'asc')
            ->get();

        // --------- seo ------------
        // SEOTools::setTitle($data['data']->title);
        // --------------------------

        return view('front.post')
        ->with('data', $data);
    }

    public function apiGraph(Request $request){
        $data = array();

        $survei = DB::table('surveis')
        ->join(
            'pedagangs',
            'surveis.pedagang_id',
            '=',
            'pedagangs.id'
        )
        ->join(
            'pangans',
            'surveis.pangan_id',
            '=',
            'pangans.id'
        )
        ->select(DB::raw('sum('.$request->tipe.') as persediaan'), 'pedagangs.nama')
        ->where('pangans.id', $request->pangan_id)
        ->whereBetween('surveis.tgl_input', [$request->tgl_awal, $request->tgl_akhir])
        ->groupBy('pedagangs.nama')
        ->get();

        $pangan = DB::table('pangans')
        ->select('nama_pangan', 'satuan')
        ->where('id', $request->pangan_id)
        ->first();

        $data['pangan'] = $pangan->nama_pangan;
        $data['satuan'] = $pangan->satuan;

        foreach($survei as $item) {
            $data['survei'][] = $item->persediaan;
            $data['pedagang'][] = $item->nama;
        }

		return response()->json($data);
	}
}
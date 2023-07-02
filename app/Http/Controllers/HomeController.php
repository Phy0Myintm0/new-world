<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

// use Artesaos\SEOTools\Facades\SEOTools;

class HomeController extends Controller
{
	protected $navbar = [];

	public function __construct()
	{
		$this->navbar['nav_country'] = DB::table('countries')
			->select('slug', 'title', 'logo')
			->get();
		
		$this->navbar['foot_keyword'] = DB::table('keywords')
			->select('slug', 'title_en')
			->get();
	
	}

	public function index()
	{
		$data['test'] = 'test';
		$data['nav_footer'] = $this->navbar;
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
			->select('title_en', 'desc_en', 'img', 'slug')
			// ->limit(4)
			->orderBy('id', 'asc')
			->get();

		$data['gallery'] = DB::table('galleries')
            ->select('img', 'title')
            // ->limit(13)
			->inRandomOrder()
            ->orderBy('id', 'desc')
            ->get();

		$data['story'] = DB::table('stories')
			->join(
				'countries',
				'stories.country_id',
				'=',
				'countries.id'
			)
			->select(
				'stories.title', 
				'stories.id', 
				'stories.slug', 
				'img_header', 
				'caption_desc', 
				'stories.created_at', 
				'countries.title as country_title'
			)
			->limit(3)
			->orderBy('id', 'desc')
			->get();

		return view('front.home')
		->with('data', $data);
	}

	public function action($slug)
	{
		$data['test'] = 'test';
		$data['nav_footer'] = $this->navbar;

		$data['data'] = DB::table('actions')
			->select('*')
			->where('slug', $slug)
			->first();

		$data['activities'] = DB::table('activities')
			->join(
				'countries',
				'activities.id_country',
				'=',
				'countries.id'
			)
			->select(
				'activities.title_en',
				'activities.desc_en',
				'activities.photo_cover',
				'activities.slug',
				'countries.logo'
			)
			->where('id_action', $data['data']->id)
			->get();

		

		// --------- seo ------------
		// SEOTools::setTitle($data['data']->title);
		// --------------------------

		return view('front.action')
		->with('data', $data);
	}

	public function keyword($slug)
	{
		$data['test'] = 'test';
		$data['nav_footer'] = $this->navbar;

		$data['data'] = DB::table('keywords')
			->select('*')
			->where('slug', $slug)
			->first();

		$data['activities'] = DB::table('activities')
			->join(
				'actions',
				'activities.id_action',
				'=',
				'actions.id'
			)
			->join(
				'countries',
				'activities.id_country',
				'=',
				'countries.id'
			)
			->join(
				'keyword_activities',
				'activities.id',
				'=',
				'keyword_activities.id_activity'
			)
			->select('activities.*', 'actions.title_en as actionnya', 'actions.slug as action_slug', 'countries.title as country')
			->where('keyword_activities.id_keyword', $data['data']->id)
			->get();

		

		// --------- seo ------------
		// SEOTools::setTitle($data['data']->title);
		// --------------------------

		return view('front.keyword')
		->with('data', $data);
	}

	public function activity($slug)
	{
		$data['test'] = 'test';
		$data['nav_footer'] = $this->navbar;

		$data['data'] = DB::table('activities')
			->join(
				'keyword_activities',
				'activities.id',
				'=',
				'keyword_activities.id_activity'
			)
			->join(
				'keywords',
				'keyword_activities.id_keyword',
				'=',
				'keywords.id'
			)
			->join(
				'countries',
				'activities.id_country',
				'=',
				'countries.id'
			)
			->join(
				'actions',
				'activities.id_action',
				'=',
				'actions.id'
			)
			->select(
				'activities.*', 
				'actions.slug as action_slug',
				'actions.title_en as action_en',
				'countries.title as country_title'
			)
			->where('activities.slug', $slug)
			->first();
		
		// links
		$data['links'] = DB::table('links')
			->select('*')
			->where('id_activity', $data['data']->id)
			->get();

		$data['gallery'] = DB::table('galleries')
            ->select('img', 'title')
            ->limit(3)
			->where('act_id', $data['data']->id)
			->inRandomOrder()
            ->orderBy('id', 'desc')
            ->get();

		// --------- seo ------------
		// SEOTools::setTitle($data['data']->title);
		// --------------------------

		return view('front.activity')
		->with('data', $data);
	}

	public function about()
	{
		$data['test'] = 'test';
		$data['nav_footer'] = $this->navbar;

		// --------- seo ------------
		// SEOTools::setTitle($data['data']->title);
		// --------------------------

		return view('front.about')
		->with('data', $data);
	}

	public function contact()
	{
		$data['test'] = 'test';
		$data['nav_footer'] = $this->navbar;

		// --------- seo ------------
		// SEOTools::setTitle($data['data']->title);
		// --------------------------

		return view('front.contact')
		->with('data', $data);
	}

	public function blog()
	{
		$data['test'] = 'test';
		$data['nav_footer'] = $this->navbar;

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

	public function story($slug)
	{
		$data['test'] = 'test';
		$data['nav_footer'] = $this->navbar;
		
		$data['data'] = DB::table('stories')
			->join(
				'countries',
				'stories.country_id',
				'=',
				'countries.id'
			)
			->join(
				'cms_users',
				'stories.user_id',
				'=',
				'cms_users.id'
			)
			->select('stories.*', 'countries.title as country_title', 'countries.slug as country_slug', 'cms_users.name')
			->where('stories.slug', $slug)
			->first();

		$data['recents'] = DB::table('stories')
			->select('title', 'created_at', 'slug', 'img_header')
			->where('slug', '<>', $slug)
			->inRandomOrder()
			->get();

		$data['countries'] = DB::table('countries')
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

	public function countries($slug)
	{
		$data['test'] = 'test';
		$data['nav_footer'] = $this->navbar;

		$data['data'] = DB::table('countries')
			->select('*')
			->where('slug', $slug)
			->first();

		$data['activity'] = DB::table('activities')
			->join(
				'actions',
				'activities.id_action',
				'=',
				'actions.id'
			)
			->join(
				'countries',
				'activities.id_country',
				'=',
				'countries.id'
			)
			->join(
				'keyword_activities',
				'activities.id',
				'=',
				'keyword_activities.id_activity'
			)
			->select('activities.*', 'actions.title_en as actionnya', 'actions.slug as action_slug', 'countries.title as country')
			->where('activities.id_country', $data['data']->id)
			->get();

		$data['sns'] = DB::table('sns')
			->select('*')
			// ->limit(4)
			->orderBy('id', 'asc')
			->where('country_id', $data['data']->id)
			->get();

		$data['actions'] = DB::table('actions')
			->select('title_en', 'title_jp', 'img', 'slug')
			// ->limit(4)
			->orderBy('id', 'asc')
			->get();

		$data['story'] = DB::table('stories')
			->join(
				'countries',
				'stories.country_id',
				'=',
				'countries.id'
			)
			->join(
				'cms_users',
				'stories.user_id',
				'=',
				'cms_users.id'
			)
			->select(
				'stories.title', 
				'stories.id', 
				'stories.slug', 
				'img_header', 
				'caption_desc', 
				'stories.created_at', 
				'countries.title as country_title',
				'cms_users.name'
			)
			->limit(3)
			->where('country_id', $data['data']->id)
			->orderBy('id', 'desc')
			->get();

		$data['gallery'] = DB::table('galleries')
            ->select('img', 'title')
            ->limit(13)
			->where('country_id', $data['data']->id)
			->inRandomOrder()
            ->orderBy('id', 'desc')
            ->get();

		

		// --------- seo ------------
		// SEOTools::setTitle($data['data']->title);
		// --------------------------

		return view('front.countries')
		->with('data', $data);
	}

	public function apiCountries(){
		$data = array();

		// $survei = DB::table('surveis')
		// ->join(
		//     'pedagangs',
		//     'surveis.pedagang_id',
		//     '=',
		//     'pedagangs.id'
		// )
		// ->join(
		//     'pangans',
		//     'surveis.pangan_id',
		//     '=',
		//     'pangans.id'
		// )
		// ->select(DB::raw('sum('.$request->tipe.') as persediaan'), 'pedagangs.nama')
		// ->where('pangans.id', $request->pangan_id)
		// ->whereBetween('surveis.tgl_input', [$request->tgl_awal, $request->tgl_akhir])
		// ->groupBy('pedagangs.nama')
		// ->get();

		$countries = DB::table('countries')
		->get();

		$data['list'] = $countries;

		// foreach($survei as $item) {
		//     $data['survei'][] = $item->persediaan;
		//     $data['pedagang'][] = $item->nama;
		// }

		return response()->json($data);
	}
}
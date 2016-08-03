<?php

	namespace App\Http\Controllers\News;

	use App\Repositories\Contracts\NewsRepository;
	use Illuminate\Http\Request;

	use App\Http\Requests;
	use App\Http\Controllers\Controller;

	/**
	 * Class NewsController
	 * @package App\Http\Controllers\News
	 */
	class NewsController extends Controller
	{
		/**
		 * @var NewsRepository
		 */
		protected $news;

		/**
		 * NewsController constructor.
		 *
		 * @param NewsRepository $news
		 */
		public function __construct(NewsRepository $news)
		{
			$this->news = $news;
		}

		/**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function index()
		{
			$news = $this->news->paginate();
			return view('news.index', compact('news'));
		}

		/**
		 * Show the form for creating a new resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function create()
		{
			return $this->news->showForm();
		}

		/**
		 * Store a newly created resource in storage.
		 *
		 * @param  \Illuminate\Http\Request $request
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function store(Request $request)
		{
			$this->news->create($request->all()+['user_id'=>auth()->user()->id]);
			return redirect(route('news.index'))->with('status', 'News Created');
		}

		/**
		 * Display the specified resource.
		 *
		 * @param  int $id
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function show($id)
		{
			$news = $this->news->find($id);
			return view('news.show', compact('news'));
		}

		/**
		 * Show the form for editing the specified resource.
		 *
		 * @param  int $id
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function edit($id)
		{
			$news = $this->news->find($id);
			return view('news.form', compact('news'));
		}

		/**
		 * Update the specified resource in storage.
		 *
		 * @param  \Illuminate\Http\Request $request
		 * @param  int $id
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function update(Request $request, $id)
		{
			$this->news->update($request->all(),$id);
			return redirect(route('news.index'))->with('status', 'News Updated');

		}

		/**
		 * Remove the specified resource from storage.
		 *
		 * @param  int $id
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function destroy($id)
		{
			$this->news->find($id)->delete();
			return redirect(route('news.index'))->with('status', 'News Deleted');
		}
	}

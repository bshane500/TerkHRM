<?php

	namespace App\Http\Controllers\News;

	use App\Repositories\Contracts\EventRepository;
	use Illuminate\Http\Request;
	use App\Http\Requests;
	use App\Http\Controllers\Controller;

	/**
	 * Class EventController
	 * @package App\Http\Controllers\News
	 */
	class EventController extends Controller
	{
		/**
		 * @var EventRepository
		 */
		protected $event;

		/**
		 * EventController constructor.
		 *
		 * @param EventRepository| $eventService
		 */
		public function __construct(EventRepository $eventService)
		{

			$this->event = $eventService;
		}

		/**
		 * Display a listing of the resource |Events.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function index()
		{
			$events = $this->event->paginate();
			return view('event.index', compact('events'));
		}

		/**
		 * Show the form for creating a new resource.
		 *param EventRepositoryEloquent $event
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function create()
		{
			return $this->event->showForm();
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
			$this->event->create($request->all());
			return redirect(route('events.index'))->with('status', 'Event Created');
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
			$event = $this->event->find($id);
			return view('event.form', compact('event'));
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
			$this->event->update($request->all(),$id);
			return redirect(route('events.index'))->with('status', 'Event Updated');
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
			$this->event->delete($id);
			return redirect(route('event.index'))->with('status', 'Event Deleted');
		}
	}

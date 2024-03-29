<?php

	namespace App\Http\Controllers;

	use App\Models\Menuset;
	use App\Models\Titleset;
	use Illuminate\Http\Request;

	class HomeController extends Controller
	{
		/**
		 * Create a new controller instance.
		 *
		 * @return void
		 */
		public function __construct()
		{
			$this->middleware('auth');
		}

		/**
		 * Show the application dashboard.
		 *
		 * @return \Illuminate\Contracts\Support\Renderable
		 */
		public function index()
		{
			return view('dashboard', ['data' => Menuset::all(),'title'=>Titleset::all()]);
		}
	}

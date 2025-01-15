<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use App\Models\Income;
use App\Models\Ticket;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\Aparatur;
use App\Models\Statistik;
use App\Models\Destination;
use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        $destinations = Destination::all()->take(3);
        $tickets = Ticket::all()->take(3);
        $aparatur = Aparatur::all();
        $news = News::latest()->take(3)->get();
        $products = Product::latest()->take(3)->get();
        return view('landing', compact('destinations', 'tickets', 'aparatur', 'news', 'products'));
    }
    public function login()
    {
        return view('login');
    }
    public function loginPost(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->level == 'admin') {

                Session::put('user_id', Crypt::encrypt(Auth::user()->id));
                return redirect('/admin/dashboard');
            } elseif (Auth::user()->level == 'user') {
                return redirect()->intended('/');
            }
        }

        return redirect('/login')->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    public function register()
    {
        return view('register');
    }
    public function registerPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'level' => 'user',
            'password' => Hash::make($request->password),
        ]);
        return redirect('/login')->with('success', 'Register berhasil, silahkan login');
    }

    // Destination
    public function destination()
    {
        $destination = Destination::all();
        return view('destination', compact('destination'));
    }

    public function destinationDetail($slug)
    {
        $destination = Destination::where('slug', $slug)->first();
        return view('destination-detail', compact('destination'));
    }

    // Article
    public function news()
    {
        $news = News::all();
        return view('news', compact('news'));
    }

    public function newsDetail($slug)
    {
        $news = News::where('slug', $slug)->first();
        return view('newsDetail', compact('news'));
    }

    // Galery
    public function gallery()
    {
        $vidio = Gallery::where('type', 'video')->get();
        $image = Gallery::where('type', 'image')->get();
        return view('gallery', compact('vidio', 'image'));
    }

    // Product
    public function product()
    {
        $product = Product::all();
        return view('product', compact('product'));
    }
    public function productShow($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('product-detail', compact('product'));
    }

    // Facility
    public function facility()
    {
        $facility = Facility::all();
        return view('facility', compact('facility'));
    }
    public function facilityDetail($slug)
    {
        $facility = Facility::where('slug', $slug)->first();
        return view('facility-detail', compact('facility'));
    }

    // views
    public function views()
    {
        return view('views');
    }

    public function contact()
    {
        return view('contact');
    }

    public function ticket()
    {
        $tickets = Ticket::all();
        return view('ticket', compact('tickets'));
    }

    // Sejarah
    public function sejarah()
    {
        return view('sejarah');
    }

    // Statistik
    public function statistik()
    {
        $statistik = Statistik::all();
        $tahun = Statistik::select('tahun')->distinct()->get();

        // income
        $incomes = Income::all();
        $income_tahun = Income::select('tahun')->distinct()->get();
        return view('statistik', compact('statistik', 'tahun', 'incomes', 'income_tahun'));
    }
    public function statistikTahunPost(Request $request)
    {
        $tahun = $request->tahun;
        return redirect()->route('landing.statistik.tahun', $tahun);
    }

    public function statistikTahun($tahun)
    {
        $statistik = Statistik::where('tahun', $tahun)->get();
        $incomes = Income::where('tahun', $tahun)->get();
        $tahun = $tahun;
        $tahunList = Statistik::select('tahun')->distinct()->get();
        return view('statistik-tahun', compact('statistik', 'incomes', 'tahun', 'tahunList'));
    }

    public function ticketShow($name)
{
    $ticket = Ticket::find($name);

    if (!$ticket) {
        return redirect('/ticket')->withErrors('Tiket tidak ditemukan.');
    }

    return view('ticket-detail', compact('ticket'));
}
}

<?php

namespace App\Http\Controllers;

use App\Models\admin\Gents;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\returnValue;
use function Psr\Log\alert;

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
        $user = User::all();
        $user = Auth::user();
        if ($user->role == 'admin')
        {

            return view('home');
        }
//        elseif (Auth::user()->action == "block"){
//
//            Auth::logout();
//              return  redirect()->route('login')->with(['success'=>'user Blocked ']);
//
//
//        }
        else
        {

            $men_dress = Gents::where('category','shirts')->first();
            $female_dress = Gents::where('gender','female')->first();
            $child_dress = Gents::where('gender','child')->first();
            $shoes = Gents::where('category','Shoes')->first();
            $jacket = Gents::where('category','Jackets')->first();
            $blazer = Gents::where('category','Blazers')->first();
            $trandy = Gents::all();
            $like_unlike = Gents::all();
            return view('user_dashboard',compact('trandy','like_unlike','shoes','men_dress','female_dress','blazer','child_dress','jacket'));
        }


    }

    public  function shop(){
        $shop = Gents::paginate(9);
        return view('shop',compact('shop'));
    }


    public  function cart(){
        return view('cart');
    }

    public  function checkout(){
        return view('checkout');
    }

    public  function contact(){
        return view('contact');
    }

    public function men_show(){
        $men_dress = Gents::where('category','=','Shirts')->paginate(6);
        return view('user.dress.men_dress',compact('men_dress'));
    }

    public function women_show(){
        $women_dress = Gents::where('category','=','dress')->paginate(6);
        return view('user.dress.women_dress',compact('women_dress'));
    }

    public function child_show(){
        $child_dress = Gents::where('gender','=','child')->paginate(6);
        return view('user.dress.child_dress',compact('child_dress'));
    }

    public function shirt(){
        $shirt = Gents::where('category','=','Shirts')->paginate(6);
        return view('user.dress.shirt',compact('shirt'));
    }

    public function jeans(){
        $jeans = Gents::where('category','=','Jeans')->paginate(6);
        return view('user.dress.jeans',compact('jeans'));
    }

    public function shoes(){
        $shoes = Gents::where('category','=','Shoes')->paginate(6);
        return view('user.dress.shoes',compact('shoes'));
    }

    public function shop_detail($id){
        $detail = Gents::find($id);
        $detail_all = Gents::all();
        return view('detail',compact('detail','detail_all'));
    }

    public function add_cart($id){
        $add_cart = Gents::find($id);
        return view('cart',compact('add_cart'));
    }

    public function jacket(){
        $jacket = Gents::where('category','=','Jackets')->paginate();
        return view('user.dress.jacket',compact('jacket'));
    }

    public function blazer(){
        $blazer = Gents::where('category','=','Blazers')->paginate(9);
        return view('user.dress.blazer',compact('blazer'));
    }

    public function jumpsuit()
    {
        $jumpsuit = Gents::where('category', '=', 'Jumpsuits')->paginate(6);
        return view('user.dress.jumpsuit', compact('jumpsuit'));
    }

    public function sportswear()
    {
        $sportswear = Gents::where('category', '=', 'Sportswear')->paginate(6);
        return view('user.dress.sportswear', compact('sportswear'));
    }

   public function price_product(Request $request)
   {
           $array = $request->arr[0];
           $array1 = explode('-',$array);
//           $array = collect($array1)->toArray();
//       dd($array1);
//       \DB::enableQueryLog();
       $f=(int)$array1[0];
       $s=(int)$array1[1];
//dd($f,$s);
       $blazer  = Gents::where('category', '=', 'Blazers')->whereBetween('product_price', [$f,$s])->get();
//       dd( Gents::where('category', '=', 'Blazers')->whereBetween('product_price',[$array1[0],$array1[1]])->get());
//           $blazer = Gents::where('category', '=', 'Blazers')->where('product_price','>=',[$array1[0]])->where('product_price','<=',[$array1[1]])->get();
//       dd(\DB::getQueryLog());
//       dd($blazer);
           if (count($blazer) == 0) {
               $html = '';
           } else {
               $view = view('user.dress.blazer_copy', compact('blazer'));
               $html = $view->render();
           }
           return response()->json(['html' => $html, 'resultCount' => count($blazer)]);

           }



    public  function color(Request $request){

        $array = $request->arr[0];
        $array1 = explode('-',$array);
        $array = collect($array1)->toArray();

        $blazer = Gents::where('category','=','Blazers')->whereIn('color', $array)->get();
//       dd($blazer);
        if (count($blazer) == 0) {
            $html = '';
        } else {
            $view = view('user.dress.blazer_copy', compact('blazer'));
            $html = $view->render();
        }
        return response()->json(['html' => $html, 'resultCount' => count($blazer)]);

    }

    public  function size(Request $request){

        $array = $request->arr[0];
        $array1 = explode('-',$array);
        $array = collect($array1)->toArray();

        $blazer = Gents::where('category','=','Blazers')->whereIn('product_size', $array)->get();
//       dd($blazer);
        if (count($blazer) == 0) {
            $html = '';
        } else {
            $view = view('user.dress.blazer_copy', compact('blazer'));
            $html = $view->render();
        }
        return response()->json(['html' => $html, 'resultCount' => count($blazer)]);

    }


   public function product_search(Request $request)
   {

       $search = $request['search'];
       $products = Gents::where('product_name','LIKE','%'.$search.'%')->orwhere('gender','LIKE','%'.$search.'%')->orwhere('category','LIKE','%'.$search.'%')->orwhere('category','LIKE','%'.$search.'%')->get();
       return view('user.dress.search',compact('products'));

//       $name = $request['search'];
//
//       $products = DB::table('gents')
//           ->where('category' ,'=', 'Blazers')
//           ->where(function($query) use ($name){
//               $query->where('product_name', 'LIKE', '%'.$name.'%');
//               $query->orWhere('product_price', 'LIKE', '%'.$name.'%');
//           })
//
//           ->get();
//
////       $products = Gents::where('category','Blazers')->where('product_name','LIKE','%'.$name.'%')->where('product_price','LIKE','%'.$name.'%')->get();
//       return view('user.dress.search',compact('products'));
   }

   public function shop_price(Request $request){

       $array = $request->arr[0];
       $array1 = explode('-',$array);

       $f=(int)$array1[0];
       $s=(int)$array1[1];

       $blazer  = Gents::whereBetween('product_price', [$f,$s])->get();
//      dd($blazer);
       if (count($blazer) == 0) {
           $html = '';
       } else {
           $view = view('user.dress.blazer_copy', compact('blazer'));
           $html = $view->render();
       }
       return response()->json(['html' => $html, 'resultCount' => count($blazer)]);

   }





}

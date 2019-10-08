<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\ProductProperties;
use App\Category;
use App\ImageProduct;
use App\Size;
use App\Coupon;
use \Cart;
use Session;
use App\Customer;
use App\Bills;
use App\DetailBill;
use App\Brand;
use App\User;
use Mail;
use App\UserActivation;
use App\Jobs\SendActivationMail;
use App\Jobs\SendBillInfoMail;
use App\Http\Requests\CustomerRequest;
use App\Http\Requests\UserRequest;
use App\Notifications\checkoutNoti;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    public function getLogin(){
            return view(route('get.login'));
    }
}

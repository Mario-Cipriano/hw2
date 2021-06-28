<?php
use Illuminate\Routing\Controller;
use App\Models\User;

class HomepageNoSessionController extends Controller{
public function home(){
    return view("homepage_no_session");
}
}
?>
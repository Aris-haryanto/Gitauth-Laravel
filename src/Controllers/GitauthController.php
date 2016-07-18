<?php 
namespace Arisharyanto\gitauth\Controllers;
 
use App\Http\Controllers\Controller;
use Arisharyanto\gitauth\Gitauth;

class GitauthController extends Controller {
    public function foo() {
        //return 'The controller works!';
        // return Gitauth::say();

        $page_title      = 'Hello';
	    $welcome_message = 'Hello view sompret';
	 
	    $data = compact('page_title', 'welcome_message');
	    return view('gitauth::welcome', $data);
    }
}
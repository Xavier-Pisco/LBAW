<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Report;

class HomeController extends Controller
{
    public function home() {
        if (Auth::check()) {
            if (Auth::user()->is_admin) {
                $posts = Post::where('deleted', '=', false)->orderByDesc('id')->paginate(20)->withPath('/api/more_posts');
                $reports = Report::all()->sortByDesc('id')->take(20);
                return view('pages.admin', ['posts' => $posts, 'reports' => $reports]);
            } else {
                if (Auth::user()->user->deleted == false) {
                    $links = Auth::user()->user->getLinks()->map(function($link) {
                        return $link->id;
                    });
                    $posts = Post::where('deleted', '=', false)->whereIn('user_id', $links)->where('group_id', '=', NULL)->orderByDesc('id')->paginate(20)->withPath('/api/more_posts');
                    $notifications = Auth::user()->user->notifications;
                    return view('pages.home', ['posts' => $posts, 'notifications' => $notifications]);
                } else {
                    return redirect('logout');
                }
            }
        } else {
            return redirect('login');
        }
    }
}

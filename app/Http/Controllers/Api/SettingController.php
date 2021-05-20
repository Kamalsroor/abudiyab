<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Laraeast\LaravelSettings\Facades\Settings;

class SettingController extends Controller
{
    public function index()
    {


        // $whatsapp='+'.Settings::get('whatsapp');
        return response()->json([
            'app' => [
                'name' => app_name(),
                'copyright' => app_copyright(),
                'logo' => app_logo(),
            ],
            'contacts' => [
                'facebook' => Settings::get('facebook'),
                'instagram' => Settings::get('instagram'),
                'snapchat' => Settings::get('snapchat'),
                'twitter' => Settings::get('twitter'),
                'phone' => Settings::get('phone'),
                'email' => Settings::get('email'),
                'branch_name' => Settings::get('branch_name'),
                'address' => Settings::get('address'),
                'whatsapp' => '+'.Settings::get('whatsapp'),
                'youtube' => Settings::get('youtube'),
                'linkedin' => Settings::get('linkedin'),
            ],
            'apps' => [
                'apple' => Settings::get('apple'),
                'android' => Settings::get('android'),
                'huawei' => Settings::get('huawei'),
            ],
            'pages' => [
                'about' => [
                    'link' => route('api.settings.page', ['about', 'language' => app()->getLocale()]),
                    'content' => Settings::locale()->get('about'),
                ],
                'terms' => [
                    'link' => route('api.settings.page', ['terms', 'language' => app()->getLocale()]),
                    'content' => Settings::locale()->get('terms'),
                ],
                'privacy' => [
                    'link' => route('api.settings.page', ['privacy', 'language' => app()->getLocale()]),
                    'content' => Settings::locale()->get('privacy'),
                ],
            ],
            'pusher' => [
                'app_id' => config('broadcasting.connections.pusher.app_id'),
                'app_key' => config('broadcasting.connections.pusher.key'),
                'options' => [
                    'cluster' => config('broadcasting.connections.pusher.options.cluster'),
                    'encrypted' => config('broadcasting.connections.pusher.options.encrypted'),
                    'host' => config('broadcasting.connections.pusher.options.host'),
                    'ws_port' => config('broadcasting.connections.pusher.options.port'),
                    'wss_port' => config('broadcasting.connections.pusher.options.port'),
                    'scheme' => config('broadcasting.connections.pusher.options.scheme'),
                ],
            ],
        ]);
    }

    public function page($page)
    {
        $title = trans('settings.tabs.'. $page);

        $content = Settings::locale()->get($page);

        return view('dashboard.settings.page', compact('title', 'content'));
    }
}

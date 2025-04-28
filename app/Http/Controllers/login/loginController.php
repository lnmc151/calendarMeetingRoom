<?php

namespace App\Http\Controllers\login;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class loginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }


    // public function gettokenLogn() {}

    public function store(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $client = new Client();

        try {
            $response = $client->post('https://hrm.dms.go.th/api/userhrm_apiNew/user_hrm.php', [
                'form_params' => [
                    'username' => $username,
                    'password' => $password,
                ],
                'verify' => false,
            ]);

            $body = json_decode($response->getBody(), true);

            $token = $body['token'] ?? null;

            if ($token) {
                session(['api_token' => $token]);
                session(['username' => $username]);
                return redirect()->route('home');
            } else {
                return back()->withErrors(['login_error' => 'Invalid credentials or token not found']);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['login_error' => 'Unable to get token: ' . $e->getMessage()]);
        }
    }




    public function login()
    {
        $token = session('api_token');
        $username = session('username');

        // dd($username);
        if (!$token || !$username) {
            return redirect()->route('login')->withErrors(['login_error' => 'Not logged in']);
        }
        $client = new Client();
        try {

            $response = $client->get('https://hrm.dms.go.th/api/userhrm_apiNew/query.php', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,

                ],
                'json' => [
                    'username' => $username
                ],
                'verify' => false,
            ]);

            $data = json_decode($response->getBody(), true);
            if (isset($data['data'][0])) {
                $user = $data['data'][0];
            
                session([
                    'user_id'   => $user['Id'],
                    'username'  => $user['username'],
                    'full_name' => $user['fullName'],
                    'work_group' => $user['workGroup'],
                    'status'    => $user['status'],
                    'level'     => $user['level'],
                ]);
            }
            // dd($user);
            return view('meetingroom.dashboard', ['data' => $data]);
        } catch (\Exception $e) {
            return back()->withErrors(['login_error' => 'Unable to fetch data: ' . $e->getMessage()]);
        }
    }
}

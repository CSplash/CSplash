<?php
use App\Http\Controllers\Controller;
use Socialite;
use App\User;
use Auth;

class OAuthLoginController extends Controller
{
    /**
     * 省略
     */

    /**
     * 各サイトからのコールバック
     * @param string $provider サービス名
     * @return mixed
     */
    public function handleProviderCallback($provider)
    {
        $socialUser = Socialite::driver($provider)->user();
        $user = $this->user->firstOrNew(['email' => $socialUser->getEmail()]);

        // すでに会員になっている場合の処理を書く
        // そのままログインさせてもいいかもしれない
        if ($user->exists) {
            abort(403);
        }

        $user->name = $socialUser->getNickname();
        $user->provider_id = $socialUser->getId();
        $user->provider_name = $provider;
        $user->save();

        Auth::login($user);

        return redirect()->route('/memo');
    }
}
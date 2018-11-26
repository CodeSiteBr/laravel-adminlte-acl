<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UpdateProfileformRequest;

class ProfileController extends Controller
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

    public function edit()
    {
        return view('profile.edit');
    }

    public function update(UpdateProfileformRequest $request)
    {
        $user = auth()->user();

        $data = $request->all();

        // para não alterar a senha se estiver vazia
        if (is_null($data['password'])) {
            unset($data['password']);
        } else {
            // alterar a senha somente se informar a senha atual
            if (! Hash::check($request->input('current_password'), $user->password)) {
                return redirect()
                    ->back()
                    ->with('error', 'Nova senha não alterado, senha atual está incorreta.');
            }
        }

        // alterar email somente se informar a senha atual
        if ($request->input('email') != $user->email) {
            if (! Hash::check($request->input('current_password'), $user->password)) {
                return redirect()
                    ->back()
                    ->with('error', 'E-mail não alterado, senha atual incorreta.');
            }
        }

        $data['image'] = $user->image;
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            if ($user->image) {
                $nameFile = $user->image;
            } else {
                $extenstion = $request->image->extension();
                $name = uniqid();
                $nameFile = "{$name}.{$extenstion}";
            }

            $data['image'] = $nameFile;

            $upload = $request->image->storeAs('users', $nameFile);

            if (!$upload) {
                return redirect()
                ->back()
                ->with('error', 'Falha ao fazer o upload da imagem');
            }
        }

        $update = $user->update($data);
        if ($update) {
            return redirect()
                    ->route('profile.edit')
                    ->with('success', 'Perfil atualizado com sucesso!');
        }

        return redirect()
                ->back()
                ->with('error', 'Falha ao atualizar o perfil.');
    }
}

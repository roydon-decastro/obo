<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UsersController extends Controller
{
    //
    public function index()
    {
        return view('users.index')->with('users', User::all());
    }

    public function makeAdmin(User $user)
    {
        $user->role = 'admin';

        $user->save();

        session()->flash('success', 'User made admin successfully.');

        return redirect(route('users.index'));
    }

    public function makeStaff(User $user)
    {
        $user->role = 'staff';

        $user->save();

        session()->flash('success', 'User made staff successfully.');

        return redirect(route('users.index'));
    }

    public function activateAccount(User $user)
    {
        $user->status = 'active';

        $user->save();

        session()->flash('success', 'User activated successfully.');

        return redirect(route('users.index'));
    }

    public function deactivateAccount(User $user)
    {
        $user->status = 'deactivated';

        $user->save();

        session()->flash('success', 'User deactivated successfully.');

        return redirect(route('users.index'));
    }

    public function grantBuildingAccess(User $user)
    {
        $user->building = 'granted';

        $user->save();

        session()->flash('success', 'User now has building approval access.');

        return redirect(route('users.index'));
    }

    public function revokeBuildingAccess(User $user)
    {
        $user->building = 'revoked';

        $user->save();

        session()->flash('success', 'User building approval access has been revoked successfully.');

        return redirect(route('users.index'));
    }

    public function grantCivilAccess(User $user)
    {
        $user->civil = 'granted';

        $user->save();

        session()->flash('success', 'User now has civil approval access.');

        return redirect(route('users.index'));
    }

    public function revokeCivilAccess(User $user)
    {
        $user->civil = 'revoked';

        $user->save();

        session()->flash('success', 'User civil approval access has been revoked successfully.');

        return redirect(route('users.index'));
    }

    public function grantElectricalAccess(User $user)
    {
        $user->electrical = 'granted';

        $user->save();

        session()->flash('success', 'User now has electrical approval access.');

        return redirect(route('users.index'));
    }

    public function revokeElectricalAccess(User $user)
    {
        $user->electrical = 'revoked';

        $user->save();

        session()->flash('success', 'User electrical approval access has been revoked successfully.');

        return redirect(route('users.index'));
    }

    public function grantElectronicsAccess(User $user)
    {
        $user->electronics = 'granted';

        $user->save();

        session()->flash('success', 'User now has electronics approval access.');

        return redirect(route('users.index'));
    }

    public function revokeElectronicsAccess(User $user)
    {
        $user->electronics = 'revoked';

        $user->save();

        session()->flash('success', 'User electronics approval access has been revoked successfully.');

        return redirect(route('users.index'));
    }

    public function grantMechanicalAccess(User $user)
    {
        $user->mechanical = 'granted';

        $user->save();

        session()->flash('success', 'User now has mechanical approval access.');

        return redirect(route('users.index'));
    }

    public function revokeMechanicalAccess(User $user)
    {
        $user->mechanical = 'revoked';

        $user->save();

        session()->flash('success', 'User mechanical approval access has been revoked successfully.');

        return redirect(route('users.index'));
    }

    public function grantPlumbingAccess(User $user)
    {
        $user->plumbing = 'granted';

        $user->save();

        session()->flash('success', 'User now has plumbing approval access.');

        return redirect(route('users.index'));
    }

    public function revokePlumbingAccess(User $user)
    {
        $user->plumbing = 'revoked';

        $user->save();

        session()->flash('success', 'User plumbing approval access has been revoked successfully.');

        return redirect(route('users.index'));
    }


    public function grantUpdateAccess(User $user)
    {
        $user->editaccess = 'granted';

        $user->save();

        session()->flash('success', 'User now has update approval access.');

        return redirect(route('users.index'));
    }

    public function revokeUpdateAccess(User $user)
    {
        $user->editaccess = 'revoked';

        $user->save();

        session()->flash('success', 'User update approval access has been revoked successfully.');

        return redirect(route('users.index'));
    }
}

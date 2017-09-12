<?php

namespace App\Domains\Links;

abstract class UserModel extends UserModel
{
	public static function boot()
	{
		parent::boot();
		self::saving(function($model) {
			if (empty($model->user_id)) {
				$model->setUser();
			}
		});
	}
	public function setUser()
	{
		$user = auth()->user();
		if ($user) {
			$this->user_id = $user->id;
		}
	}
}
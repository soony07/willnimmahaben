<?php
// Home

Route::get('/',
	array(
		'as' => 'home',
		'uses' => 'HomeController@showWelcome'
	)
);

// Unauthenticated group

Route::group(array('before' => 'guest'), function() {

	// CSRF protection group

	Route::group(array('before' => 'csrf'), function() {

		// Sign In post

		Route::post('account/sign-in',
			array(
				'as' => 'sign-in-post',
				'uses' => 'AccountController@postSignIn'
			)
		);

		// Sign Up post

		Route::post('account/sign-up',
			array(
				'as' => 'sign-up-post',
				'uses' => 'AccountController@postSignUp'
			)
		);

		// Forgot password post

		Route::post('account/forgot-password',
			array(
				'as' => 'forgot-password-post',
				'uses' => 'AccountController@postForgotPassword'
			)
		);

	});

	// Sign In

	Route::get('account/sign-in',
		array(
			'as' => 'sign-in',
			'uses' => 'AccountController@getSignIn'
		)
	);

	// Sign Up

	Route::get('account/sign-up',
		array(
			'as' => 'sign-up',
			'uses' => 'AccountController@getSignUp'
		)
	);

	// Activate account

	Route::get('account/activate/{code}',
		array(
			'as' => 'activate-account',
			'uses' => 'AccountController@getActivateAccount'
		)
	);

	// Forgot password

	Route::get('account/forgot-password',
		array(
			'as' => 'forgot-password',
			'uses' => 'AccountController@getForgotPassword'
		)
	);

	// Activate temporary password

	Route::get('account/forgot-password/{user}/{code}',
		array(
			'as' => 'forgot-password-activate',
			'uses' => 'AccountController@getForgotPasswordActivate'
		)
	);
});

// Authenticated group

Route::group(array('before' => 'auth'), function() {

	// CSRF protection group

	Route::group(array('before' => 'csrf'), function() {

		// Change password post

		Route::post('account/change-password',
			array(
				'as' => 'change-password-post',
				'uses' => 'AccountController@postChangePassword'
			)
		);

	});

	// Sign Out

	Route::get('account/sign-out',
		array (
			'as' => 'sign-out',
			'uses' => 'AccountController@getSignOut'
		)
	);

	// Change password

	Route::get('account/change-password',
		array(
			'as' => 'change-password',
			'uses' => 'AccountController@getChangePassword'
		)
	);
	
});
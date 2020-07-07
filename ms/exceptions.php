<?php

return array (
  'backend' => 
  array (
    'access' => 
    array (
      'roles' => 
      array (
        'cant_delete_admin' => 'Anda tidak boleh menghapus peranan Pentadbir.',
        'needs_permission' => 'Anda mesti memilih sekurang-kurangnya satu kebenaran untuk peranan ini.',
        'create_error' => 'Terdapat masalah semasa membuat peranan ini. Sila cuba lagi.',
        'update_error' => 'Terdapat masalah semasa mengemas kini peranan ini. Sila cuba lagi.',
        'already_exists' => 'Peranan itu sudah ada. Sila pilih nama lain.',
        'delete_error' => 'Terdapat masalah semasa menghapus peranan ini. Sila cuba lagi.',
        'has_users' => 'Anda tidak dapat menghapus peranan dengan pengguna yang berkaitan.',
        'not_found' => 'Peranan itu tidak ada.',
      ),
      'users' => 
      array (
        'already_confirmed' => 'Pengguna ini sudah disahkan.',
        'cant_delete_own_session' => 'Anda tidak dapat menghapus sesi anda sendiri.',
        'session_wrong_driver' => 'Pemacu sesi anda mesti ditetapkan ke pangkalan data untuk menggunakan ciri ini.',
        'social_delete_error' => 'Terdapat masalah membuang akaun sosial dari pengguna.',
        'role_needed_create' => 'Anda mesti memilih sekurang-kurangnya satu peranan.',
        'create_error' => 'Terdapat masalah untuk cipta pengguna ini. Sila cuba lagi.',
        'update_error' => 'Terdapat masalah kemaskini pengguna ini. Sila cuba lagi.',
        'update_password_error' => 'Terdapat masalah untuk menukar kata laluan pengguna ini. Sila cuba lagi.',
        'cant_deactivate_self' => 'Anda tidak boleh berbuat demikian pada diri sendiri.',
        'mark_error' => 'Terdapat masalah untuk mengemas kini pengguna ini. Sila cuba lagi.',
        'cant_confirm' => 'Terdapat masalah untuk mengesahkan akaun pengguna.',
        'not_confirmed' => 'Pengguna ini tidak disahkan.',
        'cant_unconfirm_admin' => 'Anda tidak dapat mengesahkan super administrator.',
        'cant_unconfirm_self' => 'Anda tidak boleh mengesahkan sendiri.',
        'delete_first' => 'Pengguna ini mesti dihapuskan terlebih dahulu sebelum dapat dihancurkan secara kekal.',
        'delete_error' => 'Terdapat masalah untuk menghapus pengguna ini. Sila cuba lagi.',
        'cant_restore' => 'Pengguna ini tidak dipadamkan sehingga tidak dapat dipulihkan.',
        'restore_error' => 'Terdapat masalah memulihkan pengguna ini. Sila cuba lagi.',
        'email_error' => 'Alamat e-mel itu adalah milik pengguna yang berbeza.',
        'not_found' => 'Pengguna itu tidak ada.',
        'cant_delete_admin' => 'Anda tidak boleh menghapus super administrator.',
        'cant_delete_self' => 'Anda tidak boleh memadamkan diri anda.',
        'role_needed' => 'Anda mesti memilih sekurang-kurangnya satu peranan.',
      ),
    ),
  ),
  'frontend' => 
  array (
    'auth' => 
    array (
      'confirmation' => 
      array (
        'success' => 'Your account has been successfully confirmed!',
        'already_confirmed' => 'Your account is already confirmed.',
        'resent' => 'A new confirmation e-mail has been sent to the address on file.',
        'pending' => 'Your account is currently pending approval.',
        'resend' => 'Your account is not confirmed. Please click the confirmation link in your e-mail, or <a href=":url">click here</a> to resend the confirmation e-mail.',
        'confirm' => 'Confirm your account!',
        'mismatch' => 'Your confirmation code does not match.',
        'created_pending' => 'Your account was successfully created and is pending approval. An e-mail will be sent when your account is approved.',
        'created_confirm' => 'Your account was successfully created. We have sent you an e-mail to confirm your account.',
        'not_found' => 'That confirmation code does not exist.',
      ),
      'deactivated' => 'Your account has been deactivated.',
      'password' => 
      array (
        'reset_problem' => 'There was a problem resetting your password. Please resend the password reset email.',
        'change_mismatch' => 'That is not your old password.',
      ),
      'email_taken' => 'That e-mail address is already taken.',
      'registration_disabled' => 'Registration is currently closed.',
    ),
  ),
);

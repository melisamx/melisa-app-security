<?php

namespace App\Security\Http\Controllers\Auth;

/**
 * Description of PasswordPolice
 *
 * @author Luis Josafat Heredia Contreras
 */
trait PasswordPolice
{
    /**
     * extract to http://stackoverflow.com/questions/2637896/php-regular-expression-for-strong-password-validation
     
         ^                                        # start of line
       (?=(?:.*[A-Z]){2,})                      # 2 upper case letters
       (?=(?:.*[a-z]){2,})                      # 2 lower case letters
       (?=(?:.*\d){2,})                         # 2 digits
       (?=(?:.*[!@#$%^&*()\-_=+{};:,<.>]){2,})  # 2 special characters
       (.{8,})                                  # length 8 or more
       $                                        # EOL
     */
    /* is necesary use array */
    protected $passwordValidation = [
        'required',
        'min:3',
        'max:30',
        'regex:/^(?=(?:.*[A-Z]){1,})(?=(?:.*[a-z]){1,})(?=(?:.*[a-z]){1,})(?=(?:.*\d){1,})(?=(?:.*[!@#$%&*()\-_=+{};:,]){1,})(.{6,})$/'
    ];
    
    protected $messagePasswordValidation = 'La contraseña no cumple con las politicas de seguridad. '
        . 'La contraseña debe contener por lo menos una mayuscula, un numero y '
        . 'un caracter especial';
    
}

<?php

namespace Models;

use Raice\Model as Model;
        
class User 
    extends Model
{

    const TABLE = 'users';
    
    public $id;
    public $role;
    public $first_name;
    public $last_name;
    public $email;
    public $image;
    public $username;
    public $password;
    
    public static function validateSignup ( $data )
    {
        
        foreach ( $data as $k => $v ) {

            $$k = strtolower(strip_tags(trim($v)));
            
        }
        
        if ( $password !== $repassword ) {
            
            \Controllers\Signup::$email = $email;
            \Controllers\Signup::$username = $username;
            \Controllers\Signup::$error = 'Введённые пароли не совпадают!';
            
        } else {
            
            $byEmail = self::getOneByField( $email, 'email' );
            $byUsername = self::getOneByField( $username, 'username' );
            
            if ( empty( $byUsername ) && empty( $byEmail ) ) {
                
                if ( strlen( $password ) < 6 ) {
                    
                    \Controllers\Signup::$email = $email;
                    \Controllers\Signup::$username = $username;
                    \Controllers\Signup::$error = 'Длина пароля должная быть не менее 6 символов!';
                    
                } else {
            
            
                    if ( !preg_match("/^[\w\d\s.,-]*$/", $username) ) {
                        
                        \Controllers\Signup::$email = $email;
                        \Controllers\Signup::$username = $username;
                        \Controllers\Signup::$error = 'Имя пользователя должно быть написано латинскими буквами!';
                        
                    } else {
                        
                        $password = sha1( 'g64%$^*&*_' . $password . 'nHGH6654$%^' );
                        
                        $sql = "'', 'user', '', '', '$email', '/assets/images/user.png', '$username', '$password'";
                        self::insert( $sql );
                        
                        $user = self::getOneByField($email, 'email');
                        
                        session_start();
                        $_SESSION['authorized'] = $user[0][id];
                        
                        $date = date("Y-m-d");
                        
                        \Models\Notifications::insert("'', 'зарегистрировался', '/user/$username', '$date', '$_SESSION[authorized]'");      
                        
                        header("Location: /dashboard");
                    
                    }
                    
                }
            
            }  elseif ( !empty( $byUsername ) ) {
                
                \Controllers\Signup::$email = $email;
                \Controllers\Signup::$username = $username;
                \Controllers\Signup::$error = 'Данное имя пользователя уже занято!';
                
            } elseif ( !empty( $byEmail ) )  {
                
                \Controllers\Signup::$email = $email;
                \Controllers\Signup::$username = $username;
                \Controllers\Signup::$error = 'Пользователь с таким адресом электронной почты уже зарегистрирован!';
                
            }
        
        }
        
        
    }
    
    public static function validateSignin ( $data )
    {
        
        foreach ( $data as $k => $v ) {

            $$k = strtolower(strip_tags(trim($v)));
            
        }
        
        $password = sha1( 'g64%$^*&*_' . $password . 'nHGH6654$%^' );

        $byEmail = self::getOneByTwoFields( $login, 'email', $password, 'password' );
        $byUsername = self::getOneByTwoFields( $login, 'username', $password, 'password' );
        
        if ( empty( $byUsername ) && empty( $byEmail ) ) {
        
            \Controllers\Signin::$login = $login;
            \Controllers\Signin::$error = 'Данные не совпадают!';
        
        }  elseif ( !empty( $byUsername ) || !empty( $byEmail ) ) {
            
            $user = self::getOneByField($login, 'email') ? self::getOneByField($login, 'email') : self::getOneByField($login, 'username');
            
            session_start();
            $_SESSION['authorized'] = $user[0][id];
            
            header("Location: /dashboard");   
            
        }
        
    }
    
    public static function isEditor( $id, $author_id )
    {
        
        session_start();
        
        $user = self::getOneById( $_SESSION['authorized'] )[0];
        
        if ( ( $author_id == $_SESSION['authorized'] ) || ( $user['role'] == 'admin' ) ) {
         
            return true;
            
        } else {
            
            return false;
            
        }
        
    }

}


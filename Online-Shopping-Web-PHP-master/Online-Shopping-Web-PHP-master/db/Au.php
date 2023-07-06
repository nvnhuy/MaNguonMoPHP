<?php
class Au
{
    public function __construct()
    {
    }
    public static function loginn($username, $pass)
    {
        if ($username == 'admin' && $pass == 'admin') {
            $_SESSION['log_detail1'] = $username;
            header('Location: index.php');
        } else {
            return 'Login Fail';
        }
    }
    public static function logoutt()
    {
        unset($_SESSION['log_detail1']);
    }

    public static function requireLoginn()
    {
        if (!isset($_SESSION['log_detail1'])) {
            return 'Bạn không được phép truy cập';
        }
        return '';
    }
}

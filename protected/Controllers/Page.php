<?php

namespace Controllers;

use Raice\Controller as Controller;
use Models\User as User;
    
class Page
    extends Controller
{
    
    
    public static $page;
    public static $user;
    public static $comments;
    
    public function index ()
    {
        
        session_start();
        
        $url = explode('/', $_SERVER['REQUEST_URI'])[1];
        
        self::$page = \Models\Page::getOneByField( $url, 'url' )[0];
        self::$page['content'] = explode("\n", self::$page['content']);
        
        
        self::$user = \Models\User::getOneById( $_SESSION['authorized'] )[0];

        if ( explode('/', $_SERVER['REQUEST_URI'])[2] == 'edit' && \Models\User::isEditor( $_SESSION['authorized'], self::$page['author_id'] ) ) {
            
            $find = array(
            '[b]$1[/b]',
            '[u]$1[/u]',
            '[i]$1[/i]',
            '[s]$1[/s]',
            '[quote]$1[/quote]',
            '[size=$1]$1[/size]',
            '[color=$1]$1[/color]',
            '[url=$1]$2[/url]',
            '[url]$1[/url]',
            '[img]$1[/img]'
            );
            
            $replace = array(
                '~\<b\>(.*?)\</b\>~s',
                '~\<span style="text-decoration:underline;"\>(.*?)\</span\>~s',
                '~\<i\>(.*?)\</i\>~s',
                '~\<del\>(.*?)\</del\>~s',
                '~\<pre\>(.*?)\</'.'pre\>~s',
                '~\<span style="font-size:(.*?)px;"\>(.*?)\</span\>~s',
                '~\<span style="color:(.*?);"\>(.*?)\</span\>~s',
                '~\<a href="(.*?)"\>(.*?)\</a\>~s',
                '~\<a href="(.*?)"\>(.*?)\</a\>~s',
                '~\<img src="(.*?)" alt="" /\>~s'
            );
            
            self::$page['content'] = preg_replace( $replace, $find, self::$page['content'] );
            
            if ( !empty( $_POST ) ) {
                
                $title = strip_tags( $_POST['title'] );
                $content = strip_tags( str_replace( '<h3>', "\n", str_replace( '<div>', "\n", $_POST['content']) ) );

                $find = array(
                    '~\[b\](.*?)\[/b\]~s',
                    '~\[u\](.*?)\[/u\]~s',
                    '~\[i\](.*?)\[/i\]~s',
                    '~\[s\](.*?)\[/s\]~s',
                    '~\[quote\](.*?)\[/quote\]~s',
                    '~\[size=(.*?)\](.*?)\[/size\]~s',
                    '~\[color=(.*?)\](.*?)\[/color\]~s',
                    '~\[url=(.*?)\](.*?)\[/url\]~s',
                    '~\[url\](.*?)\[/url\]~s',
                    '~\[img\](https?://.*?\.(?:jpg|jpeg|gif|png|bmp))\[/img\]~s'
                );
                
                $replace = array(
                    '<b>$1</b>',
                    '<span style="text-decoration:underline;">$1</span>',
                    '<i>$1</i>',
                    '<del>$1</del>',
                    '<pre>$1</'.'pre>',
                    '<span style="font-size:$1px;">$2</span>',
                    '<span style="color:$1;">$2</span>',
                    '<a href="$1">$2</a>',
                    '<a href="$1">$1</a>',
                    '<img src="$1" alt="" />'
                );
                
                $content = preg_replace( $find, $replace, $content );
                
                $date = date("Y-m-d");
                $id = $_SESSION['authorized'];
     
                \Models\Page::update("title='" . $title . "',content='" . $content . "', date='" .$date . "'", $url, 'url');  
                
                $location = '/' . $url;
                echo $location;               
                
            } else {
                
                parent::getView( 'PageEdit' );
                
            }
            
        } elseif ( explode('/', $_SERVER['REQUEST_URI'])[2] == 'delete' && \Models\User::isEditor( $_SESSION['authorized'], self::$page['author_id'] ) ) {
         
             if ( !empty( $_POST ) ) {
                    
                    $agreement = $_POST['agreement'];
                    
                    \Models\Page::delete($url, 'url');
                    \Models\Comments::delete(self::$page['id'], 'page_id');
                    unlink( __FILE__ );
                    
                } else {
                    
                    parent::getView('PageDelete');
                    
                }
            
        } elseif ( !empty(explode('/', $_SERVER['REQUEST_URI'])[2]) && !\Models\User::isEditor( $_SESSION['authorized'], self::$page['author_id'] ) ) {
            
            header("Location: /pages");
            
        } else {
            
            if ( !empty( $_POST ) ) {
                
                $comment = strip_tags( $_POST['comment'] );
                $date = date("Y-m-d");
                $author_id = $_SESSION['authorized'];
                $page_id = self::$page['id'];
                
                \Models\Comments::insert("'', '$page_id', '',  '$author_id', '$comment', '$date'");
                
                echo true;
                
            }
            
            self::$comments = \Models\Comments::getAll();
            
            parent::getView( $this->getName() );
            
        
        }
        
    }
    
}

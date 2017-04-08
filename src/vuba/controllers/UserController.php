<?php

namespace VuBan\UserController;

use Symfony\Component\HttpFoundation\JsonResponse;


class UserController
{
    protected $user;
    
    /**
     * 
     * @param type $user
     */
    public function __construct($user) {
        $this->user = $user;
    }


}

    /*
$app->POST('/users/{uid}/activities', function(Application $app, Request $request, $uid) {
            
            
            return new Response('How about implementing usac002 as a POST method ?');
            });


$app->PUT('/users/{uid}/activities', function(Application $app, Request $request, $uid) {
            
            
            return new Response('How about implementing usac003 as a PUT method ?');
            });


$app->GET('/users/{uid}/activities', function(Application $app, Request $request, $uid) {
            
            
            return new Response('How about implementing usac01 as a GET method ?');
            });


$app->DELETE('/users/{uid}', function(Application $app, Request $request, $uid) {
            
            
            return new Response('How about implementing usd004 as a DELETE method ?');
            });


$app->GET('/users/{uid}', function(Application $app, Request $request, $uid) {
            $attributes = $request->get('attributes');    
            
            return new Response('How about implementing usg001 as a GET method ?');
            });


$app->GET('/users/{uid}/profile', function(Application $app, Request $request, $uid) {
            
            
            return new Response('How about implementing usg005 as a GET method ?');
            });


$app->GET('/users', function(Application $app, Request $request) {
            $page_number = $request->get('page_number');    
            $page_size = $request->get('page_size');    
            $criteria = $request->get('criteria');    
            
            return new Response('How about implementing usls01 as a GET method ?');
            });


$app->PUT('/users/{uid}', function(Application $app, Request $request, $uid) {
            
            
            return new Response('How about implementing usp002 as a PUT method ?');
            });


$app->POST('/users/{uid}/profile', function(Application $app, Request $request, $uid) {
            
            
            return new Response('How about implementing usp006 as a POST method ?');
            });


$app->PUT('/users/{uid}/profile', function(Application $app, Request $request, $uid) {
            
            
            return new Response('How about implementing usp007 as a PUT method ?');
            });


$app->POST('/users', function(Application $app, Request $request) {
            
            
            return new Response('How about implementing uspos01 as a POST method ?');
            });


$app->GET('/users/{uid}/settings', function(Application $app, Request $request, $uid) {
            
            
            return new Response('How about implementing uss001 as a GET method ?');
            });


$app->POST('/users/{uid}/settings', function(Application $app, Request $request, $uid) {
            
            
            return new Response('How about implementing ussp002 as a POST method ?');
            });


$app->PUT('/users/{uid}/settings', function(Application $app, Request $request, $uid) {
            
            
            return new Response('How about implementing ussp007 as a PUT method ?');
            });


$app->GET('/users/{uid}/subscriptions', function(Application $app, Request $request, $uid) {
            
            
            return new Response('How about implementing ussub01 as a GET method ?');
            });
*/
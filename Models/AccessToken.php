<?php

/**
 * This file contains Access Token Class
 *
 * PHP version 7
 *
 * LICENSE: 
 * 
 * @category   Models
 * @package    Models
 * @author     Original Author Hassan Ali<hassan.laique@gmail.com>
 * @license    
 * @version    
 * @link       
 * @see        
 * @since      File available since Release 1.0.0
 * @deprecated File not yet deprecated
 */

/*
 * Place includes, constant defines and $_GLOBAL settings here.
 * Make sure they have appropriate docblocks to avoid phpDocumentor
 * construing they are documented by the page-level docblock.
 */

//**********************************************************************************************************
/**
 * User
 *
 *
 * @category   Models
 * @package    Models
 * @author     Original Author Hassan Ali<hassan.laique@gmail.com>
 * @license    
 * @version    
 * @link       
 * @see        
 * @since      File available since Release 1.0.0
 * @deprecated File not yet deprecated
 */
//**********************************************************************************************************
class AccessToken
{


    /**
     * @var string The access token for the user.  
     * This value must be kept secure, as per your agreement to the API Terms of Use.
     * 
     **/
    var $accessToken;

    /**
     * @var string $expiresIn : The number of seconds remaining, 
     * from the time it was requested, before the token will expire.  
     * Access tokens are issued with a 30 minute lifespan.  
     * You can request a new token once your previous token expires.
     * 
     * @example 3600
     **/
    var $expiresIn;




}
//**********************************************************************************************************
?>
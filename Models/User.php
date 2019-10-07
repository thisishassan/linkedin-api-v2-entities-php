<?php

/**
 * This file contains User class
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
 * Model class of t_user
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
class User
{

    /**
     * 
     *  BASIC PROFILE FEILDS ( scope : r_basicprofile)
     * 
     */



    /**
     * @var int $userId : The unique identifier for the given member. 
     * May also be referenced as the personId within a Person URN (urn:li:person:{personId}). 
     * The id is unique to your specific developer application. 
     * Any attempts to use the id with other developer applications will not succeed. 
     * 
     * @example 1
     **/
    var $userId;

    /**
     * @var string $firstName : First name of the member. 
     * Represented as a MultiLocaleString object type.
     * 
     * @example John
     **/
    var $firstName;

    /**
     * @var string $lastName : Last name of the member. 
     * Represented as a MultiLocaleString object type.
     * 
     * @example Smith
     **/
    var $lastName;

    /**
     * @var string $localizedFirstName : Localized version of the firstName field.
     * @example John
     **/
    var $localizedFirstName;

    /**
     * @var string $localizedLastName :Localized version of the lastName field.
     * @example Smith
     **/
    var $localizedLastName;

    /**
     * @var string $maidenName : Localizable maiden name of the member. 
     * Represented as a MultiLocaleString object type.
     * 
     * @example Ellen
     **/
    var $maidenName;

    /**
     * @var string $localizedMaidenName : Localized version of the maidenName field.
     * 
     * @example Ellen
     **/
    var $localizedMaidenName;

    /**
     * @var string $headline : Localizable headline of member's choosing. 
     * Represented as a MultiLocaleString object type.
     * 
     * @example Currently Looking for a Job.
     **/
    var $headline;

    /**
     * @var string $localizedHeadline : Localized version of the headline field.
     * 
     * @example Currently Looking for a Job.
     **/
    var $localizedHeadline;

    /**
     * @var string $profilePicture : Metadata about the member's picture in the profile.
     *  This will replace pictureInfo. 
     *  See Profile Picture Fields for more information.
     * 
     **/
    var $profilePicture;

    /**
     * @var string $vanityName : The vanity name of the member. 
     * Vanity name is represented as a string is used for the public profile URL: 
     * 
     *  @example www.linkedin.com/in/{vanityName}.
     * 
     **/
    var $vanityName;


}
//**********************************************************************************************************
?>
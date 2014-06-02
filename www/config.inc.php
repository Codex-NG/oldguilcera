<?php 
##################################################
#                 CONFIGURATION                  #
##################################################
# Congratulations on finding configuration file. #
# This is very simililar to config.lua as it     #
# follows same basic principles. Text in between #
# /* */ or starting with # is ignored. Text      #
# values must be 'qouted'. Logical values are    #
# true/false. All statements end with ;          #
##################################################

# Set data directory of your OT server
$cfg['dirdata'] = '.../guilcera/data/';

$cfg['house_file'] = 'world/guilcera-house.xml';

# MySQL server settings
$cfg['SQL_Server'] = 'localhost';
$cfg['SQL_User'] = 'guilcera';
$cfg['SQL_Password'] = '';
$cfg['SQL_Database'] = 'guilcera';

# Must correspond to your OTServ configuration
# Options: plain, md5, sha1
$cfg['password_type'] = 'plain';

# Not currently supported by OTServ, leave empty
$cfg['password_salt'] = '';

/*
 * Look skins/ to find out which skins you have
 * Available skins:
 * default - First skin ever created, white
 * swamp - Green skin with swamp theme
 * swamp-mini - Same as swamp.css, but with compact menu
 * dark - Dark version of default.css
 * conquest - Customized skin, renaissance theme
 * essense - Clean skin with green/blue motives
 * inferno - Darker skin with menu on the right
 * silica - Green skin, technology theme
 * Need more? Look http://otfans.net/ and
 * http://sourceforge.net/projects/nicaw-acc/files/
 */
$cfg['skin'] = 'guilcera';

# In case you want to upload skins somewhere else
$cfg['skin_url'] = 'skins/';

/*
 * Captcha is used to prevent automated software from
 * flooding server with accounts
 * GD2 PHP extension is required
 */
$cfg['use_captcha'] = true;

# Secure session will disable 'remember me' box
$cfg['secure_session'] = false;

# Seconds until session expires
$cfg['timeout_session'] = 15*60;

# Maximum number of characters on account
$cfg['maxchars'] = 10;

# Players per highscore page
$cfg['ranks_per_page'] = 50;

# This access and above will not be in highscores
$cfg['ranks_access'] = 2;

# Home page
$cfg['start_page'] = 'news.php';

# Name shown in window title
$cfg['server_name'] = ' ';

# Server ip and port for getting status. 
# In most cases localhost should be used
$cfg['server_ip'] = '127.0.0.1';
$cfg['server_port'] = 7171;

# Allow teleportation to temple?
$cfg['char_repair'] = false;

# Force users to validate their emails when registering?
# For email functions to work, SMTP server must be configured correctly
$cfg['Email_Validate'] = false;

# Allow email based account recovery?
$cfg['Email_Recovery'] = false;

# SMTP server configuration, use this to send emails
$cfg['SMTP_Host'] = '127.0.0.1';
$cfg['SMTP_Port'] = 25;
$cfg['SMTP_Auth'] = false;
$cfg['SMTP_User'] = 'user@gmail.com';
$cfg['SMTP_Password'] = 'user';
$cfg['SMTP_From'] = 'mail@local.net';

/*
# Example configuration for gmail
# Don't forget to enable extension=php_openssl.dll in php.ini
$cfg['SMTP_Host'] = 'ssl://smtp.gmail.com';
$cfg['SMTP_Port'] = 465;
$cfg['SMTP_Auth'] = true;
$cfg['SMTP_User'] = 'user@gmail.com';
$cfg['SMTP_Password'] = 'user';
$cfg['SMTP_From'] = 'user@gmail.com';
*/

# Whether to show skills in character search
$cfg['show_skills'] = true;

# Whether to show deathlist in character search
$cfg['show_deathlist'] = true;

$cfg['skill_names'] = array('fist', 'club', 'sword', 'axe', 'distance', 'shielding', 'fishing');

# Banned names
$cfg['invalid_names'] = array('^gm','^god','admin','fuck','gamemaster', 'owner', '^cm', '^tutor');

# Accounts that are allowed to access admin panel
# Example: array('account1', 'account2');
$cfg['admin_accounts'] = array();

# Listed IPs always allowed to access admin panel, no matter if it has account or not
$cfg['admin_ip'] = array('127.0.0.1');

# Player can only delete himself after specified inactivitiy time (seconds)
$cfg['player_delete_interval'] = 24*3600;

# Minimum level to create own guild. Cannot be lower than $cfg['guild_level']
$cfg['guild_leader_level'] = 20;

# Please disable guild manager if your server features guild editing
$cfg['guild_manager_enabled'] = true;

# Online status update interval (seconds). Should match statustimeout in your otserv configuration
$cfg['status_update_interval'] = 5*60;

# Shows more informatin when exception occurs. WARNING! Can reveal sensitive information.
$cfg['debug_backtrace'] = false;

# Schema control override. Disables/enables compatibility check for OTServ schema version.
$cfg['schema_check'] = false;

/*
 * This will affect date displaying
 * Look http://www.google.com/search?q=php+timezones for supported timezones.
 */
$cfg['timezone'] = 'UTC';

##################################################
#                 Town Config                    #
##################################################
/*
NOTICE
Town IDs must be correct and match those in your map
*/
# Town names
$cfg['temple'][1]['name'] = 'Peonsville';
$cfg['temple'][2]['name'] = 'Forgotten';
$cfg['temple'][3]['name'] = 'Evolutions';
$cfg['temple'][4]['name'] = 'Thais';
$cfg['temple'][5]['name'] = 'Ab\'Dendriel';
$cfg['temple'][6]['name'] = 'Kazordoon';
$cfg['temple'][7]['name'] = 'Something else?';
$cfg['temple'][8]['name'] = 'Darashia';
$cfg['temple'][9]['name'] = 'Port Hope';
$cfg['temple'][10]['name'] = 'Liberty Bay';

# Now set which town(s) you want to use in character making
$cfg['temple'][1]['x'] = 224;
$cfg['temple'][1]['y'] = 229;
$cfg['temple'][1]['z'] = 7;
$cfg['temple'][1]['enabled'] = true;

$cfg['temple'][2]['x'] = 50;
$cfg['temple'][2]['y'] = 50;
$cfg['temple'][2]['z'] = 7;
$cfg['temple'][2]['enabled'] = false;

$cfg['temple'][3]['x'] = 1000;
$cfg['temple'][3]['y'] = 1000;
$cfg['temple'][3]['z'] = 7;
$cfg['temple'][3]['enabled'] = false;

##################################################
#                 Vocation Config                #
##################################################
/*
Notice:
It's only one item per slot. You need to script special onLogin
event in OTServ to add more items to new players. Look http://otfans.net/
for more information.
*/

################# No Vocation ####################
$id = 0;
$cfg['vocations'][$id]['name'] = 'No Vocation';
$cfg['vocations'][$id]['level'] = 1;
$cfg['vocations'][$id]['group'] = 1;
$cfg['vocations'][$id]['maglevel'] = 0;
$cfg['vocations'][$id]['health'] = 150;
$cfg['vocations'][$id]['mana'] = 0;
$cfg['vocations'][$id]['cap'] = 400;
$cfg['vocations'][$id]['enabled'] = false;

$cfg['vocations'][$id]['look'][0] = 136;
$cfg['vocations'][$id]['look'][1] = 128;

$cfg['vocations'][$id]['skills'][0] = 1;
$cfg['vocations'][$id]['skills'][1] = 1;
$cfg['vocations'][$id]['skills'][2] = 1;
$cfg['vocations'][$id]['skills'][3] = 1;
$cfg['vocations'][$id]['skills'][4] = 1;
$cfg['vocations'][$id]['skills'][5] = 1;
$cfg['vocations'][$id]['skills'][6] = 1;

$cfg['vocations'][$id]['equipment'][3] = 1991; ## bag
$cfg['vocations'][$id]['equipment'][4] = 2650; ## jacket
$cfg['vocations'][$id]['equipment'][5] = 2382; ## club
$cfg['vocations'][$id]['equipment'][10] = 2050; ## torch

################# Sorcerer #######################
$id = 1;
$cfg['vocations'][$id]['name'] = 'Sorcerer';
$cfg['vocations'][$id]['level'] = 8;
$cfg['vocations'][$id]['group'] = 1;
$cfg['vocations'][$id]['maglevel'] = 0;
$cfg['vocations'][$id]['health'] = 185;
$cfg['vocations'][$id]['mana'] = 35;
$cfg['vocations'][$id]['cap'] = 470;
$cfg['vocations'][$id]['enabled'] = true;

$cfg['vocations'][$id]['look'][0] = 136;
$cfg['vocations'][$id]['look'][1] = 128;

$cfg['vocations'][$id]['skills'][0] = 10;
$cfg['vocations'][$id]['skills'][1] = 10;
$cfg['vocations'][$id]['skills'][2] = 10;
$cfg['vocations'][$id]['skills'][3] = 10;
$cfg['vocations'][$id]['skills'][4] = 10;
$cfg['vocations'][$id]['skills'][5] = 10;
$cfg['vocations'][$id]['skills'][6] = 10;

/*
1.head; 2.neck; 3.container; 4.chest; 5.hand; 6.hand; 7.legs; 8.feet; 9.finger; 10.ammo 
$cfg['vocations'][$id]['equipment'][1] = 2480; ## legion helmet
$cfg['vocations'][$id]['equipment'][2] = 2172; ## bronze amulet
$cfg['vocations'][$id]['equipment'][3] = 1991; ## bag
$cfg['vocations'][$id]['equipment'][4] = 2484; ## studded armor
$cfg['vocations'][$id]['equipment'][6] = 2530; ## cooper shield
$cfg['vocations'][$id]['equipment'][7] = 2649; ## leather legs
$cfg['vocations'][$id]['equipment'][8] = 2643; ## leather boots
*/

################# Druid ##########################
$id = 2;
$cfg['vocations'][$id]['name'] = 'Druid';
$cfg['vocations'][$id]['level'] = 8;
$cfg['vocations'][$id]['group'] = 1;
$cfg['vocations'][$id]['maglevel'] = 0;
$cfg['vocations'][$id]['health'] = 185;
$cfg['vocations'][$id]['mana'] = 35;
$cfg['vocations'][$id]['cap'] = 470;
$cfg['vocations'][$id]['enabled'] = true;

$cfg['vocations'][$id]['look'][0] = 136;
$cfg['vocations'][$id]['look'][1] = 128;

$cfg['vocations'][$id]['skills'][0] = 10;
$cfg['vocations'][$id]['skills'][1] = 10;
$cfg['vocations'][$id]['skills'][2] = 10;
$cfg['vocations'][$id]['skills'][3] = 10;
$cfg['vocations'][$id]['skills'][4] = 10;
$cfg['vocations'][$id]['skills'][5] = 10;
$cfg['vocations'][$id]['skills'][6] = 10;

/*
1.head; 2.neck; 3.container; 4.chest; 5.hand; 6.hand; 7.legs; 8.feet; 9.finger; 10.ammo 
$cfg['vocations'][$id]['equipment'][1] = 2480; ## legion helmet
$cfg['vocations'][$id]['equipment'][2] = 2172; ## bronze amulet
$cfg['vocations'][$id]['equipment'][3] = 2000; ## red backpack
$cfg['vocations'][$id]['equipment'][4] = 2464; ## chain armor
$cfg['vocations'][$id]['equipment'][6] = 2530; ## cooper shield
$cfg['vocations'][$id]['equipment'][7] = 2468; ## studded legs
$cfg['vocations'][$id]['equipment'][8] = 2643; ## leather boots
*/

################# Paladin #######################
$id = 3;
$cfg['vocations'][$id]['name'] = 'Paladin';
$cfg['vocations'][$id]['level'] = 8;
$cfg['vocations'][$id]['group'] = 1;
$cfg['vocations'][$id]['maglevel'] = 0;
$cfg['vocations'][$id]['health'] = 185;
$cfg['vocations'][$id]['mana'] = 35;
$cfg['vocations'][$id]['cap'] = 470;
$cfg['vocations'][$id]['enabled'] = true;

$cfg['vocations'][$id]['look'][0] = 136;
$cfg['vocations'][$id]['look'][1] = 128;

$cfg['vocations'][$id]['skills'][0] = 10;
$cfg['vocations'][$id]['skills'][1] = 10;
$cfg['vocations'][$id]['skills'][2] = 10;
$cfg['vocations'][$id]['skills'][3] = 10;
$cfg['vocations'][$id]['skills'][4] = 10;
$cfg['vocations'][$id]['skills'][5] = 10;
$cfg['vocations'][$id]['skills'][6] = 10;

/*
1.head; 2.neck; 3.container; 4.chest; 5.hand; 6.hand; 7.legs; 8.feet; 9.finger; 10.ammo 
$cfg['vocations'][$id]['equipment'][1] = 2480; ## legion helmet
$cfg['vocations'][$id]['equipment'][2] = 2172; ## bronze amulet
$cfg['vocations'][$id]['equipment'][3] = 2000; ## red backpack
$cfg['vocations'][$id]['equipment'][4] = 2464; ## chain armor
$cfg['vocations'][$id]['equipment'][6] = 2530; ## cooper shield
$cfg['vocations'][$id]['equipment'][7] = 2468; ## studded legs
$cfg['vocations'][$id]['equipment'][8] = 2643; ## leather boots
*/

################# Knight #########################
$id = 4;
$cfg['vocations'][$id]['name'] = 'Knight';
$cfg['vocations'][$id]['level'] = 8;
$cfg['vocations'][$id]['group'] = 1;
$cfg['vocations'][$id]['maglevel'] = 0;
$cfg['vocations'][$id]['health'] = 185;
$cfg['vocations'][$id]['mana'] = 35;
$cfg['vocations'][$id]['cap'] = 470;
$cfg['vocations'][$id]['enabled'] = true;

$cfg['vocations'][$id]['look'][0] = 136;
$cfg['vocations'][$id]['look'][1] = 128;

$cfg['vocations'][$id]['skills'][0] = 10;
$cfg['vocations'][$id]['skills'][1] = 10;
$cfg['vocations'][$id]['skills'][2] = 10;
$cfg['vocations'][$id]['skills'][3] = 10;
$cfg['vocations'][$id]['skills'][4] = 10;
$cfg['vocations'][$id]['skills'][5] = 10;
$cfg['vocations'][$id]['skills'][6] = 10;

/*
1.head; 2.neck; 3.container; 4.chest; 5.hand; 6.hand; 7.legs; 8.feet; 9.finger; 10.ammo 
$cfg['vocations'][$id]['equipment'][1] = 2480; ## legion helmet
$cfg['vocations'][$id]['equipment'][2] = 2172; ## bronze amulet
$cfg['vocations'][$id]['equipment'][3] = 2000; ## red backpack
$cfg['vocations'][$id]['equipment'][4] = 2464; ## chain armor
$cfg['vocations'][$id]['equipment'][6] = 2530; ## cooper shield
$cfg['vocations'][$id]['equipment'][7] = 2468; ## studded legs
$cfg['vocations'][$id]['equipment'][8] = 2643; ## leather boots
*/

################# Other IDs ######################

$cfg['vocations'][5]['name'] = 'Master Sorcerer';
$cfg['vocations'][6]['name'] = 'Elder Druid';
$cfg['vocations'][7]['name'] = 'Royal Paladin';
$cfg['vocations'][8]['name'] = 'Elite Knight';
?>
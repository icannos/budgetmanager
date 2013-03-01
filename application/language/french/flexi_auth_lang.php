<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name: flexi auth lang - English
* 
* Author: 
* Rob Hussey
* flexiauth@haseydesign.com
* haseydesign.com/flexi-auth
*
* Released: 13/09/2012
*
* Description:
* English language file for flexi auth
*
* Requirements: PHP5 or above and Codeigniter 2.0+
*/

// Account Creation
$lang['account_creation_successful']				= 'Votre compte a été créé avec succès.';
$lang['account_creation_unsuccessful']				= 'Impossible de créer le compte.';
$lang['account_creation_duplicate_email']			= 'Cette adresse e-mail est déjà utilisée par un autre compte.'; 
$lang['account_creation_duplicate_username']		= 'Cet username est déjà utilisé.'; 
$lang['account_creation_duplicate_identity'] 		= 'An account with this identity already exists.';
$lang['account_creation_insufficient_data']			= 'Les champs de sont pas correctement remplis.';

// Password
$lang['password_invalid']							= "Le champ << %s >> est invalide.";
$lang['password_change_successful'] 	 	 		= 'Le mot de passe a été correctement modifié.';
$lang['password_change_unsuccessful'] 	  	 		= 'Les 2 mots de passe ne correspondent pas.';
$lang['password_token_invalid']  					= 'Le token de la page est invalide ou expiré'; 
$lang['email_new_password_successful']				= 'Un nouveau mot de passe a été envoyé à votre adresse mail.';
$lang['email_forgot_password_successful']	 		= 'Un email vous a été envoyé pour changer votre mot de passe';
$lang['email_forgot_password_unsuccessful']  		= 'Impossible de changer votre mot de passe.'; 

// Activation
$lang['activate_successful']						= 'Le compte a été activé.';
$lang['activate_unsuccessful']						= 'Impossible d\'activer ce compte.';
$lang['deactivate_successful']						= 'Le compte a été désactivé.';
$lang['deactivate_unsuccessful']					= 'Impossible de désactiver le compte.';
$lang['activation_email_successful'] 	 			= 'Un email d\'activation vous a été envoyé.';
$lang['activation_email_unsuccessful']  	 		= 'Impossible d\'envoyer un email d\'activation.';
$lang['account_requires_activation'] 				= 'Votre compte doit être activé par email.';
$lang['account_already_activated'] 					= 'Votre compte est déjà activé.';
$lang['email_activation_email_successful']			= 'Un email a été envoyé pour confirmer votre nouvelle adresse email.';
$lang['email_activation_email_unsuccessful']		= 'Impossible d\'envoyer un email pour confirmer votre nouvelle adresse email.';

// Login / Logout
$lang['login_successful']							= 'Vous êtes connecté.';
$lang['login_unsuccessful']							= 'Identifiants erronés.';
$lang['logout_successful']							= 'Vous avez été déconnecté avec succès.';
$lang['login_details_invalid'] 						= 'Vos ids sont invalides';
$lang['captcha_answer_invalid'] 					= 'Le CAPTCHA est correct.';
$lang['login_attempts_exceeded'] 					= 'Le nombre d\'essaie de connexion est dépassé, veuillez attendre un moment avant de recommencer.';
$lang['login_session_expired']						= 'La session a expirée.';
$lang['account_suspended'] 							= 'Ce compte est suspendu.';

// Account Changes
$lang['update_successful']							= 'Mise a jour effectuée.';
$lang['update_unsuccessful']						= 'Impossible de mettre à jour vos informations.';
$lang['delete_successful']							= 'Les informations ont été effacées avec succès.';
$lang['delete_unsuccessful']						= 'Suppression des données impossible..';

// Form Validation
$lang['form_validation_duplicate_identity'] 		= "Un compte avec cet username ou avec cette adresse email existe déjà.";
$lang['form_validation_duplicate_email'] 			= "Cette adresse email est invalide: %s";
$lang['form_validation_duplicate_username'] 		= "Cet username est invalide: %s";
$lang['form_validation_current_password'] 			= "Ce champ est invalide: %s.";
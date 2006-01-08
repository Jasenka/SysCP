<?php
/**
 * filename: $Source$
 * begin: Friday, Oct 08, 2004
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version. This program is distributed in the
 * hope that it will be useful, but WITHOUT ANY WARRANTY; without even the
 * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * @author Tim Zielosko <tim.zielosko@syscp.de>, Aldo Reset <aldo.reset@placenet.org>
 * @copyright (C) 2004 - 2005 Tim Zielosko
 * @copyright (C) 2006 Tim Zielosko, Aldo Reset
 * @package Language
 * @version $Id$
 */


/**
 * Global
 */
$lng['panel']['edit'] = 'Modifier';
$lng['panel']['delete'] = 'Effacer';
$lng['panel']['create'] = 'Cr&eacute;er';
$lng['panel']['save'] = 'Sauvegarder';
$lng['panel']['yes'] = 'Oui';
$lng['panel']['no'] = 'Non';
$lng['panel']['emptyfornochanges'] = 'Veuillez laisser vide pour aucun changement';
$lng['panel']['emptyfordefault'] = 'Veuillez laisser vide pour l\'option standard';
$lng['panel']['path'] = 'Chemin';
$lng['panel']['toggle'] = 'Permuter';
$lng['panel']['next'] = 'continuer';
$lng['panel']['dirsmissing'] = 'Dossiers non disponibles ou illisibles';

/**
 * Login
 */
$lng['login']['username'] = 'Identifiant';
$lng['login']['password'] = 'Mot de passe';
$lng['login']['language'] = 'Langue';
$lng['login']['login'] = 'S\'identifier';
$lng['login']['logout'] = 'Se deconnecter';
$lng['login']['profile_lng'] = 'Langue du profil';

/**
 * Customer
 */
$lng['customer']['documentroot'] = 'Chemin';
$lng['customer']['name'] = 'Nom';
$lng['customer']['firstname'] = 'Pr&eacute;nom';
$lng['customer']['company'] = 'Entreprise';
$lng['customer']['street'] = 'Rue';
$lng['customer']['zipcode'] = 'Code postal';
$lng['customer']['city'] = 'Ville';
$lng['customer']['phone'] = 'T&eacute;l&eacute;phone';
$lng['customer']['fax'] = 'Fax';
$lng['customer']['email'] = 'e-mail';
$lng['customer']['customernumber'] = 'Numero du client';
$lng['customer']['diskspace'] = 'Webspace (MB)';
$lng['customer']['traffic'] = 'Traffic (GB)';
$lng['customer']['mysqls'] = 'Banque(s) de donn&eacute;es MySQL';
$lng['customer']['emails'] = 'Adresse(s) e-mail';
$lng['customer']['accounts'] = 'Comptes e-mail';
$lng['customer']['forwarders'] = 'Retransmissions e-mail';
$lng['customer']['ftps'] = 'Acc&egrave;s FTP';
$lng['customer']['subdomains'] = 'Sub-Domain(s)';
$lng['customer']['domains'] = 'Domain(s)';
$lng['customer']['unlimited'] = 'illimit&eacute;';

/**
 * Customermenue
 */
$lng['menue']['main']['main'] = 'General';
$lng['menue']['main']['changepassword'] = 'Changer le mot de passe';
$lng['menue']['main']['changelanguage'] = 'Changer la langue';
$lng['menue']['email']['email'] = 'e-mail';
$lng['menue']['email']['emails'] = 'Adresse(s)';
$lng['menue']['email']['webmail'] = 'Webmail';
$lng['menue']['mysql']['mysql'] = 'MySQL';
$lng['menue']['mysql']['databases'] = 'Banques de donn&eacute;es';
$lng['menue']['mysql']['phpmyadmin'] = 'phpMyAdmin';
$lng['menue']['domains']['domains'] = 'Domains';
$lng['menue']['domains']['settings'] = 'R&eacute;glages';
$lng['menue']['ftp']['ftp'] = 'FTP';
$lng['menue']['ftp']['accounts'] = 'Comptes';
$lng['menue']['ftp']['webftp'] = 'WebFTP';
$lng['menue']['extras']['extras'] = 'Extras';
$lng['menue']['extras']['directoryprotection'] = 'Protection des dossiers';
$lng['menue']['extras']['pathoptions'] = 'Options du chemin';

/**
 * Index
 */
$lng['index']['customerdetails'] = 'Donn&eacute;es du client';
$lng['index']['accountdetails'] = 'Donn&eacute;es des comptes';

/**
 * Change Password
 */
$lng['changepassword']['old_password'] = 'Ancien mot de passe';
$lng['changepassword']['new_password'] = 'Nouveau mot de passe';
$lng['changepassword']['new_password_confirm'] = 'Nouveau mot de passe (confirmer)';
$lng['changepassword']['new_password_ifnotempty'] = 'Nouveau mot de passe (Veuillez laisser vide pour aucun changement)';
$lng['changepassword']['also_change_ftp'] = ' Changer aussi le mot de passe de l\'acc&egrave;s FTP general';

/**
 * Domains
 */
$lng['domains']['description'] = 'Ici vous pouvez inscrire des Domains et changer ses chemins.<br />Il faut un peu de temps apr&egrave;s chaque changement pour relire la configuration.';
$lng['domains']['domainsettings'] = 'Configuration des Domains';
$lng['domains']['domainname'] = 'Nom du Domain';
$lng['domains']['subdomain_add'] = 'Ajouter un Sous-domain';
$lng['domains']['subdomain_edit'] = 'Changer un Sous-domain';
$lng['domains']['wildcarddomain'] = 'Domain Wildcard?';
$lng['domains']['aliasdomain'] = 'Pseudonyme pour un domain';
$lng['domains']['noaliasdomain'] = 'Domain non-pseudonyme';

/**
 * eMails
 */
$lng['emails']['description'] = 'Ici vous pouvez cr&eacute;er vos boites e-mail.<br><br>Les donn&eacute;es pour configurer votre logiciel e-mail sont celles-la: <br><br>Nom du server: <b><i>votre domain</i></b><br>Identifiant: <b><i>l\'adresse e-mail</i></b><br>Mot de passe: <b><i>le mot de passe que vous avez choisi</i></b>';
$lng['emails']['emailaddress'] = 'Adresse';
$lng['emails']['emails_add'] = 'Ajouter une Adresse';
$lng['emails']['emails_edit'] = 'Changer une adresse';
$lng['emails']['catchall'] = 'Catchall';
$lng['emails']['iscatchall'] = 'D&eacute;signer comme adresse catchall?';
$lng['emails']['account'] = 'Comptes';
$lng['emails']['account_add'] = 'Ajouter un compte';
$lng['emails']['account_delete'] = 'Supprimer un compte';
$lng['emails']['from'] = 'de';
$lng['emails']['to'] = 'pour';
$lng['emails']['forwarders'] = 'Redirections';
$lng['emails']['forwarder_add'] = 'Ajouter une redirection';

/**
 * FTP
 */
$lng['ftp']['description'] = 'Ici vous pouvez ajouter des acc&egrave;s FTP suppl&eacute;mentaires.<br />Les changements sont imédiatement appliqu&eacute;s et l\'acc&egrave;s est disponible.';
$lng['ftp']['account_add'] = 'Ajouter un acc&egrave;s';

/**
 * MySQL
 */
$lng['mysql']['description'] = 'Ici vous pouvez ajouterp et supprimer des bases de donn&eacute;es MySQL.<br>Les changements sont immédiatement appliq&eacute;s  et les bases sont disponibles.<br>Sur le menu on trouve un lien &agrave; phpMyAdmin, avec lequel vous pouvez modifier vos bases de donn&eacute;es.<br><br>L\'acc&egrave;s de PHP fonctionne comme ca: (Il faut modifier les valeurs en <i>italique</i> en mettant ce que c\'est!)<br><br>$connection = mysql_connect("localhost", "<i>Votre identifiant</i>", "<i>Votre mot de passe</i>");<br>mysql_select_db("<i>Le nom de la banque</i>", $connection);';
$lng['mysql']['databasename'] = 'Nom de la base';
$lng['mysql']['databasedescription'] = 'Description de la base';
$lng['mysql']['database_create'] = 'Ajouter une base de donn&eacute;es';

/**
 * Extras
 */
$lng['extras']['description'] = 'Ici vous pouvez ajouter des extras suppl&eacute;mentaires, par example la protection des listes.<br />Il faut un peu de temps apr&egrave;s chaque changement pour relire la configuration.';
$lng['extras']['directoryprotection_add'] = 'Ajouter une protection de dossier';
$lng['extras']['view_directory'] = 'Faire voir le dossier';
$lng['extras']['pathoptions_add'] = 'Ajouter des options de chemin';
$lng['extras']['directory_browsing'] = 'Montrer le contenu des dossiers';
$lng['extras']['pathoptions_edit'] = 'Modifier les options de chemin';
$lng['extras']['error404path'] = '404';
$lng['extras']['error403path'] = '403';
$lng['extras']['error500path'] = '500';
$lng['extras']['error401path'] = '401';
$lng['extras']['errordocument404path'] = 'Chemin du document erreur 404';
$lng['extras']['errordocument403path'] = 'Chemin du document erreur 403';
$lng['extras']['errordocument500path'] = 'Chemin du document erreur 500';
$lng['extras']['errordocument401path'] = 'Chemin du document erreur 401';

/**
 * Errors
 */
$lng['error']['error'] = 'Erreur';
$lng['error']['directorymustexist'] = 'Le dossier que vous avez choisi n\'existe pas. S\'il vous plait appliquer le avec votre client FTP.';
$lng['error']['filemustexist'] = 'Le fichier que vous avez choisi n\'existe pas.';
$lng['error']['allresourcesused'] = 'Vous avez d&eacute;j&agrave; us&eacute;s toutes les ressources.';
$lng['error']['domains_cantdeletemaindomain'] = 'Vous ne pouvez pas effacer une domain qui est utilis&eacute; pour des adresses e-mail. ';
$lng['error']['domains_canteditdomain'] = 'Vous n\'avez pas le droit de configurer ce domain.';
$lng['error']['domains_cantdeletedomainwithemail'] = 'Vous ne pouvez pas effacer un domain qui est utilis&eacute; comme domain e-mail. Il faut effacer toutes ses adresses avant.';
$lng['error']['firstdeleteallsubdomains'] = 'Il faut effacer toutes les subdomains avant d\'appliquer un domain Wildcard.';
$lng['error']['youhavealreadyacatchallforthisdomain'] = 'Vous avez d&eacute;j&agrave; defin&eacute; une adresse catchall pour ce domain.';
$lng['error']['ftp_cantdeletemainaccount'] = 'Vous ne pouvez pas effacer votre acc&egrave;s principal.';
$lng['error']['login'] = 'Identifiant / mot de passe invalide.';
$lng['error']['login_blocked'] = 'Cet acc&egrave;s &eacute;tait bloqu&eacute; &agrave; cause de trop des login fautes.<br />S\'il vous-plait l\'essayer encore dans '.$settings['login']['deactivatetime'].' secondes.';
$lng['error']['notallreqfieldsorerrors'] = 'Vous n\'avez pas rempli toutes les cases ou vous l\'avez rempli avec des valeurs invalide.';
$lng['error']['oldpasswordnotcorrect'] = 'Le vieux mot de passe n\'est pas correct.';
$lng['error']['youcantallocatemorethanyouhave'] = 'Vous ne pouvez pas distribuer plus des ressources qu\'il reste.';
$lng['error']['youcantdeletechangemainadmin'] = 'Pour des raisons de la s&eacute;curit&eacute; ce n\'est pas possible d\'effacer ou modifier l\'administrateur principal.';

$lng['error']['mustbeurl'] = 'Vous n\'avez pas dict&eacute; une adresse URL valide.';
$lng['error']['invalidpath'] = 'Vous n\'avez pas choisi une adresse URL valide (Probablement &agrave; cause de probl&egrave;s avec le listing de dossiers?)';
$lng['error']['stringisempty'] ='Entr&eacute;e manquant au panneau';
$lng['error']['stringiswrong'] ='Entr&eacute;e invalid au panneau';
$lng['error']['myloginname'] = '\''.$lng['login']['username'].'\'';
$lng['error']['mypassword'] = '\''.$lng['login']['password'].'\'';
$lng['error']['oldpassword'] = '\''.$lng['changepassword']['old_password'].'\'';
$lng['error']['newpassword'] = '\''.$lng['changepassword']['new_password'].'\'';
$lng['error']['newpasswordconfirm']= '\''.$lng['changepassword']['new_password_confirm'].'\'';
$lng['error']['newpasswordconfirmerror']='Les deux nouveaus mots de passe ne sont pas &eacute;gals.';
$lng['error']['myname'] = '\''.$lng['customer']['name'].'\'';
$lng['error']['myfirstname'] = '\''.$lng['customer']['firstname'].'\'';
$lng['error']['emailadd'] = '\''.$lng['customer']['email'].'\'';
$lng['error']['mydomain'] = '\'domain\'';
$lng['error']['mydocumentroot'] = '\'Documentroot\'';
$lng['error']['loginnameexists']= 'L\'identifiant %s existe d&eacute;j&agrave;.';
$lng['error']['emailiswrong']= 'L\'adresse %s contient des signes invalides ou n\'est pas complet.';
$lng['error']['loginnameiswrong']= 'L\'identifiant %s contient des signes invalides.';
$lng['error']['userpathcombinationdupe']='Cette combination d\'identifiant et sentier existe d&eacute;j&agrave;.';
$lng['error']['patherror']='Erreur g&eacute;n&eacute;ral! Le sentier ne doit pas &ecirc;tre vide.';
$lng['error']['errordocpathdupe']='Il y a d&eacute;j&agrave; une option concernant le sentier %s.';
$lng['error']['adduserfirst']='Vous devez appliquer un compte avant.';
$lng['error']['domainalreadyexists']= 'Vous avez d&eacute;j&agrave; appliqu&eacute; le domaine %s.';
$lng['error']['nolanguageselect']='Aucune langue choisi.';
$lng['error']['nosubjectcreate']='Il faut donner un sujet.';
$lng['error']['nomailbodycreate']='Il faut marquer un texte.';
$lng['error']['templatenotfound']='Aucun template trouv&eacute;.';
$lng['error']['alltemplatesdefined']='Vous avez d&eacute;j&agrave; appliqu&eacute des templates pour toutes les langues.';
$lng['error']['wwwnotallowed']='Un subdomaine ne doit pas s\'appeler www.';
$lng['error']['subdomainiswrong']='Le subdomaine %s contient des signes invalides.';
$lng['error']['domaincantbeempty']='Le nom de domaine ne doit pas &ecirc;tre vide.';
$lng['error']['domainexistalready']='Le domaine %s existe d&eacute;j&agrave;.';
$lng['error']['domainisaliasorothercustomer']='Le domain pseudonyme choisi est un domain pseudonyme soi-m&ecirc;me ou fait partie d\'un autre client.';
$lng['error']['emailexistalready']='L\'adresse %s existe d&eacute;j&agrave;.';
$lng['error']['maindomainnonexist']='Le domaine %s n\'existe pas.';
$lng['error']['destinationnonexist']='S\'il-vous-plait marquez votre adresse de retransmission au panneau \'&agrave;\'.';
$lng['error']['destinationalreadyexistasmail']='La retransmission vers l\'adresse %s existe d&eacute;j&agrave; comme adresse active.';
$lng['error']['destinationalreadyexist']='Il y a d&eacute;j&agrave; une retransmission vers l\'adresse %s.';
$lng['error']['destinationiswrong']= 'L\'adresse %s contient des signes invalides ou n\'est pas complet.';
$lng['error']['domainname']=$lng['domains']['domainname'];

/**
 * Questions
 */
$lng['question']['question'] = 'Question de s&eacute;curit&eacute;';
$lng['question']['admin_customer_reallydelete'] = 'Voulez-vous vraiment effacer le compte %s?<br />ATTENTION! Toutes les donn&eacute;es vont &ecirc;tre effac&eacute;es! Apr&egrave;s ceci fait il faut effacer les dossiers du system des fichiers manuellement.';
$lng['question']['admin_domain_reallydelete'] = 'Voulez-vous vraiment effacer le domain %s?';
$lng['question']['admin_domain_reallydisablesecuritysetting'] = 'Voulez-vous vraiment d&eacute;sactiver ces modes importants (OpenBasedir et/o&ugrave; SafeMode) ?';
$lng['question']['admin_admin_reallydelete'] = 'Voulez-vous vraiment effacer l\'administrateur %s?<br />Tout ses comptes vont &ecirc;tre affect&eacute; au administrateur principal.';
$lng['question']['admin_template_reallydelete'] = 'Voulez-vous vraiment supprimer le template \'%s\'?';
$lng['question']['domains_reallydelete'] = 'Voulez-vous vraiment effacer le domain %s?';
$lng['question']['email_reallydelete'] = 'Voulez-vous vraiment effacer l\'adresse e-mail %s?';
$lng['question']['email_reallydelete_account'] = 'Voulez-vous vraiment effacer l\'acc&egrave;s d\'e-mail %s?';
$lng['question']['email_reallydelete_forwarder'] = 'Voulez-vous vraiment effacer la retransmission %s?';
$lng['question']['extras_reallydelete'] = 'Voulez-vous vraiment effacer la protection du dossier %s?';
$lng['question']['extras_reallydelete_pathoptions'] = 'Voulez-vous vraiment effacer les options du chemin %s?';
$lng['question']['ftp_reallydelete'] = 'Voulez-vous vraiment effacer l\'acc&egrave;s eMail %s?';
$lng['question']['mysql_reallydelete'] = 'Voulez-vous vraiment effacer la banque de donn&eacute;s %s?<br />ATTENTION: Toutes les donn&eacute;es vont &ecirc;tre effac&eacute;es!';
$lng['question']['admin_configs_reallyrebuild'] = 'Voulez-vous vraiment laisser refaire les fichiers de configuration de Apache et Bind?';

/**
 * Mails
 */
$lng['mails']['pop_success']['mailbody'] = 'Bonjour,\n\nvotre acc&egrave;s POP3 {EMAIL}\na &eacute;t&eacute; install&eacute; avec succ&egrave;s.\n\nC\'est un e-mail g&eacute;ner&eacute; automatiquement, s\'il vous plait ne repondez pas a ce message.\n\nVotre Webmaster';
$lng['mails']['pop_success']['subject'] = 'Acc&egrave;s POP3 install&eacute;';
$lng['mails']['createcustomer']['mailbody'] = 'Bonjour {FIRSTNAME} {NAME},\n\nici vos informations d\'acc&egrave;s:\n\nIdentifiant: {USERNAME}\nMot de passe: {PASSWORD}\n\nNous vous remercions,\nVotre Webmaster';
$lng['mails']['createcustomer']['subject'] = 'Informations de votre acc&egrave;s';

/**
 * Admin
 */
$lng['admin']['overview'] = 'Sommaire';
$lng['admin']['ressourcedetails'] = 'Ressources utilis&eacute;s';
$lng['admin']['systemdetails'] = 'Details du system';
$lng['admin']['syscpdetails'] = 'Details du SysCP';
$lng['admin']['installedversion'] = 'Version install&eacute;e';
$lng['admin']['latestversion'] = 'La plus r&eacute;cente version';
$lng['admin']['lookfornewversion']['clickhere'] = 'Interroger par internet';
$lng['admin']['lookfornewversion']['error'] = 'Erreur en triant';
$lng['admin']['resources'] = 'R&eacute;ssources';
$lng['admin']['customer'] = 'Client';
$lng['admin']['customers'] = 'Clients';
$lng['admin']['customer_add'] = 'Ajouter un compte client';
$lng['admin']['customer_edit'] = 'Modifier un compte client';
$lng['admin']['domains'] = 'Domains';
$lng['admin']['domain_add'] = 'Ajouter un Domain';
$lng['admin']['domain_edit'] = 'Modifier le domain';
$lng['admin']['subdomainforemail'] = 'Sous-domain comme domain e-mail';
$lng['admin']['admin'] = 'Administrateur';
$lng['admin']['admins'] = 'Administrateurs';
$lng['admin']['admin_add'] = 'Ajouter un administrateur';
$lng['admin']['admin_edit'] = 'Modifier un administrateur';
$lng['admin']['customers_see_all'] = 'Peut voir tous les comptes?';
$lng['admin']['domains_see_all'] = 'Peut voir tous les Domains?';
$lng['admin']['change_serversettings'] = 'Peut modifier la configuration du server?';
$lng['admin']['server'] = 'Serveur';
$lng['admin']['serversettings'] = 'R&eacute;glage';
$lng['admin']['rebuildconf'] = 'Refaire la configuration';
$lng['admin']['stdsubdomain'] = 'Sous-domain-type';
$lng['admin']['stdsubdomain_add'] = 'Ajouter un subdomain-type';
$lng['admin']['deactivated'] = 'Bloqu&eacute;';
$lng['admin']['deactivated_user'] = 'Bloquer utilisateur';
$lng['admin']['sendpassword'] = 'Envoyer mot de passe';
$lng['admin']['ownvhostsettings'] = 'Configuration sp&eacute;ciale du vHost';
$lng['admin']['configfiles']['serverconfiguration'] = 'Configuration';
$lng['admin']['configfiles']['files'] = '<b>Fichiers de configuration:</b> S\'il vous-plait modifiez les fichiers correspondants<br />ou cr&eacute;ez les avec les contenu ci-dessous.<br /><b>IMPORTANT:</b> Le mot de passe MySQL n\'est pas donn&eacute;s dans les dates ci-dessus<br />&agrave; cause des raisons de s&eacute;curit&eacute;. S\'il vous-plait substituez les &quot;MYSQL_PASSWORD&quot;<br />manuellement avec le mot de passe. En cas de l\'avoir oubli&eacute;, vous le trouvez dans<br />le fichier &quot;lib/userdata.inc.php&quot;.';
$lng['admin']['configfiles']['commands'] = '<b>Commandes:</b> S\'il vous-plait ex&eacute;cuter les commandes ci-dessous sur le shell.';
$lng['admin']['configfiles']['restart'] = '<b>R&eacute;demarrer:</b> S\'il vous-plait ex&eacute;cuter les commandes ci-dessous pour<br />r&eacute;initialiser les fichiers de configuration.';
$lng['admin']['templates']['templates'] = 'Templates';
$lng['admin']['templates']['template_add'] = 'Ajouter un template';
$lng['admin']['templates']['template_edit'] = 'Modifier un template';
$lng['admin']['templates']['action'] = 'Action';
$lng['admin']['templates']['email'] = 'E-Mail';
$lng['admin']['templates']['subject'] = 'R&eacute;f&eacute;rence';
$lng['admin']['templates']['mailbody'] = 'Texte du mail';
$lng['admin']['templates']['createcustomer'] = 'Mail de bienvenu pour des nouveaux clients';
$lng['admin']['templates']['pop_success'] = 'Mail de bienvenu pour des nouveaux acc&egrave;s e-mail';
$lng['admin']['templates']['template_replace_vars'] = 'Les variables qui vont &ecirc;tre remplac&eacute;es dans le template:';
$lng['admin']['templates']['FIRSTNAME'] = 'Va &ecirc;tre remplac&eacute; par le pr&eacute;nom.';
$lng['admin']['templates']['NAME'] = 'Va &ecirc;tre remplac&eacute; par le nom.';
$lng['admin']['templates']['USERNAME'] = 'Va &ecirc;tre remplac&eacute; par le login.';
$lng['admin']['templates']['PASSWORD'] = 'Va &ecirc;tre remplac&eacute; par le mot de passe du client.';
$lng['admin']['templates']['EMAIL'] = 'Va &ecirc;tre remplac&eacute; par l\'acc&egrave;s e-mail.';

/**
 * Serversettings
 */
$lng['serversettings']['session_timeout']['title'] = 'Session Timeout';
$lng['serversettings']['session_timeout']['description'] = 'Combien de temps faut-il &ecirc;tre inactif pour que votre session se ferme automatiquement (secondes)';
$lng['serversettings']['accountprefix']['title'] = 'Pr&eacute;fix des comptes';
$lng['serversettings']['accountprefix']['description'] = 'Quel pr&eacute;fix doivent-ils avoir les comptes?';
$lng['serversettings']['mysqlprefix']['title'] = 'Pr&eacute;fix SQL';
$lng['serversettings']['mysqlprefix']['description'] = 'Quel pr&eacute;fix doivent-elles avoir les banques de donn&eacute;es?';
$lng['serversettings']['ftpprefix']['title'] = 'Pr&eacute;fix FTP';
$lng['serversettings']['ftpprefix']['description'] = 'Quel pr&eacute;fix doivent-ils avoir les acc&egrave;s FTP?';
$lng['serversettings']['documentroot_prefix']['title'] = 'Documentdirectory';
$lng['serversettings']['documentroot_prefix']['description'] = 'O&ugrave; doivent &ecirc;tre tous les comptes';
$lng['serversettings']['logfiles_directory']['title'] = 'Logfilesdirectory';
$lng['serversettings']['logfiles_directory']['description'] = 'O&ugrave; doivent &ecirc;tre les archives d\'acc&egrave;s?';
$lng['serversettings']['ipaddress']['title'] = 'Adresse IP';
$lng['serversettings']['ipaddress']['description'] = 'Quelle est l\'adresse IP du server?';
$lng['serversettings']['hostname']['title'] = 'Hostname';
$lng['serversettings']['hostname']['description'] = 'Quel est le hostname du server?';
$lng['serversettings']['apacheconf_directory']['title'] = 'Apache-Config-Directory';
$lng['serversettings']['apacheconf_directory']['description'] = 'O&ugrave; est sauvegard&eacute;e la configuration de l\'Apache?';
$lng['serversettings']['apachereload_command']['title'] = 'Apache-Reload-Command';
$lng['serversettings']['apachereload_command']['description'] = 'Comment est la commande pour red&eacute;marrer l\Apache?';
$lng['serversettings']['bindconf_directory']['title'] = 'Bind-Config-Directory';
$lng['serversettings']['bindconf_directory']['description'] = 'O&ugrave; est sauvegard&eacute;e la configuration du BIND?';
$lng['serversettings']['bindreload_command']['title'] = 'Bind-Reload-Command';
$lng['serversettings']['bindreload_command']['description'] = 'Comment est la commande pour red&eacute;marrer le BIND?';
$lng['serversettings']['binddefaultzone']['title'] = 'Bind-Default-Zone';
$lng['serversettings']['binddefaultzone']['description'] = 'Comment s\'appelle la zone standard des tous les domaines?';
$lng['serversettings']['vmail_uid']['title'] = 'Mails-Uid';
$lng['serversettings']['vmail_uid']['description'] = 'Quel UID doivent avoir les e-mails?';
$lng['serversettings']['vmail_gid']['title'] = 'Mails-Gid';
$lng['serversettings']['vmail_gid']['description'] = 'Quel GID doivent avoir les e-mails?';
$lng['serversettings']['vmail_homedir']['title'] = 'Mails-Homedir';
$lng['serversettings']['vmail_homedir']['description'] = 'O&ugrave; doivent &ecirc;tre les e-mails?';
$lng['serversettings']['adminmail']['title'] = 'Adresse de l\'exp&eacute;diteur';
$lng['serversettings']['adminmail']['description'] = 'Quelle est l\'adresse standard des e-mails qui sont envoy&eacute;s de SysCP?';
$lng['serversettings']['phpmyadmin_url']['title'] = 'Adresse URL phpMyAdmin';
$lng['serversettings']['phpmyadmin_url']['description'] = '&Agrave; quelle adresse se trouve le phpMyAdmin?';
$lng['serversettings']['webmail_url']['title'] = 'Adresse URL WebMail';
$lng['serversettings']['webmail_url']['description'] = '&Agrave; quelle adresse se trouve le WebMail?';
$lng['serversettings']['webftp_url']['title'] = 'Adresse URL WebFTP';
$lng['serversettings']['webftp_url']['description'] = '&Agrave; quelle adresse se trouve le WebFTP?';
$lng['serversettings']['language']['description'] = 'Quelle langue est la langue pr&eacute;d&eacute;finie?';
$lng['serversettings']['maxloginattempts']['title'] = 'Nombre d\'essais maximal';
$lng['serversettings']['maxloginattempts']['description'] = 'Nombre d\essais de se connecter maximal jusqu\&agrave; la d&eacute;activation de l\acc&egrave;s.';
$lng['serversettings']['deactivatetime']['title'] = 'Dur&eacute;e de la d&eacute;activation';
$lng['serversettings']['deactivatetime']['description'] = 'Dur&eacute;e (en secondes) pendant laquelle l\acc&egrave;s reste d&eacute;activ&eacute;.';
$lng['serversettings']['pathedit']['title'] = 'Mode d\'indication du chemin';
$lng['serversettings']['pathedit']['description'] = 'Choisir un chemin par menu Dropdown ou pouvoir l\'entrer manuellement.';

?>
<?php

/**
 * Do not change this value if there is no DataTables translation available for your language.
 * You can check out the available translations using the following link.
 * @link https://cdn.datatables.net/plug-ins/1.10.19/i18n/
 */
$GLOBALS["dataTablesLanguage"] = "French";

$lang = [
    'tooltip_only_shared_devices' => 'Vous pouvez le définir sur 0 si vous souhaitez que l\'utilisateur n\'utilise que les appareils partagés par l\'administrateur. Cela empêchera l\'utilisateur d\'ajouter son propre appareil au système.',
    'selected_users' => 'Utilisateurs sélectionnés',
    'demo_users' => 'Utilisateurs de démonstration',
    'share_with' => 'Partager avec',
    'shared_devices' => 'appareils partagés par l\'administrateur',
    'skin_setting' => 'Peau',
    'black' => 'Blanche',
    'black_light' => 'Lumière blanche',
    'blue' => 'Bleu',
    'blue_light' => 'Lumière bleue',
    'green' => 'Vert',
    'green_light' => 'Lumière vert',
    'purple' => 'violet',
    'purple_light' => 'Lumière violette',
    'red' => 'Rogue',
    'red_light' => 'Lumière Rogue',
    'yellow' => 'Jaune',
    'yellow_light' => 'Lumière Jaune',
    'add_numbers_blacklist_placeholder' => 'Entrez un numéro de mobile par ligne',
    'use_owner_settings' => 'Utiliser les paramètres liés à l\'appareil (délai, rapports de livraison et file d\'attente progressive) définis par l\'administrateur',
    'get_devices' => 'Obtenir des appareils',
    'use_progressive_queue_setting' => 'Envoyer le message suivant dans la campagne uniquement après le traitement du message actuel par l\'opérateur réseau',
    'hint' => 'Indice!',
    'blacklist_instruction' => 'Les utilisateurs peuvent ajouter leur numéro à la liste noire en répondant "STOP" à votre message. Si vous utilisez également des appareils partagés par l\'administrateur, ils doivent utiliser "STOP %userID%" au lieu de "STOP" pour ajouter leur numéro à la liste noire.',
    'error_no_valid_numbers_found' => 'Il n\'y a pas de numéros valides pouvant être ajoutés à la liste noire.',
    'success_numbers_removed' => '%count% numéros supprimés avec succès.',
    'success_number_removed' => '%count% nombre supprimé avec succès.',
    'success_add_to_blacklist' => 'Ajouté avec succès à la liste noire.',
    'remove_number_from_black_list_confirmation' => 'Voulez-vous vraiment supprimer les numéros sélectionnés de la liste noire?',
    'add' => 'Ajouter',
    'blacklist' => 'Liste noire',
    'unshareable' => 'Non partageable',
    'error_device_not_owned' => 'Vous ne pouvez envoyer des requêtes USSD qu\'à l\'aide de vos propres appareils.',
    'no_one' => 'Personne',
    'shared_with' => 'Partagé avec',
    'share_to_all' => 'Partager à tous',
    'success_device_shared' => 'Appareil partagé/non partagé avec succès.',
    'users' => 'Utilisateurs',
    'share_device' => 'Partager l\'appareil',
    'all' => 'Tous',
    'error_unable_to_remove_plans' => 'Impossible de supprimer ce(s) plan(s).',
    'remove_plans_confirmation' => 'Supprimer vraiment ce(s) plan(s)?',
    'success_plans_removed' => '%count% plans supprimés avec succes.',
    'success_plan_removed' => '%count% plan supprimé avec succès.',
    'success_regenerate_api_key' => 'Cle API regénérée avec succès.',
    'regenerate_api_key_confirmation' => 'Attention la cle précédente sera supprimée !',
    'pending_ussd_requests' => 'Requêtes USSD',
    'sent_ussd_requests' => 'Envoyer des requêtes USSD',
    'resend_requests_confirmation' => 'Voulez-vous vraiment renvoyer les requêtes USSD ?',
    'success_ussd_requests_resent' => '%count% USSD requêtes renvoyées avec succès.',
    'success_ussd_request_resent' => '%count% USSD requetes renvoyées avec succès.',
    'move_contacts' => 'Déplacer les contacts',
    'success_contacts_moved' => '%count% contacts déplacés avec succès.',
    'success_contact_moved' => '%count% contact deplacé avec succès.',
    'move_contacts_confirmation' => 'Voulez-vous déplacer les contacts ?',
    'move' => 'Déplacer',
    'new_user_report_delivery_setting' => 'Demander un rapport de livraison pour chaque message envoyé (Seulement les SMS)',
    'tooltip_sleep_time' => 'Si activé, ceci empêche les envois de messages non prioritaires dans cet intervalle de temps.',
    'appearance' => 'Apparence',
    'reset_password_link' => 'Réinitialiser le mot de passe avec un nouveau lien',
    'user_limits_update' => 'Mise à jour des limites utilisateur',
    'subject' => 'Sujet',
    'unsubscribe' => 'Se désinscrire',
    'copyright' => 'Copyright',
    'android_app' => 'Application Android',
    'links' => 'Liens',
    'default_settings_new_users' => "Paramètres par défaut pour les nouveaux utilisateurs",
    'new_user_limitations' => "Nouvelles limites utilisateur ( 0 → Infini )",
    'message_footer_demo_users' => 'Message de bas de page pour les utilisateurs de la démo',
    'download_app' => 'Télécharger votre app !',
    'no_ussd_requests_found' => 'Aucune requête USSD.',
    'error_sim_not_exist' => 'Assurez-vous de vous être authentifiés dans votre application mobile sur votre #%deviceId% et que la sim est ok dans le slot %simSlot%. Si vous avez inséré la sim récemment, ouvrez votre application mobile pour ajouter cette sim a votre base de données.',
    'error_device_not_exist' => 'Votre identifiant de mobile est absent de la base de données, ou vous êtes déconnectés de votre application mobile.',
    'success_ussd_requests_removed' => '%count% requêtes USSD supprimées avec succès.',
    'success_ussd_request_removed' => '%count% requête USSD supprimée avec succès.',
    'success_sent_ussd_request' => 'Requête USSD transmise avec succès.',
    'remove_requests_confirmation' => 'Supprimer les requêtes USSD sélectionnées ?',
    'response_at' => 'Réponse le',
    'sent_at' => 'Envoi le',
    'request' => 'Requête',
    'ussd_requests' => 'Requêtes USSD',
    'ussd_request' => 'Requêtes USSD',
    'send_ussd_request' => 'Envoi de requête USSD',
    'get_ussd_requests' => 'Récupérer les requêtes USSD',
    'ussd' => 'USSD',
    'error_missing_data' => 'Données insuffisantes pour se désinscrire de la liste. Assurez-vous de copier votre url complète depuis votre message.',
    'error_paypal_requires_ssl' => 'Vous devez utiliser un certificat SSL pour votre site pour utiliser PayPal. Si installé, assurez-vous de mettre le https.',
    'tooltip_prioritize' => 'Envoyer ce message immédiatement, même si il existe une autre campagne en attente.',
    'add_device_instruction' => 'Vous pouvez suivre ces étapes pour ajouter votre mobile Android dans le système.',
    'error_invalid_sleep_time' => 'SVP fournissez un format de temps de pause valide. Le temps de pause min et max doivent différer.',
    'sleep_time_from' => 'Temps de pause minimal',
    'sleep_time_upto' => 'Temps de pause maximal',
    'sleep_time' => 'Temps de pause',
    'prioritize' => 'Prioriser',
    'success_contacts_list_updated' => 'Liste des contacts mise à jour avec succès.',
    'edit_contacts_list' => 'Editer la liste des contacts',
    'edit_list' => 'Editer la liste',
    'error_creating_lock_file' => 'Il y a eu une erreur en créant le fichier de verrouillage. SVP assurez-vous que ce script a les permissions suffisantes pour créer un répertoire.',
    'refresh' => 'Rafraîchir',
    'success_queued_contacts_import' => 'Fichier import de contacts positionné en queue de traitement avec succès.',
    'error_creating_directory' => 'Erreur à la création du répertoire %name%. SVP assurez-vous que ce script a les permissions suffisantes pour créer un répoertoire.',
    'footer_text_label' => 'Texte de bas de page',
    'option' => 'Critères de sélection de votre équipement',
    'use_selected_devices' => 'Utiliser votre(vos) équipement(s) sélectionné(s)',
    'use_all_devices' => 'Utiliser la sim par défaut pour tous les équipements',
    'use_all_sims' => 'Utiliser toutes les sim de tous les équipements',
    'use_random_device' => 'Utiliser un équipement ou une sim au hasard parmi les équipements sélectionnés',
    'tooltip_android_app_url' => 'Cette URL sera utilisée comme lien vers le fichier APK dans le mail type pour la phase enregistrement des utilisateurs et plus donc soyez sûr de mettre la bonne adresse internet vers le fichier APK.',
    'tooltip_mms' => 'La disponibilité des MMS dépendra de votre pays et du support par votre opérateur téléphonique. Le receveur devra être capable de recevoir le MMS. Cette fonctionnalité ne doit pas être confondue avec RCS ou tout autre type de message propriétaire (exemple avec Samsung message, Mi message etc.).',
    'tooltip_attachments' => 'Vous pouvez joindre de multiples fichiers ici mais assurez-vous de ne pas dépasser 600 KB au total. Si le destinataire ne peut toujours pas recevoir le MMS vous pouvez essayer une taille proche de 300 KB.',
    'attachments_invalid' => 'Fichier joints image de type invalides ou non compatibles.',
    'resend_messages' => 'Réemettre les messages',
    'error_creating_upload_directory' => 'Erreur à la création du répertoire. Assurez-vous que le script ait les permissions suffisantes pour créer un répertoire.',
    'error_uploading_attachment' => 'Erreur upload fichiers joints. Assurez-vous que ce script ait les permissions suffisantes pour créer des fichiers dans le dossier upload.',
    'tooltip_attachments_links' => 'Vous pouvez fournir plusieurs liens image en les séparant par une virgule, assurez-vous de ne mettre aucun espace avant et après la virgule.',
    'attachments_links' => 'Liens vers les fichiers joints (*.png, *.jpg, *.gif, *.aac, *.3gp, *.amr, *.mp3, *.m4a, *.wav, *.mp4, *.txt, *.vcf)',
    'attachments' => 'Fichiers joints (*.png, *.jpg, *.gif, *.aac, *.3gp, *.amr, *.mp3, *.m4a, *.wav, *.mp4, *.txt, *.vcf)',
    'type' => 'Type',
    'success_device_name_updated' => 'Nom de votre équipement sauvegardé avec succès.',
    'edit_device' => 'Editer votre équipement',
    'send_received_messages_to_email' => 'Envoyer une copie de tous les messages reçus par email',
    'tooltip_pusher' => 'Récupérer le status en temps réel des mises à jour pour les messages envoyés et reçus sur le tableau de bord avec le système pusher.',
    'app_id' => 'ID de votre application mobile',
    'key' => 'Clé',
    'cluster' => 'Cluster',
    'pusher' => 'Pusher',
    'error_server_requirements_not_met' => 'Prérequis serveur non atteints. SVP contactez votre administrateur pour installer les dépendances manquantes.',
    'next' => 'Suivant',
    'none' => 'Aucun',
    'success_templates_removed' => '%count% templates supprimées avec succès.',
    'success_template_removed' => '%count% template supprimé avec succès',
    'success_update_template' => 'Template SMS mis à jour avec succès.',
    'success_add_template' => 'Template SMS mis à jour avec succès.',
    'remove_templates_confirmation' => 'Vraiment supprimer les templates SMS sélectionnés ?',
    'manage_templates' => 'Gérer les templates',
    'add_template' => 'Ajouter un template',
    'templates' => 'Templates',
    'template' => 'Template',
    'tooltip_delay' => 'Vous pouvez assigner un seuil de délai au hasard dans une fourchette de valeurs. Exemple, si vous assignez 20-40 comme délai alors le délai sera choisi au hasard dans cet intervalle entre 20 et 40 secondes.',
    'error_invalid_delay' => 'Le délai doit être type numérique (exemple 20) ou représenter un intervalle (exemple 20-60).',
    'error_max_delay_smaller' => 'Le délai maximum doit être supérieur au délai minimum.',
    'error_disposable_email_address' => 'SVP utiliser une adresse valide pour votre enregistrement !',
    'placeholder_auto_responder_message' => 'Vous pouvez utiliser le symbole pipe | pour séparer plusieurs messages. Si vos messages contiennet des valeurs | alors vous pouvez utiliser backslash avant tel que  \| au lieu de | seul.',
    'tooltip_total_cycles' => 'Activer cet élément pour limiter le nombre de fois que la souscription sera payée. Si vous ne faites pas cette activation alors une souscription restera active pour ce plan et seule une annulation la désactivera.',
    'cancelled' => 'Annulé(e)',
    'renews_until' => 'Renouveler avant le',
    'refund' => 'Remboursement',
    'error_payment_not_found' => 'Impossible de trouver le paiement !',
    'success_payment_refunded' => 'Remboursement du paiement OK.',
    'refund_payment_confirmation' => 'Voulez-vous rembourser ce paiement ?',
    'error_user_already_subscribed' => 'Impossible de créer une nouvelle souscription car une souscription active existe déjà pour cet utilisateur.',
    'success_create_subscription' => 'Nouvelle souscription ajoutée avec succès.',
    'year' => 'Année',
    'month' => 'Mois',
    'week' => 'Semaine',
    'create_subscription' => 'Créer une souscription',
    'error_total_cycles_not_number' => 'Le nombre total de cycles doit être un nombre entier réel positif.',
    'total_cycles' => 'Total de cycles',
    'excel_message_placeholder' => 'Vous pouvez utiliser un placeholder comme affiché dans le message suivant et il se remplacera avec une valeur automatique.
&quot;Bonjour %Name%, Comment va ?&quot;
Dans cet exemple, le système va remplacer %Name% avec les données de la colonne Name. Condition : vous devez avoir une colonne Name dans le fichier Excel.',
    'do_not_have_an_account' => 'Pas encore de compte utilisateur ?',
    'user' => 'Utilisateur',
    'from_name' => 'Nom expéditeur',
    'from_address' => 'Email expéditeur',
    'tooltip_unsubscribe_url' => 'Vous pouvez créer une adresse raccourcie pour le lien de désinscription afin de gagner de la place dans votre message.',
    'tooltip_max_retries' => 'Nombre de réessai maximum si échec de votre envoi.',
    'tooltip_retry_time_interval' => 'Le temps entre deux tentatives de renvoi si échec.',
    'smtp_debug_information' => 'Information de debug SMTP',
    'show_debug_info' => 'Montrer les informations de debug',
    'tooltip_message_multiple' => 'Seuls les numéros de mobile seront utilisés depuis le fichier excel file lorsque vous rentrez une valeur quelconque dans ce champ.',
    'buy_now' => 'Acheter maintenant',
    'favicon' => 'Favicon',
    'error_uploading_logo' => 'Erreur upload du logo. Assurez-vous des bonnes permissions pour envoi de fichiers dans le dossier uploads.',
    'logo' => 'Logo',
    'expires_after' => 'Expiration du service dans',
    'add_unsubscribe_link' => 'Ajouter une lien de désinscription',
    'cycles_competed' => 'Cycles completés',
    'respond_if' => 'Répondre si',
    'exact_case_sensitive' => 'Correspond exactement à (sensible à la casse)',
    'exact_case_insensitive' => 'Correspond exactement (insensible à la casse)',
    'contains' => 'Contient le message',
    'regular_expression' => 'Correspond exactement à cette expression régulière',
    'success_update_response' => 'Réponse mise à jour avec succès.',
    'edit_response' => 'Editer la réponse',
    'success_responses_removed' => '%count% réponses supprimées avec succès.',
    'success_response_removed' => '%count% réponse supprimée avec succès.',
    'remove_responses_confirmation' => 'Vraiment supprimer les réponses sélectionnées ?',
    'error_unable_to_remove_responses' => 'Impossible de supprimer les réponses sélectionnées',
    'response' => 'Réponse',
    'success_add_response' => 'Réponse ajoutée avec succès.',
    'responses' => 'Réponses',
    'add_response' => 'Ajouter une réponse',
    'auto_responder' => 'Réponse automatique',
    'unlimited_credits' => 'crédits infinis',
    'credit' => 'crédit',
    'error_contacts_limit_reached' => 'Nombre maximum de contacts autorisé dépassé.',
    'contact' => 'contact',
    'unlimited_contacts' => 'contacts infinis',
    'unlimited_devices' => 'équipements infinis',
    'max_contacts' => 'Maximum de contacts',
    'error_max_contacts_not_number' => 'Maximum de contacts devrait être un nombre.',
    'earnings' => 'Gains',
    'active_subscriptions' => 'Souscription actives',
    'auto_retry_setting' => 'Réitération automatique de message en échec',
    'hour' => 'heure',
    'hours' => 'heures',
    'day' => 'jour',
    'minutes' => 'minutes',
    'retry_time_interval_label' => 'Intervalle de temps pour la réitération',
    'max_retries_label' => 'Maximum de réitérations',
    'error_subscription_expired' => 'Votre souscription a expirée. Renouvellement de votre souscription pour garder cet application active.',
    'no' => 'Non',
    'yes' => 'Oui',
    'all_time' => 'Tout le temps',
    'never' => 'Jamais',
    'days' => 'Jours',
    'cancel_subscription_confirmation' => 'Vraiment annuler la souscription ?',
    'id' => 'ID',
    'reply' => 'Répondre',
    'unlimited' => 'Infini',
    'forever' => 'fin du monde',
    'expiry_date' => 'Expiration le',
    'payment_id' => 'ID de paiement',
    'amount' => 'Montant',
    'transaction_fee' => 'Frais de transaction',
    'payments' => 'Paiments',
    'payment_method' => 'Méthode de paiment',
    'subscribed_date' => 'Date de souscription',
    'renew_date' => 'Date de renouvellement',
    'subscription_id' => 'ID de souscription',
    'plan_already_exists' => 'Un plan existe déjà avec le même nom.',
    'switch_plan' => 'Basculer vers un autre plan',
    'success_subscription_canceled' => 'Souscription annulée avec succès.',
    'error_subscription_not_found' => 'Souscription non trouvée !',
    'success_subscribed' => 'Vous avez souscrit à ce plan avec succès.',
    'cancel' => 'Annuler',
    'subscribe' => 'Souscrire',
    'subscriptions' => 'Souscriptions',
    'success_edit_plan' => 'Plan mis à jour avec succès.',
    'enabled' => 'Activé',
    'billing_cycle' => 'Période de facturation',
    'success_create_plan' => 'Nouveau plan de souscription ajouté avec succès.',
    'edit_plan' => 'Editer le plan',
    'frequency_unit' => 'Unité de fréquence',
    'frequency' => 'Fréquence',
    'currency' => 'Devise',
    'price' => 'Prix',
    'add_plan_form_title' => 'Ajouter le plan',
    'plans' => 'Plans',
    'plan' => 'Plan',
    'error_updating_config' => 'Mise à jour de la configuration impossible. Vérifiez les permissions sur le fichier.',
    'enable_registration' => 'Activer les enregistrements par les utilisateurs sur ce site',
    'error_invalid_integer_value' => 'Valeur non conforme pour %field%. Valeur numérique attendue.',
    'credentials_type' => 'Type authentifiants',
    'client_id' => 'Client ID',
    'secret' => 'Secret',
    'payment_gateway' => 'Passerelle de paiment',
    'emails' => 'Emails',
    'success_save_settings' => 'Réglages sauvegardés avec succès.',
    'general' => 'Général',
    'registration' => 'Enregistrement',
    'site_name' => 'Nom du site',
    'site_description' => 'Description du site',
    'copyright_name' => 'Nom du copyright',
    'language' => 'Langage',
    'secret_key' => 'Clé secrète',
    'site_key' => 'Clé du site',
    'hostname' => 'Nom de cet hôte',
    'port' => 'Port',
    'encryption' => 'Encryption',
    'debug' => 'Debug',
    'username' => 'Nom utilisateur',
    'application_copyright' => '<strong>Copyright &copy; 2022-%present% <a href="%url%" id="company_url">%name%</a></strong>. Tous droits réservés.',
    'add_device_instructions' => 'Suivre ces étapes pour ajouter votre mobile Android.',
    'add_device_step_1' => 'Télécharger la dernière version de cette application Android depuis ce lien <a href="%app_url%">EN CLIQUANT ICI</a>. Important : mieux vaut télécharger depuis votre mobile directement avec ce lien.',
    'add_device_step_2' => 'Installer sur le mobile. Si vous ne savez pas installer ces apps en dehors du store alors suivre ce lien : <a href="https://android.gadgethacks.com/how-to/android-101-sideload-apps-by-enabling-unknown-sources-install-unknown-apps-0161947/" target="_blank">GUIDE INSTALLATION HORS STORE</a>.',
    'add_device_step_3' => 'Ouvrir cette application après son installation, il vous sera demandé un octroi de permissions. Autoriser ou cliquer Oui aux demandes lors de votre installation. La fenêtre de login va apparaître. Option se connecter avec "QR CODE" possible.',
    'add_device_step_4' => 'Bravo, vous avez installé cette application avec succès et le mobile est dans le système. Ouvrez maintenant la page expéditeur avec le menu de navigation et commencer les envois de messages.',
    'add_device' => 'Ajouter un équipement',
    'error_parsing_qr_code' => 'Erreur au parsing du QR code. SVP réssayer encore de le scanner.',
    'null_value' => 'Inconnu',
    'android_version' => 'Version Android',
    'app_version' => 'Version Application',
    'error_invalid_schedule_time' => 'La programmation implique une date postérieure à maintenant.',
    'success_messages_scheduled' => '%count% messages programmés avec succès.',
    'success_message_scheduled' => '%count% message programmé avec succès.',
    'success_scheduled' => 'Planification réalisée avec succès.',
    'faqs' => 'FAQs',
    'support' => 'Support',
    'faqs_link' => 'Les FAQs sont accessibles en suivant <a target="_blank" href="https://reconquete.fibit.fr/faqs.php">CE LIEN</a>.',
    'support_link' => 'Ouvrir un ticket de support <a target="_blank" href="https://reconquete.fibit.fr/support.php">via ce lien</a>.',
    'cron_job_instructions' => 'Ajouter un cronjob en exécutant la commande suivante dans un shell.',
    'cron_job' => 'Cronjob pour les messages planifiés',
    'success_installation' => 'Votre installation est terminée avec succès.',
    'schedule' => 'Planifier',
    'scheduled' => 'Planifié',
    'tooltip_schedule' => 'La planification utilise un fuseau horaire précisé sur votre profil alors aligner avec celui du mobile.',
    'error_missing_excel_file' => 'SVP utiliser votre explorateur et sélectionner le fichier excel à uploader.',
    'send_message_to_contacts' => 'Envoyer un message à votre liste de contacts',
    'contacts_message_placeholder' => 'Vous pouvez utiliser un message type comme suit et il le remplacera.
&quot;Bonjour %name%, Comment va ?&quot;',
    'change_subscription' => 'Changer de souscription',
    'manage_contacts' => 'Gérer les contacts',
    'subscribed' => 'Souscrit',
    'remove_list' => 'Supprimer la liste',
    'contacts_list' => 'Liste de contacts',
    'import_contacts' => 'Import de contacts',
    'unsubscribe_link' => 'Pour vous désinscrire cliquer sur ce lien ou envoyer "STOP %listId%".\n%unsubscribeURL%?number=%number%&listID=%listID%',
    'error_invalid_list_id' => 'ID de liste non conforme ! Impossible de trouver cet ID dans la liste des contacts.',
    'change_subscription_confirmation' => 'Vraiment changer la souscription des contacts sélectionnés ?',
    'error_already_unsubscribed' => 'Cet ID est déjà désinscrit de la liste.',
    'error_no_subscribers' => 'Aucun souscripteur présent dans la liste des contacts.',
    'error_not_a_subscriber' => 'Cet ID est absent de la liste des souscripteurs.',
    'error_invalid_number' => 'Ce mobile est absent de la liste. Précisez un numéro de mobile conforme.',
    'success_unsubscribed' => 'Vous avez été désinscrit(e) de cette liste de contacts.',
    'success_contacts_subscription_changed' => 'Status de souscription changé pour %count% contacts.',
    'success_contact_subscription_changed' => 'Status de souscription modifié pour for %count% contact.',
    'success_contacts_removed' => '%count% contacts supprimés avec succès.',
    'success_contacts_list_removed' => 'Liste de contacts supprimée avec succès.',
    'success_contact_removed' => '%count% contact supprimé avec succès',
    'remove_contacts_confirmation' => 'Vraiment supprimer ces contacts ?',
    'error_no_contacts_found' => 'Aucun (nouveau) contact trouvé depuis le fichie uploadé.',
    'success_contacts_saved' => '%count% contacts ajoutés avec succès.',
    'success_contact_saved' => '%count% contact ajouté avec succès.',
    'error_contacts_list_exist' => 'Une liste de contacts existe déjà sous ce nom. Utiliser un autre nom de liste.',
    'error_contact_exist' => 'Ce mobile existe déjà dans cette liste de contacts.',
    'success_new_contact' => 'Nouveau contact ajouté avec succès.',
    'error_list_name_required' => 'Le nom de la liste de contacts ne peut être vide.',
    'success_create_list' => 'Nouvelle liste de contacts ajoutée avec succès.',
    'remove_contacts_list_confirmation' => 'Vraiment supprimer la liste de contacts sélectionnée ?',
    'add_contact' => 'Ajouter un contact',
    'contacts' => 'Contacts',
    'create_list' => 'Créer une liste de contacts',
    'list_name' => 'Nom de la liste de contacts',
    'create' => 'Créer',
    'delivered' => 'Livré',
    'default' => 'Par Défaut',
    'sim' => 'SIM',
    'error_no_sim_present' => 'SIM absente au slot index %slot%. SVP redemmarer votre application mobile si votre SIM a été récemment insérée.',
    'sent_date' => 'Envoi le',
    'delivered_date' => 'Livré le',
    'sign_in' => 'Login',
    'sign_in_message' => 'Se connecter pour démarrer votre session',
    'forget_password_link' => 'Mot de passe oublié',
    'error_removing_upgrade_script' => '%type% avec succès mais erreur en supprimant le fichier "upgrade.php". Enlever à la main après avoir réouvert <a href="index.php">CE LIEN</a> pour vous reconnecter.',
    'error_removing_install_directory' => 'Erreur au moment de supprimer le dossier "install" directory. Enlever manuellement vous devez.',
    'error_incorrect_credentials' => 'Email ou mot de passe incorrect.',
    'error_incorrect_api_key' => 'API key invalide.',
    'success_update' => 'Mise à jour vers la version v%version% réalisée avec succès. Cliquer <a href="index.php">ICI</a> pour vous reconnecter.',
    'purchase_code' => 'CODE ACHAT ENVATO',
    'dashboard' => 'Tableau de bord',
    'more_info' => 'En savoir plus',
    'sent' => 'Envoyé',
    'failed' => 'Echec',
    'available' => 'Crédits disponibles',
    'used' => 'Credits Utilisés',
    'queued' => 'En file d\'attente',
    'pending' => 'En attente',
    'profile' => 'Profil',
    'edit_user' => 'Editer cet utilisateur',
    'close' => 'Fermer',
    'save_changes' => 'Sauvegarder les changements',
    'add_webhook' => 'Ajouter des WebHook pour les messages reçus',
    'webhook_url' => 'WebHook URL',
    'api' => 'API',
    'api_test' => 'Générer un lien de test pour cette API',
    'api_key' => 'API Key',
    'generate_link' => 'Générer un lien',
    'manage_users' => 'Gérer les utilisateurs',
    'select_user' => 'Sélectionner cet utilisateur',
    'messages' => 'Messages',
    'sender' => 'Envoyer',
    'devices' => 'Equipements',
    'select_device' => 'Sélectionner un équipement',
    'online' => 'En ligne',
    'download_example_excel' => 'Télécharger un fichier exemple',
    'installation' => 'Installation',
    'installation_of_app' => 'Installation de %app%',
    'toggle_navigation' => 'Basculer la navigation',
    'error_creating_config' => 'Impossible de créer la configuration. Vérifiez les permissions pour créer le fichier.',
    'error_device_not_found' => 'Cet équipement est absent de la base de données.',
    'error_email_registered' => 'Cet email est déjà enregistré.',
    'error_credits_depleted' => 'Crédits insufisants pour cette opération. SVP ajouter des crédits pour continuer.',
    'error_send_email_register' => 'Erreur en envoyant les informations de cet enregistrement. %errorMessage%',
    'success_registration' => 'Utilisateur ajouté avec succès à la base de données. Celui-ci va recevoir ses informations de connexion par email.',
    'add_user_form_title' => 'Ajouter un utilisateur',
    'error_dialog_title' => 'Erreur !',
    'success_dialog_title' => 'Succès',
    'name' => 'Nom',
    'error_name_empty' => 'Le nom doit être complété.',
    'device_name' => 'Equipement',
    'email' => 'Email',
    'device_model' => 'Modèle',
    'password' => 'Mot de passe',
    'confirm_email' => 'Confirmer votre email',
    'create_user' => 'Créer cet utilisateur',
    'remove' => 'Supprimer',
    'database_server' => 'DB Server',
    'database_name' => 'DB Name',
    'database_user' => 'DB User',
    'database_password' => 'DB Password',
    'firebase_server_key' => 'FireBase Server Key',
    'firebase_sender_id' => 'FireBase Sender ID',
    'install' => 'Installer',
    'total_messages' => 'Total de messages',
    'connected_devices' => 'Equipements connectés',
    'mobile_numbers' => 'Numéros de mobiles',
    'mobile_numbers_placeholder' => '+33787675645,+33675463423',
    'device_status' => 'Status de cet équipement',
    'date_added' => 'Date de cet ajout',
    'error_uploading_excel_file' => 'Problème en envoyant ce fichier. Essayer plus tard.',
    'error_no_device_selected' => 'SVP choisir à minima un équipement pour envoyer des messages.',
    'error_unable_to_remove_users' => 'Impossible de supprimer les utilisateurs sélectionnés.',
    'error_unable_to_remove_devices' => 'Impossible de supprimer les équipements sélectionnés.',
    'remove_devices_confirmation' => 'Vraiment supprimer les équipements sélectionnés ?',
    'remove_messages_confirmation' => 'Vraiment supprimer les messages sélectionnés ?',
    'remove_users_confirmation' => 'Les utilisateurs sélectionnés seront supprimés avec leurs messages. Vraiment supprimer les utilisateurs sélectionnés ?)',
    'search_form_title' => 'Recherche dans les messages',
    'success_edit_user' => 'Données sauvegardées avec succès pour %name% [<a href="mailto:%email%">%email%</a>].',
    'all_users' => 'Tous les utilisateurs',
    'all_devices' => 'Tous les équipements',
    'unknown_device' => 'Inconnu',
    'credits' => 'Crédits',
    'max_devices' => 'Maximum en équipements',
    'mobile_number' => 'Numéro de mobile',
    'last_login' => 'Dernière connexion',
    'split' => 'Répartir les messages entre les équipements',
    'status' => 'Status',
    'status_all' => 'Tous',
    'start_date' => 'Début le',
    'end_date' => 'Fin le',
    'page_no' => 'Page n.',
    'select_all' => 'Sélectionner tout',
    'search' => 'Rechercher',
    'export' => 'Exporter',
    'resend' => 'Ré-expédier',
    'delay' => 'Delai',
    'timezone' => 'Fuseau horaire',
    'device' => 'Equipement',
    'save' => 'Sauvegarder',
    'page_limit' => 'Nombre de messages par jour par page',
    'received' => 'Reçus',
    'primary_device' => 'Equipement primaire',
    'device_settings' => 'Réglages de votre équipement',
    'messages_count' => 'Messages ${start}-${end} sur ${result.totalCount}',
    'no_messages_found' => 'Aucun message.',
    'error_dialog_message' => 'Cette opération ne peut pas se réaliser.',
    'success_dialog_message' => 'Opération réussie.',
    'error_devices_limit_reached' => 'Limite des équipements actifs autorisés pour ce compte atteinte.',
    'error_max_devices_not_number' => 'Le nombre maximum pour les équipements doit être une valeur numérique.',
    'error_credits_not_number' => 'Le nombre de crédits devrait être une valeur numérique.',
    'error_password_incorrect' => 'Le mot de passe utilisé est incorrect.',
    'error_delay_limit' => "Le délai doit se situer entre 0 et 120s.",
    'error_delay_not_numeric' => "Le délai doit être une valeur numérique.",
    'error_device_name' => 'Le nom de cet équipement doit disposer de moins de 26 caractères.',
    'success_device_settings' => 'Réglages équipement sauvegardés avec succès',
    'success_password_changed' => 'Mot de passe changé avec succès !',
    'success_settings_changed' => 'Réglages changés avec succès.',
    'change_password' => 'Changer le mot de passe',
    'current_password' => 'Mot de passe actuel',
    'new_password' => 'Nouveau mot de passe',
    'confirm_password' => 'Confirmer le mot de passe',
    'settings' => 'Réglages',
    'delay_setting' => 'Delai entre les message (0-120)',
    'report_delivery_setting' => 'Demander un rapport de livraison pour chaque message envoyé (SMS seulement)',
    'success_devices_removed' => '%count% équipements supprimés avec succès.',
    'success_device_removed' => '%count% équipement supprimé avec succès.',
    'success_users_removed' => '%count% utilisateurs supprimés avec succès.',
    'success_user_removed' => '%count% utilisateur supprimé avec succès.',
    'success_messages_removed' => '%count% messages supprimés avec succès.',
    'success_message_removed' => '%count% message supprimé avec succès.',
    'success_messages_sent' => '%count% messages envoyés avec succès.',
    'success_message_sent' => '%count% message envoyé avec succès.',
    'error_zero_messages' => 'Aucun message à envoyer.',
    'error_invalid_request_format' => 'Format de requête invalide.',
    'error_use_valid_number' => 'SVP utiliser un numéro de mobile valide.',
    'reset_password' => 'Réinitialiser le mot de passe',
    'error_email_not_exist' => 'Email absent de la base de données.',
    'error_link_expired' => 'Le lien pour regénérer le mot de passe a expiré.',
    'error_link_invalid' => 'Le lien pour régénérer le mot de passe est invalide.',
    'error_send_email_reset_password' => 'Erreur en envoyant les informations de regénération de mot de passe.',
    'success_reset_password' => 'Votre mot de passe a été réinitialisé avec succès ! Vérifiez votre boîte mail pour obtenir les nouveaux identifiants de connexion.',
    'success_password_reset_link' => 'Vous allez recevoir par email un lien de réinitialisation.',
    'forget_password' => 'Oubli de mot de passe',
    'reset_your_password' => 'Réinitialiser le mot de passe',
    'message' => 'Message',
    'send' => 'Envoyer',
    'send_multiple_messages' => 'Envoyer de multiples messages',
    'send_message' => 'Envoyer le message',
    'php_integration' => 'PHP Intégration',
    'php_integration_instruction' => 'Inclure le code suivant dans votre fichier php pour commencer à envoyer des messages.',
    'webhook_example' => 'WebHook exemple',
    'webhook_instruction' => 'Créer un script avec le contenu suivant et produire son url comme WebHook.',
    'success_save_webhook' => 'WebHook sauvegardé avec succès.',
    'error_invalid_webhook_url' => 'SVP fournir une url valide pour ce WebHook.',
    'success_remove_webhook' => 'WebHook supprimé avec succès.',
    'send_single_message' => 'Envoyer un message unique',
    'send_bulk_messages' => 'Envoyer une salve de messages',
    'get_balance' => 'Récupérer les crédits restants',
    'get_messages' => 'Récupérer les messages et leurs status actuels',
    'get_credits' => 'Obtenir des crédits',
    'c#_integration' => 'C# Intégration (<a href="https://github.com/ravibpatel/Gateway-Sample-Application" target="_blank">Projet Exemple</a>)',
    'c#_integration_instruction' => 'Créer un fichier nommé Gateway.cs dans votre projet et colle ce code. Ajouter <a href="https://www.nuget.org/packages/Newtonsoft.Json" target="_blank">Newtonsoft.Json NuGet package</a> à votre projet.',
    'error_missing_fields' => 'Tous les champs sont requis.',
    'success_sent' => 'Message envoyé avec succès.',
    'disconnected' => 'Déconnecté',
    'connected' => 'Connecté',
    'success_register' => 'Merci de votre interêt dans cette application :  %app%. Vous recevrez les informations de votre enregistrement via email.',
    'register' => 'Enregistrement',
    'register_demo' => 'Enregistrement pour une démo',
    'register_sign_in_link' => 'Je suis déjà inscris en tant que membre',
    'error_captcha_failed' => 'Validation captcha erronée, veuillez réessayer.',
    'error_no_active_device_found' => 'Aucun équipement actif sur ce compte utilisateur.',
    'error_unable_to_connect_user' => 'Impossible de connecter cet équipement. Assurez-vous de vous être authentifiés sur le mobile %device%.',
    'error_unable_to_connect_other' => 'Impossible de coonecter cet équipement. Assurez-vous que cet utilisateur : %user%(%userEmail%) est loggé sur son application et %device%.',
    'error_no_messages_found' => 'Aucun message trouvé dans le fichier uploadé.',
    'error_nothing_to_update' => 'Aucun changement à répercuter.',
    'error_blocked_file_extension' => 'Impossible à envoyer. Extension non autorisée.',
    'upload_excel_file' => 'Verser le fichier Excel ici ou cliquer pour envoyer.',
    'upload_excel_file_mobile' => 'Cliquer ici pour envoyer le fichier Excel.',
    'register_email_subject' => '%app% Administration | Informations liées à votre enregistrement',
    'register_email_body' => '<p>Cher %user%,</p>

<p>Bienvenue ! Cette page permet une totale administration de votre application %app%.</p>

<p>Votre compte est effectif et vous avez un accès à %app% et le site web associé pour sa gestion.</p>

<p>
Votre login :<br/>
Adresse du serveur de gestion : <a href="%server%">%server%</a><br/>
Email: %userEmail%<br/>
Votre mot de passe : %password%<br/>
</p>

<p>Vous devez télécharger une application Android depuis <a href="%appUrl%">CE LIEN</a> et entrer les informations ci-dessus pour vous connecter. Si vous ne savez pas charger des applications hors Google Play Store, consultez  <a href="https://android.gadgethacks.com/how-to/android-basics-enable-unknown-sources-sideload-apps-0161947/"> ce guide pour les applications en dehors du Play Store</a>.</p>

<p>Un enregistrement est possible aussi grâce au bouton "QR CODE" et scanner le QR code joint permet de se logger sur le site.</p>

<p>Vous avez %credits%. Vous pouvez envoyer des messages avec %devices%. Vous pouvez stocker %contacts%. Vos crédits expireront : %expiryDate%. Si ces limites doivent changer contacter <a href="mailto:%adminEmail%">%adminEmail%</a>.</p>

<p>
Cordialement,<br/><br/>

Vive Reconquête !
</p>',

    'reset_password_email_subject' => '%app% Gestion SMS | Regénérer un mot de passe',
    'reset_password_email_body' => '<p>Cher %user%,</p>
    
<p>Votre mot de passe a été réinitialisé avec succès. Vous pouvez vous connecter à la page de gestion de votre application %app% en utilisant les informations suivantes.</p>
    
<p>
Login:<br/>
Serveur: <a href="%server%">%server%</a><br/>       
Email: %userEmail%<br/>
Mot de passe : %password%<br/>
</p>

<p>Pour toute question que vous jugeriez utile, contactez <a href="mailto:%adminEmail%">%adminEmail%</a>.</p>
    
<p>
Cordialement,<br/>
%admin%<br/>

Vive Reconquête !
</p>',
    'reset_password_link_email_subject' => '%app% Gestion | Lien de réinitialisation du mot de passe',
    'reset_password_link_email_body' => '<p>Cher %user%,</p>
        
<p>SVP utilisez le lien suivant pour regénérer votre mot de passe. Ce lien va expirer après 24 heures.</p>

<h2><a href="%server%/reset-password.php?email=%userEmail%&code=%code%">Cliquer ici pour réinitialiser votre mot de passe</a></h2>
        
<p>Pour toute question, contactez <a href="mailto:%adminEmail%">%adminEmail%</a>.</p>
        
<p>
Cordialement,<br/>
%admin%<br/>
<br/>
Vive Reconquête !
</p>',
    'edit_user_subject' => '%app% | Updated Limits',
    'edit_user_email_body' => '<p>Cher %user%,</p>

<p>Vous avez %credits%. Vous pouvez envoyer des messages en utilisant %devices%. Vous pouvez stocker %contacts%. Vos crédits expireront le %expiryDate%.</p>
    
<p>Pour toute question contactez <a href="mailto:%adminEmail%">%adminEmail%</a>.</p>
    
<p>
Cordialement,<br/>
%admin%<br/>

<br/>
Vive Reconquête !
</p>'
];

// Application specific
include __DIR__ . "/../app.php";

// Internal
if (file_exists(__DIR__ . "/../internal.php")) {
    include __DIR__ . "/../internal.php";
}

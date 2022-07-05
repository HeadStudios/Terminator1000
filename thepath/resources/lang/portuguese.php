<?php

/**
 * Do not change this value if there is no DataTables translation available for your language.
 * You can check out the available translations using the following link.
 * @link https://cdn.datatables.net/plug-ins/1.10.19/i18n/
 */
$GLOBALS["dataTablesLanguage"] = "Portuguese";

$lang = [
    'tooltip_only_shared_devices' => 'Você pode defini-lo como 0 se quiser que o usuário use apenas dispositivos compartilhados pelo administrador. Isso impedirá que o usuário adicione seu próprio dispositivo ao sistema.',
    'selected_users' => 'Usuários selecionados',
    'demo_users' => 'Usuários de demonstração',
    'share_with' => 'Compartilhar com',
    'shared_devices' => 'dispositivos compartilhados pelo administrador',
    'skin_setting' => 'Pele',
    'black' => 'Branca',
    'black_light' => 'Luz branca',
    'blue' => 'Azul',
    'blue_light' => 'Luz Azul',
    'green' => 'Verde',
    'green_light' => 'Luz Verde',
    'purple' => 'Roxo',
    'purple_light' => 'Luz Roxa',
    'red' => 'Vermelho',
    'red_light' => 'Luz Vermelha',
    'yellow' => 'Amarelo',
    'yellow_light' => 'Luz Amarela',
    'add_numbers_blacklist_placeholder' => 'Insira um número de celular por linha',
    'use_owner_settings' => 'Use as configurações relacionadas ao dispositivo (atraso, relatórios de entrega e fila progressiva) definidas pelo administrador',
    'get_devices' => 'Obter dispositivos',
    'use_progressive_queue_setting' => 'Enviar a próxima mensagem na campanha somente após a mensagem atual ser processada pela operadora de rede',
    'hint' => 'Dica!',
    'blacklist_instruction' => 'Os usuários podem adicionar seu número à lista negra respondendo "STOP" à sua mensagem. Se você também estiver usando dispositivos compartilhados pelo administrador, eles devem usar "STOP %userID%" em vez de "STOP" para adicionar seu número à lista negra.',
    'error_no_valid_numbers_found' => 'Não foram encontrados números válidos que possam ser adicionados à lista negra.',
    'success_numbers_removed' => '%count% números removidos com sucesso.',
    'success_number_removed' => '%count% número removido com sucesso.',
    'success_add_to_blacklist' => 'Adicionado com sucesso à lista negra.',
    'remove_number_from_black_list_confirmation' => 'Tem certeza de que deseja remover os números selecionados da lista negra?',
    'add' => 'Adicionar',
    'blacklist' => 'Lista negra',
    'unshareable' => 'Não compartilhável',
    'error_device_not_owned' => 'Você só pode enviar solicitações USSD usando seus próprios dispositivos.',
    'no_one' => 'Ninguém',
    'shared_with' => 'Compartilhado com',
    'share_to_all' => 'Compartilhar para todos',
    'success_device_shared' => 'Dispositivo compartilhado/não compartilhado com sucesso.',
    'users' => 'Comercial',
    'share_device' => 'Compartilhar dispositivo',
    'error_unable_to_remove_plans' => 'Impossível remover os planos selecionados.',
    'remove_plans_confirmation' => 'De certeza que quer remover os planos selecionados?',
    'success_plans_removed' => '%count% planos removidos com sucesso.',
    'success_plan_removed' => '%count% plano removido com sucesso.',
    'success_regenerate_api_key' => 'Chave API gerada novamente com sucesso.',
    'regenerate_api_key_confirmation' => 'De certeza que quer gerar novamente a chave API? A sua chave antiga deixará de funcionar se selecionar esta opção!',
    'pending_ussd_requests' => 'Pedidos USSD pendentes',
    'sent_ussd_requests' => 'Pedidos USSD enviados',
    'resend_requests_confirmation' => 'De certeza que quer enviar novamente os pedidos USSD selecionados?',
    'success_ussd_requests_resent' => '%count% pedidos USSD enviados novamente com sucesso.',
    'success_ussd_request_resent' => '%count% pedido USSD enviado novamente com sucesso.',
    'move_contacts' => 'Mover Contactos',
    'success_contacts_moved' => '%count% contactos movidos com sucesso.',
    'success_contact_moved' => '%count% contacto movido com sucesso.',
    'move_contacts_confirmation' => 'De certeza que quer mover os contactos selecionados?',
    'move' => 'Mover',
    'new_user_report_delivery_setting' => 'Pedir relatório de entrega por cada mensagem enviada pelo utilizador (Apenas SMS)',
    'tooltip_sleep_time' => 'Se ativar, vai prevenir o envio de todas as mensagens não prioritárias neste intervalo de tempo.',
    'appearance' => 'Apresentação',
    'reset_password_link' => 'Reset do Link da Password',
    'user_limits_update' => 'Atualizar Limites do Utilizador',
    'subject' => 'Expôr',
    'unsubscribe' => 'Cancelar Subscrição',
    'copyright' => 'Copyright',
    'android_app' => 'Aplicação Android',
    'links' => 'Links',
    'default_settings_new_users' => "Definições padrão para novos utilizadores",
    'new_user_limitations' => "Limitações do novo utilizador ( 0 → Ilimitados )",
    'message_footer_demo_users' => 'Mensagem de rodapé para os utilizadores demo',
    'download_app' => 'Download da Aplicação',
    'no_ussd_requests_found' => 'Pedidos USSD não encontrados.',
    'error_sim_not_exist' => 'Confirme se fez o login na aplicação no seu dispositivo #%deviceId% e que o cartão sim está bem colocado %simSlot%. Se o inceriu recentemente, abra a aplicação no telemóvel e adicione-a à base de dados.',
    'error_device_not_exist' => 'The device ID you specified is not found in the database, or you are not logged in to the app.',
    'success_ussd_requests_removed' => '%count% Pedidos USSD removidos com sucesso.',
    'success_ussd_request_removed' => '%count% Pedido USSD removido com sucesso.',
    'success_sent_ussd_request' => 'Pedido USSD enviado com sucesso.',
    'remove_requests_confirmation' => 'De certeza que quer remover os pedidos USSD selecionados?',
    'response_at' => 'Resposta para',
    'sent_at' => 'Enviado para',
    'request' => 'Pedido',
    'ussd_requests' => 'Pedidos USSD',
    'ussd_request' => 'Pedido USSD',
    'send_ussd_request' => 'Pedido USSD enviado',
    'get_ussd_requests' => 'Obter pedidos USSD',
    'ussd' => 'USSD',
    'error_missing_data' => 'Existem dados em falta para poder cancelar a sua subscrição da lista. Confirme se está a copiar o URL todo da mensagem.',
    'error_paypal_requires_ssl' => 'Vai precisar de um certificado SSL instalado no seu domínio ou subdomínio para poder usar o PayPal. Se já instalou, confirme se está a usar um URL que começa com "https".',
    'tooltip_prioritize' => 'Enviar esta mensagem de imediato, mesmo se existir outra campanha em espera.',
    'add_device_instruction' => 'Pode seguir as etapas abaixo para adicionar o seu Android no sistema.',
    'error_invalid_sleep_time' => 'Indique, por favor, um tempo de silêncio válido. O valor de início e fim devem ser diferentes.',
    'sleep_time_from' => 'Tempo de silêncio desde',
    'sleep_time_upto' => 'Tempo de silêncio até',
    'sleep_time' => 'Tempo de Silêncio',
    'prioritize' => 'Dar prioridade',
    'success_contacts_list_updated' => 'Nomes dos contactos da lista atualizado com sucesso.',
    'edit_contacts_list' => 'Editar Lista de Contactos',
    'edit_list' => 'Editar Lista',
    'error_creating_lock_file' => 'Ocorreu um erro ao criar o ficheiro bloqueado. Por favor confirme se este script tem as permissões necessárias para criar uma diretória.',
    'refresh' => 'Atualizar',
    'success_queued_contacts_import' => 'Importação do ficheiro de contactos em fila de espera.',
    'error_creating_directory' => 'Ocorreu um erro enquanto tentou criar a %name% diretória. Por favor confirme se este script tem as permissões necessárias para criar uma diretória.',
    'footer_text_label' => 'Texto de rodapé',
    'option' => 'Critérios de seleção do dispositivo',
    'use_selected_devices' => 'Usar dispositivos selecionados',
    'use_all_devices' => 'Usar cartão SIM padrão em todos os dispositivos',
    'use_all_sims' => 'Usar todos os cartões SIM de todos os dispositivos',
    'use_random_device' => 'Usar um dispositivo aleatório or cartão dos dispositivos selecionados', 
    'tooltip_android_app_url' => 'Este URL será usado como o link para o ficheiro APK no registo do email e outros registos. Por favor confirme que o altera para o seu URL APK.',
    'tooltip_mms' => 'A disponibilidade para MMS depende do país em que está e da sua operadora. Quem recebe a mensagem também tem de conseguir receber MMS. Esta função não deve ser confundida com RCS ou outros tipos de mensagem que o dispositivo possibilite (ex: Samsung message, Mi message etc.).',
    'tooltip_attachments' => 'Pode anexar vários ficheiros mas confirme se não excede o limite de 600 KB de espaço. Se o receptor ainda não conseguir receber a MMS, tente outra vez sem exceder os 300KB.',
    'attachments_invalid' => 'As imagens que anexou são inválidas.',
    'resend_messages' => 'Reenviar mensagens',
    'error_creating_upload_directory' => 'Ocorreu um erro enquanto fazia o download da diretória. Confirme se o script tem permissão para criar a pasta.',
    'error_uploading_attachment' => 'Ocorreu um erro enquanto fez o upload dos anexos. Confirme se o script tem permissão para escrever na pasta de uploads.',
    'tooltip_attachments_links' => 'Pode inserir vários links de imagens se os separar com uma vírgula, porém confirme se não fica nenhum espaço antes ou depois da vírgula.',
    'attachments_links' => 'Links para os anexos (*.png, *.jpg, *.gif, *.aac, *.3gp, *.amr, *.mp3, *.m4a, *.wav, *.mp4, *.txt, *.vcf)',
    'attachments' => 'Anexos (*.png, *.jpg, *.gif, *.aac, *.3gp, *.amr, *.mp3, *.m4a, *.wav, *.mp4, *.txt, *.vcf)',
    'type' => 'Escrever',
    'success_device_name_updated' => 'Nome do dispositivo inserido com sucesso.',
    'edit_device' => 'Editar dispositivo',
    'send_received_messages_to_email' => 'Enviar mensagens recebidas para o email',
    'tooltip_pusher' => 'Obter atualizações do status em tempo real e as mensagens recebidas no dashboard usando o pusher.',
    'app_id' => 'ID da Aplicação',
    'key' => 'Chave',
    'cluster' => 'Cluster',
    'pusher' => 'Pusher',
    'error_server_requirements_not_met' => 'O seu servidor não cumpre os requisitos. Por favor contacte o administrador do seu servidor para instalar o que está em falta.',
    'next' => 'Seguinte',
    'none' => 'Nenhum',
    'success_templates_removed' => '%count% templates removidos com sucesso.',
    'success_template_removed' => '%count% template removido com sucesso.',
    'success_update_template' => 'Template de SMS atualizado com sucesso.',
    'success_add_template' => 'Template de SMS adicionado com sucesso.',
    'remove_templates_confirmation' => 'De certeza que quer remover os templates de SMS selecionados?',
    'manage_templates' => 'Gerir templates',
    'add_template' => 'Adicionar template',
    'templates' => 'Templates',
    'template' => 'Template',
    'tooltip_delay' => 'Pode atribuir um intervalo de tempo aleatório. Por exemplo, se atribuir 20-40 como intervalo de tempo, a demora entre cada mensagem será escolhida aleatoriamente será entre 20 e 40 segundos.',
    'error_invalid_delay' => 'A demora deve ser numérica (ex: 20) ou a representar um intervalo (ex: 20-60).',
    'error_max_delay_smaller' => 'O valor máximo do intervalo deve ser maior que o valor mínimo.',
    'error_disposable_email_address' => 'Por favor, use um endereço de email não descartável para o seu registo!',
    'placeholder_auto_responder_message' => 'Pode usar o símbolo | para separar as várias mensagens. Se a sua mensagem conter o símbolo | use \| em vez de |.',
    'tooltip_total_cycles' => 'Ative o limite de vezes em que a subscrição será cobrada. Se não ativar, a sua subscrição para este plano ficará ativa até ser cancelada.',
    'cancelled' => 'Cancelada',
    'renews_until' => 'Renovada até',
    'refund' => 'Reembolso',
    'error_payment_not_found' => 'Impossível de encontrar o pagamento!',
    'success_payment_refunded' => 'Pagamento reembolsado com sucesso.',
    'refund_payment_confirmation' => 'De certeza que quer o reembolso deste pagamento?',
    'error_user_already_subscribed' => 'Impossível criar nova subscrição pois já existe uma subscrição ativa para este utilizador.',
    'success_create_subscription' => 'Nova subscrição adicionada com sucesso.',
    'year' => 'Ano',
    'month' => 'Mês',
    'week' => 'Semana',
    'create_subscription' => 'Criar subscrição',
    'error_total_cycles_not_number' => 'O total dos ciclos devem ser um número e maior do que zero.',
    'total_cycles' => 'Total de ciclos',
    'excel_message_placeholder' => 'Pode usar um marcador de posição como mostra a seguinte mensagem e irá ficar automaticamente com um valor apropriado.
&quot;Olá %name%, Como está?&quot;
No exemplo acima, on sistema vai substituir %name% com dados da coluna Nome. Deve ter uma coluna Nome no seu excel para que funcione.',
    'do_not_have_an_account' => 'Não tem conta?',
    'user' => 'Utilizador',
    'from_name' => 'Do nome',
    'from_address' => 'Do endereço de email',
    'tooltip_unsubscribe_url' => 'Pode adicionar um URL mais curto para que o URL de não subscrição poupe espaço na sua mensagem.',
    'tooltip_max_retries' => 'O número máximo de vezes que o sistema deve tentar reenviar mensagens falhadas.',
    'tooltip_retry_time_interval' => 'O espaço de tempo entre cada nova tentativa de envio das mensagens falhadas.',
    'smtp_debug_information' => 'SMTP debug information',
    'show_debug_info' => 'Mostrar informação depurada',
    'tooltip_message_multiple' => 'Os números de telemóvel do excel só serão utilizados quando colocar algo neste campo.',
    'buy_now' => 'Comprar agora',
    'favicon' => 'Favicon',
    'error_uploading_logo' => 'Ocorreu um erro ao fazer upload do logo. Confirme se o script tem permissão para escrever para a pasta de uploads.',
    'logo' => 'Logo',
    'expires_after' => 'Expira depois',
    'add_unsubscribe_link' => 'Adicionar Link para cancelar subscrição',
    'cycles_competed' => 'Ciclos completados',
    'respond_if' => 'Responder se',
    'exact_case_sensitive' => 'Correspondência exata (tem em consideração maiúsculas e minúsculas)',
    'exact_case_insensitive' => 'Correspondência exata (Não diferencia maiúsculas e minúsculas)',
    'contains' => 'Contem a mensagem',
    'regular_expression' => 'Corresponde à expressão regular',
    'success_update_response' => 'Resposta atualizada com sucesso.',
    'edit_response' => 'Editar resposta',
    'success_responses_removed' => '%count% respostas removidas com sucesso.',
    'success_response_removed' => '%count% resposta removida com sucesso.',
    'remove_responses_confirmation' => 'De certeza que quer remover as respostas selecionadas?',
    'error_unable_to_remove_responses' => 'Foi impossível remover as respostas selecionadas',
    'response' => 'Resposta',
    'success_add_response' => 'Resposta adicionada com sucesso.',
    'responses' => 'Respostas',
    'add_response' => 'Adicionar resposta',
    'auto_responder' => 'Auto Resposta',
    'unlimited_credits' => 'créditos ilimitados',
    'credit' => 'créditos',
    'error_contacts_limit_reached' => 'O número máximo de contactos permitidos foi excedido.',
    'contact' => 'contacto',
    'unlimited_contacts' => 'contactos ilimitados',
    'unlimited_devices' => 'dispositivos ilimitados',
    'max_contacts' => 'Máximo de contactos',
    'error_max_contacts_not_number' => 'O número máximo de contactos deve ser um número.',
    'earnings' => 'Ganhos',
    'active_subscriptions' => 'Subscrições ativas',
    'auto_retry_setting' => 'Auto tentativa de mensagens falhadas',
    'hour' => 'hora',
    'hours' => 'horas',
    'day' => 'dia',
    'minutes' => 'minutos',
    'retry_time_interval_label' => 'Voltar a tentar intervalo de tempo',
    'max_retries_label' => 'Máximo de novas tentativas',
    'error_subscription_expired' => 'A sua subscrição expirou. Renove a sua subscrição para poder continuar a utilizar esta aplicação.',
    'no' => 'Não',
    'yes' => 'Sim',
    'all_time' => 'Todo o tempo',
    'never' => 'Nunca',
    'days' => 'Dias',
    'cancel_subscription_confirmation' => 'De certeza que quer cancelar esta subscrição?',
    'id' => 'ID',
    'reply' => 'Resposta',
    'unlimited' => 'Ilimitado',
    'forever' => 'fim do mundo',
    'expiry_date' => 'Data de validade',
    'payment_id' => 'ID do pagamento',
    'amount' => 'Quantia',
    'transaction_fee' => 'Taxa de transação',
    'payments' => 'Pagamentos',
    'payment_method' => 'Método de pagamento',
    'subscribed_date' => 'Data de subscrição',
    'renew_date' => 'Renovar data',
    'subscription_id' => 'ID da subscrição',
    'plan_already_exists' => 'Já existe um plano com o mesmo nome.',
    'switch_plan' => 'Trocar de plano',
    'success_subscription_canceled' => 'Subscrição cancelada com sucesso.',
    'error_subscription_not_found' => 'Impossível de encontrar subscrição!',
    'success_subscribed' => 'Ativou um plano de subscrição com sucesso.',
    'cancel' => 'Cancelar',
    'subscribe' => 'Subscrever',
    'subscriptions' => 'Subscrições',
    'success_edit_plan' => 'Plano de subscrição atualizado com sucesso.',
    'enabled' => 'Ativado',
    'billing_cycle' => 'Ciclo de cobranças',
    'success_create_plan' => 'Novo plano de subscrição adicionado com sucesso.',
    'edit_plan' => 'Editar Plano',
    'frequency_unit' => 'Unidade de Frequência',
    'frequency' => 'Frequência',
    'currency' => 'Moeda',
    'price' => 'Preço',
    'add_plan_form_title' => 'Adicionar Plano',
    'plans' => 'Planos',
    'plan' => 'Plano',
    'error_updating_config' => 'Impossível atualizar ficheiro de configuração. Confirme se o script tem a permissão adequada para atualizar o ficheiro.',
    'enable_registration' => 'Ativar registo',
    'error_invalid_integer_value' => 'Valor inválido introduzido em %field%. Deve ser um valor numérico.',
    'credentials_type' => 'Tipo de credênciais',
    'client_id' => 'ID do cliente',
    'secret' => 'Secreto',
    'payment_gateway' => 'Forma de Pagamento',
    'emails' => 'Emails',
    'success_save_settings' => 'Definições guardadas com sucesso.',
    'general' => 'Geral',
    'registration' => 'Registo',
    'site_name' => 'Nome do site',
    'site_description' => 'Descrição do site',
    'copyright_name' => 'Nome do Copyright',
    'language' => 'Língua',
    'secret_key' => 'Chave secreta',
    'site_key' => 'Chave do site',
    'hostname' => 'Nome do anfitrião',
    'port' => 'Porta',
    'encryption' => 'Criptografia',
    'debug' => 'Depurar',
    'username' => 'Nome de utilizador',
    'application_copyright' => '<strong>Copyright &copy; 2018-%present% <a href="%url%" id="company_url">%name%</a></strong>. Todos os direitos reservados.',
    'add_device_instructions' => 'Pode seguir os passos abaixo para adicionar o seu dispositivo Android no sistema.',
    'add_device_step_1' => 'Faça download da última versão da aplicação Android daqui <a href="%app_url%">here</a>. É melhor fazer o download diretamente para o seu telemóvel.',
    'add_device_step_2' => 'Instale no seu telemóvel. Se não sabe como instalar aplicações que não estão disponíveis na Play Store pode seguir este link <a href="https://android.gadgethacks.com/how-to/android-101-sideload-apps-by-enabling-unknown-sources-install-unknown-apps-0161947/" target="_blank">this guide</a>.',
    'add_device_step_3' => 'Ao abrir a aplicação depois da instalação, terá de dar várias permissões. Apenas clique em Permitir ou Sim em todos os comandos e chegará à janela de login. Clique no botão "SIGN IN COM QR CODE" para fazer o scan do QR code que está abaixo.',
    'add_device_step_4' => 'Parabéns, adicionou o seu telemóvel Android ao sistema. Agora pode abrir a página para enviar usando o menu de navegação e começar a enviar mensagens.',
    'add_device' => 'Adicionar Dispositivo',
    'error_parsing_qr_code' => 'Ocorreu um erro ao ler o QR code. Faça o scan novamente, por favor.',
    'null_value' => 'Desconhecido',
    'android_version' => 'Versão Android',
    'app_version' => 'Versão App',
    'error_invalid_schedule_time' => 'A hora agendada deve ser maior que o tempo atual.',
    'success_messages_scheduled' => '%count% mensagens agendadas com sucesso.',
    'success_message_scheduled' => '%count% mensagem agendada com sucesso.',
    'success_scheduled' => 'Mensagem agendada com sucesso.',
    'faqs' => 'FAQs',
    'support' => 'Apoio',
    'faqs_link' => 'Pode encontrar as perguntas frequentes em <a target="_blank" href="https://support.rbsoft.org/knowledgebase/355">here</a>.',
    'support_link' => 'Se as FAQs não resolverem o problema que está a experienciar pode abrir um cartão de apoio em <a target="_blank" href="https://support.rbsoft.org">here</a>.',
    'cron_job_instructions' => 'Adicionar cron job executando o comando abaixo em linux shell. Se está a usar o Cpanel ou o Vesta Panel siga este guia <a target="_blank" href="https://smsgateway.rbsoft.org/docs/setting_up_the_cron_job_1.htm">here</a> para configurar o cron job.',
    'cron_job' => 'Cron job para mensagens agendadas',
    'success_installation' => 'A instalação foi concluída com sucesso.',
    'schedule' => 'Agendar',
    'scheduled' => 'Agendado',
    'tooltip_schedule' => 'O agendamento utiliza a hora local que está no seu perfil. Confirme, por favor, a hora local do seu dispositivo.',
    'error_missing_excel_file' => 'Por favor, pesquise e selecione o ficheiro excel que quer carregar.',
    'send_message_to_contacts' => 'Enviar uma mensagem para Lista de Contactos',
    'contacts_message_placeholder' => 'Pode utilizar um marcador como se pode ver na mensagem seguinte e irá automaticamente substituí-lo por um valor apropriado.
&quot;Olá %name%, Como está?&quot;',
    'change_subscription' => 'Alterar subscrição',
    'manage_contacts' => 'Gerir Contactos',
    'subscribed' => 'Subscrito',
    'remove_list' => 'Remover Lista',
    'contacts_list' => 'Lista de Contactos',
    'import_contacts' => 'Importar Contactos',
    'unsubscribe_link' => 'Para cancelar a subscrição, clicar no link seguinte ou responder "UNSUBSCRIBE %listId%".\n%unsubscribeURL%?number=%number%&listID=%listID%',
    'error_invalid_list_id' => 'Lista de ID inválida! Impossível encontrar a lista de contactos.',
    'change_subscription_confirmation' => 'De certeza que quer alterar o status da subscrição dos contactos selecionados?',
    'error_already_unsubscribed' => 'Este número já deixou de estar subscrito à lista.',
    'error_no_subscribers' => 'Não há subscritores presentes na lista de contactos.',
    'error_not_a_subscriber' => 'Este número não está presente na lista de subscritores.',
    'error_invalid_number' => 'Este número de telemóvel não foi encontrado na lista.',
    'success_unsubscribed' => 'Deixou de estar subscrito da lista de contactos.',
    'success_contacts_subscription_changed' => 'Status da subscrição para os %count% contactos alterada com sucesso.',
    'success_contact_subscription_changed' => 'Status da subscrição alterado para %count% contacto.',
    'success_contacts_removed' => '%count% contactos removidos com sucesso.',
    'success_contacts_list_removed' => 'Lista de contactos removida com sucesso.',
    'success_contact_removed' => '%count% contacto removido com sucesso.',
    'remove_contacts_confirmation' => 'De certeza que quer remover os contactos selecionados?',
    'error_no_contacts_found' => 'Não foram encontrados novos contactos no ficheiro carregado.',
    'success_contacts_saved' => '%count% contactos adicionados com sucesso.',
    'success_contact_saved' => '%count% contacto adicionado com sucesso.',
    'error_contacts_list_exist' => 'Este nome já existe na Lista de contactos. Por favor crie um nome único.',
    'error_contact_exist' => 'Este número já existe na sua lista de contactos.',
    'success_new_contact' => 'Novo contacto adicionado com sucesso.',
    'error_list_name_required' => 'O nome do contacto na lista não deve estar vazio.',
    'success_create_list' => 'Nova lista de contactos adicionada com sucesso.',
    'remove_contacts_list_confirmation' => 'De certeza que quer remover os contactos selecionados na lista?',
    'add_contact' => 'Adicionar contacto',
    'contacts' => 'Contactos',
    'create_list' => 'Criar Lista de Contactos',
    'list_name' => 'Nome da Lista de Contactos',
    'create' => 'Criar',
    'delivered' => 'Entregue',
    'default' => 'Default',
    'sim' => 'SIM',
    'error_no_sim_present' => 'Não existe um cartão SIM na ranhura %slot%. Por favor reinicie a aplicação SMS Gateway no seu dispositivo Android caso tenha inserido recentemente o cartão SIM.',
    'sent_date' => 'Data de envio',
    'delivered_date' => 'Data de Entrega',
    'sign_in' => 'Sign in',
    'sign_in_message' => 'Faça sign in para começar a sua sessão',
    'forget_password_link' => 'Esqueci-me da minha password',
    'error_removing_upgrade_script' => '%type% com sucesso mas ocorreu um erro ao remover "upgrade.php". Por favor remova manualmente clique em <a href="index.php">here</a> para fazer login.',
    'error_removing_install_directory' => 'Ocorreu um erro ao remover a diretória de "instalação". Por favor remova manualmente para continuar.',
    'error_incorrect_credentials' => 'O email ou a password estão incorrectos.',
    'error_incorrect_api_key' => 'A chave AKI é inválida.',
    'success_update' => 'Atualizado com sucesso para v%version%. Clique em <a href="index.php">here</a> para fazer login.',
    'purchase_code' => 'Código de Compra Envato',
    'dashboard' => 'Dashboard',
    'more_info' => 'Mais informação',
    'sent' => 'Enviado',
    'failed' => 'Falhado',
    'available' => 'Créditos disponíveis',
    'used' => 'Créditos usados',
    'queued' => 'Em fila de espera',
    'pending' => 'Pendente',
    'profile' => 'Perfil',
    'edit_user' => 'Editar utilizador',
    'close' => 'Fechar',
    'save_changes' => 'Guardar alterações',
    'add_webhook' => 'Adicionar WebHook para mensagens recebidas',
    'webhook_url' => 'WebHook URL',
    'api' => 'API',
    'api_test' => 'Gerar Link para testar API',
    'api_key' => 'Chave API',
    'generate_link' => 'Gerar Link',
    'manage_users' => 'Gerir utilizadores',
    'select_user' => 'Selecionar utilizador',
    'messages' => 'Mensagens',
    'sender' => 'Remetente',
    'devices' => 'Dispositivos',
    'select_device' => 'Selecionar Dispositivo',
    'online' => 'Online',
    'download_example_excel' => 'Download de ficheiro de exemplo',
    'installation' => 'Instalação',
    'installation_of_app' => 'Instalação de %app%',
    'toggle_navigation' => 'Navegação Toggle',
    'error_creating_config' => 'Impossível criar ficheiro de configuração. Confirme se o script tem a permissão adequada para criar o ficheiro.',
    'error_device_not_found' => 'Este dispositivo não existe na base de dados.',
    'error_email_registered' => 'Este email já se encontra registado.',
    'error_credits_depleted' => 'Os seus créditos são insuficientes para concluir esta operação. Por favor, adquira mais créditos para continuar.',
    'error_send_email_register' => 'Ocorreu um erro ao enviar o email de registo de informação. %errorMessage%',
    'success_registration' => 'Utilizador adicionado com sucesso à base de dados. Irão receber o registo de informação via email em breve.',
    'add_user_form_title' => 'Adicionar novo utilizador',
    'error_dialog_title' => 'Erro!',
    'success_dialog_title' => 'Com sucesso',
    'name' => 'Nome',
    'error_name_empty' => 'O nome não deve estar vazio.',
    'device_name' => 'Nome do dispositivo',
    'email' => 'Email',
    'device_model' => 'Modelo do dispositivo',
    'password' => 'Password',
    'confirm_email' => 'Confirmar Email',
    'create_user' => 'Criar Utilizador',
    'remove' => 'Remover',
    'database_server' => 'Base de dados do servidor',
    'database_name' => 'Nome da Base de Dados',
    'database_user' => 'Base de dados do utilizador',
    'database_password' => 'Base de Dados de Password',
    'firebase_server_key' => 'Serfvidor chave FireBase',
    'firebase_sender_id' => 'ID remetente FireBase',
    'install' => 'Instalar',
    'total_messages' => 'Total de mensagens',
    'connected_devices' => 'Dispositivos conectados',
    'mobile_numbers' => 'Números de telemóvel',
    'mobile_numbers_placeholder' => '+911234567890,+912345678901',
    'device_status' => 'Status do dispositivo',
    'date_added' => 'Data adicionada',
    'error_uploading_excel_file' => 'Ocorreu um erro ao fazer o upload do ficheiro. Por favor, tente mais tarde.',
    'error_no_device_selected' => 'Por favor, selecione pelo menos um dispositivo para enviar mensagens.',
    'error_unable_to_remove_users' => 'Impossível remover utilizadores selecionados.',
    'error_unable_to_remove_devices' => 'Impossível remover dispositivos selecionados.',
    'remove_devices_confirmation' => 'De certeza que quer remover os dispositivos selecionados?',
    'remove_messages_confirmation' => 'De certeza que quer remover as mensagens selecionadas?',
    'remove_users_confirmation' => 'Os utilizadores selecionados serão removidos juntamente com as suas mensagens. De certeza que quer remover os utilizadores selecionados?)',
    'search_form_title' => 'Procurar mensagens',
    'success_edit_user' => 'Dados guardados com sucesso para o utilizador %name% [<a href="mailto:%email%">%email%</a>].',
    'all_users' => 'Todos os utilizadores',
    'all_devices' => 'Todos os dispositivos',
    'unknown_device' => 'Desconhecido',
    'credits' => 'Créditos',
    'max_devices' => 'Dispositivos máximos',
    'mobile_number' => 'Número de telemóvel',
    'last_login' => 'Último login',
    'split' => 'Separar mensagens entre dispositivos',
    'status' => 'Status',
    'status_all' => 'Todos',
    'start_date' => 'Data de ínicio',
    'end_date' => 'Data de fim',
    'page_no' => 'Página Nr.',
    'select_all' => 'Selecionar tudo',
    'search' => 'Procurar',
    'export' => 'Exportar',
    'resend' => 'Enviar novamente',
    'delay' => 'Intervalo de tempo',
    'timezone' => 'Hora local',
    'device' => 'Dispositivo',
    'save' => 'Guardar',
    'page_limit' => 'Número de mensagens por página',
    'received' => 'Recebido',
    'primary_device' => 'Dispositivo primário',
    'device_settings' => 'Definições do dispositivo',
    'messages_count' => 'Apresentação ${start}-${end} das ${result.totalCount} mensagens',
    'no_messages_found' => 'Mensagens não encontradas.',
    'error_dialog_message' => 'A operação não foi concluída.',
    'success_dialog_message' => 'Operação completada com sucesso.',
    'error_devices_limit_reached' => 'O limite de dispositivos ativos permitido nesta conta foi alcançado.',
    'error_max_devices_not_number' => 'O valor máximo de dispositivos deve ser um número.',
    'error_credits_not_number' => 'Créditos de mensagem deve ser um número.',
    'error_password_incorrect' => 'A password está incorreta.',
    'error_delay_limit' => "O intervalo de tempo deve ser entre 0 to 120 segundos.",
    'error_delay_not_numeric' => "O intervalo de tempo deve ser numérico.",
    'error_device_name' => 'O nome do dispositivo deve conter menos de 25 caracteres.',
    'success_device_settings' => 'Definições do dispositivo guardadas com sucesso',
    'success_password_changed' => 'A sua password foi alterada com sucesso!',
    'success_settings_changed' => 'As suas definições foram alteradas com sucesso.',
    'change_password' => 'Alterar Password',
    'current_password' => 'Password atual',
    'new_password' => 'NovaPassword',
    'confirm_password' => 'Confirmar Password',
    'settings' => 'Definições',
    'delay_setting' => 'Intervalo entre mensagens (0-120)',
    'report_delivery_setting' => 'Pedir relatório de entrega para cada mensagem que enviar (Apenas SMS)',
    'success_devices_removed' => '%count% dispositivos removidos com sucesso.',
    'success_device_removed' => '%count% dispositivo removido com sucesso.',
    'success_users_removed' => '%count% utilizadores removidos com sucesso.',
    'success_user_removed' => '%count% utilizador removido com sucesso.',
    'success_messages_removed' => '%count% mensagens removidas com sucesso.',
    'success_message_removed' => '%count% mensagem removida com sucesso.',
    'success_messages_sent' => '%count% mensagens enviadas com sucesso.',
    'success_message_sent' => '%count% mensagem enviada com sucesso.',
    'error_zero_messages' => 'Não existem mensagens para enviar.',
    'error_invalid_request_format' => 'Formato de pedido inválido.',
    'error_use_valid_number' => 'Por favor utilize um número de telemóvel válido.',
    'reset_password' => 'Reset Password',
    'error_email_not_exist' => 'Este email não existe na base de dados.',
    'error_link_expired' => 'O link de redefinição da sua password expirou.',
    'error_link_invalid' => 'O link de redefinição da sua password é inválido.',
    'error_send_email_reset_password' => 'Ocorreu um erro com a informação de redefinição da password.',
    'success_reset_password' => 'A sua password foi redefinida com sucesso! Irá receber as credenciais para o seu novo login via email em breve.',
    'success_password_reset_link' => 'Irá receber o link para redefinição da password via email em breve.',
    'forget_password' => 'Esquecer Password',
    'reset_your_password' => 'Redefinir password',
    'message' => 'Mensagem',
    'send' => 'Enviar',
    'send_multiple_messages' => 'Enviar várias mensagens',
    'send_message' => 'Enviar mensagem',
    'php_integration' => 'Integração PHP',
    'php_integration_instruction' => 'Incluir o seguinte código no ficheiro PHP para começar a enviar mensagens.',
    'webhook_example' => 'Exemplo de Script WebHook',
    'webhook_instruction' => 'Criar script com o seguinte conteúdo e gerar URL como WebHook.',
    'success_save_webhook' => 'WebHook guardado com sucesso.',
    'error_invalid_webhook_url' => 'Por favor dê um URL válido para WebHook.',
    'success_remove_webhook' => 'WebHook removido com sucesso.',
    'send_single_message' => 'Enviar mensagem única',
    'send_bulk_messages' => 'Enviar mensagens em massa',
    'get_balance' => 'Obter restantes créditos de mensagens',
    'get_messages' => 'Obter mensagens e  seu status atual',
    'get_credits' => 'Obter créditos',
    'c#_integration' => 'C# Integração (<a href="https://github.com/ravibpatel/Gateway-Sample-Application" target="_blank">Example Project</a>)',
    'c#_integration_instruction' => 'Apenas crie um ficheiro nomeado Gateway.cs no seu projeto e cole o seguinte código no mesmo. Pode também precisar de adicionar <a href="https://www.nuget.org/packages/Newtonsoft.Json" target="_blank">Newtonsoft.Json NuGet package</a> ao seu projeto.',
    'error_missing_fields' => 'Todos os campos requerem preenchimento.',
    'success_sent' => 'Mensagem enviada com sucesso.',
    'disconnected' => 'Desconectado',
    'connected' => 'Conectado',
    'success_register' => 'Obrigada por demonstrar interesse na %app%. Irá receber mais informação sobre o registo via email em breve.',
    'register' => 'Registar',
    'register_demo' => 'Registar para a demo',
    'register_sign_in_link' => 'Já sou membro',
    'error_captcha_failed' => 'Verificação do Captcha falhada, por favor tente outra vez.',
    'error_no_active_device_found' => 'Não há nenhum dispositivo ativo associado a este utilizador de conta.',
    'error_unable_to_connect_user' => 'Impossível conectar ao dispositivo. Confirme se o seu login está feito na aplicação no seu %device%.',
    'error_unable_to_connect_other' => 'Impossível conectar ao dispositivo. Confirme se o utilizador %user%(%userEmail%) fez o login na aplicação no dispositivo %device%.',
    'error_no_messages_found' => 'Não foram encontradas mensagens no ficheiro carregado.',
    'error_nothing_to_update' => 'Não existem mudanças para atualizar.',
    'error_blocked_file_extension' => 'Impossível de fazer upload do ficheiro. Esta extensão de ficheiro não é permitida.',
    'upload_excel_file' => 'Largue aqui o ficheiro excel ou clique para fazer upload.',
    'upload_excel_file_mobile' => 'Toque aqui para fazer upload do ficheiro excel.',
    'register_email_subject' => '%app% Painel do Administrador | Informação de Registo',
    'register_email_body' => '<p>Olá %user%,</p>

<p>Bem-vindo ao Painel de Administração da %app%.</p>

<p>O seu registo foi confirmado e agora terá acesso ao Painel de Administração da %app%.</p>

<p>
O seu Login:<br/>
Servidor: <a href="%server%">%server%</a><br/>
Email: %userEmail%<br/>
Password: %password%<br/>
</p>

<p>É necessário fazer o download da aplicação Android a partir de <a href="%appUrl%">here</a> e colocar a informação abaixo para começar. Se não sabe instalar aplicações sem ser na Play Store, pode seguir o link <a href="https://android.gadgethacks.com/how-to/android-basics-enable-unknown-sources-sideload-apps-0161947/">guide to sideloading apps</a>.</p>

<p>Pode fazer sign in usando as credenciais fornecidas acima ou pode também clicar no botão "SIGN IN COM QR CODE" e fazer o scan do código QR no anexo para fazer sign in automaticamente.</p>

<p>Tem %credits%. Pode enviar mensagens usando %devices%. Pode guardar %contacts%. Os seus créditos são válidos até %expiryDate%. Caso queira alterar algum dos limites, por favor contacte <a href="mailto:%adminEmail%">%adminEmail%</a>.</p>

<p>
Cumprimentos,<br/>
%admin%
</p>',

    'reset_password_email_subject' => '%app% Painel de Administração | Redefinir Password',
    'reset_password_email_body' => '<p>Olá %user%,</p>
    
<p>A sua password foi redefinida com sucesso. Pode fazer log in no Painel de Administração da %app% utilizando as seguintes credenciais.</p>
    
<p>
O seu Login:<br/>
Servidor: <a href="%server%">%server%</a><br/>       
Email: %userEmail%<br/>
Password: %password%<br/>
</p>

<p>Se tem alguma questão, por favor contactar <a href="mailto:%adminEmail%">%adminEmail%</a>.</p>
    
<p>
Cumprimentos,<br/>
%admin%<br/>
</p>',
    'reset_password_link_email_subject' => '%app% Painel de Administração | Link de Refinição de Password',
    'reset_password_link_email_body' => '<p>Olá %user%,</p>
        
<p>Por favor, use o seguinte link para redefinir a sua password. Este link vai expirar após 24 horas.</p>

<h2><a href="%server%/reset-password.php?email=%userEmail%&code=%code%">Clique aqui para redefinir a sua password</a></h2>
        
<p>Se tiver alguma questão, por favor contacte <a href="mailto:%adminEmail%">%adminEmail%</a>.</p>
        
<p>
Cumprimentos,<br/>
%admin%<br/>
</p>',
    'edit_user_subject' => '%app% | Limites atualizados',
    'edit_user_email_body' => '<p>Olá %user%,</p>

<p>Tem agora %credits%. Pode enviar mensagens usando %devices%. Pode guardar %contacts%. Os seus créditos são válidos até %expiryDate%.</p>
    
<p>Se tiver alguma questão, por favor contacte <a href="mailto:%adminEmail%">%adminEmail%</a>.</p>
    
<p>
Cumprimentos,<br/>
%admin%<br/>
</p>'
];

// Application specific
include __DIR__ . "/../app.php";

// Internal
if (file_exists(__DIR__ . "/../internal.php")) {
    include __DIR__ . "/../internal.php";
}
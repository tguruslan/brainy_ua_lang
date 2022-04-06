<?php

$lang = array (
	'mailserver' => 'Поштовий сервер',
	'sendserver' => 'Сервер вихідної пошти',
	'receiveserver' => 'Сервер вхідної пошти',
	'customazing' => 'Налаштування',
	'version' => 'версія',
	'installed' => 'Встановлено',
	'install' => 'Встановити',
	'delete' => 'Видалити',
	'reinstall' => 'Перевстановлення',
	'stop' => 'Зупинити',
	'start' => 'Запустити',
	'restart' => 'Перезапустити',
	'send' => 'Надіслати',
	'mailserver_incl' => 'Увімкнути',
	'mailserver_off' => 'Вимкнути',
	'mailserver_queue_close' => 'Закрити',
	'mailserver_queue_delete' => 'Очистити чергу',
	'mailserver_queue_delete_force' => 'Очистити чергу примусово',
	'mailserver_queue_delete_frozen' => 'Видалити заморожені',
	'mailserver_queue_delete_ok' => 'Черга очищена успішно',
	'mailserver_queue_delete_progress' => 'Черга очищується. Будь ласка зачекайте',
	'mailserver_queue_count_mess' => 'Кількість повідомлень у черзі: ',
	'mailserver_queue_mess_resend' => 'Перенадіслати',

	'mailserver_reject_remote_mail' => 'Відхиляти пошту направлену на сервер',
	'mailserver_reject_spf' => 'Відхиляти пошту при невдачі SPF',
	'mailserver_reject_dmarc' => 'Відхиляти пошту при невдачі DMARC',
	'mailserver_reject_bounce' => 'Відхиляти пошту користувачів при перевищенні квоти',
	'mailserver_reject_smtp_sender' => 'Встановити SMTP перевірку заголовків відправника',

	'msg_mail_no_admin' => 'Не достатньо прав',
	'msg_mail_remove_all' => 'Видалити будь-які зв`язки',
	'msg_mail_progress_txt' => 'Виконується...',
	'msg_mail_module_on' => 'Увімкнено',
	'msg_mail_module_off' => 'Вимкнено',

	'mailserver_custom_save' => 'Список блеклистів оновлено',
	'mailserver_list_msg' => 'Список поштової черги',
	'mailserver_not_list_msg' => 'Список поштової черги порожній.',
	'mailserver_count_msg' => 'Кількість повідомлень',
	'mailserver_not_id_msg' => 'Відсутня id листа',
	'mailserver_not_server_send' => 'Відсутній або не вказаний сервер відправки листів',
	'mailserver_request_succecf' => 'Запит виконаний',
	'mailserver_not_dell_force' => 'Поштовий сервер не підтримує примусове видалення',
	'mailserver_not_dell_frozen' => 'Поштовий сервер не підтримує видалення заморожених листів',
	'mailserver_limit_send' => 'Обмеження на надсилання листів за годину:',
	'mailserver_save' => 'Зберегти',
	'mailserver_list_black' => 'Керування користувацьким RBLs (список блеклистів)',
	'mailserver_start_ok' => 'Запущено',
	'mailserver_stop_ok' => 'Зупинено',
	'mailserver_start_failed' => 'Запуск завершився з помилкою',
	'mailserver_no_queue' => 'Немає повідомлень у черзі',

  'mailserver_qualify_domain_title' => 'Налаштування qualify_domain',
  'mailserver_qualify_domain_hint' => 'Для надсилання листів з підписом DKIM, SPF, використовуючи функцію mail без заголовків, потрібно задати домен у qualify_domain, який має DKIM або SPF запис',
  'mailserver_qualify_label' => 'Значення qualify_domain',
  'mailserver_qualify_save' => 'Зберегти',
  'mailserver_qualify_save_failed' => 'Неправильний формат домену.',
  'mailserver_qualify_save_ok' => 'Збережено успішно. Сервіс перезапущений.',
  'mailserver_max_size_out_message' => 'Максимальний розмір листа Mb',
  'mailserver_error_format_number' => 'Помилки формату. Повинні бути цифри',
  'mailserver_success' => 'Успішно виконано',
  'mailserver_not_quality_domain' => 'У файлі конфігурації відсутня qualify_domain',
  'mailserver_mailorleaveemptydmarc' => 'Email адресу або залиште порожньою',
  'mailserver_queuetitle'=>'Черга',
  'mailserver_select_user'=>'Будь ласка, виберіть користувача',
  'mailserver_empty_named_spf'=>'Для правильної роботи cpf запису, повинен бути встановлений bind, і піднята днс зона для вашого сайту.',
  'mailserver_empty_named_dmarc'=>'Для правильної роботи dmarc запису, повинен бути встановлений bind, і піднята днс зона для вашого сайту.',
  'mailserver_empty_install_exim'=>'Не встановлено exim, внесені зміни не будуть збережені.',
);
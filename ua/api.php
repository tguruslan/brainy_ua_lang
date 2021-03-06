<?php

$lang = array(
    'api_code_1002'		=> 'Помилкова команда',
    'api_code_1000'		=> 'У вас немає прав для адміністрування користувача ',
    'api_code_1001'		=> 'Такий користувач відсутній у Brainy ',
    'api_code_1003'		=> 'У вас немає прав адміністратора ',
    'api_code_1004'		=> 'Не знайдено вхідних даних ',
    'api_code_2'		=> 'Помилка в параметрах! ',
    'api_code_addmail_3'	=> 'Виникла помилка при додаванні поштової скриньки: ',
    'api_code_addmail_0'	=> 'Нова поштова скринька була успішно додана: ',
    'api_code_addmail_1'	=> 'Така поштова скринька уже існує: ',
    'api_code_addmail_4'	=> 'Вказаний домен поштової скриньки не знайдений в системі: ',
    'api_code_delmail_0'	=> 'Почтова скринька була успішно видалена: ',
    'api_code_delmail_1'	=> 'Виникла помилка при видаленні поштової скриньки: ',
    'api_code_delmail_3'	=> 'Нічого видаляти, такої поштової скриньки не знайдено: ',
    'api_code_delforwardmail_0'	=> 'Перенаправлення поштової скриньки було успішно видалено ',
    'api_code_delforwardmail_1'	=> 'Виникла помилка при видаленні перенаправлення поштової скриньки: ',
    'api_code_addforwardmail_0'	=> 'Перенаправлення поштової скриньки було виконано успішно: ',
    'api_code_addforwardmail_1'	=> 'Виникла помилка при додаванні перенаправлення поштової скриньки: ',
    'api_code_addforwardmail_3'	=> 'Помилка в адресах поштових скриньок: ',
    'api_code_dkim_0'	=> 'OpenDkim успішно активований для ',
    'api_code_dkim_1'	=> 'Даний домен не знайдений для користувача ',
    'api_code_dkim_3'	=> 'OpenDkim уже запущений для ',
    'api_code_offdkim_0'	=> 'OpenDkim успішно відключений для ',
    'api_code_offdkim_1'	=> 'Даний домен не знайдений для користувача ',
    'api_code_spf_0'	=> 'SPF успішно активований для домену ',
    'api_code_spf_1'	=> 'Даний домен не знайдений для користувача ',
    'api_code_spf_3'	=> 'SPF уже увімкнений для домену ',
    'api_code_offspf_0'	=> 'SPF успішно відключений для домену ',
    'api_code_offspf_1'	=> 'Даний домен не знайдений для користувача ',
    'api_code_offspf_3'	=> 'SPF уже відключений для домену ',
    'api_code_getlistmail_0'	=> 'Список поштових скриньок успішно отримано для ',
    'api_code_getlistmail_1'	=> 'Ніяких поштових скриньок не було знайдено для ',
    'api_code_getforwardmail_0'	=> 'Список поштових скриньок успішно отримано для ',
    'api_code_getforwardmail_1'	=> 'Ніяких перенаправлень поштових скриньок не було знайдено  для ',

    'api_code_cron_min_1'      => 'Невірний формат заданих хвилин',
    'api_code_cron_hours_1'    => 'Невірний формат заданих годин',
    'api_code_cron_days_1'     => 'Невірний формат заданих днів',
    
    'api_code_cron_add_0'     => 'Нова задача cron була успішно додана для користувача: ',
    'api_code_cron_add_1'     => 'Помилка додавання нової задачі cron для користувача: ',
    'api_code_cron_edit_0'     => 'Задача cron була успішно відредагована для користувача: ',
    'api_code_cron_edit_1'     => 'Виникла помилка при редагуванні задачі для користувача ',
    'api_code_cron_edit_2'     => 'З такими значеннями задача не знайдена для користувача ',
    'api_code_cron_edit_4'     => 'Немає заданих значень. Нічого виконувати! ',
    'api_code_cron_del_0'     => 'Задача cron була успішно видалена для користувача: ',
    'api_code_cron_del_1'     => 'Виникла помилка при видаленні задачі для користувача ',
    'api_code_cron_del_2'     => 'З такими значеннями задача не знайдена для користувача ',
    'api_code_cron_list_0'     => 'Список задач було успішно отримано для користувача ',

    'api_code_cert_add_0'     => 'Новий сертифікат був успішно доданий для користувача: ',
    'api_code_cert_add_1'     => 'Виникла помилка при додаванні сертифікатів для користувача: ',
    'api_code_cert_list_0'     => 'Список сертифікатів був успішно отриманий для користувача: ',
    'api_code_cert_list_1'     => 'Помилка отримання списку сертифікатів для користувача: ',
    'api_code_cert_del_0'     => 'Ключ і сертифікат були успішно видаленні для користувача: ',
    'api_code_cert_del_1'     => 'Потрібний сертифікат не може бути видалений так як він використовується хостом.',
    'api_code_cert_del_2'     => 'Немає такого ключа та сертифіката. Нічого видаляти ',
    'api_code_cert_savedomain_0'     => 'Сертифікат був успішно встановлений для домену ',
    'api_code_cert_deldomain_0'     => 'Сертифікат був успішно видалений для домену ',
    'api_code_cert_listdomain_0'     => 'Список доменів з встановленими сертифікатами отриманий для користувача: ',


    'api_code_ftp_add_0'     => 'Новий користувач FTP був успішно доданий: ',
    'api_code_ftp_add_1'     => 'Такий користувач FTP вже існує: ',
    'api_code_ftp_add_2'     => 'Немає встановлених FTP серверів',
    'api_code_ftp_add_3'     => 'Відсутнє і`мя користувача в панелі',
    'api_code_ftp_add_4'     => 'Виникла помилка при додаванні нового користувача ',
    'api_code_ftp_del_0'     => 'Користувач FTP був успішно видалений ',
    'api_code_ftp_del_1'     => 'Такого користувача не знайдено ',
    'api_code_ftp_del_2'     => 'Немає встановлених FTP серверів',
    'api_code_ftp_del_3'     => 'Виникла помилка при видаленні користувача ',
    'api_code_ftp_quota_0'     => 'Квота була успішно змінена для користувача ',
    'api_code_ftp_quota_1'     => 'Не знайдено користувача ',
    'api_code_ftp_quota_2'     => 'Немає встановлених FTP серверів',
    'api_code_ftp_quota_3'     => 'Помилка зміни квоти для користувача ',
    'api_code_ftp_pass_0'     => 'Пароль був успішно змінений ',
    'api_code_ftp_pass_1'     => 'Не знайдено FTP користувач ',
    'api_code_ftp_pass_2'     => 'Немає встановлених FTP серверів ',
    'api_code_ftp_pass_3'     => 'Помилка зміни пароля для користувача ',
    'api_code_ftp_list_0'     => 'Список користувачів FTP був успішно отриманий для користувача ',
    'api_code_ftp_list_2'     => 'Немає встановлених FTP серверів',
    'api_code_ftp_list_3'     => 'Помилка отримання списків користувачів FTP для ',


    'api_code_prop_getinfo_0'     => 'Інформація була успішно отримана',
    'api_code_prop_getinfo_1'     => 'Виникла помилка при отриманні інформації',
    'api_code_prop_newtime_0'     => 'Виникла помилка при зміні часу.',
    'api_code_prop_tz_0'     => 'Часовий пояс був успішно змінений',
    'api_code_prop_tz_1'     => 'Виникла помилка при зміні часового пояса',
    'api_code_prop_tz_2'     => 'Вказаний некоректний часовий пояс',
    'api_code_prop_host_0'     => 'Нове і`мя хоста установлено',
    'api_code_prop_host_1'     => 'Виникла помилка при встановленні нового імені хоста',
    'api_code_prop_host_2'     => 'Вказане ім`я хоста некоректне',
    'api_code_prop_rootps_0'     => 'Пароль для root був успішно змінений',
    'api_code_prop_rootps_1'     => 'Виникла помилка при зміні пароля root',
    'api_code_prop_rootps_2'     => 'Новий пароль root дуже короткий, не менше 8 символів',
    'api_code_prop_brainyps_0'     => 'Пароль для brainysql був успішно змінений',
    'api_code_prop_brainyps_1'     => 'Виникла помилка при зміні пароля brainysql',
    'api_code_prop_brainyps_2'     => 'Новий пароль brainysql дуже короткий, не менше 8 символів',
    'api_code_prop_lang_0'     => 'Вибрана мова успішно встановлена: ',
    'api_code_prop_lang_2'     => 'Вказано неправильний параметр вибору мови: ',
    'api_code_prop_mail_0'     => 'Нові параметри успішно застосовані',
    'api_code_prop_mail_1'     => 'Виникла помилка при застосуванні нових параметрів',
    'api_code_prop_mail_2'     => 'Вказана поштова скринька некоректна',
    'api_code_prop_mail_3'     => 'Вказане ім`я хоста некоректне',
    'api_code_prop_mail_4'     => 'Не визначений порт або він некоректний',
    'api_code_prop_mail_5'     => 'Вказаний відправник пошти не коректний. Має бути smtp або phpmail',


    'api_code_acc_changeshell_0'     => 'Доступ до shell було змінено. Поточний стан: ',
    'api_code_acc_changeshell_1'     => 'Виникла помилка при спробі змінити доступ до shell',
    'api_code_acc_changeshell_2'     => 'Параметр shell містить неприпустиме значення. Допустимі: yes/no',
    'api_code_acc_changeshell_3'     => '',
    'api_code_acc_changelang_0'     => 'Вибрана мова була успішно змінена. Поточна мова: ',
    'api_code_acc_changelang_1'     => 'Виникла помилка під час спроби зміни мови',
    'api_code_acc_changelang_2'     => 'Параметр lang містить неприпустиме значення. Допустимі: ua/en',
    'api_code_acc_edituser_err_info'     => 'Помилки відсутні',
    'api_code_acc_edituser_0'     => 'Дані користувача були успішно редаговані',
    'api_code_acc_edituser_1'     => 'Сталася помилка під час редагування даних користувача: ',
    'api_code_acc_edituser_2'     => 'Жодної групи не було виявлено',
    'api_code_acc_edituser_3'     => 'Вказана група не була знайдена',
    'api_code_acc_edituser_4'     => 'Ім`я логіна має містити не менше 3 символів',
    'api_code_acc_edituser_5'     => 'Пароль повинен містити щонайменше 7 символів',
    'api_code_acc_edituser_10'     => '- помилка параметра. Допускаються лише цифри 0-9',
    'api_code_acc_edituser_6'     => 'Shell містить неправильні значення. Допустимо y/n',
    'api_code_acc_edituser_7'     => 'Жодного тарифного плану не було знайдено',
    'api_code_acc_edituser_8'     => 'Вказаного тарифного плану не існує',
    'api_code_acc_edituser_9'     => 'Вказано некоректну мову. Допустимі значення ua/en',
    'api_code_acc_deluser_0'     => 'Користувач був успішно вилучений',
    'api_code_acc_deluser_1'     => 'Виникла помилка при видаленні користувача',
    'api_code_acc_deluser_2'     => 'Не визначено користувача для видалення',
    'api_code_acc_adduser_0'     => 'Новий користувач був успішно доданий',
    'api_code_acc_adduser_1'     => 'Виникла помилка при додаванні користувача',
    'api_code_acc_adduser_2'     => 'Вказана група не знайдена',
    'api_code_acc_adduser_3'     => 'Зазначений план не знайдено',
    'api_code_acc_adduser_4'     => 'Ім`я логіну має містити не менше 3 символів',
    'api_code_acc_adduser_5'     => 'Пароль повинен містити щонайменше 7 символів',
    'api_code_acc_listuser_0'     => 'Список користувачів був успішно отриманий',
    'api_code_acc_listuser_1'     => 'Жодного користувача не було знайдено',
    'api_code_acc_listgroup_0'     => 'Список груп був успішно отриманий',
    'api_code_acc_listgroup_1'     => 'Жодної групи не було знайдено',
    'api_code_acc_listplan_0'     => 'Список тарифних планів було успішно отримано',
    'api_code_acc_listplan_1'     => 'Жодного тарифного плану не було знайдено',
    'api_code_acc_editplan_0'     => 'Тарифний план успішно відредаговано',
    'api_code_acc_editplan_1'     => 'Сталася помилка під час релактування тарифного плану',
    'api_code_acc_editplan_2'     => 'Вказаного плану не існує',
    'api_code_acc_editplan_3'     => 'Shell містить неправильні значення. Допустимо y/n',
    'api_code_acc_editplan_4'     => 'Вказано некоректну мову. Допустимі значення ua/en',
    'api_code_acc_editplan_10'     => ' - помилка параметра. Допускаються лише цифри 0-9',
    'api_code_acc_addplan_0'     => 'Новий тарифний план було успішно створено',
    'api_code_acc_addplan_1'     => 'Сталася помилка під час створення тарифного плану',
    'api_code_acc_addplan_2'     => 'Такий тарифний план уже існує',
    'api_code_acc_addplan_3'     => 'Вказано некоректне ім`я тарифного плану',
    'api_code_acc_addplan_4'     => 'Shell містить неправильні значення. Допустимо y/n',
    'api_code_acc_addplan_5'     => 'Вказано некоректну мову. Допустимі значення ua/en',
    'api_code_acc_addplan_10'     => ' - помилка параметра. Допускаються лише цифри 0-9',
    'api_code_acc_delplan_0'     => 'Тарифний план успішно видалено',
    'api_code_acc_delplan_1'     => 'Виникла помилка при видаленні тарифного плану',
    'api_code_acc_delplan_2'     => 'Такого тарифного плану не існує',
    'api_code_acc_delplan_3'     => 'Не вказано ім`я тарифного плану чи воно некоректне',

    'api_code_acc_viewplan_0'     => 'Дані про тарифний план були успішно отримані',
    'api_code_acc_viewplan_1'     => 'Сталася помилка при отриманні даних про тарифний план',
    'api_code_acc_viewplan_2'     => 'Такого тарифного плану не існує',
    'api_code_acc_viewplan_3'     => 'Не вказано ім`я тарифного плану чи воно некоректне',
    'api_code_acc_viewgroup_0'     => 'Дані про групу були успішно отримані',
    'api_code_acc_viewgroup_1'     => 'Виникла помилка при отриманні даних про групу',
    'api_code_acc_viewgroup_2'     => 'Вказана група не була знайдена або не визначена: ',
    'api_code_acc_editgroup_0'     => 'Група була успішно відредагована',
    'api_code_acc_editgroup_1'     => 'Сталася помилка під час редагування групи',
    'api_code_acc_editgroup_2'     => 'Вказана група не була знайдена або не визначена',
    'api_code_acc_editgroup_3'     => ' - помилка у параметрі. Можливо y/n/(порожній рядок)',
    'api_code_acc_addgroup_0'     => 'Нова група була успішно додана',
    'api_code_acc_addgroup_1'     => 'Виникла помилка при додаванні нової групи',
    'api_code_acc_addgroup_2'     => 'Така група вже існує',
    'api_code_acc_addgroup_3'     => 'Вказано некоректне ім`я нової групи',
    'api_code_acc_addgroup_4'     => ' - помилка у параметрі. Можливо y/n/(порожній рядок)',
    'api_code_acc_delgroup_0'     => 'Група була успішно видалена',
    'api_code_acc_delgroup_1'     => 'Виникла помилка при видаленні групи',
    'api_code_acc_delgroup_2'     => 'Такої групи не існує',
    'api_code_acc_delgroup_3'     => 'Не вказано групу для видалення',
    'api_code_acc_suspend_0'     => 'Зазначені блокування були успішно використані для користувача: ',
    'api_code_acc_suspend_1'     => 'Нема чого блокувати для користувача: ',
    'api_code_acc_unsuspend_0'     => 'Зазначені блокування були успішно зняті для користувача: ',
    'api_code_acc_unsuspend_1'     => 'Нема чого знімати для користувача: ',

    'api_code_ipm_listip_0'     => 'Список IP адрес був успішно отриманий',
    'api_code_ipm_listip_1'     => 'Жодної IP адреси не було знайдено',
    'api_code_ipm_addip_0'     => 'Нова IP адреса була успішно додана',
    'api_code_ipm_addip_1'     => 'Виникла помилка при додаванні IP адреси',
    'api_code_ipm_addip_2'     => 'Вказана IP адреса некоректна',
    'api_code_ipm_addip_3'     => 'Вказана маска некоректна',
    'api_code_ipm_delip_0'     => 'Вказана IP адреса була успішно видалена',
    'api_code_ipm_delip_1'     => 'Виникла помилка при видаленні вказаної IP адреси',
    'api_code_ipm_delip_2'     => 'Вказана IP адреса некоректна',

    'api_code_hostacc_manaer2'     => 'Операцію не знайдено',

    'api_code_acc_setplan_ok'     => 'Тарифний план успішно застосований користувачу',
    'api_code_acc_setplan_failed'     => 'Сталася помилка при зміні тарифного плану користувача',

    'apiCode401'     => 'Доступ до панелі закрито через htpasswd. <br/>Виконайте на вибір: <br/>перевірте дані авторизації для htpasswd вище;<br/>в налаштуваннях сервера відключіть Авторизація htpasswd;<br/>додайте IP в дозволені<br/>',
    'apiCode403'     => 'Віддалений доступ до api панелі закрито для вашої IP-адреси. <br/>Будь ласка зв`яжіться з адміністратором.<br/>',
    'apiCodeXXX'     => 'Помилка доступу до api.',
    'api_hostacc_edit_user_err'     => 'Немає значення panel_user',
    'api_empty_cron_id'     => 'Немає cron завдання з номером id =',
	
    
);




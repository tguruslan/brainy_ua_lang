<?php
$lang = array(
    'ipmanager_not_permishion' => 'У Вас недостатньо прав',
    'ipmanager_added' => 'Доданий',
    'ipmanager_error' => 'Помилка. IP вже існує ',
    'ipmanager_deleted' => 'Видалено',
    'ipmanager_ip_exists' => 'IP вже існує',
    'ipmanager_error_data' => 'Помилка у введених даних',
    'ipmanager_del_ip' => 'Неможливо видалити IP, оскільки використовується доменами користувача. Кількість доменів із даними IP: ',
    'ipmanager_del_ip_failed_userset' => 'Неможливо видалити IP, оскільки IP додано до конфігурації користувача. Кількість користувачів із даними IP: ',
    'ipmanager_done_success' => 'Виконано успішно',
    'ipmanager_not_deleted' => 'Неможливо видалити головну IP-адресу',
    'ipmanager_del' => 'Видалити',
    'ipmanager_del_process' => 'Видаляється...',
    'ipmanager_list_ip' => 'Список IP',
    'ipmanager_ip' => 'IP',
    'ipmanager_interface' => 'Мережевий інтерфейс',
    'ipmanager_managment' => 'Управління',
    'ipmanager_list6' => 'Список IPv6',
    'ipmanager_listipv4' => 'Список IPv4',
    'ipmanager_add_ip' => 'Додати нову IP адресу або маршрут',
    'ipmanager_class' => 'Class C CIDR (e.g. 192.168.4.128/25)',
    'ipmanager_ip_n' => 'IP/Netmask (e.g. 192.168.4.128/255.255.255.128)',
    'ipmanager_ip_r' => 'IP Address Range (e.g. 192.168.4.128-255)',
    'ipmanager_ip_adrr' => 'Айпі адреса:',
    'ipmanager_masc' => 'Маска підмережі:',
    'ipmanager_gaterw' => 'Шлюз(опціонально):',
    'ipmanager_exclude' => 'Виключити ip(опціонально):',
    'ipmanager_add_ip_adr' => 'Додати адресу айпі',
    'ipmanager_add_ip_ls' => 'Іде додавання IP. Зачекайте будь-ласка.',
    'ipmanager_pahf_carantin' => 'Шлях до карантину:',
    'ipmanager_text_br' => '<br/>',
    'ipmanager_text_addr' => '<b>Додавання адрес:</b><br/>',
    'ipmanager_text_ipv4_1' => 'При додаванні блоку ipv4 адрес, використовуйте PREFIX для вказівки адреси мережі та бродкасту. Приклад: x.x.x.x<b>/24</b>, При додаванні одиночного адреси ipv4, префікс можете не вказувати. За замовчуванням буде використано /32.<br/>',
    'ipmanager_text_ipv6_1' => 'При додаванні блоку ipv6 адрес, використовуйте PREFIX для вказівки адреси мережі та бродкасту. Приклад: xxxx:xxxx:x::xx<b>/64</b>, При додаванні одиночної адреси ipv6, префікс можете не вказувати. За замовчуванням буде використано /128.<br/>',
    'ipmanager_text_route' => '<br/><b>Додати статичні маршрути:</b><br/>',
    'ipmanager_text_route_s' => 'При додаванні статичного маршруту вкажіть в поле <i>Айпі адресу</i> адресу мережі та PREFIX. Або замість PREFIX маску мережі в полі <i>маска підмережі</i>. У полі шлюзу вказуєте IP шлюзу.<br/>',
    'ipmanager_text2' => '',
    'ipmanager_text3' => '<br/>(При додаванні діапазону ipv6 адрес, у цьому полі ви можете перерахувати адреси, створення яких небажано, розділяючи їх пробілом. Приклад: <b>xxxx:xxxx:x::a xxxx:xxxx: x::b</b><br/>Дані адреси будуть виключені з діапазону)<br/>',

	'ipmanager_refresh_cacheips_stat' => 'Оновити кеш ip',
    'ipmanager_refresh_cacheips_stat_wait' => 'Кеш IP оновлюється',
    'ipmanager_ips_stat' => 'Вільний',
    'ipmanager_error_data_wrongip' => 'Неправильний формат адреси ip',
    'ipmanager_no_ip' => 'Немає ip адрес',
    'ipmanager_nat_ok' => 'Асоційований IP NAT успішно доданий. Віртуальні хости оновлені.',
    'ipmanager_nat_error' => 'Помилка додавання IP NAT.',
    'ipmanager_nat_error0' => 'Помилка додавання IP NAT. Такий пристрій існує.',
    'ipmanager_ipv6_err_nat' => 'Помилка. Не можна додати NAT для IPv6 стека.',
    'ipmanager_ip6_gw' => 'Щоб визначити або змінити маршрут за промовчанням для стека IPv6, вкажіть тут адресу шлюзу у форматі X:X:X:X:X:X:X:X. Інші поля залиште порожніми.',
    
    'ipmanager_msg_code' => 'Код: ',
    'ipmanager_msg_device' => 'Мережевий пристрій: ',
    'ipmanager_new_route_add_ok' => 'Новий маршрут успішно додано.',
    'ipmanager_nat_err_arg' => 'Не можна активувати NAT на VLAN інтерфейсі.',
    'ipmanager_nat_err_vlan' => 'Помилка при додаванні нового інтерфейсу NAT.',
    'ipmanager_nat_err_ip' => 'Помилка при додаванні IP для NAT інтерфейсу.',
    'ipmanager_err_addr' => 'Помилка формату адреси.',
    'ipmanager_add_gw_ok' => 'Новий стандартний шлюз успішно встановлено.',
    'ipmanager_delete_err' => 'Ця адреса не може бути видалена, тому що її використовують віртуальні хости.',
    'ipmanager_vlan_value_err' => 'Неприпустимий індифікатор VLAN. Допустимі значення від 2 до 4000.',
    'ipmanager_vlan_dev_err' => 'Немає такого мережевого пристрою.<br>Допустимі: ',
    'ipmanager_vlan_exists_err' => 'Такий VLAN вже існує.',
    'ipmanager_vlan_add_err' => 'Помилка при додаванні нового VLAN.',
    'ipmanager_vlan_add_ok' => 'Новий VLAN був успішно доданий.',
    'ipmanager_vlan_del_err' => 'Помилка видалення VLAN.<br>Спершу видаліть всі призначені IP адреси.',
    'ipmanager_vlan_del_err0' => 'Помилка видалення VLAN.<br>Код: ',
    'ipmanager_vlan_del_ok' => 'Мережний інтерфейс було успішно видалено.',
    'ipmanager_msg_ipcalc2' => 'Не встановлено пакет ipcalc2. Операції з маршрутами не можливі.',
    'ipmanager_ifname_err' => 'Помилка імені мережного інтерфейсу.',
    'ipmanager_prefix_err' => 'Помилка адреси мережі або префіксу.',
    'ipmanager_route_add_err' => 'Помилка адреси мережі або префіксу.',
    'ipmanager_route_address' => 'Адреса мережі: ',
    'ipmanager_vlan_name_err' => 'Помилка імені мережного інтерфейсу',
    'ipmanager_addr_prefix_err' => 'Помилка адреси, масці мережі або префіксу в айпі.',
    'ipmanager_mask_err' => 'Помилка маски.',

    'ipmanager_route_gw_err' => 'Помилка. Вказана адреса шлюзу не визначена або неправильна.',
    'ipmanager_route_ifgw_err' => 'Помилка. Мережевий інтерфейс зазначеного шлюзу не виявлено.',
    'ipmanager_route_exists_err' => 'Помилка створення нового маршруту. Схоже, що такий уже існує',
    'ipmanager_route_del_err' => 'Помилка видалення мережного маршруту<br>',
    'ipmanager_route_del_ok' => 'Мережевий маршрут видалено.',
    'ipmanager_rule_add_no_err' => 'Правило не встановлено.',
    'ipmanager_rule_add_arg_err' => 'Помилка адреси айпу або мережі.',
    'ipmanager_rule_add_exists' => 'Помилка, таке правило вже існує.',
    'ipmanager_rule_add_err' => 'Помилка створення нового правила.',
    'ipmanager_route_add_dev_err' => 'Помилка параметрів. Не вдалося додати маршрут до таблиці.',
    'ipmanager_route_gateway_err' => 'Помилка у форматі адреси шлюзу.',
    'ipmanager_route_ifname_err' => 'Помилка імені мережі.',
    'ipmanager_route_tabname_err' => 'Помилка імені таблиці.',
    'ipmanager_route_src_err' => 'Помилка мережевої адреси маршруту.',
    'ipmanager_route_default_err' => 'Не вдалося створити новий маршрут за промовчанням.',
    'ipmanager_route_table_err' => 'Не вдалося додати маршрут до таблиці.',
    'ipmanager_rule_del_ok' => 'Правило успішно видалено.',
    'ipmanager_rule_del_err' => 'Помилка видалення правила.',
    'ipmanager_rule_route_err' => 'Не задані аргументи для правила або маршруту.',
    'ipmanager_add_tabname_err' => 'Помилка створення імені таблиці маршрутів.',
    'ipmanager_id_tab_err' => 'Помилка ID таблиці.',
    'ipmanager_add_rule_tab_err' => 'Помилка при додаванні правила до таблиці',
    'ipmanager_add_route_tab_err' => 'Помилка при додаванні маршруту до таблиці',
    'ipmanager_desc_fin_timeout' => 'час збереження сокету у стані FIN-WAIT-2',
    'ipmanager_desc_max_orphans' => 'допустимих у системі сокетів TCP. Кожне orphan з`єднання поглинає 64К нескидається на диск пам`яті',
    'ipmanager_desc_congest' => 'протокол, який використовується для управління навантаженням в мережах TCP (bic,cubic,htcp).Рекомендується використовувати htcp',
    'ipmanager_desc_somaxconn' => 'максимальна кількість відкритих сокетів, що чекають на з`єднання',
    'ipmanager_arg_err' => 'Помилка параметрів.',
    'ipmanager_arg_ok' => 'Нові параметри використані.',

    'ipmanager_auto_sw' => 'Автоматичне завантаження додаткових інтерфейсів та адрес, включаючи інтерфейс NAT',
    'ipmanager_forward_sw' => 'Включити форвардинг між мережними інтерфейсами',
    'ipmanager_ipv6_init' => 'Включити підтримку стека IPv6. Увага! Вимкнення або перезапуск призведе до повного очищення таблиць маршрутизації стека IPv6',
    'ipmanager_scope' => 'Область видимості',
    'ipmanager_route_list' => 'Певні маршрути основної таблиці маршрутизації',
    'ipmanager_no_route' => 'немає певних статичних маршрутів',
    'ipmanager_table_list' => 'Додаткові таблиці правил',
    'ipmanager_no_table' => 'немає таблиць з правилами',
    'ipmanager_table_route_list' => 'Додаткові таблиці маршрутів',
    'ipmanager_table_src' => 'Маршрут',
    'ipmanager_table_gw' => 'Шлюз',
    'ipmanager_table_dev' => 'Мережевий інтерфейс',
    'ipmanager_table_name' => 'Ім`я таблиці',
    'ipmanager_table_id' => 'ID',
    'ipmanager_no_table_route' => 'немає таблиць з маршрутами',
    'ipmanager_vlan_list' => 'Список VLAN',
    'ipmanager_vlan' => 'VLAN',
    'ipmanager_vlan_up' => 'Link(Up/Down)',
    'ipmanager_no_vlan' => 'немає певних VLAN інтерфейсів',
    'ipmanager_add_vlan' => 'Додати новий VLAN',
    'ipmanager_interface_core' => 'Мережний пристрій:',
    'ipmanager_id_vlan' => 'ID індифікатор (число від 2 до 4000)',
    'ipmanager_add_vlan_btn' => 'Додати VLAN',
    'ipmanager_add_vlan_info' => 'Додається...',
    'ipmanager_tbl_id_table' => 'ім`я нової таблиці або існуючої:',
    'ipmanager_tbl_id_rule' => '(from)IPv4,або IPv6 адреса для правила:',
    'ipmanager_tbl_id_route' => 'адреса маршруту:',
    'ipmanager_tbl_id_route_gw' => 'шлюз для маршруту:',
    'ipmanager_tbl_id_route_dev' => 'мережевий інтерфейс для маршруту:',
    'ipmanager_add_troute_btn' => 'Додати Правило/Маршрут',
    'ipmanager_add_table_info' => 'Додається...',
    'ipmanager_ip_nat' => 'Асоціювати цей IP з NAT (в поле <i>Айпі адреса</i> вкажіть зовнішню(WLAN) адресу роутера)',
    'ipmanager_change_args' => 'Мережеві Параметри Ядра (для експертів)',
    'ipmanager_change_args_btn' => 'Застосувати',
    'ipmanager_change_args_info' => 'Застосовується...',

    'ipmanager_text_table_rule_title' => '<b>Додавання нового правила:</b><br>',
    'ipmanager_text_table_rule' => 'Щоб додати нове правило вкажіть у полі ім`я таблиці, нової або існуючої, та адресу правила у форматі IPv4 або IPv6 плюс /PREFIX.<br>На даний момент підтримується тільки from.',
    
    'ipmanager_text_table_route_def_title' => '<b>Додати маршрут за промовчанням:</b><br>',
    'ipmanager_text_table_route_def' => 'Вкажіть ім`я таблиці, шлюз та мережевий пристрій. У полі <i>Адреса для маршруту</i> вкажіть ключове слово <b>default</b>. Поле правило залиште порожнім.',
    'ipmanager_error_remove_ip_cluster' => 'Помилка видалення ip, цей ip доданий до кластера. Будь ласка, змінити призначення айпі з розділу Кластер IP, після чого ви зможете його видалити.',
    'ipmanager_confirm_ipdel' => 'Ви дійсно хочете видалити цей IP',
    'ipmanager_ipmanager_noroute'=>'Прапори',
    'ipmanager_masktitle' => 'Маска',
    'ipmanager_ruletitle' => 'Правило',
    'ipmanager_addrouteorrule'=>'Додати Маршрут або Правило до таблиці',
    'ipmanager_addhintipv6'=>'Для ipv6 вкажіть адресу одного шлюзу, щоб визначити або змінити маршрут за промовчанням.',
    'ipmanager_mainbase' => 'основний',
    'ipmanager_ipv6notexist'=>'немає ipv6 адрес',
    'ipmanager_vlannotexist'=>'немає VLAN інтерфейсів',
    'ipmanager_routenotexist'=>'немає певних маршрутів',
    'ipmanager_tablenotexist'=>'немає певних таблиць',
    'ipmanager_paramwitherr'=>'Параметри містять помилку',
    'ipmanager_nat_dhcp' => 'Протокол NAT не може бути активований на інтерфейсі з активним протоколом DHCP. ',
	
    'ipmanager_confirm_disabled_autoload_interfases' => 'Підтвердіть вимкнення цієї функції.<br> При перезавантаженні сервера додані ip, не будуть додані',
    'ipmanager_confirm_enabled_autoload_interfases' => 'Підтвердіть увімкнення цієї функції.<br>',
    'ipmanager_forward_disabled' => 'Форвардинг успішно вимкнено.',
    'ipmanager_forward_enabled' => 'Форвардинг успішно увімкнено.',
    'ipmanager_stek_ipv6_disabled' => 'Стек IPv6 Вимкнено',
    'ipmanager_stek_ipv6_enabled' => 'Стек IPv6 Увімкнено',
    'ipmanager_mask' => 'Маска',
    'ipmanager_code' => 'Код',
    'ipmanager_gateway' => 'Шлюз',
    'ipmanager_enabled_ipv6' => 'Включити підтримку IPv6',
    'ipmanager_autoload_ipv6' => 'Автозапуск підтримки IPv6',
    'ipmanager_err_add_route' => 'Помилка додавання маршруту на шлюз:<br>',
    'ipmanager_err_mask_prefix' => 'Помилка - немає маски мережі або префікса',
    'ipmanager_err_delete_route' => 'Помилка видалення маршруту',
    'ipmanager_add_ip_1' => 'Ip адреса додана.<br><br>',
    'ipmanager_err_netmask_ipv6' => 'IPv6 не підтримує маску мережі, використовуйте префікс',
    'iptables_rule_del_ok' => 'Успішно видалено.',
    'iptables_correct_range' => 'Вкажіть правильний діапазон.',
    'iptables_range_add' => 'Додавання діапазону або списку ip адрес',
    'ipmanager_range_add_text' => 'При додаванні діапазону ipv4 адрес. Приклад: 192.168.1.10-192.168.1.40. При додаванні діапазону ipv4 адрес, префікс можете не вказувати, буде використаний /32.',
    'ipmanager_range_add_exclude' => 'Поле виключити, виключає ip адреси з діапазону, додавати через пробіл , або ;',
    'ipmanager_err_add_range_ip' => 'Помилка додавання вибраних ip:<br>',
    'ipmanager_range_add_text2' => 'При додаванні списку ip адрес. Приклад: 192.168.1.10,192.168.1.40 розділником є (пробіл , або ;) префікс можете не вказувати, для ipv4 буде використаний /32, для ipv6 /128',
    'ipmanager_rule_add_succ' => 'Правило успішно додано.',
    'ipmanager_err_packet_ipcalc' => 'Не встановлено пакет ipcalc2.',
    'ipmanager_err_add_route_ipv6' => 'Помилка додавання ipv6 маршруту.<br>',
    'ipmanager_add_success_table' => 'Правило до таблиці успішно додано.<br>Для додавання маршруту заповніть відповідні поля.',
	
);
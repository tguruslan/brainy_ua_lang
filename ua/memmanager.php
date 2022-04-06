<?php

$lang = array(
    'tpl_memmanager_header' => 'Менеджер ресурсів сервера',
    'tpl_memmanager_huge' => 'Налаштування ресурсів для Huge Pages Memory',
    'tpl_memmanager_save' => 'Застосувати',
    
    'tpl_memmanager_httpd' => 'Налаштування ресурсів для Apache та MPM модулів',
    'tpl_memmanager_mess0' => '* Змінюючи MaxMemFree, ви повинні розуміти, що робите. Рекомендовано залишити </br>це значення за промовчанням.',
    
    'tpl_memmanager_nginx' => 'Налаштування ресурсів для NGINX',
    'tpl_memmanager_cache_purge' => 'Підключити модуль CACHE PURGE для NGINX',
    'tpl_memmanager_push_stream' => 'Підключити модуль PUSH STREAM для NGINX',
    'tpl_memmanager_pagespeed' => 'Підключити модуль PAGE SPEED для NGINX',
    'tpl_memmanager_brotli_filter' => 'Підключити модуль BROTLI FILTER та BROTLI STATIC для NGINX',
    
    'tpl_memmanager_ngx_http_cache_purge' => 'Підключити модуль CACHE PURGE для NGINX',
    'tpl_memmanager_ngx_http_push_stream' => 'Підключити модуль PUSH STREAM для NGINX',
    'tpl_memmanager_ngx_pagespeed' => 'Підключити модуль PAGE SPEED для NGINX',
    'tpl_memmanager_ngx_http_brotli_filter' => 'Підключити модуль BROTLI FILTER та BROTLI STATIC для NGINX',
    
    'tpl_memmanager_nginx_no' => ' * УВАГА! NGINX не встановлено',
    'tpl_memmanager_http_no' => ' * УВАГА! Apache не встановлено',
    'tpl_memmanager_http_noconf' => '* УВАГА! Apache встановлено, але конфігураційний файл не виявлено. </br>&nbsp;&nbsp;&nbsp;Оновіть панель до останньої версії та перевстановіть Web зв`язку заново',
    
    'tpl_memmanager_hg_nopkg' => ' * УВАГА! не встановлений менеджер пам`яті',
    'tpl_memmanager_hg_nosrv' => ' * УВАГА! Менеджер пам`яті встановлено. Але, схоже, він не активований. </br>Спробуйте з консолі дати команду: <b><i>systemctl enable transparent-huge-pages</i></b> Після цього перевантажте сервер.',
    'tpl_memmanager_memcached_nopkg' => ' * УВАГА! не встановлено memcached',
    'tpl_memmanager_memcached_noconf' => ' * УВАГА! не знайдено конфігураційний файл',
    'tpl_memmanager_memcached_nodata' => ' * УВАГА! не знайдено файл даних',
    
    'memmanager_hgpg' => 'Кількість сторінок Huge Pages:',
    'memmanager_hgpg_size' => 'Встановлений ядром розмір однієї сторінки Huge Pages (в Кб):',
    
    'memmanager_http_MaxMemFree' => '<b>MaxMemFree</b> - кількість пам`яті для одного потоку в kb, після чого вона буде звільнена </br>якщо 0 або не визначено, кількість пам`яті на потік не обмежена (не рекомендується):' ,
    
    'memmanager_http_StartServers' => '<b>StartServers</b> - кількість процесів під час старту:',
    'memmanager_http_MinSpareServers' => '<b>MinSpareServers</b> - мінімальна кількість запущених серверних процесів для резерву:',
    'memmanager_http_MaxSpareServers' => '<b>MaxSpareServers</b> - максимальна кількість запущених серверних процесів для резерву:',
    'memmanager_http_MaxRequestWorkers' => '<b>MaxRequestWorkers</b> - максимальна кількість серверних процесів, дозволених для запуску або потоків:',
    'memmanager_http_MaxConnectionsPerChild' => '<b>MaxConnectionsPerChild</b> - максимальна кількість з`єднань на процес, після чого він буде перезапущений:',
    
    'memmanager_http_MinSpareThreads' => '<b>MinSpareThreads</b> - мінімальна кількість робочих потоків, які залишаються резервними:',
    'memmanager_http_MaxSpareThreads' => '<b>MaxSpareThreads</b> - максимальна кількість робочих потоків, які залишаються резервними:',
    'memmanager_http_ThreadsPerChild' => '<b>ThreadsPerChild</b> - постійна кількість робочих потоків у кожному серверному процесі:',
    
    'memmanager_http_ServerLimit' => '<b>ServerLimit</b> - максимальна кількість створених процесів:',
    'memmanager_http_MaxClients' => '<b>MaxClients</b> - максимальна кількість з`єднань, яка може обробити процес:',

    'memmanager_http_loadconfDef_err0' => 'Помилка завантаження файлу за замовчуванням або порушення цілісності структури даних на панелі: АН1501',
    'memmanager_http_loadconfDef_err1' => 'Помилка завантаження конфігураційного файлу. Порушено цілісність структури: АН1502',
    'memmanager_http_loadconfDef_noerror' => 'Дані за замовчуванням успішно завантажені, конфігураційні файли відновлені. Натисніть застосувати для активації.',
    'memmanager_http_saveconf_err' => 'Сталася помилка перезапуску. Можливо, деякі змінені параметри виходять за межі допустимих.',
    'memmanager_http_save_err_parms' => 'Значення:',
    
    'js_memmanager_http_alert' => 'Нові значення будуть збережені. Ваш Apache буде перезапущено з новими значеннями зараз.',
    'js_memmanager_http_setdef_alert' => 'Відновити стандартні значення. Ваш Apache буде перезапущено з початковими значеннями зараз.',
    'js_memmanager_nginx_alert' => 'Нові значення будуть збережені. Ваш NGINX буде перезапущено з новими значеннями зараз.',
    'js_memmanager_cache_alert' => 'Нові значення будуть збережені. Ваш MEMCACHED буде перезапущено з новими значеннями зараз.',
    
    'memmanager_ng_worker_processes' => '<b>worker_processes</b> - кількість процесів',
    'memmanager_ng_worker_connections' => '<b>worker_connections</b> - кількість з`єднань на процес',
    
    'msg_memmanager_run_ok' => 'Зміни успішно застосовані. Вони набувають чинності негайно.',
    'msg_memmanager_conf_err' => 'УВАГА! Конфігураційний файл не виявлено.',
    'msg_memmanager_args_err' => 'УВАГА! Виявлено помилку в заданих значеннях:',
    'msg_memmanager_args_err0' => 'УВАГА! Виявлено помилку в аргументах.',
    
    'js_memmanager_stat_wait' => 'зміна версії. зачекайте...',
    'js_memmanager_stat_wait_ajax' => ' завантаження даних. зачекайте...',
    'js_memmanager_save_wait' => ' йде збереження. зачекайте...',
    
    'tpl_memmanager_cache_header' => 'Вибрати режим роботи:',
    'tpl_memmanager_memcache' => 'Налаштування ресурсів Memcached',
    'tpl_memmanager_memcache_tcp' => 'робота через порт TCP',
    'tpl_memmanager_memcache_uds' => 'робота через сокет UDS',
    
    'tpl_memmanager_cache_port' => '<b>Port</b> - порт TCP:',
    'tpl_memmanager_cache_conn' => '<b>maxconn</b> - максимально допустима кількість з`єднань:',
    'tpl_memmanager_cache_size' => '<b>cachesize</b> - розмір кеша в МБ:',
    'tpl_memmanager_cache_ips' => 'Список прослуховуваних IP розділених комами в режимі TCP:</br><i>за замовчуванням - 127.0.0.1,::1 (рекомендовано)</i>',
    'tpl_memmanager_cache_uds' => 'Шлях до сокету UDS у режимі UDS:</br><i>за промовчанням - /var/run/memcached/memcached.socket (рекомендовано)</i>',
    
    'memmanager_module_header' => 'Доступні версії модуля Push Stream для NGINX:',
    'tpl_memmanager_module_header' => 'Доступні версії модуля Push Stream для NGINX:',
    'tpl_ngx_push_ver_040' => 'Версія Push Stream 0.40',
    'tpl_ngx_push_ver_041' => 'Версія Push Stream 0.41',
    'tpl_ngx_push_ver_053' => 'Версія Push Stream 0.53',
    'tpl_ngx_mod_current' => 'Встановлена версія модуля: ',
    'tpl_ngx_mod_cur_err' => 'модуль не встановлений або некоректний',
    'tpl_memmanager_mod_save_ngx' => 'Встановити/Змінити версію',
    'memmanager_ngx_mod_nopkg' => 'не встановлено',
    'memmanager_ngx_mod_instpkg' => 'встановлений',
    
    'memmanager_setupversionmodule' =>'Встановлена версія модуля:',
    'memmanager_changesetup' =>'Змінити/Встановити',
    'memmanager_notsetuporincorrect' =>'(модуль не встановлений або некоректний)',
    'memmanager_selecttypework' =>'Вибрати режим роботи:',
    'memmanager_setdefault' =>'Скинути за замовчуванням',
    
    'memmanager_cache_saveconf_err0' => 'Увага! Помилка параметрів. У змінах відмовлено.',
    'memmanager_cache_saveconf_err1' => 'Увага! Конфігураційний файл не знайдено. У змінах відмовлено.',
    'memmanager_cache_saveconf_err' => 'Увага! Помилка в налаштуваннях.</br>Немає каталогу для зберігання сокету UDS',
    'memmanager_cache_saveact_err' => 'Сталася помилка перезапуску. Можливо, деякі змінені вами параметри виходять за межі допустимих.',
    'memmanager_cache_saveact_ok' => 'Зміни успішно застосовані.</br>Тип встановленого робочого протоколу:',
    'js_memmanager_cache_setdef_alert' => 'Відновити стандартні значення. Memcached буде перезапущено з початковими значеннями зараз.',

    'tpl_memmanager_btn_wait'	=> '',
);

